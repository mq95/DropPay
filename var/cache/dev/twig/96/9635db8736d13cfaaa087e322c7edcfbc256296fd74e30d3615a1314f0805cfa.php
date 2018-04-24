<?php

/* app/pages/myFormB.html.twig */
class __TwigTemplate_071d012ab744948951efa73438f928b3abe211fe0a43bf2318035898b77bedef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/pages/myFormP.html.twig", "app/pages/myFormB.html.twig", 1);
        $this->blocks = array(
            'biz' => array($this, 'block_biz'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/pages/myFormP.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e795ed07d946ea86ddd3a3d465e45bf758a7b13d60ef6e148bc5cc19f58e2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e795ed07d946ea86ddd3a3d465e45bf758a7b13d60ef6e148bc5cc19f58e2da->enter($__internal_5e795ed07d946ea86ddd3a3d465e45bf758a7b13d60ef6e148bc5cc19f58e2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/myFormB.html.twig"));

        $__internal_23a9b650de7db6a8458c218c585aff5a2179c7408d2ba4819570ed29ff55da89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a9b650de7db6a8458c218c585aff5a2179c7408d2ba4819570ed29ff55da89->enter($__internal_23a9b650de7db6a8458c218c585aff5a2179c7408d2ba4819570ed29ff55da89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/pages/myFormB.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e795ed07d946ea86ddd3a3d465e45bf758a7b13d60ef6e148bc5cc19f58e2da->leave($__internal_5e795ed07d946ea86ddd3a3d465e45bf758a7b13d60ef6e148bc5cc19f58e2da_prof);

        
        $__internal_23a9b650de7db6a8458c218c585aff5a2179c7408d2ba4819570ed29ff55da89->leave($__internal_23a9b650de7db6a8458c218c585aff5a2179c7408d2ba4819570ed29ff55da89_prof);

    }

    // line 4
    public function block_biz($context, array $blocks = array())
    {
        $__internal_909dc501f48b0901eb820e194904b35cd794497a169b45eba7f9b3ccd8f90379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909dc501f48b0901eb820e194904b35cd794497a169b45eba7f9b3ccd8f90379->enter($__internal_909dc501f48b0901eb820e194904b35cd794497a169b45eba7f9b3ccd8f90379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biz"));

        $__internal_ce6c851c81275e73ac6885921ccbd7dbd998cf99e51ab0fc31ed6eb6cdadd40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6c851c81275e73ac6885921ccbd7dbd998cf99e51ab0fc31ed6eb6cdadd40c->enter($__internal_ce6c851c81275e73ac6885921ccbd7dbd998cf99e51ab0fc31ed6eb6cdadd40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biz"));

        // line 5
        echo "
    <div class=\"form-group\">
      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"vat\">VAT number <span class=\"required\">*</span>
      </label>
      <div class=\"col-md-6 col-sm-6 col-xs-12\">
        <input name=\"partitaIva\" type=\"text\" id=\"pi\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"cm\">Merchandise category <span class=\"required\">*</span>
      </label>
      <div class=\"col-md-6 col-sm-6 col-xs-12\">
        <input name=\"categoriaMerceologica\" type=\"text\" id=\"cm\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"ca\">Ateco code<span class=\"required\">*</span>
      </label>
      <div class=\"col-md-6 col-sm-6 col-xs-12\">
        <input name=\"codiceAteco\" type=\"text\" id=\"ca\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"id\">Company Statement Report * :</label>
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"file\" id=\"visura\" name=\"visura\" data-parsley-trigger=\"change\" required />
        </div>
    </div>

";
        
        $__internal_ce6c851c81275e73ac6885921ccbd7dbd998cf99e51ab0fc31ed6eb6cdadd40c->leave($__internal_ce6c851c81275e73ac6885921ccbd7dbd998cf99e51ab0fc31ed6eb6cdadd40c_prof);

        
        $__internal_909dc501f48b0901eb820e194904b35cd794497a169b45eba7f9b3ccd8f90379->leave($__internal_909dc501f48b0901eb820e194904b35cd794497a169b45eba7f9b3ccd8f90379_prof);

    }

    public function getTemplateName()
    {
        return "app/pages/myFormB.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"app/pages/myFormP.html.twig\" %}


{% block biz %}

    <div class=\"form-group\">
      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"vat\">VAT number <span class=\"required\">*</span>
      </label>
      <div class=\"col-md-6 col-sm-6 col-xs-12\">
        <input name=\"partitaIva\" type=\"text\" id=\"pi\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"cm\">Merchandise category <span class=\"required\">*</span>
      </label>
      <div class=\"col-md-6 col-sm-6 col-xs-12\">
        <input name=\"categoriaMerceologica\" type=\"text\" id=\"cm\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"ca\">Ateco code<span class=\"required\">*</span>
      </label>
      <div class=\"col-md-6 col-sm-6 col-xs-12\">
        <input name=\"codiceAteco\" type=\"text\" id=\"ca\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"id\">Company Statement Report * :</label>
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"file\" id=\"visura\" name=\"visura\" data-parsley-trigger=\"change\" required />
        </div>
    </div>

{% endblock %}", "app/pages/myFormB.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/pages/myFormB.html.twig");
    }
}
