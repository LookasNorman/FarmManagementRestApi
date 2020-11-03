<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TankRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=TankRepository::class)
 */
class Tank
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TankType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $tankType;

    /**
     * @ORM\ManyToMany(targetEntity=Buildings::class, inversedBy="tanks")
     */
    private $building;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $capacity;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $IU;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Owner;

    public function __construct()
    {
        $this->building = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTankType(): ?TankType
    {
        return $this->tankType;
    }

    public function setTankType(?TankType $tankType): self
    {
        $this->tankType = $tankType;

        return $this;
    }

    /**
     * @return Collection|Buildings[]
     */
    public function getBuilding(): Collection
    {
        return $this->building;
    }

    public function addBuilding(Buildings $building): self
    {
        if (!$this->building->contains($building)) {
            $this->building[] = $building;
        }

        return $this;
    }

    public function removeBuilding(Buildings $building): self
    {
        $this->building->removeElement($building);

        return $this;
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

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getIU(): ?string
    {
        return $this->IU;
    }

    public function setIU(string $IU): self
    {
        $this->IU = $IU;

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->Owner;
    }

    public function setOwner(?User $Owner): self
    {
        $this->Owner = $Owner;

        return $this;
    }
}
