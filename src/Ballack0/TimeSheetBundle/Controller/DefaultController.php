<?php

namespace Ballack\TimeSheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BallackTimeSheetBundle:Default:index.html.twig');
    }
}
