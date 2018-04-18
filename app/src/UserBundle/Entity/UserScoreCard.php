<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserScoreCard
 *
 * @ORM\Table(name="user_score_card")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserScoreCardRepository")
 */
class UserScoreCard
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
