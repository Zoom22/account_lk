<?php

namespace App\Repository;

use App\Entity\Service;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Service|null find($id, $lockMode = null, $lockVersion = null)
 * @method Service|null findOneBy(array $criteria, array $orderBy = null)
 * @method Service[]    findAll()
 * @method Service[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Service::class);
    }

    /**
     * @param User|null $user
     * @return float|int|mixed|string
     */
    public function findNotSubscribed(?User $user)
    {
        return $this->createQueryBuilder('service')
            ->leftJoin(
                'App\Entity\Subscription',
                'subscription',
                'WITH',
                'service.id = subscription.service AND subscription.user = :user'
            )
            ->where('subscription.service IS NULL')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult()
            ;
    }
}
