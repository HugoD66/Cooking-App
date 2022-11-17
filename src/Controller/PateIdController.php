<?php

namespace App\Controller;

use App\Entity\Pate;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PateIdController extends AbstractController
{
    #[Route('/pate/{id}', name: 'app_pate_id')]
    public function index(ManagerRegistry $doctrine, int $id): Response
    {
        $pate = $doctrine->getRepository(Pate::class)->find($id);

        return $this->render('pate/id-pate.html.twig', [
            'title' => 'Pasteasy -  Recette',
            'pate' => $pate,
        ]);
    }
}
