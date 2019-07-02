<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;

/**
 * Circuits
 *
 * @ORM\Table(name="circuits")
 * @ORM\Entity
 */
class Circuits extends item
{
    /**
     * @var string
     *
     * @ORM\Column(name="partner", type="string", length=100, nullable=true)
     */
    private $partner;

    /**
     * @var string
     *
     * @ORM\Column(name="gpx", type="blob", length=65535, nullable=false)
     */
    private $gpx;

    /**
     * @var string
     *
     * @ORM\Column(name="CircuitArray", type="string", length=1000, nullable=false)
     */
    private $circuitarray;

    public function getPartner(): ?string
    {
        return $this->partner;
    }

    public function setPartner(?string $partner): self
    {
        $this->partner = $partner;

        return $this;
    }

    public function getGpx()
    {
        return $this->gpx;
    }

    public function setGpx($gpx): self
    {
        $this->gpx = $gpx;

        return $this;
    }

    public function getCircuitarray(): ?string
    {
        return $this->circuitarray;
    }

    public function setCircuitarray(string $circuitarray): self
    {
        $this->circuitarray = $circuitarray;

        return $this;
    }
}

