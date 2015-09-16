<?php

namespace CvsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CvsiteBundle:Default:index.html.twig');
    }
}
