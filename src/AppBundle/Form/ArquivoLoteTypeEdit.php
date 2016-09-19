<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ArquivoLoteTypeEdit extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	/* ->add('arquivoImportado', FileType::class, [
        			'data_class' => null,
        			'label' => utf8_encode('Importa��o de Arquivo'),
        			'attr' => [
        				'class' => 'btn btn-default btn-file'
        			]
        	]) */
	        ->add('nomeArquivo', TextType::class, [
	        		'label' => 'Nome do Arquivo',
	        		'attr' => [
	        				'class' => 'form-control',
	        				'placeholder' => 'Nome do Arquivo a ser importado',
	        				'readonly' => 'readonly'
	        		]
	        ])
	        ->add('dtImportacao',DateType::class, [
            		'label' => utf8_encode('Dt. Importa��o'),
            		'html5' => true,
            		'widget' => 'single_text',
            		'attr' => [
            				'class' => 'form-control',
            				'readonly' => 'readonly'
            		]
            ])
            
            ->add('tamanhoBytes', NumberType::class, [
            		'label' => 'Tamanho/Bytes',
            		'attr' => [
            			'class' => 'form-control',
            			'readonly' => 'readonly'
            		]
            ])
            ->add('ativo', ChoiceType::class, [
            		'label' => 'Ativo?',
            		'attr' => [
            				'class' => 'form-control',
            				'disabled' => 'disabled'
            		],
            		'choices' => array('Selecione' => '', 'Sim' => '1', utf8_encode('N�o') => 0)
            ]) 
            ->add('ceLote', EntityType::class, [
            		'label' => 'Para o Lote?',
            		'class' => 'AppBundle:Lote',
            		'choice_label' => 'nomeLote',
            		'choice_value' => 'idLote',
            		'attr' => [
            			'class' => 'form-control',
            			'disabled' => 'disabled'
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
            'data_class' => 'AppBundle\Entity\ArquivoLote'
        ));
    }
}
