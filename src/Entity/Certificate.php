<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CertificateRepository;
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
 * @ORM\Entity(repositoryClass=CertificateRepository::class)
 */
class Certificate
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=CertificateType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $certificateType;

    /**
     * @ORM\ManyToOne(targetEntity=Firms::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $firm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $certificateNumber;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Owner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCertificateType(): ?CertificateType
    {
        return $this->certificateType;
    }

    public function setCertificateType(?CertificateType $certificateType): self
    {
        $this->certificateType = $certificateType;

        return $this;
    }

    public function getFirm(): ?Firms
    {
        return $this->firm;
    }

    public function setFirm(?Firms $firm): self
    {
        $this->firm = $firm;

        return $this;
    }

    public function getCertificateNumber(): ?string
    {
        return $this->certificateNumber;
    }

    public function setCertificateNumber(string $certificateNumber): self
    {
        $this->certificateNumber = $certificateNumber;

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
