<?php

namespace Bet\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BetMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
