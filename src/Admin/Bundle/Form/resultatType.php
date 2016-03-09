<?php

namespace Admin\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class resultatType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('moyen')
            ->add('date')
            ->add('mention')
            ->add('remarque')
                ->add('qrcodeEtudiant', 'entity', array(
                'class'    => 'AdmiScoBundle:Etudiant',
                'property' => 'Qrcode',
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\Bundle\Entity\resultat'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_bundle_resultat';
    }
}
