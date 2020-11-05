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
     * @ORM\ManyToOne(targetEntity=Herds::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $herd;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=DisinfectionPlace::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $disinfection;

    /**
     * @ORM\ManyToOne(targetEntity=Disinfectant::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $disinfectant;

    /**
     * @ORM\Column(nullable=false)
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Owner;

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return mixed
     */
    public function getHerd()
    {
        return $this->herd;
    }

    /**
     * @param mixed $herd
     */
    public function setHerd($herd): void
    {
        $this->herd = $herd;
    }

    /**
     * @return mixed
     */
    public function getDisinfection()
    {
        return $this->disinfection;
    }

    /**
     * @param mixed $disinfection
     */
    public function setDisinfection($disinfection): void
    {
        $this->disinfection = $disinfection;
    }

    /**
     * @return mixed
     */
    public function getDisinfectant()
    {
        return $this->disinfectant;
    }

    /**
     * @param mixed $disinfectant
     */
    public function setDisinfectant($disinfectant): void
    {
        $this->disinfectant = $disinfectant;
    }
}
