<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ballack\TimeSheetBundle\Form;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
/**
 * Description of EmployeEditType
 *
 * @author ballack
 */
class EmployeEditType extends AbstractType{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom')
                ->add('prenom')
                ->add('situation')
                ->add('dateNaissance', DateTimeType::class, array(
                    'widget' => 'single_text',
                    'html5' => false,
                    'attr' => ['class' => 'form_datetime'],
                ))
                ->add('departement', 'entity', array(
                    'class' => 'Ballack\TimeSheetBundle\Entity\Departement',
                    'property' => 'departement',
                    'multiple' => false,
                    'required' => TRUE
                ))
                ->add('isChef')
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
      public function getName()
    {
        return 'employe_edit';
    }
}
