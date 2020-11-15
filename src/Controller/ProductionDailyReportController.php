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

        $herdsInProduction = $herdsRepository->herdHatchingDateInProductionOnDate($date);
        foreach ($herdsInProduction as $hatchingDate){

        }

        $response = new Response(json_encode($herdsInProduction));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
