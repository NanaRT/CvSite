<?php

namespace CvsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Finder\Finder;

class DefaultController extends Controller
{
    public function accueilAction()
    {
        return $this->render('CvsiteBundle:Default:index.html.twig');
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
}
