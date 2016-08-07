<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_9eaca8b896974833baf11eb5886d33d0e5378ca9676f20cc1710a2c133422e97 extends Twig_Template
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
        $__internal_bb4b7d41cc591d3c41b2341575bf8289361ceab569fcc0f266e26ed41c0967c9 = $this->env->getExtension("native_profiler");
        $__internal_bb4b7d41cc591d3c41b2341575bf8289361ceab569fcc0f266e26ed41c0967c9->enter($__internal_bb4b7d41cc591d3c41b2341575bf8289361ceab569fcc0f266e26ed41c0967c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bb4b7d41cc591d3c41b2341575bf8289361ceab569fcc0f266e26ed41c0967c9->leave($__internal_bb4b7d41cc591d3c41b2341575bf8289361ceab569fcc0f266e26ed41c0967c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
