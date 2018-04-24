<?php

/* gentelella/general_elements.html.twig */
class __TwigTemplate_08a2301498fc88ba3e4b18e61d18080cff32c9f31060b614ecb3e837d1294ca1 extends Twig_Template
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
        $__internal_7d7010e9a2a4ef6fda24036d2b8f5b26f1bf10a805e6d3f5845c8cf74a3fdefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7010e9a2a4ef6fda24036d2b8f5b26f1bf10a805e6d3f5845c8cf74a3fdefd->enter($__internal_7d7010e9a2a4ef6fda24036d2b8f5b26f1bf10a805e6d3f5845c8cf74a3fdefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gentelella/general_elements.html.twig"));

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
    <!-- iCheck -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- PNotify -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/pnotify/dist/pnotify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/pnotify/dist/pnotify.buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/pnotify/dist/pnotify.nonblock.css"), "html", null, true);
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
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>General Elements</h3>
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

            <div class=\"\">
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2><i class=\"fa fa-bars\"></i> Tabs <small>Float left</small></h2>
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


                    <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                      <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\"><a href=\"#tab_content1\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Home</a>
                        </li>
                        <li role=\"presentation\" class=\"\"><a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Profile</a>
                        </li>
                        <li role=\"presentation\" class=\"\"><a href=\"#tab_content3\" role=\"tab\" id=\"profile-tab2\" data-toggle=\"tab\" aria-expanded=\"false\">Profile</a>
                        </li>
                      </ul>
                      <div id=\"myTabContent\" class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">
                          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                            synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2><i class=\"fa fa-bars\"></i> Tabs <small>Float right</small></h2>
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

                    <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                      <ul id=\"myTab1\" class=\"nav nav-tabs bar_tabs right\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\"><a href=\"#tab_content11\" id=\"home-tabb\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"home\" aria-expanded=\"true\">Home</a>
                        </li>
                        <li role=\"presentation\" class=\"\"><a href=\"#tab_content22\" role=\"tab\" id=\"profile-tabb\" data-toggle=\"tab\" aria-controls=\"profile\" aria-expanded=\"false\">Profile</a>
                        </li>
                        <li role=\"presentation\" class=\"\"><a href=\"#tab_content33\" role=\"tab\" id=\"profile-tabb3\" data-toggle=\"tab\" aria-controls=\"profile\" aria-expanded=\"false\">Profile</a>
                        </li>
                      </ul>
                      <div id=\"myTabContent2\" class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content11\" aria-labelledby=\"home-tab\">
                          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                            synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content22\" aria-labelledby=\"profile-tab\">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content33\" aria-labelledby=\"profile-tab\">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class=\"clearfix\"></div>

              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2><i class=\"fa fa-bars\"></i> Vertical Tabs <small>Float left</small></h2>
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

                    <div class=\"col-xs-3\">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class=\"nav nav-tabs tabs-left\">
                        <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Home</a>
                        </li>
                        <li><a href=\"#profile\" data-toggle=\"tab\">Profile</a>
                        </li>
                        <li><a href=\"#messages\" data-toggle=\"tab\">Messages</a>
                        </li>
                        <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a>
                        </li>
                      </ul>
                    </div>

                    <div class=\"col-xs-9\">
                      <!-- Tab panes -->
                      <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"home\">
                          <p class=\"lead\">Home tab</p>
                          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                            synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                        <div class=\"tab-pane\" id=\"profile\">Profile Tab.</div>
                        <div class=\"tab-pane\" id=\"messages\">Messages Tab.</div>
                        <div class=\"tab-pane\" id=\"settings\">Settings Tab.</div>
                      </div>
                    </div>

                    <div class=\"clearfix\"></div>

                  </div>
                </div>
              </div>

              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2><i class=\"fa fa-bars\"></i> Vertical Tabs <small>Float right</small></h2>
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

                    <div class=\"col-xs-9\">
                      <!-- Tab panes -->
                      <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"home-r\">
                          <p class=\"lead\">Home tab</p>
                          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                            synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                        <div class=\"tab-pane\" id=\"profile-r\">Profile Tab.</div>
                        <div class=\"tab-pane\" id=\"messages-r\">Messages Tab.</div>
                        <div class=\"tab-pane\" id=\"settings-r\">Settings Tab.</div>
                      </div>
                    </div>

                    <div class=\"col-xs-3\">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class=\"nav nav-tabs tabs-right\">
                        <li class=\"active\"><a href=\"#home-r\" data-toggle=\"tab\">Home</a>
                        </li>
                        <li><a href=\"#profile-r\" data-toggle=\"tab\">Profile</a>
                        </li>
                        <li><a href=\"#messages-r\" data-toggle=\"tab\">Messages</a>
                        </li>
                        <li><a href=\"#settings-r\" data-toggle=\"tab\">Settings</a>
                        </li>
                      </ul>
                    </div>

                  </div>

                </div>
              </div>
              <div class=\"clearfix\"></div>


              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2><i class=\"fa fa-align-left\"></i> Collapsible / Accordion <small>Sessions</small></h2>
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

                    <!-- start accordion -->
                    <div class=\"accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                      <div class=\"panel\">
                        <a class=\"panel-heading\" role=\"tab\" id=\"headingOne\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                          <h4 class=\"panel-title\">Collapsible Group Items #1</h4>
                        </a>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                          <div class=\"panel-body\">
                            <table class=\"table table-bordered\">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope=\"row\">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope=\"row\">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope=\"row\">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class=\"panel\">
                        <a class=\"panel-heading collapsed\" role=\"tab\" id=\"headingTwo\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                          <h4 class=\"panel-title\">Collapsible Group Items #2</h4>
                        </a>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                          <div class=\"panel-body\">
                            <p><strong>Collapsible Item 2 data</strong>
                            </p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                          </div>
                        </div>
                      </div>
                      <div class=\"panel\">
                        <a class=\"panel-heading collapsed\" role=\"tab\" id=\"headingThree\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                          <h4 class=\"panel-title\">Collapsible Group Items #3</h4>
                        </a>
                        <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                          <div class=\"panel-body\">
                            <p><strong>Collapsible Item 3 data</strong>
                            </p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end of accordion -->


                  </div>
                </div>
              </div>


              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2><i class=\"fa fa-align-left\"></i> Collapsible / Accordion <small>Sessions</small></h2>
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

                    <!-- start accordion -->
                    <div class=\"accordion\" id=\"accordion1\" role=\"tablist\" aria-multiselectable=\"true\">
                      <div class=\"panel\">
                        <a class=\"panel-heading\" role=\"tab\" id=\"headingOne1\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseOne1\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                          <h4 class=\"panel-title\">Collapsible Group Item #1</h4>
                        </a>
                        <div id=\"collapseOne1\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                          <div class=\"panel-body\">
                            <table class=\"table table-striped\">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope=\"row\">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope=\"row\">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope=\"row\">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class=\"panel\">
                        <a class=\"panel-heading collapsed\" role=\"tab\" id=\"headingTwo1\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseTwo1\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                          <h4 class=\"panel-title\">Collapsible Group Item #2</h4>
                        </a>
                        <div id=\"collapseTwo1\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                          <div class=\"panel-body\">
                            <p><strong>Collapsible Item 2 data</strong>
                            </p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                          </div>
                        </div>
                      </div>
                      <div class=\"panel\">
                        <a class=\"panel-heading collapsed\" role=\"tab\" id=\"headingThree1\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseThree1\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                          <h4 class=\"panel-title\">Collapsible Group Item #3</h4>
                        </a>
                        <div id=\"collapseThree1\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                          <div class=\"panel-body\">
                            <p><strong>Collapsible Item 3 data</strong>
                            </p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end of accordion -->


                  </div>
                </div>
              </div>

            </div>
            <div class=\"clearfix\"></div>

            <div class=\"\">

              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Tooltips <small>Hover to view</small></h2>
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

                    <p>Add small overlays of content for housing secondary information.</p>
                    <!-- start pop-over -->
                    <div class=\"bs-example-popovers\">
                      <button type=\"button\" class=\"btn btn-default\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"left\" data-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\" data-original-title=\"\" title=\"\">
                        Left
                      </button>
                      <button type=\"button\" class=\"btn btn-default\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\" data-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\" data-original-title=\"\" title=\"\">
                        Top
                      </button>
                      <button type=\"button\" class=\"btn btn-default\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"bottom\" data-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\">
                        Bottom
                      </button>
                      <button type=\"button\" class=\"btn btn-default\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"right\" data-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\">
                        Right
                      </button>
                    </div>
                    <!-- end pop-over -->

                  </div>
                </div>
              </div>



              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Tooltips <small>Hover to view</small></h2>
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

                    <p>Hover over the links below to see tooltips:</p>

                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Tooltip left\">Tooltip left</button>

                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Tooltip top\">Tooltip top</button>

                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Tooltip bottom\">Tooltip bottom</button>

                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Tooltip right\">Tooltip right</button>

                  </div>
                </div>
              </div>
            </div>

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
                  <ul class=\"list-unstyled timeline\">
                    <li>
                      <div class=\"block\">
                        <div class=\"tags\">
                          <a href=\"\" class=\"tag\">
                            <span>Entertainment</span>
                          </a>
                        </div>
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
                        <div class=\"tags\">
                          <a href=\"\" class=\"tag\">
                            <span>Entertainment</span>
                          </a>
                        </div>
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
                        <div class=\"tags\">
                          <a href=\"\" class=\"tag\">
                            <span>Entertainment</span>
                          </a>
                        </div>
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

                  <div class=\"bs-example\" data-example-id=\"simple-jumbotron\">
                    <div class=\"jumbotron\">
                      <h1>Hello, world!</h1>
                      <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2><i class=\"fa fa-chevron-down\"></i> Dropdowns <small>Multiple dropdown designs</small></h2>
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

                  <p>Gentelella provides you with several dropdown designs for your choosing.</p>
                  <ul class=\"nav nav-pills\" role=\"tablist\">
                    <li role=\"presentation\"><a href=\"#\">Regular link</a>
                    </li>
                    <li role=\"presentation\" class=\"dropdown\">
                      <a id=\"drop4\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" role=\"button\" aria-expanded=\"false\">
                                  Dropdown
                                  <span class=\"caret\"></span>
                              </a>
                      <ul id=\"menu6\" class=\"dropdown-menu animated fadeInDown\" role=\"menu\">
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Action</a>
                        </li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Another action</a>
                        </li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Something else here</a>
                        </li>
                        <li role=\"presentation\" class=\"divider\"></li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Separated link</a>
                        </li>
                      </ul>
                    </li>
                    <li role=\"presentation\" class=\"dropdown\">
                      <a id=\"drop5\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" role=\"button\" aria-expanded=\"false\">
                                  Dropdown
                                  <span class=\"caret\"></span>
                              </a>
                      <ul id=\"menu2\" class=\"dropdown-menu animated fadeInDown\" role=\"menu\" aria-labelledby=\"drop5\">
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Action</a>
                        </li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Another action</a>
                        </li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Something else here</a>
                        </li>
                        <li role=\"presentation\" class=\"divider\"></li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Separated link</a>
                        </li>
                      </ul>
                    </li>
                    <li role=\"presentation\" class=\"dropdown\">
                      <a id=\"drop6\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" role=\"button\" aria-expanded=\"false\">
                                  Dropdown
                                  <span class=\"caret\"></span>
                              </a>
                      <ul id=\"menu3\" class=\"dropdown-menu animated fadeInDown\" role=\"menu\" aria-labelledby=\"drop6\">
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Action</a>
                        </li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Another action</a>
                        </li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Something else here</a>
                        </li>
                        <li role=\"presentation\" class=\"divider\"></li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"https://twitter.com/fat\">Separated link</a>
                        </li>
                      </ul>
                    </li>
                  </ul>

                </div>
              </div>
            </div>

            <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2><i class=\"fa fa-square-o\"></i> Modals</h2>
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

                  <!-- modals -->
                  <!-- Large modal -->
                  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\">Large modal</button>

                  <div class=\"modal fade bs-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                      <div class=\"modal-content\">

                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span>
                          </button>
                          <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                        </div>
                        <div class=\"modal-body\">
                          <h4>Text in a modal</h4>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                          <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- Small modal -->
                  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">Small modal</button>

                  <div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-sm\">
                      <div class=\"modal-content\">

                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                          </button>
                          <h4 class=\"modal-title\" id=\"myModalLabel2\">Modal title</h4>
                        </div>
                        <div class=\"modal-body\">
                          <h4>Text in a modal</h4>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                          <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- /modals -->
                </div>
              </div>
            </div>



            <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2><i class=\"fa fa-bell\"></i> Notifications <small>Styled & Custom notifications</small></h2>
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

                  <p>Regular notifications</p>
                  <button class=\"btn btn-default source\" onclick=\"new PNotify({
                                  title: 'Regular Success',
                                  text: 'That thing that you were trying to do worked!',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });\">Success</button>

                  <button class=\"btn btn-default source\" onclick=\"new PNotify({
                                  title: 'New Thing',
                                  text: 'Just to let you know, something happened.',
                                  type: 'info',
                                  styling: 'bootstrap3'
                              });\">Info</button>

                  <button class=\"btn btn-default source\" onclick=\"new PNotify({
                                  title: 'Regular Notice',
                                  text: 'Check me out! I\\'m a notice.',
                                  styling: 'bootstrap3'
                              });\">Notice</button>

                  <button class=\"btn btn-default source\" onclick=\"new PNotify({
                                  title: 'Oh No!',
                                  text: 'Something terrible happened.',
                                  type: 'error',
                                  styling: 'bootstrap3'
                              });\">Error</button>

                  <button class=\"btn btn-default source\" onclick=\"new PNotify({
                                  title: 'Oh No!',
                                  text: 'Something terrible happened.',
                                  type: 'info',
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });\">Dark</button>

                  <hr />

                  <p>Sticky notifications.. these wont close unless user closes them.</p>
                  <button class=\"btn btn-default source\" onclick=\"new PNotify({
                                  title: 'Sticky Success',
                                  text: 'Sticky success... I\\'m not even gonna make a joke.',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });\">Success</button>


                  <button class=\"btn btn-default source\" onclick=\"new PNotify({
                                  title: 'Sticky Info',
                                  text: 'Sticky Info... I\\'m not even gonna make a joke.',
                                  type: 'info',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });\">Info</button>


                  <button class=\"btn btn-default source\" onclick=\"new PNotify({
                                  title: 'Sticky Warning',
                                  text: 'Sticky Warning... I\\'m not even gonna make a joke.',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });\">Warning</button>


                  <button class=\"btn btn-default source\" onclick=\"new PNotify({
                                  title: 'Sticky Danger',
                                  text: 'Sticky Danger... I\\'m not even gonna make a joke.',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });\">Error</button>


                  <button class=\"btn btn-default source\" onclick=\"new PNotify({
                                  title: 'Sticky Success',
                                  text: 'Sticky success... I\\'m not even gonna make a joke.',
                                  type: 'info',
                                  hide: false,
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });\">Dark</button>

                  <hr/>

                  <button class=\"btn btn-default source\" onclick=\"new PNotify({
                                  title: 'Non-Blocking Notice',
                                  type: 'info',
                                  text: 'When you hover over me I\\'ll fade to show the elements underneath. Feel free to click any of them just like I wasn\\'t even here.',
                                  nonblock: {
                                      nonblock: true
                                  },
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });\">Non-Blocking Notice</button>

                  <hr />

                  <div id=\"antoox\">
                    <div>
                      <div></div>
                      <div></div>
                      <div></div>
                    </div>

                  </div>

                  <button class=\"btn btn-default source\" onclick=\"new TabbedNotification({
                                  title: 'Tabbed Notificat',
                                  text: 'Sticky success... Raw denim you probably haven\\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                                  type: 'success',
                                  sound: false
                              })\">Success</button>

                  <button class=\"btn btn-default source\" onclick=\"new TabbedNotification({
                                  title: 'Tabbed Notificat',
                                  text: 'Custom Info... Raw denim you probably haven\\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.',
                                  type: 'info',
                                  sound: false
                              })\">Info</button>

                  <button class=\"btn btn-default source\" onclick=\"new TabbedNotification({
                                  title: 'Tabbed Notificat',
                                  text: 'Custom Warning... Raw denim you probably haven\\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                                  type: 'warning',
                                  sound: false
                              })\">Warning</button>

                  <button class=\"btn btn-default source\" onclick=\"new TabbedNotification({
                                  title: 'Custom Notification error',
                                  text: 'Custom Error... Raw denim you probably haven\\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                                  type: 'error',
                                  sound: false
                              })\">Error</button>

                  <button class=\"btn btn-default source\" onclick=\"new TabbedNotification({
                                  title: 'Tabbed notification dark',
                                  text: 'Custom Dark... Raw denim you probably haven\\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                                  type: 'dark',
                                  sound: false
                              })\">Dark</button>


                </div>
              </div>
            </div>


            <div class=\"col-md-6\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Pop Overs <small>Sessions</small></h2>
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
                <div class=\"x_content bs-example-popovers\">

                  <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                  </div>
                  <div class=\"alert alert-info alert-dismissible fade in\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                  </div>
                  <div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                  </div>
                  <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                  </div>

                </div>
              </div>
            </div>



            <div class=\"col-md-6\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2><i class=\"fa fa-align-left\"></i> Progress bar<small>Sessions</small></h2>
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

                  <p>Bootstrap progress bar with animated loading bar, add right to .progress to align right</p>
                  <div class=\"row\">
                    <div class=\"col-md-6\">
                      <div class=\"progress right\">
                        <div class=\"progress-bar progress-bar-danger\" data-transitiongoal=\"25\"></div>
                      </div>
                      <div class=\"progress right\">
                        <div class=\"progress-bar progress-bar-warning\" data-transitiongoal=\"45\"></div>
                      </div>
                      <div class=\"progress right\">
                        <div class=\"progress-bar progress-bar-info\" data-transitiongoal=\"65\"></div>
                      </div>
                      <div class=\"progress right\">
                        <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"95\"></div>
                      </div>
                    </div>
                    <div class=\"col-md-6\">
                      <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-danger\" data-transitiongoal=\"25\"></div>
                      </div>
                      <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-warning\" data-transitiongoal=\"45\"></div>
                      </div>
                      <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-info\" data-transitiongoal=\"65\"></div>
                      </div>
                      <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"95\"></div>
                      </div>
                    </div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-md-6 col-sm-12\">
                      <ul class=\"verticle_bars list-inline\">
                        <li>
                          <div class=\"progress progress-striped vertical progress_wide bottom\">
                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" data-transitiongoal=\"25\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress progress-striped vertical progress_wide bottom\">
                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" data-transitiongoal=\"45\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress vertical progress_wide bottom\">
                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" data-transitiongoal=\"65\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress vertical progress_wide bottom\">
                            <div class=\"progress-bar  progress-bar-success\" role=\"progressbar\" data-transitiongoal=\"85\"></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class=\"col-md-6 col-sm-12 fixed_height_200\">
                      <ul class=\"verticle_bars list-inline\">
                        <li>
                          <div class=\"progress vertical bottom\">
                            <div class=\"progress-bar  progress-bar-success\" role=\"progressbar\" data-transitiongoal=\"85\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress vertical bottom\">
                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" data-transitiongoal=\"65\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress vertical bottom\">
                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" data-transitiongoal=\"45\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress vertical bottom\">
                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" data-transitiongoal=\"25\"></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-md-6 col-sm-12\">
                      <ul class=\"verticle_bars list-inline\">
                        <li>
                          <div class=\"progress vertical progress_wide\">
                            <div class=\"progress-bar progress-bar-danger progress-bar-striped\" role=\"progressbar\" data-transitiongoal=\"25\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress vertical progress_wide\">
                            <div class=\"progress-bar progress-bar-warning progress-bar-striped\" role=\"progressbar\" data-transitiongoal=\"45\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress vertical progress_wide\">
                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" data-transitiongoal=\"65\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress vertical progress_wide\">
                            <div class=\"progress-bar  progress-bar-success\" role=\"progressbar\" data-transitiongoal=\"85\"></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class=\"col-md-6 col-sm-12 fixed_height_200\">
                      <ul class=\"verticle_bars list-inline\">
                        <li>
                          <div class=\"progress vertical\">
                            <div class=\"progress-bar  progress-bar-success\" role=\"progressbar\" data-transitiongoal=\"85\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress vertical\">
                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" data-transitiongoal=\"65\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress vertical\">
                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" data-transitiongoal=\"45\"></div>
                          </div>
                        </li>
                        <li>
                          <div class=\"progress vertical\">
                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" data-transitiongoal=\"25\"></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>



                </div>
              </div>
            </div>

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
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End to do list -->


            <div class=\"col-md-6\">
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
                  <ul class=\"list-unstyled msg_list\">
                    <li>
                      <a>
                        <span class=\"image\">
                          <img src=\"";
        // line 1561
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"img\" />
                        </span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\">
                          <img src=\"";
        // line 1575
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"img\" />
                        </span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\">
                          <img src=\"";
        // line 1589
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"img\" />
                        </span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\">
                          <img src=\"";
        // line 1603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"img\" />
                        </span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"clearfix\"></div>
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

    <div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
      <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
      </ul>
      <div class=\"clearfix\"></div>
      <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
    </div>

    <!-- jQuery -->
    <script src=\"";
        // line 1642
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 1644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 1646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 1648
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 1650
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 1652
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- PNotify -->
    <script src=\"";
        // line 1654
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/pnotify/dist/pnotify.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/pnotify/dist/pnotify.buttons.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/pnotify/dist/pnotify.nonblock.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 1659
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>
\t
  </body>
