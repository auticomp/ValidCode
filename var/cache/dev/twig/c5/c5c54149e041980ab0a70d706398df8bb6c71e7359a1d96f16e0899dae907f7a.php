<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_32033d828130b1bb09a8dfd2d0aa51264244152f70eee8bc6b558c0cbff7fd7d extends Twig_Template
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
        $__internal_fc61302d642fbf6b5d66ff6de465032edba516fed6d01c6ccf9876a9c1a9b25f = $this->env->getExtension("native_profiler");
        $__internal_fc61302d642fbf6b5d66ff6de465032edba516fed6d01c6ccf9876a9c1a9b25f->enter($__internal_fc61302d642fbf6b5d66ff6de465032edba516fed6d01c6ccf9876a9c1a9b25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_fc61302d642fbf6b5d66ff6de465032edba516fed6d01c6ccf9876a9c1a9b25f->leave($__internal_fc61302d642fbf6b5d66ff6de465032edba516fed6d01c6ccf9876a9c1a9b25f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
