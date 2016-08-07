<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_441536e5928b97f378cc3766b392ab6519aa5a99dd4df882577c0fa383265c8f extends Twig_Template
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
        $__internal_9804fbae0c8ac226cc51c2514e5932d55f190f2b7f86ecab3318abb6f040c88a = $this->env->getExtension("native_profiler");
        $__internal_9804fbae0c8ac226cc51c2514e5932d55f190f2b7f86ecab3318abb6f040c88a->enter($__internal_9804fbae0c8ac226cc51c2514e5932d55f190f2b7f86ecab3318abb6f040c88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9804fbae0c8ac226cc51c2514e5932d55f190f2b7f86ecab3318abb6f040c88a->leave($__internal_9804fbae0c8ac226cc51c2514e5932d55f190f2b7f86ecab3318abb6f040c88a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
