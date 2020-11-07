<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\ExistsFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\HerdsRepository;
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
 * @ApiFilter(ExistsFilter::class, properties={"slaughterDate"})
 * @ORM\Entity(repositoryClass=HerdsRepository::class)
 */
class Herds
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $herdsType;

    /**
     * @ORM\ManyToOne(targetEntity=Firms::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $hatchery;

    /**
     * @ORM\ManyToOne(targetEntity=Farm::class)
     */
    private $rearingFarm;

    /**
     * @ORM\ManyToOne(targetEntity=Farm::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $farm;

    /**
     * @ORM\ManyToOne(targetEntity=Buildings::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $building;

    /**
     * @ORM\ManyToOne(targetEntity=Paddings::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $padding;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=BreedLine::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $breedLine;

    /**
     * @ORM\Column(type="date")
     */
    private $hatchingDate;

    /**
     * @ORM\Column(type="date")
     */
    private $insertingDate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hens;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cocks;

    /**
     * @ORM\ManyToOne(targetEntity=Herds::class)
     */
    private $parentHerd;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $slaughterDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $warehouseCode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $eggCode;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Owner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHerdsType(): ?string
    {
        return $this->herdsType;
    }

    public function setHerdsType(string $herdsType): self
    {
        $this->herdsType = $herdsType;

        return $this;
    }

    public function getHatchery(): ?Firms
    {
        return $this->hatchery;
    }

    public function setHatchery(?Firms $hatchery): self
    {
        $this->hatchery = $hatchery;

        return $this;
    }

    public function getRearingFarm(): ?Farm
    {
        return $this->rearingFarm;
    }

    public function setRearingFarm(?Farm $rearingFarm): self
    {
        $this->rearingFarm = $rearingFarm;

        return $this;
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

    public function getBuilding(): ?Buildings
    {
        return $this->building;
    }

    public function setBuilding(?Buildings $building): self
    {
        $this->building = $building;

        return $this;
    }

    public function getPadding(): ?Paddings
    {
        return $this->padding;
    }

    public function setPadding(?Paddings $padding): self
    {
        $this->padding = $padding;

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

    public function getBreedLine(): ?BreedLine
    {
        return $this->breedLine;
    }

    public function setBreedLine(?BreedLine $breedLine): self
    {
        $this->breedLine = $breedLine;

        return $this;
    }

    public function getHatchingDate(): ?\DateTimeInterface
    {
        return $this->hatchingDate;
    }

    public function setHatchingDate(\DateTimeInterface $hatchingDate): self
    {
        $this->hatchingDate = $hatchingDate;

        return $this;
    }

    public function getInsertingDate(): ?\DateTimeInterface
    {
        return $this->insertingDate;
    }

    public function setInsertingDate(\DateTimeInterface $insertingDate): self
    {
        $this->insertingDate = $insertingDate;

        return $this;
    }

    public function getHens(): ?int
    {
        return $this->hens;
    }

    public function setHens(?int $hens): self
    {
        $this->hens = $hens;

        return $this;
    }

    public function getCocks(): ?int
    {
        return $this->cocks;
    }

    public function setCocks(?int $cocks): self
    {
        $this->cocks = $cocks;

        return $this;
    }

    public function getParentHerd(): ?self
    {
        return $this->parentHerd;
    }

    public function setParentHerd(?self $parentHerd): self
    {
        $this->parentHerd = $parentHerd;

        return $this;
    }

    public function getSlaughterDate(): ?\DateTimeInterface
    {
        return $this->slaughterDate;
    }

    public function setSlaughterDate(?\DateTimeInterface $slaughterDate): self
    {
        $this->slaughterDate = $slaughterDate;

        return $this;
    }

    public function getWarehouseCode(): ?string
    {
        return $this->warehouseCode;
    }

    public function setWarehouseCode(?string $warehouseCode): self
    {
        $this->warehouseCode = $warehouseCode;

        return $this;
    }

    public function getEggCode(): ?string
    {
        return $this->eggCode;
    }

    public function setEggCode(?string $eggCode): self
    {
        $this->eggCode = $eggCode;

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
