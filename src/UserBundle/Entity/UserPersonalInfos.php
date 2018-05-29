<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ToolsBundle\DataTrait\DateTrait;

/**
 * UserPersonalInfos
 *
 * @ORM\Table(name="user_personal_infos")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserPersonalInfosRepository")
 */
class UserPersonalInfos
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
     * @var User|null
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\User", inversedBy="personalInfos")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=1, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=45)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=45)
     */
    private $lastname;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birth_date", type="datetime", nullable=true)
     */
    private $birthDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="birth_location", type="string", length=45, nullable=true)
     */
    private $birthLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="address", type="integer")
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_number", type="string", length=10, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profession", type="string", length=45, nullable=true)
     */
    private $profession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nationality", type="string", length=45, nullable=true)
     */
    private $nationality;


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
     * @return User|null
     */
    public function getUser(): ?User
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
     * @return null|string
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param null|string $gender
     *
     * @return void
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     *
     * @return void
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     *
     * @return void
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return \DateTime|null
     */
    public function getBirthDate(): ?\DateTime
    {
        return $this->birthDate;
    }

    /**
     * @param \DateTime|null $birthDate
     *
     * @return void
     */
    public function setBirthDate($birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return null|string
     */
    public function getBirthLocation(): ?string
    {
        return $this->birthLocation;
    }

    /**
     * @param null|string $birthLocation
     *
     * @return void
     */
    public function setBirthLocation($birthLocation): void
    {
        $this->birthLocation = $birthLocation;
    }

    /**
     * @return int
     */
    public function getAddress(): int
    {
        return $this->address;
    }

    /**
     * @param int $address
     *
     * @return void
     */
    public function setAddress(int $address): void
    {
        $this->address = $address;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     *
     * @return void
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return null|string
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param null|string $phoneNumber
     *
     * @return void
     */
    public function setPhoneNumber($phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return null|string
     */
    public function getProfession(): ?string
    {
        return $this->profession;
    }

    /**
     * @param null|string $profession
     *
     * @return void
     */
    public function setProfession($profession): void
    {
        $this->profession = $profession;
    }

    /**
     * @return null|string
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    /**
     * @param null|string $nationality
     *
     * @return void
     */
    public function setNationality($nationality): void
    {
        $this->nationality = $nationality;
    }
}
