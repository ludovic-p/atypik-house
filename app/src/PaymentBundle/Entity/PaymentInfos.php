<?php

namespace PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentInfos
 *
 * @ORM\Table(name="payment_infos")
 * @ORM\Entity(repositoryClass="PaymentBundle\Repository\PaymentInfosRepository")
 */
class PaymentInfos
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
