<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 08/11/2016
 * Time: 20:14
 */

namespace AppBundle\Suscriber;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;



class AddDefaultRoleListener implements EventSubscriberInterface {

//    public static function getSubscribedEvents()
//    {
//        return array(
//            FOSUserEvents::REGISTRATION_SUCCESS => 'onAddDefaultRoleSuccess',
//        );
//    }
    public static function getSubscribedEvents()
    {
        return array(FormEvents::POST_SUBMIT => 'setRole');
    }

//    public function onAddDefaultRoleSuccess(FormEvents $event)
//
//    {
//        $doctrine = $this->container->get('doctrine');
//        $em = $doctrine->getManager();
//
//        $user = $event->getForm()->getData();
//        $user->addRole('ROLE_USER');
//        //$user->setRoles(array('ROLE_USER'));
//
//        $em->persist($user);
//    }

    public function setRole(FormEvent $event)
    {
        $aRoles = array('ROLE_USER','ROLE_ASSOC');

        /** @var $user \FOS\UserBundle\Model\UserInterface */

        $user = $event->getForm()->getData();

//        var_dump($user);
//        die();
//
//        $user->setRoles($user->getRoles());
//        else
//            $user->addRole('ROLE_USER');
    }
}