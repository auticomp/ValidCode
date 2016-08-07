<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_431eccc4e2d6c276f4e1eb3e05f8b11e09484766fe0cdd3614109fb2971c7f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e4952bdae685042a57bd14be60a54b313ae01b9fb9ab7e9eb035505b999e7ea = $this->env->getExtension("native_profiler");
        $__internal_4e4952bdae685042a57bd14be60a54b313ae01b9fb9ab7e9eb035505b999e7ea->enter($__internal_4e4952bdae685042a57bd14be60a54b313ae01b9fb9ab7e9eb035505b999e7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e4952bdae685042a57bd14be60a54b313ae01b9fb9ab7e9eb035505b999e7ea->leave($__internal_4e4952bdae685042a57bd14be60a54b313ae01b9fb9ab7e9eb035505b999e7ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_08b47500602db41468f3abf0f72ce89fcd777911ebabc4d54e6a21cd0a019835 = $this->env->getExtension("native_profiler");
        $__internal_08b47500602db41468f3abf0f72ce89fcd777911ebabc4d54e6a21cd0a019835->enter($__internal_08b47500602db41468f3abf0f72ce89fcd777911ebabc4d54e6a21cd0a019835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_08b47500602db41468f3abf0f72ce89fcd777911ebabc4d54e6a21cd0a019835->leave($__internal_08b47500602db41468f3abf0f72ce89fcd777911ebabc4d54e6a21cd0a019835_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2fcac8104cf40f5f9ae8565d5b45c773e956142d2839aef538038bc30f8a817 = $this->env->getExtension("native_profiler");
        $__internal_d2fcac8104cf40f5f9ae8565d5b45c773e956142d2839aef538038bc30f8a817->enter($__internal_d2fcac8104cf40f5f9ae8565d5b45c773e956142d2839aef538038bc30f8a817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d2fcac8104cf40f5f9ae8565d5b45c773e956142d2839aef538038bc30f8a817->leave($__internal_d2fcac8104cf40f5f9ae8565d5b45c773e956142d2839aef538038bc30f8a817_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
