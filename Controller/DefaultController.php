<?php

namespace elephantly\RbacBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('elephantlyRbacBundle:Default:index.html.twig', array('name' => $name));
    }
}
