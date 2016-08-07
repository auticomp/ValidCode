<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6116cb7c2b742715f57e64e7dec09701799ac3b977d3a0a32990b0a813beabb9 extends Twig_Template
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
        $__internal_dbb9d0c0972d9ced023e4fe2c02a71e581e1531ec8a0e1e85a4e84e737b82e48 = $this->env->getExtension("native_profiler");
        $__internal_dbb9d0c0972d9ced023e4fe2c02a71e581e1531ec8a0e1e85a4e84e737b82e48->enter($__internal_dbb9d0c0972d9ced023e4fe2c02a71e581e1531ec8a0e1e85a4e84e737b82e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_dbb9d0c0972d9ced023e4fe2c02a71e581e1531ec8a0e1e85a4e84e737b82e48->leave($__internal_dbb9d0c0972d9ced023e4fe2c02a71e581e1531ec8a0e1e85a4e84e737b82e48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
