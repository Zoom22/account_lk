<?php

namespace App\Controller;

use App\Entity\Subscription;
use App\Entity\Transaction;
use App\Entity\User;
use App\Form\PaymentFormType;
use App\Form\TransactionFilterFormType;
use App\Repository\SubscriptionRepository;
use App\Repository\TransactionRepository;
use App\Repository\UserRepository;
use Carbon\Carbon;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransactionController extends AbstractController
{
    /**
     * @Route("/transactions")
     * @param Request $request
     * @param UserRepository $userRepository
     * @param TransactionRepository $transactionsRepository
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function index(
        Request               $request,
        UserRepository        $userRepository,
        TransactionRepository $transactionsRepository,
        PaginatorInterface    $paginator
    ): Response
    {
        $user = $userRepository->getUser();

        $form = $this->createForm(TransactionFilterFormType::class, null, ['method' => 'GET']);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $filters = $request->query->get('transaction_filter_form');

            $qb = $transactionsRepository->createQueryBuilder('transaction');
            if (!empty($filters['start'])) {
                $qb->andWhere('transaction.createdAt >= :start')
                    ->setParameter('start', Carbon::parse($filters['start']));
            }
            if (!empty($filters['end'])) {
                $qb->andWhere('transaction.createdAt <= :end')
                    ->setParameter('end', Carbon::parse($filters['end'])->addDay());
            }
            if (!empty($filters['serviceId'])) {
                $service = $transactionsRepository->find($filters['serviceId'])->getService();
                $qb->andWhere('transaction.service = :service')
                    ->setParameter('service', $service);
            }
            $transactions = $qb
                ->andWhere('transaction.user = :user')
                ->setParameter('user', $user)
                ->orderBy('transaction.createdAt', 'DESC')
                ->getQuery()
                ->getResult()
            ;
        } else {
            $transactions = $transactionsRepository->findBy(['user' => $user]);
        }

        $pagination = $paginator->paginate(
            $transactions, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );

        return $this->render("transaction/index.html.twig", [
            'title' => '?????????????? ????????????????',
            'user' => $user,
            'pagination' => $pagination,
            'filterForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/deposit")
     * @param Request $request
     * @param UserRepository $userRepository
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function deposit(
        Request                $request,
        UserRepository         $userRepository,
        EntityManagerInterface $em
    ): Response
    {
        $user = $userRepository->getUser();

        $deposit = intval($request->request->get('deposit'));

        if (!empty($deposit) && $deposit > 0) {
            $user->setBalance($user->getBalance() + $deposit);
            $transaction = new Transaction();
            $transaction
                ->setPeriod(date('mY'))
                ->setAmount($deposit)
                ->setResult($user->getBalance())
                ->setUser($user);
            $em->persist($transaction);
            $em->flush();

            return $this->redirectToRoute('app_services_index');
        }
        return $this->render('transaction/deposit.html.twig', [
            'title' => '???????????????????? ??????????????',
            'user' => $user,
        ]);
    }

    /**
     * @Route("/payment")
     * @param Request $request
     * @param UserRepository $userRepository
     * @param SubscriptionRepository $subscriptionRepository
     * @param TransactionRepository $transactionRepository
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function payment(
        Request                $request,
        UserRepository         $userRepository,
        SubscriptionRepository $subscriptionRepository,
        TransactionRepository  $transactionRepository,
        EntityManagerInterface $em
    ): Response
    {
        $user = $userRepository->getUser();

        $form = $this->createForm(PaymentFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $month = intval($request->request->get('payment_form')['month']);
            $subscriptions = $subscriptionRepository->findBy(['user' => $user]);
            $transactions = $transactionRepository->findBy(['user' => $user, 'period' => $month]);
            $total = 0;
            $balance = $user->getBalance();
            foreach ($subscriptions as $subscription) {
                if (empty($transactions)) {
                    list($transaction, $amount, $total) = $this->prepareTransaction($subscription, $total, $month, $user, $em);
                } else {
                    $payed = false;
                    foreach ($transactions as $transaction) {
                        if ($subscription->getService()->getId() == $transaction->getService()->getId()) {
                            $payed = true;
                            break;
                        }
                    }
                    if (!$payed) {
                        list($transaction, $amount, $total) = $this->prepareTransaction($subscription, $total, $month, $user, $em);
                    }
                }
            }
            if ($total <= $balance) {
                $em->flush();
                return $this->redirectToRoute('app_transaction_index');
            } else {
                $user->setBalance($balance);
            }
        }

        return $this->render("transaction/payment.html.twig", [
            'title' => '?????????????????? ????????',
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param Subscription $subscription
     * @param $total
     * @param int $month
     * @param User|null $user
     * @param EntityManagerInterface $em
     * @return array
     */
    private function prepareTransaction(Subscription $subscription, $total, int $month, ?User $user, EntityManagerInterface $em): array
    {
        $transaction = new Transaction();
        $amount = $subscription->getQuantity() * $subscription->getService()->getPrice();
        $total += $amount;
        $transaction
            ->setPeriod($month)
            ->setAmount($amount)
            ->setService($subscription->getService())
            ->setResult($user->getBalance() - $amount)
            ->setUser($user);
        $user->setBalance($user->getBalance() - $amount);
        $em->persist($transaction);
        $em->persist($user);

        return [$transaction, $amount, $total];
    }

}
