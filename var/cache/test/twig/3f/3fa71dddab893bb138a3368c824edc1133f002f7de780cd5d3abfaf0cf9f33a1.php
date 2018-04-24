<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_0783ae014390e2ebca0a225eda0cc666a4cf88065735c6870004b2dd82e81826 extends Twig_Template
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
        $__internal_d2c14a139b2586ad7e0e4f54268331e5cdff0cec36610be970f2034ed11e5b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c14a139b2586ad7e0e4f54268331e5cdff0cec36610be970f2034ed11e5b4b->enter($__internal_d2c14a139b2586ad7e0e4f54268331e5cdff0cec36610be970f2034ed11e5b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
 <div>
      <a class=\"hiddenanchor\" id=\"signup\"></a>
      <a class=\"hiddenanchor\" id=\"signin\"></a>

      <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
          <section class=\"login_content\">
              ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                <br/>
              ";
        }
        // line 14
        echo "              <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />              
              <h1>Login Form</h1>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" />
              </div>
              <div>
                <input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"password\" name=\"_password\" required=\"required\" />
              </div>              
              <div>
                <input class=\"btn btn-default submit\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />                
                <a class=\"reset_pass\" href=\"#\">Lost your password?</a>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">New to site?
                  <a href=\"#signup\" class=\"to_register\"> Create Account </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><i class=\"fa fa-paw\"></i> Gentelella</h1>
                  <p>©2016 All Rights Reserved.
                    <a href=\"\">Privacy and Terms</a>
                  </p> 
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
          <section class=\"login_content\">
              <form class=\"fos_user_registration_register\" action=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />              
              <h1>Create Account</h1>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
              </div>
              <div>
                <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
              </div>
              <div>
                <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
              </div>
              <div>
              <input class=\"btn btn-default submit\" type=\"submit\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">Already a member ?
                  <a href=\"#signin\" class=\"to_register\"> Log in </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><i class=\"fa fa-paw\"></i> Gentelella</h1>
                  <p>©2016 All Rights Reserved. <a href=\"\">Privacy and Terms</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
";
        
        $__internal_d2c14a139b2586ad7e0e4f54268331e5cdff0cec36610be970f2034ed11e5b4b->leave($__internal_d2c14a139b2586ad7e0e4f54268331e5cdff0cec36610be970f2034ed11e5b4b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 64,  100 => 52,  96 => 51,  66 => 24,  60 => 21,  52 => 18,  46 => 15,  41 => 14,  34 => 11,  32 => 10,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login_content.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
