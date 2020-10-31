<?php

namespace App\Repository;

use App\Entity\BreedLineStandard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BreedLineStandard|null find($id, $lockMode = null, $lockVersion = null)
 * @method BreedLineStandard|null findOneBy(array $criteria, array $orderBy = null)
 * @method BreedLineStandard[]    findAll()
 * @method BreedLineStandard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BreedLineStandardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BreedLineStandard::class);
    }

    // /**
    //  * @return BreedLineStandard[] Returns an array of BreedLineStandard objects
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
    public function findOneBySomeField($value): ?BreedLineStandard
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
