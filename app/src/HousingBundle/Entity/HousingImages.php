<?php

namespace HousingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingImages
 *
 * @ORM\Table(name="housing_images")
 * @ORM\Entity(repositoryClass="HousingBundle\Repository\HousingImagesRepository")
 */
class HousingImages
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
