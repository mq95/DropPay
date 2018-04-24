<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c80f2de1d1cb73982c2b12ae9904585c9de21ef2a7734650cadd9f9f15299c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60b8c80dd361fef48d2c841825cab670f1c1ba3591442e8f405d4d64e8d10201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b8c80dd361fef48d2c841825cab670f1c1ba3591442e8f405d4d64e8d10201->enter($__internal_60b8c80dd361fef48d2c841825cab670f1c1ba3591442e8f405d4d64e8d10201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_126fffdfeadc3bcb29d6f071c673a60a0841d4cadfaf4b061214a9d91c290a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126fffdfeadc3bcb29d6f071c673a60a0841d4cadfaf4b061214a9d91c290a8d->enter($__internal_126fffdfeadc3bcb29d6f071c673a60a0841d4cadfaf4b061214a9d91c290a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60b8c80dd361fef48d2c841825cab670f1c1ba3591442e8f405d4d64e8d10201->leave($__internal_60b8c80dd361fef48d2c841825cab670f1c1ba3591442e8f405d4d64e8d10201_prof);

        
        $__internal_126fffdfeadc3bcb29d6f071c673a60a0841d4cadfaf4b061214a9d91c290a8d->leave($__internal_126fffdfeadc3bcb29d6f071c673a60a0841d4cadfaf4b061214a9d91c290a8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e56efa885e1de8095cdaa02bac3c15384f831024714a9bd07b355becc248189f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56efa885e1de8095cdaa02bac3c15384f831024714a9bd07b355becc248189f->enter($__internal_e56efa885e1de8095cdaa02bac3c15384f831024714a9bd07b355becc248189f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff2ae73badbce5981f17e3d80f42f5ff70181d26aad3a1d934e341d8b262e97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2ae73badbce5981f17e3d80f42f5ff70181d26aad3a1d934e341d8b262e97c->enter($__internal_ff2ae73badbce5981f17e3d80f42f5ff70181d26aad3a1d934e341d8b262e97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ff2ae73badbce5981f17e3d80f42f5ff70181d26aad3a1d934e341d8b262e97c->leave($__internal_ff2ae73badbce5981f17e3d80f42f5ff70181d26aad3a1d934e341d8b262e97c_prof);

        
        $__internal_e56efa885e1de8095cdaa02bac3c15384f831024714a9bd07b355becc248189f->leave($__internal_e56efa885e1de8095cdaa02bac3c15384f831024714a9bd07b355becc248189f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c239e95a1fdc11e539b3535c529b580c95bcd44f62427bcf48ea12df53abcf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c239e95a1fdc11e539b3535c529b580c95bcd44f62427bcf48ea12df53abcf8->enter($__internal_7c239e95a1fdc11e539b3535c529b580c95bcd44f62427bcf48ea12df53abcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d56fc0d49cbb4d439c517575b3acee0d6309aac86387aefa568dd5d7bd19b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d56fc0d49cbb4d439c517575b3acee0d6309aac86387aefa568dd5d7bd19b9c->enter($__internal_5d56fc0d49cbb4d439c517575b3acee0d6309aac86387aefa568dd5d7bd19b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5d56fc0d49cbb4d439c517575b3acee0d6309aac86387aefa568dd5d7bd19b9c->leave($__internal_5d56fc0d49cbb4d439c517575b3acee0d6309aac86387aefa568dd5d7bd19b9c_prof);

        
        $__internal_7c239e95a1fdc11e539b3535c529b580c95bcd44f62427bcf48ea12df53abcf8->leave($__internal_7c239e95a1fdc11e539b3535c529b580c95bcd44f62427bcf48ea12df53abcf8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7777997917c4c2e8379bb3954283fa084aa88fd510286cc43634e089bfc1093c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7777997917c4c2e8379bb3954283fa084aa88fd510286cc43634e089bfc1093c->enter($__internal_7777997917c4c2e8379bb3954283fa084aa88fd510286cc43634e089bfc1093c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca8c30ee23c52e37b62cc9f154827f627f37e0c95efe975017b45d39849ace08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8c30ee23c52e37b62cc9f154827f627f37e0c95efe975017b45d39849ace08->enter($__internal_ca8c30ee23c52e37b62cc9f154827f627f37e0c95efe975017b45d39849ace08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_ca8c30ee23c52e37b62cc9f154827f627f37e0c95efe975017b45d39849ace08->leave($__internal_ca8c30ee23c52e37b62cc9f154827f627f37e0c95efe975017b45d39849ace08_prof);

        
        $__internal_7777997917c4c2e8379bb3954283fa084aa88fd510286cc43634e089bfc1093c->leave($__internal_7777997917c4c2e8379bb3954283fa084aa88fd510286cc43634e089bfc1093c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/malak/progetto_verifica_clientela/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
