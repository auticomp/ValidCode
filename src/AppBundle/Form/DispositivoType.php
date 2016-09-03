<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DispositivoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descricaoModelo', TextType::class, [
            		'label' => 'Descricao/Modelo',
            		'attr' => [
            				'class' => 'form-control input-sm'
            		]
            ])
            ->add('numeroSerie', TextType::class, [
            		'label' => utf8_encode('Nro. Série'),
            		'attr' => [
            				'class' => 'form-control input-sm'
            		]
            ])
            ->add('macAddress', TextType::class, [
            		'label' => 'MAC ADDRESS',
            		'attr' => [
            				'class' => 'form-control input-sm'
            		]
            ])
            ->add('ceMarca', ChoiceType::class, [
            	'label' => 'Marca',
            		'attr' => [
            				'class' => 'form-control input-sm'
            		]
            ])
            ->add('ceCategoria', ChoiceType::class, [
            	'label' => 'Categoria',
            		'attr' => [
            				'class' => 'form-control input-sm'
            		]
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Dispositivo'
        ));
    }
}
