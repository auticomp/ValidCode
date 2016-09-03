<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class UsuariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	
    	$choices = array('text'=>'Selecione', 'values'=>'');
    	
        $builder
            ->add('nomeUsuario', TextType::class, [
            		'label' => 'Nome',
            		'attr' => [
            			'class' => 'form-control',
            			'placeholder' => 'Digite o nome'
            		]
            ])
            ->add('emailUsuario', TextType::class, [
            		'label' => 'E-Mail',
            		'attr' => [
            				'class' => 'form-control',
            				'placeholder' => 'Digite o e-mail'
            		]
            ])
            /*->add('senhaUsuario',[
            		'label' => 'Senha'
            ])
             ->add('dtCadastro', DateType::class, [
            		'attr' => [
				        'class' => 'form-control input-inline datepicker',
				        'data-provide' => 'datepicker',
				        'data-date-format' => 'dd/mm/yyyy'
				    ]
            	]) 
            ->add('ativo')
            ->add('cePerfilUsuario', CollectionType::class, [
            		'label' => 'Perfil de Usuario',
            		'data' => $choices
            ])*/
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usuarios'
        ));
    }
}
