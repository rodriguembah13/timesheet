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
 * Description of ContratType
 *
 * @author ballack
 */
class ContratType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startDate', DateTimeType::class, array(
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'form_datetime'],
            ))
            ->add('endDate', DateTimeType::class, array(
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'form_datetime'],
            ))
            ->add('salaireBrute')
            ->add('typeContrat', 'entity', array(
                'class' => 'Ballack\TimeSheetBundle\Entity\TypeContrat',
                'property' => 'libelle',
                'multiple' => false,
                'required' => TRUE,
                'placeholder' => 'selectionnez un typeContrat'
            ))
            ->add('employe', 'entity', array(
                'class' => 'Ballack\TimeSheetBundle\Entity\Employe',
                'property' => 'nom',
                'multiple' => false,
                'required' => TRUE,
                'placeholder' => 'selectionnez un employe'
            ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ballack\TimeSheetBundle\Entity\Contrat'
        ));
    }

}
