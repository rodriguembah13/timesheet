<?php

namespace Ballack\TimeSheetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
class OverTimeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date', DateTimeType::class, array(
            'widget' => 'single_text',
            'html5' => false,
            'attr' => ['class' => 'form_datetime'],
        ))->add('duree')->add('cause')
                ->add('projet', 'entity', array(
                'class' => 'Ballack\TimeSheetBundle\Entity\Projet',
                'property' => 'nomProjet',
                'multiple' => false,
                'required' => TRUE
            ))
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ballack\TimeSheetBundle\Entity\OverTime'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ballack_timesheetbundle_overtime';
    }


}
