<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\HerdDisinfectionRepository;
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
 * @ORM\Entity(repositoryClass=HerdDisinfectionRepository::class)
 */
class HerdDisinfection
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Herds::class)
     */
    private $herd;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToMany(targetEntity=DisinfectionPlace::class)
     */
    private $disinfection;

    /**
     * @ORM\ManyToMany(targetEntity=Disinfectant::class)
     */
    private $disinfectant;

    /**
     * @ORM\Column(type="float")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Owner;

    public function __construct()
    {
        $this->herd = new ArrayCollection();
        $this->disinfection = new ArrayCollection();
        $this->disinfectant = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Herds[]
     */
    public function getHerd(): Collection
    {
        return $this->herd;
    }

    public function addHerd(Herds $herd): self
    {
        if (!$this->herd->contains($herd)) {
            $this->herd[] = $herd;
        }

        return $this;
    }

    public function removeHerd(Herds $herd): self
    {
        $this->herd->removeElement($herd);

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
     * @return Collection|DisinfectionPlace[]
     */
    public function getDisinfection(): Collection
    {
        return $this->disinfection;
    }

    public function addDisinfection(DisinfectionPlace $disinfection): self
    {
        if (!$this->disinfection->contains($disinfection)) {
            $this->disinfection[] = $disinfection;
        }

        return $this;
    }

    public function removeDisinfection(DisinfectionPlace $disinfection): self
    {
        $this->disinfection->removeElement($disinfection);

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
