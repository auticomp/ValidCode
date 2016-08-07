<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cdc67e3f2c7fb26a9be6533c77a34c4b4a534899d7581c96a50f5a6181476aa7 extends Twig_Template
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
        $__internal_7aa1ffce8f1fc43a1f9788370c65fae8d3a67b1951fb34dc047190c15cce930b = $this->env->getExtension("native_profiler");
        $__internal_7aa1ffce8f1fc43a1f9788370c65fae8d3a67b1951fb34dc047190c15cce930b->enter($__internal_7aa1ffce8f1fc43a1f9788370c65fae8d3a67b1951fb34dc047190c15cce930b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7aa1ffce8f1fc43a1f9788370c65fae8d3a67b1951fb34dc047190c15cce930b->leave($__internal_7aa1ffce8f1fc43a1f9788370c65fae8d3a67b1951fb34dc047190c15cce930b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
