<?php

namespace App\Repository;

use App\Entity\CertificateType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CertificateType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CertificateType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CertificateType[]    findAll()
 * @method CertificateType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CertificateTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CertificateType::class);
    }

    // /**
    //  * @return CertificateType[] Returns an array of CertificateType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CertificateType
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
