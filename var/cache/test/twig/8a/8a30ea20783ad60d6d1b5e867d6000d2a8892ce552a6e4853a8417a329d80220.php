<?php

/* gentelella/widgets.html.twig */
class __TwigTemplate_858419681e57cf7f460f9aabc7ef7a667583eb44b78756d61c23923e736e14cf extends Twig_Template
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
        $__internal_884e9c0ef0b3f446eeb2590c7711623e3dfc24bdd88ac11d894c7199f962a9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884e9c0ef0b3f446eeb2590c7711623e3dfc24bdd88ac11d894c7199f962a9d7->enter($__internal_884e9c0ef0b3f446eeb2590c7711623e3dfc24bdd88ac11d894c7199f962a9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gentelella/widgets.html.twig"));

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
    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
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
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Widget Designs</h3>
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
              <div class=\"col-md-12\">
                <div class=\"\">
                  <div class=\"x_content\">
                    <div class=\"row\">
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-caret-square-o-right\"></i>
                          </div>
                          <div class=\"count\">179</div>

                          <h3>New Sign ups</h3>
                          <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-comments-o\"></i>
                          </div>
                          <div class=\"count\">179</div>

                          <h3>New Sign ups</h3>
                          <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-sort-amount-desc\"></i>
                          </div>
                          <div class=\"count\">179</div>

                          <h3>New Sign ups</h3>
                          <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-check-square-o\"></i>
                          </div>
                          <div class=\"count\">179</div>

                          <h3>New Sign ups</h3>
                          <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                      </div>
                    </div>

                    <div class=\"row top_tiles\" style=\"margin: 10px 0;\">
                      <div class=\"col-md-3 tile\">
                        <span>Total Sessions</span>
                        <h2>231,809</h2>
                        <span class=\"sparkline_two\" style=\"height: 160px;\">
                                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                                  </span>
                      </div>
                      <div class=\"col-md-3 tile\">
                        <span>Total Revenue</span>
                        <h2>\$ 1,231,809</h2>
                        <span class=\"sparkline_two\" style=\"height: 160px;\">
                                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                                  </span>
                      </div>
                      <div class=\"col-md-3 tile\">
                        <span>Total Sessions</span>
                        <h2>231,809</h2>
                        <span class=\"sparkline_three\" style=\"height: 160px;\">
                                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                                  </span>
                      </div>
                      <div class=\"col-md-3 tile\">
                        <span>Total Sessions</span>
                        <h2>231,809</h2>
                        <span class=\"sparkline_two\" style=\"height: 160px;\">
                                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                                  </span>
                      </div>
                    </div>




                    <br />
                    <div class=\"row\">
                      <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">
                        <div class=\"x_panel fixed_height_390\">
                          <div class=\"x_title\">
                            <h2>Tally Design</h2>
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

                            <div style=\"text-align: center; overflow: hidden; margin: 10px 5px 0;\">
                              <canvas id=\"canvas_line1\" height=\"200\"></canvas>
                            </div>

                            <div style=\"text-align: center; margin-bottom: 15px;\">
                              <div class=\"btn-group\" role=\"group\" aria-label=\"First group\">
                                <button type=\"button\" class=\"btn btn-default btn-sm\">Day</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">Month</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">Year</button>
                              </div>
                            </div>

                            <div>
                              <ul class=\"list-inline widget_tally\">
                                <li>
                                  <p>
                                    <span class=\"month\">12 December 2014 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class=\"month\">29 December 2014 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class=\"month\">16 January 2015 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">
                        <div class=\"x_panel fixed_height_390\">
                          <div class=\"x_title\">
                            <h2>Sales Close</h2>
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

                            <div style=\"text-align: center; margin-bottom: 17px\">
                              <ul class=\"verticle_bars list-inline\">
                                <li>
                                  <div class=\"progress vertical progress_wide bottom\">
                                    <div class=\"progress-bar progress-bar-dark\" role=\"progressbar\" data-transitiongoal=\"65\"></div>
                                  </div>
                                </li>
                                <li>
                                  <div class=\"progress vertical progress_wide bottom\">
                                    <div class=\"progress-bar progress-bar-gray\" role=\"progressbar\" data-transitiongoal=\"85\"></div>
                                  </div>
                                </li>
                                <li>
                                  <div class=\"progress vertical progress_wide bottom\">
                                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" data-transitiongoal=\"45\"></div>
                                  </div>
                                </li>
                                <li>
                                  <div class=\"progress vertical progress_wide bottom\">
                                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" data-transitiongoal=\"75\"></div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class=\"divider\"></div>

                            <ul class=\"legend list-unstyled\">
                              <li>
                                <p>
                                  <span class=\"icon\"><i class=\"fa fa-square dark\"></i></span> <span class=\"name\">Item One Name</span>
                                </p>
                              </li>
                              <li>
                                <p>
                                  <span class=\"icon\"><i class=\"fa fa-square grey\"></i></span> <span class=\"name\">Item Two Name</span>
                                </p>
                              </li>
                              <li>
                                <p>
                                  <span class=\"icon\"><i class=\"fa fa-square blue\"></i></span> <span class=\"name\">Item Three Name</span>
                                </p>
                              </li>
                              <li>
                                <p>
                                  <span class=\"icon\"><i class=\"fa fa-square green\"></i></span> <span class=\"name\">Item Four Name</span>
                                </p>
                              </li>
                            </ul>

                          </div>
                        </div>
                      </div>


                      <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">
                        <div class=\"x_panel ui-ribbon-container fixed_height_390\">
                          <div class=\"ui-ribbon-wrapper\">
                            <div class=\"ui-ribbon\">
                              30% Off
                            </div>
                          </div>
                          <div class=\"x_title\">
                            <h2>User Mail</h2>
                            <div class=\"clearfix\"></div>
                          </div>
                          <div class=\"x_content\">

                            <div style=\"text-align: center; margin-bottom: 17px\">
                              <span class=\"chart\" data-percent=\"86\">
                                                  <span class=\"percent\"></span>
                              </span>
                            </div>

                            <h3 class=\"name_title\">Finance</h3>
                            <p>Short Description</p>

                            <div class=\"divider\"></div>

                            <p>If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.</p>

                          </div>
                        </div>
                      </div>


                      <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">
                        <div class=\"x_panel fixed_height_390\">
                          <div class=\"x_content\">

                            <div class=\"flex\">
                              <ul class=\"list-inline widget_profile_box\">
                                <li>
                                  <a>
                                    <i class=\"fa fa-facebook\"></i>
                                  </a>
                                </li>
                                <li>
                                  <img src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
                                </li>
                                <li>
                                  <a>
                                    <i class=\"fa fa-twitter\"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>

                            <h3 class=\"name\">Musimbi</h3>

                            <div class=\"flex\">
                              <ul class=\"list-inline count2\">
                                <li>
                                  <h3>123</h3>
                                  <span>Articles</span>
                                </li>
                                <li>
                                  <h3>1234</h3>
                                  <span>Followers</span>
                                </li>
                                <li>
                                  <h3>123</h3>
                                  <span>Following</span>
                                </li>
                              </ul>
                            </div>
                            <p>
                              If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">
                        <div class=\"x_panel\">
                          <div class=\"x_title\">
                            <h2>Tally Design1</h2>
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

                            <div style=\"text-align: center; margin-bottom: 17px\">
                              <span class=\"chart\" data-percent=\"86\">
                                                  <span class=\"percent\"></span>
                              </span>
                            </div>

                            <div class=\"pie_bg\" style=\"text-align: center; display: none; margin-bottom: 17px\">
                              <canvas id=\"canvas_doughnut\" height=\"130\"></canvas>
                            </div>

                            <div style=\"text-align: center;\">
                              <div class=\"btn-group\" role=\"group\" aria-label=\"First group\">
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 D</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 W</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 M</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 Y</button>
                              </div>
                            </div>
                            <div style=\"text-align: center; overflow: hidden; margin: 10px 5px 3px;\">
                              <canvas id=\"canvas_line\" height=\"190\"></canvas>
                            </div>
                            <div>
                              <ul class=\"list-inline widget_tally\">
                                <li>
                                  <p>
                                    <span class=\"month\">12 December 2014 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class=\"month\">29 December 2014 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class=\"month\">16 January 2015 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>



                      <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">
                        <div class=\"x_panel\">
                          <div class=\"x_title\">
                            <h2>Tally Design2</h2>
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

                            <div style=\"text-align: center; margin-bottom: 17px\">
                              <span class=\"chart\" data-percent=\"86\">
                                                  <span class=\"percent\"></span>
                              </span>
                            </div>

                            <div class=\"pie_bg\" style=\"text-align: center; display: none; margin-bottom: 17px\">
                              <canvas id=\"canvas_doughnut2\" height=\"130\"></canvas>
                            </div>

                            <div style=\"text-align: center;\">
                              <div class=\"btn-group\" role=\"group\" aria-label=\"First group\">
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 D</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 W</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 M</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 Y</button>
                              </div>
                            </div>
                            <div style=\"text-align: center; overflow: hidden; margin: 10px 5px 3px;\">
                              <canvas id=\"canvas_line2\" height=\"190\"></canvas>
                            </div>
                            <div>
                              <ul class=\"list-inline widget_tally\">
                                <li>
                                  <p>
                                    <span class=\"month\">12 December 2014 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class=\"month\">29 December 2014 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class=\"month\">16 January 2015 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">
                        <div class=\"x_panel\">
                          <div class=\"x_title\">
                            <h2>Tally Design3</h2>
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

                            <div style=\"text-align: center; margin-bottom: 17px\">
                              <span class=\"chart\" data-percent=\"86\">
                                                  <span class=\"percent\"></span>
                              </span>
                            </div>

                            <div class=\"pie_bg\" style=\"text-align: center; display: none; margin-bottom: 17px\">
                              <canvas id=\"canvas_doughnut3\" height=\"130\"></canvas>
                            </div>

                            <div style=\"text-align: center;\">
                              <div class=\"btn-group\" role=\"group\" aria-label=\"First group\">
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 D</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 W</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 M</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 Y</button>
                              </div>
                            </div>
                            <div style=\"text-align: center; overflow: hidden; margin: 10px 5px 3px;\">
                              <canvas id=\"canvas_line3\" height=\"190\"></canvas>
                            </div>
                            <div>
                              <ul class=\"list-inline widget_tally\">
                                <li>
                                  <p>
                                    <span class=\"month\">12 December 2014 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class=\"month\">29 December 2014 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class=\"month\">16 January 2015 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">
                        <div class=\"x_panel\">
                          <div class=\"x_title\">
                            <h2>Tally Design4</h2>
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

                            <div style=\"text-align: center; margin-bottom: 17px\">
                              <span class=\"chart\" data-percent=\"86\">
                                                  <span class=\"percent\"></span>
                              </span>
                            </div>

                            <div class=\"pie_bg\" style=\"text-align: center; display: none; margin-bottom: 17px\">
                              <canvas id=\"canvas_doughnut4\" height=\"130\"></canvas>
                            </div>

                            <div style=\"text-align: center;\">
                              <div class=\"btn-group\" role=\"group\" aria-label=\"First group\">
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 D</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 W</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 M</button>
                                <button type=\"button\" class=\"btn btn-default btn-sm\">1 Y</button>
                              </div>
                            </div>
                            <div style=\"text-align: center; overflow: hidden; margin: 10px 5px 3px;\">
                              <canvas id=\"canvas_line4\" height=\"190\"></canvas>
                            </div>
                            <div>
                              <ul class=\"list-inline widget_tally\">
                                <li>
                                  <p>
                                    <span class=\"month\">12 December 2014 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class=\"month\">29 December 2014 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    <span class=\"month\">16 January 2015 </span>
                                    <span class=\"count\">+12%</span>
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
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
        // line 896
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 898
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 900
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 902
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart.js -->
    <script src=\"";
        // line 904
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Sparklines -->
    <script src=\"";
        // line 906
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- easy-pie-chart -->
    <script src=\"";
        // line 908
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 910
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 913
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>
\t
  </body>
</html>";
        
        $__internal_884e9c0ef0b3f446eeb2590c7711623e3dfc24bdd88ac11d894c7199f962a9d7->leave($__internal_884e9c0ef0b3f446eeb2590c7711623e3dfc24bdd88ac11d894c7199f962a9d7_prof);

    }

    public function getTemplateName()
    {
        return "gentelella/widgets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1122 => 913,  1116 => 910,  1111 => 908,  1106 => 906,  1101 => 904,  1096 => 902,  1091 => 900,  1086 => 898,  1081 => 896,  740 => 558,  424 => 245,  409 => 233,  394 => 221,  379 => 209,  364 => 197,  349 => 185,  326 => 165,  293 => 135,  282 => 127,  278 => 126,  274 => 125,  270 => 124,  266 => 123,  262 => 122,  254 => 117,  250 => 116,  246 => 115,  242 => 114,  238 => 113,  225 => 103,  221 => 102,  213 => 97,  209 => 96,  205 => 95,  201 => 94,  197 => 93,  189 => 88,  185 => 87,  177 => 82,  173 => 81,  169 => 80,  165 => 79,  161 => 78,  157 => 77,  153 => 76,  149 => 75,  145 => 74,  137 => 69,  133 => 68,  129 => 67,  125 => 66,  121 => 65,  117 => 64,  109 => 59,  105 => 58,  101 => 57,  80 => 39,  69 => 31,  57 => 22,  51 => 19,  46 => 17,  41 => 15,  36 => 13,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gentelella/widgets.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/gentelella/widgets.html.twig");
    }
}
