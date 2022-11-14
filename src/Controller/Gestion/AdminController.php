<?php

namespace App\Controller\Gestion;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/PastEasy-Gestion-Administrateur/{id}', name: 'app_gestion_admin')]
    public function gestionAdmin(Request $request, ManagerRegistry $doctrine,int $id): Response
    {

        $user = $this->getUser();


        return $this->render('gestion/admin.html.twig', [
            'user' => $user,
            'title' => 'PastEasy Gestion administrateur'
        ]);
    }
    #[Route('/PastEasy-Gestion-Utilisateur/{id}', name: 'app_gestion_utilisateur')]
    public function gestionUtilisateur(Request $request, ManagerRegistry $doctrine,int $id): Response
    {

        $user = $this->getUser();


        return $this->render('gestion/utilisateur.html.twig', [
            'user' => $user,
            'title' => 'PastEasy Gestion utilisateur'
        ]);
    }
}
