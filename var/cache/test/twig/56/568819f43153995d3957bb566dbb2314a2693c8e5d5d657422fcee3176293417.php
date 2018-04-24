<?php

/* app/footer.html.twig */
class __TwigTemplate_8f2c3072a7d1348bd0376fed27612ecc3f2f38a8ed668eea0be8e27afe287596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35254d281f670bd3be0a139224d403c15480aba2e3e334ff44392cb14a689f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35254d281f670bd3be0a139224d403c15480aba2e3e334ff44392cb14a689f7e->enter($__internal_35254d281f670bd3be0a139224d403c15480aba2e3e334ff44392cb14a689f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_35254d281f670bd3be0a139224d403c15480aba2e3e334ff44392cb14a689f7e->leave($__internal_35254d281f670bd3be0a139224d403c15480aba2e3e334ff44392cb14a689f7e_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_6f1f350dacd44ae3196547d3f48c25163d4657961a27be6ebdc9d5a043982053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1f350dacd44ae3196547d3f48c25163d4657961a27be6ebdc9d5a043982053->enter($__internal_6f1f350dacd44ae3196547d3f48c25163d4657961a27be6ebdc9d5a043982053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "    <!-- footer content -->
    <footer>
        <div class=\"pull-right\">
            Gentelella - Symfony Web Application
        </div>
        <div class=\"clearfix\"></div>
    </footer>
    <!-- /footer content -->
";
        
        $__internal_6f1f350dacd44ae3196547d3f48c25163d4657961a27be6ebdc9d5a043982053->leave($__internal_6f1f350dacd44ae3196547d3f48c25163d4657961a27be6ebdc9d5a043982053_prof);

    }

    public function getTemplateName()
    {
        return "app/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "app/footer.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/footer.html.twig");
    }
}
