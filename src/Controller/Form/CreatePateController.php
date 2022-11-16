<?php

namespace App\Controller\Form;

use App\Entity\Ingredient;
use App\Entity\Pate;
use App\Form\IngredientType;
use App\Form\PateType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class CreatePateController extends AbstractController
{
    #[Route('/PastEasy-Creation-recette', name: 'app_create_recette')]
    public function index(Request $request,
                          ManagerRegistry $doctrine,
                          EntityManagerInterface $entityManager,
                          SluggerInterface $slugger): Response
    {
        $pate = new Pate();

        $form = $this->createForm(PateType::class, $pate);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $picture = $form->get('picture')->getData();
            if ($picture) {
                $originalFilename = pathinfo($picture->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $picture->guessExtension();
                try {
                    $picture->move(
                        $this->getParameter('recipe-picture'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $pate->setPicture($newFilename);
                $hotel = $form->getData();
            }
            //Push
            $entityManager->persist($pate);
            $entityManager->flush();
        }
        return $this->render('form/create_pate.html.twig', [
            'title' => 'PastEasy - Création de recette',
            'form' => $form->createView(),
            ]);
    }
}
