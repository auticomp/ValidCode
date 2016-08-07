<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_13bd76b7f72a63ddcbe67d6440a0076ce896e536d2d9e7258fe1ce62791876f0 extends Twig_Template
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
        $__internal_080f4f2c5d9f196cc3ab9db85e9abf98944e485490c04e1496e01741d072dca0 = $this->env->getExtension("native_profiler");
        $__internal_080f4f2c5d9f196cc3ab9db85e9abf98944e485490c04e1496e01741d072dca0->enter($__internal_080f4f2c5d9f196cc3ab9db85e9abf98944e485490c04e1496e01741d072dca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_080f4f2c5d9f196cc3ab9db85e9abf98944e485490c04e1496e01741d072dca0->leave($__internal_080f4f2c5d9f196cc3ab9db85e9abf98944e485490c04e1496e01741d072dca0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
