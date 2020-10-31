<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\HerdsDataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=HerdsDataRepository::class)
 */
class HerdsData
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
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $day;

    /**
     * @ORM\Column(type="integer")
     */
    private $week;

    /**
     * @ORM\Column(type="integer")
     */
    private $water;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hensFeed;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cocksFeed;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hatchingEggs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $smallEggs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $brokenEggs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $twoYolkEggs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $weakEggs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $floorEggs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHerd(): ?Herds
    {
        return $this->herd;
    }

    public function setHerd(?Herds $herd): self
    {
        $this->herd = $herd;

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

    public function getDay(): ?int
    {
        return $this->day;
    }

    public function setDay(int $day): self
    {
        $this->day = $day;

        return $this;
    }

    public function getWeek(): ?int
    {
        return $this->week;
    }

    public function setWeek(int $week): self
    {
        $this->week = $week;

        return $this;
    }

    public function getWater(): ?int
    {
        return $this->water;
    }

    public function setWater(int $water): self
    {
        $this->water = $water;

        return $this;
    }

    public function getHensFeed(): ?int
    {
        return $this->hensFeed;
    }

    public function setHensFeed(?int $hensFeed): self
    {
        $this->hensFeed = $hensFeed;

        return $this;
    }

    public function getCocksFeed(): ?int
    {
        return $this->cocksFeed;
    }

    public function setCocksFeed(?int $cocksFeed): self
    {
        $this->cocksFeed = $cocksFeed;

        return $this;
    }

    public function getHatchingEggs(): ?int
    {
        return $this->hatchingEggs;
    }

    public function setHatchingEggs(?int $hatchingEggs): self
    {
        $this->hatchingEggs = $hatchingEggs;

        return $this;
    }

    public function getSmallEggs(): ?int
    {
        return $this->smallEggs;
    }

    public function setSmallEggs(?int $smallEggs): self
    {
        $this->smallEggs = $smallEggs;

        return $this;
    }

    public function getBrokenEggs(): ?int
    {
        return $this->brokenEggs;
    }

    public function setBrokenEggs(?int $brokenEggs): self
    {
        $this->brokenEggs = $brokenEggs;

        return $this;
    }

    public function getTwoYolkEggs(): ?int
    {
        return $this->twoYolkEggs;
    }

    public function setTwoYolkEggs(?int $twoYolkEggs): self
    {
        $this->twoYolkEggs = $twoYolkEggs;

        return $this;
    }

    public function getWeakEggs(): ?int
    {
        return $this->weakEggs;
    }

    public function setWeakEggs(?int $weakEggs): self
    {
        $this->weakEggs = $weakEggs;

        return $this;
    }

    public function getFloorEggs(): ?int
    {
        return $this->floorEggs;
    }

    public function setFloorEggs(?int $floorEggs): self
    {
        $this->floorEggs = $floorEggs;

        return $this;
    }
}
