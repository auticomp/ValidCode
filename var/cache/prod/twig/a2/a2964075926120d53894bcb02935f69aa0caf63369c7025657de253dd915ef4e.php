<?php

/* ::base.html.twig */
class __TwigTemplate_4f968a447c9784dfa6c35637f5e1bcdf048c63da6ba52a126514243598d3d476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <meta name=\"description\" content=\"\">
\t    <meta name=\"author\" content=\"\">
\t    
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
       
        
        <!-- Bootstrap  -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/vendor/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" />
        
        <!-- Bootswatch - cosmo  -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/vendor/bootswatch/dist/css/cosmo_bootstrap.css"), "html", null, true);
        echo "\" />
        
        <!-- Font-Awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/vendor/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" />
        
        <!-- MeetMenu -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/vendor/metisMenu/dist/metisMenu.min.css"), "html", null, true);
        echo "\" />
        
         
        
        <!-- Main -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/sb-admin-2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/timeline.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/validcode_main.css"), "html", null, true);
        echo "\" />
        
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
    </head>
    <body>
    \t<!-- #wrapper -->
    \t<div id=\"wrapper\">
    \t
\t    \t<!-- Nav -->
\t    \t<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
\t            <div class=\"navbar-header\">
\t                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t                    <span class=\"sr-only\">Toggle navigation</span>
\t                    <span class=\"icon-bar\"></span>
\t                    <span class=\"icon-bar\"></span>
\t                    <span class=\"icon-bar\"></span>
\t                </button>
\t                <a class=\"navbar-brand\" href=\"index.html\">SB Admin v2.0</a>
\t            </div>
\t            <!-- /.navbar-header -->
\t
\t            <ul class=\"nav navbar-top-links navbar-right\">
\t                <li class=\"dropdown\">
\t                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t                        <i class=\"fa fa-envelope fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
\t                    </a>
\t                    <ul class=\"dropdown-menu dropdown-messages\">
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <strong>John Smith</strong>
\t                                    <span class=\"pull-right text-muted\">
\t                                        <em>Yesterday</em>
\t                                    </span>
\t                                </div>
\t                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <strong>John Smith</strong>
\t                                    <span class=\"pull-right text-muted\">
\t                                        <em>Yesterday</em>
\t                                    </span>
\t                                </div>
\t                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <strong>John Smith</strong>
\t                                    <span class=\"pull-right text-muted\">
\t                                        <em>Yesterday</em>
\t                                    </span>
\t                                </div>
\t                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a class=\"text-center\" href=\"#\">
\t                                <strong>Read All Messages</strong>
\t                                <i class=\"fa fa-angle-right\"></i>
\t                            </a>
\t                        </li>
\t                    </ul>
\t                    <!-- /.dropdown-messages -->
\t                </li>
\t                <!-- /.dropdown -->
\t                <li class=\"dropdown\">
\t                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t                        <i class=\"fa fa-tasks fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
\t                    </a>
\t                    <ul class=\"dropdown-menu dropdown-tasks\">
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <p>
\t                                        <strong>Task 1</strong>
\t                                        <span class=\"pull-right text-muted\">40% Complete</span>
\t                                    </p>
\t                                    <div class=\"progress progress-striped active\">
\t                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
\t                                            <span class=\"sr-only\">40% Complete (success)</span>
\t                                        </div>
\t                                    </div>
\t                                </div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <p>
\t                                        <strong>Task 2</strong>
\t                                        <span class=\"pull-right text-muted\">20% Complete</span>
\t                                    </p>
\t                                    <div class=\"progress progress-striped active\">
\t                                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
\t                                            <span class=\"sr-only\">20% Complete</span>
\t                                        </div>
\t                                    </div>
\t                                </div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <p>
\t                                        <strong>Task 3</strong>
\t                                        <span class=\"pull-right text-muted\">60% Complete</span>
\t                                    </p>
\t                                    <div class=\"progress progress-striped active\">
\t                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
\t                                            <span class=\"sr-only\">60% Complete (warning)</span>
\t                                        </div>
\t                                    </div>
\t                                </div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <p>
\t                                        <strong>Task 4</strong>
\t                                        <span class=\"pull-right text-muted\">80% Complete</span>
\t                                    </p>
\t                                    <div class=\"progress progress-striped active\">
\t                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
\t                                            <span class=\"sr-only\">80% Complete (danger)</span>
\t                                        </div>
\t                                    </div>
\t                                </div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a class=\"text-center\" href=\"#\">
\t                                <strong>See All Tasks</strong>
\t                                <i class=\"fa fa-angle-right\"></i>
\t                            </a>
\t                        </li>
\t                    </ul>
\t                    <!-- /.dropdown-tasks -->
\t                </li>
\t                <!-- /.dropdown -->
\t                <li class=\"dropdown\">
\t                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t                        <i class=\"fa fa-bell fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
\t                    </a>
\t                    <ul class=\"dropdown-menu dropdown-alerts\">
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <i class=\"fa fa-comment fa-fw\"></i> New Comment
\t                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
\t                                </div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
\t                                    <span class=\"pull-right text-muted small\">12 minutes ago</span>
\t                                </div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
\t                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
\t                                </div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <i class=\"fa fa-tasks fa-fw\"></i> New Task
\t                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
\t                                </div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a href=\"#\">
\t                                <div>
\t                                    <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
\t                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
\t                                </div>
\t                            </a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li>
\t                            <a class=\"text-center\" href=\"#\">
\t                                <strong>See All Alerts</strong>
\t                                <i class=\"fa fa-angle-right\"></i>
\t                            </a>
\t                        </li>
\t                    </ul>
\t                    <!-- /.dropdown-alerts -->
\t                </li>
\t                <!-- /.dropdown -->
\t                <li class=\"dropdown\">
\t                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t                        <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
\t                    </a>
\t                    <ul class=\"dropdown-menu dropdown-user\">
\t                        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
\t                        </li>
\t                        <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
\t                        </li>
\t                        <li class=\"divider\"></li>
\t                        <li><a href=\"login.html\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
\t                        </li>
\t                    </ul>
\t                    <!-- /.dropdown-user -->
\t                </li>
\t                <!-- /.dropdown -->
\t            </ul>
\t            <!-- /.navbar-top-links -->
\t
\t            <div class=\"navbar-default sidebar\" role=\"navigation\">
\t                <div class=\"sidebar-nav navbar-collapse\">
\t                    <ul class=\"nav\" id=\"side-menu\">
\t                        <li class=\"sidebar-search\">
\t                            <div class=\"input-group custom-search-form\">
\t                                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
\t                                <span class=\"input-group-btn\">
\t                                <button class=\"btn btn-default\" type=\"button\">
\t                                    <i class=\"fa fa-search\"></i>
\t                                </button>
\t                            </span>
\t                            </div>
\t                            <!-- /input-group -->
\t                        </li>
\t                        <li>
\t                            <a href=\"index.html\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
\t                        </li>
\t                        <li>
\t                            <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Charts<span class=\"fa arrow\"></span></a>
\t                            <ul class=\"nav nav-second-level\">
\t                                <li>
\t                                    <a href=\"flot.html\">Flot Charts</a>
\t                                </li>
\t                                <li>
\t                                    <a href=\"morris.html\">Morris.js Charts</a>
\t                                </li>
\t                            </ul>
\t                            <!-- /.nav-second-level -->
\t                        </li>
\t                        <li>
\t                            <a href=\"tables.html\"><i class=\"fa fa-table fa-fw\"></i> Tables</a>
\t                        </li>
\t                        <li>
\t                            <a href=\"forms.html\"><i class=\"fa fa-edit fa-fw\"></i> Forms</a>
\t                        </li>
\t                        <li>
\t                            <a href=\"#\"><i class=\"fa fa-wrench fa-fw\"></i> UI Elements<span class=\"fa arrow\"></span></a>
\t                            <ul class=\"nav nav-second-level\">
\t                                <li>
\t                                    <a href=\"panels-wells.html\">Panels and Wells</a>
\t                                </li>
\t                                <li>
\t                                    <a href=\"buttons.html\">Buttons</a>
\t                                </li>
\t                                <li>
\t                                    <a href=\"notifications.html\">Notifications</a>
\t                                </li>
\t                                <li>
\t                                    <a href=\"typography.html\">Typography</a>
\t                                </li>
\t                                <li>
\t                                    <a href=\"icons.html\"> Icons</a>
\t                                </li>
\t                                <li>
\t                                    <a href=\"grid.html\">Grid</a>
\t                                </li>
\t                            </ul>
\t                            <!-- /.nav-second-level -->
\t                        </li>
\t                        <li>
\t                            <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Multi-Level Dropdown<span class=\"fa arrow\"></span></a>
\t                            <ul class=\"nav nav-second-level\">
\t                                <li>
\t                                    <a href=\"#\">Second Level Item</a>
\t                                </li>
\t                                <li>
\t                                    <a href=\"#\">Second Level Item</a>
\t                                </li>
\t                                <li>
\t                                    <a href=\"#\">Third Level <span class=\"fa arrow\"></span></a>
\t                                    <ul class=\"nav nav-third-level\">
\t                                        <li>
\t                                            <a href=\"#\">Third Level Item</a>
\t                                        </li>
\t                                        <li>
\t                                            <a href=\"#\">Third Level Item</a>
\t                                        </li>
\t                                        <li>
\t                                            <a href=\"#\">Third Level Item</a>
\t                                        </li>
\t                                        <li>
\t                                            <a href=\"#\">Third Level Item</a>
\t                                        </li>
\t                                    </ul>
\t                                    <!-- /.nav-third-level -->
\t                                </li>
\t                            </ul>
\t                            <!-- /.nav-second-level -->
\t                        </li>
\t                        <li>
\t                            <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Sample Pages<span class=\"fa arrow\"></span></a>
\t                            <ul class=\"nav nav-second-level\">
\t                                <li>
\t                                    <a href=\"blank.html\">Blank Page</a>
\t                                </li>
\t                                <li>
\t                                    <a href=\"login.html\">Login Page</a>
\t                                </li>
\t                            </ul>
\t                            <!-- /.nav-second-level -->
\t                        </li>
\t                    </ul>
\t                </div>
\t                <!-- /.sidebar-collapse -->
\t            </div>
\t            <!-- /.navbar-static-side -->
\t        </nav>
\t    \t<!-- nav //-->
\t    \t<!-- Page Content -->
        <div id=\"page-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                \t
                \t";
        // line 378
        $this->displayBlock('body', $context, $blocks);
        // line 379
        echo "                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
