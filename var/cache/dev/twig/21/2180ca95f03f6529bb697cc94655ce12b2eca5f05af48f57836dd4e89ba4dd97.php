<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_ac0f161af3d35093b927f28f345951b74ec751f0f3ddebd0ee82886efc9dd4dd extends Twig_Template
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
        $__internal_f5d5410523a6aa6b612fa04be76173e02c8fb5baa32fb5f5f56a1afcc9910f27 = $this->env->getExtension("native_profiler");
        $__internal_f5d5410523a6aa6b612fa04be76173e02c8fb5baa32fb5f5f56a1afcc9910f27->enter($__internal_f5d5410523a6aa6b612fa04be76173e02c8fb5baa32fb5f5f56a1afcc9910f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f5d5410523a6aa6b612fa04be76173e02c8fb5baa32fb5f5f56a1afcc9910f27->leave($__internal_f5d5410523a6aa6b612fa04be76173e02c8fb5baa32fb5f5f56a1afcc9910f27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
