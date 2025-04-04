<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HotelRepository::class)]
class Hotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $etoile = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    /**
     * @var Collection<int, ReservationHotel>
     */
    #[ORM\OneToMany(targetEntity: ReservationHotel::class, mappedBy: 'Hotel')]
    private Collection $reservationHotels;

    public function __construct()
    {
        $this->reservationHotels = new ArrayCollection();
         // Définir une valeur par défaut pour photo si elle n'est pas définie
         if ($this->photo === null) {
            $this->photo = 'default.jpg'; // Par exemple, image par défaut
        }
    }
    
    public function getId(): ?int
    {
        return $this->id;
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

    public function getEtoile(): ?int
    {
        return $this->etoile;
    }

    public function setEtoile(?int $etoile): static
    {
        $this->etoile = $etoile;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

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

    /**
     * @return Collection<int, ReservationHotel>
     */
    public function getReservationHotels(): Collection
    {
        return $this->reservationHotels;
    }

    public function addReservationHotel(ReservationHotel $reservationHotel): static
    {
        if (!$this->reservationHotels->contains($reservationHotel)) {
            $this->reservationHotels->add($reservationHotel);
            $reservationHotel->setHotel($this);
        }

        return $this;
    }

    public function removeReservationHotel(ReservationHotel $reservationHotel): static
    {
        if ($this->reservationHotels->removeElement($reservationHotel)) {
            // set the owning side to null (unless already changed)
            if ($reservationHotel->getHotel() === $this) {
                $reservationHotel->setHotel(null);
            }
        }

        return $this;
    }
}
