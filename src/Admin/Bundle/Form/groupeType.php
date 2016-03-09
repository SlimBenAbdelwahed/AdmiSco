<?php

namespace Admin\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
class groupeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomGroupe')
            ->add('idNiveau', 'entity', array(
                'class'    => 'AdmiScoBundle:niveau',
                'property' => 'niveau',
                'query_builder' => function(EntityRepository $er)  {
        return $er->createQueryBuilder('u')
            ->groupBy('u.niveau');}
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\Bundle\Entity\groupe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_bundle_groupe';
    }
}
