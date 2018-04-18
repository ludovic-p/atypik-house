<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserNotification
 *
 * @ORM\Table(name="user_notification")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserNotificationRepository")
 */
class UserNotification
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
