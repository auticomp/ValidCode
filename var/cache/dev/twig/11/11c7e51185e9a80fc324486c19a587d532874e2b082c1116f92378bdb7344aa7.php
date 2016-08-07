<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_73bb2be7b93deed29664b944884ec990b6c016d1629fe227641b35a1118180ab extends Twig_Template
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
        $__internal_b66edfd5229746db3a8e2e114e8e15d276d654718d5975ee7988fa76ba5de1e8 = $this->env->getExtension("native_profiler");
        $__internal_b66edfd5229746db3a8e2e114e8e15d276d654718d5975ee7988fa76ba5de1e8->enter($__internal_b66edfd5229746db3a8e2e114e8e15d276d654718d5975ee7988fa76ba5de1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b66edfd5229746db3a8e2e114e8e15d276d654718d5975ee7988fa76ba5de1e8->leave($__internal_b66edfd5229746db3a8e2e114e8e15d276d654718d5975ee7988fa76ba5de1e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
