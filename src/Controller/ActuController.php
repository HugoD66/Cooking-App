<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActuController extends AbstractController
{
    #[Route('/PastEasy-Actualitées', name: 'app_actu')]
    public function index(): Response
    {
        return $this->render('actu/actu.html.twig', [
            'title' => 'PastEasy - Actualitées',
        ]);
    }
}
