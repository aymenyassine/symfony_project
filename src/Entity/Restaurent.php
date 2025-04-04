<?php

namespace App\Entity;

use App\Repository\RestaurentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestaurentRepository::class)]
class Restaurent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    // Relation ManyToOne : Un Menu principal pour un Restaurent
    #[ORM\ManyToOne(targetEntity: Menu::class, inversedBy: 'restaurent')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Menu $menu = null;

    // Relation ManyToMany : Plusieurs menus pour un restaurent
    #[ORM\ManyToMany(targetEntity: Menu::class, inversedBy: 'restaurents')]
    #[ORM\JoinTable(name: 'restaurent_menu')]
    private Collection $menus;


    public function __construct()
    {
        $this->menus = new ArrayCollection();
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

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getMenu(): ?Menu
    {
        return $this->menu;
    }

    public function setMenu(?Menu $menu): static
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * @return Collection<int, Menu>
     */
    public function getMenus(): Collection
    {
        return $this->menus;
    }

    public function addMenu(Menu $menu): static
    {
        if (!$this->menus->contains($menu)) {
            $this->menus->add($menu);
            $menu->addRestaurent($this);
        }

        return $this;
    }       

    public function removeMenu(Menu $menu): static
    {
        if ($this->menus->removeElement($menu)) {
            $menu->removeRestaurent($this);
        }

        return $this;
    }
}
