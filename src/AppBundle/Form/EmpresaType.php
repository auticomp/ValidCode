<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EmpresaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cnpjEmpresa', TextType::class, [
            		'label' => 'CNPJ',
            		'attr' => [
            				'class' => 'form-control input-sm'
            		]
            ])
            ->add('inscrEstEmpresa', TextType::class, [
            		'label' => 'IE',
            		'attr' => [
            				'class' => 'form-control input-sm'
            		]
            ])
            ->add('nomeFantasia', TextType::class, [
            		'label' => 'Nome Fantasia',
            		'attr' => [
            				'class' => 'form-control input-sm'
            		]
            ])
            ->add('razaoSocial', TextType::class, [
            		'label' => 'Razao Social',
            		'attr' => [
            				'class' => 'form-control input-sm'
            		]
            ])
            ->add('dataAbertura', DateType::class,[
            		'widget' => 'single_text',
            		'label' => 'Dt. Abertura',
            		'attr' => [
            			'class' => 'form-control input-sm'	
            		]
            ])
            //->add('dtCadastro', 'datetime')
            //->add('ativa')
            ->add('ceMatriz', EntityType::class, [
            	'label' => 'Matriz',
            	'class' => 'AppBundle:Empresa',
            	'choice_value' => 'idEmpresa',
            	'choice_label' => 'razaoSocial',
            	'attr' => [
            		'class' => 'form-control input-sm'
            	]
            ])
            ->add('ceTipoEmpresa', EntityType::class, [
            	'label' => 'Tipo',
            	'class' => 'AppBundle:DominioTipoEmpresa',
            	'choice_value' => 'idDominioTipoEmpresa',
            	'choice_label' => 'tipoEmpresa',
            	'attr' => [
            		'class' => 'form-control input-sm'
            	]
            ])
            ->add('ceTamEmpresa', EntityType::class, [
            	'label' => 'Tamanho',
            	'class' => 'AppBundle:DominioTamEmpresa',
            	'choice_value' => 'idDominioTamEmpresa',
            	'choice_label' => 'tamanhoEmpresa',
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
            'data_class' => 'AppBundle\Entity\Empresa'
        ));
    }
}
