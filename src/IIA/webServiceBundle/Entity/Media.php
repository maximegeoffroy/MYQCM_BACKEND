<?php

namespace IIA\webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="IIA\webServiceBundle\Repository\MediaRepository")
 *
 */
class Media
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="IIA\webServiceBundle\Entity\MediaType")
     * @ORM\JoinColumn(nullable=false)
    */
    private $mediaType;

    /**
     * @ORM\OneToOne(targetEntity="IIA\webServiceBundle\Entity\Question", inversedBy="media")
     * @ORM\JoinColumn(nullable=false)
    */
    private $question;


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
     * @return Media
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
     * Set url
     *
     * @param string $url
     *
     * @return Media
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set mediaType
     *
     * @param \IIA\webServiceBundle\Entity\MediaType $mediaType
     *
     * @return Media
     */
    public function setMediaType(\IIA\webServiceBundle\Entity\MediaType $mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * Get mediaType
     *
     * @return \IIA\webServiceBundle\Entity\MediaType
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Set question
     *
     * @param \IIA\webServiceBundle\Entity\Question $question
     *
     * @return Media
     */
    public function setQuestion(\IIA\webServiceBundle\Entity\Question $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \IIA\webServiceBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    public function __toString(){
        return $this->getName();
    }
}
