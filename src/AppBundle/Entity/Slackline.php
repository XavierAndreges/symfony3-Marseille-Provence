<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;

/**
 * Slackline
 *
 * @ORM\Table(name="slackline")
 * @ORM\Entity
 */
class Slackline extends item
{
    /**
     * @var integer
     *
     * @ORM\Column(name="waterline", type="integer", nullable=true)
     */
    private $waterline;

    /**
     * @var integer
     *
     * @ORM\Column(name="longline", type="integer", nullable=true)
     */
    private $longline;

    /**
     * @var integer
     *
     * @ORM\Column(name="highline", type="integer", nullable=true)
     */
    private $highline;

    /**
     * @var integer
     *
     * @ORM\Column(name="naturalAnchor", type="integer", nullable=true)
     */
    private $naturalanchor;

    /**
     * @var integer
     *
     * @ORM\Column(name="aFrame", type="integer", nullable=true)
     */
    private $aframe;

    /**
     * @var integer
     *
     * @ORM\Column(name="lineMin", type="integer", nullable=true)
     */
    private $linemin;

    /**
     * @var integer
     *
     * @ORM\Column(name="lineMax", type="integer", nullable=true)
     */
    private $linemax;

    /**
     * @var integer
     *
     * @ORM\Column(name="reglementation", type="integer", nullable=true)
     */
    private $reglementation;

    /**
     * @var string
     *
     * @ORM\Column(name="associatedMapItems", type="string", length=2000, nullable=true)
     */
    private $associatedmapitems;

    public function getWaterline(): ?int
    {
        return $this->waterline;
    }

    public function setWaterline(?int $waterline): self
    {
        $this->waterline = $waterline;

        return $this;
    }

    public function getLongline(): ?int
    {
        return $this->longline;
    }

    public function setLongline(?int $longline): self
    {
        $this->longline = $longline;

        return $this;
    }

    public function getHighline(): ?int
    {
        return $this->highline;
    }

    public function setHighline(?int $highline): self
    {
        $this->highline = $highline;

        return $this;
    }

    public function getNaturalanchor(): ?int
    {
        return $this->naturalanchor;
    }

    public function setNaturalanchor(?int $naturalanchor): self
    {
        $this->naturalanchor = $naturalanchor;

        return $this;
    }

    public function getAframe(): ?int
    {
        return $this->aframe;
    }

    public function setAframe(?int $aframe): self
    {
        $this->aframe = $aframe;

        return $this;
    }

    public function getLinemin(): ?int
    {
        return $this->linemin;
    }

    public function setLinemin(?int $linemin): self
    {
        $this->linemin = $linemin;

        return $this;
    }

    public function getLinemax(): ?int
    {
        return $this->linemax;
    }

    public function setLinemax(?int $linemax): self
    {
        $this->linemax = $linemax;

        return $this;
    }

    public function getReglementation(): ?int
    {
        return $this->reglementation;
    }

    public function setReglementation(?int $reglementation): self
    {
        $this->reglementation = $reglementation;

        return $this;
    }

    public function getAssociatedmapitems(): ?string
    {
        return $this->associatedmapitems;
    }

    public function setAssociatedmapitems(?string $associatedmapitems): self
    {
        $this->associatedmapitems = $associatedmapitems;

        return $this;
    }
}

