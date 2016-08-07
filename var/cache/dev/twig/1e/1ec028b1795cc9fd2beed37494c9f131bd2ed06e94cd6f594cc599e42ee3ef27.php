<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_fa4dde7433ece204609346a476c857aa516aca593670b7d5078159ea767d4010 extends Twig_Template
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
        $__internal_2d6847098389494174982cdb2fbc843bde085f84df0b7cbcb00be2864892a744 = $this->env->getExtension("native_profiler");
        $__internal_2d6847098389494174982cdb2fbc843bde085f84df0b7cbcb00be2864892a744->enter($__internal_2d6847098389494174982cdb2fbc843bde085f84df0b7cbcb00be2864892a744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2d6847098389494174982cdb2fbc843bde085f84df0b7cbcb00be2864892a744->leave($__internal_2d6847098389494174982cdb2fbc843bde085f84df0b7cbcb00be2864892a744_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
