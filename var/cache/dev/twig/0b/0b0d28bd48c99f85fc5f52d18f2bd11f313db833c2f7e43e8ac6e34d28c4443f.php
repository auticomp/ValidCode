<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9ace26709bd5e76513fc522d07d7bfe7043d0feb84876d95127ef268d8368d70 extends Twig_Template
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
        $__internal_960603e6cc8989e95c73894abe5e5ccf04347dd21799eeb3a5cef30a7ea20f1c = $this->env->getExtension("native_profiler");
        $__internal_960603e6cc8989e95c73894abe5e5ccf04347dd21799eeb3a5cef30a7ea20f1c->enter($__internal_960603e6cc8989e95c73894abe5e5ccf04347dd21799eeb3a5cef30a7ea20f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_960603e6cc8989e95c73894abe5e5ccf04347dd21799eeb3a5cef30a7ea20f1c->leave($__internal_960603e6cc8989e95c73894abe5e5ccf04347dd21799eeb3a5cef30a7ea20f1c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
