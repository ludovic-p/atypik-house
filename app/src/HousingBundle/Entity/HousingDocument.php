<?php

namespace HousingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingDocument
 *
 * @ORM\Table(name="housing_document")
 * @ORM\Entity(repositoryClass="HousingBundle\Repository\HousingDocumentRepository")
 */
class HousingDocument
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
