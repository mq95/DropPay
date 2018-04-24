<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_871942056d0c13a1459c93ac411c41b139795a754189cd09d9b508e5ddb390f2 extends Twig_Template
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
        $__internal_b9bc68afd8a15cac5a4a995191964b9c0279a572ea64cd73bb10a93ff806046c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9bc68afd8a15cac5a4a995191964b9c0279a572ea64cd73bb10a93ff806046c->enter($__internal_b9bc68afd8a15cac5a4a995191964b9c0279a572ea64cd73bb10a93ff806046c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error404.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Gentallela Alela! | </title>

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

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        <!-- page content -->
        <div class=\"col-md-12\">
            <div class=\"col-middle\">
                <div class=\"text-center text-center\">
                    <h1 class=\"error-number\">404</h1>
                    <h2>Sorry but we couldnt find this page</h2>
                    <p>This page you are looking for does not exist <a href=\"#\">Report this?</a>
                    </p>
                    <div class=\"mid_center\">
                        <h3>Search</h3>
                        <form>
                            <div class=\"col-xs-12 form-group pull-right top_search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                      <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\">Go!</button>
                          </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    </div>
</div>

<!-- jQuery -->
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- NProgress -->
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_b9bc68afd8a15cac5a4a995191964b9c0279a572ea64cd73bb10a93ff806046c->leave($__internal_b9bc68afd8a15cac5a4a995191964b9c0279a572ea64cd73bb10a93ff806046c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 59,  95 => 57,  90 => 55,  85 => 53,  47 => 18,  41 => 15,  36 => 13,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error404.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
