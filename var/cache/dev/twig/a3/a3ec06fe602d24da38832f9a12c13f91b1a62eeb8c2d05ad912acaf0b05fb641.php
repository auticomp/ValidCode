<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_670bafcc205bb79f49b799cdcd8ddf40c2194c129a8b68afc4e8b0d979dd23d3 extends Twig_Template
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
        $__internal_f8882cb004bb9c18a783afb5d3f6fc2943f4a6ebcd78d1a7c8fd4aa6f2dcb0b4 = $this->env->getExtension("native_profiler");
        $__internal_f8882cb004bb9c18a783afb5d3f6fc2943f4a6ebcd78d1a7c8fd4aa6f2dcb0b4->enter($__internal_f8882cb004bb9c18a783afb5d3f6fc2943f4a6ebcd78d1a7c8fd4aa6f2dcb0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f8882cb004bb9c18a783afb5d3f6fc2943f4a6ebcd78d1a7c8fd4aa6f2dcb0b4->leave($__internal_f8882cb004bb9c18a783afb5d3f6fc2943f4a6ebcd78d1a7c8fd4aa6f2dcb0b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
