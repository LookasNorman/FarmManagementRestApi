<?php

namespace App\Repository;

use App\Entity\HerdDisinfection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HerdDisinfection|null find($id, $lockMode = null, $lockVersion = null)
 * @method HerdDisinfection|null findOneBy(array $criteria, array $orderBy = null)
 * @method HerdDisinfection[]    findAll()
 * @method HerdDisinfection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HerdDisinfectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HerdDisinfection::class);
    }

    // /**
    //  * @return HerdDisinfection[] Returns an array of HerdDisinfection objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HerdDisinfection
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
