<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_168c7502260420fd10c1a3954cdcbb8be4fccd34ea042c172431ddc04bd61d41 extends Twig_Template
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
        $__internal_f5089ec9676a1fc434d6a819dee0024c36d4021a858fefb143b6279b6982aba5 = $this->env->getExtension("native_profiler");
        $__internal_f5089ec9676a1fc434d6a819dee0024c36d4021a858fefb143b6279b6982aba5->enter($__internal_f5089ec9676a1fc434d6a819dee0024c36d4021a858fefb143b6279b6982aba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f5089ec9676a1fc434d6a819dee0024c36d4021a858fefb143b6279b6982aba5->leave($__internal_f5089ec9676a1fc434d6a819dee0024c36d4021a858fefb143b6279b6982aba5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
