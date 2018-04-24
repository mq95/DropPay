<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_13229cf583aa95227845ba81440bf60c2fb52ff127acefc612350e46d962b045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae2de0f9b776b49ed3ab5948ce520e2975408dc760ed83f9b6de3016bac10e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2de0f9b776b49ed3ab5948ce520e2975408dc760ed83f9b6de3016bac10e19->enter($__internal_ae2de0f9b776b49ed3ab5948ce520e2975408dc760ed83f9b6de3016bac10e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_78ed3ce7da8ebabe26a3de438a3995771785a869b393a79a4d6baff69df03d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ed3ce7da8ebabe26a3de438a3995771785a869b393a79a4d6baff69df03d02->enter($__internal_78ed3ce7da8ebabe26a3de438a3995771785a869b393a79a4d6baff69df03d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae2de0f9b776b49ed3ab5948ce520e2975408dc760ed83f9b6de3016bac10e19->leave($__internal_ae2de0f9b776b49ed3ab5948ce520e2975408dc760ed83f9b6de3016bac10e19_prof);

        
        $__internal_78ed3ce7da8ebabe26a3de438a3995771785a869b393a79a4d6baff69df03d02->leave($__internal_78ed3ce7da8ebabe26a3de438a3995771785a869b393a79a4d6baff69df03d02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c0d20256266678a8346d170ddfb90c13ecce5aeebb16ee4126635ee59d03c084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d20256266678a8346d170ddfb90c13ecce5aeebb16ee4126635ee59d03c084->enter($__internal_c0d20256266678a8346d170ddfb90c13ecce5aeebb16ee4126635ee59d03c084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cc0e81cc0c2a1312cc6d5ad0fe19be65f2142131f83948ce563ec0088b65ac83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0e81cc0c2a1312cc6d5ad0fe19be65f2142131f83948ce563ec0088b65ac83->enter($__internal_cc0e81cc0c2a1312cc6d5ad0fe19be65f2142131f83948ce563ec0088b65ac83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_cc0e81cc0c2a1312cc6d5ad0fe19be65f2142131f83948ce563ec0088b65ac83->leave($__internal_cc0e81cc0c2a1312cc6d5ad0fe19be65f2142131f83948ce563ec0088b65ac83_prof);

        
        $__internal_c0d20256266678a8346d170ddfb90c13ecce5aeebb16ee4126635ee59d03c084->leave($__internal_c0d20256266678a8346d170ddfb90c13ecce5aeebb16ee4126635ee59d03c084_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/malak/progetto_verifica_clientela/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
