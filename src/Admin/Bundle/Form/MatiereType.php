<?php

namespace Admin\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MatiereType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomMatiere')
            ->add('typeMatiere')
            ->add('coefficient')
            ->add('duree')
            ->add('idEnseignant', 'entity', array(
                'class'    => 'AdmiScoBundle:Enseignant',
                'property' => 'nom',
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\Bundle\Entity\Matiere'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_bundle_matiere';
    }
}
