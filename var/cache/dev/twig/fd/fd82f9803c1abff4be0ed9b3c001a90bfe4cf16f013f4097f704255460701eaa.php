<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_517138e46784930bcef710d212954b642423adfb0aa83c211bdbfb55b30142c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_eaa7191577e46d791b98ab98a11da818cee7392dcecbce63d110a8bd704d7145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa7191577e46d791b98ab98a11da818cee7392dcecbce63d110a8bd704d7145->enter($__internal_eaa7191577e46d791b98ab98a11da818cee7392dcecbce63d110a8bd704d7145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_13ee2c2ca5a8e1ec260174a4ec8ae98b5e1bac677660af405e620bae52805faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ee2c2ca5a8e1ec260174a4ec8ae98b5e1bac677660af405e620bae52805faa->enter($__internal_13ee2c2ca5a8e1ec260174a4ec8ae98b5e1bac677660af405e620bae52805faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa7191577e46d791b98ab98a11da818cee7392dcecbce63d110a8bd704d7145->leave($__internal_eaa7191577e46d791b98ab98a11da818cee7392dcecbce63d110a8bd704d7145_prof);

        
        $__internal_13ee2c2ca5a8e1ec260174a4ec8ae98b5e1bac677660af405e620bae52805faa->leave($__internal_13ee2c2ca5a8e1ec260174a4ec8ae98b5e1bac677660af405e620bae52805faa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d20d6e59fafb7bc35ad4683afbfdd0c5a036ae1063930e662712855858c0374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d20d6e59fafb7bc35ad4683afbfdd0c5a036ae1063930e662712855858c0374->enter($__internal_4d20d6e59fafb7bc35ad4683afbfdd0c5a036ae1063930e662712855858c0374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0d9dc1a77e207ab64b37d86baf9817fd88f1a3bab0ad6a7285839fcb95e3c50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9dc1a77e207ab64b37d86baf9817fd88f1a3bab0ad6a7285839fcb95e3c50c->enter($__internal_0d9dc1a77e207ab64b37d86baf9817fd88f1a3bab0ad6a7285839fcb95e3c50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0d9dc1a77e207ab64b37d86baf9817fd88f1a3bab0ad6a7285839fcb95e3c50c->leave($__internal_0d9dc1a77e207ab64b37d86baf9817fd88f1a3bab0ad6a7285839fcb95e3c50c_prof);

        
        $__internal_4d20d6e59fafb7bc35ad4683afbfdd0c5a036ae1063930e662712855858c0374->leave($__internal_4d20d6e59fafb7bc35ad4683afbfdd0c5a036ae1063930e662712855858c0374_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e5d1b61f4cf4d504e485af2c5a1394b66303063a7ee4745a137312934be9b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5d1b61f4cf4d504e485af2c5a1394b66303063a7ee4745a137312934be9b26->enter($__internal_8e5d1b61f4cf4d504e485af2c5a1394b66303063a7ee4745a137312934be9b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18f0037fe16b3ebeb4959d2122f9d463cd89e780f25dcaa2f6271a482ccc2d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f0037fe16b3ebeb4959d2122f9d463cd89e780f25dcaa2f6271a482ccc2d9b->enter($__internal_18f0037fe16b3ebeb4959d2122f9d463cd89e780f25dcaa2f6271a482ccc2d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18f0037fe16b3ebeb4959d2122f9d463cd89e780f25dcaa2f6271a482ccc2d9b->leave($__internal_18f0037fe16b3ebeb4959d2122f9d463cd89e780f25dcaa2f6271a482ccc2d9b_prof);

        
        $__internal_8e5d1b61f4cf4d504e485af2c5a1394b66303063a7ee4745a137312934be9b26->leave($__internal_8e5d1b61f4cf4d504e485af2c5a1394b66303063a7ee4745a137312934be9b26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f66d1535c398c2f78d490af3195ab84551f5c425e450bc151c54ff3e45fe7896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66d1535c398c2f78d490af3195ab84551f5c425e450bc151c54ff3e45fe7896->enter($__internal_f66d1535c398c2f78d490af3195ab84551f5c425e450bc151c54ff3e45fe7896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_937fc1ab7deaa27683b2aa4c82f4023e9ca7a7aec90a790603ad21f0ed725a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937fc1ab7deaa27683b2aa4c82f4023e9ca7a7aec90a790603ad21f0ed725a20->enter($__internal_937fc1ab7deaa27683b2aa4c82f4023e9ca7a7aec90a790603ad21f0ed725a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_937fc1ab7deaa27683b2aa4c82f4023e9ca7a7aec90a790603ad21f0ed725a20->leave($__internal_937fc1ab7deaa27683b2aa4c82f4023e9ca7a7aec90a790603ad21f0ed725a20_prof);

        
        $__internal_f66d1535c398c2f78d490af3195ab84551f5c425e450bc151c54ff3e45fe7896->leave($__internal_f66d1535c398c2f78d490af3195ab84551f5c425e450bc151c54ff3e45fe7896_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/malak/progetto_verifica_clientela/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
