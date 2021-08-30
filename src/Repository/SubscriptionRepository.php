<?php

namespace App\Repository;

use App\Entity\Service;
use App\Entity\Subscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Subscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subscription[]    findAll()
 * @method Subscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subscription::class);
    }

    public function isNotSubscribed(?\App\Entity\User $user, ?\App\Entity\Service $service)
    {
         return empty($this->createQueryBuilder('ss')
             ->select('count(ss.id)')
             ->andWhere('ss.user = :user')
             ->andWhere('ss.service = :service')
             ->setParameter('user', $user)
             ->setParameter('service', $service)
             ->getQuery()
             ->getSingleScalarResult());
    }

}
