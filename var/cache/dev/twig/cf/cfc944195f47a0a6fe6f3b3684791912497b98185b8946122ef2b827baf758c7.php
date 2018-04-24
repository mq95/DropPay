<?php

/* app/base.html.twig */
class __TwigTemplate_d56b3c73f30503ae47be4081dc827789001122012f9e61d88bdbae79fb57c433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'top_content_header' => array($this, 'block_top_content_header'),
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'modals' => array($this, 'block_modals'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5f9b01e493bfdcebc45d488e85a86543f9476936ab6459fc14ead4dd3661f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f9b01e493bfdcebc45d488e85a86543f9476936ab6459fc14ead4dd3661f25->enter($__internal_a5f9b01e493bfdcebc45d488e85a86543f9476936ab6459fc14ead4dd3661f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/base.html.twig"));

        $__internal_d0b32ac11ab4e13b9af60f49d895dd73f5cd5433ddd1fd73aedeabd2fba1e2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b32ac11ab4e13b9af60f49d895dd73f5cd5433ddd1fd73aedeabd2fba1e2b6->enter($__internal_d0b32ac11ab4e13b9af60f49d895dd73f5cd5433ddd1fd73aedeabd2fba1e2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Registration - DropPay</title>

";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    <!-- Custom Theme Style -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">


        ";
        // line 28
        $this->loadTemplate("app/sidebar.html.twig", "app/base.html.twig", 28)->display($context);
        // line 29
        echo "        ";
        $this->loadTemplate("app/topnav.html.twig", "app/base.html.twig", 29)->display($context);
        // line 30
        echo "

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
            <div class=\"\">
                ";
        // line 35
        $this->displayBlock('top_content_header', $context, $blocks);
        // line 53
        echo "
                <div class=\"clearfix\"></div>


                ";
        // line 57
        $this->displayBlock('page_content', $context, $blocks);
        // line 58
        echo "

            </div>
        </div>
        <!-- /page content -->


        ";
        // line 65
        $this->loadTemplate("app/footer.html.twig", "app/base.html.twig", 65)->display($context);
        // line 66
        echo "

    </div>
</div>

";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('modals', $context, $blocks);
        // line 83
        echo "

</body>
</html>
";
        
        $__internal_a5f9b01e493bfdcebc45d488e85a86543f9476936ab6459fc14ead4dd3661f25->leave($__internal_a5f9b01e493bfdcebc45d488e85a86543f9476936ab6459fc14ead4dd3661f25_prof);

        
        $__internal_d0b32ac11ab4e13b9af60f49d895dd73f5cd5433ddd1fd73aedeabd2fba1e2b6->leave($__internal_d0b32ac11ab4e13b9af60f49d895dd73f5cd5433ddd1fd73aedeabd2fba1e2b6_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d8ab010cc07ef62eacd477ace0c37ce57e7f9e815971dc0b7a1628b91819ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8ab010cc07ef62eacd477ace0c37ce57e7f9e815971dc0b7a1628b91819ddf->enter($__internal_8d8ab010cc07ef62eacd477ace0c37ce57e7f9e815971dc0b7a1628b91819ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aff5f96e046bac2e619121513255eaec6a11d17d3adc02010a06eddf681c9cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff5f96e046bac2e619121513255eaec6a11d17d3adc02010a06eddf681c9cd3->enter($__internal_aff5f96e046bac2e619121513255eaec6a11d17d3adc02010a06eddf681c9cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <!-- Bootstrap -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_aff5f96e046bac2e619121513255eaec6a11d17d3adc02010a06eddf681c9cd3->leave($__internal_aff5f96e046bac2e619121513255eaec6a11d17d3adc02010a06eddf681c9cd3_prof);

        
        $__internal_8d8ab010cc07ef62eacd477ace0c37ce57e7f9e815971dc0b7a1628b91819ddf->leave($__internal_8d8ab010cc07ef62eacd477ace0c37ce57e7f9e815971dc0b7a1628b91819ddf_prof);

    }

    // line 35
    public function block_top_content_header($context, array $blocks = array())
    {
        $__internal_99377fa3a24f847ae94a507c356d6d4732c781ecdf07f798fd006324c2f796d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99377fa3a24f847ae94a507c356d6d4732c781ecdf07f798fd006324c2f796d0->enter($__internal_99377fa3a24f847ae94a507c356d6d4732c781ecdf07f798fd006324c2f796d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        $__internal_4c7d420e55c8051adad1809c6cd3e0993d82d68a3d6c65084dc49d2c1bd33fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7d420e55c8051adad1809c6cd3e0993d82d68a3d6c65084dc49d2c1bd33fc7->enter($__internal_4c7d420e55c8051adad1809c6cd3e0993d82d68a3d6c65084dc49d2c1bd33fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        // line 36
        echo "                <div class=\"page-title\">
                    <div class=\"title_left\">
                   <h3>";
        // line 38
        $this->displayBlock('page_title', $context, $blocks);
        echo "</h3>
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
                ";
        
        $__internal_4c7d420e55c8051adad1809c6cd3e0993d82d68a3d6c65084dc49d2c1bd33fc7->leave($__internal_4c7d420e55c8051adad1809c6cd3e0993d82d68a3d6c65084dc49d2c1bd33fc7_prof);

        
        $__internal_99377fa3a24f847ae94a507c356d6d4732c781ecdf07f798fd006324c2f796d0->leave($__internal_99377fa3a24f847ae94a507c356d6d4732c781ecdf07f798fd006324c2f796d0_prof);

    }

    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bc9c34fd70521ba4cb5977cae71c1aaee091a5ab1982bcb034ccb5b33332028e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9c34fd70521ba4cb5977cae71c1aaee091a5ab1982bcb034ccb5b33332028e->enter($__internal_bc9c34fd70521ba4cb5977cae71c1aaee091a5ab1982bcb034ccb5b33332028e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_e7513eca56347a012d7fce941bce3e72d133e68fbe2762fb48872805695526b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7513eca56347a012d7fce941bce3e72d133e68fbe2762fb48872805695526b3->enter($__internal_e7513eca56347a012d7fce941bce3e72d133e68fbe2762fb48872805695526b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_e7513eca56347a012d7fce941bce3e72d133e68fbe2762fb48872805695526b3->leave($__internal_e7513eca56347a012d7fce941bce3e72d133e68fbe2762fb48872805695526b3_prof);

        
        $__internal_bc9c34fd70521ba4cb5977cae71c1aaee091a5ab1982bcb034ccb5b33332028e->leave($__internal_bc9c34fd70521ba4cb5977cae71c1aaee091a5ab1982bcb034ccb5b33332028e_prof);

    }

    // line 57
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a8ebf0d72aba19a7294c5d81ea32f08786b13b41f5d76301eb89706b1b2ebb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ebf0d72aba19a7294c5d81ea32f08786b13b41f5d76301eb89706b1b2ebb02->enter($__internal_a8ebf0d72aba19a7294c5d81ea32f08786b13b41f5d76301eb89706b1b2ebb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_7e471d4ae07d046c12e767f444c2ec60b1276814212f4ce54ca50a503471edec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e471d4ae07d046c12e767f444c2ec60b1276814212f4ce54ca50a503471edec->enter($__internal_7e471d4ae07d046c12e767f444c2ec60b1276814212f4ce54ca50a503471edec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_7e471d4ae07d046c12e767f444c2ec60b1276814212f4ce54ca50a503471edec->leave($__internal_7e471d4ae07d046c12e767f444c2ec60b1276814212f4ce54ca50a503471edec_prof);

        
        $__internal_a8ebf0d72aba19a7294c5d81ea32f08786b13b41f5d76301eb89706b1b2ebb02->leave($__internal_a8ebf0d72aba19a7294c5d81ea32f08786b13b41f5d76301eb89706b1b2ebb02_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2b2c05945c5a0acb2d73cba1f89a94d0e225b4bbf70621cac25c4f1b956f0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b2c05945c5a0acb2d73cba1f89a94d0e225b4bbf70621cac25c4f1b956f0ff->enter($__internal_d2b2c05945c5a0acb2d73cba1f89a94d0e225b4bbf70621cac25c4f1b956f0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e8b3e4464f61fcf0c3fb565c4a5d766ff37ad11d26a18116cccf35b6cadc284d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b3e4464f61fcf0c3fb565c4a5d766ff37ad11d26a18116cccf35b6cadc284d->enter($__internal_e8b3e4464f61fcf0c3fb565c4a5d766ff37ad11d26a18116cccf35b6cadc284d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e8b3e4464f61fcf0c3fb565c4a5d766ff37ad11d26a18116cccf35b6cadc284d->leave($__internal_e8b3e4464f61fcf0c3fb565c4a5d766ff37ad11d26a18116cccf35b6cadc284d_prof);

        
        $__internal_d2b2c05945c5a0acb2d73cba1f89a94d0e225b4bbf70621cac25c4f1b956f0ff->leave($__internal_d2b2c05945c5a0acb2d73cba1f89a94d0e225b4bbf70621cac25c4f1b956f0ff_prof);

    }

    // line 82
    public function block_modals($context, array $blocks = array())
    {
        $__internal_3262a4248129a05e19c9a2a105c7090e84c8fc3f3aa6701517bd8fcc777abdf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3262a4248129a05e19c9a2a105c7090e84c8fc3f3aa6701517bd8fcc777abdf2->enter($__internal_3262a4248129a05e19c9a2a105c7090e84c8fc3f3aa6701517bd8fcc777abdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        $__internal_eb3f5549bd1ea565da6dc1f51ff16e193373347f64777f7a6b764cae6d143ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3f5549bd1ea565da6dc1f51ff16e193373347f64777f7a6b764cae6d143ed5->enter($__internal_eb3f5549bd1ea565da6dc1f51ff16e193373347f64777f7a6b764cae6d143ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        
        $__internal_eb3f5549bd1ea565da6dc1f51ff16e193373347f64777f7a6b764cae6d143ed5->leave($__internal_eb3f5549bd1ea565da6dc1f51ff16e193373347f64777f7a6b764cae6d143ed5_prof);

        
        $__internal_3262a4248129a05e19c9a2a105c7090e84c8fc3f3aa6701517bd8fcc777abdf2->leave($__internal_3262a4248129a05e19c9a2a105c7090e84c8fc3f3aa6701517bd8fcc777abdf2_prof);

    }

    public function getTemplateName()
    {
        return "app/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 82,  250 => 79,  245 => 77,  240 => 75,  235 => 73,  232 => 72,  223 => 71,  206 => 57,  164 => 38,  160 => 36,  151 => 35,  139 => 15,  134 => 13,  131 => 12,  122 => 11,  108 => 83,  106 => 82,  103 => 81,  101 => 71,  94 => 66,  92 => 65,  83 => 58,  81 => 57,  75 => 53,  73 => 35,  66 => 30,  63 => 29,  61 => 28,  49 => 19,  45 => 17,  43 => 11,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Registration - DropPay</title>

{% block stylesheets %}
    <!-- Bootstrap -->
    <link href=\"{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
{% endblock stylesheets %}

    <!-- Custom Theme Style -->
    <link href=\"{{ asset('assets/css/custom.min.css') }}\" rel=\"stylesheet\">

</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">


        {% include 'app/sidebar.html.twig' %}
        {% include 'app/topnav.html.twig' %}


        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
            <div class=\"\">
                {% block top_content_header %}
                <div class=\"page-title\">
                    <div class=\"title_left\">
                   <h3>{% block page_title %}Page Title{% endblock page_title %}</h3>
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
                {% endblock top_content_header %}

                <div class=\"clearfix\"></div>


                {% block page_content %}{% endblock %}


            </div>
        </div>
        <!-- /page content -->


        {% include 'app/footer.html.twig' %}


    </div>
</div>

{% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}\"></script>
    <!-- NProgress -->
    <script src=\"{{ asset('assets/vendors/nprogress/nprogress.js') }}\"></script>
{% endblock javascripts %}

{% block modals %}{% endblock modals %}


</body>
</html>
", "app/base.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/base.html.twig");
    }
}
