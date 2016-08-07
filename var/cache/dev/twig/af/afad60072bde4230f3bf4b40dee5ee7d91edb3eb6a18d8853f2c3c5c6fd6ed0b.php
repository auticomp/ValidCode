<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_067a70701cb58e88c63559ed0165398352f2345eb55c93600d14003a95b9792c extends Twig_Template
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
        $__internal_2cc9652f207839053f127c96a6f6e6618b56032fcf4df7b430ef314ead8d5e32 = $this->env->getExtension("native_profiler");
        $__internal_2cc9652f207839053f127c96a6f6e6618b56032fcf4df7b430ef314ead8d5e32->enter($__internal_2cc9652f207839053f127c96a6f6e6618b56032fcf4df7b430ef314ead8d5e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_2cc9652f207839053f127c96a6f6e6618b56032fcf4df7b430ef314ead8d5e32->leave($__internal_2cc9652f207839053f127c96a6f6e6618b56032fcf4df7b430ef314ead8d5e32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
