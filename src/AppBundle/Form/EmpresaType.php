<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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
            ->add('ceMatriz', ChoiceType::class, [
            	'label' => 'Matriz',
            		'attr' => [
            				'class' => 'form-control input-sm'
            		]
            ])
            ->add('ceTipoEmpresa', ChoiceType::class, [
            	'label' => 'Tipo',
            		'attr' => [
            				'class' => 'form-control input-sm'
            		]
            ])
            ->add('ceTamEmpresa', ChoiceType::class, [
            	'label' => 'Tamanho',
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
