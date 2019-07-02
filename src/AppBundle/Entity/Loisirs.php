<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;

/**
 * Loisirs
 *
 * @ORM\Table(name="loisirs")
 * @ORM\Entity
 */
class Loisirs extends item
{
    /**
     * @var string
     *
     * @ORM\Column(name="date_fr", type="string", length=100, nullable=true)
     */
    private $dateFr;

    /**
     * @var string
     *
     * @ORM\Column(name="date_en", type="string", length=100, nullable=true)
     */
    private $dateEn;


    public function getDateFr(): ?string
    {
        return $this->dateFr;
    }

    public function setDateFr(?string $dateFr): self
    {
        $this->dateFr = $dateFr;

        return $this;
    }

    public function getDateEn(): ?string
    {
        return $this->dateEn;
    }

    public function setDateEn(?string $dateEn): self
    {
        $this->dateEn = $dateEn;

        return $this;
    }
}

