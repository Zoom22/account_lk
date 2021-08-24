<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Repository\TransactionRepository;
use App\Repository\UserRepository;
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

    public function index(UserRepository $repository, TransactionRepository $transactionsRepository): Response
    {

        $transactions = [
            [
                'id' => 1,
                'date' => '30.06.2021',
                'service' => 'Домофон',
                'period' => 'июль',
                'price' => 150,
                'balance' => 500,
            ],
            [
                'id' => 2,
                'date' => '30.06.2021',
                'service' => 'Лифт',
                'period' => 'июль',
                'price' => 160,
                'balance' => 340,
            ],
            [
                'id' => 3,
                'date' => '31.07.2021',
                'service' => 'Домофон',
                'period' => 'август',
                'price' => 150,
                'balance' => 500,
            ],
            [
                'id' => 4,
                'date' => '31.07.2021',
                'service' => 'Лифт',
                'period' => 'август',
                'price' => 160,
                'balance' => 340,
            ],
        ];

        $user = $repository->find(1);

        $transactions = $transactionsRepository->findBy(['user' => $user]);

        return $this->render("transaction/index.html.twig", [
            'title' => 'История операций',
            'user' => $user,
            'transactions' => $transactions,
        ]);
    }

    /**
     * @Route("/deposit")
     * @param UserRepository $userRepository
     * @return Response
     */
    public function deposit(Request $request, UserRepository $userRepository, EntityManagerInterface $em)
    {
        $user = $userRepository->find(1);
        $deposit = intval($request->request->get('deposit'));

        //todo Валидация на положительное число, обработка ошибки
        if ($deposit > 0) {
            $user->setBalance($user->getBalance() + $deposit);
            $em->flush();

            $transaction = new Transaction();
            $transaction
                ->setPeriod(date('mY'))
                ->setAmount($deposit)
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
