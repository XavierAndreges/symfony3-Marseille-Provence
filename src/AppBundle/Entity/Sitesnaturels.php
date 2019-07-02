<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;

/**
 * Sitesnaturels
 *
 * @ORM\Table(name="sitesnaturels")
 * @ORM\Entity
 */
class Sitesnaturels extends item
{
    /**
     * @var integer
     *
     * @ORM\Column(name="toilette", type="integer", nullable=true)
     */
    private $toilette;

    /**
     * @var integer
     *
     * @ORM\Column(name="douche", type="integer", nullable=true)
     */
    private $douche;

    /**
     * @var integer
     *
     * @ORM\Column(name="eauPotable", type="integer", nullable=true)
     */
    private $eaupotable;

    /**
     * @var integer
     *
     * @ORM\Column(name="sable", type="integer", nullable=true)
     */
    private $sable;

    /**
     * @var integer
     *
     * @ORM\Column(name="galet", type="integer", nullable=true)
     */
    private $galet;

    /**
     * @var integer
     *
     * @ORM\Column(name="eauDouce", type="integer", nullable=true)
     */
    private $eaudouce;

    /**
     * @var integer
     *
     * @ORM\Column(name="secours", type="integer", nullable=true)
     */
    private $secours;

    /**
     * @var integer
     *
     * @ORM\Column(name="beachVolley", type="integer", nullable=true)
     */
    private $beachvolley;

    public function getToilette(): ?int
    {
        return $this->toilette;
    }

    public function setToilette(?int $toilette): self
    {
        $this->toilette = $toilette;

        return $this;
    }

    public function getDouche(): ?int
    {
        return $this->douche;
    }

    public function setDouche(?int $douche): self
    {
        $this->douche = $douche;

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

    public function getSable(): ?int
    {
        return $this->sable;
    }

    public function setSable(?int $sable): self
    {
        $this->sable = $sable;

        return $this;
    }

    public function getGalet(): ?int
    {
        return $this->galet;
    }

    public function setGalet(?int $galet): self
    {
        $this->galet = $galet;

        return $this;
    }

    public function getEaudouce(): ?int
    {
        return $this->eaudouce;
    }

    public function setEaudouce(?int $eaudouce): self
    {
        $this->eaudouce = $eaudouce;

        return $this;
    }

    public function getSecours(): ?int
    {
        return $this->secours;
    }

    public function setSecours(?int $secours): self
    {
        $this->secours = $secours;

        return $this;
    }

    public function getBeachvolley(): ?int
    {
        return $this->beachvolley;
    }

    public function setBeachvolley(?int $beachvolley): self
    {
        $this->beachvolley = $beachvolley;

        return $this;
    }
}

