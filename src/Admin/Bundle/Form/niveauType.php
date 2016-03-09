<?php

namespace Admin\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class niveauType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('niveau','text')
             
                ->add('idFiliere', 'entity', array(
                'class'    => 'AdmiScoBundle:filiere',
                'property' => 'nomFiliere',
                 'query_builder' => function(EntityRepository $er)  {
        return $er->createQueryBuilder('u')
            ->groupBy('u.nomFiliere');}
                ))
        ;
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\Bundle\Entity\niveau'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_bundle_niveau';
    }
}
