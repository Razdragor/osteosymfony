<?php
namespace AppBundle\Listener;

use AncaRebeca\FullCalendarBundle\Event\CalendarEvent;
use AppBundle\Entity\CalendarEvent as Event;
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 01/12/2016
 * Time: 12:24
 */

class LoadDataListener
{
    /**
     * @param CalendarEvent $calendarEvent
     *
     * @return EventInterface[]
     */
    public function loadData(CalendarEvent $calendarEvent)
    {
        $startDate = $calendarEvent->getStartDatetime();
        $endDate = $calendarEvent->getEndDatetime();
        $filters = $calendarEvent->getFilters();

        //You may want do a custom query to populate the events

        $calendarEvent->addEvent(new Event('Event Title 1', new \DateTime()));
        $calendarEvent->addEvent(new Event('Event Title 2', new \DateTime()));
    }
}