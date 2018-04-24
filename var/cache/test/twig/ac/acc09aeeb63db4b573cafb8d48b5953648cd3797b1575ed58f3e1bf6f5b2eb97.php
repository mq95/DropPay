<?php

/* gentelella/form.html.twig */
class __TwigTemplate_c55bb01cb55a01adf70f93220ade8a7b923d52dc040b95c305bcb5b81a9d1f7f extends Twig_Template
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
        $__internal_79e960fee73dcf884f5b66d8b1a44346c89da1ddcede3aafc3c9ed80da5ff159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e960fee73dcf884f5b66d8b1a44346c89da1ddcede3aafc3c9ed80da5ff159->enter($__internal_79e960fee73dcf884f5b66d8b1a44346c89da1ddcede3aafc3c9ed80da5ff159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gentelella/form.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t
    <title>Gentelella Alela! | </title>
<<<<<<< HEAD
=======


    <title>Gentelella Alela! | </title>

>>>>>>> refs/remotes/puikinsh/Development

    <!-- Bootstrap -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-wysiwyg -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/google-code-prettify/bin/prettify.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Select2 -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Switchery -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- starrr -->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/starrr/dist/starrr.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-daterangepicker -->
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>General</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\">Dashboard</a></li>
                      <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index2"));
        echo "\">Dashboard2</a></li>
                      <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index3"));
        echo "\">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form"));
        echo "\">General Form</a></li>
                      <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_advanced"));
        echo "\">Advanced Components</a></li>
                      <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_validation"));
        echo "\">Form Validation</a></li>
                      <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_wizards"));
        echo "\">Form Wizard</a></li>
                      <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_upload"));
        echo "\">Form Upload</a></li>
                      <li><a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_buttons"));
        echo "\">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "general_elements"));
        echo "\">General Elements</a></li>
                      <li><a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "media_gallery"));
        echo "\">Media Gallery</a></li>
                      <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "typography"));
        echo "\">Typography</a></li>
                      <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "icons"));
        echo "\">Icons</a></li>
                      <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "glyphicons"));
        echo "\">Glyphicons</a></li>
                      <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "widgets"));
        echo "\">Widgets</a></li>
                      <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "invoice"));
        echo "\">Invoice</a></li>
                      <li><a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "inbox"));
        echo "\">Inbox</a></li>
                      <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "calendar"));
        echo "\">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables"));
        echo "\">Tables</a></li>
                      <li><a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables_dynamic"));
        echo "\">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs"));
        echo "\">Chart JS</a></li>
                      <li><a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs2"));
        echo "\">Chart JS2</a></li>
                      <li><a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "morisjs"));
        echo "\">Moris JS</a></li>
                      <li><a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "echarts"));
        echo "\">ECharts</a></li>
                      <li><a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "other_charts"));
        echo "\">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "fixed_sidebar"));
        echo "\">Fixed Sidebar</a></li>
                      <li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "fixed_footer"));
        echo "\">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class=\"menu_section\">
                <h3>Live On</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "e_commerce"));
        echo "\">E-commerce</a></li>
                      <li><a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "projects"));
        echo "\">Projects</a></li>
                      <li><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "project_detail"));
        echo "\">Project Detail</a></li>
                      <li><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "contacts"));
        echo "\">Contacts</a></li>
                      <li><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "profile"));
        echo "\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_403"));
        echo "\">403 Error</a></li>
                      <li><a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_404"));
        echo "\">404 Error</a></li>
                      <li><a href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_500"));
        echo "\">500 Error</a></li>
                      <li><a href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "plain_page"));
        echo "\">Plain Page</a></li>
                      <li><a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "login"));
        echo "\">Login Page</a></li>
                      <li><a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "pricing_tables"));
        echo "\">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"#level1_1\">Level One</a>
                        <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                          <ul class=\"nav child_menu\">
                            <li class=\"sub_menu\"><a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "level2"));
        echo "\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_1\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_2\">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href=\"#level1_2\">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "login"));
        echo "\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>
              <a href=\"/\" style=\"margin-top: 10px;\" class=\"btn btn-success\">Back to the application</a>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"\">John Doe
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\"> Profile</a></li>
                    <li>
                      <a href=\"javascript:;\">
                        <span class=\"badge bg-red pull-right\">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href=\"javascript:;\">Help</a></li>
                    <li><a href=\"";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "login"));
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role=\"presentation\" class=\"dropdown\">
                  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-green\">6</span>
                  </a>
                  <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"text-center\">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class=\"fa fa-angle-right\"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Form Elements</h3>
              </div>

              <div class=\"title_right\">
                <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default\" type=\"button\">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                          <li><a href=\"#\">Settings 1</a>
                          </li>
                          <li><a href=\"#\">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <br />
                    <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\">

                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">First Name <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"first-name\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Last Name <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"last-name\" name=\"last-name\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Middle Name / Initial</label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input id=\"middle-name\" class=\"form-control col-md-7 col-xs-12\" type=\"text\" name=\"middle-name\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Gender</label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <div id=\"gender\" class=\"btn-group\" data-toggle=\"buttons\">
                            <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                              <input type=\"radio\" name=\"gender\" value=\"male\"> &nbsp; Male &nbsp;
                            </label>
                            <label class=\"btn btn-primary\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                              <input type=\"radio\" name=\"gender\" value=\"female\"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Date Of Birth <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input id=\"birthday\" class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"text\">
                        </div>
                      </div>
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                          <button class=\"btn btn-primary\" type=\"button\">Cancel</button>
\t\t\t\t\t\t  <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                          <li><a href=\"#\">Settings 1</a>
                          </li>
                          <li><a href=\"#\">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <br />
                    <form class=\"form-horizontal form-label-left input_mask\">

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess2\" placeholder=\"First Name\">
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"inputSuccess3\" placeholder=\"Last Name\">
                        <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess4\" placeholder=\"Email\">
                        <span class=\"fa fa-envelope form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"inputSuccess5\" placeholder=\"Phone\">
                        <span class=\"fa fa-phone form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Default Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" placeholder=\"Default Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Disabled Input </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Disabled Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Read-Only Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" readonly=\"readonly\" placeholder=\"Read-Only Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Date Of Birth <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"text\">
                        </div>
                      </div>
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-9 col-sm-9 col-xs-12 col-md-offset-3\">
                          <button type=\"button\" class=\"btn btn-primary\">Cancel</button>
