<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ballack\TimeSheetBundle\Form;

use Ballack\UserBundle\Form\UserType;
use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

/**
 * Description of EmployeType
 *
 * @author ballack
 */
class EmployeType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom')
                ->add('prenom')
                ->add('situation')
                ->add('dateNaissance')
                ->add('departement', 'entity', array(
                    'class' => 'Ballack\TimeSheetBundle\Entity\Departement',
                    'property' => 'departement',
                    'multiple' => false,
                    'required' => TRUE
                ))
                ->add('isChef')
                ->add('compte',   new UserType())
                ->add('image', FileType::class, array('label' => 'Image(JPG)'))

        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ballack\TimeSheetBundle\Entity\Employe'
        ));
    }

}
