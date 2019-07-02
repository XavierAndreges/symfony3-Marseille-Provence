<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Item as item;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Bonsplans
 *
 * @ApiResource
 * @ORM\Table(name="bonsplans")
 * @ORM\Entity
 */

class BonsPlans extends item
{
    
}
