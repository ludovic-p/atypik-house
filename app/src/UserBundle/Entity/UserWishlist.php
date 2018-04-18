<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserWishlist
 *
 * @ORM\Table(name="user_wishlist")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserWishlistRepository")
 */
class UserWishlist
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
