<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a1d585104f0749bd7077b0837beb808c1f1a200295b21d22c4eeabb776c33d93 extends Twig_Template
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
        $__internal_ea96b859ed75fa3e7b38e10e1208898a6bc5030d7c176687fccafdf97876200b = $this->env->getExtension("native_profiler");
        $__internal_ea96b859ed75fa3e7b38e10e1208898a6bc5030d7c176687fccafdf97876200b->enter($__internal_ea96b859ed75fa3e7b38e10e1208898a6bc5030d7c176687fccafdf97876200b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ea96b859ed75fa3e7b38e10e1208898a6bc5030d7c176687fccafdf97876200b->leave($__internal_ea96b859ed75fa3e7b38e10e1208898a6bc5030d7c176687fccafdf97876200b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
