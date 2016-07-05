<?php

namespace IIA\webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QcmUser
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="IIA\webServiceBundle\Repository\QcmUserRepository")
 */
class QcmUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_done", type="boolean")
     */
    private $isDone;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float",nullable=true)
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="IIA\webServiceBundle\Entity\Qcm", inversedBy="userQcms")
     * @ORM\JoinColumn(nullable=false)
    */
    private $qcm;

    /**
     * @ORM\ManyToOne(targetEntity="IIA\webServiceBundle\Entity\User", inversedBy="userQcms")
     * @ORM\JoinColumn(nullable=false)
    */
    private $user;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set isDone
     *
     * @param boolean $isDone
     *
     * @return QcmUser
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;

        return $this;
    }

    /**
     * Get isDone
     *
     * @return boolean
     */
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * Set note
     *
     * @param float $note
     *
     * @return QcmUser
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set qcm
     *
     * @param \IIA\webServiceBundle\Entity\Qcm $qcm
     *
     * @return QcmUser
     */
    public function setQcm(\IIA\webServiceBundle\Entity\Qcm $qcm)
    {
        $this->qcm = $qcm;

        return $this;
    }

    /**
     * Get qcm
     *
     * @return \IIA\webServiceBundle\Entity\Qcm
     */
    public function getQcm()
    {
        return $this->qcm;
    }

    /**
     * Set user
     *
     * @param \IIA\webServiceBundle\Entity\User $user
     *
     * @return QcmUser
     */
    public function setUser(\IIA\webServiceBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \IIA\webServiceBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    //Constructor
    public function __construct(){
        $this->isDone = false;
    }
}
