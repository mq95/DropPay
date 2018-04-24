<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_77d86c7b88e97512c5b0ad4bd0c63bc8f261649bfc485c5c9e3f50ca1dd7ad00 extends Twig_Template
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
        $__internal_134031b8a4e0360efe27dba908f14de1f7c94996854e42ff9264a852c34e9322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134031b8a4e0360efe27dba908f14de1f7c94996854e42ff9264a852c34e9322->enter($__internal_134031b8a4e0360efe27dba908f14de1f7c94996854e42ff9264a852c34e9322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Gentelella</title>

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
        
        $__internal_134031b8a4e0360efe27dba908f14de1f7c94996854e42ff9264a852c34e9322->leave($__internal_134031b8a4e0360efe27dba908f14de1f7c94996854e42ff9264a852c34e9322_prof);

    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_621df26b29f867cd7022640edb84c74c160a4afaac9fdaec6766797225baa7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621df26b29f867cd7022640edb84c74c160a4afaac9fdaec6766797225baa7ff->enter($__internal_621df26b29f867cd7022640edb84c74c160a4afaac9fdaec6766797225baa7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_621df26b29f867cd7022640edb84c74c160a4afaac9fdaec6766797225baa7ff->leave($__internal_621df26b29f867cd7022640edb84c74c160a4afaac9fdaec6766797225baa7ff_prof);

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
        return array (  69 => 23,  61 => 24,  59 => 23,  52 => 19,  46 => 16,  41 => 14,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/layout.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
