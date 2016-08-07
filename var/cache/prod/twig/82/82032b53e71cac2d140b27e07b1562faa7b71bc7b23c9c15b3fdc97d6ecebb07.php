<?php

/* @App/Auth/login.html.twig */
class __TwigTemplate_d6579d8a9c2905f8adca4095509bbcd679e18c9e571776817d465b0b895c8018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::auth.html.twig", "@App/Auth/login.html.twig", 1);
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
        return "@App/Auth/login.html.twig";
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
