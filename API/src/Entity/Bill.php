<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constrastrings as Assert;

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
    private $billNumber;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description3;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice3;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description4;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice4;

    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $project_id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description5;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice5;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $unitPrice6;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description7;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice7;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description8;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice8;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description9;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice9;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity10;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description10;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice10;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity11;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description11;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice11;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity12;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description12;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice12;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity13;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description13;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice13;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity14;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description14;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice14;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity15;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description15;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $unitPrice15;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $emailReminder;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $callReminder;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $paymentPeriod;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $limit_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mainbill_description;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $price_total;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pdf_path;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $statusSend;



    public function getId(): ?integer
    {
        return $this->id;
    }
    public function setUserId(?int $id): self
    {
        $this->id = $id;

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

    public function getQuantity1(): ?string
    {
        return $this->quantity1;
    }

    public function setQuantity1(?string $quantity1): self
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

    public function getUnitPrice1(): ?string
    {
        return $this->unitPrice1;
    }

    public function setUnitPrice1(?string $unitPrice1): self
    {
        $this->unitPrice1 = $unitPrice1;

        return $this;
    }

    public function getQuantity2(): ?string
    {
        return $this->quantity2;
    }

    public function setQuantity2(?string $quantity2): self
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

    public function getUnitPrice2(): ?string
    {
        return $this->unitPrice2;
    }

    public function setUnitPrice2(?string $unitPrice2): self
    {
        $this->unitPrice2 = $unitPrice2;

        return $this;
    }

    public function getQuantity3(): ?string
    {
        return $this->quantity3;
    }

    public function setQuantity3(?string $quantity3): self
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

    public function getUnitPrice3(): ?string
    {
        return $this->unitPrice3;
    }

    public function setUnitPrice3(?string $unitPrice3): self
    {
        $this->unitPrice3 = $unitPrice3;

        return $this;
    }

    public function getQuantity4(): ?string
    {
        return $this->quantity4;
    }

    public function setQuantity4(?string $quantity4): self
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

    public function getUnitPrice4(): ?i
    {
        return $this->unitPrice4;
    }

    public function setUnitPrice4(?string $unitPrice4): self
    {
        $this->unitPrice4 = $unitPrice4;

        return $this;
    }

    public function getProjectId(): ?string
    {
        return $this->project_id;
    }

    public function setProjectId(?string $project_id): self
    {
        $this->project_id = $project_id;

        return $this;
    }

    public function getQuantity5(): ?string
    {
        return $this->quantity5;
    }

    public function setQuantity5(?string $quantity5): self
    {
        $this->quantity5 = $quantity5;

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

    public function getUnitPrice5(): ?string
    {
        return $this->unitPrice5;
    }

    public function setUnitPrice5(?string $unitPrice5): self
    {
        $this->unitPrice5 = $unitPrice5;

        return $this;
    }

    public function getQuantity6(): ?string
    {
        return $this->quantity6;
    }

    public function setQuantity6(?string $quantity6): self
    {
        $this->quantity6 = $quantity6;

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

    public function getUnitPrice6(): ?string
    {
        return $this->unitPrice6;
    }

    public function setUnitPrice6(?string $unitPrice6): self
    {
        $this->unitPrice6 = $unitPrice6;

        return $this;
    }

    public function getQuantity7(): ?string
    {
        return $this->quantity7;
    }

    public function setQuantity7(?string $quantity7): self
    {
        $this->quantity7 = $quantity7;

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

    public function getUnitPrice7(): ?string
    {
        return $this->unitPrice7;
    }

    public function setUnitPrice7(?string $unitPrice7): self
    {
        $this->unitPrice7 = $unitPrice7;

        return $this;
    }

    public function getQuantity8(): ?string
    {
        return $this->quantity8;
    }

    public function setQuantity8(?string $quantity8): self
    {
        $this->quantity8 = $quantity8;

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

    public function getUnitPrice8(): ?string
    {
        return $this->unitPrice8;
    }

    public function setUnitPrice8(?string $unitPrice8): self
    {
        $this->unitPrice8 = $unitPrice8;

        return $this;
    }

    public function getQuantity9(): ?string
    {
        return $this->quantity9;
    }

    public function setQuantity9(?string $quantity9): self
    {
        $this->quantity9 = $quantity9;

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

    public function getUnitPrice9(): ?string
    {
        return $this->unitPrice9;
    }

    public function setUnitPrice9(?string $unitPrice9): self
    {
        $this->unitPrice9 = $unitPrice9;

        return $this;
    }

    public function getQuantity10(): ?string
    {
        return $this->quantity10;
    }

    public function setQuantity10(?string $quantity10): self
    {
        $this->quantity10 = $quantity10;

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

    public function getUnitPrice10(): ?string
    {
        return $this->unitPrice10;
    }

    public function setUnitPrice10(?string $unitPrice10): self
    {
        $this->unitPrice10 = $unitPrice10;

        return $this;
    }

    public function getQuantity11(): ?string
    {
        return $this->quantity11;
    }

    public function setQuantity11(?string $quantity11): self
    {
        $this->quantity11 = $quantity11;

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

    public function getUnitPrice11(): ?string
    {
        return $this->unitPrice11;
    }

    public function setUnitPrice11(?string $unitPrice11): self
    {
        $this->unitPrice11 = $unitPrice11;

        return $this;
    }

    public function getQuantity12(): ?string
    {
        return $this->quantity12;
    }

    public function setQuantity12(?string $quantity12): self
    {
        $this->quantity12 = $quantity12;

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

    public function getUnitPrice12(): ?string
    {
        return $this->unitPrice12;
    }

    public function setUnitPrice12(?string $unitPrice12): self
    {
        $this->unitPrice12 = $unitPrice12;

        return $this;
    }

    public function getQuantity13(): ?string
    {
        return $this->quantity13;
    }

    public function setQuantity13(?string $quantity13): self
    {
        $this->quantity13 = $quantity13;

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

    public function getUnitPrice13(): ?string
    {
        return $this->unitPrice13;
    }

    public function setUnitPrice13(?string $unitPrice13): self
    {
        $this->unitPrice13 = $unitPrice13;

        return $this;
    }

    public function getQuantity14(): ?string
    {
        return $this->quantity14;
    }

    public function setQuantity14(?string $quantity14): self
    {
        $this->quantity14 = $quantity14;

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

    public function getUnitPrice14(): ?string
    {
        return $this->unitPrice14;
    }

    public function setUnitPrice14(?string $unitPrice14): self
    {
        $this->unitPrice14 = $unitPrice14;

        return $this;
    }

    public function getQuantity15(): ?string
    {
        return $this->quantity15;
    }

    public function setQuantity15(?string $quantity15): self
    {
        $this->quantity15 = $quantity15;

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

    public function getUnitPrice15(): ?string
    {
        return $this->unitPrice15;
    }

    public function setUnitPrice15(?string $unitPrice15): self
    {
        $this->unitPrice15 = $unitPrice15;

        return $this;
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getEmailReminder(): ?string
    {
        return $this->emailReminder;
    }

    public function setEmailReminder(?string $emailReminder): self
    {
        $this->emailReminder = $emailReminder;

        return $this;
    }

    public function getCallReminder(): ?string
    {
        return $this->callReminder;
    }

    public function setCallReminder(?string $callReminder): self
    {
        $this->callReminder = $callReminder;

        return $this;
    }

    public function getPaymentPeriod(): ?string
    {
        return $this->paymentPeriod;
    }

    public function setPaymentPeriod(string $paymentPeriod): self
    {
        $this->paymentPeriod = $paymentPeriod;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLimitDate(): ?string
    {
        return $this->limit_date;
    }

    public function setLimitDate(?string $limit_date): self
    {
        $this->limit_date = $limit_date;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(?string $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getMainbillDescription(): ?string
    {
        return $this->mainbill_description;
    }

    public function setMainbillDescription(?string $mainbill_description): self
    {
        $this->mainbill_description = $mainbill_description;

        return $this;
    }

    public function getPriceTotal(): ?string
    {
        return $this->price_total;
    }

    public function setPriceTotal(?string $price_total): self
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

    public function getStatusSend(): ?int
    {
        return $this->statusSend;
    }

    public function setStatusSend(?int $statusSend): self
    {
        $this->statusSend = $statusSend;

        return $this;
    }
}
