<?php

/* app/pages/userDetails.html.twig */
class __TwigTemplate_02216f0182c67f52f49f6b373f66be691ed1ba86902177a48a7ef6c01c248e5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/base.html.twig", "app/pages/userDetails.html.twig", 1);
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
        $__internal_46171ffe76485cb2fd107fb848da883c2c4e15aa1b0d77c93129d62a14142503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46171ffe76485cb2fd107fb848da883c2c4e15aa1b0d77c93129d62a14142503->enter($__internal_46171ffe76485cb2fd107fb848da883c2c4e15aa1b0d77c93129d62a14142503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/userDetails.html.twig"));

        $__internal_072020e5ac884c0e1ee58d3aa4ba90dae28662243ebc74a49ef87021c7da869d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072020e5ac884c0e1ee58d3aa4ba90dae28662243ebc74a49ef87021c7da869d->enter($__internal_072020e5ac884c0e1ee58d3aa4ba90dae28662243ebc74a49ef87021c7da869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/userDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46171ffe76485cb2fd107fb848da883c2c4e15aa1b0d77c93129d62a14142503->leave($__internal_46171ffe76485cb2fd107fb848da883c2c4e15aa1b0d77c93129d62a14142503_prof);

        
        $__internal_072020e5ac884c0e1ee58d3aa4ba90dae28662243ebc74a49ef87021c7da869d->leave($__internal_072020e5ac884c0e1ee58d3aa4ba90dae28662243ebc74a49ef87021c7da869d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dda51e16b139b53f25ed546ac9562c08b13380998902d48ff24b4c7a9d2da18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda51e16b139b53f25ed546ac9562c08b13380998902d48ff24b4c7a9d2da18f->enter($__internal_dda51e16b139b53f25ed546ac9562c08b13380998902d48ff24b4c7a9d2da18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ff2c0db10bbd766179634ed827b667a814e5f5ad6065ffe2e86a83417c50370e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2c0db10bbd766179634ed827b667a814e5f5ad6065ffe2e86a83417c50370e->enter($__internal_ff2c0db10bbd766179634ed827b667a814e5f5ad6065ffe2e86a83417c50370e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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


    <!-- Bootstrap -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-daterangepicker -->
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Ion.RangeSlider -->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/normalize-css/normalize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Bootstrap Colorpicker -->
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/cropper/dist/cropper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- Custom Theme Style -->
    <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
";
        
        $__internal_ff2c0db10bbd766179634ed827b667a814e5f5ad6065ffe2e86a83417c50370e->leave($__internal_ff2c0db10bbd766179634ed827b667a814e5f5ad6065ffe2e86a83417c50370e_prof);

        
        $__internal_dda51e16b139b53f25ed546ac9562c08b13380998902d48ff24b4c7a9d2da18f->leave($__internal_dda51e16b139b53f25ed546ac9562c08b13380998902d48ff24b4c7a9d2da18f_prof);

    }

    // line 56
    public function block_top_content_header($context, array $blocks = array())
    {
        $__internal_9705912b3973c384c5afbc4a0d8bcd4865a49241d05c7e4ed0c41b48f0e76c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9705912b3973c384c5afbc4a0d8bcd4865a49241d05c7e4ed0c41b48f0e76c91->enter($__internal_9705912b3973c384c5afbc4a0d8bcd4865a49241d05c7e4ed0c41b48f0e76c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        $__internal_d63c7cbc3d2ad4f991b9f1b5350414e15182619311cd1fd9f80c486f271fb35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63c7cbc3d2ad4f991b9f1b5350414e15182619311cd1fd9f80c486f271fb35a->enter($__internal_d63c7cbc3d2ad4f991b9f1b5350414e15182619311cd1fd9f80c486f271fb35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        
        $__internal_d63c7cbc3d2ad4f991b9f1b5350414e15182619311cd1fd9f80c486f271fb35a->leave($__internal_d63c7cbc3d2ad4f991b9f1b5350414e15182619311cd1fd9f80c486f271fb35a_prof);

        
        $__internal_9705912b3973c384c5afbc4a0d8bcd4865a49241d05c7e4ed0c41b48f0e76c91->leave($__internal_9705912b3973c384c5afbc4a0d8bcd4865a49241d05c7e4ed0c41b48f0e76c91_prof);

    }

    // line 58
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_52a7cbb3d4cd25242b0479f3de74da9b3dc5bbf42fc979cec39318ccacecd2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a7cbb3d4cd25242b0479f3de74da9b3dc5bbf42fc979cec39318ccacecd2d8->enter($__internal_52a7cbb3d4cd25242b0479f3de74da9b3dc5bbf42fc979cec39318ccacecd2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_4a126c2ad3cfaead3fa4f874d7e7ae3565a0d46c3787f2dff4d288715d372a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a126c2ad3cfaead3fa4f874d7e7ae3565a0d46c3787f2dff4d288715d372a5d->enter($__internal_4a126c2ad3cfaead3fa4f874d7e7ae3565a0d46c3787f2dff4d288715d372a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 59
        echo "

 <!-- page content -->
        
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 66, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo " Profile</h3>
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
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 87, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo " Details</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                      <div class=\"profile_img\">
                        <div id=\"crop-avatar\">

                          <!-- Current avatar -->
                          <img class=\"img-responsive avatar-view\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/assets/uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 97, $this->getSourceContext()); })()), "selfie", array()))), "html", null, true);
        echo "\" alt=\"Avatar\">
                        </div>
                      </div>
                      
<br/>
                      <ul class=\"list-unstyled user_data\">
                         <li><h4>Firstname: </h4>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 103, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "</li>
                         <li><h4>Surname: </h4>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 104, $this->getSourceContext()); })()), "surName", array()), "html", null, true);
        echo "</li>
                         <li><h4>Gender: </h4>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 105, $this->getSourceContext()); })()), "gender", array()), "html", null, true);
        echo "</li>
                         <li><h4>Birthday: </h4>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 106, $this->getSourceContext()); })()), "dateBirth", array()), "html", null, true);
        echo "</li>
                         <li><h4>Type account: </h4> ";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 107, $this->getSourceContext()); })()), "type", array()), "html", null, true);
        echo "</li>

                      </ul>
