<?php

namespace UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use UserBundle\Form\PersonalInfoType;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="HousingBundle\Entity\Housing", mappedBy="proprietary")
     */
    private $housings;

    /**
     * @ORM\OneToMany(targetEntity="AtypikHouseBundle\Entity\Reservation", mappedBy="user")
     */
    private $reservations;

    /**
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\UserPersonalInfos", mappedBy="user")
     */
    private $personalInfos;

    /**
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\UserProfessionalInfos", mappedBy="user")
     */
    private $professionalInfos;

    /**
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\UserScoreCard", mappedBy="user")
     */
    private $scoreCard;

    /**
     * @var null|Address
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Address")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\UserWishlist", mappedBy="user")
     */
    private $wichlists;

    /**
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\UserNotification", mappedBy="user")
     */
    private $notifications;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
     */
    protected $facebookId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true)
     */
    protected $facebookAccessToken;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_id", type="string", length=255, nullable=true)
     */
    protected $googleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_access_token", type="string", length=255, nullable=true)
     */
    protected $googleAccessToken;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_access_token", type="string", length=255, nullable=true)
     */
    protected $userAccessToken;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    protected $deletedAt;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->housings = new ArrayCollection();
        $this->reservations = new ArrayCollection();
        $this->wichlists = new ArrayCollection();
        $this->notifications = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getHousings()
    {
        return $this->housings;
    }

    /**
     * @param mixed $housings
     *
     * @return void
     */
    public function setHousings($housings): void
    {
        $this->housings = $housings;
    }

    /**
     * @return Address
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return void
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * @param mixed $reservations
     *
     * @return void
     */
    public function setReservations($reservations): void
    {
        $this->reservations = $reservations;
    }

    /**
     * @return null|UserPersonalInfos
     */
    public function getPersonalInfos(): ?UserPersonalInfos
    {
        return $this->personalInfos;
    }

    /**
     * @param mixed $personalInfos
     *
     * @return void
     */
    public function setPersonalInfos($personalInfos): void
    {
        $this->personalInfos = $personalInfos;
    }

    /**
     * @return null|UserProfessionalInfos
     */
    public function getProfessionalInfos(): ?UserProfessionalInfos
    {
        return $this->professionalInfos;
    }

    /**
     * @param mixed $professionalInfos
     *
     * @return void
     */
    public function setProfessionalInfos(UserProfessionalInfos $professionalInfos): void
    {
        $this->professionalInfos = $professionalInfos;
    }

    /**
     * @return UserScoreCard
     */
    public function getScoreCard(): UserScoreCard
    {
        return $this->scoreCard;
    }

    /**
     * @param UserScoreCard $scoreCard
     *
     * @return void
     */
    public function setScoreCard(UserScoreCard $scoreCard): void
    {
        $this->scoreCard = $scoreCard;
    }

    /**
     * @return mixed
     */
    public function getWichlists()
    {
        return $this->wichlists;
    }

    /**
     * @param mixed $wichlists
     *
     * @return void
     */
    public function setWichlists($wichlists): void
    {
        $this->wichlists = $wichlists;
    }

    /**
     * @return mixed
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * @param mixed $notifications
     *
     * @return void
     */
    public function setNotifications($notifications): void
    {
        $this->notifications = $notifications;
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

    /**
     * @return null|string
     */
    public function getFacebookId(): ?string
    {
        return $this->facebookId;
    }

    /**
     * @param string $facebookId
     *
     * @return void
     */
    public function setFacebookId(string $facebookId): void
    {
        $this->facebookId = $facebookId;
    }

    /**
     * @return null|string
     */
    public function getFacebookAccessToken(): ?string
    {
        return $this->facebookAccessToken;
    }

    /**
     * @param string $facebookAccessToken
     *
     * @return void
     */
    public function setFacebookAccessToken(string $facebookAccessToken): void
    {
        $this->facebookAccessToken = $facebookAccessToken;
    }

    /**
     * @return null|string
     */
    public function getGoogleId(): ?string
    {
        return $this->googleId;
    }

    /**
     * @param null|string $googleId
     *
     * @return void
     */
    public function setGoogleId($googleId): void
    {
        $this->googleId = $googleId;
    }

    /**
     * @return null|string
     */
    public function getGoogleAccessToken(): ?string
    {
        return $this->googleAccessToken;
    }

    /**
     * @param null|string $googleAccessToken
     *
     * @return void
     */
    public function setGoogleAccessToken($googleAccessToken): void
    {
        $this->googleAccessToken = $googleAccessToken;
    }

    /**
     * @return null|string
     */
    public function getUserAccessToken(): ?string
    {
        return $this->userAccessToken;
    }

    /**
     * @param null|string $userAccessToken
     *
     * @return void
     */
    public function setUserAccessToken($userAccessToken): void
    {
        $this->userAccessToken = $userAccessToken;
    }
}
