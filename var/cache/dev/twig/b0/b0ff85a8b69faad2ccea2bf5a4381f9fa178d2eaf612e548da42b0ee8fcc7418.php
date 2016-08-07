<?php

/* ::auth.html.twig */
class __TwigTemplate_c15317de927a30bafe7f28abb2cdbfa20cf54e7510a7aa722cead3786d3d9ec2 extends Twig_Template
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
        $__internal_c3fdb03389ed696899c6ec772a324cd600f65b1aac5f9afd29742dcca8d75e4a = $this->env->getExtension("native_profiler");
        $__internal_c3fdb03389ed696899c6ec772a324cd600f65b1aac5f9afd29742dcca8d75e4a->enter($__internal_c3fdb03389ed696899c6ec772a324cd600f65b1aac5f9afd29742dcca8d75e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::auth.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <meta name=\"description\" content=\"\">
\t    <meta name=\"author\" content=\"\">
\t    
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <!-- Bootstrap  -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/vendor/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" />
        
        <!-- Bootswatch - cosmo  -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/vendor/bootswatch/dist/css/cosmo_bootstrap.css"), "html", null, true);
        echo "\" />
        
        <!-- Font-Awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/vendor/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" />
        
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/vendor/animatedcss/animate.css"), "html", null, true);
        echo "\">
        
        <!-- Main -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/sb-admin-2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/timeline.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/validcode_main.css"), "html", null, true);
        echo "\" />
        
        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
    </head>
    <body>

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
\t\t<!-- /.row -->
\t</div>


\t<!-- Javascript -->
        <script type=\"text/javascript\" type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery/dist/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/vendor/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        
        <!-- JS Site -->
        <script type=\"text/javascript\" type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/animate.jquery.ext.js"), "html", null, true);
        echo "\"></script>
        
        
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "    </body>
</html>
";
        
        $__internal_c3fdb03389ed696899c6ec772a324cd600f65b1aac5f9afd29742dcca8d75e4a->leave($__internal_c3fdb03389ed696899c6ec772a324cd600f65b1aac5f9afd29742dcca8d75e4a_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_adeeb8956a42fad458790804b49c350ca5494e1ebb56a59c069f2bb992d5dccc = $this->env->getExtension("native_profiler");
        $__internal_adeeb8956a42fad458790804b49c350ca5494e1ebb56a59c069f2bb992d5dccc->enter($__internal_adeeb8956a42fad458790804b49c350ca5494e1ebb56a59c069f2bb992d5dccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_adeeb8956a42fad458790804b49c350ca5494e1ebb56a59c069f2bb992d5dccc->leave($__internal_adeeb8956a42fad458790804b49c350ca5494e1ebb56a59c069f2bb992d5dccc_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e07e106e07aadeaa463833317cdc8950e8d46d91f2caba88f9dd58e47aa0c09 = $this->env->getExtension("native_profiler");
        $__internal_8e07e106e07aadeaa463833317cdc8950e8d46d91f2caba88f9dd58e47aa0c09->enter($__internal_8e07e106e07aadeaa463833317cdc8950e8d46d91f2caba88f9dd58e47aa0c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8e07e106e07aadeaa463833317cdc8950e8d46d91f2caba88f9dd58e47aa0c09->leave($__internal_8e07e106e07aadeaa463833317cdc8950e8d46d91f2caba88f9dd58e47aa0c09_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_1732aa4cf7d6398e18f669ea26350b52fe17a855fba9aa93c0678bc18712a87b = $this->env->getExtension("native_profiler");
        $__internal_1732aa4cf7d6398e18f669ea26350b52fe17a855fba9aa93c0678bc18712a87b->enter($__internal_1732aa4cf7d6398e18f669ea26350b52fe17a855fba9aa93c0678bc18712a87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1732aa4cf7d6398e18f669ea26350b52fe17a855fba9aa93c0678bc18712a87b->leave($__internal_1732aa4cf7d6398e18f669ea26350b52fe17a855fba9aa93c0678bc18712a87b_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27df2f1f91ae1491026a86778435bb4637b0d89b42228aaa960c0d1758d9de51 = $this->env->getExtension("native_profiler");
        $__internal_27df2f1f91ae1491026a86778435bb4637b0d89b42228aaa960c0d1758d9de51->enter($__internal_27df2f1f91ae1491026a86778435bb4637b0d89b42228aaa960c0d1758d9de51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_27df2f1f91ae1491026a86778435bb4637b0d89b42228aaa960c0d1758d9de51->leave($__internal_27df2f1f91ae1491026a86778435bb4637b0d89b42228aaa960c0d1758d9de51_prof);

    }

    public function getTemplateName()
    {
        return "::auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  152 => 36,  141 => 28,  129 => 10,  120 => 50,  118 => 49,  112 => 46,  106 => 43,  102 => 42,  93 => 36,  84 => 30,  81 => 29,  79 => 28,  74 => 26,  70 => 25,  66 => 24,  60 => 21,  55 => 19,  49 => 16,  43 => 13,  37 => 10,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/* 	    <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 	    <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	    <meta name="description" content="">*/
/* 	    <meta name="author" content="">*/
/* 	    */
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         */
/*         <!-- Bootstrap  -->*/
/*         <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/dist/css/bootstrap.css') }}" />*/
/*         */
/*         <!-- Bootswatch - cosmo  -->*/
/*         <link rel="stylesheet" href="{{ asset('public/vendor/bootswatch/dist/css/cosmo_bootstrap.css') }}" />*/
/*         */
/*         <!-- Font-Awesome -->*/
/*         <link rel="stylesheet" href="{{ asset('public/vendor/font-awesome/css/font-awesome.css') }}" />*/
/*         */
/*         <link rel="stylesheet" href="{{ asset('public/vendor/animatedcss/animate.css') }}">*/
/*         */
/*         <!-- Main -->*/
/*         <link rel="stylesheet" href="{{ asset('public/css/sb-admin-2.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('public/css/timeline.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('public/css/validcode_main.css') }}" />*/
/*         */
/*         {% block stylesheets %}{% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         */
/*     </head>*/
/*     <body>*/
/* */
/* 	<div class="container-fluid">*/
/* 		<div class="row">{% block body %}{% endblock %}</div>*/
/* 		<!-- /.row -->*/
/* 	</div>*/
/* */
/* */
/* 	<!-- Javascript -->*/
/*         <script type="text/javascript" type="text/javascript" src="{{ asset('public/js/jquery/dist/jquery.js') }}"></script>*/
/*         <script type="text/javascript" type="text/javascript" src="{{ asset('public/vendor/bootstrap/dist/js/bootstrap.js') }}"></script>*/
/*         */
/*         <!-- JS Site -->*/
/*         <script type="text/javascript" type="text/javascript" src="{{ asset('public/js/animate.jquery.ext.js') }}"></script>*/
/*         */
/*         */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
