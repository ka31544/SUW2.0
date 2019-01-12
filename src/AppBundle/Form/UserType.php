<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('login', 'text', array(
            'required' => true,
            'label' => 'Login',
            'attr' => array(
                'class' => 'is-large'
            )
        ))->add('typeAccount', 'text', array(
            'required' => true,
            'label' => 'Typ konta',
            'attr' => array(
                'class' => 'is-large'
            )
        ))->add('active', 'text', array(
            'required' => true,
            'label' => 'Aktywność',
            'attr' => array(
                'class' => 'is-large'
            )
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }


}
