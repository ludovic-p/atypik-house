<?php

namespace HousingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingNotationType
 *
 * @ORM\Table(name="housing_notation_type")
 * @ORM\Entity(repositoryClass="HousingBundle\Repository\HousingNotationTypeRepository")
 */
class HousingNotationType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
