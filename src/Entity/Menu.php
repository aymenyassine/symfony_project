<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenuRepository::class)]
class Menu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $price = null;

    // Relation OneToMany : Un menu peut être le principal de plusieurs restaurents
    #[ORM\OneToMany(targetEntity: Restaurent::class, mappedBy: 'menu')]
    private Collection $restaurent;

    // Relation ManyToMany : Plusieurs restaurents peuvent partager ce menu
    #[ORM\ManyToMany(targetEntity: Restaurent::class, mappedBy: 'menus')]
    private Collection $restaurents;

    public function __construct()
    {
        $this->restaurent = new ArrayCollection();
        $this->restaurents = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection<int, Restaurent>
     */
    public function getRestaurent(): Collection
    {
        return $this->restaurent;
    }

    public function addRestaurent(Restaurent $restaurent): static
    {
        if (!$this->restaurent->contains($restaurent)) {
            $this->restaurent->add($restaurent);
            $restaurent->setMenu($this);
        }

        return $this;
    }

    public function removeRestaurent(Restaurent $restaurent): static
    {
        if ($this->restaurent->removeElement($restaurent)) {
            // set the owning side to null (unless already changed)
            if ($restaurent->getMenu() === $this) {
                $restaurent->setMenu(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Restaurent>
     */
    public function getRestaurents(): Collection
    {
        return $this->restaurents;
    }
}
