<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_85f66d89d67dd816c607ecf27b4026e4c077cd4a6c4e22e04115d9e39d63b070 extends Twig_Template
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
        $__internal_18d2ac55bb693c87ce62dbbd32ecc123898102cf6d5485dab74ef8434bf3706a = $this->env->getExtension("native_profiler");
        $__internal_18d2ac55bb693c87ce62dbbd32ecc123898102cf6d5485dab74ef8434bf3706a->enter($__internal_18d2ac55bb693c87ce62dbbd32ecc123898102cf6d5485dab74ef8434bf3706a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_18d2ac55bb693c87ce62dbbd32ecc123898102cf6d5485dab74ef8434bf3706a->leave($__internal_18d2ac55bb693c87ce62dbbd32ecc123898102cf6d5485dab74ef8434bf3706a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
