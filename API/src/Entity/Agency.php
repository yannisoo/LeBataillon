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
}
