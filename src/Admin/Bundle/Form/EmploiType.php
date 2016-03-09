<?php

namespace Admin\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmploiType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                 ->add('matiereId', 'entity', array(
                'class'    => 'AdmiScoBundle:Matiere',
                'property' => 'nomMatiere',
                ))
                ->add('heureDebut')
                ->add('heureFin')
             ->add('jourId', 'entity', array(
                'class'    => 'AdmiScoBundle:jour',
                'property' => 'designation',
                ))
            ->add('semestreId', 'entity', array(
                'class'    => 'AdmiScoBundle:Semestre',
                'property' => 'numSemestre',
                )) 
            ->add('salleId', 'entity', array(
                'class'    => 'AdmiScoBundle:Salle',
                'property' => 'numSalle',
                ))
             ->add('groupeId', 'entity', array(
                'class'    => 'AdmiScoBundle:groupe',
                'property' => 'nomGroupe',
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\Bundle\Entity\Emploi'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_bundle_emploi';
    }
}
