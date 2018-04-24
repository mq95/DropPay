<?php

/* gentelella/index.html.twig */
class __TwigTemplate_8498e027588d106c5e8da84967a1827eff5b4850fa6ca73cd618ddf3a8d438da extends Twig_Template
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
        $__internal_1e8af59ab3a97001ab752f8529b5ff095381ab599ba2dcf8705a4338c0d08495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8af59ab3a97001ab752f8529b5ff095381ab599ba2dcf8705a4338c0d08495->enter($__internal_1e8af59ab3a97001ab752f8529b5ff095381ab599ba2dcf8705a4338c0d08495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gentelella/index.html.twig"));

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
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t
    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- JQVMap -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- bootstrap-daterangepicker -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 29
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
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 46
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
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\">Dashboard</a></li>
                      <li><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index2"));
        echo "\">Dashboard2</a></li>
                      <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index3"));
        echo "\">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form"));
        echo "\">General Form</a></li>
                      <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_advanced"));
        echo "\">Advanced Components</a></li>
                      <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_validation"));
        echo "\">Form Validation</a></li>
                      <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_wizards"));
        echo "\">Form Wizard</a></li>
                      <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_upload"));
        echo "\">Form Upload</a></li>
                      <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_buttons"));
        echo "\">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "general_elements"));
        echo "\">General Elements</a></li>
                      <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "media_gallery"));
        echo "\">Media Gallery</a></li>
                      <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "typography"));
        echo "\">Typography</a></li>
                      <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "icons"));
        echo "\">Icons</a></li>
                      <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "glyphicons"));
        echo "\">Glyphicons</a></li>
                      <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "widgets"));
        echo "\">Widgets</a></li>
                      <li><a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "invoice"));
        echo "\">Invoice</a></li>
                      <li><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "inbox"));
        echo "\">Inbox</a></li>
                      <li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "calendar"));
        echo "\">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables"));
        echo "\">Tables</a></li>
                      <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables_dynamic"));
        echo "\">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs"));
        echo "\">Chart JS</a></li>
                      <li><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs2"));
        echo "\">Chart JS2</a></li>
                      <li><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "morisjs"));
        echo "\">Moris JS</a></li>
                      <li><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "echarts"));
        echo "\">ECharts</a></li>
                      <li><a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "other_charts"));
        echo "\">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "fixed_sidebar"));
        echo "\">Fixed Sidebar</a></li>
                      <li><a href=\"";
        // line 110
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
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "e_commerce"));
        echo "\">E-commerce</a></li>
                      <li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "projects"));
        echo "\">Projects</a></li>
                      <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "project_detail"));
        echo "\">Project Detail</a></li>
                      <li><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "contacts"));
        echo "\">Contacts</a></li>
                      <li><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "profile"));
        echo "\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_403"));
        echo "\">403 Error</a></li>
                      <li><a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_404"));
        echo "\">404 Error</a></li>
                      <li><a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_500"));
        echo "\">500 Error</a></li>
                      <li><a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "plain_page"));
        echo "\">Plain Page</a></li>
                      <li><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "login"));
        echo "\">Login Page</a></li>
                      <li><a href=\"";
        // line 134
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
        // line 142
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
        // line 172
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
        // line 192
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
        // line 204
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
        // line 216
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
        // line 228
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
        // line 240
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
        // line 252
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
          <!-- top tiles -->
          <div class=\"row tile_count\">
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Users</span>
              <div class=\"count\">2500</div>
              <span class=\"count_bottom\"><i class=\"green\">4% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-clock-o\"></i> Average Time</span>
              <div class=\"count\">123.50</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>3% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Males</span>
              <div class=\"count green\">2,500</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Females</span>
              <div class=\"count\">4,567</div>
              <span class=\"count_bottom\"><i class=\"red\"><i class=\"fa fa-sort-desc\"></i>12% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Collections</span>
              <div class=\"count\">2,315</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Connections</span>
              <div class=\"count\">7,325</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->

          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"dashboard_graph\">

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

                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                  <div id=\"chart_plot_01\" class=\"demo-placeholder\"></div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12 bg-white\">
                  <div class=\"x_title\">
                    <h2>Top Campaign Performance</h2>
                    <div class=\"clearfix\"></div>
                  </div>

                  <div class=\"col-md-12 col-sm-12 col-xs-6\">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"80\"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Twitter Campaign</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"60\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-md-12 col-sm-12 col-xs-6\">
                    <div>
                      <p>Conventional Media</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"40\"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Bill boards</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class=\"clearfix\"></div>
              </div>
            </div>

          </div>
          <br />

          <div class=\"row\">


            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"x_panel tile fixed_height_320\">
                <div class=\"x_title\">
                  <h2>App Versions</h2>
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
                  <h4>App Usage across versions</h4>
                  <div class=\"widget_summary\">
                    <div class=\"w_left w_25\">
                      <span>0.1.5.2</span>
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
                      <span>0.1.5.3</span>
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
                      <span>0.1.5.4</span>
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
                      <span>0.1.5.5</span>
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

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"x_panel tile fixed_height_320 overflow_hidden\">
                <div class=\"x_title\">
                  <h2>Device Usage</h2>
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
                        <canvas class=\"canvasDoughnut\" height=\"140\" width=\"140\" style=\"margin: 15px 10px 10px 0\"></canvas>
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


            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"x_panel tile fixed_height_320\">
                <div class=\"x_title\">
                  <h2>Quick Settings</h2>
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
                      <li><i class=\"fa fa-calendar-o\"></i><a href=\"#\">Settings</a>
                      </li>
                      <li><i class=\"fa fa-bars\"></i><a href=\"#\">Subscription</a>
                      </li>
                      <li><i class=\"fa fa-bar-chart\"></i><a href=\"#\">Auto Renewal</a> </li>
                      <li><i class=\"fa fa-line-chart\"></i><a href=\"#\">Achievements</a>
                      </li>
                      <li><i class=\"fa fa-bar-chart\"></i><a href=\"#\">Auto Renewal</a> </li>
                      <li><i class=\"fa fa-line-chart\"></i><a href=\"#\">Achievements</a>
                      </li>
                      <li><i class=\"fa fa-area-chart\"></i><a href=\"#\">Logout</a>
                      </li>
                    </ul>

                    <div class=\"sidebar-widget\">
                        <h4>Profile Completion</h4>
                        <canvas width=\"150\" height=\"80\" id=\"chart_gauge_01\" class=\"\" style=\"width: 160px; height: 100px;\"></canvas>
                        <div class=\"goal-wrapper\">
                          <span id=\"gauge-text\" class=\"gauge-value pull-left\">0</span>
                          <span class=\"gauge-value pull-left\">%</span>
                          <span id=\"goal-text\" class=\"goal-value pull-right\">100%</span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Recent Activities <small>Sessions</small></h2>
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

                    <ul class=\"list-unstyled timeline widget\">
                      <li>
                        <div class=\"block\">
                          <div class=\"block_content\">
                            <h2 class=\"title\">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class=\"byline\">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class=\"block\">
                          <div class=\"block_content\">
                            <h2 class=\"title\">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class=\"byline\">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class=\"block\">
                          <div class=\"block_content\">
                            <h2 class=\"title\">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class=\"byline\">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class=\"block\">
                          <div class=\"block_content\">
                            <h2 class=\"title\">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class=\"byline\">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <div class=\"col-md-8 col-sm-8 col-xs-12\">



              <div class=\"row\">

                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Visitors location <small>geo-presentation</small></h2>
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
                        <div class=\"col-md-4 hidden-small\">
                          <h2 class=\"line_30\">125.7k Views from 60 countries</h2>

                          <table class=\"countries_list\">
                            <tbody>
                              <tr>
                                <td>United States</td>
                                <td class=\"fs15 fw700 text-right\">33%</td>
                              </tr>
                              <tr>
                                <td>France</td>
                                <td class=\"fs15 fw700 text-right\">27%</td>
                              </tr>
                              <tr>
                                <td>Germany</td>
                                <td class=\"fs15 fw700 text-right\">16%</td>
                              </tr>
                              <tr>
                                <td>Spain</td>
                                <td class=\"fs15 fw700 text-right\">11%</td>
                              </tr>
                              <tr>
                                <td>Britain</td>
                                <td class=\"fs15 fw700 text-right\">10%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div id=\"world-map-gdp\" class=\"col-md-8 col-sm-12 col-xs-12\" style=\"height:230px;\"></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class=\"row\">


                <!-- Start to do list -->
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>To Do List <small>Sample tasks</small></h2>
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

                      <div class=\"\">
                        <ul class=\"to_do\">
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Schedule meeting with new client </p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Create email address for new intern</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Create email address for new intern</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End to do list -->
                
                <!-- start of weather widget -->
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Daily active users <small>Sessions</small></h2>
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
                            <span><b>C</b></span>
                          </div>
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-sm-4\">
                          <div class=\"weather-icon\">
                            <canvas height=\"84\" width=\"84\" id=\"partly-cloudy-day\"></canvas>
                          </div>
                        </div>
                        <div class=\"col-sm-8\">
                          <div class=\"weather-text\">
                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
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
                            <canvas id=\"clear-day\" width=\"32\" height=\"32\"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"col-sm-2\">
                          <div class=\"daily-weather\">
                            <h2 class=\"day\">Tue</h2>
                            <h3 class=\"degrees\">25</h3>
                            <canvas height=\"32\" width=\"32\" id=\"rain\"></canvas>
                            <h5>12 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"col-sm-2\">
                          <div class=\"daily-weather\">
                            <h2 class=\"day\">Wed</h2>
                            <h3 class=\"degrees\">27</h3>
                            <canvas height=\"32\" width=\"32\" id=\"snow\"></canvas>
                            <h5>14 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"col-sm-2\">
                          <div class=\"daily-weather\">
                            <h2 class=\"day\">Thu</h2>
                            <h3 class=\"degrees\">28</h3>
                            <canvas height=\"32\" width=\"32\" id=\"sleet\"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"col-sm-2\">
                          <div class=\"daily-weather\">
                            <h2 class=\"day\">Fri</h2>
                            <h3 class=\"degrees\">28</h3>
                            <canvas height=\"32\" width=\"32\" id=\"wind\"></canvas>
                            <h5>11 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"col-sm-2\">
                          <div class=\"daily-weather\">
                            <h2 class=\"day\">Sat</h2>
                            <h3 class=\"degrees\">26</h3>
                            <canvas height=\"32\" width=\"32\" id=\"cloudy\"></canvas>
                            <h5>10 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"clearfix\"></div>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- end of weather widget -->
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
        // line 984
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 986
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 988
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 990
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart.js -->
    <script src=\"";
        // line 992
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 994
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 996
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 998
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 1000
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 1002
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1003
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1004
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1005
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1006
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 1008
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1009
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1010
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 1012
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 1014
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1015
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1016
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 1018
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1019
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 1022
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>
\t
  </body>
