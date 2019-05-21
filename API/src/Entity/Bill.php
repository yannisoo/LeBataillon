<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BillRepository")
 */
class Bill
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $billNumber;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unitPrice1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unitPrice2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unitPrice3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unitPrice4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $project_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getBillNumber(): ?string
    {
        return $this->billNumber;
    }

    public function setBillNumber(?string $billNumber): self
    {
        $this->billNumber = $billNumber;

        return $this;
    }

    public function getQuantity1(): ?int
    {
        return $this->quantity1;
    }

    public function setQuantity1(?int $quantity1): self
    {
        $this->quantity1 = $quantity1;

        return $this;
    }

    public function getDescription1(): ?string
    {
        return $this->description1;
    }

    public function setDescription1(?string $description1): self
    {
        $this->description1 = $description1;

        return $this;
    }

    public function getUnitPrice1(): ?int
    {
        return $this->unitPrice1;
    }

    public function setUnitPrice1(?int $unitPrice1): self
    {
        $this->unitPrice1 = $unitPrice1;

        return $this;
    }

    public function getQuantity2(): ?int
    {
        return $this->quantity2;
    }

    public function setQuantity2(?int $quantity2): self
    {
        $this->quantity2 = $quantity2;

        return $this;
    }

    public function getDescription2(): ?string
    {
        return $this->description2;
    }

    public function setDescription2(?string $description2): self
    {
        $this->description2 = $description2;

        return $this;
    }

    public function getUnitPrice2(): ?int
    {
        return $this->unitPrice2;
    }

    public function setUnitPrice2(?int $unitPrice2): self
    {
        $this->unitPrice2 = $unitPrice2;

        return $this;
    }

    public function getQuantity3(): ?int
    {
        return $this->quantity3;
    }

    public function setQuantity3(?int $quantity3): self
    {
        $this->quantity3 = $quantity3;

        return $this;
    }

    public function getDescription3(): ?string
    {
        return $this->description3;
    }

    public function setDescription3(?string $description3): self
    {
        $this->description3 = $description3;

        return $this;
    }

    public function getUnitPrice3(): ?int
    {
        return $this->unitPrice3;
    }

    public function setUnitPrice3(?int $unitPrice3): self
    {
        $this->unitPrice3 = $unitPrice3;

        return $this;
    }

    public function getQuantity4(): ?int
    {
        return $this->quantity4;
    }

    public function setQuantity4(?int $quantity4): self
    {
        $this->quantity4 = $quantity4;

        return $this;
    }

    public function getDescription4(): ?string
    {
        return $this->description4;
    }

    public function setDescription4(?string $description4): self
    {
        $this->description4 = $description4;

        return $this;
    }

    public function getUnitPrice4(): ?int
    {
        return $this->unitPrice4;
    }

    public function setUnitPrice4(?int $unitPrice4): self
    {
        $this->unitPrice4 = $unitPrice4;

        return $this;
    }

    public function getProjectId(): ?int
    {
        return $this->project_id;
    }

    public function setProjectId(?int $project_id): self
    {
        $this->project_id = $project_id;

        return $this;
    }
}
