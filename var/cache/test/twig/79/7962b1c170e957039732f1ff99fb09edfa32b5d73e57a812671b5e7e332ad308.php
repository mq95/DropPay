<?php

/* app/base.html.twig */
class __TwigTemplate_d1965a3ea38044427fd1a5eedac86841f10fbe999e359a7aa4f3d83dddd4c8e5 extends Twig_Template
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
        $__internal_15de2e9be6674ad5690cc2de7f1032a819a63a9cca66630d1099f5f938569bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15de2e9be6674ad5690cc2de7f1032a819a63a9cca66630d1099f5f938569bf1->enter($__internal_15de2e9be6674ad5690cc2de7f1032a819a63a9cca66630d1099f5f938569bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Gentelella - Symfony Web Application</title>

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
        
        $__internal_15de2e9be6674ad5690cc2de7f1032a819a63a9cca66630d1099f5f938569bf1->leave($__internal_15de2e9be6674ad5690cc2de7f1032a819a63a9cca66630d1099f5f938569bf1_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10ddfe00f8c15dcc995073af02ae5576584019c4c509f1604695acc40687ec03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ddfe00f8c15dcc995073af02ae5576584019c4c509f1604695acc40687ec03->enter($__internal_10ddfe00f8c15dcc995073af02ae5576584019c4c509f1604695acc40687ec03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_10ddfe00f8c15dcc995073af02ae5576584019c4c509f1604695acc40687ec03->leave($__internal_10ddfe00f8c15dcc995073af02ae5576584019c4c509f1604695acc40687ec03_prof);

    }

    // line 35
    public function block_top_content_header($context, array $blocks = array())
    {
        $__internal_9555447a90c97ea49e6c9758e43115907691b7f7e09e20c458513a335e130734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9555447a90c97ea49e6c9758e43115907691b7f7e09e20c458513a335e130734->enter($__internal_9555447a90c97ea49e6c9758e43115907691b7f7e09e20c458513a335e130734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

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
        
        $__internal_9555447a90c97ea49e6c9758e43115907691b7f7e09e20c458513a335e130734->leave($__internal_9555447a90c97ea49e6c9758e43115907691b7f7e09e20c458513a335e130734_prof);

    }

    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5ee0cb0d04204bce9f41753ddddedf46f93b035912f98ba0331ae250ebd780c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee0cb0d04204bce9f41753ddddedf46f93b035912f98ba0331ae250ebd780c2->enter($__internal_5ee0cb0d04204bce9f41753ddddedf46f93b035912f98ba0331ae250ebd780c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_5ee0cb0d04204bce9f41753ddddedf46f93b035912f98ba0331ae250ebd780c2->leave($__internal_5ee0cb0d04204bce9f41753ddddedf46f93b035912f98ba0331ae250ebd780c2_prof);

    }

    // line 57
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_66dbaa07a39ffbbdb178ec2f244966d0f1216d9f397cdcf20e2bba21ae789ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66dbaa07a39ffbbdb178ec2f244966d0f1216d9f397cdcf20e2bba21ae789ed2->enter($__internal_66dbaa07a39ffbbdb178ec2f244966d0f1216d9f397cdcf20e2bba21ae789ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_66dbaa07a39ffbbdb178ec2f244966d0f1216d9f397cdcf20e2bba21ae789ed2->leave($__internal_66dbaa07a39ffbbdb178ec2f244966d0f1216d9f397cdcf20e2bba21ae789ed2_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3bc0ab1d6620f233c75ae67c1871fb09079827f8a8f16c5c6ea1e957973186b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3bc0ab1d6620f233c75ae67c1871fb09079827f8a8f16c5c6ea1e957973186b->enter($__internal_c3bc0ab1d6620f233c75ae67c1871fb09079827f8a8f16c5c6ea1e957973186b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c3bc0ab1d6620f233c75ae67c1871fb09079827f8a8f16c5c6ea1e957973186b->leave($__internal_c3bc0ab1d6620f233c75ae67c1871fb09079827f8a8f16c5c6ea1e957973186b_prof);

    }

    // line 82
    public function block_modals($context, array $blocks = array())
    {
        $__internal_77476d68d0ccd19a8c71c56857b70f221f5326e9f6d954f693997595d07558af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77476d68d0ccd19a8c71c56857b70f221f5326e9f6d954f693997595d07558af->enter($__internal_77476d68d0ccd19a8c71c56857b70f221f5326e9f6d954f693997595d07558af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        
        $__internal_77476d68d0ccd19a8c71c56857b70f221f5326e9f6d954f693997595d07558af->leave($__internal_77476d68d0ccd19a8c71c56857b70f221f5326e9f6d954f693997595d07558af_prof);

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
        return array (  226 => 82,  217 => 79,  212 => 77,  207 => 75,  202 => 73,  199 => 72,  193 => 71,  182 => 57,  149 => 38,  145 => 36,  139 => 35,  130 => 15,  125 => 13,  122 => 12,  116 => 11,  105 => 83,  103 => 82,  100 => 81,  98 => 71,  91 => 66,  89 => 65,  80 => 58,  78 => 57,  72 => 53,  70 => 35,  63 => 30,  60 => 29,  58 => 28,  46 => 19,  42 => 17,  40 => 11,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "app/base.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/base.html.twig");
    }
}
