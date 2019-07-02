<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;

/**
 * Restos
 *
 * @ORM\Table(name="restos")
 * @ORM\Entity
 */
class Restos extends item
{
    /**
     * @var string
     *
     * @ORM\Column(name="soustypeIn", type="string", length=50, nullable=true)
     */
    private $soustypein;

    /**
     * @var string
     *
     * @ORM\Column(name="soustypeOff", type="string", length=100, nullable=true)
     */
    private $soustypeoff;

    /**
     * @var string
     *
     * @ORM\Column(name="speciality_fr", type="string", length=50, nullable=true)
     */
    private $specialityFr;

    /**
     * @var string
     *
     * @ORM\Column(name="speciality_en", type="string", length=50, nullable=true)
     */
    private $specialityEn;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixMoyen", type="integer", nullable=true)
     */
    private $prixmoyen;

    /**
     * @var integer
     *
     * @ORM\Column(name="pichet", type="integer", nullable=true)
     */
    private $pichet;

    /**
     * @var integer
     *
     * @ORM\Column(name="vin", type="integer", nullable=true)
     */
    private $vin;

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
     * @ORM\Column(name="ruePietonne", type="integer", nullable=false)
     */
    private $ruepietonne = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="takeAway", type="integer", nullable=true)
     */
    private $takeaway;

    public function getSoustypein(): ?string
    {
        return $this->soustypein;
    }

    public function setSoustypein(?string $soustypein): self
    {
        $this->soustypein = $soustypein;

        return $this;
    }

    public function getSoustypeoff(): ?string
    {
        return $this->soustypeoff;
    }

    public function setSoustypeoff(?string $soustypeoff): self
    {
        $this->soustypeoff = $soustypeoff;

        return $this;
    }

    public function getSpecialityFr(): ?string
    {
        return $this->specialityFr;
    }

    public function setSpecialityFr(?string $specialityFr): self
    {
        $this->specialityFr = $specialityFr;

        return $this;
    }

    public function getSpecialityEn(): ?string
    {
        return $this->specialityEn;
    }

    public function setSpecialityEn(?string $specialityEn): self
    {
        $this->specialityEn = $specialityEn;

        return $this;
    }

    public function getPrixmoyen(): ?int
    {
        return $this->prixmoyen;
    }

    public function setPrixmoyen(?int $prixmoyen): self
    {
        $this->prixmoyen = $prixmoyen;

        return $this;
    }

    public function getPichet(): ?int
    {
        return $this->pichet;
    }

    public function setPichet(?int $pichet): self
    {
        $this->pichet = $pichet;

        return $this;
    }

    public function getVin(): ?int
    {
        return $this->vin;
    }

    public function setVin(?int $vin): self
    {
        $this->vin = $vin;

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

    public function getRuepietonne(): ?int
    {
        return $this->ruepietonne;
    }

    public function setRuepietonne(int $ruepietonne): self
    {
        $this->ruepietonne = $ruepietonne;

        return $this;
    }

    public function getTakeaway(): ?int
    {
        return $this->takeaway;
    }

    public function setTakeaway(?int $takeaway): self
    {
        $this->takeaway = $takeaway;

        return $this;
    }
}

