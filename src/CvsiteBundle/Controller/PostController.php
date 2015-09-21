<?php

namespace CvsiteBundle\Controller;

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
use CvsiteBundle\Controller\CreateController;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class PostController extends FOSRestController
{
    /**
     * Valid Form
     * @ApiDoc(
     *      description="Creates a new order",
     *      input="CvsiteBundle\Form\CategoryType",
     *      output="CvsiteBundle\Entity\Category"
     * )
     *
     *
     * @param Request $request
     * @return Response
     */
    public function postCategoryAction(Request $request)
    {
        $view = View::create();

//         Handling form
        $form = $this->createForm(new CategoryType());
        $form->handleRequest($request);

        if($form->isValid())
        {
            $category = $form->getData();

            //Saving data
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
        }

        $view = View::create();
        return $this->redirect($this->generateUrl('category'));
    }
} 