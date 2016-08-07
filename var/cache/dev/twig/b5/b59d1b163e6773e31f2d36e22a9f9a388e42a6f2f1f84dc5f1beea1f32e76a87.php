<?php

/* AppBundle:Auth:login.html.twig */
class __TwigTemplate_34dc1046cb5a7e7e1d76df5de42a39d887614d1f31a632541fce914f3c8636df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::auth.html.twig", "AppBundle:Auth:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c05f79075a2a8fe2b0c305544d84f40c46c995982e70b1c3e5417089fecff3e = $this->env->getExtension("native_profiler");
        $__internal_0c05f79075a2a8fe2b0c305544d84f40c46c995982e70b1c3e5417089fecff3e->enter($__internal_0c05f79075a2a8fe2b0c305544d84f40c46c995982e70b1c3e5417089fecff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Auth:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c05f79075a2a8fe2b0c305544d84f40c46c995982e70b1c3e5417089fecff3e->leave($__internal_0c05f79075a2a8fe2b0c305544d84f40c46c995982e70b1c3e5417089fecff3e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc343d7a6fe2bacf6c6441f9853a0527db5b0e0e2b642e856cbc79b9622f3285 = $this->env->getExtension("native_profiler");
        $__internal_cc343d7a6fe2bacf6c6441f9853a0527db5b0e0e2b642e856cbc79b9622f3285->enter($__internal_cc343d7a6fe2bacf6c6441f9853a0527db5b0e0e2b642e856cbc79b9622f3285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_cc343d7a6fe2bacf6c6441f9853a0527db5b0e0e2b642e856cbc79b9622f3285->leave($__internal_cc343d7a6fe2bacf6c6441f9853a0527db5b0e0e2b642e856cbc79b9622f3285_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6d6e1173d2a5a2ffee026f98739c49334d1a1e22e9353f68e6eeadba6d7ced3 = $this->env->getExtension("native_profiler");
        $__internal_b6d6e1173d2a5a2ffee026f98739c49334d1a1e22e9353f68e6eeadba6d7ced3->enter($__internal_b6d6e1173d2a5a2ffee026f98739c49334d1a1e22e9353f68e6eeadba6d7ced3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"login_dv\" class=\"col-md-4 col-md-offset-4\">
\t<div class=\"login-panel panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">ValidCode - Acesso restrito</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<form role=\"form\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"E-mail\" name=\"txtEmail\" id=\"txtEmail'
\t\t\t\t\t\t\ttype=\"email\" autofocus>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Digite sua senha\" id=\"txtPassowrd\" name=\"txtPassowrd\"
\t\t\t\t\t\t\ttype=\"password\" value=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label> <input name=\"remember\" type=\"checkbox\" value=\"Lembrar\"> Lembrar neste computador </label>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group text-right\">
\t\t\t\t\t\t<button class=\"btn btn-lg\" type=\"submit\" id=\"btnLogin\" name=\"btnLogin\">
\t\t\t\t\t\t\t<i class=\"fa fa-sign-in\"></i> Entrar
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button class=\"btn btn-lg\" type=\"reset\" id=\"btnLimpar\" name=\"btnLogin\">
\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i> Limpar
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_b6d6e1173d2a5a2ffee026f98739c49334d1a1e22e9353f68e6eeadba6d7ced3->leave($__internal_b6d6e1173d2a5a2ffee026f98739c49334d1a1e22e9353f68e6eeadba6d7ced3_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b8e0fe3ba773da92179a2afb5ace1848ce8a4fc95e2021ea0b889ed74501254 = $this->env->getExtension("native_profiler");
        $__internal_3b8e0fe3ba773da92179a2afb5ace1848ce8a4fc95e2021ea0b889ed74501254->enter($__internal_3b8e0fe3ba773da92179a2afb5ace1848ce8a4fc95e2021ea0b889ed74501254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "<script>
\$(document).ready(function(){
\t\$(\"#login_dv\").animateCss('fadeInDown');
});
</script>
";
        
        $__internal_3b8e0fe3ba773da92179a2afb5ace1848ce8a4fc95e2021ea0b889ed74501254->leave($__internal_3b8e0fe3ba773da92179a2afb5ace1848ce8a4fc95e2021ea0b889ed74501254_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Auth:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  99 => 43,  62 => 12,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::auth.html.twig" %} */
/* */
/* {% block title %}Login{% endblock %} */
/* */
/* {% block body %}*/
/* <div id="login_dv" class="col-md-4 col-md-offset-4">*/
/* 	<div class="login-panel panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">ValidCode - Acesso restrito</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<form role="form" action="{{ path('login') }}" method="post">*/
/* 				<fieldset>*/
/* 					<div class="form-group">*/
/* 						<input class="form-control" placeholder="E-mail" name="txtEmail" id="txtEmail'*/
/* 							type="email" autofocus>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<input class="form-control" placeholder="Digite sua senha" id="txtPassowrd" name="txtPassowrd"*/
/* 							type="password" value="">*/
/* 					</div>*/
/* 					<div class="checkbox">*/
/* 						<label> <input name="remember" type="checkbox" value="Lembrar"> Lembrar neste computador </label>*/
/* 					</div>*/
/* 					*/
/* 					<div class="form-group text-right">*/
/* 						<button class="btn btn-lg" type="submit" id="btnLogin" name="btnLogin">*/
/* 							<i class="fa fa-sign-in"></i> Entrar*/
/* 						</button>*/
/* 						*/
/* 						<button class="btn btn-lg" type="reset" id="btnLimpar" name="btnLogin">*/
/* 							<i class="fa fa-eraser"></i> Limpar*/
/* 						</button>*/
/* 					</div>*/
/* 				</fieldset>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script>*/
/* $(document).ready(function(){*/
/* 	$("#login_dv").animateCss('fadeInDown');*/
/* });*/
/* </script>*/
/* {% endblock %}*/
/* */
