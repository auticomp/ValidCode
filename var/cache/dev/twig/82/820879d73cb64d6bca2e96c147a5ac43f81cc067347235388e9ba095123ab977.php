<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_da8fd13a5b87d26d5d0e668b2d1d52f347629b7e309fea0f89a0b8040cf92f2a extends Twig_Template
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
        $__internal_d494e6afc0f7a9e3d8d097d537d29177b8764b987ae816f582a5f517b23b3022 = $this->env->getExtension("native_profiler");
        $__internal_d494e6afc0f7a9e3d8d097d537d29177b8764b987ae816f582a5f517b23b3022->enter($__internal_d494e6afc0f7a9e3d8d097d537d29177b8764b987ae816f582a5f517b23b3022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d494e6afc0f7a9e3d8d097d537d29177b8764b987ae816f582a5f517b23b3022->leave($__internal_d494e6afc0f7a9e3d8d097d537d29177b8764b987ae816f582a5f517b23b3022_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
