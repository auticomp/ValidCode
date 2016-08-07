<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_64dc0d9b4dabcc65ed330e5d9c832c77967de7318fa24a456d9abf63b592dd72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b81c27961c1b72aa1328c51715926b3bda90a1f9198b0a22778a0a76dc3a3893 = $this->env->getExtension("native_profiler");
        $__internal_b81c27961c1b72aa1328c51715926b3bda90a1f9198b0a22778a0a76dc3a3893->enter($__internal_b81c27961c1b72aa1328c51715926b3bda90a1f9198b0a22778a0a76dc3a3893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b81c27961c1b72aa1328c51715926b3bda90a1f9198b0a22778a0a76dc3a3893->leave($__internal_b81c27961c1b72aa1328c51715926b3bda90a1f9198b0a22778a0a76dc3a3893_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2b99720247fe44fb1718fd7e516291cb541539a32699b99fcae0484ffe30da4 = $this->env->getExtension("native_profiler");
        $__internal_b2b99720247fe44fb1718fd7e516291cb541539a32699b99fcae0484ffe30da4->enter($__internal_b2b99720247fe44fb1718fd7e516291cb541539a32699b99fcae0484ffe30da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b2b99720247fe44fb1718fd7e516291cb541539a32699b99fcae0484ffe30da4->leave($__internal_b2b99720247fe44fb1718fd7e516291cb541539a32699b99fcae0484ffe30da4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e5872212d19c72e3fe5af33fc7b9d05971c4a66b6efb09a2441a4f1aa0af533 = $this->env->getExtension("native_profiler");
        $__internal_6e5872212d19c72e3fe5af33fc7b9d05971c4a66b6efb09a2441a4f1aa0af533->enter($__internal_6e5872212d19c72e3fe5af33fc7b9d05971c4a66b6efb09a2441a4f1aa0af533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6e5872212d19c72e3fe5af33fc7b9d05971c4a66b6efb09a2441a4f1aa0af533->leave($__internal_6e5872212d19c72e3fe5af33fc7b9d05971c4a66b6efb09a2441a4f1aa0af533_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f9576a75662b442a1bc378fc968d8738f343055b3ce3fe9e9c86f26bf944126 = $this->env->getExtension("native_profiler");
        $__internal_8f9576a75662b442a1bc378fc968d8738f343055b3ce3fe9e9c86f26bf944126->enter($__internal_8f9576a75662b442a1bc378fc968d8738f343055b3ce3fe9e9c86f26bf944126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f9576a75662b442a1bc378fc968d8738f343055b3ce3fe9e9c86f26bf944126->leave($__internal_8f9576a75662b442a1bc378fc968d8738f343055b3ce3fe9e9c86f26bf944126_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
