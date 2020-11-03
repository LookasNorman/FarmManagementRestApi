<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CleanBuildingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=CleanBuildingRepository::class)
 */
class CleanBuilding
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Buildings::class)
     */
    private $building;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToMany(targetEntity=Detergent::class)
     */
    private $detergent;

    /**
     * @ORM\Column(type="float")
     */
    private $quantity;

    /**
     * @ORM\ManyToMany(targetEntity=Person::class)
     */
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Owner;

    public function __construct()
    {
        $this->building = new ArrayCollection();
        $this->detergent = new ArrayCollection();
        $this->person = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|Detergent[]
     */
    public function getDetergent(): Collection
    {
        return $this->detergent;
    }

    public function addDetergent(Detergent $detergent): self
    {
        if (!$this->detergent->contains($detergent)) {
            $this->detergent[] = $detergent;
        }

        return $this;
    }

    public function removeDetergent(Detergent $detergent): self
    {
        $this->detergent->removeElement($detergent);

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return Collection|Person[]
     */
    public function getPerson(): Collection
    {
        return $this->person;
    }

    public function addPerson(Person $person): self
    {
        if (!$this->person->contains($person)) {
            $this->person[] = $person;
        }

        return $this;
    }

    public function removePerson(Person $person): self
    {
        $this->person->removeElement($person);

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
