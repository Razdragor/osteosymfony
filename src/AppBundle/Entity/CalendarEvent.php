<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use AncaRebeca\FullCalendarBundle\Model\Event as BaseEvent;

/**
 * CalendarEvent
 *
 * @ORM\Table(name="calendarevent")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyRepository")
 */


class CalendarEvent extends BaseEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="User")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="User")
     */
    private $professionalId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime")
     */
    protected $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime")
     */
    protected $endDate;


    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected $description;


}