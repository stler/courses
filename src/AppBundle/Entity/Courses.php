<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courses
 *
 * @ORM\Table(name="courses", indexes={@ORM\Index(name="alias", columns={"alias"})})
 * @ORM\Entity
 */
class Courses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=false)
     */
    private $alias;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="university_id", type="integer", nullable=true)
     */
    private $universityId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="length", type="string", length=255, nullable=true)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=100, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="workload", type="string", length=255, nullable=true)
     */
    private $workload;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="preview_video", type="string", length=255, nullable=true)
     */
    private $previewVideo;

    /**
     * @var string
     *
     * @ORM\Column(name="preview_content", type="string", length=255, nullable=true)
     */
    private $previewContent;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date", nullable=true)
     */
    private $dateStart;



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
     * Set alias
     *
     * @param string $alias
     *
     * @return Courses
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Courses
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set universityId
     *
     * @param integer $universityId
     *
     * @return Courses
     */
    public function setUniversityId($universityId)
    {
        $this->universityId = $universityId;

        return $this;
    }

    /**
     * Get universityId
     *
     * @return integer
     */
    public function getUniversityId()
    {
        return $this->universityId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Courses
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set length
     *
     * @param string $length
     *
     * @return Courses
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Courses
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set workload
     *
     * @param string $workload
     *
     * @return Courses
     */
    public function setWorkload($workload)
    {
        $this->workload = $workload;

        return $this;
    }

    /**
     * Get workload
     *
     * @return string
     */
    public function getWorkload()
    {
        return $this->workload;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Courses
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set previewVideo
     *
     * @param string $previewVideo
     *
     * @return Courses
     */
    public function setPreviewVideo($previewVideo)
    {
        $this->previewVideo = $previewVideo;

        return $this;
    }

    /**
     * Get previewVideo
     *
     * @return string
     */
    public function getPreviewVideo()
    {
        return $this->previewVideo;
    }

    /**
     * Set previewContent
     *
     * @param string $previewContent
     *
     * @return Courses
     */
    public function setPreviewContent($previewContent)
    {
        $this->previewContent = $previewContent;

        return $this;
    }

    /**
     * Get previewContent
     *
     * @return string
     */
    public function getPreviewContent()
    {
        return $this->previewContent;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Courses
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
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return Courses
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }
}
