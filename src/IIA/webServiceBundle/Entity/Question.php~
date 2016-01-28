<?php

namespace IIA\webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="IIA\webServiceBundle\Repository\QuestionRepository")
 */
class Question
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
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity="IIA\webServiceBundle\Entity\Answer", mappedBy="question")
     * @ORM\JoinColumn(nullable=false)
    */
    private $answers;

    /**
     * @ORM\ManyToOne(targetEntity="IIA\webServiceBundle\Entity\Qcm", inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
    */
    private $qcm;

   /**
     * @ORM\OneToOne(targetEntity="IIA\webServiceBundle\Entity\Media", mappedBy="question")
    */
    private $media;

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
     * Set content
     *
     * @param string $content
     *
     * @return Question
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Question
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
     *
     * @param \DateTime $updatedAt
     *
     * @return Question
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

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
     * Set media
     *
     * @param \IIA\webServiceBundle\Entity\Media $media
     *
     * @return Question
     */
    public function setMedia(\IIA\webServiceBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \IIA\webServiceBundle\Entity\Media
     */
    public function getMedia()
    {
        return $this->media;
    }

    public function __toString(){
        return $this->getContent();
    }

    public function __construct(){
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * Add answer
     *
     * @param \IIA\webServiceBundle\Entity\Answer $answer
     *
     * @return Question
     */
    public function addAnswer(\IIA\webServiceBundle\Entity\Answer $answer)
    {
        $this->answers[] = $answer;

        return $this;
    }

    /**
     * Remove answer
     *
     * @param \IIA\webServiceBundle\Entity\Answer $answer
     */
    public function removeAnswer(\IIA\webServiceBundle\Entity\Answer $answer)
    {
        $this->answers->removeElement($answer);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set qcm
     *
     * @param \IIA\webServiceBundle\Entity\Qcm $qcm
     *
     * @return Question
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
}
