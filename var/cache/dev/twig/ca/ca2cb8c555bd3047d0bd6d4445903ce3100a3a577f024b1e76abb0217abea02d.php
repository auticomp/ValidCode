<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9f9da21e05ad24829f18b5501e9b774b4fba6d52b9a27862ff8d3f7db73c33f4 extends Twig_Template
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
        $__internal_83ba8d695cf5c43e2a99faf7260bef39f97387ee38212c9e0d1017793d0dd70d = $this->env->getExtension("native_profiler");
        $__internal_83ba8d695cf5c43e2a99faf7260bef39f97387ee38212c9e0d1017793d0dd70d->enter($__internal_83ba8d695cf5c43e2a99faf7260bef39f97387ee38212c9e0d1017793d0dd70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_83ba8d695cf5c43e2a99faf7260bef39f97387ee38212c9e0d1017793d0dd70d->leave($__internal_83ba8d695cf5c43e2a99faf7260bef39f97387ee38212c9e0d1017793d0dd70d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
