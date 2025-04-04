<?php

namespace App\Entity;

use App\Repository\ReservaRestaurantsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservaRestaurantsRepository::class)]
class ReservaRestaurants
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $guest_name = null;

    #[ORM\Column]
    private ?int $number_of_guests = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Restaurent $restaurants_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getGuestName(): ?string
    {
        return $this->guest_name;
    }

    public function setGuestName(string $guest_name): static
    {
        $this->guest_name = $guest_name;

        return $this;
    }

    public function getNumberOfGuests(): ?int
    {
        return $this->number_of_guests;
    }

    public function setNumberOfGuests(int $number_of_guests): static
    {
        $this->number_of_guests = $number_of_guests;

        return $this;
    }

    public function getRestaurantsId(): ?Restaurent
    {
        return $this->restaurants_id;
    }

    public function setRestaurantsId(?Restaurent $restaurants_id): static
    {
        $this->restaurants_id = $restaurants_id;

        return $this;
    }
}
