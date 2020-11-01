<?php

namespace App\Repository;

use App\Entity\SiloRefueling;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SiloRefueling|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiloRefueling|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiloRefueling[]    findAll()
 * @method SiloRefueling[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiloRefuelingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SiloRefueling::class);
    }

    // /**
    //  * @return SiloRefueling[] Returns an array of SiloRefueling objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SiloRefueling
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
