<?php

namespace PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ToolsBundle\DataTrait\DateTrait;

/**
 * MoneyMovement
 *
 * @ORM\Table(name="money_movement")
 * @ORM\Entity(repositoryClass="PaymentBundle\Repository\MoneyMovementRepository")
 */
class MoneyMovement
{
    use DateTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=45)
     */
    private $state;


    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
     * @var MoneyMovement
     *
     * @ORM\ManyToOne(targetEntity="PaymentBundle\Entity\PaymentInfos", inversedBy="moneyMovements")
     * @ORM\JoinColumn(name="payment_infos_id", referencedColumnName="id")
     */
    private $paymentInfos;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return void
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return void
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getPaymentInfos()
    {
        return $this->paymentInfos;
    }

    /**
     * @param MoneyMovement $paymentInfos
     *
     * @return void
     */
    public function setPaymentInfos(MoneyMovement $paymentInfos): void
    {
        $this->paymentInfos = $paymentInfos;
    }
}
