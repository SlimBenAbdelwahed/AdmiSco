<?php

namespace Admin\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



class filiereType extends AbstractType 
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomFiliere','text')
            
            ->add('idDiplome', 'entity', array(
                'class'    => 'AdmiScoBundle:diplome',
                'property' => 'nomDiplome',
                ))
        ;
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\Bundle\Entity\filiere'
        ));
    }

    /**
     *  toString
     * @return string
     */
    public function getName()
    {
        return 'admin_bundle_filiere';
    }
}
