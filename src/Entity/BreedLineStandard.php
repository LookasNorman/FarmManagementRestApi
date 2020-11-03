<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BreedLineStandardRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=BreedLineStandardRepository::class)
 */
class BreedLineStandard
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=BreedLine::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $breedLine;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="integer")
     */
    private $henWeight;

    /**
     * @ORM\Column(type="integer")
     */
    private $cockWeight;

    /**
     * @ORM\Column(type="integer")
     */
    private $hensCumulativeFeedDose;

    /**
     * @ORM\Column(type="integer")
     */
    private $cocksCumulativeFeedDose;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $eggsLayingHensHoused;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $eggsLayingHensWeek;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $eggsHensHoused;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $hatchingEggsHensHoused;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $fertilization;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $hatchingLaidEggs;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $hatchingFertilizedEggs;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberChicks;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $eggWeight;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Owner;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getHenWeight(): ?int
    {
        return $this->henWeight;
    }

    public function setHenWeight(int $henWeight): self
    {
        $this->henWeight = $henWeight;

        return $this;
    }

    public function getCockWeight(): ?int
    {
        return $this->cockWeight;
    }

    public function setCockWeight(int $cockWeight): self
    {
        $this->cockWeight = $cockWeight;

        return $this;
    }

    public function getHensCumulativeFeedDose(): ?int
    {
        return $this->hensCumulativeFeedDose;
    }

    public function setHensCumulativeFeedDose(int $hensCumulativeFeedDose): self
    {
        $this->hensCumulativeFeedDose = $hensCumulativeFeedDose;

        return $this;
    }

    public function getCocksCumulativeFeedDose(): ?int
    {
        return $this->cocksCumulativeFeedDose;
    }

    public function setCocksCumulativeFeedDose(int $cocksCumulativeFeedDose): self
    {
        $this->cocksCumulativeFeedDose = $cocksCumulativeFeedDose;

        return $this;
    }

    public function getEggsLayingHensHoused(): ?string
    {
        return $this->eggsLayingHensHoused;
    }

    public function setEggsLayingHensHoused(string $eggsLayingHensHoused): self
    {
        $this->eggsLayingHensHoused = $eggsLayingHensHoused;

        return $this;
    }

    public function getEggsLayingHensWeek(): ?string
    {
        return $this->eggsLayingHensWeek;
    }

    public function setEggsLayingHensWeek(string $eggsLayingHensWeek): self
    {
        $this->eggsLayingHensWeek = $eggsLayingHensWeek;

        return $this;
    }

    public function getEggsHensHoused(): ?string
    {
        return $this->eggsHensHoused;
    }

    public function setEggsHensHoused(string $eggsHensHoused): self
    {
        $this->eggsHensHoused = $eggsHensHoused;

        return $this;
    }

    public function getHatchingEggsHensHoused(): ?string
    {
        return $this->hatchingEggsHensHoused;
    }

    public function setHatchingEggsHensHoused(string $hatchingEggsHensHoused): self
    {
        $this->hatchingEggsHensHoused = $hatchingEggsHensHoused;

        return $this;
    }

    public function getFertilization(): ?string
    {
        return $this->fertilization;
    }

    public function setFertilization(string $fertilization): self
    {
        $this->fertilization = $fertilization;

        return $this;
    }

    public function getHatchingLaidEggs(): ?string
    {
        return $this->hatchingLaidEggs;
    }

    public function setHatchingLaidEggs(string $hatchingLaidEggs): self
    {
        $this->hatchingLaidEggs = $hatchingLaidEggs;

        return $this;
    }

    public function getHatchingFertilizedEggs(): ?string
    {
        return $this->hatchingFertilizedEggs;
    }

    public function setHatchingFertilizedEggs(string $hatchingFertilizedEggs): self
    {
        $this->hatchingFertilizedEggs = $hatchingFertilizedEggs;

        return $this;
    }

    public function getNumberChicks(): ?int
    {
        return $this->numberChicks;
    }

    public function setNumberChicks(int $numberChicks): self
    {
        $this->numberChicks = $numberChicks;

        return $this;
    }

    public function getEggWeight(): ?string
    {
        return $this->eggWeight;
    }

    public function setEggWeight(string $eggWeight): self
    {
        $this->eggWeight = $eggWeight;

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
