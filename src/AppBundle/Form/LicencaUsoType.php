<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class LicencaUsoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dtEmissao', DateType::class, [
            		'label' => 'Dt. Emiss�o',
            		'html5' => true,
            		'widget' => 'single_text',
            		'attr' => [
            				'class' => 'form-control'
            		]
            ])
            ->add('dtLiberacao', DateType::class, [
            		'label' => 'Dt. Libera��o',
            		'html5' => true,
            		'widget' => 'single_text',
            		'attr' => [
            				'class' => 'form-control'
            		]
            ])
            ->add('prazoExpiracao', TextType::class, [
            		'label' => 'Prazo de Expira��o',
            		'attr' => [
            				'class' => 'form-control'
            		]
            ])
            ->add('precoLicenca', MoneyType::class, [
            		'label' => utf8_encode('Pre�o da Licenca'),
            		'attr' => [
            				'class' => 'form-control'
            		]
            ])
            ->add('ativo')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\LicencaUso'
        ));
    }
}
