<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_a98d4104a7dd5f6a7edcca17f204b7fe01180d766e7a9615bfcc1d163907de3f extends Twig_Template
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
        $__internal_9e58db5ef12a6740a9d1abb14e3bfab9b76991ef1f7f1dcc3df25dba567b8024 = $this->env->getExtension("native_profiler");
        $__internal_9e58db5ef12a6740a9d1abb14e3bfab9b76991ef1f7f1dcc3df25dba567b8024->enter($__internal_9e58db5ef12a6740a9d1abb14e3bfab9b76991ef1f7f1dcc3df25dba567b8024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9e58db5ef12a6740a9d1abb14e3bfab9b76991ef1f7f1dcc3df25dba567b8024->leave($__internal_9e58db5ef12a6740a9d1abb14e3bfab9b76991ef1f7f1dcc3df25dba567b8024_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
