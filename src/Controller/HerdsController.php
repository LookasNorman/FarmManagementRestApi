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
        $data = $this->getDoctrine()->getRepository(HerdsData::class)->herdsState($herd);

        $response = new Response(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
