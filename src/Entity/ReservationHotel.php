<?php

namespace App\Entity;

use App\Repository\ReservationHotelRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationHotelRepository::class)]
class ReservationHotel
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
    private ?int $numberOfGuests = null;

    #[ORM\ManyToOne(inversedBy: 'reservationHotels')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Hotel $Hotel = null;

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
        return $this->numberOfGuests;
    }

    public function setNumberOfGuests(int $numberOfGuests): static
    {
        $this->numberOfGuests = $numberOfGuests;

        return $this;
    }

    public function getHotel(): ?Hotel
    {
        return $this->Hotel;
    }

    public function setHotel(?Hotel $Hotel): static
    {
        $this->Hotel = $Hotel;

        return $this;
    }
}
