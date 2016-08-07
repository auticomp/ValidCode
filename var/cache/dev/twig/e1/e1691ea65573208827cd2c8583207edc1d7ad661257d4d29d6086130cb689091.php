<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ca48e4a6bc452836a14ee73ec357acbeca2855659a436230709c936ec37bfe5d extends Twig_Template
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
        $__internal_717a83fd88b0342600a23e0a644cf969e1c3c6738436373ab120b7d19b97f5d4 = $this->env->getExtension("native_profiler");
        $__internal_717a83fd88b0342600a23e0a644cf969e1c3c6738436373ab120b7d19b97f5d4->enter($__internal_717a83fd88b0342600a23e0a644cf969e1c3c6738436373ab120b7d19b97f5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_717a83fd88b0342600a23e0a644cf969e1c3c6738436373ab120b7d19b97f5d4->leave($__internal_717a83fd88b0342600a23e0a644cf969e1c3c6738436373ab120b7d19b97f5d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
