<?php

namespace App\Controller;

use App\Entity\Subscription;
use App\Entity\Transaction;
use App\Form\SubscriptionFormType;
use App\Repository\ServiceRepository;
use App\Repository\SubscriptionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
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
        Request $request,
        EntityManagerInterface $em,
        UserRepository $userRepository,
        ServiceRepository $serviceRepository,
        SubscriptionRepository $subscriptionRepository
    )
    {
        //hardcoded logged user for this test task
        $user = $userRepository->find(1);


        $serviceId = intval($request->query->get('serviceId'));
        // todo Валидация на корректность serviceId
        if ($serviceId) {
            $form = $this->createForm(SubscriptionFormType::class, null, [
                'method' => 'POST',
            ]);
            $service = $serviceRepository->find($serviceId);

        }
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            if (($subscriptionRepository->isNotSubscribed($user, $service))) {
                $subscription = $form->getData();
                $subscription->setService($service);
                $subscription->setUser($user);
                $total = $subscription->getQuantity() * $service->getPrice();
                if ($user->getBalance() >= $total) {
                    $em->persist($subscription);
                    $em->flush();
                    //todo Запись транзакции с учетом даты
                    $transaction = new Transaction();
                    $transaction
                        ->setPeriod(date('mY'))
                        ->setAmount($total)
                        ->setService($service)
                        ->setUser($user)
                    ;
                    $em->persist($transaction);
                    $em->flush();
                    $user->setBalance($user->getBalance()-$total);
                    $em->persist($transaction);
                    $em->flush();
                }
                //todo Обработка ошибки "Недостаточно средств на балансе"
            }
            //todo Обработка ошибки "Уже подписан"

            return $this->redirectToRoute('app_services_index');

        }

        return $this->render('create.html.twig', [
            'subscriptionForm' => $form->createView(),
            'title' => 'Подписка на услугу',
            'user' => $user,
            'service' => $service,
        ]);

        return $this->redirectToRoute('app_services_index');
    }

    /**
     * @Route("/delete", methods={"POST"})
     */
    public function delete(Request $request, EntityManagerInterface $entityManager, SubscriptionRepository $subscriptionRepository)
    {
        $subscriptionId = intval($request->get('delete'));
        //todo Валидация данных POST

        //todo в шаблоне вывод подтверждения удаления
        $subscription = $subscriptionRepository->find($subscriptionId);
        $entityManager->remove($subscription);
        $entityManager->flush();
        return $this->redirectToRoute('app_services_index');
    }
}
