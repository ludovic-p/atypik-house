<?php

namespace HousingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingDetail
 *
 * @ORM\Table(name="housing_detail")
 * @ORM\Entity(repositoryClass="HousingBundle\Repository\HousingDetailRepository")
 */
class HousingDetail
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
