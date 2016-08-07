<?php

/* default/index.html.twig */
class __TwigTemplate_26b6b1c5e7c2ead88e0d4ca0121fe5b0bd349ecb3ffda5ad6f1cd23846fa7ff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_6bc58e05594e3a204bb6e57e870585cb1856ca2d9c28a9748797a292396d1c17 = $this->env->getExtension("native_profiler");
        $__internal_6bc58e05594e3a204bb6e57e870585cb1856ca2d9c28a9748797a292396d1c17->enter($__internal_6bc58e05594e3a204bb6e57e870585cb1856ca2d9c28a9748797a292396d1c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bc58e05594e3a204bb6e57e870585cb1856ca2d9c28a9748797a292396d1c17->leave($__internal_6bc58e05594e3a204bb6e57e870585cb1856ca2d9c28a9748797a292396d1c17_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd22de139eee1d3db760dfdff3de8c98770e65543fba32e249c8bc2b92ba0d7c = $this->env->getExtension("native_profiler");
        $__internal_fd22de139eee1d3db760dfdff3de8c98770e65543fba32e249c8bc2b92ba0d7c->enter($__internal_fd22de139eee1d3db760dfdff3de8c98770e65543fba32e249c8bc2b92ba0d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-lg-12\">
      <h1 class=\"page-header\">Pagina Padr&atilde;o</h1>
    </div>
    <!-- /.col-lg-12 -->
";
        
        $__internal_fd22de139eee1d3db760dfdff3de8c98770e65543fba32e249c8bc2b92ba0d7c->leave($__internal_fd22de139eee1d3db760dfdff3de8c98770e65543fba32e249c8bc2b92ba0d7c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_efd27bbcd3950be388c4b04258a44b190bc71f687c1934fcbe45e73e95065676 = $this->env->getExtension("native_profiler");
        $__internal_efd27bbcd3950be388c4b04258a44b190bc71f687c1934fcbe45e73e95065676->enter($__internal_efd27bbcd3950be388c4b04258a44b190bc71f687c1934fcbe45e73e95065676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
";
        
        $__internal_efd27bbcd3950be388c4b04258a44b190bc71f687c1934fcbe45e73e95065676->leave($__internal_efd27bbcd3950be388c4b04258a44b190bc71f687c1934fcbe45e73e95065676_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
