<?php

namespace App\Entity;

use App\Repository\ExcursionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExcursionsRepository::class)]
class Excursions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptions = null;

    #[ORM\Column(length: 255)]
    private ?string $price = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function __construct()
    {
        // Définir une valeur par défaut pour photo si elle n'est pas définie
        if ($this->photo === null) {
            $this->photo = 'default.jpg'; // Par exemple, image par défaut
        }
    }
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescriptions(): ?string
    {
        return $this->descriptions;
    }

    public function setDescriptions(string $descriptions): static
    {
        $this->descriptions = $descriptions;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }
}
