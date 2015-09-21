<?php

namespace CvsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use CvsiteBundle\Entity\Article;

class ArticleType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'CvsiteBundle\Entity\Article',
                'csrf_protection' => false,
            ));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', 'choice', array(
                'property_path' => 'category',
                'required' => true
            ))
            ->add('titre','text')
			->add('contenu','textarea')
            ->add('date','date', array('required' => true))
			->add('image','file', array(
                'property_path' => 'category',
                'required' => false
			))
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'article';
    }
}
