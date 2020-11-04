<?php

namespace App\Repository;

use App\Entity\DisinfectionBuilding;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DisinfectionBuilding|null find($id, $lockMode = null, $lockVersion = null)
 * @method DisinfectionBuilding|null findOneBy(array $criteria, array $orderBy = null)
 * @method DisinfectionBuilding[]    findAll()
 * @method DisinfectionBuilding[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DisinfectionBuildingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DisinfectionBuilding::class);
    }

    // /**
    //  * @return DisinfectionBuilding[] Returns an array of DisinfectionBuilding objects
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
    public function findOneBySomeField($value): ?DisinfectionBuilding
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