\t\t\t\t\t\t   <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>

                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Star Rating</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                          <li><a href=\"#\">Settings 1</a>
                          </li>
                          <li><a href=\"#\">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <h4>Star Ratings<small> Hover and click on a star</small></h4>
                    <div>
                      <div class=\"starrr stars\"></div>
                      You gave a rating of <span class=\"stars-count\">0</span> star(s)
                    </div>

                    <p>Also you can give a default rating by adding attribute data-rating</p>
                    <div class=\"starrr stars-existing\" data-rating='4'></div>
                    You gave a rating of <span class=\"stars-count-existing\">4</span> star(s)
                  </div>
                </div>

                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Registration Form <small>Click to validate</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                          <li><a href=\"#\">Settings 1</a>
                          </li>
                          <li><a href=\"#\">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <!-- start form for validation -->
                    <form id=\"demo-form\" data-parsley-validate>
                      <label for=\"fullname\">Full Name * :</label>
                      <input type=\"text\" id=\"fullname\" class=\"form-control\" name=\"fullname\" required />

                      <label for=\"email\">Email * :</label>
                      <input type=\"email\" id=\"email\" class=\"form-control\" name=\"email\" data-parsley-trigger=\"change\" required />

                      <label>Gender *:</label>
                      <p>
                        M:
                        <input type=\"radio\" class=\"flat\" name=\"gender\" id=\"genderM\" value=\"M\" checked=\"\" required /> F:
                        <input type=\"radio\" class=\"flat\" name=\"gender\" id=\"genderF\" value=\"F\" />
                      </p>

                      <label>Hobbies (2 minimum):</label>
                      <p style=\"padding: 5px;\">
                        <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby1\" value=\"ski\" data-parsley-mincheck=\"2\" required class=\"flat\" /> Skiing
                        <br />

                        <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby2\" value=\"run\" class=\"flat\" /> Running
                        <br />

                        <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby3\" value=\"eat\" class=\"flat\" /> Eating
                        <br />

                        <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby4\" value=\"sleep\" class=\"flat\" /> Sleeping
                        <br />
                        <p>

                          <label for=\"heard\">Heard us by *:</label>
                          <select id=\"heard\" class=\"form-control\" required>
                            <option value=\"\">Choose..</option>
                            <option value=\"press\">Press</option>
                            <option value=\"net\">Internet</option>
                            <option value=\"mouth\">Word of mouth</option>
                          </select>

                          <label for=\"message\">Message (20 chars min, 100 max) :</label>
                          <textarea id=\"message\" required=\"required\" class=\"form-control\" name=\"message\" data-parsley-trigger=\"keyup\" data-parsley-minlength=\"20\" data-parsley-maxlength=\"100\" data-parsley-minlength-message=\"Come on! You need to enter at least a 20 caracters long comment..\"
                            data-parsley-validation-threshold=\"10\"></textarea>

                          <br/>
                          <span class=\"btn btn-primary\">Validate form</span>

                    </form>
                    <!-- end form for validations -->

                  </div>
                </div>


              </div>

              <div class=\"col-md-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Form Basic Elements <small>different form elements</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                          <li><a href=\"#\">Settings 1</a>
                          </li>
                          <li><a href=\"#\">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <br />
                    <form class=\"form-horizontal form-label-left\">

                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Default Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" placeholder=\"Default Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Disabled Input </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Disabled Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Read-Only Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" readonly=\"readonly\" placeholder=\"Read-Only Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Date Of Birth <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <textarea class=\"form-control\" rows=\"3\" placeholder='rows=\"3\"'></textarea>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Password</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"password\" class=\"form-control\" value=\"passwordonetwo\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">AutoComplete</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" name=\"country\" id=\"autocomplete-custom-append\" class=\"form-control col-md-10\"/>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Select</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <select class=\"form-control\">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Select Custom</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <select class=\"select2_single form-control\" tabindex=\"-1\">
                            <option></option>
                            <option value=\"AK\">Alaska</option>
                            <option value=\"HI\">Hawaii</option>
                            <option value=\"CA\">California</option>
                            <option value=\"NV\">Nevada</option>
                            <option value=\"OR\">Oregon</option>
                            <option value=\"WA\">Washington</option>
                            <option value=\"AZ\">Arizona</option>
                            <option value=\"CO\">Colorado</option>
                            <option value=\"ID\">Idaho</option>
                            <option value=\"MT\">Montana</option>
                            <option value=\"NE\">Nebraska</option>
                            <option value=\"NM\">New Mexico</option>
                            <option value=\"ND\">North Dakota</option>
                            <option value=\"UT\">Utah</option>
                            <option value=\"WY\">Wyoming</option>
                            <option value=\"AR\">Arkansas</option>
                            <option value=\"IL\">Illinois</option>
                            <option value=\"IA\">Iowa</option>
                            <option value=\"KS\">Kansas</option>
                            <option value=\"KY\">Kentucky</option>
                            <option value=\"LA\">Louisiana</option>
                            <option value=\"MN\">Minnesota</option>
                            <option value=\"MS\">Mississippi</option>
                            <option value=\"MO\">Missouri</option>
                            <option value=\"OK\">Oklahoma</option>
                            <option value=\"SD\">South Dakota</option>
                            <option value=\"TX\">Texas</option>
                          </select>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Select Grouped</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <select class=\"select2_group form-control\">
                            <optgroup label=\"Alaskan/Hawaiian Time Zone\">
                              <option value=\"AK\">Alaska</option>
                              <option value=\"HI\">Hawaii</option>
                            </optgroup>
                            <optgroup label=\"Pacific Time Zone\">
                              <option value=\"CA\">California</option>
                              <option value=\"NV\">Nevada</option>
                              <option value=\"OR\">Oregon</option>
                              <option value=\"WA\">Washington</option>
                            </optgroup>
                            <optgroup label=\"Mountain Time Zone\">
                              <option value=\"AZ\">Arizona</option>
                              <option value=\"CO\">Colorado</option>
                              <option value=\"ID\">Idaho</option>
                              <option value=\"MT\">Montana</option>
                              <option value=\"NE\">Nebraska</option>
                              <option value=\"NM\">New Mexico</option>
                              <option value=\"ND\">North Dakota</option>
                              <option value=\"UT\">Utah</option>
                              <option value=\"WY\">Wyoming</option>
                            </optgroup>
                            <optgroup label=\"Central Time Zone\">
                              <option value=\"AL\">Alabama</option>
                              <option value=\"AR\">Arkansas</option>
                              <option value=\"IL\">Illinois</option>
                              <option value=\"IA\">Iowa</option>
                              <option value=\"KS\">Kansas</option>
                              <option value=\"KY\">Kentucky</option>
                              <option value=\"LA\">Louisiana</option>
                              <option value=\"MN\">Minnesota</option>
                              <option value=\"MS\">Mississippi</option>
                              <option value=\"MO\">Missouri</option>
                              <option value=\"OK\">Oklahoma</option>
                              <option value=\"SD\">South Dakota</option>
                              <option value=\"TX\">Texas</option>
                              <option value=\"TN\">Tennessee</option>
                              <option value=\"WI\">Wisconsin</option>
                            </optgroup>
                            <optgroup label=\"Eastern Time Zone\">
                              <option value=\"CT\">Connecticut</option>
                              <option value=\"DE\">Delaware</option>
                              <option value=\"FL\">Florida</option>
                              <option value=\"GA\">Georgia</option>
                              <option value=\"IN\">Indiana</option>
                              <option value=\"ME\">Maine</option>
                              <option value=\"MD\">Maryland</option>
                              <option value=\"MA\">Massachusetts</option>
                              <option value=\"MI\">Michigan</option>
                              <option value=\"NH\">New Hampshire</option>
                              <option value=\"NJ\">New Jersey</option>
                              <option value=\"NY\">New York</option>
                              <option value=\"NC\">North Carolina</option>
                              <option value=\"OH\">Ohio</option>
                              <option value=\"PA\">Pennsylvania</option>
                              <option value=\"RI\">Rhode Island</option>
                              <option value=\"SC\">South Carolina</option>
                              <option value=\"VT\">Vermont</option>
                              <option value=\"VA\">Virginia</option>
                              <option value=\"WV\">West Virginia</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Select Multiple</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <select class=\"select2_multiple form-control\" multiple=\"multiple\">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                            <option>Option five</option>
                            <option>Option six</option>
                          </select>
                        </div>
                      </div>

                      <div class=\"control-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Input Tags</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input id=\"tags_1\" type=\"text\" class=\"tags form-control\" value=\"social, adverts, sales\" />
                          <div id=\"suggestions-container\" style=\"position: relative; float: left; width: 250px; margin: 10px;\"></div>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-md-3 col-sm-3 col-xs-12 control-label\">Checkboxes and radios
                          <br>
                          <small class=\"text-navy\">Normal Bootstrap elements</small>
                        </label>

                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" value=\"\"> Option one. select more than one options
                            </label>
                          </div>
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" value=\"\"> Option two. select more than one options
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" checked=\"\" value=\"option1\" id=\"optionsRadios1\" name=\"optionsRadios\"> Option one. only select one option
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" value=\"option2\" id=\"optionsRadios2\" name=\"optionsRadios\"> Option two. only select one option
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class=\"form-group\">
                        <label class=\"col-md-3 col-sm-3 col-xs-12 control-label\">Checkboxes and radios
                          <br>
                          <small class=\"text-navy\">Normal Bootstrap elements</small>
                        </label>

                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" class=\"flat\" checked=\"checked\"> Checked
                            </label>
                          </div>
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" class=\"flat\"> Unchecked
                            </label>
                          </div>
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" class=\"flat\" disabled=\"disabled\"> Disabled
                            </label>
                          </div>
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" class=\"flat\" disabled=\"disabled\" checked=\"checked\"> Disabled & checked
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" class=\"flat\" checked name=\"iCheck\"> Checked
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" class=\"flat\" name=\"iCheck\"> Unchecked
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" class=\"flat\" name=\"iCheck\" disabled=\"disabled\"> Disabled
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" class=\"flat\" name=\"iCheck3\" disabled=\"disabled\" checked> Disabled & Checked
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Switch</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <div class=\"\">
                            <label>
                              <input type=\"checkbox\" class=\"js-switch\" checked /> Checked
                            </label>
                          </div>
                          <div class=\"\">
                            <label>
                              <input type=\"checkbox\" class=\"js-switch\" /> Unchecked
                            </label>
                          </div>
                          <div class=\"\">
                            <label>
                              <input type=\"checkbox\" class=\"js-switch\" disabled=\"disabled\" /> Disabled
                            </label>
                          </div>
                          <div class=\"\">
                            <label>
                              <input type=\"checkbox\" class=\"js-switch\" disabled=\"disabled\" checked=\"checked\" /> Disabled Checked
                            </label>
                          </div>
                        </div>
                      </div>


                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-9 col-sm-9 col-xs-12 col-md-offset-3\">
                          <button type=\"button\" class=\"btn btn-primary\">Cancel</button>
                          <button type=\"reset\" class=\"btn btn-primary\">Reset</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>


              <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Form Buttons <small>Sessions</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                          <li><a href=\"#\">Settings 1</a>
                          </li>
                          <li><a href=\"#\">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <form class=\"form-horizontal form-label-left\">

                      <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">Button addons</label>

                        <div class=\"col-sm-9\">
                          <div class=\"input-group\">
                            <span class=\"input-group-btn\">
                                              <button type=\"button\" class=\"btn btn-primary\">Go!</button>
                                          </span>
                            <input type=\"text\" class=\"form-control\">
                          </div>
                          <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\">
                            <span class=\"input-group-btn\">
                                              <button type=\"button\" class=\"btn btn-primary\">Go!</button>
                                          </span>
                          </div>
                        </div>
                      </div>
                      <div class=\"divider-dashed\"></div>

                      <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">Button addons</label>

                        <div class=\"col-sm-9\">
                          <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" aria-label=\"Text input with dropdown button\">
                            <div class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">Action <span class=\"caret\"></span>
                              </button>
                              <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                                <li><a href=\"#\">Action</a>
                                </li>
                                <li><a href=\"#\">Another action</a>
                                </li>
                                <li><a href=\"#\">Something else here</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a>
                                </li>
                              </ul>
                            </div>
                            <!-- /btn-group -->
                          </div>
                          <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\">
                            <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-primary\">Go!</button>
                            </span>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Text areas<small>Sessions</small></h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Settings 1</a>
                        </li>
                        <li><a href=\"#\">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                    </li>
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                  <div id=\"alerts\"></div>
                  <div class=\"btn-toolbar editor\" data-role=\"editor-toolbar\" data-target=\"#editor-one\">
                    <div class=\"btn-group\">
                      <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" title=\"Font\"><i class=\"fa fa-font\"></i><b class=\"caret\"></b></a>
                      <ul class=\"dropdown-menu\">
                      </ul>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" title=\"Font Size\"><i class=\"fa fa-text-height\"></i>&nbsp;<b class=\"caret\"></b></a>
                      <ul class=\"dropdown-menu\">
                        <li>
                          <a data-edit=\"fontSize 5\">
                            <p style=\"font-size:17px\">Huge</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit=\"fontSize 3\">
                            <p style=\"font-size:14px\">Normal</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit=\"fontSize 1\">
                            <p style=\"font-size:11px\">Small</p>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn\" data-edit=\"bold\" title=\"Bold (Ctrl/Cmd+B)\"><i class=\"fa fa-bold\"></i></a>
                      <a class=\"btn\" data-edit=\"italic\" title=\"Italic (Ctrl/Cmd+I)\"><i class=\"fa fa-italic\"></i></a>
                      <a class=\"btn\" data-edit=\"strikethrough\" title=\"Strikethrough\"><i class=\"fa fa-strikethrough\"></i></a>
                      <a class=\"btn\" data-edit=\"underline\" title=\"Underline (Ctrl/Cmd+U)\"><i class=\"fa fa-underline\"></i></a>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn\" data-edit=\"insertunorderedlist\" title=\"Bullet list\"><i class=\"fa fa-list-ul\"></i></a>
                      <a class=\"btn\" data-edit=\"insertorderedlist\" title=\"Number list\"><i class=\"fa fa-list-ol\"></i></a>
                      <a class=\"btn\" data-edit=\"outdent\" title=\"Reduce indent (Shift+Tab)\"><i class=\"fa fa-dedent\"></i></a>
                      <a class=\"btn\" data-edit=\"indent\" title=\"Indent (Tab)\"><i class=\"fa fa-indent\"></i></a>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn\" data-edit=\"justifyleft\" title=\"Align Left (Ctrl/Cmd+L)\"><i class=\"fa fa-align-left\"></i></a>
                      <a class=\"btn\" data-edit=\"justifycenter\" title=\"Center (Ctrl/Cmd+E)\"><i class=\"fa fa-align-center\"></i></a>
                      <a class=\"btn\" data-edit=\"justifyright\" title=\"Align Right (Ctrl/Cmd+R)\"><i class=\"fa fa-align-right\"></i></a>
                      <a class=\"btn\" data-edit=\"justifyfull\" title=\"Justify (Ctrl/Cmd+J)\"><i class=\"fa fa-align-justify\"></i></a>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" title=\"Hyperlink\"><i class=\"fa fa-link\"></i></a>
                      <div class=\"dropdown-menu input-append\">
                        <input class=\"span2\" placeholder=\"URL\" type=\"text\" data-edit=\"createLink\" />
                        <button class=\"btn\" type=\"button\">Add</button>
                      </div>
                      <a class=\"btn\" data-edit=\"unlink\" title=\"Remove Hyperlink\"><i class=\"fa fa-cut\"></i></a>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn\" title=\"Insert picture (or just drag & drop)\" id=\"pictureBtn\"><i class=\"fa fa-picture-o\"></i></a>
                      <input type=\"file\" data-role=\"magic-overlay\" data-target=\"#pictureBtn\" data-edit=\"insertImage\" />
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn\" data-edit=\"undo\" title=\"Undo (Ctrl/Cmd+Z)\"><i class=\"fa fa-undo\"></i></a>
                      <a class=\"btn\" data-edit=\"redo\" title=\"Redo (Ctrl/Cmd+Y)\"><i class=\"fa fa-repeat\"></i></a>
                    </div>
                  </div>

                  <div id=\"editor-one\" class=\"editor-wrapper\"></div>

                  <textarea name=\"descr\" id=\"descr\" style=\"display:none;\"></textarea>
                  
                  <br />

                  <div class=\"ln_solid\"></div>

                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Resizable Text area</label>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                      <textarea class=\"resizable_textarea form-control\" placeholder=\"This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out...\"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"x_panel\">
              <div class=\"x_title\">
                <h2>Form Input Grid <small>form input </small></h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                  <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                  </li>
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                      <li><a href=\"#\">Settings 1</a>
                      </li>
                      <li><a href=\"#\">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                  </li>
                </ul>
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"x_content\">

                <div class=\"row\">

                  <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-12\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-6 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-6\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-6 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-6\" class=\"form-control\">
                  </div>


                  <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
                  </div>


                  <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
                  </div>


                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>


                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>
                </div>

              </div>
            </div>


            <div class=\"x_panel\">
              <div class=\"x_title\">
                <h2>Form Design <small>different form elements</small></h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                  <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                  </li>
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                      <li><a href=\"#\">Settings 1</a>
                      </li>
                      <li><a href=\"#\">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                  </li>
                </ul>
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"x_content\">
                <br />

                <h4>Horizontal labels</h4>
                <p class=\"font-gray-dark\">
                  Using the grid system you can control the position of the labels. The form example below has the <b>col-md-10</b> which sets the width to 10/12 and <b>center-margin</b> which centers it.
                </p>
                <form class=\"form-horizontal form-label-left\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3\" for=\"first-name\">First Name <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-7\">
                      <input type=\"text\" id=\"first-name2\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3\" for=\"last-name\">Last Name <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-7\">
                      <input type=\"text\" id=\"last-name2\" name=\"last-name\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                </form>


                <h4>Vertical labels</h4>
                <p class=\"font-gray-dark\">
                  For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.
                </p>
                <div class=\"col-md-8 center-margin\">
                  <form class=\"form-horizontal form-label-left\">
                    <div class=\"form-group\">
                      <label>Email address</label>
                      <input type=\"email\" class=\"form-control\" placeholder=\"Enter email\">
                    </div>
                    <div class=\"form-group\">
                      <label>Password</label>
                      <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                    </div>

                  </form>
                </div>

                <h4>Inline Form </h4>
                <p class=\"font-gray-dark\">
                  Add .form-inline to your form (which doesn't have to be a <form>) for left-aligned and inline-block controls.
                </p>
                <form class=\"form-inline\">
                  <div class=\"form-group\">
                    <label for=\"ex3\">Email address</label>
                    <input type=\"text\" id=\"ex3\" class=\"form-control\" placeholder=\" \">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"ex4\">Email address</label>
                    <input type=\"email\" id=\"ex4\" class=\"form-control\" placeholder=\" \">
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"> Remember me
                    </label>
                  </div>
                  <button type=\"submit\" class=\"btn btn-default\">Send invitation</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src=\"";
        // line 1340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 1342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 1344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 1346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 1348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 1350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 1352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=\"";
        // line 1355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"";
        // line 1359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <!-- Switchery -->
    <script src=\"";
        // line 1361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 1363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Parsley -->
    <script src=\"";
        // line 1365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Autosize -->
    <script src=\"";
        // line 1367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"";
        // line 1369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
    <!-- starrr -->
    <script src=\"";
        // line 1371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/starrr/dist/starrr.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 1373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>
\t
  </body>
</html>
";
        
        $__internal_79e960fee73dcf884f5b66d8b1a44346c89da1ddcede3aafc3c9ed80da5ff159->leave($__internal_79e960fee73dcf884f5b66d8b1a44346c89da1ddcede3aafc3c9ed80da5ff159_prof);

    }

    public function getTemplateName()
    {
        return "gentelella/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1624 => 1373,  1619 => 1371,  1614 => 1369,  1609 => 1367,  1604 => 1365,  1599 => 1363,  1594 => 1361,  1589 => 1359,  1584 => 1357,  1580 => 1356,  1576 => 1355,  1571 => 1353,  1567 => 1352,  1562 => 1350,  1557 => 1348,  1552 => 1346,  1547 => 1344,  1542 => 1342,  1537 => 1340,  457 => 263,  442 => 251,  427 => 239,  412 => 227,  397 => 215,  382 => 203,  359 => 183,  326 => 153,  315 => 145,  311 => 144,  307 => 143,  303 => 142,  299 => 141,  295 => 140,  287 => 135,  283 => 134,  279 => 133,  275 => 132,  271 => 131,  258 => 121,  254 => 120,  246 => 115,  242 => 114,  238 => 113,  234 => 112,  230 => 111,  222 => 106,  218 => 105,  210 => 100,  206 => 99,  202 => 98,  198 => 97,  194 => 96,  190 => 95,  186 => 94,  182 => 93,  178 => 92,  170 => 87,  166 => 86,  162 => 85,  158 => 84,  154 => 83,  150 => 82,  142 => 77,  138 => 76,  134 => 75,  113 => 57,  102 => 49,  90 => 40,  84 => 37,  79 => 35,  74 => 33,  69 => 31,  64 => 29,  59 => 27,  54 => 25,  49 => 23,  44 => 21,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gentelella/form.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/gentelella/form.html.twig");
    }
}
