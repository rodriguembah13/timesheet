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
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Ballack\TimeSheetBundle\Entity\Departement;
use Symfony\Component\Form\FormInterface;
/**
 * Description of ContratType
 *
 * @author ballack
 */
class ContratType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
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
                ->add('departement', 'entity', array(
                    'class' => 'Ballack\TimeSheetBundle\Entity\Departement',
                    'property' => 'departement',
                    'mapped' => false,
                    'required' => FALSE,
                    'placeholder' => 'selectionnez un departement'
                ))
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
            ))
        ;
//        $builder ->get('departement')->addEventListener(FormEvents::POST_SUBMIT, function(FormEvent $event) {
//           $form=$event->getForm();
//           dump($event->getForm());dump($form->getData());
//           $this->addEmployeField($form->getParent(),$form->getData());
//        }
//        );
    }
    private function addEmployeField(FormInterface $formbulder,Departement $departement){
        $bulder=$formbulder->getConfig()->getFormFactory()->createNamedBuilder('employe','entity',null, array(
                    'class' => 'Ballack\TimeSheetBundle\Entity\Employe',
                    'property' => 'employe',
                    'mapped' => false,
                    'required' => FALSE,
                    'auto_initialize'=>FALSE,
                    'choices' => $departement->getEmployes(),
                    'placeholder' => 'selectionnez un employrs'
                )
                );
        $formbulder->add($bulder->getForm());
//        $formbulder->add('employe', 'entity', array(
//                    'class' => 'Ballack\TimeSheetBundle\Entity\Employe',
//                    'property' => 'nom',
//                    'multiple' => false,
//                    'required' => TRUE,
//                    'auto_initialize'=>FALSE,
//                    'choices' => $departement->getEmployes(),
//                    'placeholder' => 'selectionnez un employrs'
//                ));
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ballack\TimeSheetBundle\Entity\Contrat'
        ));
    }

}
