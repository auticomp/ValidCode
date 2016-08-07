<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fc5b6b0e5312f2a631edeee88d19205f4bffd8adb0b3f555ed2c9d1eb0039412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_be3918732aca8114071ac12c0459f3657a2f8bd4f0439fd4db5e57aa561c7a8b = $this->env->getExtension("native_profiler");
        $__internal_be3918732aca8114071ac12c0459f3657a2f8bd4f0439fd4db5e57aa561c7a8b->enter($__internal_be3918732aca8114071ac12c0459f3657a2f8bd4f0439fd4db5e57aa561c7a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be3918732aca8114071ac12c0459f3657a2f8bd4f0439fd4db5e57aa561c7a8b->leave($__internal_be3918732aca8114071ac12c0459f3657a2f8bd4f0439fd4db5e57aa561c7a8b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b886b71ae93bd6a64d37b5bec858ff3289afe34131b98681171377434a5ba0e8 = $this->env->getExtension("native_profiler");
        $__internal_b886b71ae93bd6a64d37b5bec858ff3289afe34131b98681171377434a5ba0e8->enter($__internal_b886b71ae93bd6a64d37b5bec858ff3289afe34131b98681171377434a5ba0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b886b71ae93bd6a64d37b5bec858ff3289afe34131b98681171377434a5ba0e8->leave($__internal_b886b71ae93bd6a64d37b5bec858ff3289afe34131b98681171377434a5ba0e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db1c9ed6c31c941d7db48fb69d1415868bb4b22349860c4bf178c54740a2ffc0 = $this->env->getExtension("native_profiler");
        $__internal_db1c9ed6c31c941d7db48fb69d1415868bb4b22349860c4bf178c54740a2ffc0->enter($__internal_db1c9ed6c31c941d7db48fb69d1415868bb4b22349860c4bf178c54740a2ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db1c9ed6c31c941d7db48fb69d1415868bb4b22349860c4bf178c54740a2ffc0->leave($__internal_db1c9ed6c31c941d7db48fb69d1415868bb4b22349860c4bf178c54740a2ffc0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
