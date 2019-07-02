<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;

/**
 * Dormir
 *
 * @ORM\Table(name="dormir")
 * @ORM\Entity
 */
class Dormir extends item
{
    /**
     * @var integer
     *
     * @ORM\Column(name="category", type="integer", nullable=true)
     */
    private $category;

    /**
     * @var integer
     *
     * @ORM\Column(name="vueMer", type="integer", nullable=true)
     */
    private $vuemer;

    /**
     * @var integer
     *
     * @ORM\Column(name="terrasse", type="integer", nullable=true)
     */
    private $terrasse;

    /**
     * @var integer
     *
     * @ORM\Column(name="piscine", type="integer", nullable=true)
     */
    private $piscine;

    /**
     * @var integer
     *
     * @ORM\Column(name="bar", type="integer", nullable=true)
     */
    private $bar;

    /**
     * @var integer
     *
     * @ORM\Column(name="roomService", type="integer", nullable=true)
     */
    private $roomservice;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking", type="integer", nullable=true)
     */
    private $parking;

    /**
     * @var integer
     *
     * @ORM\Column(name="ascenseur", type="integer", nullable=true)
     */
    private $ascenseur;

    /**
     * @var integer
     *
     * @ORM\Column(name="wifi", type="integer", nullable=true)
     */
    private $wifi;

    /**
     * @var integer
     *
     * @ORM\Column(name="television", type="integer", nullable=true)
     */
    private $television;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(?int $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getVuemer(): ?int
    {
        return $this->vuemer;
    }

    public function setVuemer(?int $vuemer): self
    {
        $this->vuemer = $vuemer;

        return $this;
    }

    public function getTerrasse(): ?int
    {
        return $this->terrasse;
    }

    public function setTerrasse(?int $terrasse): self
    {
        $this->terrasse = $terrasse;

        return $this;
    }

    public function getPiscine(): ?int
    {
        return $this->piscine;
    }

    public function setPiscine(?int $piscine): self
    {
        $this->piscine = $piscine;

        return $this;
    }

    public function getBar(): ?int
    {
        return $this->bar;
    }

    public function setBar(?int $bar): self
    {
        $this->bar = $bar;

        return $this;
    }

    public function getRoomservice(): ?int
    {
        return $this->roomservice;
    }

    public function setRoomservice(?int $roomservice): self
    {
        $this->roomservice = $roomservice;

        return $this;
    }

    public function getParking(): ?int
    {
        return $this->parking;
    }

    public function setParking(?int $parking): self
    {
        $this->parking = $parking;

        return $this;
    }

    public function getAscenseur(): ?int
    {
        return $this->ascenseur;
    }

    public function setAscenseur(?int $ascenseur): self
    {
        $this->ascenseur = $ascenseur;

        return $this;
    }

    public function getWifi(): ?int
    {
        return $this->wifi;
    }

    public function setWifi(?int $wifi): self
    {
        $this->wifi = $wifi;

        return $this;
    }

    public function getTelevision(): ?int
    {
        return $this->television;
    }

    public function setTelevision(?int $television): self
    {
        $this->television = $television;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }
}

