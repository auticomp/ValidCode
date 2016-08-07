<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f179b333038c87c5f9a7bc471c76ed706ce93d45662588e4dd36b88939c52ca9 extends Twig_Template
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
        $__internal_9fd4463e7f824a3d9d4ad694f3ea96b379cfdf748752a7d68301d5bc40ad8331 = $this->env->getExtension("native_profiler");
        $__internal_9fd4463e7f824a3d9d4ad694f3ea96b379cfdf748752a7d68301d5bc40ad8331->enter($__internal_9fd4463e7f824a3d9d4ad694f3ea96b379cfdf748752a7d68301d5bc40ad8331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9fd4463e7f824a3d9d4ad694f3ea96b379cfdf748752a7d68301d5bc40ad8331->leave($__internal_9fd4463e7f824a3d9d4ad694f3ea96b379cfdf748752a7d68301d5bc40ad8331_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
