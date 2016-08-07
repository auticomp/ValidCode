<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d993039bccdd9656a540f1cd80b4078325fe9277ea6e0c9de16181f70a844716 extends Twig_Template
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
        $__internal_ba23ef2bfcd11b69cd086ddc37638c3d99818e90f52552274b233a8cd90116d7 = $this->env->getExtension("native_profiler");
        $__internal_ba23ef2bfcd11b69cd086ddc37638c3d99818e90f52552274b233a8cd90116d7->enter($__internal_ba23ef2bfcd11b69cd086ddc37638c3d99818e90f52552274b233a8cd90116d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ba23ef2bfcd11b69cd086ddc37638c3d99818e90f52552274b233a8cd90116d7->leave($__internal_ba23ef2bfcd11b69cd086ddc37638c3d99818e90f52552274b233a8cd90116d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
