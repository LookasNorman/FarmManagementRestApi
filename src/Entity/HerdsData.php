<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\HerdsDataRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     collectionOperations={
 *          "get",
 *           "post"
 *     },
 *     itemOperations={
 *          "get",
 *          "put"={
 *              "access_control"="is_granted('ROLE_ADMIN') or object.getOwner() == user"
 *          },
 *          "delete"={
 *              "access_contorl"="is_granted('ROLE_ADMIN')"
 *          }
 *      }
 * )
 * @ApiFilter(SearchFilter::class, properties={"herd":"exact"})
 * @ApiFilter(DateFilter::class, properties={"date"})
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

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Owner;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hensFalls;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cocksFalls;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hensMissing;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cocksMissing;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hensSexingMistake;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hensTendons;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cocksTendons;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hensSpiking;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cocksSpiking;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hensWeight;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cocksWeight;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hensHandWeight;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cocksHandWeight;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $eggsWeight;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $heaterWorkingTime;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $eggsExported;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $fertilization;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hensExported;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cocksExported;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hatchingEggsQuantity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $smallEggsQuantity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $brokenEggsQuantity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $twoYolksEggsQuantity;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $export;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $misshapenEggs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $smallEggsFallOf;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $brokenEggsFallOf;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $spiderEggs;

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

    public function getOwner(): ?User
    {
        return $this->Owner;
    }

    public function setOwner(?User $Owner): self
    {
        $this->Owner = $Owner;

        return $this;
    }

    public function getHensFalls(): ?int
    {
        return $this->hensFalls;
    }

    public function setHensFalls(?int $hensFalls): self
    {
        $this->hensFalls = $hensFalls;

        return $this;
    }

    public function getCocksFalls(): ?int
    {
        return $this->cocksFalls;
    }

    public function setCocksFalls(?int $cocksFalls): self
    {
        $this->cocksFalls = $cocksFalls;

        return $this;
    }

    public function getHensMissing(): ?int
    {
        return $this->hensMissing;
    }

    public function setHensMissing(?int $hensMissing): self
    {
        $this->hensMissing = $hensMissing;

        return $this;
    }

    public function getCocksMissing(): ?int
    {
        return $this->cocksMissing;
    }

    public function setCocksMissing(?int $cocksMissing): self
    {
        $this->cocksMissing = $cocksMissing;

        return $this;
    }

    public function getHensSexingMistake(): ?int
    {
        return $this->hensSexingMistake;
    }

    public function setHensSexingMistake(?int $hensSexingMistake): self
    {
        $this->hensSexingMistake = $hensSexingMistake;

        return $this;
    }

    public function getHensTendons(): ?int
    {
        return $this->hensTendons;
    }

    public function setHensTendons(?int $hensTendons): self
    {
        $this->hensTendons = $hensTendons;

        return $this;
    }

    public function getCocksTendons(): ?int
    {
        return $this->cocksTendons;
    }

    public function setCocksTendons(?int $cocksTendons): self
    {
        $this->cocksTendons = $cocksTendons;

        return $this;
    }

    public function getHensSpiking(): ?int
    {
        return $this->hensSpiking;
    }

    public function setHensSpiking(?int $hensSpiking): self
    {
        $this->hensSpiking = $hensSpiking;

        return $this;
    }

    public function getCocksSpiking(): ?int
    {
        return $this->cocksSpiking;
    }

    public function setCocksSpiking(?int $cocksSpiking): self
    {
        $this->cocksSpiking = $cocksSpiking;

        return $this;
    }

    public function getHensWeight(): ?int
    {
        return $this->hensWeight;
    }

    public function setHensWeight(?int $hensWeight): self
    {
        $this->hensWeight = $hensWeight;

        return $this;
    }

    public function getCocksWeight(): ?int
    {
        return $this->cocksWeight;
    }

    public function setCocksWeight(?int $cocksWeight): self
    {
        $this->cocksWeight = $cocksWeight;

        return $this;
    }

    public function getHensHandWeight(): ?int
    {
        return $this->hensHandWeight;
    }

    public function setHensHandWeight(?int $hensHandWeight): self
    {
        $this->hensHandWeight = $hensHandWeight;

        return $this;
    }

    public function getCocksHandWeight(): ?int
    {
        return $this->cocksHandWeight;
    }

    public function setCocksHandWeight(?int $cocksHandWeight): self
    {
        $this->cocksHandWeight = $cocksHandWeight;

        return $this;
    }

    public function getEggsWeight(): ?int
    {
        return $this->eggsWeight;
    }

    public function setEggsWeight(?int $eggsWeight): self
    {
        $this->eggsWeight = $eggsWeight;

        return $this;
    }

    public function getHeaterWorkingTime(): ?string
    {
        return $this->heaterWorkingTime;
    }

    public function setHeaterWorkingTime(?string $heaterWorkingTime): self
    {
        $this->heaterWorkingTime = $heaterWorkingTime;

        return $this;
    }

    public function getEggsExported(): ?int
    {
        return $this->eggsExported;
    }

    public function setEggsExported(?int $eggsExported): self
    {
        $this->eggsExported = $eggsExported;

        return $this;
    }

    public function getFertilization(): ?string
    {
        return $this->fertilization;
    }

    public function setFertilization(?string $fertilization): self
    {
        $this->fertilization = $fertilization;

        return $this;
    }

    public function getHensExported(): ?int
    {
        return $this->hensExported;
    }

    public function setHensExported(?int $hensExported): self
    {
        $this->hensExported = $hensExported;

        return $this;
    }

    public function getCocksExported(): ?int
    {
        return $this->cocksExported;
    }

    public function setCocksExported(?int $cocksExported): self
    {
        $this->cocksExported = $cocksExported;

        return $this;
    }

    public function getHatchingEggsQuantity(): ?int
    {
        return $this->hatchingEggsQuantity;
    }

    public function setHatchingEggsQuantity(?int $hatchingEggsQuantity): self
    {
        $this->hatchingEggsQuantity = $hatchingEggsQuantity;

        return $this;
    }

    public function getSmallEggsQuantity(): ?int
    {
        return $this->smallEggsQuantity;
    }

    public function setSmallEggsQuantity(?int $smallEggsQuantity): self
    {
        $this->smallEggsQuantity = $smallEggsQuantity;

        return $this;
    }

    public function getBrokenEggsQuantity(): ?int
    {
        return $this->brokenEggsQuantity;
    }

    public function setBrokenEggsQuantity(?int $brokenEggsQuantity): self
    {
        $this->brokenEggsQuantity = $brokenEggsQuantity;

        return $this;
    }

    public function getTwoYolksEggsQuantity(): ?int
    {
        return $this->twoYolksEggsQuantity;
    }

    public function setTwoYolksEggsQuantity(?int $twoYolksEggsQuantity): self
    {
        $this->twoYolksEggsQuantity = $twoYolksEggsQuantity;

        return $this;
    }

    public function getExport(): ?bool
    {
        return $this->export;
    }

    public function setExport(?bool $export): self
    {
        $this->export = $export;

        return $this;
    }

    public function getMisshapenEggs(): ?int
    {
        return $this->misshapenEggs;
    }

    public function setMisshapenEggs(?int $misshapenEggs): self
    {
        $this->misshapenEggs = $misshapenEggs;

        return $this;
    }

    public function getSmallEggsFallOf(): ?int
    {
        return $this->smallEggsFallOf;
    }

    public function setSmallEggsFallOf(?int $smallEggsFallOf): self
    {
        $this->smallEggsFallOf = $smallEggsFallOf;

        return $this;
    }

    public function getBrokenEggsFallOf(): ?int
    {
        return $this->brokenEggsFallOf;
    }

    public function setBrokenEggsFallOf(?int $brokenEggsFallOf): self
    {
        $this->brokenEggsFallOf = $brokenEggsFallOf;

        return $this;
    }

    public function getSpiderEggs(): ?int
    {
        return $this->spiderEggs;
    }

    public function setSpiderEggs(?int $spiderEggs): self
    {
        $this->spiderEggs = $spiderEggs;

        return $this;
    }
}
