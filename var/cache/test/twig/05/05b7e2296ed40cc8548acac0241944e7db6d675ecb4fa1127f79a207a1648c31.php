<?php

/* gentelella/index3.html.twig */
class __TwigTemplate_0d4dba83175e1bd36a59602832d09444e342478e8564eb517e5559858f5bb526 extends Twig_Template
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
        $__internal_464a1143f11de02c3f633df934a72fa25f17f4da3d52ea41ab4e9010e39619a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464a1143f11de02c3f633df934a72fa25f17f4da3d52ea41ab4e9010e39619a7->enter($__internal_464a1143f11de02c3f633df934a72fa25f17f4da3d52ea41ab4e9010e39619a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gentelella/index3.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-daterangepicker -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- Custom Theme Style -->
    <link href=\"";
        // line 25
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
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 42
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
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\">Dashboard</a></li>
                      <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index2"));
        echo "\">Dashboard2</a></li>
                      <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index3"));
        echo "\">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form"));
        echo "\">General Form</a></li>
                      <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_advanced"));
        echo "\">Advanced Components</a></li>
                      <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_validation"));
        echo "\">Form Validation</a></li>
                      <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_wizards"));
        echo "\">Form Wizard</a></li>
                      <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_upload"));
        echo "\">Form Upload</a></li>
                      <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_buttons"));
        echo "\">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "general_elements"));
        echo "\">General Elements</a></li>
                      <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "media_gallery"));
        echo "\">Media Gallery</a></li>
                      <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "typography"));
        echo "\">Typography</a></li>
                      <li><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "icons"));
        echo "\">Icons</a></li>
                      <li><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "glyphicons"));
        echo "\">Glyphicons</a></li>
                      <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "widgets"));
        echo "\">Widgets</a></li>
                      <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "invoice"));
        echo "\">Invoice</a></li>
                      <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "inbox"));
        echo "\">Inbox</a></li>
                      <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "calendar"));
        echo "\">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables"));
        echo "\">Tables</a></li>
                      <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables_dynamic"));
        echo "\">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs"));
        echo "\">Chart JS</a></li>
                      <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs2"));
        echo "\">Chart JS2</a></li>
                      <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "morisjs"));
        echo "\">Moris JS</a></li>
                      <li><a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "echarts"));
        echo "\">ECharts</a></li>
                      <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "other_charts"));
        echo "\">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "fixed_sidebar"));
        echo "\">Fixed Sidebar</a></li>
                      <li><a href=\"";
        // line 106
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
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "e_commerce"));
        echo "\">E-commerce</a></li>
                      <li><a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "projects"));
        echo "\">Projects</a></li>
                      <li><a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "project_detail"));
        echo "\">Project Detail</a></li>
                      <li><a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "contacts"));
        echo "\">Contacts</a></li>
                      <li><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "profile"));
        echo "\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_403"));
        echo "\">403 Error</a></li>
                      <li><a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_404"));
        echo "\">404 Error</a></li>
                      <li><a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_500"));
        echo "\">500 Error</a></li>
                      <li><a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "plain_page"));
        echo "\">Plain Page</a></li>
                      <li><a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "login"));
        echo "\">Login Page</a></li>
                      <li><a href=\"";
        // line 130
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
        // line 138
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
        // line 168
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
        // line 188
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
        // line 200
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
        // line 212
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
        // line 224
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
        // line 236
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
        // line 248
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
            <div class=\"row top_tiles\" style=\"margin: 10px 0;\">
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class=\"sparkline_one\" style=\"height: 160px;\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Total Revenue</span>
                <h2>\$ 231,809</h2>
                <span class=\"sparkline_one\" style=\"height: 160px;\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class=\"sparkline_three\" style=\"height: 160px;\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class=\"sparkline_one\" style=\"height: 160px;\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
            </div>
            <br />


            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph x_panel\">
                  <div class=\"row x_title\">
                    <div class=\"col-md-6\">
                      <h3>Network Activities <small>Graph title sub-title</small></h3>
                    </div>
                    <div class=\"col-md-6\">
                      <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc\">
                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                        <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                      </div>
                    </div>
                  </div>
                  <div class=\"x_content\">
                    <div class=\"demo-container\" style=\"height:250px\">
                      <div id=\"chart_plot_03\" class=\"demo-placeholder\"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class=\"row\">
              <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"x_panel fixed_height_320\">
                  <div class=\"x_title\">
                    <h2>App Devices <small>Sessions</small></h2>
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
                    <h4>App Versions</h4>
                    <div class=\"widget_summary\">
                      <div class=\"w_left w_25\">
                        <span>1.5.2</span>
                      </div>
                      <div class=\"w_center w_55\">
                        <div class=\"progress\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 66%;\">
                            <span class=\"sr-only\">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"w_right w_20\">
                        <span>123k</span>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"widget_summary\">
                      <div class=\"w_left w_25\">
                        <span>1.5.3</span>
                      </div>
                      <div class=\"w_center w_55\">
                        <div class=\"progress\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\">
                            <span class=\"sr-only\">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"w_right w_20\">
                        <span>53k</span>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"widget_summary\">
                      <div class=\"w_left w_25\">
                        <span>1.5.4</span>
                      </div>
                      <div class=\"w_center w_55\">
                        <div class=\"progress\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 25%;\">
                            <span class=\"sr-only\">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"w_right w_20\">
                        <span>23k</span>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"widget_summary\">
                      <div class=\"w_left w_25\">
                        <span>1.5.5</span>
                      </div>
                      <div class=\"w_center w_55\">
                        <div class=\"progress\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 5%;\">
                            <span class=\"sr-only\">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"w_right w_20\">
                        <span>3k</span>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"widget_summary\">
                      <div class=\"w_left w_25\">
                        <span>0.1.5.6</span>
                      </div>
                      <div class=\"w_center w_55\">
                        <div class=\"progress\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%;\">
                            <span class=\"sr-only\">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"w_right w_20\">
                        <span>1k</span>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>

                  </div>
                </div>
              </div>

              <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"x_panel fixed_height_320\">
                  <div class=\"x_title\">
                    <h2>Daily users <small>Sessions</small></h2>
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
                  <table class=\"\" style=\"width:100%\">
                    <tr>
                      <th style=\"width:37%;\">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                          <p class=\"\">Device</p>
                        </div>
                        <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                          <p class=\"\">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id=\"canvas1\" height=\"140\" width=\"140\" style=\"margin: 15px 10px 10px 0\"></canvas>
                      </td>
                      <td>
                        <table class=\"tile_info\">
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square blue\"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square green\"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square purple\"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square aero\"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square red\"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  </div>
                </div>
              </div>

              <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"x_panel fixed_height_320\">
                  <div class=\"x_title\">
                    <h2>Profile Settings <small>Sessions</small></h2>
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
                    <div class=\"dashboard-widget-content\">
                      <ul class=\"quick-list\">
                        <li><i class=\"fa fa-line-chart\"></i><a href=\"#\">Achievements</a></li>
                        <li><i class=\"fa fa-thumbs-up\"></i><a href=\"#\">Favorites</a></li>
                        <li><i class=\"fa fa-calendar-o\"></i><a href=\"#\">Activities</a></li>
                        <li><i class=\"fa fa-cog\"></i><a href=\"#\">Settings</a></li>
                        <li><i class=\"fa fa-area-chart\"></i><a href=\"#\">Logout</a></li>
                      </ul>

                      <div class=\"sidebar-widget\">
                        <h4>Profile Completion</h4>
                        <canvas width=\"150\" height=\"80\" id=\"chart_gauge_01\" class=\"\" style=\"width: 160px; height: 100px;\"></canvas>
                        <div class=\"goal-wrapper\">
                          <span id=\"gauge-text\" class=\"gauge-value gauge-chart pull-left\">0</span>
                          <span class=\"gauge-value pull-left\">%</span>
                          <span id=\"goal-text\" class=\"goal-value pull-right\">100%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class=\"col-md-4 col-sm-6 col-xs-12 widget_tally_box\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>User Uptake</h2>
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

                    <div id=\"graph_bar\" style=\"width:100%; height:200px;\"></div>

                    <div class=\"col-xs-12 bg-white progress_summary\">

                      <div class=\"row\">
                        <div class=\"progress_title\">
                          <span class=\"left\">Escudor Wireless 1.0</span>
                          <span class=\"right\">This sis</span>
                          <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"col-xs-2\">
                          <span>SSD</span>
                        </div>
                        <div class=\"col-xs-8\">
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"89\"></div>
                          </div>
                        </div>
                        <div class=\"col-xs-2 more_info\">
                          <span>89%</span>
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"progress_title\">
                          <span class=\"left\">Mobile Access</span>
                          <span class=\"right\">Smart Phone</span>
                          <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"col-xs-2\">
                          <span>App</span>
                        </div>
                        <div class=\"col-xs-8\">
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"79\"></div>
                          </div>
                        </div>
                        <div class=\"col-xs-2 more_info\">
                          <span>79%</span>
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"progress_title\">
                          <span class=\"left\">WAN access users</span>
                          <span class=\"right\">Total 69%</span>
                          <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"col-xs-2\">
                          <span>Usr</span>
                        </div>
                        <div class=\"col-xs-8\">
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"69\"></div>
                          </div>
                        </div>
                        <div class=\"col-xs-2 more_info\">
                          <span>69%</span>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <!-- start of weather widget -->
              <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Today's Weather <small>Sessions</small></h2>
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
                      <div class=\"col-sm-12\">
                        <div class=\"temperature\"><b>Monday</b>, 07:30 AM
                          <span>F</span>
                          <span><b>C</b>
                                          </span>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-sm-4\">
                        <div class=\"weather-icon\">
                          <span>
                                              <canvas height=\"84\" width=\"84\" id=\"partly-cloudy-day\"></canvas>
                                          </span>

                        </div>
                      </div>
                      <div class=\"col-sm-8\">
                        <div class=\"weather-text\">
                          <h2>Texas
                                              <br><i>Partly Cloudy Day</i>
                                          </h2>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-sm-12\">
                      <div class=\"weather-text pull-right\">
                        <h3 class=\"degrees\">23</h3>
                      </div>
                    </div>
                    <div class=\"clearfix\"></div>


                    <div class=\"row weather-days\">
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Mon</h2>
                          <h3 class=\"degrees\">25</h3>
                          <span>
                                                  <canvas id=\"clear-day\" width=\"32\" height=\"32\">
                                                  </canvas>

                                          </span>
                          <h5>15
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Tue</h2>
                          <h3 class=\"degrees\">25</h3>
                          <canvas height=\"32\" width=\"32\" id=\"rain\"></canvas>
                          <h5>12
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Wed</h2>
                          <h3 class=\"degrees\">27</h3>
                          <canvas height=\"32\" width=\"32\" id=\"snow\"></canvas>
                          <h5>14
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Thu</h2>
                          <h3 class=\"degrees\">28</h3>
                          <canvas height=\"32\" width=\"32\" id=\"sleet\"></canvas>
                          <h5>15
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Fri</h2>
                          <h3 class=\"degrees\">28</h3>
                          <canvas height=\"32\" width=\"32\" id=\"wind\"></canvas>
                          <h5>11
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Sat</h2>
                          <h3 class=\"degrees\">26</h3>
                          <canvas height=\"32\" width=\"32\" id=\"cloudy\"></canvas>
                          <h5>10
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- end of weather widget -->

              <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"x_panel fixed_height_320\">
                  <div class=\"x_title\">
                    <h2>Incomes <small>Sessions</small></h2>
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
                    <div class=\"dashboard-widget-content\">
                      <ul class=\"quick-list\">
                        <li><i class=\"fa fa-bars\"></i><a href=\"#\">Subscription</a></li>
                        <li><i class=\"fa fa-bar-chart\"></i><a href=\"#\">Auto Renewal</a> </li>
                        <li><i class=\"fa fa-support\"></i><a href=\"#\">Help Desk</a> </li>
                        <li><i class=\"fa fa-heart\"></i><a href=\"#\">Donations</a> </li>
                      </ul>

                      <div class=\"sidebar-widget\">
                        <h4>Goal</h4>
                        <canvas width=\"150\" height=\"80\" id=\"chart_gauge_02\" class=\"\" style=\"width: 160px; height: 100px;\"></canvas>
                        <div class=\"goal-wrapper\">
                          <span class=\"gauge-value pull-left\">\$</span>
                          <span id=\"gauge-text2\" class=\"gauge-value pull-left\">3,200</span>
                          <span id=\"goal-text2\" class=\"goal-value pull-right\">\$5,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
        // line 849
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 851
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 853
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 855
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart.js -->
    <script src=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Sparklines -->
    <script src=\"";
        // line 859
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- morris.js -->
    <script src=\"";
        // line 861
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 862
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 864
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 866
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 868
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 870
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 871
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 872
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 873
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 874
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 876
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 877
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 878
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 880
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 882
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 886
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
        
        $__internal_464a1143f11de02c3f633df934a72fa25f17f4da3d52ea41ab4e9010e39619a7->leave($__internal_464a1143f11de02c3f633df934a72fa25f17f4da3d52ea41ab4e9010e39619a7_prof);

    }

    public function getTemplateName()
    {
        return "gentelella/index3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1137 => 886,  1131 => 883,  1127 => 882,  1122 => 880,  1117 => 878,  1113 => 877,  1109 => 876,  1104 => 874,  1100 => 873,  1096 => 872,  1092 => 871,  1088 => 870,  1083 => 868,  1078 => 866,  1073 => 864,  1068 => 862,  1064 => 861,  1059 => 859,  1054 => 857,  1049 => 855,  1044 => 853,  1039 => 851,  1034 => 849,  430 => 248,  415 => 236,  400 => 224,  385 => 212,  370 => 200,  355 => 188,  332 => 168,  299 => 138,  288 => 130,  284 => 129,  280 => 128,  276 => 127,  272 => 126,  268 => 125,  260 => 120,  256 => 119,  252 => 118,  248 => 117,  244 => 116,  231 => 106,  227 => 105,  219 => 100,  215 => 99,  211 => 98,  207 => 97,  203 => 96,  195 => 91,  191 => 90,  183 => 85,  179 => 84,  175 => 83,  171 => 82,  167 => 81,  163 => 80,  159 => 79,  155 => 78,  151 => 77,  143 => 72,  139 => 71,  135 => 70,  131 => 69,  127 => 68,  123 => 67,  115 => 62,  111 => 61,  107 => 60,  86 => 42,  75 => 34,  63 => 25,  57 => 22,  52 => 20,  47 => 18,  42 => 16,  37 => 14,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gentelella/index3.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/gentelella/index3.html.twig");
    }
}
