<?php

namespace Ballack\PaieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BallackPaieBundle:Default:index.html.twig');
    }
}
