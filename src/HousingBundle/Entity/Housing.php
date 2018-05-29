<?php

namespace HousingBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use ToolsBundle\DataTrait\DateTrait;
use UserBundle\Entity\Address;
use UserBundle\Entity\User;

/**
 * Housing
 *
 * @ORM\Table(name="housing")
 * @ORM\Entity(repositoryClass="HousingBundle\Repository\HousingRepository")
 */
class Housing
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
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="housings")
     * @ORM\JoinColumn(name="proprietary", referencedColumnName="id")
     */
    private $proprietary;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45)
     */
    private $title;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"title"})
     *
     * @ORM\Column(name="slug", type="string", length=45, unique=true)
     */
    private $slug;

    /**
     * @var Address
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Address")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;

    /**
     * @ORM\ManyToOne(targetEntity="HousingBundle\Entity\HousingType", inversedBy="housings")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="HousingBundle\Entity\HousingDetailValue", mappedBy="housing")
     */
    private $details;

    /**
     * @ORM\OneToMany(targetEntity="HousingBundle\Entity\HousingNotation", mappedBy="housing")
     */
    private $notations;

    /**
     * @ORM\OneToMany(targetEntity="HousingBundle\Entity\HousingDocument", mappedBy="housing")
     */
    private $documents;

    /**
     * @ORM\OneToMany(targetEntity="HousingBundle\Entity\HousingImages", mappedBy="housing")
     */
    private $images;

    /**
     * @ORM\OneToMany(targetEntity="AtypikHouseBundle\Entity\Reservation", mappedBy="housing")
     */
    private $reservations;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * Housing constructor.
     */
    public function __construct()
    {
        $this->details = new ArrayCollection();
        $this->notations = new ArrayCollection();
        $this->documents = new ArrayCollection();
        $this->images = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getProprietary(): User
    {
        return $this->proprietary;
    }

    /**
     * @param mixed $proprietary
     *
     * @return void
     */
    public function setProprietary($proprietary): void
    {
        $this->proprietary = $proprietary;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return void
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
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
     * @return HousingType
     */
    public function getType(): HousingType
    {
        return $this->type;
    }

    /**
     * @param HousingType $type
     *
     * @return void
     */
    public function setType(HousingType $type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     *
     * @return void
     */
    public function setDetails($details): void
    {
        $this->details = $details;
    }

    /**
     * @return mixed
     */
    public function getNotations()
    {
        return $this->notations;
    }

    /**
     * @param mixed $notations
     *
     * @return void
     */
    public function setNotations($notations): void
    {
        $this->notations = $notations;
    }

    /**
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param mixed $documents
     *
     * @return void
     */
    public function setDocuments($documents): void
    {
        $this->documents = $documents;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     *
     * @return void
     */
    public function setImages($images): void
    {
        $this->images = $images;
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
