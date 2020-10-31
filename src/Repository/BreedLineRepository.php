<?php

namespace App\Repository;

use App\Entity\BreedLine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BreedLine|null find($id, $lockMode = null, $lockVersion = null)
 * @method BreedLine|null findOneBy(array $criteria, array $orderBy = null)
 * @method BreedLine[]    findAll()
 * @method BreedLine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BreedLineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BreedLine::class);
    }

    // /**
    //  * @return BreedLine[] Returns an array of BreedLine objects
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
    public function findOneBySomeField($value): ?BreedLine
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
