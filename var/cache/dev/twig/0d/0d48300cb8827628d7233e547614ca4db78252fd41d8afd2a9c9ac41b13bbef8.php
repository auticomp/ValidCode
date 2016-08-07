<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_41b5e11cd8995c0e19d8bc6857cc96549020b115c3527be7517c92bf53dd599d extends Twig_Template
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
        $__internal_e0eb4fa0cbb71f0838a37339701ba38c35a003b1e0ec97b17c6772b99ccb3983 = $this->env->getExtension("native_profiler");
        $__internal_e0eb4fa0cbb71f0838a37339701ba38c35a003b1e0ec97b17c6772b99ccb3983->enter($__internal_e0eb4fa0cbb71f0838a37339701ba38c35a003b1e0ec97b17c6772b99ccb3983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e0eb4fa0cbb71f0838a37339701ba38c35a003b1e0ec97b17c6772b99ccb3983->leave($__internal_e0eb4fa0cbb71f0838a37339701ba38c35a003b1e0ec97b17c6772b99ccb3983_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
