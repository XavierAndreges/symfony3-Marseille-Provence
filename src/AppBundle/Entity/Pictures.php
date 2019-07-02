<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pictures
 *
 * @ORM\Table(name="pictures")
 * @ORM\Entity
 */
class Pictures
{
    /**
     * @var string
     *
     * @ORM\Column(name="tableName", type="string", length=50, nullable=false)
     */
    private $tablename;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="idRepName", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idrepname;

    public function getTablename(): ?string
    {
        return $this->tablename;
    }

    public function setTablename(string $tablename): self
    {
        $this->tablename = $tablename;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getIdrepname(): ?string
    {
        return $this->idrepname;
    }


}

