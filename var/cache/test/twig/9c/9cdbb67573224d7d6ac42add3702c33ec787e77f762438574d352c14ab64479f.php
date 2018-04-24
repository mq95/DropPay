<?php

/* app/pages/profile.html.twig */
class __TwigTemplate_697040f80aceec0970895b671f5caaf9fc098c238c442c704fa67890eaff4e8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/base.html.twig", "app/pages/profile.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_0170ef4b66e829bbac8388879d264803265f1f348e34575ccda08b1f42b8eda7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0170ef4b66e829bbac8388879d264803265f1f348e34575ccda08b1f42b8eda7->enter($__internal_0170ef4b66e829bbac8388879d264803265f1f348e34575ccda08b1f42b8eda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0170ef4b66e829bbac8388879d264803265f1f348e34575ccda08b1f42b8eda7->leave($__internal_0170ef4b66e829bbac8388879d264803265f1f348e34575ccda08b1f42b8eda7_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_521cf21fad96c3a93123f87ce9b1e74a6605906711e9a3d44914453f8f9fa2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521cf21fad96c3a93123f87ce9b1e74a6605906711e9a3d44914453f8f9fa2eb->enter($__internal_521cf21fad96c3a93123f87ce9b1e74a6605906711e9a3d44914453f8f9fa2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Profile";
        
        $__internal_521cf21fad96c3a93123f87ce9b1e74a6605906711e9a3d44914453f8f9fa2eb->leave($__internal_521cf21fad96c3a93123f87ce9b1e74a6605906711e9a3d44914453f8f9fa2eb_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ae9ab59da005596bbf80b480153f4a06caeb5b30ee40727a4faa644676f5f53e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9ab59da005596bbf80b480153f4a06caeb5b30ee40727a4faa644676f5f53e->enter($__internal_ae9ab59da005596bbf80b480153f4a06caeb5b30ee40727a4faa644676f5f53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "<div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>User Report <small>Activity report</small></h2>
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

                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">

                      <div class=\"profile_img\">

                        <!-- end of image cropping -->
                        <div id=\"crop-avatar\">
                          <!-- Current avatar -->
                          <img class=\"img-responsive avatar-view\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" title=\"Change the avatar\">

                          <!-- Cropping modal -->
                          <div class=\"modal fade\" id=\"avatar-modal\" aria-hidden=\"true\" aria-labelledby=\"avatar-modal-label\" role=\"dialog\" tabindex=\"-1\">
                            <div class=\"modal-dialog modal-lg\">
                              <div class=\"modal-content\">
                                <form class=\"avatar-form\" action=\"crop.php\" enctype=\"multipart/form-data\" method=\"post\">
                                  <div class=\"modal-header\">
                                    <button class=\"close\" data-dismiss=\"modal\" type=\"button\">&times;</button>
                                    <h4 class=\"modal-title\" id=\"avatar-modal-label\">Change Avatar</h4>
                                  </div>
                                  <div class=\"modal-body\">
                                    <div class=\"avatar-body\">

                                      <!-- Upload image and data -->
                                      <div class=\"avatar-upload\">
                                        <input class=\"avatar-src\" name=\"avatar_src\" type=\"hidden\">
                                        <input class=\"avatar-data\" name=\"avatar_data\" type=\"hidden\">
                                        <label for=\"avatarInput\">Local upload</label>
                                        <input class=\"avatar-input\" id=\"avatarInput\" name=\"avatar_file\" type=\"file\">
                                      </div>

                                      <!-- Crop and preview -->
                                      <div class=\"row\">
                                        <div class=\"col-md-9\">
                                          <div class=\"avatar-wrapper\"></div>
                                        </div>
                                        <div class=\"col-md-3\">
                                          <div class=\"avatar-preview preview-lg\"></div>
                                          <div class=\"avatar-preview preview-md\"></div>
                                          <div class=\"avatar-preview preview-sm\"></div>
                                        </div>
                                      </div>

                                      <div class=\"row avatar-btns\">
                                        <div class=\"col-md-9\">
                                          <div class=\"btn-group\">
                                            <button class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"-90\" type=\"button\" title=\"Rotate -90 degrees\">Rotate Left</button>
                                            <button class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"-15\" type=\"button\">-15deg</button>
                                            <button class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"-30\" type=\"button\">-30deg</button>
                                            <button class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"-45\" type=\"button\">-45deg</button>
                                          </div>
                                          <div class=\"btn-group\">
                                            <button class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"90\" type=\"button\" title=\"Rotate 90 degrees\">Rotate Right</button>
                                            <button class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"15\" type=\"button\">15deg</button>
                                            <button class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"30\" type=\"button\">30deg</button>
                                            <button class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"45\" type=\"button\">45deg</button>
                                          </div>
                                        </div>
                                        <div class=\"col-md-3\">
                                          <button class=\"btn btn-primary btn-block avatar-save\" type=\"submit\">Done</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <div class=\"modal-footer\">
                                                    <button class=\"btn btn-default\" data-dismiss=\"modal\" type=\"button\">Close</button>
                                                  </div> -->
                                </form>
                              </div>
                            </div>
                          </div>
                          <!-- /.modal -->

                          <!-- Loading state -->
                          <div class=\"loading\" aria-label=\"Loading\" role=\"img\" tabindex=\"-1\"></div>
                        </div>
                        <!-- end of image cropping -->

                      </div>
                      <h3>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo "</h3>

                      <ul class=\"list-unstyled user_data\">
                        <li><i class=\"fa fa-map-marker user-profile-icon\"></i> San Francisco, California, USA
                        </li>

                        <li>
                          <i class=\"fa fa-briefcase user-profile-icon\"></i> Software Engineer
                        </li>

                        <li class=\"m-top-xs\">
                          <i class=\"fa fa-external-link user-profile-icon\"></i>
                          <a href=\"http://www.kimlabs.com/profile/\" target=\"_blank\">www.kimlabs.com</a>
                        </li>
                      </ul>

                      <a class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Edit Profile</a>
                      <br />

                      <!-- start skills -->
                      <h4>Skills</h4>
                      <ul class=\"list-unstyled user_data\">
                        <li>
                          <p>Web Applications</p>
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"70\"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"30\"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                          </div>
                        </li>
                      </ul>
                      <!-- end of skills -->

                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                      <div class=\"profile_title\">
                        <div class=\"col-md-6\">
                          <h2>User Activity Report</h2>
                        </div>
                        <div class=\"col-md-6\">
                          <div id=\"reportrange\" class=\"pull-right\" style=\"margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED\">
                            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                            <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                          </div>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      <div id=\"graph_bar\" style=\"width:100%; height:280px;\"></div>
                      <!-- end of user-activity-graph -->

                      <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                        <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                          <li role=\"presentation\" class=\"active\"><a href=\"#tab_content1\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Recent Activity</a>
                          </li>
                          <li role=\"presentation\" class=\"\"><a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Projects Worked on</a>
                          </li>
                          <li role=\"presentation\" class=\"\"><a href=\"#tab_content3\" role=\"tab\" id=\"profile-tab2\" data-toggle=\"tab\" aria-expanded=\"false\">Profile</a>
                          </li>
                        </ul>
                        <div id=\"myTabContent\" class=\"tab-content\">
                          <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">

                            <!-- start recent activity -->
                            <ul class=\"messages\">
                              <li>
                                <img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" class=\"avatar\" alt=\"Avatar\">
                                <div class=\"message_date\">
                                  <h3 class=\"date text-info\">24</h3>
                                  <p class=\"month\">May</p>
                                </div>
                                <div class=\"message_wrapper\">
                                  <h4 class=\"heading\">Desmond Davison</h4>
                                  <blockquote class=\"message\">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class=\"url\">
                                    <span class=\"fs1 text-info\" aria-hidden=\"true\" data-icon=\"\"></span>
                                    <a href=\"#\"><i class=\"fa fa-paperclip\"></i> User Acceptance Test.doc </a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" class=\"avatar\" alt=\"Avatar\">
                                <div class=\"message_date\">
                                  <h3 class=\"date text-error\">21</h3>
                                  <p class=\"month\">May</p>
                                </div>
                                <div class=\"message_wrapper\">
                                  <h4 class=\"heading\">Brian Michaels</h4>
                                  <blockquote class=\"message\">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class=\"url\">
                                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                                    <a href=\"#\" data-original-title=\"\">Download</a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" class=\"avatar\" alt=\"Avatar\">
                                <div class=\"message_date\">
                                  <h3 class=\"date text-info\">24</h3>
                                  <p class=\"month\">May</p>
                                </div>
                                <div class=\"message_wrapper\">
                                  <h4 class=\"heading\">Desmond Davison</h4>
                                  <blockquote class=\"message\">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class=\"url\">
                                    <span class=\"fs1 text-info\" aria-hidden=\"true\" data-icon=\"\"></span>
                                    <a href=\"#\"><i class=\"fa fa-paperclip\"></i> User Acceptance Test.doc </a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" class=\"avatar\" alt=\"Avatar\">
                                <div class=\"message_date\">
                                  <h3 class=\"date text-error\">21</h3>
                                  <p class=\"month\">May</p>
                                </div>
                                <div class=\"message_wrapper\">
                                  <h4 class=\"heading\">Brian Michaels</h4>
                                  <blockquote class=\"message\">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class=\"url\">
                                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                                    <a href=\"#\" data-original-title=\"\">Download</a>
                                  </p>
                                </div>
                              </li>

                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">

                            <!-- start user projects -->
                            <table class=\"data table table-striped no-margin\">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Project Name</th>
                                  <th>Client Company</th>
                                  <th class=\"hidden-phone\">Hours Spent</th>
                                  <th>Contribution</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>New Company Takeover Review</td>
                                  <td>Deveint Inc</td>
                                  <td class=\"hidden-phone\">18</td>
                                  <td class=\"vertical-align-mid\">
                                    <div class=\"progress\">
                                      <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"35\"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>New Partner Contracts Consultanci</td>
                                  <td>Deveint Inc</td>
                                  <td class=\"hidden-phone\">13</td>
                                  <td class=\"vertical-align-mid\">
                                    <div class=\"progress\">
                                      <div class=\"progress-bar progress-bar-danger\" data-transitiongoal=\"15\"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Partners and Inverstors report</td>
                                  <td>Deveint Inc</td>
                                  <td class=\"hidden-phone\">30</td>
                                  <td class=\"vertical-align-mid\">
                                    <div class=\"progress\">
                                      <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"45\"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>New Company Takeover Review</td>
                                  <td>Deveint Inc</td>
                                  <td class=\"hidden-phone\">28</td>
                                  <td class=\"vertical-align-mid\">
                                    <div class=\"progress\">
                                      <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"75\"></div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                              photo booth letterpress, commodo enim craft beer mlkshk </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
";
        
        $__internal_ae9ab59da005596bbf80b480153f4a06caeb5b30ee40727a4faa644676f5f53e->leave($__internal_ae9ab59da005596bbf80b480153f4a06caeb5b30ee40727a4faa644676f5f53e_prof);

    }

    // line 333
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de3f17abd4a95f6950be74992755d5e46e759ca5b18d5470bdd4b409f1b7f3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3f17abd4a95f6950be74992755d5e46e759ca5b18d5470bdd4b409f1b7f3f8->enter($__internal_de3f17abd4a95f6950be74992755d5e46e759ca5b18d5470bdd4b409f1b7f3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 334
        echo "  
  ";
        // line 335
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  
    <!-- morris.js -->
    <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>



";
        
        $__internal_de3f17abd4a95f6950be74992755d5e46e759ca5b18d5470bdd4b409f1b7f3f8->leave($__internal_de3f17abd4a95f6950be74992755d5e46e759ca5b18d5470bdd4b409f1b7f3f8_prof);

    }

    public function getTemplateName()
    {
        return "app/pages/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 347,  437 => 344,  433 => 343,  428 => 341,  423 => 339,  419 => 338,  413 => 335,  410 => 334,  404 => 333,  302 => 237,  283 => 221,  264 => 205,  245 => 189,  160 => 107,  87 => 37,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "app/pages/profile.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/pages/profile.html.twig");
    }
}
