<?php

namespace Ballack\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BallackUserBundle:Default:index.html.twig');
    }
}
