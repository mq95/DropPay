<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f2c8a09220de1ee81f349c97d5cc690c1d380b070c6e31d32af34a3d5bd4300b extends Twig_Template
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
        $__internal_2d5192c99fb001b0b5cd53133356e33d2580fec6b308cfc8cc1c0f0bcbc4cd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5192c99fb001b0b5cd53133356e33d2580fec6b308cfc8cc1c0f0bcbc4cd35->enter($__internal_2d5192c99fb001b0b5cd53133356e33d2580fec6b308cfc8cc1c0f0bcbc4cd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d5192c99fb001b0b5cd53133356e33d2580fec6b308cfc8cc1c0f0bcbc4cd35->leave($__internal_2d5192c99fb001b0b5cd53133356e33d2580fec6b308cfc8cc1c0f0bcbc4cd35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91c4deda95c73576ac5ece04c07dfb5e1eac709c51d7b143583c327432f9d56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c4deda95c73576ac5ece04c07dfb5e1eac709c51d7b143583c327432f9d56d->enter($__internal_91c4deda95c73576ac5ece04c07dfb5e1eac709c51d7b143583c327432f9d56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_91c4deda95c73576ac5ece04c07dfb5e1eac709c51d7b143583c327432f9d56d->leave($__internal_91c4deda95c73576ac5ece04c07dfb5e1eac709c51d7b143583c327432f9d56d_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login.html.twig", "/home/malak/progetto_verifica_clientela/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
