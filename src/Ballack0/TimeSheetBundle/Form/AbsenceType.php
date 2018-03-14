<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ballack\TimeSheetBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
/**
 * Description of AbsenceType
 *
 * @author ballack
 */
class AbsenceType extends AbstractType{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startDate')
            ->add('endDate')
            ->add('remarque')
            ->add('typeAbsence', 'entity', array(
                    'class' => 'Ballack\TimeSheetBundle\Entity\TypeAbsence',
                    'property' => 'libelle',
                    'multiple' => false,
                    'required' => TRUE
                ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ballack\TimeSheetBundle\Entity\Absence'
        ));
    }
}
