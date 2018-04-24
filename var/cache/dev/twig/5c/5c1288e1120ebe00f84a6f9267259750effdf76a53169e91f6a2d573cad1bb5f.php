<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6e8acedff2d40dff174065c122c59c132c1e6bfc20c499fd68646d14b1ca1d08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3301336fd565fa9a3c01a2eef0f9420fdb5c28c22ebd8747acc76e4167e040e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3301336fd565fa9a3c01a2eef0f9420fdb5c28c22ebd8747acc76e4167e040e2->enter($__internal_3301336fd565fa9a3c01a2eef0f9420fdb5c28c22ebd8747acc76e4167e040e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_2ffa3d1d1cf39392769959fec7e425ed82882650697026531be7825d31648867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffa3d1d1cf39392769959fec7e425ed82882650697026531be7825d31648867->enter($__internal_2ffa3d1d1cf39392769959fec7e425ed82882650697026531be7825d31648867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3301336fd565fa9a3c01a2eef0f9420fdb5c28c22ebd8747acc76e4167e040e2->leave($__internal_3301336fd565fa9a3c01a2eef0f9420fdb5c28c22ebd8747acc76e4167e040e2_prof);

        
        $__internal_2ffa3d1d1cf39392769959fec7e425ed82882650697026531be7825d31648867->leave($__internal_2ffa3d1d1cf39392769959fec7e425ed82882650697026531be7825d31648867_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3bdd56934d2fd5f09467af57cb31ebed6f6baab8e981af88fb02b850fb55f713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdd56934d2fd5f09467af57cb31ebed6f6baab8e981af88fb02b850fb55f713->enter($__internal_3bdd56934d2fd5f09467af57cb31ebed6f6baab8e981af88fb02b850fb55f713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_42917a579e9df906e2e78c08be9919f074dc9a020247ff02cc20bbf185d458b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42917a579e9df906e2e78c08be9919f074dc9a020247ff02cc20bbf185d458b8->enter($__internal_42917a579e9df906e2e78c08be9919f074dc9a020247ff02cc20bbf185d458b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_42917a579e9df906e2e78c08be9919f074dc9a020247ff02cc20bbf185d458b8->leave($__internal_42917a579e9df906e2e78c08be9919f074dc9a020247ff02cc20bbf185d458b8_prof);

        
        $__internal_3bdd56934d2fd5f09467af57cb31ebed6f6baab8e981af88fb02b850fb55f713->leave($__internal_3bdd56934d2fd5f09467af57cb31ebed6f6baab8e981af88fb02b850fb55f713_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/malak/progetto_verifica_clientela/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
