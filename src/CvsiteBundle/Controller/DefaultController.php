<?php

namespace CvsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function accueilAction()
    {
        return $this->render('CvsiteBundle:Default:accueil.html.twig');
    }
	
	public function telechargementCvPdfAction()
	{
		$fichier = "CV Alana TAYLOR french.pdf";
	    $chemin = "bundles/cvsite/documents/"; // emplacement de votre fichier .pdf
	         
	    $response = new Response();
	    $response->setContent(file_get_contents($chemin.$fichier));
	    $response->headers->set('Content-Type', 'application/force-download'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
	    $response->headers->set('Content-disposition', 'filename='. $fichier);
	         
	    return $response;
	}
	
    public function formationAction()
    {
        return $this->render('CvsiteBundle:Default:formation.html.twig');
    }
	
    public function professionelAction()
    {
        return $this->render('CvsiteBundle:Default:professionel.html.twig');
    }
	
    public function projetsAction()
    {
        return $this->render('CvsiteBundle:Default:projets.html.twig');
    }
	
    public function projetsinfoAction()
    {
        return $this->render('CvsiteBundle:projets:projetsinfo.html.twig');
    }
	
    public function lansalonAction()
    {
        return $this->render('CvsiteBundle:projets:lansalon.html.twig');
    }
	
    public function vieassociativeAction()
    {
        return $this->render('CvsiteBundle:projets:vieassociative.html.twig');
    }
}
