<?php

namespace App\Repository;

use App\Entity\Beeding;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Beeding|null find($id, $lockMode = null, $lockVersion = null)
 * @method Beeding|null findOneBy(array $criteria, array $orderBy = null)
 * @method Beeding[]    findAll()
 * @method Beeding[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BeedingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Beeding::class);
    }

    // /**
    //  * @return Beeding[] Returns an array of Beeding objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Beeding
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
