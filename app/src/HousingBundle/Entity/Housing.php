<?php

namespace HousingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Housing
 *
 * @ORM\Table(name="housing")
 * @ORM\Entity(repositoryClass="HousingBundle\Repository\HousingRepository")
 */
class Housing
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
