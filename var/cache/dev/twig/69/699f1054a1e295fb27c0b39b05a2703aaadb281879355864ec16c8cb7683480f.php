<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_56965bfd6307b87421257d82cbf3d4033370434026189554edf2966090bc3312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebb8f3123ff5813ad35b4b518d15e29fbe3afc646e4815fae14ff5a66e68f11a = $this->env->getExtension("native_profiler");
        $__internal_ebb8f3123ff5813ad35b4b518d15e29fbe3afc646e4815fae14ff5a66e68f11a->enter($__internal_ebb8f3123ff5813ad35b4b518d15e29fbe3afc646e4815fae14ff5a66e68f11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebb8f3123ff5813ad35b4b518d15e29fbe3afc646e4815fae14ff5a66e68f11a->leave($__internal_ebb8f3123ff5813ad35b4b518d15e29fbe3afc646e4815fae14ff5a66e68f11a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_463f7afbea20821beaa6a6e7b641a4077aa6d31727e9710076257036e9379c64 = $this->env->getExtension("native_profiler");
        $__internal_463f7afbea20821beaa6a6e7b641a4077aa6d31727e9710076257036e9379c64->enter($__internal_463f7afbea20821beaa6a6e7b641a4077aa6d31727e9710076257036e9379c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_463f7afbea20821beaa6a6e7b641a4077aa6d31727e9710076257036e9379c64->leave($__internal_463f7afbea20821beaa6a6e7b641a4077aa6d31727e9710076257036e9379c64_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77647c0628525c8c5e976ca2990b61b1a3f7dcc62e72db7f6cbe45d2f628babb = $this->env->getExtension("native_profiler");
        $__internal_77647c0628525c8c5e976ca2990b61b1a3f7dcc62e72db7f6cbe45d2f628babb->enter($__internal_77647c0628525c8c5e976ca2990b61b1a3f7dcc62e72db7f6cbe45d2f628babb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_77647c0628525c8c5e976ca2990b61b1a3f7dcc62e72db7f6cbe45d2f628babb->leave($__internal_77647c0628525c8c5e976ca2990b61b1a3f7dcc62e72db7f6cbe45d2f628babb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f71186a5007bf6ca4fa4d67186093580d20d6181ee9ca7af8b09481241d5789 = $this->env->getExtension("native_profiler");
        $__internal_2f71186a5007bf6ca4fa4d67186093580d20d6181ee9ca7af8b09481241d5789->enter($__internal_2f71186a5007bf6ca4fa4d67186093580d20d6181ee9ca7af8b09481241d5789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2f71186a5007bf6ca4fa4d67186093580d20d6181ee9ca7af8b09481241d5789->leave($__internal_2f71186a5007bf6ca4fa4d67186093580d20d6181ee9ca7af8b09481241d5789_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