</html>
";
        
        $__internal_1e8af59ab3a97001ab752f8529b5ff095381ab599ba2dcf8705a4338c0d08495->leave($__internal_1e8af59ab3a97001ab752f8529b5ff095381ab599ba2dcf8705a4338c0d08495_prof);

    }

    public function getTemplateName()
    {
        return "gentelella/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1282 => 1022,  1276 => 1019,  1272 => 1018,  1267 => 1016,  1263 => 1015,  1259 => 1014,  1254 => 1012,  1249 => 1010,  1245 => 1009,  1241 => 1008,  1236 => 1006,  1232 => 1005,  1228 => 1004,  1224 => 1003,  1220 => 1002,  1215 => 1000,  1210 => 998,  1205 => 996,  1200 => 994,  1195 => 992,  1190 => 990,  1185 => 988,  1180 => 986,  1175 => 984,  440 => 252,  425 => 240,  410 => 228,  395 => 216,  380 => 204,  365 => 192,  342 => 172,  309 => 142,  298 => 134,  294 => 133,  290 => 132,  286 => 131,  282 => 130,  278 => 129,  270 => 124,  266 => 123,  262 => 122,  258 => 121,  254 => 120,  241 => 110,  237 => 109,  229 => 104,  225 => 103,  221 => 102,  217 => 101,  213 => 100,  205 => 95,  201 => 94,  193 => 89,  189 => 88,  185 => 87,  181 => 86,  177 => 85,  173 => 84,  169 => 83,  165 => 82,  161 => 81,  153 => 76,  149 => 75,  145 => 74,  141 => 73,  137 => 72,  133 => 71,  125 => 66,  121 => 65,  117 => 64,  96 => 46,  85 => 38,  73 => 29,  67 => 26,  62 => 24,  57 => 22,  51 => 19,  46 => 17,  41 => 15,  36 => 13,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gentelella/index.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/gentelella/index.html.twig");
    }
}
