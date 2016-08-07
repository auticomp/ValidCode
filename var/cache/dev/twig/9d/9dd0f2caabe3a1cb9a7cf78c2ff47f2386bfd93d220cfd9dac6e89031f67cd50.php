<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ddecb83d0877b06719c9e1362f2073f74ab616cc3e0da381c9e0566362b72581 extends Twig_Template
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
        $__internal_b9bc97bbed3682c9c2588f82deab9d230bff6621e563a5ed7747f0ad36297fc9 = $this->env->getExtension("native_profiler");
        $__internal_b9bc97bbed3682c9c2588f82deab9d230bff6621e563a5ed7747f0ad36297fc9->enter($__internal_b9bc97bbed3682c9c2588f82deab9d230bff6621e563a5ed7747f0ad36297fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b9bc97bbed3682c9c2588f82deab9d230bff6621e563a5ed7747f0ad36297fc9->leave($__internal_b9bc97bbed3682c9c2588f82deab9d230bff6621e563a5ed7747f0ad36297fc9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
