<?php

namespace App\Form;

use App\Entity\Transaction;
use App\Repository\TransactionRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransactionFilterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start', TextType::class, [
                'label' => 'Фильтр по датам:',
                'attr' => [
                    'class' => 'form-control hasDatepicker',
                    'placeholder' => 'Начало',
                    'id' => 'from',
                    ],
                'required' => false,
            ])
            ->add('end', TextType::class, [
                'attr' => [
                    'class' => 'form-control hasDatepicker',
                    'placeholder' => 'Конец',
                    'id' => 'to',
                    'required' => false,
                ],
                'required' => false,
            ])
            ->add('serviceId', EntityType::class, [
                'label' => 'Фильтр по услуге:',
                'class' => Transaction::class,
                'query_builder' => function (TransactionRepository $repository) {
                        $qb = $repository->createQueryBuilder('t');
                        $qb
                        ->where($qb->expr()->isNotNull('t.service'))
                        ->orderBy('t.createdAt', 'ASC')
                        ->groupBy('t.service');
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
                    'class' => 'btn btn-success'
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
