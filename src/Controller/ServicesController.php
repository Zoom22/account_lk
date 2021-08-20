<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'title' => 'Личный кабинет',
            'year' => date('Y'),
        ]);
    }

    /**
     * @Route("/transactions")
     *
     */
    public function transactions()
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
        return $this->render("transactions.html.twig", [
            'title' => 'История операций',
            'year' => date('Y'),
            'transactions' => $transactions,
        ]);
    }
}