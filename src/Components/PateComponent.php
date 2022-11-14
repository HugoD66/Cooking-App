<?php

namespace  App\Components;

use App\Entity\Pate;
use App\Repository\PateRepository;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;


#[AsTwigComponent('pate')]
class PateComponent
{
    public int $id;
    public function __construct(private PateRepository $pateRepository)
    {
    }

    public function getPate (): Pate
    {
        return $this->pateRepository->find($this->id);
    }
}