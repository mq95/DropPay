<?php

/* gentelella/contacts.html.twig */
class __TwigTemplate_5baca70e4351eb80a4241ae23ca90236ded892bbb8396906db3ce662f64fb15a extends Twig_Template
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
        $__internal_244d912f1b22ad72e48500ea79f9fece9c45d9805f26d126dc6ff26486c3ae96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244d912f1b22ad72e48500ea79f9fece9c45d9805f26d126dc6ff26486c3ae96->enter($__internal_244d912f1b22ad72e48500ea79f9fece9c45d9805f26d126dc6ff26486c3ae96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gentelella/contacts.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Contact Form | Gentelella Alela! by Colorlib</title>

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

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 20
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
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 37
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
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\">Dashboard</a></li>
                      <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index2"));
        echo "\">Dashboard2</a></li>
                      <li><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index3"));
        echo "\">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form"));
        echo "\">General Form</a></li>
                      <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_advanced"));
        echo "\">Advanced Components</a></li>
                      <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_validation"));
        echo "\">Form Validation</a></li>
                      <li><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_wizards"));
        echo "\">Form Wizard</a></li>
                      <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_upload"));
        echo "\">Form Upload</a></li>
                      <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "form_buttons"));
        echo "\">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "general_elements"));
        echo "\">General Elements</a></li>
                      <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "media_gallery"));
        echo "\">Media Gallery</a></li>
                      <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "typography"));
        echo "\">Typography</a></li>
                      <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "icons"));
        echo "\">Icons</a></li>
                      <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "glyphicons"));
        echo "\">Glyphicons</a></li>
                      <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "widgets"));
        echo "\">Widgets</a></li>
                      <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "invoice"));
        echo "\">Invoice</a></li>
                      <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "inbox"));
        echo "\">Inbox</a></li>
                      <li><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "calendar"));
        echo "\">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables"));
        echo "\">Tables</a></li>
                      <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "tables_dynamic"));
        echo "\">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs"));
        echo "\">Chart JS</a></li>
                      <li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "chartjs2"));
        echo "\">Chart JS2</a></li>
                      <li><a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "morisjs"));
        echo "\">Moris JS</a></li>
                      <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "echarts"));
        echo "\">ECharts</a></li>
                      <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "other_charts"));
        echo "\">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "fixed_sidebar"));
        echo "\">Fixed Sidebar</a></li>
                      <li><a href=\"";
        // line 101
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
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "e_commerce"));
        echo "\">E-commerce</a></li>
                      <li><a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "projects"));
        echo "\">Projects</a></li>
                      <li><a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "project_detail"));
        echo "\">Project Detail</a></li>
                      <li><a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "contacts"));
        echo "\">Contacts</a></li>
                      <li><a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "profile"));
        echo "\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_403"));
        echo "\">403 Error</a></li>
                      <li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_404"));
        echo "\">404 Error</a></li>
                      <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "page_500"));
        echo "\">500 Error</a></li>
                      <li><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "plain_page"));
        echo "\">Plain Page</a></li>
                      <li><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "login"));
        echo "\">Login Page</a></li>
                      <li><a href=\"";
        // line 125
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
        // line 133
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
        // line 163
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
        // line 183
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
        // line 195
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
        // line 207
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
        // line 219
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
        // line 231
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
        // line 243
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
                <h3>Contacts Design</h3>
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
                <div class=\"x_panel\">
                  <div class=\"x_content\">
                    <div class=\"row\">
                      <div class=\"col-md-12 col-sm-12 col-xs-12 text-center\">
                        <ul class=\"pagination pagination-split\">
                          <li><a href=\"#\">A</a></li>
                          <li><a href=\"#\">B</a></li>
                          <li><a href=\"#\">C</a></li>
                          <li><a href=\"#\">D</a></li>
                          <li><a href=\"#\">E</a></li>
                          <li>...</li>
                          <li><a href=\"#\">W</a></li>
                          <li><a href=\"#\">X</a></li>
                          <li><a href=\"#\">Y</a></li>
                          <li><a href=\"#\">Z</a></li>
                        </ul>
                      </div>

                      <div class=\"clearfix\"></div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 profile_details\">
                        <div class=\"well profile_view\">
                          <div class=\"col-sm-12\">
                            <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                            <div class=\"left col-xs-7\">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                              <ul class=\"list-unstyled\">
                                <li><i class=\"fa fa-building\"></i> Address: </li>
                                <li><i class=\"fa fa-phone\"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class=\"right col-xs-5 text-center\">
                              <img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle img-responsive\">
                            </div>
                          </div>
                          <div class=\"col-xs-12 bottom text-center\">
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <p class=\"ratings\">
                                <a>4.0</a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star-o\"></span></a>
                              </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                </i> <i class=\"fa fa-comments-o\"></i> </button>
                              <button type=\"button\" class=\"btn btn-primary btn-xs\">
                                <i class=\"fa fa-user\"> </i> View Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 profile_details\">
                        <div class=\"well profile_view\">
                          <div class=\"col-sm-12\">
                            <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                            <div class=\"left col-xs-7\">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class=\"list-unstyled\">
                                <li><i class=\"fa fa-building\"></i> Address: </li>
                                <li><i class=\"fa fa-phone\"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class=\"right col-xs-5 text-center\">
                              <img src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle img-responsive\">
                            </div>
                          </div>
                          <div class=\"col-xs-12 bottom text-center\">
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <p class=\"ratings\">
                                <a>4.0</a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star-o\"></span></a>
                              </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                </i> <i class=\"fa fa-comments-o\"></i> </button>
                              <button type=\"button\" class=\"btn btn-primary btn-xs\">
                                <i class=\"fa fa-user\"> </i> View Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 profile_details\">
                        <div class=\"well profile_view\">
                          <div class=\"col-sm-12\">
                            <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                            <div class=\"left col-xs-7\">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class=\"list-unstyled\">
                                <li><i class=\"fa fa-building\"></i> Address: </li>
                                <li><i class=\"fa fa-phone\"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class=\"right col-xs-5 text-center\">
                              <img src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle img-responsive\">
                            </div>
                          </div>
                          <div class=\"col-xs-12 bottom text-center\">
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <p class=\"ratings\">
                                <a>4.0</a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star-o\"></span></a>
                              </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                </i> <i class=\"fa fa-comments-o\"></i> </button>
                              <button type=\"button\" class=\"btn btn-primary btn-xs\">
                                <i class=\"fa fa-user\"> </i> View Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 profile_details\">
                        <div class=\"well profile_view\">
                          <div class=\"col-sm-12\">
                            <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                            <div class=\"left col-xs-7\">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class=\"list-unstyled\">
                                <li><i class=\"fa fa-building\"></i> Address: </li>
                                <li><i class=\"fa fa-phone\"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class=\"right col-xs-5 text-center\">
                              <img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle img-responsive\">
                            </div>
                          </div>
                          <div class=\"col-xs-12 bottom text-center\">
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <p class=\"ratings\">
                                <a>4.0</a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star-o\"></span></a>
                              </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                </i> <i class=\"fa fa-comments-o\"></i> </button>
                              <button type=\"button\" class=\"btn btn-primary btn-xs\">
                                <i class=\"fa fa-user\"> </i> View Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"col-md-4 col-sm-4 col-xs-12 profile_details\">
                        <div class=\"well profile_view\">
                          <div class=\"col-sm-12\">
                            <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                            <div class=\"left col-xs-7\">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                              <ul class=\"list-unstyled\">
                                <li><i class=\"fa fa-building\"></i> Address: </li>
                                <li><i class=\"fa fa-phone\"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class=\"right col-xs-5 text-center\">
                              <img src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle img-responsive\">
                            </div>
                          </div>
                          <div class=\"col-xs-12 bottom text-center\">
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <p class=\"ratings\">
                                <a>4.0</a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star-o\"></span></a>
                              </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                </i> <i class=\"fa fa-comments-o\"></i> </button>
                              <button type=\"button\" class=\"btn btn-primary btn-xs\">
                                <i class=\"fa fa-user\"> </i> View Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 profile_details\">
                        <div class=\"well profile_view\">
                          <div class=\"col-sm-12\">
                            <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                            <div class=\"left col-xs-7\">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class=\"list-unstyled\">
                                <li><i class=\"fa fa-building\"></i> Address: </li>
                                <li><i class=\"fa fa-phone\"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class=\"right col-xs-5 text-center\">
                              <img src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle img-responsive\">
                            </div>
                          </div>
                          <div class=\"col-xs-12 bottom text-center\">
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <p class=\"ratings\">
                                <a>4.0</a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star-o\"></span></a>
                              </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                </i> <i class=\"fa fa-comments-o\"></i> </button>
                              <button type=\"button\" class=\"btn btn-primary btn-xs\">
                                <i class=\"fa fa-user\"> </i> View Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 profile_details\">
                        <div class=\"well profile_view\">
                          <div class=\"col-sm-12\">
                            <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                            <div class=\"left col-xs-7\">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class=\"list-unstyled\">
                                <li><i class=\"fa fa-building\"></i> Address: </li>
                                <li><i class=\"fa fa-phone\"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class=\"right col-xs-5 text-center\">
                              <img src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle img-responsive\">
                            </div>
                          </div>
                          <div class=\"col-xs-12 bottom text-center\">
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <p class=\"ratings\">
                                <a>4.0</a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star-o\"></span></a>
                              </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                </i> <i class=\"fa fa-comments-o\"></i> </button>
                              <button type=\"button\" class=\"btn btn-primary btn-xs\">
                                <i class=\"fa fa-user\"> </i> View Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 profile_details\">
                        <div class=\"well profile_view\">
                          <div class=\"col-sm-12\">
                            <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                            <div class=\"left col-xs-7\">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class=\"list-unstyled\">
                                <li><i class=\"fa fa-building\"></i> Address: </li>
                                <li><i class=\"fa fa-phone\"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class=\"right col-xs-5 text-center\">
                              <img src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle img-responsive\">
                            </div>
                          </div>
                          <div class=\"col-xs-12 bottom text-center\">
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <p class=\"ratings\">
                                <a>4.0</a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star-o\"></span></a>
                              </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                </i> <i class=\"fa fa-comments-o\"></i> </button>
                              <button type=\"button\" class=\"btn btn-primary btn-xs\">
                                <i class=\"fa fa-user\"> </i> View Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 profile_details\">
                        <div class=\"well profile_view\">
                          <div class=\"col-sm-12\">
                            <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                            <div class=\"left col-xs-7\">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class=\"list-unstyled\">
                                <li><i class=\"fa fa-building\"></i> Address: </li>
                                <li><i class=\"fa fa-phone\"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class=\"right col-xs-5 text-center\">
                              <img src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle img-responsive\">
                            </div>
                          </div>
                          <div class=\"col-xs-12 bottom text-center\">
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <p class=\"ratings\">
                                <a>4.0</a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star-o\"></span></a>
                              </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                </i> <i class=\"fa fa-comments-o\"></i> </button>
                              <button type=\"button\" class=\"btn btn-primary btn-xs\">
                                <i class=\"fa fa-user\"> </i> View Profile
                              </button>
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
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>";
        
        $__internal_244d912f1b22ad72e48500ea79f9fece9c45d9805f26d126dc6ff26486c3ae96->leave($__internal_244d912f1b22ad72e48500ea79f9fece9c45d9805f26d126dc6ff26486c3ae96_prof);

    }

    public function getTemplateName()
    {
        return "gentelella/contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  902 => 684,  896 => 681,  891 => 679,  886 => 677,  881 => 675,  833 => 630,  792 => 592,  751 => 554,  710 => 516,  669 => 478,  628 => 440,  587 => 402,  546 => 364,  505 => 326,  419 => 243,  404 => 231,  389 => 219,  374 => 207,  359 => 195,  344 => 183,  321 => 163,  288 => 133,  277 => 125,  273 => 124,  269 => 123,  265 => 122,  261 => 121,  257 => 120,  249 => 115,  245 => 114,  241 => 113,  237 => 112,  233 => 111,  220 => 101,  216 => 100,  208 => 95,  204 => 94,  200 => 93,  196 => 92,  192 => 91,  184 => 86,  180 => 85,  172 => 80,  168 => 79,  164 => 78,  160 => 77,  156 => 76,  152 => 75,  148 => 74,  144 => 73,  140 => 72,  132 => 67,  128 => 66,  124 => 65,  120 => 64,  116 => 63,  112 => 62,  104 => 57,  100 => 56,  96 => 55,  75 => 37,  64 => 29,  52 => 20,  46 => 17,  41 => 15,  36 => 13,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gentelella/contacts.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/gentelella/contacts.html.twig");
    }
}