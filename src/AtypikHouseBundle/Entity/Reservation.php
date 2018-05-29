<?php

namespace AtypikHouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PaymentBundle\Entity\PaymentInfos;
use ToolsBundle\DataTrait\DateTrait;
use UserBundle\Entity\User;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AtypikHouseBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\ManyToOne(targetEntity="HousingBundle\Entity\Housing", inversedBy="reservations")
     * @ORM\JoinColumn(name="housing_id", referencedColumnName="id")
     */
    private $housing;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="reservations")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=45)
     */
    private $state;

    /**
     * @ORM\OneToOne(targetEntity="PaymentBundle\Entity\PaymentInfos", mappedBy="reservation")
     */
    private $paymentInfo;

    /**
     * @var \DateTime | null
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

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
     * @return mixed
     */
    public function getHousing()
    {
        return $this->housing;
    }

    /**
     * @param mixed $housing
     *
     * @return void
     */
    public function setHousing($housing): void
    {
        $this->housing = $housing;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @return void
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
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
     * @return PaymentInfos
     */
    public function getPaymentInfo(): PaymentInfos
    {
        return $this->paymentInfo;
    }

    /**
     * @param PaymentInfos $paymentInfo
     *
     * @return void
     */
    public function setPaymentInfo(PaymentInfos $paymentInfo): void
    {
        $this->paymentInfo = $paymentInfo;
    }

    /**
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }

    /**
     * @param \DateTime|null $deletedAt
     *
     * @return void
     */
    public function setDeletedAt($deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }
}
