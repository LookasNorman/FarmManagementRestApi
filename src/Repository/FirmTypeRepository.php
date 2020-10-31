<?php

namespace App\Repository;

use App\Entity\FirmType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FirmType|null find($id, $lockMode = null, $lockVersion = null)
 * @method FirmType|null findOneBy(array $criteria, array $orderBy = null)
 * @method FirmType[]    findAll()
 * @method FirmType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FirmTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FirmType::class);
    }

    // /**
    //  * @return FirmType[] Returns an array of FirmType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FirmType
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
