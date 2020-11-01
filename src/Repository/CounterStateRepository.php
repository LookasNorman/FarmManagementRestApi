<?php

namespace App\Repository;

use App\Entity\CounterState;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CounterState|null find($id, $lockMode = null, $lockVersion = null)
 * @method CounterState|null findOneBy(array $criteria, array $orderBy = null)
 * @method CounterState[]    findAll()
 * @method CounterState[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CounterStateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CounterState::class);
    }

    // /**
    //  * @return CounterState[] Returns an array of CounterState objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CounterState
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
