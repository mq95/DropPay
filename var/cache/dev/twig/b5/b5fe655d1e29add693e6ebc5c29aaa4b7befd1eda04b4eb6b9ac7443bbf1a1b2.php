<?php

/* app/email/registrationEmail.html.twig */
class __TwigTemplate_d736b5c8a218043f4e69877a22990ca710236e99fe580fdf4fbbe0e9ad36cf32 extends Twig_Template
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
        $__internal_e7bcc3eaad37169304af3a73f5f0efcf12a311103e40aac8c44d3d422245aec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7bcc3eaad37169304af3a73f5f0efcf12a311103e40aac8c44d3d422245aec2->enter($__internal_e7bcc3eaad37169304af3a73f5f0efcf12a311103e40aac8c44d3d422245aec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/email/registrationEmail.html.twig"));

        $__internal_4f76ff507de55fd520829fd6c9cccc2fdf2ce55ddf9749d040c271b41b4b58fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f76ff507de55fd520829fd6c9cccc2fdf2ce55ddf9749d040c271b41b4b58fd->enter($__internal_4f76ff507de55fd520829fd6c9cccc2fdf2ce55ddf9749d040c271b41b4b58fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/email/registrationEmail.html.twig"));

        // line 1
        echo "
          
<h3>You registered!</h3>

Hi <strong> ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 5, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo " </strong>! You're successfully registered, now you have to waiting the AML check to have yor ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 5, $this->getSourceContext()); })()), "type", array()), "html", null, true);
        echo " account.

Go to <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("registered", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 7, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" >homepage </a>.

Thanks!";
        
        $__internal_e7bcc3eaad37169304af3a73f5f0efcf12a311103e40aac8c44d3d422245aec2->leave($__internal_e7bcc3eaad37169304af3a73f5f0efcf12a311103e40aac8c44d3d422245aec2_prof);

        
        $__internal_4f76ff507de55fd520829fd6c9cccc2fdf2ce55ddf9749d040c271b41b4b58fd->leave($__internal_4f76ff507de55fd520829fd6c9cccc2fdf2ce55ddf9749d040c271b41b4b58fd_prof);

    }

    public function getTemplateName()
    {
        return "app/email/registrationEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
          
<h3>You registered!</h3>

Hi <strong> {{ account.username }} </strong>! You're successfully registered, now you have to waiting the AML check to have yor {{ account.type }} account.

Go to <a href=\"{{ url('registered', {'id': account.id}) }}\" >homepage </a>.

Thanks!", "app/email/registrationEmail.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/views/app/email/registrationEmail.html.twig");
    }
}
