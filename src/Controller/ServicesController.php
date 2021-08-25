<?php


namespace App\Controller;


use App\Repository\ServiceRepository;
use App\Repository\SubscriptionRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
        //hardcoded logged user for this test task
        $user = $userRepository->find(1);

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
}
