<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Form\SubscriptionFormType;
use App\Form\TransactionFilterFormType;
use App\Repository\ServiceRepository;
use App\Repository\TransactionRepository;
use App\Repository\UserRepository;
use Carbon\Carbon;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransactionController extends AbstractController
{
    /**
     * @Route("/transactions", name="transactions")
     * @param UserRepository $repository
     * @param TransactionRepository $transactionsRepository
     * @return Response
     */

    public function index(Request $request, UserRepository $userRepository, TransactionRepository $transactionsRepository, ServiceRepository $serviceRepository): Response
    {
        $user = $userRepository->getUser();

        $form = $this->createForm(TransactionFilterFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            extract($request->request->get('transaction_filter_form'));

            $qb = $transactionsRepository->createQueryBuilder('t');
            if (!empty($start)) {
                $qb->andWhere('t.createdAt >= :start')
                    ->setParameter('start', Carbon::parse($start));
            }
            if (!empty($end)) {
                $qb->andWhere('t.createdAt <= :end')
                    ->setParameter('end', Carbon::parse($end)->addDay());
            }
            if (!empty($serviceId)){
                $service = $transactionsRepository->find($serviceId)->getService();
                $qb->andWhere('t.service = :service')
                    ->setParameter('service', $service);
            }
            $transactions = $qb
                ->andWhere('t.user = :user')
                ->setParameter('user', $user)
                ->getQuery()
                ->getResult();
        } else {
            $transactions = $transactionsRepository->findBy(['user' => $user]);
        }
        return $this->render("transaction/index.html.twig", [
            'title' => 'История операций',
            'user' => $user,
            'transactions' => $transactions,
            'filterForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/deposit")
     * @param UserRepository $userRepository
     * @return Response
     */
    public function deposit(Request $request, UserRepository $userRepository, EntityManagerInterface $em)
    {
        $user = $userRepository->getUser();

        $deposit = intval($request->request->get('deposit'));

        //todo Валидация на положительное число, обработка ошибки
        if ($deposit > 0) {
            $user->setBalance($user->getBalance() + $deposit);
            $em->flush();

            $transaction = new Transaction();
            $transaction
                ->setPeriod(date('mY'))
                ->setAmount($deposit)
                ->setResult($user->getBalance())
                ->setUser($user)
            ;
            $em->persist($transaction);
            $em->flush();

            return $this->redirectToRoute('app_services_index');
        }
        return $this->render('transaction/deposit.html.twig', [
            'title' => 'Пополнение баланса',
            'user' => $user,
        ]);
    }

}
