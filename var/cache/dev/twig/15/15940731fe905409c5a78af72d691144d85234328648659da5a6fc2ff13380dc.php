<?php

/* app/topnav.html.twig */
class __TwigTemplate_e9424c2835b9dae4db74d5742ca71e5c70b37e97ff0857e2201aefdaf2595684 extends Twig_Template
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
        $__internal_c32ab73e5bb2432b01f27f04d1aa046831c8667f27a888fa7cb81ac95c9f9811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32ab73e5bb2432b01f27f04d1aa046831c8667f27a888fa7cb81ac95c9f9811->enter($__internal_c32ab73e5bb2432b01f27f04d1aa046831c8667f27a888fa7cb81ac95c9f9811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/topnav.html.twig"));

        $__internal_163a596f7295a67988da1f7efef373788a0504b69a7644ddb8a0b2d75d193f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163a596f7295a67988da1f7efef373788a0504b69a7644ddb8a0b2d75d193f9a->enter($__internal_163a596f7295a67988da1f7efef373788a0504b69a7644ddb8a0b2d75d193f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/topnav.html.twig"));

        // line 1
        echo "<!-- top navigation -->
<div class=\"top_nav\">
    <div class=\"nav_menu\">
        <nav class=\"\">
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>

            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo "
                        <span class=\" fa fa-angle-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_profile");
        echo "\"> Profile</a></li>
                        <li>
                            <a href=\"#\">
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href=\"#\">Help</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                    </ul>
                </li>
                
       
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->";
        
        $__internal_c32ab73e5bb2432b01f27f04d1aa046831c8667f27a888fa7cb81ac95c9f9811->leave($__internal_c32ab73e5bb2432b01f27f04d1aa046831c8667f27a888fa7cb81ac95c9f9811_prof);

        
        $__internal_163a596f7295a67988da1f7efef373788a0504b69a7644ddb8a0b2d75d193f9a->leave($__internal_163a596f7295a67988da1f7efef373788a0504b69a7644ddb8a0b2d75d193f9a_prof);

    }

    public function getTemplateName()
    {
        return "app/topnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  45 => 16,  38 => 12,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- top navigation -->
<div class=\"top_nav\">
    <div class=\"nav_menu\">
        <nav class=\"\">
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>

            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        {{ app.user.username }}
                        <span class=\" fa fa-angle-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                        <li><a href=\"{{ path('app_profile')}}\"> Profile</a></li>
                        <li>
                            <a href=\"#\">
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href=\"#\">Help</a></li>
                        <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                    </ul>
                </li>
                
       
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->", "app/topnav.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/topnav.html.twig");
    }
}
