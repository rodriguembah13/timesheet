<?php

namespace Ballack\TimeSheetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomProjet')
            ->add('client', 'entity', array(
                    'class' => 'Ballack\TimeSheetBundle\Entity\Client',
                    'property' => 'nomComplet',
                    'multiple' => false,
                    'required' => TRUE
                ))
            ->add('description')
            ->add('dateStart', 'datetime')
            ->add('dateStop', 'datetime')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ballack\TimeSheetBundle\Entity\Projet'
        ));
    }
}
