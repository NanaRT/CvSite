<?php

namespace CvsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use CvsiteBundle\Entity\Category;

class CategoryType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'CvsiteBundle\Entity\Category',
                'csrf_protection' => false,
            ));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'Category';
    }
}
