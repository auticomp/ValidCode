<?php

/* AppBundle:Auth:login.html.twig */
class __TwigTemplate_e137e1875ad0a0a1602e91f7c47450711e9f6e69a4e41363e1f3bd52ebb59bc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::auth.html.twig", "AppBundle:Auth:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AppBundle:Auth:Login";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Auth:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::auth.html.twig" %}*/
/* */
/* {% block title %}AppBundle:Auth:Login{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
