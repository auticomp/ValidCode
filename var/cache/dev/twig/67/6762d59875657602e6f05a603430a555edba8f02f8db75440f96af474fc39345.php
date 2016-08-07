<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b13d47e3f134f971b3531190c9c933934e8942dd5b5c7737dad3d0789c5f4a58 extends Twig_Template
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
        $__internal_13e45a4ff14e3c4c2ba058820f0903fa6e2aeb3a9c971c0fa1e6be0be6ef4d80 = $this->env->getExtension("native_profiler");
        $__internal_13e45a4ff14e3c4c2ba058820f0903fa6e2aeb3a9c971c0fa1e6be0be6ef4d80->enter($__internal_13e45a4ff14e3c4c2ba058820f0903fa6e2aeb3a9c971c0fa1e6be0be6ef4d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_13e45a4ff14e3c4c2ba058820f0903fa6e2aeb3a9c971c0fa1e6be0be6ef4d80->leave($__internal_13e45a4ff14e3c4c2ba058820f0903fa6e2aeb3a9c971c0fa1e6be0be6ef4d80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
