<?php

namespace  App\Components;

use App\Entity\Pate;
use App\Repository\PateRepository;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;


#[AsTwigComponent('all_pates')]
class AllPatesComponent
{
    public int $id;
    public function __construct( private PateRepository $pateRepository )
    {
    }

    public function getAllPates (): array
    {
        return $this->pateRepository->findAll();
    }
}