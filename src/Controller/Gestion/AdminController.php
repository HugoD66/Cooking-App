<?php

namespace App\Controller\Gestion;

use App\Entity\Ingredient;
use App\Form\HotelType;
use App\Form\IngredientType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class AdminController extends AbstractController
{
    #[Route('/PastEasy-Gestion-Administrateur/{id}', name: 'app_gestion_admin')]
    public function gestionAdmin(Request $request,
                                 ManagerRegistry $doctrine,
                                 EntityManagerInterface $entityManager,
                                 int $id,
                                 SluggerInterface $slugger): Response
    {

        $user = $this->getUser();

        $ingredient = new Ingredient();
        $form = $this->createForm(IngredientType::class, $ingredient);
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
                $ingredient->setPicture($newFilename);
                $hotel = $form->getData();
            }
            //Push
            $entityManager->persist($ingredient);
            $entityManager->flush();
        }




        return $this->render('gestion/admin.html.twig', [
            'user' => $user,
            'title' => 'PastEasy Gestion administrateur',
            'form' => $form->createView(),

        ]);
    }
}
