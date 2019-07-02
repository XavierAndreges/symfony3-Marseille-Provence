<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;

/**
 * Sitesescalade
 *
 * @ORM\Table(name="sitesescalade")
 * @ORM\Entity
 */
class Sitesescalade extends item
{
    /**
     * @var string
     *
     * @ORM\Column(name="orientation", type="string", length=50, nullable=true)
     */
    private $orientation;

    /**
     * @var integer
     *
     * @ORM\Column(name="vueMer", type="integer", nullable=true)
     */
    private $vuemer;

    /**
     * @var integer
     *
     * @ORM\Column(name="noMistral", type="integer", nullable=true)
     */
    private $nomistral;

    /**
     * @var string
     *
     * @ORM\Column(name="cotationMediane", type="string", length=3, nullable=true)
     */
    private $cotationmediane;

    /**
     * @var string
     *
     * @ORM\Column(name="cotationMax", type="string", length=3, nullable=true)
     */
    private $cotationmax;

    /**
     * @var string
     *
     * @ORM\Column(name="cotationMin", type="string", length=3, nullable=true)
     */
    private $cotationmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="longueurMax", type="integer", nullable=true)
     */
    private $longueurmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="dureeMoyenne", type="integer", nullable=true)
     */
    private $dureemoyenne;

    /**
     * @var integer
     *
     * @ORM\Column(name="approche", type="integer", nullable=false)
     */
    private $approche;

    /**
     * @var integer
     *
     * @ORM\Column(name="approcheIGN", type="integer", nullable=true)
     */
    private $approcheign;

    /**
     * @var integer
     *
     * @ORM\Column(name="traceIGN", type="integer", nullable=true)
     */
    private $traceign;

    /**
     * @var float
     *
     * @ORM\Column(name="longitudeEnd", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitudeend;

    /**
     * @var float
     *
     * @ORM\Column(name="latitudeEnd", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitudeend;

    /**
     * @var string
     *
     * @ORM\Column(name="approcheGeoJSON", type="text", length=65535, nullable=false)
     */
    private $approchegeojson;

    /**
     * @var string
     *
     * @ORM\Column(name="descenteGeoJSON", type="text", length=65535, nullable=false)
     */
    private $descentegeojson;

    /**
     * @var string
     *
     * @ORM\Column(name="retourGeoJSON", type="text", length=65535, nullable=false)
     */
    private $retourgeojson;

    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    public function setOrientation(?string $orientation): self
    {
        $this->orientation = $orientation;

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

    public function getNomistral(): ?int
    {
        return $this->nomistral;
    }

    public function setNomistral(?int $nomistral): self
    {
        $this->nomistral = $nomistral;

        return $this;
    }

    public function getCotationmediane(): ?string
    {
        return $this->cotationmediane;
    }

    public function setCotationmediane(?string $cotationmediane): self
    {
        $this->cotationmediane = $cotationmediane;

        return $this;
    }

    public function getCotationmax(): ?string
    {
        return $this->cotationmax;
    }

    public function setCotationmax(?string $cotationmax): self
    {
        $this->cotationmax = $cotationmax;

        return $this;
    }

    public function getCotationmin(): ?string
    {
        return $this->cotationmin;
    }

    public function setCotationmin(?string $cotationmin): self
    {
        $this->cotationmin = $cotationmin;

        return $this;
    }

    public function getLongueurmax(): ?int
    {
        return $this->longueurmax;
    }

    public function setLongueurmax(?int $longueurmax): self
    {
        $this->longueurmax = $longueurmax;

        return $this;
    }

    public function getDureemoyenne(): ?int
    {
        return $this->dureemoyenne;
    }

    public function setDureemoyenne(?int $dureemoyenne): self
    {
        $this->dureemoyenne = $dureemoyenne;

        return $this;
    }

    public function getApproche(): ?int
    {
        return $this->approche;
    }

    public function setApproche(int $approche): self
    {
        $this->approche = $approche;

        return $this;
    }

    public function getApprocheign(): ?int
    {
        return $this->approcheign;
    }

    public function setApprocheign(?int $approcheign): self
    {
        $this->approcheign = $approcheign;

        return $this;
    }

    public function getTraceign(): ?int
    {
        return $this->traceign;
    }

    public function setTraceign(?int $traceign): self
    {
        $this->traceign = $traceign;

        return $this;
    }

    public function getLongitudeend(): ?float
    {
        return $this->longitudeend;
    }

    public function setLongitudeend(?float $longitudeend): self
    {
        $this->longitudeend = $longitudeend;

        return $this;
    }

    public function getLatitudeend(): ?float
    {
        return $this->latitudeend;
    }

    public function setLatitudeend(?float $latitudeend): self
    {
        $this->latitudeend = $latitudeend;

        return $this;
    }

    public function getApprochegeojson(): ?string
    {
        return $this->approchegeojson;
    }

    public function setApprochegeojson(string $approchegeojson): self
    {
        $this->approchegeojson = $approchegeojson;

        return $this;
    }

    public function getDescentegeojson(): ?string
    {
        return $this->descentegeojson;
    }

    public function setDescentegeojson(string $descentegeojson): self
    {
        $this->descentegeojson = $descentegeojson;

        return $this;
    }

    public function getRetourgeojson(): ?string
    {
        return $this->retourgeojson;
    }

    public function setRetourgeojson(string $retourgeojson): self
    {
        $this->retourgeojson = $retourgeojson;

        return $this;
    }
}

