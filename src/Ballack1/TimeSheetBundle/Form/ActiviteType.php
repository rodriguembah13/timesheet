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

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
/**
 * Description of ActiviteType
 *
 * @author ballack
 */
class ActiviteType extends AbstractType{
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('timeStart', DateTimeType::class, array(
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'form_datetime'],
            ))
            ->add('timestop', DateTimeType::class, array(
                'widget' => 'single_text',
                // prevents rendering it as type="date", to avoid HTML5 date pickers
                'html5' => false,

                // adds a class that can be selected in JavaScript
                'attr' => ['class' => 'form_datetime'],
            ))
            ->add('projet', 'entity', array(
                    'class' => 'Ballack\TimeSheetBundle\Entity\Projet',
                    'property' => 'nomProjet',
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
            'data_class' => 'Ballack\TimeSheetBundle\Entity\Activite'
        ));
    }
}
