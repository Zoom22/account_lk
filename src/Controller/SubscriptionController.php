<?php

namespace App\Controller;

use App\Entity\Service;
use App\Entity\Subscription;
use App\Repository\ServiceRepository;
use App\Repository\SubscriptionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubscriptionController extends AbstractController
{

    /**
     * @Route("/add/{id<\d+>}", methods={"POST"})
     *
     */
    public function addService(
        Service $service,
        UserRepository $userRepository,
        SubscriptionRepository $subscriptionRepository,
        ServiceRepository $serviceRepository,
        EntityManagerInterface $entityManager)
    {

        //hardcoded logged userId for this test task
        $userId = 1;
        $user = $userRepository->find($userId);

        //получать данные из POST

        //Перед добавлением валидация на отсутствие подписки и наличие денег на балансе

        // + к этому обработка ошибок

        $subscription = new Subscription();
        $subscription->setUser($user)->setService($service)->setQuantity(rand(1,10)*10);
        $entityManager->persist($subscription);
        $entityManager->flush();

        return $this->redirectToRoute('app_services_index');
    }
}
