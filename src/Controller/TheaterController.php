<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TheaterController extends AbstractController
{
    /**
     * @Route("/theaters", name="theaters")
     */
    public function index(): Response
    {
        return $this->render('theater/index.html.twig', [
            'controller_name' => 'TheaterController',
        ]);
    }
}
