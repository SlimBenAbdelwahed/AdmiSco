<?php

namespace Admin\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class EtudiantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qrcode','text',array('label'=>'QrCode'))
            ->add('cin','text',array('label'=>'Cin'))
            ->add('nom','text',array('label'=>'Nom'))
            ->add('prenom','text',array('label'=>'Prenom'))
            
            ->add('email','email',array('label'=>'Email'))
            ->add('telephone','text',array('label'=>'Telephone'))
            ->add('adresse','text',array('label'=>'Adresse'))
            ->add('datenaissance','birthday',array('label'=>'Date de naissance',
                                                'widget' => 'single_text',
                                                ))
            ->add('idFiliere', 'entity', array(
                'class'    => 'AdmiScoBundle:filiere',
                'property' => 'nomFiliere',
                'query_builder' => function(EntityRepository $er)  {
        return $er->createQueryBuilder('u')
            ->groupBy('u.nomFiliere');}
                ))
                
             ->add('idNiveau', 'entity', array(
                'class'    => 'AdmiScoBundle:niveau',
                'property' => 'niveau',
                 'query_builder' => function(EntityRepository $er)  {
        return $er->createQueryBuilder('u')
            ->groupBy('u.niveau');}
                ))
                 
               
             ->add('idDiplome', 'entity', array(
                'class'    => 'AdmiScoBundle:diplome',
                'property' => 'nomDiplome',
                 'query_builder' => function(EntityRepository $er)  {
        return $er->createQueryBuilder('u')
            ->groupBy('u.nomDiplome');}
                ))
               
             
             ->add('idGroupe', 'entity', array(
                'class'    => 'AdmiScoBundle:groupe',
                'property' => 'nomGroupe',
                'query_builder' => function(EntityRepository $er)  {
        return $er->createQueryBuilder('u')
            ->groupBy('u.nomGroupe');}
                ))
            
            //->add('id_filiere',array('label'=>'QrCode'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\Bundle\Entity\Etudiant'
        ));
    }

    /**
     * @return text
     */
    public function getName()
    {
        return 'admin_bundle_etudiant';
    }
}
