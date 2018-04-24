<?php

/* app/sidebar.html.twig */
class __TwigTemplate_9a8b49f2f23bebd2191e76fc38e42f0f212115314fe31e7548f6432f8628e849 extends Twig_Template
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
        $__internal_23c07c84bd2ce1f746a061f66e8570e1f66daf34fb15da5d4b067b280b7d23c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c07c84bd2ce1f746a061f66e8570e1f66daf34fb15da5d4b067b280b7d23c9->enter($__internal_23c07c84bd2ce1f746a061f66e8570e1f66daf34fb15da5d4b067b280b7d23c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/sidebar.html.twig"));

        $__internal_04acb633f941b8132ce50b8a08f255c9e6eb6ca892ee6397e94be4feacffcb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04acb633f941b8132ce50b8a08f255c9e6eb6ca892ee6397e94be4feacffcb3a->enter($__internal_04acb633f941b8132ce50b8a08f255c9e6eb6ca892ee6397e94be4feacffcb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/sidebar.html.twig"));

        // line 1
        echo "<div class=\"col-md-3 left_col\">
    <div class=\"left_col scroll-view\">
        <div class=\"navbar nav_title\" style=\"border: 0;\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_dashboard");
        echo "\" class=\"site_title\"><span>Homepage</span></a>
        </div>

        <div class=\"clearfix\"></div>

        <!-- menu profile quick info -->
        <div class=\"profile\">
            <div class=\"profile_info\">
                <h1>Welcome,</h1>
                <h2>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo "</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <div class=\"clearfix\"></div>
        <br>
        <!-- sidebar menu -->
        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
            <div class=\"menu_section\">
                <h3>Menu</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_dashboard");
        echo "\"><i class=\"fa fa-home\"></i> Homepage</a></li>
                </ul>
                <ul class=\"nav side-menu\">
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_type");
        echo "\"><i class=\"fa glyphicon glyphicon-pencil\"></i> Registration</a></li>
                </ul>
                <ul  class=\"nav side-menu\">
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office");
        echo "\"><i class=\"fa fa-cog\"></i> Back Office</a></li>
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
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>";
        
        $__internal_23c07c84bd2ce1f746a061f66e8570e1f66daf34fb15da5d4b067b280b7d23c9->leave($__internal_23c07c84bd2ce1f746a061f66e8570e1f66daf34fb15da5d4b067b280b7d23c9_prof);

        
        $__internal_04acb633f941b8132ce50b8a08f255c9e6eb6ca892ee6397e94be4feacffcb3a->leave($__internal_04acb633f941b8132ce50b8a08f255c9e6eb6ca892ee6397e94be4feacffcb3a_prof);

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
        return array (  91 => 50,  69 => 31,  63 => 28,  57 => 25,  42 => 13,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-3 left_col\">
    <div class=\"left_col scroll-view\">
        <div class=\"navbar nav_title\" style=\"border: 0;\">
            <a href=\"{{ path('app_dashboard') }}\" class=\"site_title\"><span>Homepage</span></a>
        </div>

        <div class=\"clearfix\"></div>

        <!-- menu profile quick info -->
        <div class=\"profile\">
            <div class=\"profile_info\">
                <h1>Welcome,</h1>
                <h2>{{ app.user.username }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <div class=\"clearfix\"></div>
        <br>
        <!-- sidebar menu -->
        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
            <div class=\"menu_section\">
                <h3>Menu</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"{{ path('app_dashboard') }}\"><i class=\"fa fa-home\"></i> Homepage</a></li>
                </ul>
                <ul class=\"nav side-menu\">
                    <li><a href=\"{{ path('app_type') }}\"><i class=\"fa glyphicon glyphicon-pencil\"></i> Registration</a></li>
                </ul>
                <ul  class=\"nav side-menu\">
                    <li><a href=\"{{ path('back_office') }}\"><i class=\"fa fa-cog\"></i> Back Office</a></li>
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
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"{{ path('fos_user_security_logout') }}\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>", "app/sidebar.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/sidebar.html.twig");
    }
}
