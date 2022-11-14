<?php

namespace App\Controller\Redirect;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RedirectController extends AbstractController
{
    #[Route('/PastEasy-Redirection-connexion', name: 'app_redirect_connexion')]
    public function index(): Response
    {
        $user = $this->getUser();

        return $this->render('redirect/deja_co.html.twig', [
            'title' => 'PastEasy - Déjà connecté',
            'user' => $user
        ]);
    }
    #[Route('/PastEasy-Redirection-access', name: 'app_redirect_access')]
    public function access(): Response
    {
        return $this->render('redirect/access.html.twig', [
            'title' => 'PastEasy - Connexion obligatoire',
        ]);
    }
}
