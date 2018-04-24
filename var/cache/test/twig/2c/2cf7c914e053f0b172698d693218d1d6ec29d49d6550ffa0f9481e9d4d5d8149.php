<?php

/* app/sidebar.html.twig */
class __TwigTemplate_d5778567b3371f68e5f5bb4a598b60797450825835cfd42f4408240a2b1ee2fd extends Twig_Template
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
        $__internal_0ccd58ae185f9761e37ff76b0f68d1b9310e5f4bf0b12c3236badddb1ffb668a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ccd58ae185f9761e37ff76b0f68d1b9310e5f4bf0b12c3236badddb1ffb668a->enter($__internal_0ccd58ae185f9761e37ff76b0f68d1b9310e5f4bf0b12c3236badddb1ffb668a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/sidebar.html.twig"));

        // line 1
        echo "<div class=\"col-md-3 left_col\">
    <div class=\"left_col scroll-view\">
        <div class=\"navbar nav_title\" style=\"border: 0;\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_dashboard");
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella</span></a>
        </div>

        <div class=\"clearfix\"></div>

        <!-- menu profile quick info -->
        <div class=\"profile\">
            <div class=\"profile_pic\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
            </div>
            <div class=\"profile_info\">
                <span>Welcome,</span>
                <h2>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo "</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <div class=\"clearfix\"></div>

        <!-- sidebar menu -->
        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
            <div class=\"menu_section\">
                <h3>Menu</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_dashboard");
        echo "\"><i class=\"fa fa-home\"></i> Dashboard</a></li>
                </ul>
            </div>

            <div class=\"menu_section\">
                <h3>Developer</h3>
                <ul class=\"nav side-menu\">
                    <li>
                        <a><i class=\"fa fa-book\"></i> Documentation <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\">
                            <li><a class=\"symfony-docs\" href=\"http://symfony.com/doc/current/index.html\">Symfony</a></li>
                        </ul>
                    </li> 
                    <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_gentelella", array("page" => "index"));
        echo "\"><i class=\"fa fa-search\"></i> Template</a></li>               
                </ul>                    
            </div>
            
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class=\"sidebar-footer hidden-small\">
            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>";
        
        $__internal_0ccd58ae185f9761e37ff76b0f68d1b9310e5f4bf0b12c3236badddb1ffb668a->leave($__internal_0ccd58ae185f9761e37ff76b0f68d1b9310e5f4bf0b12c3236badddb1ffb668a_prof);

    }

    public function getTemplateName()
    {
        return "app/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 59,  76 => 41,  60 => 28,  45 => 16,  38 => 12,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "app/sidebar.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/sidebar.html.twig");
    }
}
