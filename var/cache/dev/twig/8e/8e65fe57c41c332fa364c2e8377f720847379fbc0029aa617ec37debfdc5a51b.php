<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5d6f7dac348a5d72265b9f84155caf5818230529e22b00c870880bc7942d5a83 extends Twig_Template
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
        $__internal_dcf21c3d9fad0ccd355507b67236c5aabc213bcd4af5fff6e5ba32a280977dbc = $this->env->getExtension("native_profiler");
        $__internal_dcf21c3d9fad0ccd355507b67236c5aabc213bcd4af5fff6e5ba32a280977dbc->enter($__internal_dcf21c3d9fad0ccd355507b67236c5aabc213bcd4af5fff6e5ba32a280977dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_dcf21c3d9fad0ccd355507b67236c5aabc213bcd4af5fff6e5ba32a280977dbc->leave($__internal_dcf21c3d9fad0ccd355507b67236c5aabc213bcd4af5fff6e5ba32a280977dbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
