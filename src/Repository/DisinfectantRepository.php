<?php

namespace App\Repository;

use App\Entity\Disinfectant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Disinfectant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Disinfectant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Disinfectant[]    findAll()
 * @method Disinfectant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DisinfectantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Disinfectant::class);
    }

    // /**
    //  * @return Disinfectant[] Returns an array of Disinfectant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Disinfectant
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
