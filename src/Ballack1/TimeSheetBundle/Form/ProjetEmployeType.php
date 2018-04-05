<?php

namespace Ballack\TimeSheetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetEmployeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('employe', 'entity', array(
                'class' => 'Ballack\TimeSheetBundle\Entity\Employe',
                'property' => 'nom',
                'multiple' => true,
                'required' => TRUE
            ))
        ;
    }

    public function getName() {

        return 'projetemploye';

    }
}
