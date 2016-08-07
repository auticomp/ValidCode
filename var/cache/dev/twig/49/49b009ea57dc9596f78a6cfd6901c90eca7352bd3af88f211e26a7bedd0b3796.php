<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e9fd42fe05209d59232a1b9bf42a7a0a34274d5ed59d34b126cdbb5ec46dc6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_546dd5dbf82e878a61144a67d6b66e643d89f9605f048e9e7b6dfac7607ee064 = $this->env->getExtension("native_profiler");
        $__internal_546dd5dbf82e878a61144a67d6b66e643d89f9605f048e9e7b6dfac7607ee064->enter($__internal_546dd5dbf82e878a61144a67d6b66e643d89f9605f048e9e7b6dfac7607ee064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_546dd5dbf82e878a61144a67d6b66e643d89f9605f048e9e7b6dfac7607ee064->leave($__internal_546dd5dbf82e878a61144a67d6b66e643d89f9605f048e9e7b6dfac7607ee064_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_37fe24db96c31c7a0f5b83e30a01b04229ce4e187aa67db1f4ec8ca7b7fdffdc = $this->env->getExtension("native_profiler");
        $__internal_37fe24db96c31c7a0f5b83e30a01b04229ce4e187aa67db1f4ec8ca7b7fdffdc->enter($__internal_37fe24db96c31c7a0f5b83e30a01b04229ce4e187aa67db1f4ec8ca7b7fdffdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_37fe24db96c31c7a0f5b83e30a01b04229ce4e187aa67db1f4ec8ca7b7fdffdc->leave($__internal_37fe24db96c31c7a0f5b83e30a01b04229ce4e187aa67db1f4ec8ca7b7fdffdc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
