<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4e0397e59f3f854456a5b3894c5535ae4b981ca349eb482e318fc9eb87e6190c extends Twig_Template
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
        $__internal_2ccb71ff86f9c233089ef06ccdfe6293a90c20ab6ce5e18c047e956a971ac35f = $this->env->getExtension("native_profiler");
        $__internal_2ccb71ff86f9c233089ef06ccdfe6293a90c20ab6ce5e18c047e956a971ac35f->enter($__internal_2ccb71ff86f9c233089ef06ccdfe6293a90c20ab6ce5e18c047e956a971ac35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2ccb71ff86f9c233089ef06ccdfe6293a90c20ab6ce5e18c047e956a971ac35f->leave($__internal_2ccb71ff86f9c233089ef06ccdfe6293a90c20ab6ce5e18c047e956a971ac35f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
