<?php

namespace App\Repository;

use App\Entity\SiloType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SiloType|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiloType|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiloType[]    findAll()
 * @method SiloType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiloTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SiloType::class);
    }

    // /**
    //  * @return SiloType[] Returns an array of SiloType objects
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
    public function findOneBySomeField($value): ?SiloType
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
