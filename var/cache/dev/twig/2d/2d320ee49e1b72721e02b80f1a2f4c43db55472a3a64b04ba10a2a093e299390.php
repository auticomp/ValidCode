<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b516e46bd9e7554344c41ca66c222043d58aa400de33cdf4a2e31ab279d98b26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_7f9b70f46fa2b5b7fcac0dd2a2a63568ef236739822740dac7449a5667de8a5b = $this->env->getExtension("native_profiler");
        $__internal_7f9b70f46fa2b5b7fcac0dd2a2a63568ef236739822740dac7449a5667de8a5b->enter($__internal_7f9b70f46fa2b5b7fcac0dd2a2a63568ef236739822740dac7449a5667de8a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f9b70f46fa2b5b7fcac0dd2a2a63568ef236739822740dac7449a5667de8a5b->leave($__internal_7f9b70f46fa2b5b7fcac0dd2a2a63568ef236739822740dac7449a5667de8a5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ad65a0f3ea492f4420398ee0779180581c43ce3fef55cf4faa8242b3f58b16b = $this->env->getExtension("native_profiler");
        $__internal_8ad65a0f3ea492f4420398ee0779180581c43ce3fef55cf4faa8242b3f58b16b->enter($__internal_8ad65a0f3ea492f4420398ee0779180581c43ce3fef55cf4faa8242b3f58b16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8ad65a0f3ea492f4420398ee0779180581c43ce3fef55cf4faa8242b3f58b16b->leave($__internal_8ad65a0f3ea492f4420398ee0779180581c43ce3fef55cf4faa8242b3f58b16b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_db5d1bed7a919df1c11b3ac4a9f4f36ba80af8ed51a8aa0a57588b1471636409 = $this->env->getExtension("native_profiler");
        $__internal_db5d1bed7a919df1c11b3ac4a9f4f36ba80af8ed51a8aa0a57588b1471636409->enter($__internal_db5d1bed7a919df1c11b3ac4a9f4f36ba80af8ed51a8aa0a57588b1471636409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_db5d1bed7a919df1c11b3ac4a9f4f36ba80af8ed51a8aa0a57588b1471636409->leave($__internal_db5d1bed7a919df1c11b3ac4a9f4f36ba80af8ed51a8aa0a57588b1471636409_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15fa5f2711eaead7364df33c1c7e681f4bda974f0fe24d013c86d00953e55ef1 = $this->env->getExtension("native_profiler");
        $__internal_15fa5f2711eaead7364df33c1c7e681f4bda974f0fe24d013c86d00953e55ef1->enter($__internal_15fa5f2711eaead7364df33c1c7e681f4bda974f0fe24d013c86d00953e55ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_15fa5f2711eaead7364df33c1c7e681f4bda974f0fe24d013c86d00953e55ef1->leave($__internal_15fa5f2711eaead7364df33c1c7e681f4bda974f0fe24d013c86d00953e55ef1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
