<?php

/* app/email/successMail.html.twig */
class __TwigTemplate_34e0e62ed82e2816a05053765f32b8dcfededf04c8e3981e4177dcce630b0c40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/base.html.twig", "app/email/successMail.html.twig", 1);
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
        $__internal_04743a2cbe5f11ac75c60abf485432f3210cdb137917361fd4c0e1d2b51dbad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04743a2cbe5f11ac75c60abf485432f3210cdb137917361fd4c0e1d2b51dbad0->enter($__internal_04743a2cbe5f11ac75c60abf485432f3210cdb137917361fd4c0e1d2b51dbad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/email/successMail.html.twig"));

        $__internal_7029c05b43fcf9ae5b768067f29165f5ab97f5d852c51ef45f76439e6fb11b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7029c05b43fcf9ae5b768067f29165f5ab97f5d852c51ef45f76439e6fb11b8e->enter($__internal_7029c05b43fcf9ae5b768067f29165f5ab97f5d852c51ef45f76439e6fb11b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/email/successMail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04743a2cbe5f11ac75c60abf485432f3210cdb137917361fd4c0e1d2b51dbad0->leave($__internal_04743a2cbe5f11ac75c60abf485432f3210cdb137917361fd4c0e1d2b51dbad0_prof);

        
        $__internal_7029c05b43fcf9ae5b768067f29165f5ab97f5d852c51ef45f76439e6fb11b8e->leave($__internal_7029c05b43fcf9ae5b768067f29165f5ab97f5d852c51ef45f76439e6fb11b8e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37ca9b227ec7d66df48270473bedf2c2f6c5149fb1c9ac14e853e446fb0e1384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ca9b227ec7d66df48270473bedf2c2f6c5149fb1c9ac14e853e446fb0e1384->enter($__internal_37ca9b227ec7d66df48270473bedf2c2f6c5149fb1c9ac14e853e446fb0e1384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_045408e61e36d51fd67f230853c363b1975576c3f14c3100be107e73e257571e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045408e61e36d51fd67f230853c363b1975576c3f14c3100be107e73e257571e->enter($__internal_045408e61e36d51fd67f230853c363b1975576c3f14c3100be107e73e257571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_045408e61e36d51fd67f230853c363b1975576c3f14c3100be107e73e257571e->leave($__internal_045408e61e36d51fd67f230853c363b1975576c3f14c3100be107e73e257571e_prof);

        
        $__internal_37ca9b227ec7d66df48270473bedf2c2f6c5149fb1c9ac14e853e446fb0e1384->leave($__internal_37ca9b227ec7d66df48270473bedf2c2f6c5149fb1c9ac14e853e446fb0e1384_prof);

    }

    // line 37
    public function block_top_content_header($context, array $blocks = array())
    {
        $__internal_1e28f8d70c5ca83620d07f9e3869cde62ad61b3f68448cf8fc6e288371a97566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e28f8d70c5ca83620d07f9e3869cde62ad61b3f68448cf8fc6e288371a97566->enter($__internal_1e28f8d70c5ca83620d07f9e3869cde62ad61b3f68448cf8fc6e288371a97566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        $__internal_7c8fea871b59869679f102d17875958ed815d6b8b9e8673037c9119d41daccaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8fea871b59869679f102d17875958ed815d6b8b9e8673037c9119d41daccaf->enter($__internal_7c8fea871b59869679f102d17875958ed815d6b8b9e8673037c9119d41daccaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        
        $__internal_7c8fea871b59869679f102d17875958ed815d6b8b9e8673037c9119d41daccaf->leave($__internal_7c8fea871b59869679f102d17875958ed815d6b8b9e8673037c9119d41daccaf_prof);

        
        $__internal_1e28f8d70c5ca83620d07f9e3869cde62ad61b3f68448cf8fc6e288371a97566->leave($__internal_1e28f8d70c5ca83620d07f9e3869cde62ad61b3f68448cf8fc6e288371a97566_prof);

    }

    // line 39
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fa7eea8979ffd8b3e575ee4fbed854a0043286e1f4262a012f814aa2efbf381f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7eea8979ffd8b3e575ee4fbed854a0043286e1f4262a012f814aa2efbf381f->enter($__internal_fa7eea8979ffd8b3e575ee4fbed854a0043286e1f4262a012f814aa2efbf381f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_d0858805f3dfd27165ec0d1c5ab4cc29df0272ced12c292336368b494e06f352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0858805f3dfd27165ec0d1c5ab4cc29df0272ced12c292336368b494e06f352->enter($__internal_d0858805f3dfd27165ec0d1c5ab4cc29df0272ced12c292336368b494e06f352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 40
        echo "
<div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          E-mail checked. 
          Now you have to wait the AML check.
          We will inform you by another email.
<div class=\"clearfix\"></div>
          <a href=\"/\" class=\"btn btn-success\">Homepage</a>
              
      </div>
    </div>

";
        
        $__internal_d0858805f3dfd27165ec0d1c5ab4cc29df0272ced12c292336368b494e06f352->leave($__internal_d0858805f3dfd27165ec0d1c5ab4cc29df0272ced12c292336368b494e06f352_prof);

        
        $__internal_fa7eea8979ffd8b3e575ee4fbed854a0043286e1f4262a012f814aa2efbf381f->leave($__internal_fa7eea8979ffd8b3e575ee4fbed854a0043286e1f4262a012f814aa2efbf381f_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_548c36f0555f7180bd5d16a464753a86d2d426d7fb3f8ee0847325099837e0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548c36f0555f7180bd5d16a464753a86d2d426d7fb3f8ee0847325099837e0ec->enter($__internal_548c36f0555f7180bd5d16a464753a86d2d426d7fb3f8ee0847325099837e0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e9f4877ecb3d752874871743de470d60f237a0199a0010cf107bfd9fe6fcfc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f4877ecb3d752874871743de470d60f237a0199a0010cf107bfd9fe6fcfc08->enter($__internal_e9f4877ecb3d752874871743de470d60f237a0199a0010cf107bfd9fe6fcfc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    
    ";
        // line 58
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <!-- Chart.js -->
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>



    <!-- jQuery -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
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
    <!-- bootstrap-wysiwyg -->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <!-- Switchery -->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Parsley -->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Autosize -->
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
    <!-- starrr -->
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/starrr/dist/starrr.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_e9f4877ecb3d752874871743de470d60f237a0199a0010cf107bfd9fe6fcfc08->leave($__internal_e9f4877ecb3d752874871743de470d60f237a0199a0010cf107bfd9fe6fcfc08_prof);

        
        $__internal_548c36f0555f7180bd5d16a464753a86d2d426d7fb3f8ee0847325099837e0ec->leave($__internal_548c36f0555f7180bd5d16a464753a86d2d426d7fb3f8ee0847325099837e0ec_prof);

    }

    public function getTemplateName()
    {
        return "app/email/successMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 130,  380 => 128,  375 => 126,  370 => 124,  365 => 122,  360 => 120,  355 => 118,  350 => 116,  345 => 114,  341 => 113,  337 => 112,  332 => 110,  328 => 109,  323 => 107,  318 => 105,  313 => 103,  308 => 101,  303 => 99,  298 => 97,  290 => 92,  284 => 89,  280 => 88,  275 => 86,  271 => 85,  267 => 84,  262 => 82,  257 => 80,  253 => 79,  249 => 78,  244 => 76,  240 => 75,  236 => 74,  232 => 73,  228 => 72,  223 => 70,  218 => 68,  213 => 66,  208 => 64,  203 => 62,  196 => 58,  193 => 57,  184 => 56,  161 => 40,  152 => 39,  135 => 37,  122 => 33,  116 => 30,  111 => 28,  106 => 26,  101 => 24,  96 => 22,  91 => 20,  86 => 18,  81 => 16,  76 => 14,  71 => 12,  66 => 10,  61 => 8,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
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
          E-mail checked. 
          Now you have to wait the AML check.
          We will inform you by another email.
<div class=\"clearfix\"></div>
          <a href=\"/\" class=\"btn btn-success\">Homepage</a>
              
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

{% endblock javascripts %}", "app/email/successMail.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/email/successMail.html.twig");
    }
}
