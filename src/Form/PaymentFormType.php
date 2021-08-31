<?php

namespace App\Form;

use Carbon\Carbon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class PaymentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $paymentMonth = [];
        for ($i = 1; $i <= 3; $i++) {
            $date = Carbon::now()->addMonthNoOverflow($i)->locale('ru_RU');
            $paymentMonth += [$date->monthName . ' ' . $date->format('Y') . ' г.' => $date->format('mY')];
        }
        $builder
            ->add('month', ChoiceType::class, [
                'choices' => $paymentMonth,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Оплатить',
                'attr' => [
                    'class' => 'btn-success'
                ],
            ]);
    }

}
