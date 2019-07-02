<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;

/**
 * Shopping
 *
 * @ORM\Table(name="shopping")
 * @ORM\Entity
 */
class Shopping extends item
{
    /**
     * @var string
     *
     * @ORM\Column(name="duplicateItems", type="string", length=3500, nullable=true)
     */
    private $duplicateitems;


    public function getDuplicateitems(): ?string
    {
        return $this->duplicateitems;
    }

    public function setDuplicateitems(?string $duplicateitems): self
    {
        $this->duplicateitems = $duplicateitems;

        return $this;
    }
}

