<?php

namespace App\Repository;

use App\Entity\CounterType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CounterType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CounterType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CounterType[]    findAll()
 * @method CounterType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CounterTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CounterType::class);
    }

    // /**
    //  * @return CounterType[] Returns an array of CounterType objects
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
    public function findOneBySomeField($value): ?CounterType
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