<br/>
                      <!-- start skills -->
                      <h4>STATUS</h4>
                      <ul class=\"list-unstyled user_data\">
                        <td class=\"project_progress\">
                            <div class=\"progress progress_sm\">
                              <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 116, $this->getSourceContext()); })()), "progress", array()), "html", null, true);
        echo "\"></div>
                            </div>
                            <small>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 118, $this->getSourceContext()); })()), "progress", array()), "html", null, true);
        echo "% Complete</small>
                          </td>
                      </ul>
                      <!-- end of skills -->

                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                      <div class=\"profile_title\">
                        <div class=\"col-md-6\">
                          <h2>User Activity Report</h2>
                        </div>

                        
                      </div>
                      <!-- start of user-activity-graph -->


                      <div>
                        <ol>
                            <li class=\"messages\">
                                <div class=\"message_wrapper\">
                                  <h4 class=\"heading\">Identity Document</h4>
                                  <p class=\"url\">
                                    <a target=\"blank\" href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/assets/uploads/documents/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 142, $this->getSourceContext()); })()), "idDocument", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-file-pdf-o\"></i> Open Identity Document </a>
                                  </p>
                                </div>
                                <br/>
                              </li>

                              <li >
                                <div class=\"profile_img\" >
                                  <h4 class=\"heading\">Signature</h4>
                                     <div class=\"clearfix\"></div>
                                    <img width=\"300\" height=\"300\" class=\"img-responsive avatar-view\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/assets/uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 152, $this->getSourceContext()); })()), "firma", array()))), "html", null, true);
        echo "\" alt=\"Signature\">
                                  
                                </div>
                                <br/>
                              </li>

                              ";
        // line 158
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 158, $this->getSourceContext()); })()), "type", array()) == "business")) {
            // line 159
            echo "
                              <li class=\"messages\">

                                <div class=\"message_wrapper\">
                                  <h4 class=\"heading\">Company Statement Report</h4>
                                  <p class=\"url\">
                                    <a href=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/assets/uploads/documents/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 165, $this->getSourceContext()); })()), "visura", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-file-pdf-o\"></i> Open Company Statement </a>
                                  </p>
                                </div>
                              </li>

                              ";
        }
        // line 171
        echo "

                        </ol>
                          


                      </div>
                      <!-- end of user-activity-graph -->

                      <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                        <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                          <li role=\"presentation\" class=\"active\"><a href=\"#tab_content1\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Back Office Operator - Check ";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 182, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo " status </a>
                          </li>
                        </ul>
                        <div id=\"myTabContent\" class=\"tab-content\">
                          <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">

                            <!-- Start to do list -->
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <div class=\"x_panel\">
                
                <div class=\"x_content\">

                  <div class=\"\">
                    <ul class=\"to_do\">

                  


                    <form method=\"post\"  action=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("checkboxProgress", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 200, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">
                          <li>
                            <p>
                              ";
        // line 203
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["account"] ?? null), "progressBackOffice", array(), "any", false, true), 0, array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 203, $this->getSourceContext()); })()), "progressBackOffice", array()), 0, array()) == "on"))) {
            // line 204
            echo "                              <input id=\"checkbox\" name=\"checkbox[0]\" type=\"checkbox\" class=\"flat\" checked> 
                              ";
        } else {
            // line 206
            echo "                              <input id=\"checkbox\" name=\"checkbox[0]\" type=\"checkbox\" class=\"flat\">
                              ";
        }
        // line 208
        echo "                              Signature 
                            </p>

                          </li>
                      
                      <li>
                        <p>
                          ";
        // line 215
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["account"] ?? null), "progressBackOffice", array(), "any", false, true), 1, array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 215, $this->getSourceContext()); })()), "progressBackOffice", array()), 1, array()) == "on"))) {
            // line 216
            echo "                            <input id=\"checkbox\" name=\"checkbox[1]\" type=\"checkbox\" class=\"flat\" checked> 
                          ";
        } else {
            // line 218
            echo "                             <input id=\"checkbox\" name=\"checkbox[1]\" type=\"checkbox\" class=\"flat\"> 
                          ";
        }
        // line 220
        echo "                          Deadline of the Identity Document
                        </p>
                      </li>
                      <li>
                        <p>
                          ";
        // line 225
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["account"] ?? null), "progressBackOffice", array(), "any", false, true), 2, array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 225, $this->getSourceContext()); })()), "progressBackOffice", array()), 2, array()) == "on"))) {
            // line 226
            echo "                              <input id=\"checkbox\" name=\"checkbox[2]\" type=\"checkbox\" class=\"flat\" checked> 
                          ";
        } else {
            // line 228
            echo "                              <input id=\"checkbox\" name=\"checkbox[2]\" type=\"checkbox\" class=\"flat\">
                          ";
        }
        // line 230
        echo "
                        Personal information </p>
                      </li>
                      <li>
                        <p>
                          ";
        // line 235
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["account"] ?? null), "progressBackOffice", array(), "any", false, true), 3, array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 235, $this->getSourceContext()); })()), "progressBackOffice", array()), 3, array()) == "on"))) {
            // line 236
            echo "                              <input id=\"checkbox\" name=\"checkbox[3]\" type=\"checkbox\" class=\"flat\" checked> 
                              ";
        } else {
            // line 238
            echo "                              <input id=\"checkbox\" name=\"checkbox[3]\" type=\"checkbox\" class=\"flat\">
                              ";
        }
        // line 240
        echo "
                        Selfie and Id Photo</p>
                      </li>

                      ";
        // line 244
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 244, $this->getSourceContext()); })()), "type", array()) == "business")) {
            // line 245
            echo "
                      <li>
                        <p>
                          ";
            // line 248
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["account"] ?? null), "progressBackOffice", array(), "any", false, true), 4, array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 248, $this->getSourceContext()); })()), "progressBackOffice", array()), 4, array()) == "on"))) {
                // line 249
                echo "                              <input id=\"checkbox\" name=\"checkbox[4]\" type=\"checkbox\" class=\"flat\" checked> 
                          ";
            } else {
                // line 251
                echo "                              <input id=\"checkbox\" name=\"checkbox[4]\" type=\"checkbox\" class=\"flat\">
                          ";
            }
            // line 253
            echo "
                        Codice Fiscale</p>
                      </li>
                      <li>
                        <p>
                          ";
            // line 258
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["account"] ?? null), "progressBackOffice", array(), "any", false, true), 5, array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 258, $this->getSourceContext()); })()), "progressBackOffice", array()), 5, array()) == "on"))) {
                // line 259
                echo "                              <input id=\"checkbox\" name=\"checkbox[5]\" type=\"checkbox\" class=\"flat\" checked> 
                          ";
            } else {
                // line 261
                echo "                              <input id=\"checkbox\" name=\"checkbox[5]\" type=\"checkbox\" class=\"flat\">
                          ";
            }
            // line 263
            echo "
                        Deadline of the Company Statement Report </p>
                      </li>

                      <li>
                        <p>
                         ";
            // line 269
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["account"] ?? null), "progressBackOffice", array(), "any", false, true), 6, array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 269, $this->getSourceContext()); })()), "progressBackOffice", array()), 6, array()) == "on"))) {
                // line 270
                echo "                              <input id=\"checkbox\" name=\"checkbox[6]\" type=\"checkbox\" class=\"flat\" checked> 
                          ";
            } else {
                // line 272
                echo "                              <input id=\"checkbox\" name=\"checkbox[6]\" type=\"checkbox\" class=\"flat\">
                          ";
            }
            // line 274
            echo "                        Ateco code</p>
                      </li>
                      
                      <li>
                        <p>
                          ";
            // line 279
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["account"] ?? null), "progressBackOffice", array(), "any", false, true), 7, array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 279, $this->getSourceContext()); })()), "progressBackOffice", array()), 7, array()) == "on"))) {
                // line 280
                echo "                              <input id=\"checkbox\" name=\"checkbox[7]\" type=\"checkbox\" class=\"flat\" checked> 
                          ";
            } else {
                // line 282
                echo "                              <input id=\"checkbox\" name=\"checkbox[7]\" type=\"checkbox\" class=\"flat\">
                          ";
            }
            // line 284
            echo "                        Company Statement All right</p>
                      </li>
                      
                      <li>
                        <p>
                          ";
            // line 289
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["account"] ?? null), "progressBackOffice", array(), "any", false, true), 8, array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 289, $this->getSourceContext()); })()), "progressBackOffice", array()), 8, array()) == "on"))) {
                // line 290
                echo "                              <input id=\"checkbox\" name=\"checkbox[8]\" type=\"checkbox\" class=\"flat\" checked> 
                          ";
            } else {
                // line 292
                echo "                              <input id=\"checkbox\" name=\"checkbox[8]\" type=\"checkbox\" class=\"flat\">
                          ";
            }
            // line 294
            echo "                        Partita Iva</p>
                      </li>
                      
                      <li>
                        <p>
                          ";
            // line 299
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["account"] ?? null), "progressBackOffice", array(), "any", false, true), 9, array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 299, $this->getSourceContext()); })()), "progressBackOffice", array()), 9, array()) == "on"))) {
                // line 300
                echo "                              <input id=\"checkbox\" name=\"checkbox[9]\" type=\"checkbox\" class=\"flat\" checked> 
                          ";
            } else {
                // line 302
                echo "                              <input id=\"checkbox\" name=\"checkbox[9]\" type=\"checkbox\" class=\"flat\">
                          ";
            }
            // line 304
            echo "                        Merchandise category</p>
                      </li>
                                            

                      ";
        }
        // line 309
        echo "
                      <button class=\"btn btn-round btn-default\" type=\"submit\">Save</button>
                    </form>



                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End to do list -->

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
          </div>
        
        <!-- /page content -->







