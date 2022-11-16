<?php

namespace App\Repository;

use App\Entity\Service;
use App\Entity\Subscription;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
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

    /**
     * @param User|null $user
     * @param Service|null $service
     * @return bool
     */
    public function isSubscribed(?User $user, ?Service $service): bool
    {
        try {
            $result = !empty($this->createQueryBuilder('subscription')
                ->select('count(subscription.id)')
                ->andWhere('subscription.user = :user')
                ->andWhere('subscription.service = :service')
                ->setParameter('user', $user)
                ->setParameter('service', $service)
                ->getQuery()
                ->getSingleScalarResult());
        } catch (NoResultException | NonUniqueResultException $e) {
            $result = false;
        }

        return $result;
    }

}
