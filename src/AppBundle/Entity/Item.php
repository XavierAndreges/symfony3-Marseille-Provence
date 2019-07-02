<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


abstract class Item
{
    /**
     * @var string
     *
     * @ORM\Column(name="idRepName", type="string", length=50)
     * @ORM\Id
     */
    protected $idrepname;

    /**
     * @var integer
     *
     * @ORM\Column(name="actif", type="integer", nullable=true)
     */
    protected $actif = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="`table`", type="string", length=20, nullable=true)
     */
    protected $table;

    /**
     * @var string
     *
     * @ORM\Column(name="title_fr", type="string", length=100, nullable=true)
     */
    protected $titleFr;

    /**
     * @var string
     *
     * @ORM\Column(name="title_en", type="string", length=100, nullable=true)
     */
    protected $titleEn;

    /**
     * @var string
     *
     * @ORM\Column(name="shortTitle", type="string", length=50, nullable=true)
     */
    protected $shorttitle;


    /**
     * @var integer
     *
     * @ORM\Column(name="region", type="integer", nullable=true)
     */
    protected $region;

    /**
     * @var integer
     *
     * @ORM\Column(name="department", type="integer", nullable=true)
     */
    protected $department;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true)
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(name="soustype", type="string", length=50, nullable=true)
     */
    protected $soustype;

    /**
     * @var string
     *
     * @ORM\Column(name="macaron", type="string", length=50, nullable=true)
     */
    protected $macaron;

    /**
     * @var string
     *
     * @ORM\Column(name="promo_fr ", type="string", length=100, nullable=true)
     */
    protected $promoFr;

    /**
     * @var string
     *
     * @ORM\Column(name="promo_en ", type="string", length=100, nullable=true)
     */
    protected $promoEn;

    /**
     * @var string
     *
     * @ORM\Column(name="mountains", type="string", length=50, nullable=true)
     */
    protected $mountains;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     */
    protected $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     */
    protected $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitudeRouting", type="float", precision=10, scale=0, nullable=true)
     */
    protected $longituderouting;

    /**
     * @var float
     *
     * @ORM\Column(name="latitudeRouting", type="float", precision=10, scale=0, nullable=true)
     */
    protected $latituderouting;

    /**
     * @var integer
     *
     * @ORM\Column(name="smallNodeWalk", type="integer", nullable=true)
     */
    protected $smallnodewalk;

    /**
     * @var integer
     *
     * @ORM\Column(name="smallNodeCar", type="integer", nullable=true)
     */
    protected $smallnodecar;

    /**
     * @var integer
     *
     * @ORM\Column(name="fullNodeWalk", type="integer", nullable=true)
     */
    protected $fullnodewalk;

    /**
     * @var integer
     *
     * @ORM\Column(name="fullNodeCar", type="integer", nullable=true)
     */
    protected $fullnodecar;

    /**
     * @var integer
     *
     * @ORM\Column(name="costWalk", type="integer", nullable=true)
     */
    protected $costwalk;

    /**
     * @var integer
     *
     * @ORM\Column(name="costCar", type="integer", nullable=true)
     */
    protected $costcar;

    /**
     * @var string
     *
     * @ORM\Column(name="closeCity", type="string", length=100, nullable=true)
     */
    protected $closecity;

    /**
     * @var string
     *
     * @ORM\Column(name="pied", type="string", length=50, nullable=true)
     */
    protected $pied;

    /**
     * @var string
     *
     * @ORM\Column(name="velo", type="string", length=50, nullable=true)
     */
    protected $velo;

    /**
     * @var string
     *
     * @ORM\Column(name="moto", type="string", length=50, nullable=true)
     */
    protected $moto;

    /**
     * @var string
     *
     * @ORM\Column(name="auto", type="string", length=50, nullable=true)
     */
    protected $auto;

    /**
     * @var string
     *
     * @ORM\Column(name="bus", type="string", length=50, nullable=true)
     */
    protected $bus;

    /**
     * @var string
     *
     * @ORM\Column(name="resume_fr", type="string", length=200, nullable=true)
     */
    protected $resumeFr;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=200, nullable=true)
     */
    protected $link;

    /**
     * @var string
     *
     * @ORM\Column(name="transport_fr", type="string", length=1000, nullable=true)
     */
    protected $transportFr;

    /**
     * @var string
     *
     * @ORM\Column(name="transport_en", type="string", length=700, nullable=true)
     */
    protected $transportEn;

    /**
     * @var string
     *
     * @ORM\Column(name="transportBonus", type="string", length=50, nullable=true)
     */
    protected $transportBonus;

    /**
     * @var string
     *
     * @ORM\Column(name="infos_fr", type="string", length=1500, nullable=true)
     */
    protected $infosFr;

    /**
     * @var string
     *
     * @ORM\Column(name="infos_en", type="string", length=1300, nullable=true)
     */
    protected $infosEn;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=true)
     */
    protected $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="mainImage", type="string", length=50, nullable=true)
     */
    protected $mainimage;

    /**
     * @var string
     *
     * @ORM\Column(name="text_fr", type="string", length=7000, nullable=true)
     */
    protected $textFr;

    /**
     * @var string
     *
     * @ORM\Column(name="text_en", type="string", length=5000, nullable=true)
     */
    protected $textEn;


    public function setIdrepname(string $idrepname): self
    {
        $this->idrepname = $idrepname;

        return $this;
    }

    public function getIdrepname(): ?string
    {
        return $this->idrepname;
    }

    public function getActif(): ?int
    {
        return $this->actif;
    }

    public function setActif(int $actif): self
    {
        $this->actif = $actif;

        return $this;
    }

    public function getTable(): ?string
    {
        return $this->table;
    }

    public function setTable(?string $table): self
    {
        $this->table = $table;

        return $this;
    }

    public function getTitleFr(): ?string
    {
        return $this->titleFr;
    }

    public function setTitleFr(string $titleFr): self
    {
        $this->titleFr = $titleFr;

        return $this;
    }

    public function getTitleEn(): ?string
    {
        return $this->titleEn;
    }

    public function setTitleEn(?string $titleEn): self
    {
        $this->titleEn = $titleEn;

        return $this;
    }
    
    public function getShorttitle(): ?string
    {
        return $this->shorttitle;
    }

    public function setShorttitle(?string $shorttitle): self
    {
        $this->shorttitle = $shorttitle;

        return $this;
    }
    
    public function getRegion(): ?int
    {
        return $this->region;
    }

    public function setRegion(?int $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getDepartment(): ?int
    {
        return $this->department;
    }

    public function setDepartment(?int $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSoustype(): ?string
    {
        return $this->soustype;
    }

    public function setSoustype(?string $soustype): self
    {
        $this->soustype = $soustype;

        return $this;
    }

    public function getMacaron(): ?string
    {
        return $this->macaron;
    }

    public function setMacaron(?string $macaron): self
    {
        $this->macaron = $macaron;

        return $this;
    }

    public function getPromoFr(): ?string
    {
        return $this->promoFr;
    }

    public function setPromoFr(?string $promoFr): self
    {
        $this->promoFr = $promoFr;

        return $this;
    }

    public function getPromoEn(): ?string
    {
        return $this->promoEn;
    }

    public function setPromoEn(?string $promoEn): self
    {
        $this->promoEn = $promoEn;

        return $this;
    }

    public function getMountains(): ?string
    {
        return $this->mountains;
    }

    public function setMountains(?string $mountains): self
    {
        $this->mountains = $mountains;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongituderouting(): ?float
    {
        return $this->longituderouting;
    }

    public function setLongituderouting(?float $longituderouting): self
    {
        $this->longituderouting = $longituderouting;

        return $this;
    }

    public function getLatituderouting(): ?float
    {
        return $this->latituderouting;
    }

    public function setLatituderouting(?float $latituderouting): self
    {
        $this->latituderouting = $latituderouting;

        return $this;
    }

    public function getSmallnodewalk(): ?int
    {
        return $this->smallnodewalk;
    }

    public function setSmallnodewalk(?int $smallnodewalk): self
    {
        $this->smallnodewalk = $smallnodewalk;

        return $this;
    }

    public function getSmallnodecar(): ?int
    {
        return $this->smallnodecar;
    }

    public function setSmallnodecar(?int $smallnodecar): self
    {
        $this->smallnodecar = $smallnodecar;

        return $this;
    }

    public function getFullnodewalk(): ?int
    {
        return $this->fullnodewalk;
    }

    public function setFullnodewalk(?int $fullnodewalk): self
    {
        $this->fullnodewalk = $fullnodewalk;

        return $this;
    }

    public function getFullnodecar(): ?int
    {
        return $this->fullnodecar;
    }

    public function setFullnodecar(?int $fullnodecar): self
    {
        $this->fullnodecar = $fullnodecar;

        return $this;
    }

    public function getCostwalk(): ?int
    {
        return $this->costwalk;
    }

    public function setCostwalk(?int $costwalk): self
    {
        $this->costwalk = $costwalk;

        return $this;
    }

    public function getCostcar(): ?int
    {
        return $this->costcar;
    }

    public function setCostcar(?int $costcar): self
    {
        $this->costcar = $costcar;

        return $this;
    }

    public function getClosecity(): ?string
    {
        return $this->closecity;
    }

    public function setClosecity(?string $closecity): self
    {
        $this->closecity = $closecity;

        return $this;
    }

    public function getPied(): ?string
    {
        return $this->pied;
    }

    public function setPied(?string $pied): self
    {
        $this->pied = $pied;

        return $this;
    }

    public function getVelo(): ?string
    {
        return $this->velo;
    }

    public function setVelo(?string $velo): self
    {
        $this->velo = $velo;

        return $this;
    }

    public function getMoto(): ?string
    {
        return $this->moto;
    }

    public function setMoto(?string $moto): self
    {
        $this->moto = $moto;

        return $this;
    }

    public function getAuto(): ?string
    {
        return $this->auto;
    }

    public function setAuto(?string $auto): self
    {
        $this->auto = $auto;

        return $this;
    }

    public function getBus(): ?string
    {
        return $this->bus;
    }

    public function setBus(?string $bus): self
    {
        $this->bus = $bus;

        return $this;
    }

    public function getResumeFr(): ?string
    {
        return $this->resumeFr;
    }

    public function setResumeFr(?string $resumeFr): self
    {
        $this->resumeFr = $resumeFr;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getTransportFr(): ?string
    {
        return $this->transportFr;
    }

    public function setTransportFr(?string $transportFr): self
    {
        $this->transportFr = $transportFr;

        return $this;
    }

    public function getTransportEn(): ?string
    {
        return $this->transportEn;
    }

    public function setTransportEn(?string $transportEn): self
    {
        $this->transportEn = $transportEn;

        return $this;
    }

    public function getTransportBonus(): ?string
    {
        return $this->transportBonus;
    }

    public function setTransportBonus(?string $transportBonus): self
    {
        $this->transportBonus = $transportBonus;

        return $this;
    }

    public function getInfosFr(): ?string
    {
        return $this->infosFr;
    }

    public function setInfosFr(?string $infosFr): self
    {
        $this->infosFr = $infosFr;

        return $this;
    }

    public function getInfosEn(): ?string
    {
        return $this->infosEn;
    }

    public function setInfosEn(?string $infosEn): self
    {
        $this->infosEn = $infosEn;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getMainimage(): ?string
    {
        return $this->mainimage;
    }

    public function setMainimage(?string $mainimage): self
    {
        $this->mainimage = $mainimage;

        return $this;
    }

    public function getTextFr(): ?string
    {
        return $this->textFr;
    }

    public function setTextFr(?string $textFr): self
    {
        $this->textFr = $textFr;

        return $this;
    }

    public function getTextEn(): ?string
    {
        return $this->textEn;
    }

    public function setTextEn(?string $textEn): self
    {
        $this->textEn = $textEn;

        return $this;
    }

}
