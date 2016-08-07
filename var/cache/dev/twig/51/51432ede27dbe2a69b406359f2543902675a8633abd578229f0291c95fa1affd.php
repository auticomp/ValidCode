<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2b2e0ddb50e65cbe34d3ef90992129520fda0c4a1cba2f9c3b965ab51c824977 extends Twig_Template
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
        $__internal_00367746c1d4c4c90d0bc5e0ac81b9cd5f8570c21183c066d6b1fb9b70d8d280 = $this->env->getExtension("native_profiler");
        $__internal_00367746c1d4c4c90d0bc5e0ac81b9cd5f8570c21183c066d6b1fb9b70d8d280->enter($__internal_00367746c1d4c4c90d0bc5e0ac81b9cd5f8570c21183c066d6b1fb9b70d8d280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_00367746c1d4c4c90d0bc5e0ac81b9cd5f8570c21183c066d6b1fb9b70d8d280->leave($__internal_00367746c1d4c4c90d0bc5e0ac81b9cd5f8570c21183c066d6b1fb9b70d8d280_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
