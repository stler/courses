<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoursesTeachersIntersection
 *
 * @ORM\Table(name="courses_teachers_intersection", indexes={@ORM\Index(name="course_id", columns={"course_id", "teacher_id"})})
 * @ORM\Entity
 */
class CoursesTeachersIntersection
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
     * @var integer
     *
     * @ORM\Column(name="course_id", type="integer", nullable=false)
     */
    private $courseId;

    /**
     * @var integer
     *
     * @ORM\Column(name="teacher_id", type="integer", nullable=false)
     */
    private $teacherId;



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
     * Set courseId
     *
     * @param integer $courseId
     *
     * @return CoursesTeachersIntersection
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return integer
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * Set teacherId
     *
     * @param integer $teacherId
     *
     * @return CoursesTeachersIntersection
     */
    public function setTeacherId($teacherId)
    {
        $this->teacherId = $teacherId;

        return $this;
    }

    /**
     * Get teacherId
     *
     * @return integer
     */
    public function getTeacherId()
    {
        return $this->teacherId;
    }
}