\t    \t
\t    \t
    \t</div>
    \t<!-- /#wrapper -->
        
         <!-- Javascript -->
        <script type=\"text/javascript\" type=\"text/javascript\" src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery/dist/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" type=\"text/javascript\" src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/vendor/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" type=\"text/javascript\" src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/vendor/metisMenu/dist/metisMenu.js"), "html", null, true);
        echo "\"></script>
        
        <!-- JS Site -->
        <script type=\"text/javascript\" type=\"text/javascript\" src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 399
        $this->displayBlock('javascripts', $context, $blocks);
        // line 400
        echo "    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 378
    public function block_body($context, array $blocks = array())
    {
    }

    // line 399
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 399,  487 => 378,  482 => 33,  476 => 10,  470 => 400,  468 => 399,  463 => 397,  457 => 394,  453 => 393,  449 => 392,  434 => 379,  432 => 378,  86 => 35,  83 => 34,  81 => 33,  76 => 31,  72 => 30,  68 => 29,  60 => 24,  54 => 21,  48 => 18,  42 => 15,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/* 	    <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 	    <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	    <meta name="description" content="">*/
/* 	    <meta name="author" content="">*/
/* 	    */
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         */
/*        */
/*         */
/*         <!-- Bootstrap  -->*/
/*         <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/dist/css/bootstrap.css') }}" />*/
/*         */
/*         <!-- Bootswatch - cosmo  -->*/
/*         <link rel="stylesheet" href="{{ asset('public/vendor/bootswatch/dist/css/cosmo_bootstrap.css') }}" />*/
/*         */
/*         <!-- Font-Awesome -->*/
/*         <link rel="stylesheet" href="{{ asset('public/vendor/font-awesome/css/font-awesome.css') }}" />*/
/*         */
/*         <!-- MeetMenu -->*/
/*         <link rel="stylesheet" href="{{ asset('public/vendor/metisMenu/dist/metisMenu.min.css') }}" />*/
/*         */
/*          */
/*         */
/*         <!-- Main -->*/
/*         <link rel="stylesheet" href="{{ asset('public/css/sb-admin-2.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('public/css/timeline.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('public/css/validcode_main.css') }}" />*/
/*         */
/*         {% block stylesheets %}{% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         */
/*     </head>*/
/*     <body>*/
/*     	<!-- #wrapper -->*/
/*     	<div id="wrapper">*/
/*     	*/
/* 	    	<!-- Nav -->*/
/* 	    	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/* 	            <div class="navbar-header">*/
/* 	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/* 	                    <span class="sr-only">Toggle navigation</span>*/
/* 	                    <span class="icon-bar"></span>*/
/* 	                    <span class="icon-bar"></span>*/
/* 	                    <span class="icon-bar"></span>*/
/* 	                </button>*/
/* 	                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>*/
/* 	            </div>*/
/* 	            <!-- /.navbar-header -->*/
/* 	*/
/* 	            <ul class="nav navbar-top-links navbar-right">*/
/* 	                <li class="dropdown">*/
/* 	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/* 	                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/* 	                    </a>*/
/* 	                    <ul class="dropdown-menu dropdown-messages">*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <strong>John Smith</strong>*/
/* 	                                    <span class="pull-right text-muted">*/
/* 	                                        <em>Yesterday</em>*/
/* 	                                    </span>*/
/* 	                                </div>*/
/* 	                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <strong>John Smith</strong>*/
/* 	                                    <span class="pull-right text-muted">*/
/* 	                                        <em>Yesterday</em>*/
/* 	                                    </span>*/
/* 	                                </div>*/
/* 	                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <strong>John Smith</strong>*/
/* 	                                    <span class="pull-right text-muted">*/
/* 	                                        <em>Yesterday</em>*/
/* 	                                    </span>*/
/* 	                                </div>*/
/* 	                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a class="text-center" href="#">*/
/* 	                                <strong>Read All Messages</strong>*/
/* 	                                <i class="fa fa-angle-right"></i>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                    </ul>*/
/* 	                    <!-- /.dropdown-messages -->*/
/* 	                </li>*/
/* 	                <!-- /.dropdown -->*/
/* 	                <li class="dropdown">*/
/* 	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/* 	                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/* 	                    </a>*/
/* 	                    <ul class="dropdown-menu dropdown-tasks">*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <p>*/
/* 	                                        <strong>Task 1</strong>*/
/* 	                                        <span class="pull-right text-muted">40% Complete</span>*/
/* 	                                    </p>*/
/* 	                                    <div class="progress progress-striped active">*/
/* 	                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">*/
/* 	                                            <span class="sr-only">40% Complete (success)</span>*/
/* 	                                        </div>*/
/* 	                                    </div>*/
/* 	                                </div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <p>*/
/* 	                                        <strong>Task 2</strong>*/
/* 	                                        <span class="pull-right text-muted">20% Complete</span>*/
/* 	                                    </p>*/
/* 	                                    <div class="progress progress-striped active">*/
/* 	                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">*/
/* 	                                            <span class="sr-only">20% Complete</span>*/
/* 	                                        </div>*/
/* 	                                    </div>*/
/* 	                                </div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <p>*/
/* 	                                        <strong>Task 3</strong>*/
/* 	                                        <span class="pull-right text-muted">60% Complete</span>*/
/* 	                                    </p>*/
/* 	                                    <div class="progress progress-striped active">*/
/* 	                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">*/
/* 	                                            <span class="sr-only">60% Complete (warning)</span>*/
/* 	                                        </div>*/
/* 	                                    </div>*/
/* 	                                </div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <p>*/
/* 	                                        <strong>Task 4</strong>*/
/* 	                                        <span class="pull-right text-muted">80% Complete</span>*/
/* 	                                    </p>*/
/* 	                                    <div class="progress progress-striped active">*/
/* 	                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">*/
/* 	                                            <span class="sr-only">80% Complete (danger)</span>*/
/* 	                                        </div>*/
/* 	                                    </div>*/
/* 	                                </div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a class="text-center" href="#">*/
/* 	                                <strong>See All Tasks</strong>*/
/* 	                                <i class="fa fa-angle-right"></i>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                    </ul>*/
/* 	                    <!-- /.dropdown-tasks -->*/
/* 	                </li>*/
/* 	                <!-- /.dropdown -->*/
/* 	                <li class="dropdown">*/
/* 	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/* 	                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/* 	                    </a>*/
/* 	                    <ul class="dropdown-menu dropdown-alerts">*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <i class="fa fa-comment fa-fw"></i> New Comment*/
/* 	                                    <span class="pull-right text-muted small">4 minutes ago</span>*/
/* 	                                </div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers*/
/* 	                                    <span class="pull-right text-muted small">12 minutes ago</span>*/
/* 	                                </div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <i class="fa fa-envelope fa-fw"></i> Message Sent*/
/* 	                                    <span class="pull-right text-muted small">4 minutes ago</span>*/
/* 	                                </div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <i class="fa fa-tasks fa-fw"></i> New Task*/
/* 	                                    <span class="pull-right text-muted small">4 minutes ago</span>*/
/* 	                                </div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a href="#">*/
/* 	                                <div>*/
/* 	                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted*/
/* 	                                    <span class="pull-right text-muted small">4 minutes ago</span>*/
/* 	                                </div>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li>*/
/* 	                            <a class="text-center" href="#">*/
/* 	                                <strong>See All Alerts</strong>*/
/* 	                                <i class="fa fa-angle-right"></i>*/
/* 	                            </a>*/
/* 	                        </li>*/
/* 	                    </ul>*/
/* 	                    <!-- /.dropdown-alerts -->*/
/* 	                </li>*/
/* 	                <!-- /.dropdown -->*/
/* 	                <li class="dropdown">*/
/* 	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/* 	                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/* 	                    </a>*/
/* 	                    <ul class="dropdown-menu dropdown-user">*/
/* 	                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>*/
/* 	                        </li>*/
/* 	                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>*/
/* 	                        </li>*/
/* 	                        <li class="divider"></li>*/
/* 	                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>*/
/* 	                        </li>*/
/* 	                    </ul>*/
/* 	                    <!-- /.dropdown-user -->*/
/* 	                </li>*/
/* 	                <!-- /.dropdown -->*/
/* 	            </ul>*/
/* 	            <!-- /.navbar-top-links -->*/
/* 	*/
/* 	            <div class="navbar-default sidebar" role="navigation">*/
/* 	                <div class="sidebar-nav navbar-collapse">*/
/* 	                    <ul class="nav" id="side-menu">*/
/* 	                        <li class="sidebar-search">*/
/* 	                            <div class="input-group custom-search-form">*/
/* 	                                <input type="text" class="form-control" placeholder="Search...">*/
/* 	                                <span class="input-group-btn">*/
/* 	                                <button class="btn btn-default" type="button">*/
/* 	                                    <i class="fa fa-search"></i>*/
/* 	                                </button>*/
/* 	                            </span>*/
/* 	                            </div>*/
/* 	                            <!-- /input-group -->*/
/* 	                        </li>*/
/* 	                        <li>*/
/* 	                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>*/
/* 	                        </li>*/
/* 	                        <li>*/
/* 	                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>*/
/* 	                            <ul class="nav nav-second-level">*/
/* 	                                <li>*/
/* 	                                    <a href="flot.html">Flot Charts</a>*/
/* 	                                </li>*/
/* 	                                <li>*/
/* 	                                    <a href="morris.html">Morris.js Charts</a>*/
/* 	                                </li>*/
/* 	                            </ul>*/
/* 	                            <!-- /.nav-second-level -->*/
/* 	                        </li>*/
/* 	                        <li>*/
/* 	                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>*/
/* 	                        </li>*/
/* 	                        <li>*/
/* 	                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>*/
/* 	                        </li>*/
/* 	                        <li>*/
/* 	                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>*/
/* 	                            <ul class="nav nav-second-level">*/
/* 	                                <li>*/
/* 	                                    <a href="panels-wells.html">Panels and Wells</a>*/
/* 	                                </li>*/
/* 	                                <li>*/
/* 	                                    <a href="buttons.html">Buttons</a>*/
/* 	                                </li>*/
/* 	                                <li>*/
/* 	                                    <a href="notifications.html">Notifications</a>*/
/* 	                                </li>*/
/* 	                                <li>*/
/* 	                                    <a href="typography.html">Typography</a>*/
/* 	                                </li>*/
/* 	                                <li>*/
/* 	                                    <a href="icons.html"> Icons</a>*/
/* 	                                </li>*/
/* 	                                <li>*/
/* 	                                    <a href="grid.html">Grid</a>*/
/* 	                                </li>*/
/* 	                            </ul>*/
/* 	                            <!-- /.nav-second-level -->*/
/* 	                        </li>*/
/* 	                        <li>*/
/* 	                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>*/
/* 	                            <ul class="nav nav-second-level">*/
/* 	                                <li>*/
/* 	                                    <a href="#">Second Level Item</a>*/
/* 	                                </li>*/
/* 	                                <li>*/
/* 	                                    <a href="#">Second Level Item</a>*/
/* 	                                </li>*/
/* 	                                <li>*/
/* 	                                    <a href="#">Third Level <span class="fa arrow"></span></a>*/
/* 	                                    <ul class="nav nav-third-level">*/
/* 	                                        <li>*/
/* 	                                            <a href="#">Third Level Item</a>*/
/* 	                                        </li>*/
/* 	                                        <li>*/
/* 	                                            <a href="#">Third Level Item</a>*/
/* 	                                        </li>*/
/* 	                                        <li>*/
/* 	                                            <a href="#">Third Level Item</a>*/
/* 	                                        </li>*/
/* 	                                        <li>*/
/* 	                                            <a href="#">Third Level Item</a>*/
/* 	                                        </li>*/
/* 	                                    </ul>*/
/* 	                                    <!-- /.nav-third-level -->*/
/* 	                                </li>*/
/* 	                            </ul>*/
/* 	                            <!-- /.nav-second-level -->*/
/* 	                        </li>*/
/* 	                        <li>*/
/* 	                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>*/
/* 	                            <ul class="nav nav-second-level">*/
/* 	                                <li>*/
/* 	                                    <a href="blank.html">Blank Page</a>*/
/* 	                                </li>*/
/* 	                                <li>*/
/* 	                                    <a href="login.html">Login Page</a>*/
/* 	                                </li>*/
/* 	                            </ul>*/
/* 	                            <!-- /.nav-second-level -->*/
/* 	                        </li>*/
/* 	                    </ul>*/
/* 	                </div>*/
/* 	                <!-- /.sidebar-collapse -->*/
/* 	            </div>*/
/* 	            <!-- /.navbar-static-side -->*/
/* 	        </nav>*/
/* 	    	<!-- nav //-->*/
/* 	    	<!-- Page Content -->*/
/*         <div id="page-wrapper">*/
/*             <div class="container-fluid">*/
/*                 <div class="row">*/
/*                 	*/
/*                 	{% block body %}{% endblock %}*/
/*                     */
/*                 </div>*/
/*                 <!-- /.row -->*/
/*             </div>*/
/*             <!-- /.container-fluid -->*/
/*         </div>*/
/*         <!-- /#page-wrapper -->*/
/* 	    	*/
/* 	    	*/
/*     	</div>*/
/*     	<!-- /#wrapper -->*/
/*         */
/*          <!-- Javascript -->*/
/*         <script type="text/javascript" type="text/javascript" src="{{ asset('public/js/jquery/dist/jquery.js') }}"></script>*/
/*         <script type="text/javascript" type="text/javascript" src="{{ asset('public/vendor/bootstrap/dist/js/bootstrap.js') }}"></script>*/
/*         <script type="text/javascript" type="text/javascript" src="{{ asset('public/vendor/metisMenu/dist/metisMenu.js') }}"></script>*/
/*         */
/*         <!-- JS Site -->*/
/*         <script type="text/javascript" type="text/javascript" src="{{ asset('public/js/sb-admin-2.js') }}"></script>*/
/*         */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
