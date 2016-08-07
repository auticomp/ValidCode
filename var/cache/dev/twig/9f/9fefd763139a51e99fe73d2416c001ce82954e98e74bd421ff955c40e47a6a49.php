<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_392f5f38036b255798d8c08ab84c04546f5434a41beff7cd6397cf4a74c5f2e2 extends Twig_Template
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
        $__internal_05f953806a18b63c6a7e0283d2929f410b040972daebd035e90671abc2338d94 = $this->env->getExtension("native_profiler");
        $__internal_05f953806a18b63c6a7e0283d2929f410b040972daebd035e90671abc2338d94->enter($__internal_05f953806a18b63c6a7e0283d2929f410b040972daebd035e90671abc2338d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_05f953806a18b63c6a7e0283d2929f410b040972daebd035e90671abc2338d94->leave($__internal_05f953806a18b63c6a7e0283d2929f410b040972daebd035e90671abc2338d94_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
