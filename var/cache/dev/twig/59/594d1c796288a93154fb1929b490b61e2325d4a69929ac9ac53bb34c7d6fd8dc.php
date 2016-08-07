<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_824f084298b5c5550affeefcf016abb72fc951374aa23e6b89cb712d533b15ae extends Twig_Template
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
        $__internal_49b325c1a902d02ad13bd8b2e971a28acb57eacaf635554b2620debd6b55f85f = $this->env->getExtension("native_profiler");
        $__internal_49b325c1a902d02ad13bd8b2e971a28acb57eacaf635554b2620debd6b55f85f->enter($__internal_49b325c1a902d02ad13bd8b2e971a28acb57eacaf635554b2620debd6b55f85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_49b325c1a902d02ad13bd8b2e971a28acb57eacaf635554b2620debd6b55f85f->leave($__internal_49b325c1a902d02ad13bd8b2e971a28acb57eacaf635554b2620debd6b55f85f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
