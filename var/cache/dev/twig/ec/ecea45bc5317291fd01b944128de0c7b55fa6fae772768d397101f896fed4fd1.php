<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_474cbda67cdcbc31a2bd41b58f3c7c2082eb946831e8ef9310d699b284bf9425 extends Twig_Template
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
        $__internal_61fdd6324939fd50c00ffe17b55adb6e8b51934575dae4d37b087c5052e08ff5 = $this->env->getExtension("native_profiler");
        $__internal_61fdd6324939fd50c00ffe17b55adb6e8b51934575dae4d37b087c5052e08ff5->enter($__internal_61fdd6324939fd50c00ffe17b55adb6e8b51934575dae4d37b087c5052e08ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_61fdd6324939fd50c00ffe17b55adb6e8b51934575dae4d37b087c5052e08ff5->leave($__internal_61fdd6324939fd50c00ffe17b55adb6e8b51934575dae4d37b087c5052e08ff5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
