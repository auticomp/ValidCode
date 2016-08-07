<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ea420f06f5453b19d51bfe5a5ffbdca554cfc6bf0504b5e2153e6d25493e823e extends Twig_Template
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
        $__internal_99605c030ad6fdf05384a9210ef0f9358dd1c2801a67a07687630dbca03e0790 = $this->env->getExtension("native_profiler");
        $__internal_99605c030ad6fdf05384a9210ef0f9358dd1c2801a67a07687630dbca03e0790->enter($__internal_99605c030ad6fdf05384a9210ef0f9358dd1c2801a67a07687630dbca03e0790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_99605c030ad6fdf05384a9210ef0f9358dd1c2801a67a07687630dbca03e0790->leave($__internal_99605c030ad6fdf05384a9210ef0f9358dd1c2801a67a07687630dbca03e0790_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
