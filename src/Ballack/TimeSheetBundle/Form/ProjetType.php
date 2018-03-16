<?php

namespace Ballack\TimeSheetBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Deprecated\FormEvents;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

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
            /*->add('employe', EntityType::class, [
                'class'     => 'Ballack\TimeSheetBundle\Entity\Employe',
                'choice_label' => 'name',
                'query_builder' => function (EntityRepository $repo) {
                    return $repo->createQueryBuilder('f')
                        ->where('f.id > :id')
                        ->setParameter('id', 1);
                },
                'label'     => 'Who is fighting in this round?',
                'expanded'  => true,
                'multiple'  => true,
            ])*/
            ->add('employes', 'entity', array(
                'class' => 'Ballack\TimeSheetBundle\Entity\Employe',
                'property' => 'uniqueName',
                'multiple' => true,
                'required' => TRUE
            ))
           /* add('employe', CollectionType::class, array(
                'entry_type' => Employe::class,
                'entry_options' => array('label' => false),
            ))*/;
        ;
        /*$builder->get('employes')->addEventListener(\Symfony\Component\Form\FormEvents::POST_SUBMIT,function(FormEvent $event){
            $form=$event->getForm();
            $form->getParent()->add('departement',EntityType::class,[
                'class'=>'Ballack\TimeSheetBundle\Entity\Departement',
                'placeholder'=>'selectionnez un departement',
                'mapped'=>false,'required'=>false,'choises'=>$form->getData()->getEmployes
            ]);
        });*/
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
