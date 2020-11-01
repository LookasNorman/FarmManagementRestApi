<?php

namespace App\Repository;

use App\Entity\LoginLogs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LoginLogs|null find($id, $lockMode = null, $lockVersion = null)
 * @method LoginLogs|null findOneBy(array $criteria, array $orderBy = null)
 * @method LoginLogs[]    findAll()
 * @method LoginLogs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoginLogsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LoginLogs::class);
    }

    // /**
    //  * @return LoginLogs[] Returns an array of LoginLogs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LoginLogs
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
