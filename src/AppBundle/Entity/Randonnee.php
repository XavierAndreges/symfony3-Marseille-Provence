<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;

/**
 * Randonnee
 *
 * @ORM\Table(name="randonnee")
 * @ORM\Entity
 */
class Randonnee extends item
{
    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var integer
     *
     * @ORM\Column(name="altitudeMax", type="integer", nullable=true)
     */
    private $altitudemax;

    /**
     * @var integer
     *
     * @ORM\Column(name="denivele", type="integer", nullable=true)
     */
    private $denivele;

    /**
     * @var integer
     *
     * @ORM\Column(name="distance", type="integer", nullable=true)
     */
    private $distance;

    /**
     * @var string
     *
     * @ORM\Column(name="traceGeoJSON", type="blob", length=65535, nullable=true)
     */
    private $tracegeojson;

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getAltitudemax(): ?int
    {
        return $this->altitudemax;
    }

    public function setAltitudemax(?int $altitudemax): self
    {
        $this->altitudemax = $altitudemax;

        return $this;
    }

    public function getDenivele(): ?int
    {
        return $this->denivele;
    }

    public function setDenivele(?int $denivele): self
    {
        $this->denivele = $denivele;

        return $this;
    }

    public function getDistance(): ?int
    {
        return $this->distance;
    }

    public function setDistance(?int $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getTracegeojson()
    {
        return $this->tracegeojson;
    }

    public function setTracegeojson($tracegeojson): self
    {
        $this->tracegeojson = $tracegeojson;

        return $this;
    }
}

