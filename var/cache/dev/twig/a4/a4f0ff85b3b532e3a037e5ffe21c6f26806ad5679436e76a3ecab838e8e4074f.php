<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ffa67455c0a03020fe50d3e7ac2a64439c6371a3c67e2211bae8ce3b7c3f6cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f3696abe3f5f7c92af0b3a86b3a850960aa37d2e2932d6aea8ab631879b49e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3696abe3f5f7c92af0b3a86b3a850960aa37d2e2932d6aea8ab631879b49e4->enter($__internal_4f3696abe3f5f7c92af0b3a86b3a850960aa37d2e2932d6aea8ab631879b49e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ff7baf7b1cf65b7d6e01d2dc3a075efcd60142d7f95b5925f1d929cb5c6fa3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7baf7b1cf65b7d6e01d2dc3a075efcd60142d7f95b5925f1d929cb5c6fa3f4->enter($__internal_ff7baf7b1cf65b7d6e01d2dc3a075efcd60142d7f95b5925f1d929cb5c6fa3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f3696abe3f5f7c92af0b3a86b3a850960aa37d2e2932d6aea8ab631879b49e4->leave($__internal_4f3696abe3f5f7c92af0b3a86b3a850960aa37d2e2932d6aea8ab631879b49e4_prof);

        
        $__internal_ff7baf7b1cf65b7d6e01d2dc3a075efcd60142d7f95b5925f1d929cb5c6fa3f4->leave($__internal_ff7baf7b1cf65b7d6e01d2dc3a075efcd60142d7f95b5925f1d929cb5c6fa3f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_281a3a661d6c417e781de8d96edbdb969f2042b36a7371120e93b363933baf49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281a3a661d6c417e781de8d96edbdb969f2042b36a7371120e93b363933baf49->enter($__internal_281a3a661d6c417e781de8d96edbdb969f2042b36a7371120e93b363933baf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab46d29f0249c4cc37c4609b1b730e58692a60eda43cc222e068f1dc6836cd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab46d29f0249c4cc37c4609b1b730e58692a60eda43cc222e068f1dc6836cd4d->enter($__internal_ab46d29f0249c4cc37c4609b1b730e58692a60eda43cc222e068f1dc6836cd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ab46d29f0249c4cc37c4609b1b730e58692a60eda43cc222e068f1dc6836cd4d->leave($__internal_ab46d29f0249c4cc37c4609b1b730e58692a60eda43cc222e068f1dc6836cd4d_prof);

        
        $__internal_281a3a661d6c417e781de8d96edbdb969f2042b36a7371120e93b363933baf49->leave($__internal_281a3a661d6c417e781de8d96edbdb969f2042b36a7371120e93b363933baf49_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7de82aa7b3b3fa7c0d0b699a08e6b3727375b3d4eafc2ede7fa0afaad5a012b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de82aa7b3b3fa7c0d0b699a08e6b3727375b3d4eafc2ede7fa0afaad5a012b3->enter($__internal_7de82aa7b3b3fa7c0d0b699a08e6b3727375b3d4eafc2ede7fa0afaad5a012b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98c04a5bad129cf2ca216232bbe0950b79173ed04e9483b7b085ebf3554761c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c04a5bad129cf2ca216232bbe0950b79173ed04e9483b7b085ebf3554761c0->enter($__internal_98c04a5bad129cf2ca216232bbe0950b79173ed04e9483b7b085ebf3554761c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_98c04a5bad129cf2ca216232bbe0950b79173ed04e9483b7b085ebf3554761c0->leave($__internal_98c04a5bad129cf2ca216232bbe0950b79173ed04e9483b7b085ebf3554761c0_prof);

        
        $__internal_7de82aa7b3b3fa7c0d0b699a08e6b3727375b3d4eafc2ede7fa0afaad5a012b3->leave($__internal_7de82aa7b3b3fa7c0d0b699a08e6b3727375b3d4eafc2ede7fa0afaad5a012b3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2727e3bb660fe372badee9d49061260ef18f2f9c4d3d28315356c7a4c8686a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2727e3bb660fe372badee9d49061260ef18f2f9c4d3d28315356c7a4c8686a81->enter($__internal_2727e3bb660fe372badee9d49061260ef18f2f9c4d3d28315356c7a4c8686a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8f43466fdd7ed31d12f1ea50b4c6c36961a90a81b18ada6a2e39ee62e9c689f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f43466fdd7ed31d12f1ea50b4c6c36961a90a81b18ada6a2e39ee62e9c689f->enter($__internal_e8f43466fdd7ed31d12f1ea50b4c6c36961a90a81b18ada6a2e39ee62e9c689f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e8f43466fdd7ed31d12f1ea50b4c6c36961a90a81b18ada6a2e39ee62e9c689f->leave($__internal_e8f43466fdd7ed31d12f1ea50b4c6c36961a90a81b18ada6a2e39ee62e9c689f_prof);

        
        $__internal_2727e3bb660fe372badee9d49061260ef18f2f9c4d3d28315356c7a4c8686a81->leave($__internal_2727e3bb660fe372badee9d49061260ef18f2f9c4d3d28315356c7a4c8686a81_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/malak/progetto_verifica_clientela/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
