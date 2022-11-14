<?php

namespace App\Entity;

use App\Repository\PateRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PateRepository::class)]
class Pate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column]
    private ?int $time = null;

    #[ORM\Column]
    #[Assert\LessThanOrEqual(5)]

    private ?int $difficulty = null;

    #[ORM\Column(length: 255)]
    private ?string $stepOne = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $stepTwo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $stepThree = null;

    #[ORM\Column(length: 255)]
    private ?string $picture = null;

    #[ORM\ManyToMany(targetEntity: Ingredient::class, inversedBy: 'pates')]
    private Collection $ingredient;

    public function __construct()
    {
        $this->ingredient = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getDifficulty(): ?int
    {
        return $this->difficulty;
    }

    public function setDifficulty(int $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    public function getStepOne(): ?string
    {
        return $this->stepOne;
    }

    public function setStepOne(string $stepOne): self
    {
        $this->stepOne = $stepOne;

        return $this;
    }

    public function getStepTwo(): ?string
    {
        return $this->stepTwo;
    }

    public function setStepTwo(?string $stepTwo): self
    {
        $this->stepTwo = $stepTwo;

        return $this;
    }

    public function getStepThree(): ?string
    {
        return $this->stepThree;
    }

    public function setStepThree(?string $stepThree): self
    {
        $this->stepThree = $stepThree;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return Collection<int, Ingredient>
     */
    public function getIngredient(): Collection
    {
        return $this->ingredient;
    }

    public function addIngredient(Ingredient $ingredient): self
    {
        if (!$this->ingredient->contains($ingredient)) {
            $this->ingredient->add($ingredient);
        }

        return $this;
    }

    public function removeIngredient(Ingredient $ingredient): self
    {
        $this->ingredient->removeElement($ingredient);

        return $this;
    }
}
