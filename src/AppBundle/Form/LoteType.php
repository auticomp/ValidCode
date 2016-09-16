<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LoteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomeLote', TextType::class, [
            		'label' => 'Nome do Lote',
            		'attr' => [
            			'class' => 'form-control',
            			'placeholder' => 'Digite o nome do lote'
            		]
            ])
           // ->add('dtCadastro', 'datetime')
            ->add('qtdeItensColetados', IntegerType::class, [
            		'label' => 'Qtde. Itens coletados',
            		'attr' => [
            				'class' => 'form-control',
            				'placeholder' => 'Digite a qtde'
            		]
            ])
            ->add('limiteItens', IntegerType::class, [
            		'label' => 'Limite de itens',
            		'attr' => [
            				'class' => 'form-control',
            				'placeholder' => 'Digite o limite de qtde'
            		]
            ])
            ->add('dtFechamento', DateType::class, [
            		'label' => 'Dt. Fechamento',
            		'html5' => true,
            		'widget' => 'single_text',
            		'attr' => [
            				'class' => 'form-control'
            		]
            ])
            ->add('dtExclusao', DateType::class, [
            		'label' => 'Dt. Exclusao',
            		'html5' => true,
            		'widget' => 'single_text',
            		'attr' => [
            				'class' => 'form-control',
            				'readonly' => 'readonly'
            		]
            ])
            ->add('ativo', ChoiceType::class, [
            		'label' => 'Ativo?',
            		'attr' => [
            				'class' => 'form-control'
            		],
            		'choices' => array('Selecione' => '', 'Sim' => '1', utf8_encode('Não') => 0)
            ])
            ->add('ceEmpresa', EntityType::class, [
            	'label' => 'Selecione a Empresa',
            	'class' => 'AppBundle:Empresa',
            	'choice_label' => 'razaoSocial',
            	'choice_value' => 'idEmpresa',
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
            'data_class' => 'AppBundle\Entity\Lote'
        ));
    }
}
