<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ItensLoteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descricao', TextType::class, [
            		'label' => utf8_encode('Descrição'),
            		'attr' => [
            				'class' => 'form-control'
            		]
            ])
            ->add('nroCodigoBarra', TextType::class, [
            		'label' => utf8_encode('Nro. Código de Barras'),
            		'attr' => [
            				'class' => 'form-control'
            		]
            ])
            ->add('dtColeta', DateType::class, [
            		'label' => 'Dt. Coleta',
            		'html5' => true,
            		'widget' => 'single_text',
            		'attr' => [
            				'class' => 'form-control'
            		]
            ])
            //->add('ceUsuario')
            ->add('ceLote', ChoiceType::class, [
            		'label' => 'Selecione o Lote',
            		'attr' => [
            			'class' => 'form-control'	
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
            'data_class' => 'AppBundle\Entity\ItensLote'
        ));
    }
}
