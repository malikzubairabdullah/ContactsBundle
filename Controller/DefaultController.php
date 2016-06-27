<?php

namespace Zubair\ContactsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZubairContactsBundle:Default:index.html.twig', array('name' => $name));
    }
}
