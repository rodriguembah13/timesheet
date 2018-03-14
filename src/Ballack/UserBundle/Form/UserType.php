<?php

namespace Ballack\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ballack\UserBundle\Entity\User'
        ));
    }
    public function getParent()
    {
        return 'fos_user_registration';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ballack_userbundle_user';
    }


}
