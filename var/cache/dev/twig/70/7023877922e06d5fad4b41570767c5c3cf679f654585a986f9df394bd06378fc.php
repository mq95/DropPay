<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_1b3fc91bf4a925c73ff747c7d86ca5e36c064527d12b8a0cb9060fc33903ea09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d0d1271724b72c5d6d8b68eb4801a1651fef8ba95148f86880b8dbfdc994c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0d1271724b72c5d6d8b68eb4801a1651fef8ba95148f86880b8dbfdc994c1f->enter($__internal_9d0d1271724b72c5d6d8b68eb4801a1651fef8ba95148f86880b8dbfdc994c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ea8469bd6144e0ed307aeb504a14b3b845dc3a8330844f669f7624f65d8a151f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8469bd6144e0ed307aeb504a14b3b845dc3a8330844f669f7624f65d8a151f->enter($__internal_ea8469bd6144e0ed307aeb504a14b3b845dc3a8330844f669f7624f65d8a151f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d0d1271724b72c5d6d8b68eb4801a1651fef8ba95148f86880b8dbfdc994c1f->leave($__internal_9d0d1271724b72c5d6d8b68eb4801a1651fef8ba95148f86880b8dbfdc994c1f_prof);

        
        $__internal_ea8469bd6144e0ed307aeb504a14b3b845dc3a8330844f669f7624f65d8a151f->leave($__internal_ea8469bd6144e0ed307aeb504a14b3b845dc3a8330844f669f7624f65d8a151f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcdf796a6e9074c02756b54f4f38914772f815a35fb7681b47e7320d658468d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcdf796a6e9074c02756b54f4f38914772f815a35fb7681b47e7320d658468d5->enter($__internal_bcdf796a6e9074c02756b54f4f38914772f815a35fb7681b47e7320d658468d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c63a9dc6e13de89e9e3fcbb317bb45634411fd1e23a48fc208e04f4214d6581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c63a9dc6e13de89e9e3fcbb317bb45634411fd1e23a48fc208e04f4214d6581->enter($__internal_0c63a9dc6e13de89e9e3fcbb317bb45634411fd1e23a48fc208e04f4214d6581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0c63a9dc6e13de89e9e3fcbb317bb45634411fd1e23a48fc208e04f4214d6581->leave($__internal_0c63a9dc6e13de89e9e3fcbb317bb45634411fd1e23a48fc208e04f4214d6581_prof);

        
        $__internal_bcdf796a6e9074c02756b54f4f38914772f815a35fb7681b47e7320d658468d5->leave($__internal_bcdf796a6e9074c02756b54f4f38914772f815a35fb7681b47e7320d658468d5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fedf316c9df0ce8853c9ecb2c5eca8e9f7b476dfcbc57a140ef462bf86bf7b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fedf316c9df0ce8853c9ecb2c5eca8e9f7b476dfcbc57a140ef462bf86bf7b90->enter($__internal_fedf316c9df0ce8853c9ecb2c5eca8e9f7b476dfcbc57a140ef462bf86bf7b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62070ab6fac6c9dcace884054f0263b8906aa5a31f121e4fd81f25036ba51bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62070ab6fac6c9dcace884054f0263b8906aa5a31f121e4fd81f25036ba51bd4->enter($__internal_62070ab6fac6c9dcace884054f0263b8906aa5a31f121e4fd81f25036ba51bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_62070ab6fac6c9dcace884054f0263b8906aa5a31f121e4fd81f25036ba51bd4->leave($__internal_62070ab6fac6c9dcace884054f0263b8906aa5a31f121e4fd81f25036ba51bd4_prof);

        
        $__internal_fedf316c9df0ce8853c9ecb2c5eca8e9f7b476dfcbc57a140ef462bf86bf7b90->leave($__internal_fedf316c9df0ce8853c9ecb2c5eca8e9f7b476dfcbc57a140ef462bf86bf7b90_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/malak/progetto_verifica_clientela/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
