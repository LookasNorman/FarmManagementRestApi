<?php

namespace App\Repository;

use App\Entity\ProvideSupplement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProvideSupplement|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProvideSupplement|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProvideSupplement[]    findAll()
 * @method ProvideSupplement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProvideSupplementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProvideSupplement::class);
    }

    // /**
    //  * @return ProvideSupplement[] Returns an array of ProvideSupplement objects
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
    public function findOneBySomeField($value): ?ProvideSupplement
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
