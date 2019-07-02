<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;

/**
 * Petanque
 *
 * @ORM\Table(name="petanque")
 * @ORM\Entity
 */
class Petanque extends item
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vueMer", type="integer", nullable=true)
     */
    private $vuemer;

    /**
     * @var integer
     *
     * @ORM\Column(name="eauPotable", type="integer", nullable=true)
     */
    private $eaupotable;

    /**
     * @var integer
     *
     * @ORM\Column(name="eclairage", type="integer", nullable=true)
     */
    private $eclairage;

    /**
     * @var integer
     *
     * @ORM\Column(name="ouvertNuit", type="integer", nullable=true)
     */
    private $ouvertnuit;

    /**
     * @var integer
     *
     * @ORM\Column(name="club", type="integer", nullable=true)
     */
    private $club;

    public function getVuemer(): ?int
    {
        return $this->vuemer;
    }

    public function setVuemer(?int $vuemer): self
    {
        $this->vuemer = $vuemer;

        return $this;
    }

    public function getEaupotable(): ?int
    {
        return $this->eaupotable;
    }

    public function setEaupotable(?int $eaupotable): self
    {
        $this->eaupotable = $eaupotable;

        return $this;
    }

    public function getEclairage(): ?int
    {
        return $this->eclairage;
    }

    public function setEclairage(?int $eclairage): self
    {
        $this->eclairage = $eclairage;

        return $this;
    }

    public function getOuvertnuit(): ?int
    {
        return $this->ouvertnuit;
    }

    public function setOuvertnuit(?int $ouvertnuit): self
    {
        $this->ouvertnuit = $ouvertnuit;

        return $this;
    }

    public function getClub(): ?int
    {
        return $this->club;
    }

    public function setClub(?int $club): self
    {
        $this->club = $club;

        return $this;
    }
}