";
        
        $__internal_4a126c2ad3cfaead3fa4f874d7e7ae3565a0d46c3787f2dff4d288715d372a5d->leave($__internal_4a126c2ad3cfaead3fa4f874d7e7ae3565a0d46c3787f2dff4d288715d372a5d_prof);

        
        $__internal_52a7cbb3d4cd25242b0479f3de74da9b3dc5bbf42fc979cec39318ccacecd2d8->leave($__internal_52a7cbb3d4cd25242b0479f3de74da9b3dc5bbf42fc979cec39318ccacecd2d8_prof);

    }

    // line 410
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3952d140314698446240e57d10055bb2478eb24ce4642e32baaf5e65c43f59fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3952d140314698446240e57d10055bb2478eb24ce4642e32baaf5e65c43f59fc->enter($__internal_3952d140314698446240e57d10055bb2478eb24ce4642e32baaf5e65c43f59fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_00df5c714d0ca49a0b1e0ce7d6986953f56cec7700ba3379f30059b6f581176b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00df5c714d0ca49a0b1e0ce7d6986953f56cec7700ba3379f30059b6f581176b->enter($__internal_00df5c714d0ca49a0b1e0ce7d6986953f56cec7700ba3379f30059b6f581176b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 411
        echo "    
    ";
        // line 412
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Chart.js -->
    <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>



    <!-- jQuery -->
    <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <!-- Switchery -->
    <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Parsley -->
    <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Autosize -->
    <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
    <!-- starrr -->
    <script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/starrr/dist/starrr.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery -->
    <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Ion.RangeSlider -->
    <script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Colorpicker -->
    <script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jquery.inputmask -->
    <script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob -->
    <script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Cropper -->
    <script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/cropper/dist/cropper.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.min.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_00df5c714d0ca49a0b1e0ce7d6986953f56cec7700ba3379f30059b6f581176b->leave($__internal_00df5c714d0ca49a0b1e0ce7d6986953f56cec7700ba3379f30059b6f581176b_prof);

        
        $__internal_3952d140314698446240e57d10055bb2478eb24ce4642e32baaf5e65c43f59fc->leave($__internal_3952d140314698446240e57d10055bb2478eb24ce4642e32baaf5e65c43f59fc_prof);

    }

    public function getTemplateName()
    {
        return "app/pages/userDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  956 => 510,  950 => 507,  945 => 505,  940 => 503,  935 => 501,  930 => 499,  925 => 497,  921 => 496,  916 => 494,  911 => 492,  906 => 490,  901 => 488,  895 => 485,  890 => 483,  885 => 481,  880 => 479,  875 => 477,  870 => 475,  865 => 473,  860 => 471,  855 => 469,  851 => 468,  847 => 467,  842 => 465,  838 => 464,  833 => 462,  828 => 460,  823 => 458,  818 => 456,  813 => 454,  808 => 452,  800 => 447,  794 => 444,  790 => 443,  785 => 441,  781 => 440,  777 => 439,  772 => 437,  767 => 435,  763 => 434,  759 => 433,  754 => 431,  750 => 430,  746 => 429,  742 => 428,  738 => 427,  733 => 425,  728 => 423,  723 => 421,  718 => 419,  713 => 417,  707 => 414,  702 => 412,  699 => 411,  690 => 410,  582 => 309,  575 => 304,  571 => 302,  567 => 300,  565 => 299,  558 => 294,  554 => 292,  550 => 290,  548 => 289,  541 => 284,  537 => 282,  533 => 280,  531 => 279,  524 => 274,  520 => 272,  516 => 270,  514 => 269,  506 => 263,  502 => 261,  498 => 259,  496 => 258,  489 => 253,  485 => 251,  481 => 249,  479 => 248,  474 => 245,  472 => 244,  466 => 240,  462 => 238,  458 => 236,  456 => 235,  449 => 230,  445 => 228,  441 => 226,  439 => 225,  432 => 220,  428 => 218,  424 => 216,  422 => 215,  413 => 208,  409 => 206,  405 => 204,  403 => 203,  397 => 200,  376 => 182,  363 => 171,  354 => 165,  346 => 159,  344 => 158,  335 => 152,  322 => 142,  295 => 118,  290 => 116,  278 => 107,  274 => 106,  270 => 105,  266 => 104,  262 => 103,  253 => 97,  240 => 87,  216 => 66,  207 => 59,  198 => 58,  181 => 56,  168 => 52,  161 => 48,  156 => 46,  151 => 44,  147 => 43,  143 => 42,  138 => 40,  133 => 38,  128 => 36,  123 => 34,  116 => 30,  111 => 28,  106 => 26,  101 => 24,  96 => 22,  91 => 20,  86 => 18,  81 => 16,  76 => 14,  71 => 12,  66 => 10,  61 => 8,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
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


    <!-- Bootstrap -->
    <link href=\"{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"{{ asset('assets/vendors/nprogress/nprogress.css') }}\" rel=\"stylesheet\">
    <!-- bootstrap-daterangepicker -->
    <link href=\"{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\">
    <!-- Ion.RangeSlider -->
    <link href=\"{{ asset('assets/vendors/normalize-css/normalize.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css') }}\" rel=\"stylesheet\">
    <!-- Bootstrap Colorpicker -->
    <link href=\"{{ asset('assets/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('assets/vendors/cropper/dist/cropper.min.css') }}\" rel=\"stylesheet\">


    <!-- Custom Theme Style -->
    <link href=\"{{ asset('assets/css/custom.min.css') }}\" rel=\"stylesheet\">
    
{% endblock stylesheets %}

{% block top_content_header %}{% endblock top_content_header%}

{% block page_content %}


 <!-- page content -->
        
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>{{ account.username }} Profile</h3>
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
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>{{ account.username }} Details</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                      <div class=\"profile_img\">
                        <div id=\"crop-avatar\">

                          <!-- Current avatar -->
                          <img class=\"img-responsive avatar-view\" src=\"{{ asset('/assets/uploads/images/' ~ account.selfie) }}\" alt=\"Avatar\">
                        </div>
                      </div>
                      
<br/>
                      <ul class=\"list-unstyled user_data\">
                         <li><h4>Firstname: </h4>{{account.firstname}}</li>
                         <li><h4>Surname: </h4>{{account.surName}}</li>
                         <li><h4>Gender: </h4>{{account.gender}}</li>
                         <li><h4>Birthday: </h4>{{ account.dateBirth}}</li>
                         <li><h4>Type account: </h4> {{account.type}}</li>

                      </ul>
<br/>
                      <!-- start skills -->
                      <h4>STATUS</h4>
                      <ul class=\"list-unstyled user_data\">
                        <td class=\"project_progress\">
                            <div class=\"progress progress_sm\">
                              <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"{{account.progress}}\"></div>
                            </div>
                            <small>{{ account.progress }}% Complete</small>
                          </td>
                      </ul>
                      <!-- end of skills -->

                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                      <div class=\"profile_title\">
                        <div class=\"col-md-6\">
                          <h2>User Activity Report</h2>
                        </div>

                        
                      </div>
                      <!-- start of user-activity-graph -->


                      <div>
                        <ol>
                            <li class=\"messages\">
                                <div class=\"message_wrapper\">
                                  <h4 class=\"heading\">Identity Document</h4>
                                  <p class=\"url\">
                                    <a target=\"blank\" href=\"{{ asset('/assets/uploads/documents/' ~ account.idDocument) }}\"><i class=\"fa fa-file-pdf-o\"></i> Open Identity Document </a>
                                  </p>
                                </div>
                                <br/>
                              </li>

                              <li >
                                <div class=\"profile_img\" >
                                  <h4 class=\"heading\">Signature</h4>
                                     <div class=\"clearfix\"></div>
                                    <img width=\"300\" height=\"300\" class=\"img-responsive avatar-view\" src=\"{{ asset('/assets/uploads/images/' ~ account.firma) }}\" alt=\"Signature\">
                                  
                                </div>
                                <br/>
                              </li>

                              {% if account.type == \"business\" %}

                              <li class=\"messages\">

                                <div class=\"message_wrapper\">
                                  <h4 class=\"heading\">Company Statement Report</h4>
                                  <p class=\"url\">
                                    <a href=\"{{ asset('/assets/uploads/documents/' ~ account.visura) }}\"><i class=\"fa fa-file-pdf-o\"></i> Open Company Statement </a>
                                  </p>
                                </div>
                              </li>

                              {% endif %}


                        </ol>
                          


                      </div>
                      <!-- end of user-activity-graph -->

                      <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                        <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                          <li role=\"presentation\" class=\"active\"><a href=\"#tab_content1\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Back Office Operator - Check {{account.username}} status </a>
                          </li>
                        </ul>
                        <div id=\"myTabContent\" class=\"tab-content\">
                          <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">

                            <!-- Start to do list -->
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <div class=\"x_panel\">
                
                <div class=\"x_content\">

                  <div class=\"\">
                    <ul class=\"to_do\">

                  


                    <form method=\"post\"  action=\"{{path('checkboxProgress', {'id': account.id})}}\">
                          <li>
                            <p>
                              {% if account.progressBackOffice.0 is defined and account.progressBackOffice.0 == \"on\" %}
                              <input id=\"checkbox\" name=\"checkbox[0]\" type=\"checkbox\" class=\"flat\" checked> 
                              {% else %}
                              <input id=\"checkbox\" name=\"checkbox[0]\" type=\"checkbox\" class=\"flat\">
                              {% endif%}
                              Signature 
                            </p>

                          </li>
                      
                      <li>
                        <p>
                          {% if account.progressBackOffice.1 is defined and   account.progressBackOffice.1 == \"on\" %}
                            <input id=\"checkbox\" name=\"checkbox[1]\" type=\"checkbox\" class=\"flat\" checked> 
                          {% else %}
                             <input id=\"checkbox\" name=\"checkbox[1]\" type=\"checkbox\" class=\"flat\"> 
                          {% endif%}
                          Deadline of the Identity Document
                        </p>
                      </li>
                      <li>
                        <p>
                          {% if  account.progressBackOffice.2 is defined and account.progressBackOffice.2 == \"on\" %}
                              <input id=\"checkbox\" name=\"checkbox[2]\" type=\"checkbox\" class=\"flat\" checked> 
                          {% else %}
                              <input id=\"checkbox\" name=\"checkbox[2]\" type=\"checkbox\" class=\"flat\">
                          {% endif%}

                        Personal information </p>
                      </li>
                      <li>
                        <p>
                          {% if  account.progressBackOffice.3 is defined and account.progressBackOffice.3 == \"on\" %}
                              <input id=\"checkbox\" name=\"checkbox[3]\" type=\"checkbox\" class=\"flat\" checked> 
                              {% else %}
                              <input id=\"checkbox\" name=\"checkbox[3]\" type=\"checkbox\" class=\"flat\">
                              {% endif%}

                        Selfie and Id Photo</p>
                      </li>

                      {% if account.type == \"business\" %}

                      <li>
                        <p>
                          {% if  account.progressBackOffice.4 is defined and account.progressBackOffice.4 == \"on\" %}
                              <input id=\"checkbox\" name=\"checkbox[4]\" type=\"checkbox\" class=\"flat\" checked> 
                          {% else %}
                              <input id=\"checkbox\" name=\"checkbox[4]\" type=\"checkbox\" class=\"flat\">
                          {% endif%}

                        Codice Fiscale</p>
                      </li>
                      <li>
                        <p>
                          {% if  account.progressBackOffice.5 is defined and account.progressBackOffice.5 == \"on\" %}
                              <input id=\"checkbox\" name=\"checkbox[5]\" type=\"checkbox\" class=\"flat\" checked> 
                          {% else %}
                              <input id=\"checkbox\" name=\"checkbox[5]\" type=\"checkbox\" class=\"flat\">
                          {% endif%}

                        Deadline of the Company Statement Report </p>
                      </li>

                      <li>
                        <p>
                         {% if  account.progressBackOffice.6 is defined and account.progressBackOffice.6 == \"on\" %}
                              <input id=\"checkbox\" name=\"checkbox[6]\" type=\"checkbox\" class=\"flat\" checked> 
                          {% else %}
                              <input id=\"checkbox\" name=\"checkbox[6]\" type=\"checkbox\" class=\"flat\">
                          {% endif%}
                        Ateco code</p>
                      </li>
                      
                      <li>
                        <p>
                          {% if  account.progressBackOffice.7 is defined and account.progressBackOffice.7 == \"on\" %}
                              <input id=\"checkbox\" name=\"checkbox[7]\" type=\"checkbox\" class=\"flat\" checked> 
                          {% else %}
                              <input id=\"checkbox\" name=\"checkbox[7]\" type=\"checkbox\" class=\"flat\">
                          {% endif%}
                        Company Statement All right</p>
                      </li>
                      
                      <li>
                        <p>
                          {% if  account.progressBackOffice.8 is defined and account.progressBackOffice.8 == \"on\" %}
                              <input id=\"checkbox\" name=\"checkbox[8]\" type=\"checkbox\" class=\"flat\" checked> 
                          {% else %}
                              <input id=\"checkbox\" name=\"checkbox[8]\" type=\"checkbox\" class=\"flat\">
                          {% endif%}
                        Partita Iva</p>
                      </li>
                      
                      <li>
                        <p>
                          {% if  account.progressBackOffice.9 is defined and account.progressBackOffice.9 == \"on\" %}
                              <input id=\"checkbox\" name=\"checkbox[9]\" type=\"checkbox\" class=\"flat\" checked> 
                          {% else %}
                              <input id=\"checkbox\" name=\"checkbox[9]\" type=\"checkbox\" class=\"flat\">
                          {% endif%}
                        Merchandise category</p>
                      </li>
                                            

                      {% endif %}

                      <button class=\"btn btn-round btn-default\" type=\"submit\">Save</button>
                    </form>



                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End to do list -->

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
          </div>
        
        <!-- /page content -->







{% endblock %}


{% block javascripts %}
    
    {{ parent() }}
 <!-- bootstrap-progressbar -->
    <script src=\"{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\"></script>

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

    <!-- jQuery -->
    <script src=\"{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}\"></script>
    <!-- NProgress -->
    <script src=\"{{ asset('assets/vendors/nprogress/nprogress.js') }}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{ asset('assets/vendors/moment/min/moment.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
    <!-- Ion.RangeSlider -->
    <script src=\"{{ asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') }}\"></script>
    <!-- Bootstrap Colorpicker -->
    <script src=\"{{ asset('assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}\"></script>
    <!-- jquery.inputmask -->
    <script src=\"{{ asset('assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') }}\"></script>
    <!-- jQuery Knob -->
    <script src=\"{{ asset('assets/vendors/jquery-knob/dist/jquery.knob.min.js') }}\"></script>
    <!-- Cropper -->
    <script src=\"{{ asset('assets/vendors/cropper/dist/cropper.min.js') }}\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"{{ asset('assets/js/custom.min.js') }}\"></script>


{% endblock javascripts %}", "app/pages/userDetails.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/pages/userDetails.html.twig");
    }
}
