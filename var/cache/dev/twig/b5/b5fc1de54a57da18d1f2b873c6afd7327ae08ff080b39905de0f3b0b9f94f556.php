<?php

/* app/pages/dashboard.html.twig */
class __TwigTemplate_3567762f59a0670a16543f77ba1de697d531cc290b9bee533987668e5ad9aa4a extends Twig_Template
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
        $__internal_a03a85168a3924433e9c8fe1fe3d1d10ebc6a1c72cb61c972b4099d53b83954d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03a85168a3924433e9c8fe1fe3d1d10ebc6a1c72cb61c972b4099d53b83954d->enter($__internal_a03a85168a3924433e9c8fe1fe3d1d10ebc6a1c72cb61c972b4099d53b83954d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/dashboard.html.twig"));

        $__internal_6f6c54320a6bf1bf94ddbc35cab43e4c0c470cd01db6d40eb5d1ab7337ae6ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6c54320a6bf1bf94ddbc35cab43e4c0c470cd01db6d40eb5d1ab7337ae6ef7->enter($__internal_6f6c54320a6bf1bf94ddbc35cab43e4c0c470cd01db6d40eb5d1ab7337ae6ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03a85168a3924433e9c8fe1fe3d1d10ebc6a1c72cb61c972b4099d53b83954d->leave($__internal_a03a85168a3924433e9c8fe1fe3d1d10ebc6a1c72cb61c972b4099d53b83954d_prof);

        
        $__internal_6f6c54320a6bf1bf94ddbc35cab43e4c0c470cd01db6d40eb5d1ab7337ae6ef7->leave($__internal_6f6c54320a6bf1bf94ddbc35cab43e4c0c470cd01db6d40eb5d1ab7337ae6ef7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_658ee6e36306cfdf8d7df4f7c02b00e65289259d8de3d3d17b5152e635b15bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658ee6e36306cfdf8d7df4f7c02b00e65289259d8de3d3d17b5152e635b15bb3->enter($__internal_658ee6e36306cfdf8d7df4f7c02b00e65289259d8de3d3d17b5152e635b15bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4193e5957d02e6ea1a58669e70e1751c214be4ca21af9ea051cc08bbba713804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4193e5957d02e6ea1a58669e70e1751c214be4ca21af9ea051cc08bbba713804->enter($__internal_4193e5957d02e6ea1a58669e70e1751c214be4ca21af9ea051cc08bbba713804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4193e5957d02e6ea1a58669e70e1751c214be4ca21af9ea051cc08bbba713804->leave($__internal_4193e5957d02e6ea1a58669e70e1751c214be4ca21af9ea051cc08bbba713804_prof);

        
        $__internal_658ee6e36306cfdf8d7df4f7c02b00e65289259d8de3d3d17b5152e635b15bb3->leave($__internal_658ee6e36306cfdf8d7df4f7c02b00e65289259d8de3d3d17b5152e635b15bb3_prof);

    }

    // line 16
    public function block_top_content_header($context, array $blocks = array())
    {
        $__internal_9ab260233bc45de47a9213d947316c2aceec80fa0fe56a4c49a63e2fabd1485c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab260233bc45de47a9213d947316c2aceec80fa0fe56a4c49a63e2fabd1485c->enter($__internal_9ab260233bc45de47a9213d947316c2aceec80fa0fe56a4c49a63e2fabd1485c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        $__internal_d52cd9b526f0fa9398f62f745253932081ddd7dac046e482a2b0411d7f3683c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52cd9b526f0fa9398f62f745253932081ddd7dac046e482a2b0411d7f3683c9->enter($__internal_d52cd9b526f0fa9398f62f745253932081ddd7dac046e482a2b0411d7f3683c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        
        $__internal_d52cd9b526f0fa9398f62f745253932081ddd7dac046e482a2b0411d7f3683c9->leave($__internal_d52cd9b526f0fa9398f62f745253932081ddd7dac046e482a2b0411d7f3683c9_prof);

        
        $__internal_9ab260233bc45de47a9213d947316c2aceec80fa0fe56a4c49a63e2fabd1485c->leave($__internal_9ab260233bc45de47a9213d947316c2aceec80fa0fe56a4c49a63e2fabd1485c_prof);

    }

    // line 18
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a3d58fad89c8910966abf38ebaecf6b051da8900d72cef338ac4dadc3755594e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d58fad89c8910966abf38ebaecf6b051da8900d72cef338ac4dadc3755594e->enter($__internal_a3d58fad89c8910966abf38ebaecf6b051da8900d72cef338ac4dadc3755594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_26ffe99e812bc081f1f18e0ffa41c23e068b8640530192645bbcdf54ff17c43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ffe99e812bc081f1f18e0ffa41c23e068b8640530192645bbcdf54ff17c43c->enter($__internal_26ffe99e812bc081f1f18e0ffa41c23e068b8640530192645bbcdf54ff17c43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                    <table id=\"datatable\" class=\"table table-striped table-bordered\">
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
                          <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "username", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "firstname", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "surName", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "dateBirth", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "type", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "partitaIva", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "categoriaMerceologica", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "codiceAteco", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["account"], "status", array()), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        
        $__internal_26ffe99e812bc081f1f18e0ffa41c23e068b8640530192645bbcdf54ff17c43c->leave($__internal_26ffe99e812bc081f1f18e0ffa41c23e068b8640530192645bbcdf54ff17c43c_prof);

        
        $__internal_a3d58fad89c8910966abf38ebaecf6b051da8900d72cef338ac4dadc3755594e->leave($__internal_a3d58fad89c8910966abf38ebaecf6b051da8900d72cef338ac4dadc3755594e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a0fb9007f98e529abc714a6eac001bdab5f94cc7126338475072cfd53cf20b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0fb9007f98e529abc714a6eac001bdab5f94cc7126338475072cfd53cf20b9->enter($__internal_1a0fb9007f98e529abc714a6eac001bdab5f94cc7126338475072cfd53cf20b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a92674863151239f940ec74ba8a5be819ef2c523299235f928756166ad04d94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92674863151239f940ec74ba8a5be819ef2c523299235f928756166ad04d94c->enter($__internal_a92674863151239f940ec74ba8a5be819ef2c523299235f928756166ad04d94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    
    ";
        // line 79
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <!-- Chart.js -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_a92674863151239f940ec74ba8a5be819ef2c523299235f928756166ad04d94c->leave($__internal_a92674863151239f940ec74ba8a5be819ef2c523299235f928756166ad04d94c_prof);

        
        $__internal_1a0fb9007f98e529abc714a6eac001bdab5f94cc7126338475072cfd53cf20b9->leave($__internal_1a0fb9007f98e529abc714a6eac001bdab5f94cc7126338475072cfd53cf20b9_prof);

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
        return array (  318 => 113,  312 => 110,  308 => 109,  303 => 107,  299 => 106,  295 => 105,  290 => 103,  285 => 101,  281 => 100,  277 => 99,  272 => 97,  268 => 96,  264 => 95,  260 => 94,  256 => 93,  251 => 91,  246 => 89,  241 => 87,  236 => 85,  231 => 83,  224 => 79,  221 => 78,  212 => 77,  189 => 61,  180 => 58,  176 => 57,  172 => 56,  168 => 55,  164 => 54,  160 => 53,  156 => 52,  152 => 51,  148 => 50,  141 => 48,  110 => 19,  101 => 18,  84 => 16,  71 => 12,  66 => 10,  61 => 8,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
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
                    <table id=\"datatable\" class=\"table table-striped table-bordered\">
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
                          <td>{{ account.username }}</td>
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

{% endblock javascripts %}", "app/pages/dashboard.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/pages/dashboard.html.twig");
    }
}
