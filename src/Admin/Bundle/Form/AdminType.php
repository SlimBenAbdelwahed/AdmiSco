<?php

namespace Admin\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdminType extends AbstractType
{

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\Bundle\Entity\Admin'
        ));
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', array('label' => 'email'))
            ->add('username', null, array('label' => 'nom utilisateur'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'password'),
                'second_options' => array('label' => 'confirmer password'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_bundle_admin';
    }
}
