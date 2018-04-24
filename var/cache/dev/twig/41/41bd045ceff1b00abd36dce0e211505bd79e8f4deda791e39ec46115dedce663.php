<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a33f20a360232a614fd677ad57e535472df3319bc18f073938099f134465bcc8 extends Twig_Template
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
        $__internal_2fd26d791d1de9a0d0b994462f223457181d73d6c385248f9377248cf239a702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd26d791d1de9a0d0b994462f223457181d73d6c385248f9377248cf239a702->enter($__internal_2fd26d791d1de9a0d0b994462f223457181d73d6c385248f9377248cf239a702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_1447bd987a238f4690776409a5008d687f0cf19cc8050a7620adabdaf716ef97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1447bd987a238f4690776409a5008d687f0cf19cc8050a7620adabdaf716ef97->enter($__internal_1447bd987a238f4690776409a5008d687f0cf19cc8050a7620adabdaf716ef97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2fd26d791d1de9a0d0b994462f223457181d73d6c385248f9377248cf239a702->leave($__internal_2fd26d791d1de9a0d0b994462f223457181d73d6c385248f9377248cf239a702_prof);

        
        $__internal_1447bd987a238f4690776409a5008d687f0cf19cc8050a7620adabdaf716ef97->leave($__internal_1447bd987a238f4690776409a5008d687f0cf19cc8050a7620adabdaf716ef97_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/malak/progetto_verifica_clientela/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
