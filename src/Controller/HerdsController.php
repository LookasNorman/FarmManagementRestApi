<?php

namespace App\Controller;

use App\Entity\Herds;
use App\Entity\HerdsData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HerdsController extends AbstractController
{
    public function state(Herds $herd): Response
    {
        $date = new \DateTime('now');
        $herdsDataRepository = $this->getDoctrine()->getRepository(HerdsData::class);
        $data = $herdsDataRepository->herdsState($herd, $date);

        /*Get last date*/
        $lastDate = new \DateTime($herdsDataRepository->lastDateHerdData($herd));

        $herdData = $herdsDataRepository->findOneBy(['date' => $lastDate, 'herd' => $herd]);

        $hensFeed = $herdData->getHensFeed();
        $cocksFeed = $herdData->getCocksFeed();
        $hensWeight = $herdData->getHensWeight();
        $cocksWeight = $herdData->getCocksWeight();
        $fertilization = $herdData->getFertilization();
        
        if ($hensFeed === 0) {
            $lastDate = new \DateTime($herdsDataRepository->lastDateHerdDataHensFeed($herd));
            $hensFeed = $herdsDataRepository
                ->findOneBy(['date' => $lastDate, 'herd' => $herd])
                ->getHensFeed();
        }

        if ($cocksFeed === 0) {
            $lastDate = new \DateTime($herdsDataRepository->lastDateHerdDataCocksFeed($herd));
            $cocksFeed = $herdsDataRepository
                ->findOneBy(['date' => $lastDate, 'herd' => $herd])
                ->getCocksFeed();
        }

        if ($hensWeight === 0) {
            $lastDate = new \DateTime($herdsDataRepository->lastDateHerdDataHensWeight($herd));
            $hensWeight = $herdsDataRepository
                ->findOneBy(['date' => $lastDate, 'herd' => $herd])
                ->getHensWeight();
        }

        if ($cocksWeight === 0) {
            $lastDate = new \DateTime($herdsDataRepository->lastDateHerdDataCocksWeight($herd));
            $cocksWeight = $herdsDataRepository
                ->findOneBy(['date' => $lastDate, 'herd' => $herd])
                ->getCocksWeight();
        }

        if($fertilization === 0) {
            $lastDate = new \DateTime($herdsDataRepository->lastDateHerdDataFertilization($herd));
            $fertilization = $herdsDataRepository
                ->findOneBy(['date' => $lastDate, 'herd' => $herd])
                ->getCocksWeight();
        }

        $date22Week = $herdsDataRepository->dateHerdData22Week($herd);
        $state22Week = $herdsDataRepository->herdsState($herd, $date22Week);

        $addingData = [
            'lastDate' => $lastDate,
            'cast' => ($hensWeight / 1000 * $data['hensState'] +
                    $cocksWeight / 1000 * $data['cocksState']) / $data['area'],
            'hensFeedDose' => ($hensFeed * 1000 / $data['hensState']),
            'cocksFeedDose' => ($cocksFeed * 1000 / $data['cocksState']),
            'eggsPerHens22Week' => $data['allEggs'] / $state22Week['hensState'],
            'hatchingEggsPerHens22Week' => $data['hatchingEggs'] / $state22Week['hensState'],
            'lastFertilization' => $fertilization
        ];

        $data = array_merge($data, $addingData);

        $response = new Response(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
