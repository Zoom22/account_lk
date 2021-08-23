<?php


namespace App\Controller;


use App\Entity\Service;
use App\Entity\Subscription;
use App\Repository\ServiceRepository;
use App\Repository\SubscriptionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(
        UserRepository $userRepository,
        SubscriptionRepository $subscriptionRepository,
        ServiceRepository $serviceRepository
    )
    {
        //hardcoded logged userId for this test task
        $userId = 1;

        $user = $userRepository->find($userId);
        $subscriptions = $subscriptionRepository->findBy(['user' => $user]);

        $services = $serviceRepository->findNotSubscribed($user);

        $total = 0;
        foreach ($subscriptions as $subs) {
            $total += $subs->getQuantity() * $subs->getService()->getPrice();
        }

        return $this->render('index.html.twig', [
            'title' => 'Личный кабинет',
            'user' => $user,
            'subscriptions' => $subscriptions,
            'total' => $total,
            'services' => $services,
        ]);
    }

    /**
     * @Route("/transactions")
     *
     */
    public function transactions(UserRepository $repository)
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
        return $this->render("transactions.html.twig", [
            'title' => 'История операций',
            'user' => $user,
            'transactions' => $transactions,
        ]);
    }
}