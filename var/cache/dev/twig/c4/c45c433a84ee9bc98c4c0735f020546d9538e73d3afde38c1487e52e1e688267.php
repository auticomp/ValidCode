<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f2836611ebe8d75a3d99aa8c02243e9f4af79babe98a0fd8d1b1becb4daef38b extends Twig_Template
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
        $__internal_2e959de19a4144e986c9e99ba7fa5ada3ad5173c505a81a04ed7608e518206c4 = $this->env->getExtension("native_profiler");
        $__internal_2e959de19a4144e986c9e99ba7fa5ada3ad5173c505a81a04ed7608e518206c4->enter($__internal_2e959de19a4144e986c9e99ba7fa5ada3ad5173c505a81a04ed7608e518206c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2e959de19a4144e986c9e99ba7fa5ada3ad5173c505a81a04ed7608e518206c4->leave($__internal_2e959de19a4144e986c9e99ba7fa5ada3ad5173c505a81a04ed7608e518206c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
