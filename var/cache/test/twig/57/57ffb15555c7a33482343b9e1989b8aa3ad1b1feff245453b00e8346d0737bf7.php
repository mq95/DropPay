<?php

/* gentelella/form_advanced.html.twig */
class __TwigTemplate_97ce182c68f2b9c14442abaa1ed9deb1f0f22aa7889074873a26fbe91d2aa571 extends Twig_Template
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
        $__internal_e1c6c8bb3f4df49006b122366ee5575a9efb8c678847278668f4096870498280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c6c8bb3f4df49006b122366ee5575a9efb8c678847278668f4096870498280->enter($__internal_e1c6c8bb3f4df49006b122366ee5575a9efb8c678847278668f4096870498280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gentelella/form_advanced.html.twig"));

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
    <!-- Ion.RangeSlider -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/normalize-css/normalize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Bootstrap Colorpicker -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/cropper/dist/cropper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 30
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
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 47
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
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\">Dashboard</a></li>
                      <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index2"));
        echo "\">Dashboard2</a></li>
                      <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index3"));
        echo "\">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form"));
        echo "\">General Form</a></li>
                      <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_advanced"));
        echo "\">Advanced Components</a></li>
                      <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_validation"));
        echo "\">Form Validation</a></li>
                      <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_wizards"));
        echo "\">Form Wizard</a></li>
                      <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_upload"));
        echo "\">Form Upload</a></li>
                      <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_buttons"));
        echo "\">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "general_elements"));
        echo "\">General Elements</a></li>
                      <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "media_gallery"));
        echo "\">Media Gallery</a></li>
                      <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "typography"));
        echo "\">Typography</a></li>
                      <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "icons"));
        echo "\">Icons</a></li>
                      <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "glyphicons"));
        echo "\">Glyphicons</a></li>
                      <li><a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "widgets"));
        echo "\">Widgets</a></li>
                      <li><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "invoice"));
        echo "\">Invoice</a></li>
                      <li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "inbox"));
        echo "\">Inbox</a></li>
                      <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "calendar"));
        echo "\">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables"));
        echo "\">Tables</a></li>
                      <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables_dynamic"));
        echo "\">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs"));
        echo "\">Chart JS</a></li>
                      <li><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs2"));
        echo "\">Chart JS2</a></li>
                      <li><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "morisjs"));
        echo "\">Moris JS</a></li>
                      <li><a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "echarts"));
        echo "\">ECharts</a></li>
                      <li><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "other_charts"));
        echo "\">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "fixed_sidebar"));
        echo "\">Fixed Sidebar</a></li>
                      <li><a href=\"";
        // line 111
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
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "e_commerce"));
        echo "\">E-commerce</a></li>
                      <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "projects"));
        echo "\">Projects</a></li>
                      <li><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "project_detail"));
        echo "\">Project Detail</a></li>
                      <li><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "contacts"));
        echo "\">Contacts</a></li>
                      <li><a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "profile"));
        echo "\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_403"));
        echo "\">403 Error</a></li>
                      <li><a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_404"));
        echo "\">404 Error</a></li>
                      <li><a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_500"));
        echo "\">500 Error</a></li>
                      <li><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "plain_page"));
        echo "\">Plain Page</a></li>
                      <li><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "login"));
        echo "\">Login Page</a></li>
                      <li><a href=\"";
        // line 135
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
        // line 143
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
        // line 173
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
        // line 193
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
        // line 205
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
        // line 217
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
        // line 229
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
        // line 241
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
        // line 253
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
                <h3>Form advanced</h3>
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
              <!-- form input mask -->
              <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Input Mask</h2>
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
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-3\">Date Mask</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-9\">
                          <input type=\"text\" class=\"form-control\" data-inputmask=\"'mask': '99/99/9999'\">
                          <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-3\">Phone mask</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-9\">
                          <input type=\"text\" class=\"form-control\" data-inputmask=\"'mask' : '(999) 999-9999'\">
                          <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-3\">Custom Mask</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-9\">
                          <input type=\"text\" class=\"form-control\" data-inputmask=\"'mask': '99-999999'\">
                          <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-3\">Serial Number</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-9\">
                          <input type=\"text\" class=\"form-control\" data-inputmask=\"'mask' : '****-****-****-****-****-***'\">
                          <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-3\">TaxID Mask</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-9\">
                          <input type=\"text\" class=\"form-control\" data-inputmask=\"'mask' : '99-99999999'\">
                          <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-3\">Credit Card Mask</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-9\">
                          <input type=\"text\" class=\"form-control\" data-inputmask=\"'mask' : '9999-9999-9999-9999'\">
                          <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
                        </div>
                      </div>
                      <div class=\"ln_solid\"></div>

                      <div class=\"form-group\">
                        <div class=\"col-md-9 col-md-offset-3\">
                          <button type=\"submit\" class=\"btn btn-primary\">Cancel</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /form input mask -->

              <!-- form color picker -->
              <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Color Picker</h2>
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
                          <input type=\"text\" class=\"demo1 form-control\" value=\"#5367ce\" />
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Styled</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <div class=\"input-group demo2\">
                            <input type=\"text\" value=\"#e01ab5\" class=\"form-control\" />
                            <span class=\"input-group-addon\"><i></i></span>
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Horizontal bar</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control demo colorpicker-element\" data-horizontal=\"true\" id=\"demo_forceformat\" value=\"#8fff00\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Vertical bar</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control demo colorpicker-element\" id=\"demo_forceformat3\" value=\"#8fff00\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Inline picker</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <div class=\"well\">
                            <div id=\"demo_cont\" class=\"demo demo-auto inl-bl colorpicker-element\" data-container=\"#demo_cont\" data-color=\"rgba(150,216,62,0.55)\" data-inline=\"true\"></div>
                            <div class=\"demo demo-auto inl-bl colorpicker-element\" data-container=\"true\" data-color=\"rgb(50,216,62)\" data-inline=\"true\" style=\"margin-left:20px;\"></div>
                          </div>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /form color picker -->

              <!-- form input knob -->
              <div class=\"col-md-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Input knob</h2>
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
                    <div class=\"col-md-2\">
                      <p>Display value</p>
                      <input class=\"knob\" data-width=\"100\" data-height=\"120\" data-min=\"-100\" data-displayPrevious=true data-fgColor=\"#26B99A\" value=\"44\">
                    </div>
                    <div class=\"col-md-2\">
                      <p>&#215; 'cursor' mode</p>
                      <input class=\"knob\" data-width=\"100\" data-height=\"120\" data-cursor=true data-fgColor=\"#34495E\" value=\"29\">
                    </div>
                    <div class=\"col-md-2\">
                      <p>Step 0.1</p>
                      <input class=\"knob\" data-width=\"100\" data-height=\"120\" data-min=\"-10000\" data-displayPrevious=true data-fgColor=\"#26B99A\" data-max=\"10000\" data-step=\".1\" value=\"0\">
                    </div>
                    <div class=\"col-md-2\">
                      <p>Angle arc</p>
                      <input class=\"knob\" data-width=\"100\" data-height=\"120\" data-angleOffset=-125 data-angleArc=250 data-fgColor=\"#34495E\" data-rotation=\"anticlockwise\" value=\"35\">
                    </div>
                    <div class=\"col-md-2\">
                      <p>Alternate design</p>
                      <input class=\"knob\" data-width=\"110\" data-height=\"120\" data-displayPrevious=true data-fgColor=\"#26B99A\" data-skin=\"tron\" data-thickness=\".2\" value=\"75\">
                    </div>
                    <div class=\"col-md-2\">
                      <p>Angle offset</p>
                      <input class=\"knob\" data-width=\"100\" data-height=\"120\" data-angleOffset=90 data-linecap=round data-fgColor=\"#26B99A\" value=\"35\">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /form input knob -->

            </div>




            <div class=\"row\">
              <div class=\"col-md-12\">

                <!-- form date pickers -->
                <div class=\"x_panel\" style=\"\">
                  <div class=\"x_title\">
                    <h2>Date Pickers <small> Available with multiple designs</small></h2>
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


                    <div class=\"well\" style=\"overflow: auto\">
                      <div class=\"col-md-4\">
                        <div id=\"reportrange_right\" class=\"pull-left\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc\">
                          <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                          <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                        </div>
                      </div>
                      <div class=\"col-md-4\">
                        <p>Date Range Picker with opening to right and left</p>
                      </div>
                      <div class=\"col-md-4\">
                        <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc\">
                          <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                          <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                        </div>
                      </div>
                    </div>


                    <div class=\"well\" style=\"overflow: auto\">
                      <div class=\"col-md-4\">
                        Date Range Picker
                        <form class=\"form-horizontal\">
                          <fieldset>
                            <div class=\"control-group\">
                              <div class=\"controls\">
                                <div class=\"input-prepend input-group\">
                                  <span class=\"add-on input-group-addon\"><i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i></span>
                                  <input type=\"text\" style=\"width: 200px\" name=\"reservation\" id=\"reservation\" class=\"form-control\" value=\"01/01/2016 - 01/25/2016\" />
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>

                      <div class=\"col-md-5\">
                        Date and Time
                        <form class=\"form-horizontal\">
                          <fieldset>
                            <div class=\"control-group\">
                              <div class=\"controls\">
                                <div class=\"input-prepend input-group\">
                                  <span class=\"add-on input-group-addon\"><i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i></span>
                                  <input type=\"text\" name=\"reservation-time\" id=\"reservation-time\" class=\"form-control\" value=\"01/01/2016 - 01/25/2016\" />
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                    </div>

                    <div class=\"row calendar-exibit\">
                      <div class=\"col-md-3\">
                       <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_1 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>


                        <fieldset>
                          <div class=\"control-group\">
                            <div class=\"controls\">
                              <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal1\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status\">
                                <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                <span id=\"inputSuccess2Status\" class=\"sr-only\">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>

                      </div>

                      <div class=\"col-md-3\">
                         <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_2 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>


                        <fieldset>
                          <div class=\"control-group\">
                            <div class=\"controls\">
                              <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal2\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status2\">
                                <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                <span id=\"inputSuccess2Status2\" class=\"sr-only\">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class=\"col-md-3\">
                         <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_3 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>

                        <fieldset>
                          <div class=\"control-group\">
                            <div class=\"controls\">
                              <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal3\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status3\">
                                <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                <span id=\"inputSuccess2Status3\" class=\"sr-only\">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class=\"col-md-3\">
                         <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_4 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>


                        <fieldset>
                          <div class=\"control-group\">
                            <div class=\"controls\">
                              <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal4\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status4\">
                                <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                <span id=\"inputSuccess2Status4\" class=\"sr-only\">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- /form datepicker -->


                <!-- form grid slider -->
                <div class=\"x_panel\" style=\"\">
                  <div class=\"x_title\">
                    <h2>Grid Slider</h2>
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
                    <div class=\"row grid_slider\">

                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <p>Default grid slider with min and max values</p>
                        <input type=\"text\" id=\"range\" value=\"\" name=\"range\" />
                      </div>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <p>Grid with slider labels are far away outside it's container</p>
                        <input type=\"text\" id=\"range_25\" value=\"\" name=\"range\" />
                      </div>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <p>Grid with labels inside container using force_edges attribute</p>
                        <input type=\"text\" id=\"range_27\" value=\"\" name=\"range\" />
                      </div>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <p>Create Grid with pre-defined steps</p>
                        <input type=\"text\" id=\"range_26\" value=\"\" name=\"range\" />
                      </div>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <p>Prevent one from dragging the labels</p>
                        <input type=\"text\" id=\"range_31\" value=\"\" name=\"range\" />
                      </div>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <p>Grid with minimum and maximum values</p>
                        <input type=\"text\" class=\"range_min_max\" value=\"\" name=\"range\" />
                      </div>
                      <div>
                        <p>Grid With time in 24 hour format</p>
                        <input type=\"text\" class=\"range_time24\" value=\"\" name=\"range\" />
                      </div>
                    </div>
                  </div>
                </div>
                <br />
                <br />
                <!-- /form grid slider -->

                <!-- image cropping -->
                <div class=\"container cropper\">
                  <div class=\"row\">
                    <div class=\"col-md-9\">
                      <div class=\"img-container\">
                        <img id=\"image\" src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/cropper.jpg"), "html", null, true);
        echo "\" alt=\"Picture\">
                      </div>
                    </div>
                    <div class=\"col-md-3\">
                      <div class=\"docs-preview clearfix\">
                        <div class=\"img-preview preview-lg\"></div>
                        <div class=\"img-preview preview-md\"></div>
                        <div class=\"img-preview preview-sm\"></div>
                        <div class=\"img-preview preview-xs\"></div>
                      </div>

                      <div class=\"docs-data\">
                        <div class=\"input-group input-group-sm\">
                          <label class=\"input-group-addon\" for=\"dataX\">X</label>
                          <input type=\"text\" class=\"form-control\" id=\"dataX\" placeholder=\"x\">
                          <span class=\"input-group-addon\">px</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
                          <label class=\"input-group-addon\" for=\"dataY\">Y</label>
                          <input type=\"text\" class=\"form-control\" id=\"dataY\" placeholder=\"y\">
                          <span class=\"input-group-addon\">px</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
                          <label class=\"input-group-addon\" for=\"dataWidth\">Width</label>
                          <input type=\"text\" class=\"form-control\" id=\"dataWidth\" placeholder=\"width\">
                          <span class=\"input-group-addon\">px</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
                          <label class=\"input-group-addon\" for=\"dataHeight\">Height</label>
                          <input type=\"text\" class=\"form-control\" id=\"dataHeight\" placeholder=\"height\">
                          <span class=\"input-group-addon\">px</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
                          <label class=\"input-group-addon\" for=\"dataRotate\">Rotate</label>
                          <input type=\"text\" class=\"form-control\" id=\"dataRotate\" placeholder=\"rotate\">
                          <span class=\"input-group-addon\">deg</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
                          <label class=\"input-group-addon\" for=\"dataScaleX\">ScaleX</label>
                          <input type=\"text\" class=\"form-control\" id=\"dataScaleX\" placeholder=\"scaleX\">
                        </div>
                        <div class=\"input-group input-group-sm\">
                          <label class=\"input-group-addon\" for=\"dataScaleY\">ScaleY</label>
                          <input type=\"text\" class=\"form-control\" id=\"dataScaleY\" placeholder=\"scaleY\">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-md-9 docs-buttons\">
                      <!-- <h3 class=\"page-header\">Toolbar:</h3> -->
                      <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"setDragMode\" data-option=\"move\" title=\"Move\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)\">
                            <span class=\"fa fa-arrows\"></span>
                          </span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"setDragMode\" data-option=\"crop\" title=\"Crop\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)\">
                            <span class=\"fa fa-crop\"></span>
                          </span>
                        </button>
                      </div>

                      <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"zoom\" data-option=\"0.1\" title=\"Zoom In\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;zoom&quot;, 0.1)\">
                            <span class=\"fa fa-search-plus\"></span>
                          </span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"zoom\" data-option=\"-0.1\" title=\"Zoom Out\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;zoom&quot;, -0.1)\">
                            <span class=\"fa fa-search-minus\"></span>
                          </span>
                        </button>
                      </div>

                      <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"-10\" data-second-option=\"0\" title=\"Move Left\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;move&quot;, -10, 0)\">
                            <span class=\"fa fa-arrow-left\"></span>
                          </span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"10\" data-second-option=\"0\" title=\"Move Right\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;move&quot;, 10, 0)\">
                            <span class=\"fa fa-arrow-right\"></span>
                          </span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"0\" data-second-option=\"-10\" title=\"Move Up\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;move&quot;, 0, -10)\">
                            <span class=\"fa fa-arrow-up\"></span>
                          </span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"0\" data-second-option=\"10\" title=\"Move Down\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;move&quot;, 0, 10)\">
                            <span class=\"fa fa-arrow-down\"></span>
                          </span>
                        </button>
                      </div>

                      <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"-45\" title=\"Rotate Left\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;rotate&quot;, -45)\">
                            <span class=\"fa fa-rotate-left\"></span>
                          </span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"45\" title=\"Rotate Right\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;rotate&quot;, 45)\">
                            <span class=\"fa fa-rotate-right\"></span>
                          </span>
                        </button>
                      </div>

                      <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"scaleX\" data-option=\"-1\" title=\"Flip Horizontal\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;scaleX&quot;, -1)\">
                            <span class=\"fa fa-arrows-h\"></span>
                          </span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"scaleY\" data-option=\"-1\" title=\"Flip Vertical\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;scaleY&quot;, -1)\">
                            <span class=\"fa fa-arrows-v\"></span>
                          </span>
                        </button>
                      </div>

                      <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"crop\" title=\"Crop\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;crop&quot;)\">
                            <span class=\"fa fa-check\"></span>
                          </span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"clear\" title=\"Clear\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;clear&quot;)\">
                            <span class=\"fa fa-remove\"></span>
                          </span>
                        </button>
                      </div>

                      <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"disable\" title=\"Disable\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;disable&quot;)\">
                            <span class=\"fa fa-lock\"></span>
                          </span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"enable\" title=\"Enable\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;enable&quot;)\">
                            <span class=\"fa fa-unlock\"></span>
                          </span>
                        </button>
                      </div>

                      <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"reset\" title=\"Reset\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;reset&quot;)\">
                            <span class=\"fa fa-refresh\"></span>
                          </span>
                        </button>
                        <label class=\"btn btn-primary btn-upload\" for=\"inputImage\" title=\"Upload image file\">
                          <input type=\"file\" class=\"sr-only\" id=\"inputImage\" name=\"file\" accept=\"image/*\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"Import image with Blob URLs\">
                            <span class=\"fa fa-upload\"></span>
                          </span>
                        </label>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"destroy\" title=\"Destroy\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;destroy&quot;)\">
                            <span class=\"fa fa-power-off\"></span>
                          </span>
                        </button>
                      </div>

                      <div class=\"btn-group btn-group-crop\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"getCroppedCanvas\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;getCroppedCanvas&quot;)\">
                            Get Cropped Canvas
                          </span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"getCroppedCanvas\" data-option=\"{ &quot;width&quot;: 160, &quot;height&quot;: 90 }\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })\">
                            160&times;90
                          </span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"getCroppedCanvas\" data-option=\"{ &quot;width&quot;: 320, &quot;height&quot;: 180 }\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })\">
                            320&times;180
                          </span>
                        </button>
                      </div>

                      <!-- Show the cropped image in modal -->
                      <div class=\"modal fade docs-cropped\" id=\"getCroppedCanvasModal\" aria-hidden=\"true\" aria-labelledby=\"getCroppedCanvasTitle\" role=\"dialog\" tabindex=\"-1\">
                        <div class=\"modal-dialog\">
                          <div class=\"modal-content\">
                            <div class=\"modal-header\">
                              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                              <h4 class=\"modal-title\" id=\"getCroppedCanvasTitle\">Cropped</h4>
                            </div>
                            <div class=\"modal-body\"></div>
                            <div class=\"modal-footer\">
                              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                              <a class=\"btn btn-primary\" id=\"download\" href=\"javascript:void(0);\" download=\"cropped.png\">Download</a>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.modal -->

                      <button type=\"button\" class=\"btn btn-primary\" data-method=\"getData\" data-option data-target=\"#putData\">
                        <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;getData&quot;)\">
                          Get Data
                        </span>
                      </button>
                      <button type=\"button\" class=\"btn btn-primary\" data-method=\"setData\" data-target=\"#putData\">
                        <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;setData&quot;, data)\">
                          Set Data
                        </span>
                      </button>
                      <button type=\"button\" class=\"btn btn-primary\" data-method=\"getContainerData\" data-option data-target=\"#putData\">
                        <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;getContainerData&quot;)\">
                          Get Container Data
                        </span>
                      </button>
                      <button type=\"button\" class=\"btn btn-primary\" data-method=\"getImageData\" data-option data-target=\"#putData\">
                        <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;getImageData&quot;)\">
                          Get Image Data
                        </span>
                      </button>
                      <button type=\"button\" class=\"btn btn-primary\" data-method=\"getCanvasData\" data-option data-target=\"#putData\">
                        <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;getCanvasData&quot;)\">
                          Get Canvas Data
                        </span>
                      </button>
                      <button type=\"button\" class=\"btn btn-primary\" data-method=\"setCanvasData\" data-target=\"#putData\">
                        <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;setCanvasData&quot;, data)\">
                          Set Canvas Data
                        </span>
                      </button>
                      <button type=\"button\" class=\"btn btn-primary\" data-method=\"getCropBoxData\" data-option data-target=\"#putData\">
                        <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;getCropBoxData&quot;)\">
                          Get Crop Box Data
                        </span>
                      </button>
                      <button type=\"button\" class=\"btn btn-primary\" data-method=\"setCropBoxData\" data-target=\"#putData\">
                        <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"\$().cropper(&quot;setCropBoxData&quot;, data)\">
                          Set Crop Box Data
                        </span>
                      </button>
                      <button type=\"button\" class=\"btn btn-primary\" data-method=\"moveTo\" data-option=\"0\">
                        <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.moveTo(0)\">
                          0,0
                        </span>
                      </button>
                      <button type=\"button\" class=\"btn btn-primary\" data-method=\"zoomTo\" data-option=\"1\">
                        <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.zoomTo(1)\">
                          100%
                        </span>
                      </button>
                      <button type=\"button\" class=\"btn btn-primary\" data-method=\"rotateTo\" data-option=\"180\">
                        <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.rotateTo(180)\">
                          180°
                        </span>
                      </button>
                      <input type=\"text\" class=\"form-control\" id=\"putData\" placeholder=\"Get data to here or set data with this value\">
                    </div><!-- /.docs-buttons -->

                    <div class=\"col-md-3 docs-toggles\">
                      <!-- <h3 class=\"page-header\">Toggles:</h3> -->
                      <div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">
                        <label class=\"btn btn-primary active\">
                          <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio0\" name=\"aspectRatio\" value=\"1.7777777777777777\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 16 / 9\">
                            16:9
                          </span>
                        </label>
                        <label class=\"btn btn-primary\">
                          <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio1\" name=\"aspectRatio\" value=\"1.3333333333333333\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 4 / 3\">
                            4:3
                          </span>
                        </label>
                        <label class=\"btn btn-primary\">
                          <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio2\" name=\"aspectRatio\" value=\"1\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 1 / 1\">
                            1:1
                          </span>
                        </label>
                        <label class=\"btn btn-primary\">
                          <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio3\" name=\"aspectRatio\" value=\"0.6666666666666666\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 2 / 3\">
                            2:3
                          </span>
                        </label>
                        <label class=\"btn btn-primary\">
                          <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio4\" name=\"aspectRatio\" value=\"NaN\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: NaN\">
                            Free
                          </span>
                        </label>
                      </div>

                      <div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">
                        <label class=\"btn btn-primary active\">
                          <input type=\"radio\" class=\"sr-only\" id=\"viewMode0\" name=\"viewMode\" value=\"0\" checked>
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 0\">
                            VM0
                          </span>
                        </label>
                        <label class=\"btn btn-primary\">
                          <input type=\"radio\" class=\"sr-only\" id=\"viewMode1\" name=\"viewMode\" value=\"1\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 1\">
                            VM1
                          </span>
                        </label>
                        <label class=\"btn btn-primary\">
                          <input type=\"radio\" class=\"sr-only\" id=\"viewMode2\" name=\"viewMode\" value=\"2\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 2\">
                            VM2
                          </span>
                        </label>
                        <label class=\"btn btn-primary\">
                          <input type=\"radio\" class=\"sr-only\" id=\"viewMode3\" name=\"viewMode\" value=\"3\">
                          <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 3\">
                            VM3
                          </span>
                        </label>
                      </div>

                      <div class=\"dropdown dropup docs-options\">
                        <button type=\"button\" class=\"btn btn-primary btn-block dropdown-toggle\" id=\"toggleOptions\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                          Toggle Options
                          <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"toggleOptions\" role=\"menu\">
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"responsive\" checked>
                              responsive
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"restore\" checked>
                              restore
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"checkCrossOrigin\" checked>
                              checkCrossOrigin
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"checkOrientation\" checked>
                              checkOrientation
                            </label>
                          </li>

                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"modal\" checked>
                              modal
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"guides\" checked>
                              guides
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"center\" checked>
                              center
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"highlight\" checked>
                              highlight
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"background\" checked>
                              background
                            </label>
                          </li>

                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"autoCrop\" checked>
                              autoCrop
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"movable\" checked>
                              movable
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"rotatable\" checked>
                              rotatable
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"scalable\" checked>
                              scalable
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"zoomable\" checked>
                              zoomable
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"zoomOnTouch\" checked>
                              zoomOnTouch
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"zoomOnWheel\" checked>
                              zoomOnWheel
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"cropBoxMovable\" checked>
                              cropBoxMovable
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"cropBoxResizable\" checked>
                              cropBoxResizable
                            </label>
                          </li>
                          <li role=\"presentation\">
                            <label class=\"checkbox-inline\">
                              <input type=\"checkbox\" name=\"toggleDragModeOnDblclick\" checked>
                              toggleDragModeOnDblclick
                            </label>
                          </li>
                        </ul>
                      </div><!-- /.dropdown -->

                      <a class=\"btn btn-default btn-block\" data-toggle=\"tooltip\" href=\"https://fengyuanchen.github.io/cropperjs\" title=\"Cropper without jQuery\">Cropper.js</a>

                    </div><!-- /.docs-toggles -->
                  </div>
                </div>
                <!-- /image cropping -->
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
        // line 1205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 1207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 1209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 1211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 1213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Ion.RangeSlider -->
    <script src=\"";
        // line 1216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Colorpicker -->
    <script src=\"";
        // line 1218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jquery.inputmask -->
    <script src=\"";
        // line 1220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob -->
    <script src=\"";
        // line 1222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Cropper -->
    <script src=\"";
        // line 1224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/cropper/dist/cropper.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 1227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
        
        $__internal_e1c6c8bb3f4df49006b122366ee5575a9efb8c678847278668f4096870498280->leave($__internal_e1c6c8bb3f4df49006b122366ee5575a9efb8c678847278668f4096870498280_prof);

    }

    public function getTemplateName()
    {
        return "gentelella/form_advanced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1460 => 1227,  1454 => 1224,  1449 => 1222,  1444 => 1220,  1439 => 1218,  1434 => 1216,  1429 => 1214,  1425 => 1213,  1420 => 1211,  1415 => 1209,  1410 => 1207,  1405 => 1205,  927 => 730,  447 => 253,  432 => 241,  417 => 229,  402 => 217,  387 => 205,  372 => 193,  349 => 173,  316 => 143,  305 => 135,  301 => 134,  297 => 133,  293 => 132,  289 => 131,  285 => 130,  277 => 125,  273 => 124,  269 => 123,  265 => 122,  261 => 121,  248 => 111,  244 => 110,  236 => 105,  232 => 104,  228 => 103,  224 => 102,  220 => 101,  212 => 96,  208 => 95,  200 => 90,  196 => 89,  192 => 88,  188 => 87,  184 => 86,  180 => 85,  176 => 84,  172 => 83,  168 => 82,  160 => 77,  156 => 76,  152 => 75,  148 => 74,  144 => 73,  140 => 72,  132 => 67,  128 => 66,  124 => 65,  103 => 47,  92 => 39,  80 => 30,  74 => 27,  69 => 25,  64 => 23,  60 => 22,  56 => 21,  51 => 19,  46 => 17,  41 => 15,  36 => 13,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gentelella/form_advanced.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/gentelella/form_advanced.html.twig");
    }
}
