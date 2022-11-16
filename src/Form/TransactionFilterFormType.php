<?php

namespace App\Form;

use App\Entity\Transaction;
use App\Repository\TransactionRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransactionFilterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start', DateType::class, [
                'label' => 'Фильтр по датам:',
                'widget' => 'single_text',
                'format' => 'dd.mm.yyyy',
                'html5' => false,
                'attr' => [
//                    'class' => 'hasDatepicker',
                    'placeholder' => 'Начало',
                    ],
                'required' => false,
            ])
            ->add('end', DateType::class, [
                'label' => ' ',
                'widget' => 'single_text',
                'format' => 'dd.mm.yyyy',
                'html5' => false,
                'attr' => [
//                    'class' => 'hasDatepicker',
                    'placeholder' => 'Конец',
                    'required' => false,
                ],
                'required' => false,
            ])
            ->add('serviceId', EntityType::class, [
                'label' => 'Фильтр по услуге:',
                'class' => Transaction::class,
                'query_builder' => function (TransactionRepository $repository) {
                        $qb = $repository->createQueryBuilder('transaction');
                        $qb
                        ->where($qb->expr()->isNotNull('transaction.service'))
                        ->orderBy('transaction.createdAt', 'ASC')
                        ->groupBy('transaction.service');
                    return $qb;
                },
                'choice_label' => 'service.name',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Выберите',
                ],
            ])
            ->add('search', SubmitType::class, [
                'label' => 'Выбрать',
                'attr' => [
                    'class' => 'btn-success'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
