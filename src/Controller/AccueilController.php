<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('accueil/accueil.html.twig', [
            'title' => 'PastEasy',
        ]);
    }

    #[Route('/PastEasy-Accueil', name: 'app_pasteasy_accueil')]
    public function accueil(): Response
    {
        return $this->render('accueil/accueil_pasteasy.html.twig', [
            'title' => 'PastEasy - Accueil',
        ]);
    }
}
