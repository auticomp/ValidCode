<?php

/* :default:index.html.twig */
class __TwigTemplate_611177a3015238309961ba3f706198939c5d2ac5f98786a7efa69856a143a604 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-lg-12\">
      <h1 class=\"page-header\">Pagina Padr&atilde;o</h1>
    </div>
    <!-- /.col-lg-12 -->
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "
";
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
        return array (  43 => 11,  40 => 10,  32 => 4,  29 => 3,  11 => 1,);
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
