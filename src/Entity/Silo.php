<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SiloRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=SiloRepository::class)
 */
class Silo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=SiloType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $siloType;

    /**
     * @ORM\ManyToOne(targetEntity=Buildings::class)
     * @ORM\JoinColumn(nullable=false)
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSiloType(): ?SiloType
    {
        return $this->siloType;
    }

    public function setSiloType(?SiloType $siloType): self
    {
        $this->siloType = $siloType;

        return $this;
    }

    public function getBuilding(): ?Buildings
    {
        return $this->building;
    }

    public function setBuilding(?Buildings $building): self
    {
        $this->building = $building;

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
