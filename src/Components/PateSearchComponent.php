<?php
namespace App\Components;

use App\Repository\PateRepository;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('pate_search')]
class PateSearchComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public string $query = '';

    public function __construct(
        private PateRepository $pateRepository
    ) {
    }

    public function getPates(): array
    {
        return $this->pateRepository->findByQuery($this->query);
    }

    public function getAllPates (): array
    {
        return $this->pateRepository->findAll();
    }
}