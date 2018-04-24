<?php

/* app/pages/myFormP.html.twig */
class __TwigTemplate_dd113bba82c8eb06cf50e1f5ae3be239c5618ea551867b3237b2d1fec4cfebf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/base.html.twig", "app/pages/myFormP.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'top_content_header' => array($this, 'block_top_content_header'),
            'page_content' => array($this, 'block_page_content'),
            'biz' => array($this, 'block_biz'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f2faee20e699be2da1688a8464356bd816ff11d9ff4049e773acc6e6e7e1a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2faee20e699be2da1688a8464356bd816ff11d9ff4049e773acc6e6e7e1a84->enter($__internal_2f2faee20e699be2da1688a8464356bd816ff11d9ff4049e773acc6e6e7e1a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/myFormP.html.twig"));

        $__internal_7d24dd9a5ca62e1bf79e0526ff3ff3855449c731cc1fe27376102c01b6c2ee53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d24dd9a5ca62e1bf79e0526ff3ff3855449c731cc1fe27376102c01b6c2ee53->enter($__internal_7d24dd9a5ca62e1bf79e0526ff3ff3855449c731cc1fe27376102c01b6c2ee53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/myFormP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f2faee20e699be2da1688a8464356bd816ff11d9ff4049e773acc6e6e7e1a84->leave($__internal_2f2faee20e699be2da1688a8464356bd816ff11d9ff4049e773acc6e6e7e1a84_prof);

        
        $__internal_7d24dd9a5ca62e1bf79e0526ff3ff3855449c731cc1fe27376102c01b6c2ee53->leave($__internal_7d24dd9a5ca62e1bf79e0526ff3ff3855449c731cc1fe27376102c01b6c2ee53_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8feab94fe54e53e58b9c17fc3e7a5cbecfe518ec256067e23f721bed5572c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8feab94fe54e53e58b9c17fc3e7a5cbecfe518ec256067e23f721bed5572c76->enter($__internal_b8feab94fe54e53e58b9c17fc3e7a5cbecfe518ec256067e23f721bed5572c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_abc9751d4d48876a9010b647f1d2cdc3a3da573f992a80430aa1b96aaa81acf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc9751d4d48876a9010b647f1d2cdc3a3da573f992a80430aa1b96aaa81acf1->enter($__internal_abc9751d4d48876a9010b647f1d2cdc3a3da573f992a80430aa1b96aaa81acf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_abc9751d4d48876a9010b647f1d2cdc3a3da573f992a80430aa1b96aaa81acf1->leave($__internal_abc9751d4d48876a9010b647f1d2cdc3a3da573f992a80430aa1b96aaa81acf1_prof);

        
        $__internal_b8feab94fe54e53e58b9c17fc3e7a5cbecfe518ec256067e23f721bed5572c76->leave($__internal_b8feab94fe54e53e58b9c17fc3e7a5cbecfe518ec256067e23f721bed5572c76_prof);

    }

    // line 37
    public function block_top_content_header($context, array $blocks = array())
    {
        $__internal_d78906c0d9664a6df3dc0759b2a436c5a39cfdc878557dbd52ee4128a8de0bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78906c0d9664a6df3dc0759b2a436c5a39cfdc878557dbd52ee4128a8de0bec->enter($__internal_d78906c0d9664a6df3dc0759b2a436c5a39cfdc878557dbd52ee4128a8de0bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        $__internal_32c2a9af063075a695ba28ff57798b1dcd03b4cd71fb699c8d7ae12fbd85687a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c2a9af063075a695ba28ff57798b1dcd03b4cd71fb699c8d7ae12fbd85687a->enter($__internal_32c2a9af063075a695ba28ff57798b1dcd03b4cd71fb699c8d7ae12fbd85687a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        
        $__internal_32c2a9af063075a695ba28ff57798b1dcd03b4cd71fb699c8d7ae12fbd85687a->leave($__internal_32c2a9af063075a695ba28ff57798b1dcd03b4cd71fb699c8d7ae12fbd85687a_prof);

        
        $__internal_d78906c0d9664a6df3dc0759b2a436c5a39cfdc878557dbd52ee4128a8de0bec->leave($__internal_d78906c0d9664a6df3dc0759b2a436c5a39cfdc878557dbd52ee4128a8de0bec_prof);

    }

    // line 39
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_39582743a4b8d715c1c9c64d53636d65e72f7298ef85ba536859a58f8bdeac91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39582743a4b8d715c1c9c64d53636d65e72f7298ef85ba536859a58f8bdeac91->enter($__internal_39582743a4b8d715c1c9c64d53636d65e72f7298ef85ba536859a58f8bdeac91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_495d93f1d0485a41106fa17234a116fa3588aeb57a73c4a5528e81c0cec4bdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495d93f1d0485a41106fa17234a116fa3588aeb57a73c4a5528e81c0cec4bdd0->enter($__internal_495d93f1d0485a41106fa17234a116fa3588aeb57a73c4a5528e81c0cec4bdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
          <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\" action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("store", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 50, $this->getSourceContext()); })()))), "html", null, true);
        echo "\" enctype='multipart/form-data' method=\"POST\">

            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Username <span class=\"required\">*</span>
              </label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input name=\"username\" type=\"text\" id=\"first-name\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Firstname <span class=\"required\">*</span>
              </label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input name=\"firstname\" type=\"text\" id=\"last-name\" name=\"last-name\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
              </div>
            </div>
            <div class=\"form-group\">
              <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Surname</label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input name=\"surname\" id=\"middle-name\" class=\"form-control col-md-7 col-xs-12\" type=\"text\" required>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Gender</label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div id=\"gender\" class=\"btn-group\" data-toggle=\"buttons\">
                  <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                    <input type=\"radio\" name=\"gender\" value=\"male\" required> &nbsp; Male &nbsp;
                  </label>
                  <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                    <input type=\"radio\" name=\"gender\" value=\"female\"> Female
                  </label>
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Date Of Birth <span class=\"required\">*</span>
              </label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input name=\"birthday\" id=\"birthday\" class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"date\">
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"email\">Email * :</label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"email\" id=\"email\" class=\"form-control\" name=\"email\" data-parsley-trigger=\"change\" required />
                </div>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"id\">Identity document * :</label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"file\" id=\"id\" name=\"idDocument\" data-parsley-trigger=\"change\" required />
                </div>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"selfie\">Selfie * :</label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"file\" id=\"selfie\" name=\"selfie\" data-parsley-trigger=\"change\" required />
                </div>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"firma\">Signature * :</label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"file\" id=\"firma\" name=\"firma\" data-parsley-trigger=\"change\" required />
                </div>
            </div>
";
        // line 120
        $this->displayBlock('biz', $context, $blocks);
        // line 123
        echo "            <div class=\"ln_solid\"></div>
            <div class=\"form-group\">
              <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                <button type=\"submit\" class=\"btn btn-success\">Submit</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>

";
        
        $__internal_495d93f1d0485a41106fa17234a116fa3588aeb57a73c4a5528e81c0cec4bdd0->leave($__internal_495d93f1d0485a41106fa17234a116fa3588aeb57a73c4a5528e81c0cec4bdd0_prof);

        
        $__internal_39582743a4b8d715c1c9c64d53636d65e72f7298ef85ba536859a58f8bdeac91->leave($__internal_39582743a4b8d715c1c9c64d53636d65e72f7298ef85ba536859a58f8bdeac91_prof);

    }

    // line 120
    public function block_biz($context, array $blocks = array())
    {
        $__internal_def76fc87a53ef00188b87c3c3ee518505142fb0034f8d226d7077e8bd1c9722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def76fc87a53ef00188b87c3c3ee518505142fb0034f8d226d7077e8bd1c9722->enter($__internal_def76fc87a53ef00188b87c3c3ee518505142fb0034f8d226d7077e8bd1c9722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biz"));

        $__internal_6a92be5f2a93126ece827f54ee5c404f9825b8fe632614aec74a3c899702c67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a92be5f2a93126ece827f54ee5c404f9825b8fe632614aec74a3c899702c67f->enter($__internal_6a92be5f2a93126ece827f54ee5c404f9825b8fe632614aec74a3c899702c67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biz"));

        // line 121
        echo "
";
        
        $__internal_6a92be5f2a93126ece827f54ee5c404f9825b8fe632614aec74a3c899702c67f->leave($__internal_6a92be5f2a93126ece827f54ee5c404f9825b8fe632614aec74a3c899702c67f_prof);

        
        $__internal_def76fc87a53ef00188b87c3c3ee518505142fb0034f8d226d7077e8bd1c9722->leave($__internal_def76fc87a53ef00188b87c3c3ee518505142fb0034f8d226d7077e8bd1c9722_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5934ada4ed9390675c4a6235631238de40155b7f90dd346ff907fb577bcfee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5934ada4ed9390675c4a6235631238de40155b7f90dd346ff907fb577bcfee6->enter($__internal_c5934ada4ed9390675c4a6235631238de40155b7f90dd346ff907fb577bcfee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce131e4fa91009358decc3a641b104791db946e4d25523ce71691e9a009d5980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce131e4fa91009358decc3a641b104791db946e4d25523ce71691e9a009d5980->enter($__internal_ce131e4fa91009358decc3a641b104791db946e4d25523ce71691e9a009d5980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
        echo "    
    ";
        // line 141
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <!-- Chart.js -->
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>



    <!-- jQuery -->
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <!-- Switchery -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Parsley -->
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Autosize -->
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
    <!-- starrr -->
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/starrr/dist/starrr.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_ce131e4fa91009358decc3a641b104791db946e4d25523ce71691e9a009d5980->leave($__internal_ce131e4fa91009358decc3a641b104791db946e4d25523ce71691e9a009d5980_prof);

        
        $__internal_c5934ada4ed9390675c4a6235631238de40155b7f90dd346ff907fb577bcfee6->leave($__internal_c5934ada4ed9390675c4a6235631238de40155b7f90dd346ff907fb577bcfee6_prof);

    }

    public function getTemplateName()
    {
        return "app/pages/myFormP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 213,  488 => 211,  483 => 209,  478 => 207,  473 => 205,  468 => 203,  463 => 201,  458 => 199,  453 => 197,  449 => 196,  445 => 195,  440 => 193,  436 => 192,  431 => 190,  426 => 188,  421 => 186,  416 => 184,  411 => 182,  406 => 180,  398 => 175,  392 => 172,  388 => 171,  383 => 169,  379 => 168,  375 => 167,  370 => 165,  365 => 163,  361 => 162,  357 => 161,  352 => 159,  348 => 158,  344 => 157,  340 => 156,  336 => 155,  331 => 153,  326 => 151,  321 => 149,  316 => 147,  311 => 145,  304 => 141,  301 => 140,  292 => 139,  281 => 121,  272 => 120,  249 => 123,  247 => 120,  174 => 50,  162 => 40,  153 => 39,  136 => 37,  123 => 33,  117 => 30,  112 => 28,  107 => 26,  102 => 24,  97 => 22,  92 => 20,  87 => 18,  82 => 16,  77 => 14,  72 => 12,  67 => 10,  62 => 8,  56 => 5,  53 => 4,  44 => 3,  11 => 1,);
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
          <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\" action=\"{{path('store', {'id': id})}}\" enctype='multipart/form-data' method=\"POST\">

            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Username <span class=\"required\">*</span>
              </label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input name=\"username\" type=\"text\" id=\"first-name\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Firstname <span class=\"required\">*</span>
              </label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input name=\"firstname\" type=\"text\" id=\"last-name\" name=\"last-name\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
              </div>
            </div>
            <div class=\"form-group\">
              <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Surname</label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input name=\"surname\" id=\"middle-name\" class=\"form-control col-md-7 col-xs-12\" type=\"text\" required>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Gender</label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div id=\"gender\" class=\"btn-group\" data-toggle=\"buttons\">
                  <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                    <input type=\"radio\" name=\"gender\" value=\"male\" required> &nbsp; Male &nbsp;
                  </label>
                  <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                    <input type=\"radio\" name=\"gender\" value=\"female\"> Female
                  </label>
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Date Of Birth <span class=\"required\">*</span>
              </label>
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input name=\"birthday\" id=\"birthday\" class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"date\">
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"email\">Email * :</label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"email\" id=\"email\" class=\"form-control\" name=\"email\" data-parsley-trigger=\"change\" required />
                </div>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"id\">Identity document * :</label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"file\" id=\"id\" name=\"idDocument\" data-parsley-trigger=\"change\" required />
                </div>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"selfie\">Selfie * :</label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"file\" id=\"selfie\" name=\"selfie\" data-parsley-trigger=\"change\" required />
                </div>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"firma\">Signature * :</label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"file\" id=\"firma\" name=\"firma\" data-parsley-trigger=\"change\" required />
                </div>
            </div>
{% block biz %}

{% endblock %}
            <div class=\"ln_solid\"></div>
            <div class=\"form-group\">
              <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                <button type=\"submit\" class=\"btn btn-success\">Submit</button>
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

{% endblock javascripts %}", "app/pages/myFormP.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/pages/myFormP.html.twig");
    }
}
