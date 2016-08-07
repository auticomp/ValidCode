<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_35f647211977f1fef22d8afd39cf900ce0fea9767dbbbfe6e4c6ba5c9be88ab3 extends Twig_Template
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
        $__internal_d1a4318f525b2f8446e5100c3f9cdcbab402bf23bdecc4e01485c322d37d0868 = $this->env->getExtension("native_profiler");
        $__internal_d1a4318f525b2f8446e5100c3f9cdcbab402bf23bdecc4e01485c322d37d0868->enter($__internal_d1a4318f525b2f8446e5100c3f9cdcbab402bf23bdecc4e01485c322d37d0868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d1a4318f525b2f8446e5100c3f9cdcbab402bf23bdecc4e01485c322d37d0868->leave($__internal_d1a4318f525b2f8446e5100c3f9cdcbab402bf23bdecc4e01485c322d37d0868_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
