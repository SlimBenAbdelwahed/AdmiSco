<?php

namespace Admin\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NoteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noteDS1')
                 ->add('idMatiere')
                 ->add('qrcodeEtudiant', 'entity', array(
                'class'    => 'AdmiScoBundle:Matiere',
                'property' => 'nomMatiere',
                ))
            ->add('noteDS2')
            ->add('noteTD')
            ->add('noteTP')
            ->add('noteEX')
            ->add('qrcodeEtudiant')
                 ->add('qrcodeEtudiant', 'entity', array(
                'class'    => 'AdmiScoBundle:Etudiant',
                'property' => 'qrcode',
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\Bundle\Entity\Note'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_bundle_note';
    }
}
