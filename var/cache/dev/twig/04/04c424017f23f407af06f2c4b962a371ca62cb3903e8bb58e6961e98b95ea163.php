<?php

/* app/pages/typeAccount.html.twig */
class __TwigTemplate_3eb50e5111938cbf730a76af8472baff88ca6b561c357d53e79a8a133ac94200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/base.html.twig", "app/pages/typeAccount.html.twig", 1);
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
        $__internal_1c6e2b72d82ef3b26d6d968daca85544f82286afd9435801750bce95805c7a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6e2b72d82ef3b26d6d968daca85544f82286afd9435801750bce95805c7a8f->enter($__internal_1c6e2b72d82ef3b26d6d968daca85544f82286afd9435801750bce95805c7a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/typeAccount.html.twig"));

        $__internal_6e9ed6d73e8683f03e14629ed30f1686e1b75e50589fe5cf6292d55e3376d4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9ed6d73e8683f03e14629ed30f1686e1b75e50589fe5cf6292d55e3376d4fb->enter($__internal_6e9ed6d73e8683f03e14629ed30f1686e1b75e50589fe5cf6292d55e3376d4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/typeAccount.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c6e2b72d82ef3b26d6d968daca85544f82286afd9435801750bce95805c7a8f->leave($__internal_1c6e2b72d82ef3b26d6d968daca85544f82286afd9435801750bce95805c7a8f_prof);

        
        $__internal_6e9ed6d73e8683f03e14629ed30f1686e1b75e50589fe5cf6292d55e3376d4fb->leave($__internal_6e9ed6d73e8683f03e14629ed30f1686e1b75e50589fe5cf6292d55e3376d4fb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_33d5f97a296cf0fde2056c104dd4bc1610946db358a5e12a2538fe4988fbc83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d5f97a296cf0fde2056c104dd4bc1610946db358a5e12a2538fe4988fbc83b->enter($__internal_33d5f97a296cf0fde2056c104dd4bc1610946db358a5e12a2538fe4988fbc83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76ac8f971bcb385c93521d11b8eda90d2022f9c06c2226605a38fc5524f6e513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ac8f971bcb385c93521d11b8eda90d2022f9c06c2226605a38fc5524f6e513->enter($__internal_76ac8f971bcb385c93521d11b8eda90d2022f9c06c2226605a38fc5524f6e513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <!-- bootstrap-wysiwyg -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/google-code-prettify/bin/prettify.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Select2 -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Switchery -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- starrr -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/starrr/dist/starrr.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-daterangepicker -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
";
        
        $__internal_76ac8f971bcb385c93521d11b8eda90d2022f9c06c2226605a38fc5524f6e513->leave($__internal_76ac8f971bcb385c93521d11b8eda90d2022f9c06c2226605a38fc5524f6e513_prof);

        
        $__internal_33d5f97a296cf0fde2056c104dd4bc1610946db358a5e12a2538fe4988fbc83b->leave($__internal_33d5f97a296cf0fde2056c104dd4bc1610946db358a5e12a2538fe4988fbc83b_prof);

    }

    // line 37
    public function block_top_content_header($context, array $blocks = array())
    {
        $__internal_ebcc220bd707913fd1cd5349fd15b14d57719754d5e857cf5ff330ae13dfc1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcc220bd707913fd1cd5349fd15b14d57719754d5e857cf5ff330ae13dfc1f7->enter($__internal_ebcc220bd707913fd1cd5349fd15b14d57719754d5e857cf5ff330ae13dfc1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        $__internal_09c83696c5a171a429b6cf216acac3b49521a6ef6df47432ff4c438504691046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c83696c5a171a429b6cf216acac3b49521a6ef6df47432ff4c438504691046->enter($__internal_09c83696c5a171a429b6cf216acac3b49521a6ef6df47432ff4c438504691046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        
        $__internal_09c83696c5a171a429b6cf216acac3b49521a6ef6df47432ff4c438504691046->leave($__internal_09c83696c5a171a429b6cf216acac3b49521a6ef6df47432ff4c438504691046_prof);

        
        $__internal_ebcc220bd707913fd1cd5349fd15b14d57719754d5e857cf5ff330ae13dfc1f7->leave($__internal_ebcc220bd707913fd1cd5349fd15b14d57719754d5e857cf5ff330ae13dfc1f7_prof);

    }

    // line 39
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ed39ac71112bef4fb20636e756fb1b8dbc09d45e198b0985fa1b74d008614ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed39ac71112bef4fb20636e756fb1b8dbc09d45e198b0985fa1b74d008614ddb->enter($__internal_ed39ac71112bef4fb20636e756fb1b8dbc09d45e198b0985fa1b74d008614ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_15d000cbd9180877b73882a5551561b2e4a62e5f4a13fa0b3d841400c7981120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d000cbd9180877b73882a5551561b2e4a62e5f4a13fa0b3d841400c7981120->enter($__internal_15d000cbd9180877b73882a5551561b2e4a62e5f4a13fa0b3d841400c7981120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 40
        echo "
<div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Registration</h2>
          
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <br />
          <form method=\"post\" id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\" action=\"form\">
            
            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Type of your new account</label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div id=\"gender\" class=\"btn-group\" data-toggle=\"buttons\">
                  <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                    <input type=\"radio\" name=\"type\" value=\"personal\" required> &nbsp; Personal &nbsp;
                  </label>
                  <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                    <input type=\"radio\" name=\"type\" value=\"business\"> Business
                  </label>
                </div>
              </div>
            </div>

            <div class=\"ln_solid\"></div>
            <div class=\"form-group\">
              <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <button type=\"submit\" class=\"btn btn-success\">Go to registration</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>

";
        
        $__internal_15d000cbd9180877b73882a5551561b2e4a62e5f4a13fa0b3d841400c7981120->leave($__internal_15d000cbd9180877b73882a5551561b2e4a62e5f4a13fa0b3d841400c7981120_prof);

        
        $__internal_ed39ac71112bef4fb20636e756fb1b8dbc09d45e198b0985fa1b74d008614ddb->leave($__internal_ed39ac71112bef4fb20636e756fb1b8dbc09d45e198b0985fa1b74d008614ddb_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f965cf7b7e5f39180a65118cfec2d4f2991c5eccd4cd38c0a29f4fb373bb99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f965cf7b7e5f39180a65118cfec2d4f2991c5eccd4cd38c0a29f4fb373bb99d->enter($__internal_3f965cf7b7e5f39180a65118cfec2d4f2991c5eccd4cd38c0a29f4fb373bb99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_21b1b5fbff55e76032ac85bd3729ccd0195ecfff1724fa9b69e8b9ec9ccb8c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b1b5fbff55e76032ac85bd3729ccd0195ecfff1724fa9b69e8b9ec9ccb8c53->enter($__internal_21b1b5fbff55e76032ac85bd3729ccd0195ecfff1724fa9b69e8b9ec9ccb8c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "    
    ";
        // line 83
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <!-- Chart.js -->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>



    <!-- jQuery -->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <!-- Switchery -->
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Parsley -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Autosize -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
    <!-- starrr -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/starrr/dist/starrr.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_21b1b5fbff55e76032ac85bd3729ccd0195ecfff1724fa9b69e8b9ec9ccb8c53->leave($__internal_21b1b5fbff55e76032ac85bd3729ccd0195ecfff1724fa9b69e8b9ec9ccb8c53_prof);

        
        $__internal_3f965cf7b7e5f39180a65118cfec2d4f2991c5eccd4cd38c0a29f4fb373bb99d->leave($__internal_3f965cf7b7e5f39180a65118cfec2d4f2991c5eccd4cd38c0a29f4fb373bb99d_prof);

    }

    public function getTemplateName()
    {
        return "app/pages/typeAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 155,  405 => 153,  400 => 151,  395 => 149,  390 => 147,  385 => 145,  380 => 143,  375 => 141,  370 => 139,  366 => 138,  362 => 137,  357 => 135,  353 => 134,  348 => 132,  343 => 130,  338 => 128,  333 => 126,  328 => 124,  323 => 122,  315 => 117,  309 => 114,  305 => 113,  300 => 111,  296 => 110,  292 => 109,  287 => 107,  282 => 105,  278 => 104,  274 => 103,  269 => 101,  265 => 100,  261 => 99,  257 => 98,  253 => 97,  248 => 95,  243 => 93,  238 => 91,  233 => 89,  228 => 87,  221 => 83,  218 => 82,  209 => 81,  161 => 40,  152 => 39,  135 => 37,  122 => 33,  116 => 30,  111 => 28,  106 => 26,  101 => 24,  96 => 22,  91 => 20,  86 => 18,  81 => 16,  76 => 14,  71 => 12,  66 => 10,  61 => 8,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
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
    <!-- Bootstrap -->
    <link href=\"{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"{{ asset('assets/vendors/nprogress/nprogress.css') }}\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}\" rel=\"stylesheet\">
    <!-- bootstrap-wysiwyg -->
    <link href=\"{{ asset('assets/vendors/google-code-prettify/bin/prettify.min.css') }}\" rel=\"stylesheet\">
    <!-- Select2 -->
    <link href=\"{{ asset('assets/vendors/select2/dist/css/select2.min.css') }}\" rel=\"stylesheet\">
    <!-- Switchery -->
    <link href=\"{{ asset('assets/vendors/switchery/dist/switchery.min.css') }}\" rel=\"stylesheet\">
    <!-- starrr -->
    <link href=\"{{ asset('assets/vendors/starrr/dist/starrr.css') }}\" rel=\"stylesheet\">
    <!-- bootstrap-daterangepicker -->
    <link href=\"{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"{{ asset('assets/css/custom.min.css') }}\" rel=\"stylesheet\">
    
{% endblock stylesheets %}

{% block top_content_header %}{% endblock top_content_header%}

{% block page_content %}

<div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Registration</h2>
          
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <br />
          <form method=\"post\" id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\" action=\"form\">
            
            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Type of your new account</label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div id=\"gender\" class=\"btn-group\" data-toggle=\"buttons\">
                  <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                    <input type=\"radio\" name=\"type\" value=\"personal\" required> &nbsp; Personal &nbsp;
                  </label>
                  <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                    <input type=\"radio\" name=\"type\" value=\"business\"> Business
                  </label>
                </div>
              </div>
            </div>

            <div class=\"ln_solid\"></div>
            <div class=\"form-group\">
              <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <button type=\"submit\" class=\"btn btn-success\">Go to registration</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>

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



    <!-- jQuery -->
    <script src=\"{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}\"></script>
    <!-- NProgress -->
    <script src=\"{{ asset('assets/vendors/nprogress/nprogress.js') }}\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\"></script>
    <!-- iCheck -->
    <script src=\"{{ asset('assets/vendors/iCheck/icheck.min.js') }}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{ asset('assets/vendors/moment/min/moment.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=\"{{ asset('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/jquery.hotkeys/jquery.hotkeys.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/google-code-prettify/src/prettify.js') }}\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"{{ asset('assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}\"></script>
    <!-- Switchery -->
    <script src=\"{{ asset('assets/vendors/switchery/dist/switchery.min.js') }}\"></script>
    <!-- Select2 -->
    <script src=\"{{ asset('assets/vendors/select2/dist/js/select2.full.min.js') }}\"></script>
    <!-- Parsley -->
    <script src=\"{{ asset('assets/vendors/parsleyjs/dist/parsley.min.js') }}\"></script>
    <!-- Autosize -->
    <script src=\"{{ asset('assets/vendors/autosize/dist/autosize.min.js') }}\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"{{ asset('assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}\"></script>
    <!-- starrr -->
    <script src=\"{{ asset('assets/vendors/starrr/dist/starrr.js') }}\"></script>
    <!-- Custom Theme Scripts -->
    <script src=\"{{ asset('assets/js/custom.min.js') }}\"></script>

{% endblock javascripts %}", "app/pages/typeAccount.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/pages/typeAccount.html.twig");
    }
}
