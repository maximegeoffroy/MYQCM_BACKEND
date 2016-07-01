<?php

namespace IIA\webServiceBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;

/**
 * user
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="IIA\webServiceBundle\Repository\userRepository")
 *
 *
 * @HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     * 
     * @Expose
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     * 
     * @Expose
     */
    protected $firstname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     *
     * @Expose 
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     * @Expose
     */
    protected $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="IIA\webServiceBundle\Entity\UserType")
     * @ORM\JoinColumn(nullable=true)
     * @Expose
    */
    protected $userType;

    /**
     * @ORM\ManyToOne(targetEntity="IIA\webServiceBundle\Entity\UserGroup")
     * @ORM\JoinColumn(nullable=true)
     * @Expose
    */
    protected $userGroup;

    /**
     * @ORM\OneToMany(targetEntity="IIA\webServiceBundle\Entity\QcmUser", mappedBy="user")
     * @Expose
    */
    protected $userQcms;

    //Constructor
    public function __construct(){
        parent::__construct();
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return user
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }


    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     * @ORM\PreUpdate
     * @param \DateTime $updatedAt
     *
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = new \DateTime();

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set userType
     *
     * @param \IIA\webServiceBundle\Entity\UserType $userType
     *
     * @return User
     */
    public function setUserType(\IIA\webServiceBundle\Entity\UserType $userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return \IIA\webServiceBundle\Entity\UserType
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set userGroup
     *
     * @param \IIA\webServiceBundle\Entity\UserGroup $userGroup
     *
     * @return User
     */
    public function setUserGroup(\IIA\webServiceBundle\Entity\UserGroup $userGroup)
    {
        $this->userGroup = $userGroup;

        return $this;
    }

    /**
     * Get userGroup
     *
     * @return \IIA\webServiceBundle\Entity\UserGroup
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }

    public function __toString(){
        return $this->getUsername() . " " . $this->getFirstname();
    }

    /**
     * Add qcm
     *
     * @param \IIA\webServiceBundle\Entity\QcmUser $qcm
     *
     * @return User
     */
    public function addQcm(\IIA\webServiceBundle\Entity\QcmUser $qcm)
    {
        $this->qcms[] = $qcm;

        return $this;
    }

    /**
     * Remove qcm
     *
     * @param \IIA\webServiceBundle\Entity\QcmUser $qcm
     */
    public function removeQcm(\IIA\webServiceBundle\Entity\QcmUser $qcm)
    {
        $this->qcms->removeElement($qcm);
    }

    /**
     * Get qcms
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQcms()
    {
        return $this->qcms;
    }

    /**
     * Add userQcm
     *
     * @param \IIA\webServiceBundle\Entity\QcmUser $userQcm
     *
     * @return User
     */
    public function addUserQcm(\IIA\webServiceBundle\Entity\QcmUser $userQcm)
    {
        $this->userQcms[] = $userQcm;

        return $this;
    }

    /**
     * Remove userQcm
     *
     * @param \IIA\webServiceBundle\Entity\QcmUser $userQcm
     */
    public function removeUserQcm(\IIA\webServiceBundle\Entity\QcmUser $userQcm)
    {
        $this->userQcms->removeElement($userQcm);
    }

    /**
     * Get userQcms
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserQcms()
    {
        return $this->userQcms;
    }
}
