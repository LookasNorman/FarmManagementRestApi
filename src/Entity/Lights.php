<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LightsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=LightsRepository::class)
 */
class Lights
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
     * @ORM\Column(type="time")
     */
    private $lightOn;

    /**
     * @ORM\Column(type="time")
     */
    private $lightOff;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $intensity;

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

    public function getLightOn(): ?\DateTimeInterface
    {
        return $this->lightOn;
    }

    public function setLightOn(\DateTimeInterface $lightOn): self
    {
        $this->lightOn = $lightOn;

        return $this;
    }

    public function getLightOff(): ?\DateTimeInterface
    {
        return $this->lightOff;
    }

    public function setLightOff(\DateTimeInterface $lightOff): self
    {
        $this->lightOff = $lightOff;

        return $this;
    }

    public function getIntensity(): ?string
    {
        return $this->intensity;
    }

    public function setIntensity(string $intensity): self
    {
        $this->intensity = $intensity;

        return $this;
    }
}
