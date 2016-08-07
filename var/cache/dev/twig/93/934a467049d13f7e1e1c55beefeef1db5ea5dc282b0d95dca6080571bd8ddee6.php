<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3580f8b2d4dc647ad8b7d95368da1f26b6e196de306f0bc490cf5df7ca9d821d extends Twig_Template
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
        $__internal_7caf901575100559cb4bec919450d8f3d564251762533b340d76b9727d4fdf4b = $this->env->getExtension("native_profiler");
        $__internal_7caf901575100559cb4bec919450d8f3d564251762533b340d76b9727d4fdf4b->enter($__internal_7caf901575100559cb4bec919450d8f3d564251762533b340d76b9727d4fdf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7caf901575100559cb4bec919450d8f3d564251762533b340d76b9727d4fdf4b->leave($__internal_7caf901575100559cb4bec919450d8f3d564251762533b340d76b9727d4fdf4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
