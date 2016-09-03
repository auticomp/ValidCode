<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomeLote')
           // ->add('dtCadastro', 'datetime')
            ->add('qtdeItensColetados')
            ->add('limiteItens')
            //->add('dtFechamento', 'datetime')
            //->add('dtExclusao', 'datetime')
            ->add('ativo')
            ->add('ceEmpresa')
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
