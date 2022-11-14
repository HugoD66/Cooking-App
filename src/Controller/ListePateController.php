<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListePateController extends AbstractController
{
    #[Route('/PastEasy-Recettes', name: 'app_liste_pate')]
    public function index(): Response
    {

        return $this->render('pate/liste-pate.html.twig', [
            'title' => 'Pasteasy - Les Recettes',
        ]);
    }
}
