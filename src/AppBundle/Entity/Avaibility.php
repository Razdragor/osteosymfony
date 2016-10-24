<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avaibility
 *
 * @ORM\Table(name="avaibility")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AvaibilityRepository")
 */
class Avaibility
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
     *s
     * @ORM\Column(name="day", type="string")
     */
    private $day;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="time")
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="time")
     */
    private $endTime;

    /**
     * @var int
     *
     * @ORM\Column(name="professional_id", type="integer")
     */
    private $professionalId;


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
     * Set day
     *
     * @param string $day
     *
     * @return Avaibility
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Avaibility
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return Avaibility
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set professionalId
     *
     * @param integer $professionalId
     *
     * @return Avaibility
     */
    public function setProfessionalId($professionalId)
    {
        $this->professionalId = $professionalId;

        return $this;
    }

    /**
     * Get professionalId
     *
     * @return int
     */
    public function getProfessionalId()
    {
        return $this->professionalId;
    }
}

