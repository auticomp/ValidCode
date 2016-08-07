<?php

/* @App/Auth/login.html.twig */
class __TwigTemplate_bedd8012d82cbf11b2fe29d838ea735d2f7bedf5d26ca06da7da75f9a2521856 extends Twig_Template
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
        $__internal_27342c8048d74af29be4f47bfc6d3bd833c30e97604a13ed6c105f4ba1c44438 = $this->env->getExtension("native_profiler");
        $__internal_27342c8048d74af29be4f47bfc6d3bd833c30e97604a13ed6c105f4ba1c44438->enter($__internal_27342c8048d74af29be4f47bfc6d3bd833c30e97604a13ed6c105f4ba1c44438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Auth/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27342c8048d74af29be4f47bfc6d3bd833c30e97604a13ed6c105f4ba1c44438->leave($__internal_27342c8048d74af29be4f47bfc6d3bd833c30e97604a13ed6c105f4ba1c44438_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d35625ac729d76cdb2dc76f9b27ecff47b7fc129f0a809f1029abb29b1ce70c1 = $this->env->getExtension("native_profiler");
        $__internal_d35625ac729d76cdb2dc76f9b27ecff47b7fc129f0a809f1029abb29b1ce70c1->enter($__internal_d35625ac729d76cdb2dc76f9b27ecff47b7fc129f0a809f1029abb29b1ce70c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_d35625ac729d76cdb2dc76f9b27ecff47b7fc129f0a809f1029abb29b1ce70c1->leave($__internal_d35625ac729d76cdb2dc76f9b27ecff47b7fc129f0a809f1029abb29b1ce70c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a63c4f84aabfeb074ea05856ff2d97142cade7b84aac107e8c8a806fa86543e = $this->env->getExtension("native_profiler");
        $__internal_7a63c4f84aabfeb074ea05856ff2d97142cade7b84aac107e8c8a806fa86543e->enter($__internal_7a63c4f84aabfeb074ea05856ff2d97142cade7b84aac107e8c8a806fa86543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        
        $__internal_7a63c4f84aabfeb074ea05856ff2d97142cade7b84aac107e8c8a806fa86543e->leave($__internal_7a63c4f84aabfeb074ea05856ff2d97142cade7b84aac107e8c8a806fa86543e_prof);

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
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::auth.html.twig" %}*/
/* */
/* {% block title %}Login{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
