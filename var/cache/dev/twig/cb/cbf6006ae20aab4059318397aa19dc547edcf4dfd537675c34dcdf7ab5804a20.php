<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a047899c8a2ade3d2481c5e13994c58c310025a60816f60c50f1384b9864bc35 extends Twig_Template
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
        $__internal_50ffdffaf3fe2ee4926dde65764bdd9919eea83259c364e509df90b05d1c7c27 = $this->env->getExtension("native_profiler");
        $__internal_50ffdffaf3fe2ee4926dde65764bdd9919eea83259c364e509df90b05d1c7c27->enter($__internal_50ffdffaf3fe2ee4926dde65764bdd9919eea83259c364e509df90b05d1c7c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_50ffdffaf3fe2ee4926dde65764bdd9919eea83259c364e509df90b05d1c7c27->leave($__internal_50ffdffaf3fe2ee4926dde65764bdd9919eea83259c364e509df90b05d1c7c27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
