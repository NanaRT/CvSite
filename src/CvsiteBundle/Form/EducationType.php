<?php

namespace CvsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use CvsiteBundle\Entity\Education;

class EducationType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'CvsiteBundle\Entity\Education',
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
            ->add('yearbegin','date')
            ->add('yearend','date')
			->add('locality','text')
			->add('formationcenter','text')
			->add('level','text')
			->add('diploma','text')
			->add('mention','text')
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'article';
    }
}
