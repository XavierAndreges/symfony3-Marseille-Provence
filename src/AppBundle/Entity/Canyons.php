<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;

/**
 * Canyons
 *
 * @ORM\Table(name="canyons")
 * @ORM\Entity
 */

class Canyons extends item
{
    /**
     * @var string
     *
     * @ORM\Column(name="bounds", type="string", length=50, nullable=true)
     */
    private $bounds;

     /**
     * @var integer
     *
     * @ORM\Column(name="cotationVerticale", type="integer", nullable=true)
     */
    private $cotationverticale;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotationAquatique", type="integer", nullable=true)
     */
    private $cotationaquatique;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotationEngagement", type="integer", nullable=true)
     */
    private $cotationengagement;

    /**
     * @var integer
     *
     * @ORM\Column(name="approcheTime", type="integer", nullable=true)
     */
    private $approchetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="retourTime", type="integer", nullable=true)
     */
    private $retourtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="descenteTime", type="integer", nullable=true)
     */
    private $descentetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="cascadeMax", type="integer", nullable=true)
     */
    private $cascademax;

    /**
     * @var integer
     *
     * @ORM\Column(name="corde", type="integer", nullable=true)
     */
    private $corde;

    /**
     * @var integer
     *
     * @ORM\Column(name="altitudeDepart", type="integer", nullable=true)
     */
    private $altitudedepart;

    /**
     * @var integer
     *
     * @ORM\Column(name="denivele", type="integer", nullable=true)
     */
    private $denivele;

    /**
     * @var integer
     *
     * @ORM\Column(name="longueur", type="integer", nullable=true)
     */
    private $longueur;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="qualiteEau", type="integer", nullable=true)
     */
    private $qualiteeau;

    /**
     * @var integer
     *
     * @ORM\Column(name="frequentation", type="integer", nullable=true)
     */
    private $frequentation;
    
        /**
     * @var integer
     *
     * @ORM\Column(name="traceIGN", type="integer", nullable=true)
     */
    private $traceign;

    /**
     * @var float
     *
     * @ORM\Column(name="latitudeEnd", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitudeend;

    /**
     * @var float
     *
     * @ORM\Column(name="longitudeEnd", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitudeend;

    /**
     * @var string
     *
     * @ORM\Column(name="approcheGeoJSON", type="text", length=65535, nullable=true)
     */
    private $approchegeojson;

    /**
     * @var string
     *
     * @ORM\Column(name="descenteGeoJSON", type="text", length=65535, nullable=true)
     */
    private $descentegeojson;

    /**
     * @var string
     *
     * @ORM\Column(name="retourGeoJSON", type="text", length=65535, nullable=true)
     */
    private $retourgeojson;

  

    public function getBounds(): ?string
    {
        return $this->bounds;
    }

    public function setBounds(?string $bounds): self
    {
        $this->bounds = $bounds;

        return $this;
    }

    public function getCotationverticale(): ?int
    {
        return $this->cotationverticale;
    }

    public function setCotationverticale(?int $cotationverticale): self
    {
        $this->cotationverticale = $cotationverticale;

        return $this;
    }

    public function getCotationaquatique(): ?int
    {
        return $this->cotationaquatique;
    }

    public function setCotationaquatique(?int $cotationaquatique): self
    {
        $this->cotationaquatique = $cotationaquatique;

        return $this;
    }

    public function getCotationengagement(): ?int
    {
        return $this->cotationengagement;
    }

    public function setCotationengagement(?int $cotationengagement): self
    {
        $this->cotationengagement = $cotationengagement;

        return $this;
    }

    public function getApprochetime(): ?int
    {
        return $this->approchetime;
    }

    public function setApprochetime(?int $approchetime): self
    {
        $this->approchetime = $approchetime;

        return $this;
    }

    public function getRetourtime(): ?int
    {
        return $this->retourtime;
    }

    public function setRetourtime(?int $retourtime): self
    {
        $this->retourtime = $retourtime;

        return $this;
    }

    public function getDescentetime(): ?int
    {
        return $this->descentetime;
    }

    public function setDescentetime(?int $descentetime): self
    {
        $this->descentetime = $descentetime;

        return $this;
    }

    public function getCascademax(): ?int
    {
        return $this->cascademax;
    }

    public function setCascademax(?int $cascademax): self
    {
        $this->cascademax = $cascademax;

        return $this;
    }

    public function getCorde(): ?int
    {
        return $this->corde;
    }

    public function setCorde(?int $corde): self
    {
        $this->corde = $corde;

        return $this;
    }

    public function getAltitudedepart(): ?int
    {
        return $this->altitudedepart;
    }

    public function setAltitudedepart(?int $altitudedepart): self
    {
        $this->altitudedepart = $altitudedepart;

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

    public function getLongueur(): ?int
    {
        return $this->longueur;
    }

    public function setLongueur(?int $longueur): self
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getQualiteeau(): ?int
    {
        return $this->qualiteeau;
    }

    public function setQualiteeau(?int $qualiteeau): self
    {
        $this->qualiteeau = $qualiteeau;

        return $this;
    }

    public function getFrequentation(): ?int
    {
        return $this->frequentation;
    }

    public function setFrequentation(?int $frequentation): self
    {
        $this->frequentation = $frequentation;

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

    public function getLatitudeend(): ?float
    {
        return $this->latitudeend;
    }

    public function setLatitudeend(?float $latitudeend): self
    {
        $this->latitudeend = $latitudeend;

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

