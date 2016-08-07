<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_3472e82ff2ddb04097da4b6c9b3432db1f53cde5fc98cf12b35db1fe41993f21 extends Twig_Template
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
        $__internal_5e27f8524f3e9ac777b7e9d56651921cbd043eb59791ea981811b24bc5d5349f = $this->env->getExtension("native_profiler");
        $__internal_5e27f8524f3e9ac777b7e9d56651921cbd043eb59791ea981811b24bc5d5349f->enter($__internal_5e27f8524f3e9ac777b7e9d56651921cbd043eb59791ea981811b24bc5d5349f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5e27f8524f3e9ac777b7e9d56651921cbd043eb59791ea981811b24bc5d5349f->leave($__internal_5e27f8524f3e9ac777b7e9d56651921cbd043eb59791ea981811b24bc5d5349f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
