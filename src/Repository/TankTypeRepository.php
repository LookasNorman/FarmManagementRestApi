<?php

namespace App\Repository;

use App\Entity\TankType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TankType|null find($id, $lockMode = null, $lockVersion = null)
 * @method TankType|null findOneBy(array $criteria, array $orderBy = null)
 * @method TankType[]    findAll()
 * @method TankType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TankTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TankType::class);
    }

    // /**
    //  * @return TankType[] Returns an array of TankType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TankType
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
