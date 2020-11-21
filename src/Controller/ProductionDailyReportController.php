<?php

namespace App\Controller;

use App\Entity\Herds;
use App\Entity\HerdsData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProductionDailyReportController extends AbstractController
{
    public function farmSummary($date): Response
    {
        $date = new \DateTime($date);
        $herdsRepository = $this->getDoctrine()->getRepository(Herds::class);
        $herdDataRepository = $this->getDoctrine()->getRepository(HerdsData::class);
        $data = [];

        $hatchingDateHerdsInProduction = $herdsRepository->herdHatchingDateInProductionOnDate($date);
        foreach ($hatchingDateHerdsInProduction as $key => $hatchingDate) {
            $herds = $herdsRepository->findBy(['hatchingDate' => $hatchingDate['hatchingDate']]);
            $herdsData = [];
            foreach ($herds as $key2 => $herd) {
                $herdsData [] = $herdDataRepository->herdsState($herd, $date);
            }
            $data[$key] = $herdsData;
        }

        $response = new Response(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
