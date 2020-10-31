<?php

namespace App\Repository;

use App\Entity\Paddings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Paddings|null find($id, $lockMode = null, $lockVersion = null)
 * @method Paddings|null findOneBy(array $criteria, array $orderBy = null)
 * @method Paddings[]    findAll()
 * @method Paddings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaddingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Paddings::class);
    }

    // /**
    //  * @return Paddings[] Returns an array of Paddings objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Paddings
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
