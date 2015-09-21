<?php

namespace CvsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use CvsiteBundle\Entity\Article;
use CvsiteBundle\Form\ArticleType;
use CvsiteBundle\Entity\Education;
use CvsiteBundle\Form\EducationType;
use CvsiteBundle\Entity\Professional;
use CvsiteBundle\Form\ProfessionalType;
use CvsiteBundle\Entity\Skill;
use CvsiteBundle\Form\SkillType;
use CvsiteBundle\Entity\Category;
use CvsiteBundle\Form\CategoryType;


class CreateController extends Controller
{
    public function createAction()
    {
        return $this->render('CvsiteBundle:Create:create.html.twig');
    }
	
    public function categoryAction(Request $request)
    {
        //$token = $this-> container -> get('fabzat_get_access_token')->Token();

        //$form = $this->createForm(new ApiOrdersType(), null, array('action' => '/api/postorders?access_token='.$token));
        $category = new Category();
        $form = $this->createForm(new CategoryType(), $category, array('action' => '/cvsite/web/app_dev.php/create/send'));

        return $this->render('CvsiteBundle:Create:category.html.twig', array(
            'form' => $form->createView()
        ));
    }
	
    public function articleAction(Request $request)
    {
        //$token = $this-> container -> get('fabzat_get_access_token')->Token();

        //$form = $this->createForm(new ApiOrdersType(), null, array('action' => '/api/postorders?access_token='.$token));
        $article = new Article();
        $form = $this->createForm(new ArticleType(), $article);

        return $this->render('CvsiteBundle:Create:article.html.twig', array(
            'form' => $form->createView()
        ));
    }
	
    public function educationAction(Request $request)
    {
        //$token = $this-> container -> get('fabzat_get_access_token')->Token();

        //$form = $this->createForm(new ApiOrdersType(), null, array('action' => '/api/postorders?access_token='.$token));
        $education = new Education();
        $form = $this->createForm(new EducationType(), $education);

        return $this->render('CvsiteBundle:Create:education.html.twig', array(
            'form' => $form->createView()
        ));
    }
	
    public function professionalAction(Request $request)
    {
        //$token = $this-> container -> get('fabzat_get_access_token')->Token();

        //$form = $this->createForm(new ApiOrdersType(), null, array('action' => '/api/postorders?access_token='.$token));
        $professional = new Professional();
        $form = $this->createForm(new ProfessionalType(), $professional);

        return $this->render('CvsiteBundle:Create:professional.html.twig', array(
            'form' => $form->createView()
        ));
    }
	
    public function skillAction(Request $request)
    {
        //$token = $this-> container -> get('fabzat_get_access_token')->Token();

        //$form = $this->createForm(new ApiOrdersType(), null, array('action' => '/api/postorders?access_token='.$token));
        $skill = new Skill();
        $form = $this->createForm(new SkillType(), $skill);

        return $this->render('CvsiteBundle:Create:skill.html.twig', array(
            'form' => $form->createView()
        ));
    }
	
	public function sendAction(Request $request)
	{
		
        $form->handleRequest($request);

        $category = $form->getData();
        var_dump($category);
        exit;

        if($form->isValid())
        {
            /* @var $orders Orders */
            $orders = $form->getData();

            $this->get('plateform.mustbesentat')-> setDatePlateform($orders);

            //Saving data
            $em = $this->getDoctrine()->getManager();
            $em->persist($orders);
            $em->flush();
        }
		exit;
	}
}
