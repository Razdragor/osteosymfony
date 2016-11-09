<?php

namespace AppBundle\Controller\Front;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AppController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {

      $form = $this->createFormBuilder($task)
          ->add('name', TextType::class)
          ->add('firstname', TextType::class)
          ->add('mail', TextType::class)
          ->add('phone', TextType::class)
          ->add('subject', TextType::class)
          ->add('message', TextareaType::class)
          ->add('save', SubmitType::class, array('label' => 'Create Task'))
          ->getForm();

      return $this->render('front/contact.html.twig', array(
          'form' => $form->createView(),
      ));
    }


}
