<?php

/* gentelella/login.html.twig */
class __TwigTemplate_401e2fdee375753c28aa6398e07e66e48646f1798c9e68c31504634c3d0ccef7 extends Twig_Template
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
        $__internal_2d810aafea9afa145069f49b764901dfdee414460ac8d830339cfc364d21a71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d810aafea9afa145069f49b764901dfdee414460ac8d830339cfc364d21a71c->enter($__internal_2d810aafea9afa145069f49b764901dfdee414460ac8d830339cfc364d21a71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gentelella/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Gentelella Alela! | </title>

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
    <!-- NProgress -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Animate.css -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  </head>

  <body class=\"login\">
    <div>
      <a class=\"hiddenanchor\" id=\"signup\"></a>
      <a class=\"hiddenanchor\" id=\"signin\"></a>

      <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
          <section class=\"login_content\">
            <form>
              <h1>Login Form</h1>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
              </div>
              <div>
                <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
              </div>
              <div>
                <a class=\"btn btn-default submit\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\">Log in</a>
                <a class=\"reset_pass\" href=\"#\">Lost your password?</a>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">New to site?
                  <a href=\"#signup\" class=\"to_register\"> Create Account </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><i class=\"fa fa-paw\"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
          <section class=\"login_content\">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
              </div>
              <div>
                <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
              </div>
              <div>
                <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
              </div>
              <div>
                <a class=\"btn btn-default submit\" href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\">Submit</a>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">Already a member ?
                  <a href=\"#signin\" class=\"to_register\"> Log in </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><i class=\"fa fa-paw\"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
";
        
        $__internal_2d810aafea9afa145069f49b764901dfdee414460ac8d830339cfc364d21a71c->leave($__internal_2d810aafea9afa145069f49b764901dfdee414460ac8d830339cfc364d21a71c_prof);

    }

    public function getTemplateName()
    {
        return "gentelella/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 79,  80 => 42,  57 => 22,  51 => 19,  46 => 17,  41 => 15,  36 => 13,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gentelella/login.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/gentelella/login.html.twig");
    }
}
