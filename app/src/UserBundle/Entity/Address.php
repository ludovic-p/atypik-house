<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ToolsBundle\DataTrait\DateTrait;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\AddressRepository")
 */
class Address
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
     * @var string|null
     *
     * @ORM\Column(name="street_number", type="string", length=10, nullable=true)
     */
    private $streetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=45)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=45)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=8)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=35)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_address", type="text", nullable=true)
     */
    private $additionalAddress;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return null|string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @param null|string $streetNumber
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
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
     */
    public function setState(string $state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    /**
     * @return null|string
     */
    public function getAdditionalAddress()
    {
        return $this->additionalAddress;
    }

    /**
     * @param string $additionalAddress
     */
    public function setAdditionalAddress(string $additionalAddress)
    {
        $this->additionalAddress = $additionalAddress;
    }

}
