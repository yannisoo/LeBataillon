<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuotationRepository")
 */
class Quotation
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $quotation_number;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postcode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $project_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description5;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price5;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description6;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price6;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description7;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price7;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description8;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price8;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description9;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price9;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description10;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price10;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity10;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description11;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price11;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity11;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description12;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price12;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity12;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description13;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price13;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity13;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description14;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price14;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity14;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description15;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unit_price15;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity15;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $project_id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $CreatedAt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $price_total;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pdf_path;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getQuotationNumber(): ?string
    {
        return $this->quotation_number;
    }

    public function setQuotationNumber(?string $quotation_number): self
    {
        $this->quotation_number = $quotation_number;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(?string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getProjectName(): ?string
    {
        return $this->project_name;
    }

    public function setProjectName(?string $project_name): self
    {
        $this->project_name = $project_name;

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
        return $this->unit_price1;
    }

    public function setUnitPrice1(?int $unit_price1): self
    {
        $this->unit_price1 = $unit_price1;

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
        return $this->unit_price2;
    }

    public function setUnitPrice2(?int $unit_price2): self
    {
        $this->unit_price2 = $unit_price2;

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
        return $this->unit_price3;
    }

    public function setUnitPrice3(?int $unit_price3): self
    {
        $this->unit_price3 = $unit_price3;

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
        return $this->unit_price4;
    }

    public function setUnitPrice4(?int $unit_price4): self
    {
        $this->unit_price4 = $unit_price4;

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

    public function getDescription5(): ?string
    {
        return $this->description5;
    }

    public function setDescription5(?string $description5): self
    {
        $this->description5 = $description5;

        return $this;
    }

    public function getUnitPrice5(): ?int
    {
        return $this->unit_price5;
    }

    public function setUnitPrice5(?int $unit_price5): self
    {
        $this->unit_price5 = $unit_price5;

        return $this;
    }

    public function getQuantity5(): ?int
    {
        return $this->quantity5;
    }

    public function setQuantity5(?int $quantity5): self
    {
        $this->quantity5 = $quantity5;

        return $this;
    }

    public function getDescription6(): ?string
    {
        return $this->description6;
    }

    public function setDescription6(?string $description6): self
    {
        $this->description6 = $description6;

        return $this;
    }

    public function getUnitPrice6(): ?int
    {
        return $this->unit_price6;
    }

    public function setUnitPrice6(?int $unit_price6): self
    {
        $this->unit_price6 = $unit_price6;

        return $this;
    }

    public function getQuantity6(): ?int
    {
        return $this->quantity6;
    }

    public function setQuantity6(?int $quantity6): self
    {
        $this->quantity6 = $quantity6;

        return $this;
    }

    public function getDescription7(): ?string
    {
        return $this->description7;
    }

    public function setDescription7(?string $description7): self
    {
        $this->description7 = $description7;

        return $this;
    }

    public function getUnitPrice7(): ?int
    {
        return $this->unit_price7;
    }

    public function setUnitPrice7(?int $unit_price7): self
    {
        $this->unit_price7 = $unit_price7;

        return $this;
    }

    public function getQuantity7(): ?int
    {
        return $this->quantity7;
    }

    public function setQuantity7(?int $quantity7): self
    {
        $this->quantity7 = $quantity7;

        return $this;
    }

    public function getDescription8(): ?string
    {
        return $this->description8;
    }

    public function setDescription8(?string $description8): self
    {
        $this->description8 = $description8;

        return $this;
    }

    public function getUnitPrice8(): ?int
    {
        return $this->unit_price8;
    }

    public function setUnitPrice8(?int $unit_price8): self
    {
        $this->unit_price8 = $unit_price8;

        return $this;
    }

    public function getQuantity8(): ?int
    {
        return $this->quantity8;
    }

    public function setQuantity8(?int $quantity8): self
    {
        $this->quantity8 = $quantity8;

        return $this;
    }

    public function getDescription9(): ?string
    {
        return $this->description9;
    }

    public function setDescription9(?string $description9): self
    {
        $this->description9 = $description9;

        return $this;
    }

    public function getUnitPrice9(): ?int
    {
        return $this->unit_price9;
    }

    public function setUnitPrice9(?int $unit_price9): self
    {
        $this->unit_price9 = $unit_price9;

        return $this;
    }

    public function getQuantity9(): ?int
    {
        return $this->quantity9;
    }

    public function setQuantity9(?int $quantity9): self
    {
        $this->quantity9 = $quantity9;

        return $this;
    }

    public function getDescription10(): ?string
    {
        return $this->description10;
    }

    public function setDescription10(?string $description10): self
    {
        $this->description10 = $description10;

        return $this;
    }

    public function getUnitPrice10(): ?int
    {
        return $this->unit_price10;
    }

    public function setUnitPrice10(?int $unit_price10): self
    {
        $this->unit_price10 = $unit_price10;

        return $this;
    }

    public function getQuantity10(): ?int
    {
        return $this->quantity10;
    }

    public function setQuantity10(?int $quantity10): self
    {
        $this->quantity10 = $quantity10;

        return $this;
    }

    public function getDescription11(): ?string
    {
        return $this->description11;
    }

    public function setDescription11(?string $description11): self
    {
        $this->description11 = $description11;

        return $this;
    }

    public function getUnitPrice11(): ?int
    {
        return $this->unit_price11;
    }

    public function setUnitPrice11(?int $unit_price11): self
    {
        $this->unit_price11 = $unit_price11;

        return $this;
    }

    public function getQuantity11(): ?int
    {
        return $this->quantity11;
    }

    public function setQuantity11(?int $quantity11): self
    {
        $this->quantity11 = $quantity11;

        return $this;
    }

    public function getDescription12(): ?string
    {
        return $this->description12;
    }

    public function setDescription12(?string $description12): self
    {
        $this->description12 = $description12;

        return $this;
    }

    public function getUnitPrice12(): ?int
    {
        return $this->unit_price12;
    }

    public function setUnitPrice12(?int $unit_price12): self
    {
        $this->unit_price12 = $unit_price12;

        return $this;
    }

    public function getQuantity12(): ?int
    {
        return $this->quantity12;
    }

    public function setQuantity12(?int $quantity12): self
    {
        $this->quantity12 = $quantity12;

        return $this;
    }

    public function getDescription13(): ?string
    {
        return $this->description13;
    }

    public function setDescription13(?string $description13): self
    {
        $this->description13 = $description13;

        return $this;
    }

    public function getUnitPrice13(): ?int
    {
        return $this->unit_price13;
    }

    public function setUnitPrice13(?int $unit_price13): self
    {
        $this->unit_price13 = $unit_price13;

        return $this;
    }

    public function getQuantity13(): ?int
    {
        return $this->quantity13;
    }

    public function setQuantity13(?int $quantity13): self
    {
        $this->quantity13 = $quantity13;

        return $this;
    }

    public function getDescription14(): ?string
    {
        return $this->description14;
    }

    public function setDescription14(?string $description14): self
    {
        $this->description14 = $description14;

        return $this;
    }

    public function getUnitPrice14(): ?int
    {
        return $this->unit_price14;
    }

    public function setUnitPrice14(?int $unit_price14): self
    {
        $this->unit_price14 = $unit_price14;

        return $this;
    }

    public function getQuantity14(): ?int
    {
        return $this->quantity14;
    }

    public function setQuantity14(?int $quantity14): self
    {
        $this->quantity14 = $quantity14;

        return $this;
    }

    public function getDescription15(): ?string
    {
        return $this->description15;
    }

    public function setDescription15(?string $description15): self
    {
        $this->description15 = $description15;

        return $this;
    }

    public function getUnitPrice15(): ?int
    {
        return $this->unit_price15;
    }

    public function setUnitPrice15(?int $unit_price15): self
    {
        $this->unit_price15 = $unit_price15;

        return $this;
    }

    public function getQuantity15(): ?int
    {
        return $this->quantity15;
    }

    public function setQuantity15(?int $quantity15): self
    {
        $this->quantity15 = $quantity15;

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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(?\DateTimeInterface $CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getPriceTotal(): ?int
    {
        return $this->price_total;
    }

    public function setPriceTotal(?int $price_total): self
    {
        $this->price_total = $price_total;

        return $this;
    }

    public function getPdfPath(): ?string
    {
        return $this->pdf_path;
    }

    public function setPdfPath(?string $pdf_path): self
    {
        $this->pdf_path = $pdf_path;

        return $this;
    }
}
