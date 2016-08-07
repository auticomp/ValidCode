<?php

/* :default:index.html.twig */
class __TwigTemplate_cd92d1b4d5ad64f3859c0f5e62ccfb59e4a3eaa502859e8413b5effab72ac233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4b70a7a6a68656f9a23df282616be7db808529f3e067a35cfd08dd7a4426017 = $this->env->getExtension("native_profiler");
        $__internal_b4b70a7a6a68656f9a23df282616be7db808529f3e067a35cfd08dd7a4426017->enter($__internal_b4b70a7a6a68656f9a23df282616be7db808529f3e067a35cfd08dd7a4426017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b70a7a6a68656f9a23df282616be7db808529f3e067a35cfd08dd7a4426017->leave($__internal_b4b70a7a6a68656f9a23df282616be7db808529f3e067a35cfd08dd7a4426017_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a3b82ee0767c4648474e67704eb9af894da39f5e30ac67ee2eecce847530b82 = $this->env->getExtension("native_profiler");
        $__internal_4a3b82ee0767c4648474e67704eb9af894da39f5e30ac67ee2eecce847530b82->enter($__internal_4a3b82ee0767c4648474e67704eb9af894da39f5e30ac67ee2eecce847530b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-lg-12\">
      <h1 class=\"page-header\">Pagina Padr&atilde;o</h1>
    </div>
    <!-- /.col-lg-12 -->
";
        
        $__internal_4a3b82ee0767c4648474e67704eb9af894da39f5e30ac67ee2eecce847530b82->leave($__internal_4a3b82ee0767c4648474e67704eb9af894da39f5e30ac67ee2eecce847530b82_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d69408463b5650e44b424b021592bb48893f6092cd61facbe048d136168524a = $this->env->getExtension("native_profiler");
        $__internal_7d69408463b5650e44b424b021592bb48893f6092cd61facbe048d136168524a->enter($__internal_7d69408463b5650e44b424b021592bb48893f6092cd61facbe048d136168524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
";
        
        $__internal_7d69408463b5650e44b424b021592bb48893f6092cd61facbe048d136168524a->leave($__internal_7d69408463b5650e44b424b021592bb48893f6092cd61facbe048d136168524a_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  52 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="col-lg-12">*/
/*       <h1 class="page-header">Pagina Padr&atilde;o</h1>*/
/*     </div>*/
/*     <!-- /.col-lg-12 -->*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
