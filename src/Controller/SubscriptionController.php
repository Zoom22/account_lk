<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Form\SubscriptionFormType;
use App\Repository\ServiceRepository;
use App\Repository\SubscriptionRepository;
use App\Repository\TransactionRepository;
use App\Repository\UserRepository;
use Carbon\Carbon;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubscriptionController extends AbstractController
{

    /**
     * @Route("/add")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param UserRepository $userRepository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */

    public function add(
        Request                $request,
        EntityManagerInterface $em,
        UserRepository         $userRepository,
        ServiceRepository      $serviceRepository,
        SubscriptionRepository $subscriptionRepository
    )
    {
        $serviceId = intval($request->query->get('serviceId'));
        if ($serviceId) { //Is get serviceId exist?
            $service = $serviceRepository->find($serviceId);

            if ($service) { //Is valid service exist?
                $user = $userRepository->getUser();

                $form = $this->createForm(SubscriptionFormType::class, null, [
                    'method' => 'POST',
                ]);
                $form->handleRequest($request);

                if (
                    $form->isSubmitted()
                    && $form->isValid()
                    && $subscriptionRepository->isNotSubscribed($user, $service)
                ) {
                    $subscription = $form->getData();
                    $subscription->setService($service);
                    $subscription->setUser($user);
                    $period = Carbon::now()->diffInDays(Carbon::parse('first day of next month')) / (Carbon::now()->daysInMonth);
                    $total = round($subscription->getQuantity() * $service->getPrice() * $period, 0);
                    if ($user->getBalance() >= $total) {
                        $em->persist($subscription);
                        $em->flush();
                        $transaction = new Transaction();
                        $transaction
                            ->setPeriod(date('mY'))
                            ->setAmount($total)
                            ->setService($service)
                            ->setResult($user->getBalance() - $total)
                            ->setUser($user);
                        $em->persist($transaction);
                        $user->setBalance($user->getBalance() - $total);
                        $em->persist($user);
                        $em->flush();
                        return $this->redirectToRoute('app_services_index');
                    } else {
                        return $this->redirectToRoute('app_services_index');
                    }
                }
                return $this->render('create.html.twig', [
                    'subscriptionForm' => $form->createView(),
                    'title' => 'Подписка на услугу',
                    'user' => $user,
                    'service' => $service,
                ]);
            }
        }

        return $this->redirectToRoute('app_services_index');

    }

    /**
     * @Route("/delete", methods={"POST"})
     */
    public function delete(
        Request                $request,
        EntityManagerInterface $em,
        SubscriptionRepository $subscriptionRepository,
        TransactionRepository  $transactionRepository,
        UserRepository         $userRepository
    )
    {
        $subscriptionId = intval($request->get('delete'));
        if ($subscriptionId) {
            $subscription = $subscriptionRepository->find($subscriptionId);

            if ($subscription) {
                $user = $userRepository->getUser();

                //Current month refund
                $period = Carbon::now()->diffInDays(Carbon::parse('first day of next month')) / (Carbon::now()->daysInMonth);
                $total = round($subscription->getQuantity() * $subscription->getService()->getPrice() * $period, 0);
                $user->setBalance($user->getBalance() + $total);
                $em->persist($user);
                $refundTransaction = new Transaction();
                $refundTransaction
                    ->setPeriod(date('mY'))
                    ->setAmount(-$total)
                    ->setService($subscription->getService())
                    ->setResult($user->getBalance())
                    ->setUser($user);
                $em->persist($refundTransaction);

                //Next months refund
                $transactions = $transactionRepository->findNextMonthsPayments($subscription->getService(), $user);
                foreach ($transactions as $transaction) {
                    $total = $transaction->getAmount();
                    $user->setBalance($user->getBalance() + $total);
                    $refundTransaction = new Transaction();
                    $refundTransaction
                        ->setPeriod($transaction->getPeriod())
                        ->setAmount(-$total)
                        ->setService($transaction->getService())
                        ->setResult($user->getBalance())
                        ->setUser($user);
                    $em->persist($refundTransaction);
                }

                $em->remove($subscription);
                $em->flush();
            }
        }
        return $this->redirectToRoute('app_services_index');
    }
}
