<?php

/* gentelella/index2.html.twig */
class __TwigTemplate_1b0bb3942367786673ecf542c383341ed3fdd8a4e27cfe05a4286213c2f4c02b extends Twig_Template
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
        $__internal_34a3caeb6fd08259a2300a651a40c660e85bc868415ff40d7ab0308fb89cc88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a3caeb6fd08259a2300a651a40c660e85bc868415ff40d7ab0308fb89cc88b->enter($__internal_34a3caeb6fd08259a2300a651a40c660e85bc868415ff40d7ab0308fb89cc88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gentelella/index2.html.twig"));

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
    <!-- bootstrap-daterangepicker -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 22
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
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 39
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
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\">Dashboard</a></li>
                      <li><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index2"));
        echo "\">Dashboard2</a></li>
                      <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index3"));
        echo "\">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form"));
        echo "\">General Form</a></li>
                      <li><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_advanced"));
        echo "\">Advanced Components</a></li>
                      <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_validation"));
        echo "\">Form Validation</a></li>
                      <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_wizards"));
        echo "\">Form Wizard</a></li>
                      <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_upload"));
        echo "\">Form Upload</a></li>
                      <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_buttons"));
        echo "\">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "general_elements"));
        echo "\">General Elements</a></li>
                      <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "media_gallery"));
        echo "\">Media Gallery</a></li>
                      <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "typography"));
        echo "\">Typography</a></li>
                      <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "icons"));
        echo "\">Icons</a></li>
                      <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "glyphicons"));
        echo "\">Glyphicons</a></li>
                      <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "widgets"));
        echo "\">Widgets</a></li>
                      <li><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "invoice"));
        echo "\">Invoice</a></li>
                      <li><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "inbox"));
        echo "\">Inbox</a></li>
                      <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "calendar"));
        echo "\">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables"));
        echo "\">Tables</a></li>
                      <li><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables_dynamic"));
        echo "\">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs"));
        echo "\">Chart JS</a></li>
                      <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs2"));
        echo "\">Chart JS2</a></li>
                      <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "morisjs"));
        echo "\">Moris JS</a></li>
                      <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "echarts"));
        echo "\">ECharts</a></li>
                      <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "other_charts"));
        echo "\">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "fixed_sidebar"));
        echo "\">Fixed Sidebar</a></li>
                      <li><a href=\"";
        // line 103
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
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "e_commerce"));
        echo "\">E-commerce</a></li>
                      <li><a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "projects"));
        echo "\">Projects</a></li>
                      <li><a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "project_detail"));
        echo "\">Project Detail</a></li>
                      <li><a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "contacts"));
        echo "\">Contacts</a></li>
                      <li><a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "profile"));
        echo "\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_403"));
        echo "\">403 Error</a></li>
                      <li><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_404"));
        echo "\">404 Error</a></li>
                      <li><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_500"));
        echo "\">500 Error</a></li>
                      <li><a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "plain_page"));
        echo "\">Plain Page</a></li>
                      <li><a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "login"));
        echo "\">Login Page</a></li>
                      <li><a href=\"";
        // line 127
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
        // line 135
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
        // line 165
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
        // line 185
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
        // line 197
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
        // line 209
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
        // line 221
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
        // line 233
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
        // line 245
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
            <div class=\"row top_tiles\">
              <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                <div class=\"tile-stats\">
                  <div class=\"icon\"><i class=\"fa fa-caret-square-o-right\"></i></div>
                  <div class=\"count\">179</div>
                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                <div class=\"tile-stats\">
                  <div class=\"icon\"><i class=\"fa fa-comments-o\"></i></div>
                  <div class=\"count\">179</div>
                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                <div class=\"tile-stats\">
                  <div class=\"icon\"><i class=\"fa fa-sort-amount-desc\"></i></div>
                  <div class=\"count\">179</div>
                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                <div class=\"tile-stats\">
                  <div class=\"icon\"><i class=\"fa fa-check-square-o\"></i></div>
                  <div class=\"count\">179</div>
                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Transaction Summary <small>Weekly progress</small></h2>
                    <div class=\"filter\">
                      <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc\">
                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                        <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                      </div>
                    </div>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <div class=\"col-md-9 col-sm-12 col-xs-12\">
                      <div class=\"demo-container\" style=\"height:280px\">
                        <div id=\"chart_plot_02\" class=\"demo-placeholder\"></div>
                      </div>
                      <div class=\"tiles\">
                        <div class=\"col-md-4 tile\">
                          <span>Total Sessions</span>
                          <h2>231,809</h2>
                          <span class=\"sparkline11 graph\" style=\"height: 160px;\">
                               <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                          </span>
                        </div>
                        <div class=\"col-md-4 tile\">
                          <span>Total Revenue</span>
                          <h2>\$231,809</h2>
                          <span class=\"sparkline22 graph\" style=\"height: 160px;\">
                                <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                          </span>
                        </div>
                        <div class=\"col-md-4 tile\">
                          <span>Total Sessions</span>
                          <h2>231,809</h2>
                          <span class=\"sparkline11 graph\" style=\"height: 160px;\">
                                 <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                          </span>
                        </div>
                      </div>

                    </div>

                    <div class=\"col-md-3 col-sm-12 col-xs-12\">
                      <div>
                        <div class=\"x_title\">
                          <h2>Top Profiles</h2>
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
                        <ul class=\"list-unstyled top_profiles scroll-view\">
                          <li class=\"media event\">
                            <a class=\"pull-left border-aero profile_thumb\">
                              <i class=\"fa fa-user aero\"></i>
                            </a>
                            <div class=\"media-body\">
                              <a class=\"title\" href=\"#\">Ms. Mary Jane</a>
                              <p><strong>\$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class=\"media event\">
                            <a class=\"pull-left border-green profile_thumb\">
                              <i class=\"fa fa-user green\"></i>
                            </a>
                            <div class=\"media-body\">
                              <a class=\"title\" href=\"#\">Ms. Mary Jane</a>
                              <p><strong>\$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class=\"media event\">
                            <a class=\"pull-left border-blue profile_thumb\">
                              <i class=\"fa fa-user blue\"></i>
                            </a>
                            <div class=\"media-body\">
                              <a class=\"title\" href=\"#\">Ms. Mary Jane</a>
                              <p><strong>\$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class=\"media event\">
                            <a class=\"pull-left border-aero profile_thumb\">
                              <i class=\"fa fa-user aero\"></i>
                            </a>
                            <div class=\"media-body\">
                              <a class=\"title\" href=\"#\">Ms. Mary Jane</a>
                              <p><strong>\$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class=\"media event\">
                            <a class=\"pull-left border-green profile_thumb\">
                              <i class=\"fa fa-user green\"></i>
                            </a>
                            <div class=\"media-body\">
                              <a class=\"title\" href=\"#\">Ms. Mary Jane</a>
                              <p><strong>\$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>



            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Weekly Summary <small>Activity shares</small></h2>
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

                    <div class=\"row\" style=\"border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;\">
                      <div class=\"col-md-7\" style=\"overflow:hidden;\">
                        <span class=\"sparkline_one\" style=\"height: 160px; padding: 10px 25px;\">
                                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                                  </span>
                        <h4 style=\"margin:18px\">Weekly sales progress</h4>
                      </div>

                      <div class=\"col-md-5\">
                        <div class=\"row\" style=\"text-align: center;\">
                          <div class=\"col-md-4\">
                            <canvas class=\"canvasDoughnut\" height=\"110\" width=\"110\" style=\"margin: 5px 10px 10px 0\"></canvas>
                            <h4 style=\"margin:0\">Bounce Rates</h4>
                          </div>
                          <div class=\"col-md-4\">
                            <canvas class=\"canvasDoughnut\" height=\"110\" width=\"110\" style=\"margin: 5px 10px 10px 0\"></canvas>
                            <h4 style=\"margin:0\">New Traffic</h4>
                          </div>
                          <div class=\"col-md-4\">
                            <canvas class=\"canvasDoughnut\" height=\"110\" width=\"110\" style=\"margin: 5px 10px 10px 0\"></canvas>
                            <h4 style=\"margin:0\">Device Share</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class=\"row\">
              <div class=\"col-md-4\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Top Profiles <small>Sessions</small></h2>
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
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Three Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                  </div>
                </div>
              </div>

              <div class=\"col-md-4\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Top Profiles <small>Sessions</small></h2>
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
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Three Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                  </div>
                </div>
              </div>

              <div class=\"col-md-4\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Top Profiles <small>Sessions</small></h2>
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
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class=\"media event\">
                      <a class=\"pull-left date\">
                        <p class=\"month\">April</p>
                        <p class=\"day\">23</p>
                      </a>
                      <div class=\"media-body\">
                        <a class=\"title\" href=\"#\">Item Three Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
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
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart.js -->
    <script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Sparklines -->
    <script src=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 758
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 760
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 762
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 766
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 767
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 770
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>";
        
        $__internal_34a3caeb6fd08259a2300a651a40c660e85bc868415ff40d7ab0308fb89cc88b->leave($__internal_34a3caeb6fd08259a2300a651a40c660e85bc868415ff40d7ab0308fb89cc88b_prof);

    }

    public function getTemplateName()
    {
        return "gentelella/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1003 => 770,  997 => 767,  993 => 766,  988 => 764,  983 => 762,  979 => 761,  975 => 760,  970 => 758,  966 => 757,  962 => 756,  958 => 755,  954 => 754,  949 => 752,  944 => 750,  939 => 748,  934 => 746,  929 => 744,  924 => 742,  424 => 245,  409 => 233,  394 => 221,  379 => 209,  364 => 197,  349 => 185,  326 => 165,  293 => 135,  282 => 127,  278 => 126,  274 => 125,  270 => 124,  266 => 123,  262 => 122,  254 => 117,  250 => 116,  246 => 115,  242 => 114,  238 => 113,  225 => 103,  221 => 102,  213 => 97,  209 => 96,  205 => 95,  201 => 94,  197 => 93,  189 => 88,  185 => 87,  177 => 82,  173 => 81,  169 => 80,  165 => 79,  161 => 78,  157 => 77,  153 => 76,  149 => 75,  145 => 74,  137 => 69,  133 => 68,  129 => 67,  125 => 66,  121 => 65,  117 => 64,  109 => 59,  105 => 58,  101 => 57,  80 => 39,  69 => 31,  57 => 22,  51 => 19,  46 => 17,  41 => 15,  36 => 13,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gentelella/index2.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/gentelella/index2.html.twig");
    }
}
