<?php

namespace App\Repository;

use App\Entity\TankState;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TankState|null find($id, $lockMode = null, $lockVersion = null)
 * @method TankState|null findOneBy(array $criteria, array $orderBy = null)
 * @method TankState[]    findAll()
 * @method TankState[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TankStateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TankState::class);
    }

    // /**
    //  * @return TankState[] Returns an array of TankState objects
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
    public function findOneBySomeField($value): ?TankState
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