</html>";
        
        $__internal_7d7010e9a2a4ef6fda24036d2b8f5b26f1bf10a805e6d3f5845c8cf74a3fdefd->leave($__internal_7d7010e9a2a4ef6fda24036d2b8f5b26f1bf10a805e6d3f5845c8cf74a3fdefd_prof);

    }

    public function getTemplateName()
    {
        return "gentelella/general_elements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1892 => 1659,  1886 => 1656,  1882 => 1655,  1878 => 1654,  1873 => 1652,  1868 => 1650,  1863 => 1648,  1858 => 1646,  1853 => 1644,  1848 => 1642,  1806 => 1603,  1789 => 1589,  1772 => 1575,  1755 => 1561,  443 => 252,  428 => 240,  413 => 228,  398 => 216,  383 => 204,  368 => 192,  345 => 172,  312 => 142,  301 => 134,  297 => 133,  293 => 132,  289 => 131,  285 => 130,  281 => 129,  273 => 124,  269 => 123,  265 => 122,  261 => 121,  257 => 120,  244 => 110,  240 => 109,  232 => 104,  228 => 103,  224 => 102,  220 => 101,  216 => 100,  208 => 95,  204 => 94,  196 => 89,  192 => 88,  188 => 87,  184 => 86,  180 => 85,  176 => 84,  172 => 83,  168 => 82,  164 => 81,  156 => 76,  152 => 75,  148 => 74,  144 => 73,  140 => 72,  136 => 71,  128 => 66,  124 => 65,  120 => 64,  99 => 46,  88 => 38,  76 => 29,  70 => 26,  66 => 25,  62 => 24,  57 => 22,  52 => 20,  47 => 18,  42 => 16,  37 => 14,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gentelella/general_elements.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/gentelella/general_elements.html.twig");
    }
}
