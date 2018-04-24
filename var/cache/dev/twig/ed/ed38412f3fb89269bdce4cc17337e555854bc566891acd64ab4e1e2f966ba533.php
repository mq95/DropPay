<?php

/* app/pages/backOffice.html.twig */
class __TwigTemplate_df2e81c4ac86b1d78cf35f2d42d77b0811f482ede042e884ecf5fdea49c1123a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/base.html.twig", "app/pages/backOffice.html.twig", 1);
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
        $__internal_c58a7bde0d6e0dde61926d5bf752aac47078df8a302c85081f61fb85e16e41a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58a7bde0d6e0dde61926d5bf752aac47078df8a302c85081f61fb85e16e41a9->enter($__internal_c58a7bde0d6e0dde61926d5bf752aac47078df8a302c85081f61fb85e16e41a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/backOffice.html.twig"));

        $__internal_51b3f4d4a06805615d3a5915db9f1ae51672e023255add5adbcc5978db874fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b3f4d4a06805615d3a5915db9f1ae51672e023255add5adbcc5978db874fcb->enter($__internal_51b3f4d4a06805615d3a5915db9f1ae51672e023255add5adbcc5978db874fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/backOffice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58a7bde0d6e0dde61926d5bf752aac47078df8a302c85081f61fb85e16e41a9->leave($__internal_c58a7bde0d6e0dde61926d5bf752aac47078df8a302c85081f61fb85e16e41a9_prof);

        
        $__internal_51b3f4d4a06805615d3a5915db9f1ae51672e023255add5adbcc5978db874fcb->leave($__internal_51b3f4d4a06805615d3a5915db9f1ae51672e023255add5adbcc5978db874fcb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0db93cf64e08d22d9fceb0cb4d28f54cb8686849f25a88f0acad8ee73ea33ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db93cf64e08d22d9fceb0cb4d28f54cb8686849f25a88f0acad8ee73ea33ccc->enter($__internal_0db93cf64e08d22d9fceb0cb4d28f54cb8686849f25a88f0acad8ee73ea33ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4b3d3b52671da6a432753019335a395ebbddd7f9845e75aa0fe81a6c67985873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3d3b52671da6a432753019335a395ebbddd7f9845e75aa0fe81a6c67985873->enter($__internal_4b3d3b52671da6a432753019335a395ebbddd7f9845e75aa0fe81a6c67985873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4b3d3b52671da6a432753019335a395ebbddd7f9845e75aa0fe81a6c67985873->leave($__internal_4b3d3b52671da6a432753019335a395ebbddd7f9845e75aa0fe81a6c67985873_prof);

        
        $__internal_0db93cf64e08d22d9fceb0cb4d28f54cb8686849f25a88f0acad8ee73ea33ccc->leave($__internal_0db93cf64e08d22d9fceb0cb4d28f54cb8686849f25a88f0acad8ee73ea33ccc_prof);

    }

    // line 16
    public function block_top_content_header($context, array $blocks = array())
    {
        $__internal_b6cb328f438aa2db5ab5849a28a482df5e315fa8cb0ddca6ad4ae2b4bd7ec144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6cb328f438aa2db5ab5849a28a482df5e315fa8cb0ddca6ad4ae2b4bd7ec144->enter($__internal_b6cb328f438aa2db5ab5849a28a482df5e315fa8cb0ddca6ad4ae2b4bd7ec144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        $__internal_3304c3a312f3e7464ec04a33fbeb3a641d99cf46598b4bd9fb96b1b3d877a884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3304c3a312f3e7464ec04a33fbeb3a641d99cf46598b4bd9fb96b1b3d877a884->enter($__internal_3304c3a312f3e7464ec04a33fbeb3a641d99cf46598b4bd9fb96b1b3d877a884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        
        $__internal_3304c3a312f3e7464ec04a33fbeb3a641d99cf46598b4bd9fb96b1b3d877a884->leave($__internal_3304c3a312f3e7464ec04a33fbeb3a641d99cf46598b4bd9fb96b1b3d877a884_prof);

        
        $__internal_b6cb328f438aa2db5ab5849a28a482df5e315fa8cb0ddca6ad4ae2b4bd7ec144->leave($__internal_b6cb328f438aa2db5ab5849a28a482df5e315fa8cb0ddca6ad4ae2b4bd7ec144_prof);

    }

    // line 18
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d2d1ddf53b5ee1be3bbeda50f32c665d551e6ab82ecd2e06c55371fa6dd1578d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d1ddf53b5ee1be3bbeda50f32c665d551e6ab82ecd2e06c55371fa6dd1578d->enter($__internal_d2d1ddf53b5ee1be3bbeda50f32c665d551e6ab82ecd2e06c55371fa6dd1578d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_3c6e820723555bca0fd02af4a647a9f588e8307dc88b0570733b0ff8f400978c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6e820723555bca0fd02af4a647a9f588e8307dc88b0570733b0ff8f400978c->enter($__internal_3c6e820723555bca0fd02af4a647a9f588e8307dc88b0570733b0ff8f400978c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 19
        echo "
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"dashboard_graph\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>User Status</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <p class=\"text-muted font-13 m-b-30\">
                    List of accounts that did the registration. Here you can see the status of the registration.
                    </p>
                    <table id=\"amlTable\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Firstname</th>
                          <th>Surname</th>
                          <th>Date of Birth</th>
                          <th>Type of account</th>
                          <th>VAT number</th> <!--PARTITA IVA-->
                          <th>Merchandise category</th>
                          <th>Ateco code</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new Twig_Error_Runtime('Variable "accounts" does not exist.', 48, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            echo " <!--\$accounts ci è stato passato da app_homepage nel file GentelellaController.php--> 
               
                          <tr>
                            <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userDetails", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "id", array()))), "html", null, true);
            echo "\"><span class=\"fa fa-user\"></span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "username", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "firstname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "surName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "dateBirth", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "type", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "partitaIva", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "categoriaMerceologica", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "codiceAteco", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "status", array()), "html", null, true);
            echo "</td>
                          </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              </div>
            </div>

          </div>
          <br />


";
        
        $__internal_3c6e820723555bca0fd02af4a647a9f588e8307dc88b0570733b0ff8f400978c->leave($__internal_3c6e820723555bca0fd02af4a647a9f588e8307dc88b0570733b0ff8f400978c_prof);

        
        $__internal_d2d1ddf53b5ee1be3bbeda50f32c665d551e6ab82ecd2e06c55371fa6dd1578d->leave($__internal_d2d1ddf53b5ee1be3bbeda50f32c665d551e6ab82ecd2e06c55371fa6dd1578d_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b9e6bb754436ccca2db77dcd19c93a12a4cf03cf5638d837eae083e0b379875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9e6bb754436ccca2db77dcd19c93a12a4cf03cf5638d837eae083e0b379875->enter($__internal_6b9e6bb754436ccca2db77dcd19c93a12a4cf03cf5638d837eae083e0b379875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6c03e537ef4cb31033d873713ed75ab865e442858b9baeee906c8676ee397f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c03e537ef4cb31033d873713ed75ab865e442858b9baeee906c8676ee397f1a->enter($__internal_6c03e537ef4cb31033d873713ed75ab865e442858b9baeee906c8676ee397f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    
    ";
        // line 81
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <!-- Chart.js -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6c03e537ef4cb31033d873713ed75ab865e442858b9baeee906c8676ee397f1a->leave($__internal_6c03e537ef4cb31033d873713ed75ab865e442858b9baeee906c8676ee397f1a_prof);

        
        $__internal_6b9e6bb754436ccca2db77dcd19c93a12a4cf03cf5638d837eae083e0b379875->leave($__internal_6b9e6bb754436ccca2db77dcd19c93a12a4cf03cf5638d837eae083e0b379875_prof);

    }

    public function getTemplateName()
    {
        return "app/pages/backOffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 115,  316 => 112,  312 => 111,  307 => 109,  303 => 108,  299 => 107,  294 => 105,  289 => 103,  285 => 102,  281 => 101,  276 => 99,  272 => 98,  268 => 97,  264 => 96,  260 => 95,  255 => 93,  250 => 91,  245 => 89,  240 => 87,  235 => 85,  228 => 81,  225 => 80,  216 => 79,  193 => 63,  183 => 59,  179 => 58,  175 => 57,  171 => 56,  167 => 55,  163 => 54,  159 => 53,  155 => 52,  149 => 51,  141 => 48,  110 => 19,  101 => 18,  84 => 16,  71 => 12,  66 => 10,  61 => 8,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"app/base.html.twig\" %}

{% block stylesheets %}

    {{ parent() }}

    <!-- iCheck -->
    <link href=\"{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}\" rel=\"stylesheet\">
    <!-- bootstrap-progressbar -->
    <link href=\"{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}\" rel=\"stylesheet\">
    <!-- JQVMap -->
    <link href=\"{{ asset('assets/vendors/jqvmap/dist/jqvmap.min.css') }}\" rel=\"stylesheet\"/>
    
{% endblock stylesheets %}

{% block top_content_header %}{% endblock top_content_header%}

{% block page_content %}

          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"dashboard_graph\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>User Status</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <p class=\"text-muted font-13 m-b-30\">
                    List of accounts that did the registration. Here you can see the status of the registration.
                    </p>
                    <table id=\"amlTable\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Firstname</th>
                          <th>Surname</th>
                          <th>Date of Birth</th>
                          <th>Type of account</th>
                          <th>VAT number</th> <!--PARTITA IVA-->
                          <th>Merchandise category</th>
                          <th>Ateco code</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        {% for account in accounts %} <!--\$accounts ci è stato passato da app_homepage nel file GentelellaController.php--> 
               
                          <tr>
                            <td><a href=\"{{ path('userDetails', {'id': account.id})}}\"><span class=\"fa fa-user\"></span> {{ account.username }}</a></td>
                            <td>{{ account.firstname }}</td>
                            <td>{{ account.surName }}</td>
                            <td>{{ account.dateBirth }}</td>
                            <td>{{ account.type }}</td>
                            <td>{{ account.partitaIva }}</td>
                            <td>{{ account.categoriaMerceologica }}</td>
                            <td>{{ account.codiceAteco }}</td>
                            <td>{{ account.status}}</td>
                          </tr>

                        {% endfor %}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              </div>
            </div>

          </div>
          <br />


{% endblock %}


{% block javascripts %}
    
    {{ parent() }}


    <!-- Chart.js -->
    <script src=\"{{ asset('assets/vendors/Chart.js/dist/Chart.min.js') }}\"></script>
    <!-- gauge.js -->
    <script src=\"{{ asset('assets/vendors/gauge.js/dist/gauge.min.js') }}\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\"></script>
    <!-- iCheck -->
    <script src=\"{{ asset('assets/vendors/iCheck/icheck.min.js') }}\"></script>
    <!-- Skycons -->
    <script src=\"{{ asset('assets/vendors/skycons/skycons.js') }}\"></script>
    <!-- Flot -->
    <script src=\"{{ asset('assets/vendors/flot/jquery.flot.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/flot/jquery.flot.pie.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/flot/jquery.flot.time.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/flot/jquery.flot.stack.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/flot/jquery.flot.resize.js') }}\"></script>
    <!-- Flot plugins -->
    <script src=\"{{ asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/flot.curvedlines/curvedLines.js') }}\"></script>
    <!-- DateJS -->
    <script src=\"{{ asset('assets/vendors/DateJS/build/date.js') }}\"></script>
    <!-- JQVMap -->
    <script src=\"{{ asset('assets/vendors/jqvmap/dist/jquery.vmap.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{ asset('assets/vendors/moment/min/moment.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"{{ asset('assets/js/custom.js') }}\"></script>

{% endblock javascripts %}", "app/pages/backOffice.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/pages/backOffice.html.twig");
    }
}
