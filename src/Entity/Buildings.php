<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BuildingsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     collectionOperations={"get", "post"},
 *     itemOperations={
 *          "get",
 *          "put"={
 *              "access_control"="is_granted('ROLE_ADMIN') or object.getOwner() == user"
 *          }
 *      }
 * )
 * @ORM\Entity(repositoryClass=BuildingsRepository::class)
 */
class Buildings
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Farm::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $farm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $area;

    /**
     * @ORM\ManyToMany(targetEntity=Tank::class, mappedBy="building")
     */
    private $tanks;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Owner;

    public function __construct()
    {
        $this->tanks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFarm(): ?Farm
    {
        return $this->farm;
    }

    public function setFarm(?Farm $farm): self
    {
        $this->farm = $farm;

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

    public function getArea(): ?int
    {
        return $this->area;
    }

    public function setArea(?int $area): self
    {
        $this->area = $area;

        return $this;
    }

    /**
     * @return Collection|Tank[]
     */
    public function getTanks(): Collection
    {
        return $this->tanks;
    }

    public function addTank(Tank $tank): self
    {
        if (!$this->tanks->contains($tank)) {
            $this->tanks[] = $tank;
            $tank->addBuilding($this);
        }

        return $this;
    }

    public function removeTank(Tank $tank): self
    {
        if ($this->tanks->removeElement($tank)) {
            $tank->removeBuilding($this);
        }

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
