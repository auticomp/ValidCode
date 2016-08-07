<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_90a8ff9ae421b99b72ac4bfadc233b9fad315e0ca0d5cabaed5c76e2b7a6df0e extends Twig_Template
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
        $__internal_19133c0132e7be1810c593eec16f657efef57885b1f3faf474d5a106c6d9025b = $this->env->getExtension("native_profiler");
        $__internal_19133c0132e7be1810c593eec16f657efef57885b1f3faf474d5a106c6d9025b->enter($__internal_19133c0132e7be1810c593eec16f657efef57885b1f3faf474d5a106c6d9025b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_19133c0132e7be1810c593eec16f657efef57885b1f3faf474d5a106c6d9025b->leave($__internal_19133c0132e7be1810c593eec16f657efef57885b1f3faf474d5a106c6d9025b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
