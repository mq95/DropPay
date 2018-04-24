<?php

/* app/footer.html.twig */
class __TwigTemplate_be2f6d1ebd0e6addafa1dd4580596af38f037d78aa9c7db1babd0c171dfa0947 extends Twig_Template
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
        $__internal_0b4483bb910d47a4d1a328fcf0c16ed740b46688667ffa5cdd280702905b62aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4483bb910d47a4d1a328fcf0c16ed740b46688667ffa5cdd280702905b62aa->enter($__internal_0b4483bb910d47a4d1a328fcf0c16ed740b46688667ffa5cdd280702905b62aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/footer.html.twig"));

        $__internal_b5b44ac607cb9791e0f6d10ff8cda2b9ad33ffc6cf7e3c8c94d2d5bfd27a322e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b44ac607cb9791e0f6d10ff8cda2b9ad33ffc6cf7e3c8c94d2d5bfd27a322e->enter($__internal_b5b44ac607cb9791e0f6d10ff8cda2b9ad33ffc6cf7e3c8c94d2d5bfd27a322e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_0b4483bb910d47a4d1a328fcf0c16ed740b46688667ffa5cdd280702905b62aa->leave($__internal_0b4483bb910d47a4d1a328fcf0c16ed740b46688667ffa5cdd280702905b62aa_prof);

        
        $__internal_b5b44ac607cb9791e0f6d10ff8cda2b9ad33ffc6cf7e3c8c94d2d5bfd27a322e->leave($__internal_b5b44ac607cb9791e0f6d10ff8cda2b9ad33ffc6cf7e3c8c94d2d5bfd27a322e_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_2790a193803a3066e7a446bac4317696916d17e0fce225aaa230825961b3e1e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2790a193803a3066e7a446bac4317696916d17e0fce225aaa230825961b3e1e8->enter($__internal_2790a193803a3066e7a446bac4317696916d17e0fce225aaa230825961b3e1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_63ebd3500f311b5679714c14fde06a3f1842b5b1af8f5c78837faf457a0abe29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ebd3500f311b5679714c14fde06a3f1842b5b1af8f5c78837faf457a0abe29->enter($__internal_63ebd3500f311b5679714c14fde06a3f1842b5b1af8f5c78837faf457a0abe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "    <!-- footer content -->
    
    <!-- /footer content -->
";
        
        $__internal_63ebd3500f311b5679714c14fde06a3f1842b5b1af8f5c78837faf457a0abe29->leave($__internal_63ebd3500f311b5679714c14fde06a3f1842b5b1af8f5c78837faf457a0abe29_prof);

        
        $__internal_2790a193803a3066e7a446bac4317696916d17e0fce225aaa230825961b3e1e8->leave($__internal_2790a193803a3066e7a446bac4317696916d17e0fce225aaa230825961b3e1e8_prof);

    }

    public function getTemplateName()
    {
        return "app/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footer %}
    <!-- footer content -->
    
    <!-- /footer content -->
{% endblock %}", "app/footer.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/footer.html.twig");
    }
}
