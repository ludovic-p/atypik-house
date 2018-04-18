<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProfessionalInfos
 *
 * @ORM\Table(name="user_professional_infos")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserProfessionalInfosRepository")
 */
class UserProfessionalInfos
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
