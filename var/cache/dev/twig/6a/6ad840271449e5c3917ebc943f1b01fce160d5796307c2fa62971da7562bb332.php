<?php

/* auth.html.twig */
class __TwigTemplate_bb53c7bf3d1974a6185cc1ff398b869a4f2d0b687b26662be84c3173b8311484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9363224d8966da61c154ac2790c41432d869aa4f24dcddede77cb291a2e65e8f = $this->env->getExtension("native_profiler");
        $__internal_9363224d8966da61c154ac2790c41432d869aa4f24dcddede77cb291a2e65e8f->enter($__internal_9363224d8966da61c154ac2790c41432d869aa4f24dcddede77cb291a2e65e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>";
        
        $__internal_9363224d8966da61c154ac2790c41432d869aa4f24dcddede77cb291a2e65e8f->leave($__internal_9363224d8966da61c154ac2790c41432d869aa4f24dcddede77cb291a2e65e8f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f41f6a9a4ff91a6932bbd58b8ddd1f73f63ca2d70059b3db788dbcb28a739459 = $this->env->getExtension("native_profiler");
        $__internal_f41f6a9a4ff91a6932bbd58b8ddd1f73f63ca2d70059b3db788dbcb28a739459->enter($__internal_f41f6a9a4ff91a6932bbd58b8ddd1f73f63ca2d70059b3db788dbcb28a739459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_f41f6a9a4ff91a6932bbd58b8ddd1f73f63ca2d70059b3db788dbcb28a739459->leave($__internal_f41f6a9a4ff91a6932bbd58b8ddd1f73f63ca2d70059b3db788dbcb28a739459_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8cb73daf81f1085e500a2cbc71f145683e46a83df92cb833706267b4b4729dd = $this->env->getExtension("native_profiler");
        $__internal_a8cb73daf81f1085e500a2cbc71f145683e46a83df92cb833706267b4b4729dd->enter($__internal_a8cb73daf81f1085e500a2cbc71f145683e46a83df92cb833706267b4b4729dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a8cb73daf81f1085e500a2cbc71f145683e46a83df92cb833706267b4b4729dd->leave($__internal_a8cb73daf81f1085e500a2cbc71f145683e46a83df92cb833706267b4b4729dd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_031335f13549145626ff5ab50bb60cecace1facd455de3f0233763aec46491dc = $this->env->getExtension("native_profiler");
        $__internal_031335f13549145626ff5ab50bb60cecace1facd455de3f0233763aec46491dc->enter($__internal_031335f13549145626ff5ab50bb60cecace1facd455de3f0233763aec46491dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_031335f13549145626ff5ab50bb60cecace1facd455de3f0233763aec46491dc->leave($__internal_031335f13549145626ff5ab50bb60cecace1facd455de3f0233763aec46491dc_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_37b220a9c3531f4819c2e4d45cced26e245a043b1b9e493c024d8d0651148216 = $this->env->getExtension("native_profiler");
        $__internal_37b220a9c3531f4819c2e4d45cced26e245a043b1b9e493c024d8d0651148216->enter($__internal_37b220a9c3531f4819c2e4d45cced26e245a043b1b9e493c024d8d0651148216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_37b220a9c3531f4819c2e4d45cced26e245a043b1b9e493c024d8d0651148216->leave($__internal_37b220a9c3531f4819c2e4d45cced26e245a043b1b9e493c024d8d0651148216_prof);

    }

    public function getTemplateName()
    {
        return "auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 12,  83 => 10,  72 => 6,  60 => 5,  52 => 13,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Login{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
