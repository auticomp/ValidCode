<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_229d8d3103efce704dc153e999c14a8ab11c25abba4916559a079937619553ef extends Twig_Template
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
        $__internal_89ba24de9df76c8d2c70ddf5f6004bd844f7666a9b406f8d5f837ada836d1904 = $this->env->getExtension("native_profiler");
        $__internal_89ba24de9df76c8d2c70ddf5f6004bd844f7666a9b406f8d5f837ada836d1904->enter($__internal_89ba24de9df76c8d2c70ddf5f6004bd844f7666a9b406f8d5f837ada836d1904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_89ba24de9df76c8d2c70ddf5f6004bd844f7666a9b406f8d5f837ada836d1904->leave($__internal_89ba24de9df76c8d2c70ddf5f6004bd844f7666a9b406f8d5f837ada836d1904_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
