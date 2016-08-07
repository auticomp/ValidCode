<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8e07c504e2422c0704132a2d5b3ca603be46c5d9e00651c8f1736bea1a90c1e2 extends Twig_Template
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
        $__internal_641ff4c08c3898b06a9eda38794a6cfe699a959c8772f19befcca9ebee70137c = $this->env->getExtension("native_profiler");
        $__internal_641ff4c08c3898b06a9eda38794a6cfe699a959c8772f19befcca9ebee70137c->enter($__internal_641ff4c08c3898b06a9eda38794a6cfe699a959c8772f19befcca9ebee70137c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_641ff4c08c3898b06a9eda38794a6cfe699a959c8772f19befcca9ebee70137c->leave($__internal_641ff4c08c3898b06a9eda38794a6cfe699a959c8772f19befcca9ebee70137c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
