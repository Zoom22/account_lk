<?php

namespace App\Repository;

use App\Entity\Service;
use App\Entity\Subscription;
use App\Entity\Transaction;
use App\Entity\User;
use Carbon\Carbon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Transaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transaction[]    findAll()
 * @method Transaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transaction::class);
    }

    public function filterByService($serviceId, ServiceRepository $serviceRepository)
    {
        $service = $serviceRepository->find(intval($serviceId));

        return $this->createQueryBuilder('t')
            ->andWhere('t.service = :val')
            ->setParameter('val', $service)
            ->getQuery()
            ->getResult();
    }

    public function findNextMonthsPayments(Service $service, User $user)
    {
        $month = $this->get3NextMonth();
        $nextMonthsQuery = 't.period = ' . $month[0] . ' OR ' . 't.period = ' . $month[1] . ' OR ' . 't.period = ' . $month[2];
        return $this->createQueryBuilder('t')
            ->andWhere('t.service = :service')
            ->andWhere('t.user = :user')
            ->andWhere($nextMonthsQuery)
            ->setParameter('service', $service)
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array
     */
    private function get3NextMonth(): array
    {
        $result = [];
        for ($i = 1; $i <= 3; $i++) {
            $result[] = Carbon::now()->addMonthNoOverflow($i)->format('mY');
        }
        return $result;
    }

}
