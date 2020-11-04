<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DisinfectionBuildingRepository;
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
 * @ORM\Entity(repositoryClass=DisinfectionBuildingRepository::class)
 */
class DisinfectionBuilding
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
     * @ORM\ManyToMany(targetEntity=Disinfectant::class)
     */
    private $disinfectant;

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
        $this->disinfectant = new ArrayCollection();
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
     * @return Collection|Disinfectant[]
     */
    public function getDisinfectant(): Collection
    {
        return $this->disinfectant;
    }

    public function addDisinfectant(Disinfectant $disinfectant): self
    {
        if (!$this->disinfectant->contains($disinfectant)) {
            $this->disinfectant[] = $disinfectant;
        }

        return $this;
    }

    public function removeDisinfectant(Disinfectant $disinfectant): self
    {
        $this->disinfectant->removeElement($disinfectant);

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
