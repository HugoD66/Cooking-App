<?php

namespace App\Controller\Random;

use App\Entity\Pate;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomPateController extends AbstractController
{
    /**
     * @throws NonUniqueResultException
     * @throws NoResultException
     */
    #[Route('/PastEasy-Recette-Aleatoire', name: 'app_random_pate')]
    public function index(ManagerRegistry $doctrine,
                          EntityManagerInterface $entityManager): Response
    {

        $randomPate = $doctrine->getRepository(Pate::class)->findAll();
        $maxId = 15;
        $rand = rand(1, $maxId);

        $qb = $entityManager->createQueryBuilder();
        $qb->select('t')
            ->from(Pate::class, 't')
            // greater or equal in case of deleted ids
            ->where($qb->expr()->gte('t.id', $rand))
            ->setMaxResults(1);
        $entity = $qb->getQuery()->getSingleResult();



        return $this->render('random/random.html.twig', [
            'title' => 'Pasteasy - Recette Aléatoire',
            'pate' => $entity,

        ]);
    }
}