<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6ed57e698baa2ada4352ffe668da046cc5026ff26a4551f6ca25ce2fd6bd8c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50c5eebb0b9d0bc180646c4403fb0f14f15e93dabda1ee584821211407df48ab = $this->env->getExtension("native_profiler");
        $__internal_50c5eebb0b9d0bc180646c4403fb0f14f15e93dabda1ee584821211407df48ab->enter($__internal_50c5eebb0b9d0bc180646c4403fb0f14f15e93dabda1ee584821211407df48ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_50c5eebb0b9d0bc180646c4403fb0f14f15e93dabda1ee584821211407df48ab->leave($__internal_50c5eebb0b9d0bc180646c4403fb0f14f15e93dabda1ee584821211407df48ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
