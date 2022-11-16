<?php


namespace App\Controller;


use App\Repository\ServiceRepository;
use App\Repository\SubscriptionRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"})
     */
    public function index(
        UserRepository         $userRepository,
        SubscriptionRepository $subscriptionRepository,
        ServiceRepository      $serviceRepository
    ): Response
    {
        $user = $userRepository->getUser();

        $subscriptions = $subscriptionRepository->findBy(['user' => $user]);

        $services = $serviceRepository->findNotSubscribed($user);

        $total = 0;
        foreach ($subscriptions as $subscription) {
            $total += $subscription->getQuantity() * $subscription->getService()->getPrice();
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
