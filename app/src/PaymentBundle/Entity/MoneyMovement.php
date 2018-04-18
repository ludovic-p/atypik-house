<?php

namespace PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MoneyMovement
 *
 * @ORM\Table(name="money_movement")
 * @ORM\Entity(repositoryClass="PaymentBundle\Repository\MoneyMovementRepository")
 */
class MoneyMovement
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
