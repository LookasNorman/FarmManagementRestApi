<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AlarmTestRepository;
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
 * @ORM\Entity(repositoryClass=AlarmTestRepository::class)
 */
class AlarmTest
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Buildings::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $building;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $local;

    /**
     * @ORM\Column(type="boolean")
     */
    private $remote;

    /**
     * @ORM\ManyToOne(targetEntity=Person::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $person;

    /**
     * @ORM\Column(type="text")
     */
    private $comments;

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

    public function getLocal(): ?bool
    {
        return $this->local;
    }

    public function setLocal(bool $local): self
    {
        $this->local = $local;

        return $this;
    }

    public function getRemote(): ?bool
    {
        return $this->remote;
    }

    public function setRemote(bool $remote): self
    {
        $this->remote = $remote;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(string $comments): self
    {
        $this->comments = $comments;

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
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * @param mixed $building
     */
    public function setBuilding($building): void
    {
        $this->building = $building;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param mixed $person
     */
    public function setPerson($person): void
    {
        $this->person = $person;
    }
}
