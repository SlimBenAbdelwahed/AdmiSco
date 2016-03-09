<?php

namespace Admin\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnseignantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('nom','text',array('label'=>'Nom'))
            ->add('prenom','text',array('label'=>'Prenom'))
             ->add('dateDeNaissance','birthday',array('label'=>'Date de naissance',
                                                'widget' => 'single_text',
                                                ))
            ->add('email','email',array('label'=>'Email'))
            ->add('telephone','text',array('label'=>'Telephone'))
         
        ;
          
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\Bundle\Entity\Enseignant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_bundle_enseignant';
    }
}
