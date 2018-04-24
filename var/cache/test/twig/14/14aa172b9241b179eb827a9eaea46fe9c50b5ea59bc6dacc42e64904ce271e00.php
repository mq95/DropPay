<?php

/* app/pages/dashboard.html.twig */
class __TwigTemplate_18c4aa374b2af830b671f48101f34cabe0dfd885ae7099d05d5772a8946e0be1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/base.html.twig", "app/pages/dashboard.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'top_content_header' => array($this, 'block_top_content_header'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c94a6e2cddbc122b0bcd0021c9cb8a215dc536e8efa7b720187349b5240a670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c94a6e2cddbc122b0bcd0021c9cb8a215dc536e8efa7b720187349b5240a670->enter($__internal_3c94a6e2cddbc122b0bcd0021c9cb8a215dc536e8efa7b720187349b5240a670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c94a6e2cddbc122b0bcd0021c9cb8a215dc536e8efa7b720187349b5240a670->leave($__internal_3c94a6e2cddbc122b0bcd0021c9cb8a215dc536e8efa7b720187349b5240a670_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d913767077208ff26d46ba3a41114deaf5af821017b55a94f3b5bd91bc6f7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d913767077208ff26d46ba3a41114deaf5af821017b55a94f3b5bd91bc6f7f2->enter($__internal_4d913767077208ff26d46ba3a41114deaf5af821017b55a94f3b5bd91bc6f7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- iCheck -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- JQVMap -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    
";
        
        $__internal_4d913767077208ff26d46ba3a41114deaf5af821017b55a94f3b5bd91bc6f7f2->leave($__internal_4d913767077208ff26d46ba3a41114deaf5af821017b55a94f3b5bd91bc6f7f2_prof);

    }

    // line 16
    public function block_top_content_header($context, array $blocks = array())
    {
        $__internal_50ca473b805563487466d9dfa483a35ee4312cf1816ffce2a8be6ec5e96b3a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ca473b805563487466d9dfa483a35ee4312cf1816ffce2a8be6ec5e96b3a8f->enter($__internal_50ca473b805563487466d9dfa483a35ee4312cf1816ffce2a8be6ec5e96b3a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        
        $__internal_50ca473b805563487466d9dfa483a35ee4312cf1816ffce2a8be6ec5e96b3a8f->leave($__internal_50ca473b805563487466d9dfa483a35ee4312cf1816ffce2a8be6ec5e96b3a8f_prof);

    }

    // line 18
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_77b563e69cdfcaf5f199569fa164e6c61dde12ec8ffb1753d4f9ba64e4a026d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b563e69cdfcaf5f199569fa164e6c61dde12ec8ffb1753d4f9ba64e4a026d2->enter($__internal_77b563e69cdfcaf5f199569fa164e6c61dde12ec8ffb1753d4f9ba64e4a026d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 19
        echo "          <!-- top tiles -->
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
        <!-- /page content -->

";
        
        $__internal_77b563e69cdfcaf5f199569fa164e6c61dde12ec8ffb1753d4f9ba64e4a026d2->leave($__internal_77b563e69cdfcaf5f199569fa164e6c61dde12ec8ffb1753d4f9ba64e4a026d2_prof);

    }

    // line 713
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b628795c9199fe7bdbcd1303a385a8af4c929fa47b2518cc562506603be7c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b628795c9199fe7bdbcd1303a385a8af4c929fa47b2518cc562506603be7c96->enter($__internal_8b628795c9199fe7bdbcd1303a385a8af4c929fa47b2518cc562506603be7c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 714
        echo "    
    ";
        // line 715
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <!-- Chart.js -->
    <script src=\"";
        // line 719
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 721
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 743
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_8b628795c9199fe7bdbcd1303a385a8af4c929fa47b2518cc562506603be7c96->leave($__internal_8b628795c9199fe7bdbcd1303a385a8af4c929fa47b2518cc562506603be7c96_prof);

    }

    public function getTemplateName()
    {
        return "app/pages/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  890 => 749,  884 => 746,  880 => 745,  875 => 743,  871 => 742,  867 => 741,  862 => 739,  857 => 737,  853 => 736,  849 => 735,  844 => 733,  840 => 732,  836 => 731,  832 => 730,  828 => 729,  823 => 727,  818 => 725,  813 => 723,  808 => 721,  803 => 719,  796 => 715,  793 => 714,  787 => 713,  89 => 19,  83 => 18,  72 => 16,  62 => 12,  57 => 10,  52 => 8,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "app/pages/dashboard.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/pages/dashboard.html.twig");
    }
}
