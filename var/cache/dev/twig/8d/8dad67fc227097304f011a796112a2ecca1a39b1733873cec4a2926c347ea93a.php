<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e967fad051949ad54f4b8fad29781e6fc5fb1ee9cf85253d73efde26f89f5eed extends Twig_Template
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
        $__internal_e7142502921e0a8870d781471ec73a354678eb53cb546e391e9ec5ef7c74eb74 = $this->env->getExtension("native_profiler");
        $__internal_e7142502921e0a8870d781471ec73a354678eb53cb546e391e9ec5ef7c74eb74->enter($__internal_e7142502921e0a8870d781471ec73a354678eb53cb546e391e9ec5ef7c74eb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e7142502921e0a8870d781471ec73a354678eb53cb546e391e9ec5ef7c74eb74->leave($__internal_e7142502921e0a8870d781471ec73a354678eb53cb546e391e9ec5ef7c74eb74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
