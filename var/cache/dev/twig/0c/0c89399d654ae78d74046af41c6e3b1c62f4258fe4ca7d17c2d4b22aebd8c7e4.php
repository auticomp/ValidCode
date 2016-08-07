<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_92deede5909432f9020e3fc33c94ba1b2db3fe5544f78a1656365868855b3757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d41d0a20d6d04df3cd79d1fa9159fb6a0e16ca8ed51bc8205519120cdf925b8d = $this->env->getExtension("native_profiler");
        $__internal_d41d0a20d6d04df3cd79d1fa9159fb6a0e16ca8ed51bc8205519120cdf925b8d->enter($__internal_d41d0a20d6d04df3cd79d1fa9159fb6a0e16ca8ed51bc8205519120cdf925b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41d0a20d6d04df3cd79d1fa9159fb6a0e16ca8ed51bc8205519120cdf925b8d->leave($__internal_d41d0a20d6d04df3cd79d1fa9159fb6a0e16ca8ed51bc8205519120cdf925b8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4183c585605542b9c2f1b87badf385a7925227054b3930c36074a403a4391c42 = $this->env->getExtension("native_profiler");
        $__internal_4183c585605542b9c2f1b87badf385a7925227054b3930c36074a403a4391c42->enter($__internal_4183c585605542b9c2f1b87badf385a7925227054b3930c36074a403a4391c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4183c585605542b9c2f1b87badf385a7925227054b3930c36074a403a4391c42->leave($__internal_4183c585605542b9c2f1b87badf385a7925227054b3930c36074a403a4391c42_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eab9807d64784060e9a04a1bbb80ceb7371ddcb579475cb1eacf0e555ff76c15 = $this->env->getExtension("native_profiler");
        $__internal_eab9807d64784060e9a04a1bbb80ceb7371ddcb579475cb1eacf0e555ff76c15->enter($__internal_eab9807d64784060e9a04a1bbb80ceb7371ddcb579475cb1eacf0e555ff76c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eab9807d64784060e9a04a1bbb80ceb7371ddcb579475cb1eacf0e555ff76c15->leave($__internal_eab9807d64784060e9a04a1bbb80ceb7371ddcb579475cb1eacf0e555ff76c15_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5198547d2bd3bc464ef77c39504060caf211b49663cea8904abf7435b250809c = $this->env->getExtension("native_profiler");
        $__internal_5198547d2bd3bc464ef77c39504060caf211b49663cea8904abf7435b250809c->enter($__internal_5198547d2bd3bc464ef77c39504060caf211b49663cea8904abf7435b250809c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5198547d2bd3bc464ef77c39504060caf211b49663cea8904abf7435b250809c->leave($__internal_5198547d2bd3bc464ef77c39504060caf211b49663cea8904abf7435b250809c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
