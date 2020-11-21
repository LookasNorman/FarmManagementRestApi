<?php

namespace App\Repository;

use App\Entity\HerdsData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HerdsData|null find($id, $lockMode = null, $lockVersion = null)
 * @method HerdsData|null findOneBy(array $criteria, array $orderBy = null)
 * @method HerdsData[]    findAll()
 * @method HerdsData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HerdsDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HerdsData::class);
    }

    // /**
    //  * @return HerdsData[] Returns an array of HerdsData objects
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
    public function findOneBySomeField($value): ?HerdsData
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * @param $herd
     * Get Max(date) from herd data by herd
     */
    public function lastDateHerdData($herd)
    {
        return $this->createQueryBuilder('hd')
            ->select('MAX(hd.date) as lastHerdDataDate')
            ->where('hd.herd = :herd')
            ->setParameter('herd', $herd)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function lastDateHerdDataHensFeed($herd)
    {
        return $this->createQueryBuilder('hd')
            ->select('MAX(hd.date) as lastHerdDataDate')
            ->where('hd.herd = :herd')
            ->andWhere('hd.hensFeed > 0')
            ->setParameter('herd', $herd)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function lastDateHerdDataCocksFeed($herd)
    {
        return $this->createQueryBuilder('hd')
            ->select('MAX(hd.date) as lastHerdDataDate')
            ->where('hd.herd = :herd')
            ->andWhere('hd.cocksFeed > 0')
            ->setParameter('herd', $herd)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function lastDateHerdDataHensWeight($herd)
    {
        return $this->createQueryBuilder('hd')
            ->select('MAX(hd.date) as lastHerdDataDate')
            ->where('hd.herd = :herd')
            ->andWhere('hd.hensWeight > 0')
            ->setParameter('herd', $herd)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function lastDateHerdDataCocksWeight($herd)
    {
        return $this->createQueryBuilder('hd')
            ->select('MAX(hd.date) as lastHerdDataDate')
            ->where('hd.herd = :herd')
            ->andWhere('hd.cocksWeight > 0')
            ->setParameter('herd', $herd)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function lastDateHerdDataFertilization($herd)
    {
        return $this->createQueryBuilder('hd')
            ->select('MAX(hd.date) as lastHerdDataDate')
            ->where('hd.herd = :herd')
            ->andWhere('hd.fertilization > 0')
            ->setParameter('herd', $herd)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function dateHerdData22Week($herd)
    {
        return $this->createQueryBuilder('hd')
            ->select('hd.date')
            ->where('hd.herd = :herd')
            ->andWhere('hd.day = 154')
            ->setParameter('herd', $herd)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function herdsState($herd, $date)
    {
        return $this->createQueryBuilder('hd')
            ->select(
                'h.name', 'h.hatchingDate', 'h.insertingDate',
                'h.hens + SUM(hd.hensSpiking) as hensInserted',
                'h.cocks + SUM(hd.cocksSpiking) as cocksInserted',
                'MAX(hd.date) as herdsDate',
                'h.hens - SUM(hd.hensFalls) - sum(hd.hensMissing) - SUM(hd.hensSexingMistake)
                 - SUM(hd.hensTendons) + SUM(hd.hensSpiking) as hensState',
                'h.cocks - SUM(hd.cocksFalls) - sum(hd.cocksMissing) - SUM(hd.cocksTendons)
                 + SUM(hd.cocksSpiking) as cocksState',
                'SUM(hd.hatchingEggs) - SUM(hd.eggsExported) as hatchingEggsState',
                'b.area', 'hd.hensWeight', 'hd.cocksWeight',
                'SUM(hd.hatchingEggs + hd.smallEggs + hd.brokenEggs + hd.twoYolkEggs + hd.weakEggs) as allEggsCumulative',
                'SUM(hd.smallEggs) as smallEggsCumulative', 'SUM(hd.brokenEggs) as brokenEggsCumulative',
                'SUM(hd.twoYolkEggs) as twoYolkEggsCumulative', 'SUM(hd.weakEggs) as weakEggsCumulative',
                'SUM(hd.hatchingEggs) as hatchingEggsCummulative', 'SUM(hd.hensFalls) as hensFallsCumulative',
                'SUM(hd.cocksFalls) as cocksFallsCumulative',
                'SUM(hd.hensMissing + hd.hensSexingMistake + hd.hensTendons) as hensMissingCumulative',
                'SUM(hd.cocksMissing + hd.cocksTendons) as cocksMissingCumulative',
                'SUM(hd.hensSexingMistake) as hensSexingMistakeCumulatice',
                'MAX(hd.fertilization) as maxFertilization',
                'SUM(hd.fertilization * hd.eggsExported) / SUM(hd.eggsExported) as avgFertilization')
            ->join('hd.herd', 'h')
            ->join('h.building', 'b')
            ->where('hd.herd = :herd')
            ->andWhere('hd.date <= :date')
            ->setParameters(['herd' => $herd, 'date' => $date])
            ->groupBy('hd.herd')
            ->getQuery()
            ->getSingleResult();
    }
}
