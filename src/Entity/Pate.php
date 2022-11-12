<?php

namespace App\Entity;

use App\Repository\PateRepository;
use Doctrine\ORM\Mapping as ORM;

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
    private ?int $difficulty = null;

    #[ORM\Column(length: 255)]
    private ?string $stepOne = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $stepTwo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $stepThree = null;

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
}
