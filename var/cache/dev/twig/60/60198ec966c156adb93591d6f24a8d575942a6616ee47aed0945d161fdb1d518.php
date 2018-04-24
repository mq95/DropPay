<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_02a43a8f19ebf517752e5446b8c3dd297a3950d8fcfdb80952413f6d0696f301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d5eecbf4db070550eaa6ece2dfce224be738dee40cfaa8b54cc0b1029d5d817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5eecbf4db070550eaa6ece2dfce224be738dee40cfaa8b54cc0b1029d5d817->enter($__internal_9d5eecbf4db070550eaa6ece2dfce224be738dee40cfaa8b54cc0b1029d5d817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_5156392b2522cf6420e09b077c14944bdff027372e56405036f420189ebbb0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5156392b2522cf6420e09b077c14944bdff027372e56405036f420189ebbb0ce->enter($__internal_5156392b2522cf6420e09b077c14944bdff027372e56405036f420189ebbb0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>DropPay Registration</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Animate.css -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  </head>

  <body class=\"login\">
        ";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "  </body>
</html>";
        
        $__internal_9d5eecbf4db070550eaa6ece2dfce224be738dee40cfaa8b54cc0b1029d5d817->leave($__internal_9d5eecbf4db070550eaa6ece2dfce224be738dee40cfaa8b54cc0b1029d5d817_prof);

        
        $__internal_5156392b2522cf6420e09b077c14944bdff027372e56405036f420189ebbb0ce->leave($__internal_5156392b2522cf6420e09b077c14944bdff027372e56405036f420189ebbb0ce_prof);

    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5d78e56c815f8d1a28c365da0043270c2f79e8ea16f585cad60dc28e828abcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d78e56c815f8d1a28c365da0043270c2f79e8ea16f585cad60dc28e828abcf->enter($__internal_f5d78e56c815f8d1a28c365da0043270c2f79e8ea16f585cad60dc28e828abcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dd05857945b25a593577459f442ec9bbde21f80eaee1a7faeeea66b2d15f27e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd05857945b25a593577459f442ec9bbde21f80eaee1a7faeeea66b2d15f27e3->enter($__internal_dd05857945b25a593577459f442ec9bbde21f80eaee1a7faeeea66b2d15f27e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_dd05857945b25a593577459f442ec9bbde21f80eaee1a7faeeea66b2d15f27e3->leave($__internal_dd05857945b25a593577459f442ec9bbde21f80eaee1a7faeeea66b2d15f27e3_prof);

        
        $__internal_f5d78e56c815f8d1a28c365da0043270c2f79e8ea16f585cad60dc28e828abcf->leave($__internal_f5d78e56c815f8d1a28c365da0043270c2f79e8ea16f585cad60dc28e828abcf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  64 => 24,  62 => 23,  55 => 19,  49 => 16,  44 => 14,  39 => 12,  26 => 1,);
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

    <title>DropPay Registration</title>

    <!-- Bootstrap -->
    <link href=\"{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <!-- Animate.css -->
    <link href=\"{{ asset('assets/vendors/animate.css/animate.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"{{ asset('assets/css/custom.min.css') }}\" rel=\"stylesheet\">
  </head>

  <body class=\"login\">
        {% block fos_user_content %}{% endblock fos_user_content %}
  </body>
</html>", "@FOSUser/layout.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
