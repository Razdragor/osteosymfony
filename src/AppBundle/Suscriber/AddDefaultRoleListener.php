<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 08/11/2016
 * Time: 20:14
 */

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AddDefaultRoleListener implements EventSubscriberInterface {

    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onAddDefaultRoleSuccess',
        );
    }

    public function onAddDefaultRoleSuccess(FormEvent $event)
    {
        $doctrine = $this->container->get('doctrine');
        $em = $doctrine->getManager();

        $user = $event->getForm()->getData();
        $user->addRole('ROLE_USER');
        //$user->setRoles(array('ROLE_USER'));

        $em->persist($user);
    }
}