<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1e8322eb598a5ee6a1ffd10819fa84d21f9174e1c12644dd87f6f5966039f036 extends Twig_Template
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
        $__internal_47190f97ff2c769e75cb4cdc9af01352f52f0c1df3b730df96730a9f3527f38b = $this->env->getExtension("native_profiler");
        $__internal_47190f97ff2c769e75cb4cdc9af01352f52f0c1df3b730df96730a9f3527f38b->enter($__internal_47190f97ff2c769e75cb4cdc9af01352f52f0c1df3b730df96730a9f3527f38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_47190f97ff2c769e75cb4cdc9af01352f52f0c1df3b730df96730a9f3527f38b->leave($__internal_47190f97ff2c769e75cb4cdc9af01352f52f0c1df3b730df96730a9f3527f38b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
