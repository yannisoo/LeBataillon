<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AgencyRepository")
 */
class Agency
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
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $signature;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $SIREP;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone_work;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $phone_mobile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bank_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $counter_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $account_number;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rib_key;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zone_agency;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $iban;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bic;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function getSIREP(): ?string
    {
        return $this->SIREP;
    }

    public function setSIREP(?string $SIREP): self
    {
        $this->SIREP = $SIREP;

        return $this;
    }

    public function getPhoneWork(): ?string
    {
        return $this->phone_work;
    }

    public function setPhoneWork(?string $phone_work): self
    {
        $this->phone_work = $phone_work;

        return $this;
    }

    public function getPhoneMobile(): ?int
    {
        return $this->phone_mobile;
    }

    public function setPhoneMobile(?int $phone_mobile): self
    {
        $this->phone_mobile = $phone_mobile;

        return $this;
    }

    public function getBankCode(): ?string
    {
        return $this->bank_code;
    }

    public function setBankCode(?string $bank_code): self
    {
        $this->bank_code = $bank_code;

        return $this;
    }

    public function getCounterCode(): ?string
    {
        return $this->counter_code;
    }

    public function setCounterCode(?string $counter_code): self
    {
        $this->counter_code = $counter_code;

        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->account_number;
    }

    public function setAccountNumber(?string $account_number): self
    {
        $this->account_number = $account_number;

        return $this;
    }

    public function getRibKey(): ?string
    {
        return $this->rib_key;
    }

    public function setRibKey(?string $rib_key): self
    {
        $this->rib_key = $rib_key;

        return $this;
    }

    public function getZoneAgency(): ?string
    {
        return $this->zone_agency;
    }

    public function setZoneAgency(?string $zone_agency): self
    {
        $this->zone_agency = $zone_agency;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
