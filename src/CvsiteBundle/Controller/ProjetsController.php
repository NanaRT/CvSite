<?php

namespace CvsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use CvsiteBundle\Entity\Article;
use CvsiteBundle\Form\ArticleType;

class ProjetsController extends Controller
{
    public function basicprojetAction()
    {
        return $this->render('CvsiteBundle:Projets:basicprojet.html.twig');
    }	
	
    public function projetsinfoAction()
    {
        return $this->render('CvsiteBundle:Projets:projetsinfo.html.twig');
    }
	
    public function lansalonAction()
    {
        return $this->render('CvsiteBundle:Projets:lansalon.html.twig');
    }
	
    public function vieassociativeAction()
    {
        return $this->render('CvsiteBundle:Projets:vieassociative.html.twig');
    }
}
