<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_d111286461c0ca8bc8b6c9b02300f7c903efdb3469c332cf51df6a796473a6c7 extends Twig_Template
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
        $__internal_8993c214d79f058987e3bbd0ef5caa077a1838c481c052a8a49b03944f87fc76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8993c214d79f058987e3bbd0ef5caa077a1838c481c052a8a49b03944f87fc76->enter($__internal_8993c214d79f058987e3bbd0ef5caa077a1838c481c052a8a49b03944f87fc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_1123421370be1b2171caa4f83b5f2c5df0e0c0ea62b0417f9b4bbb570207c567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1123421370be1b2171caa4f83b5f2c5df0e0c0ea62b0417f9b4bbb570207c567->enter($__internal_1123421370be1b2171caa4f83b5f2c5df0e0c0ea62b0417f9b4bbb570207c567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })())) {
            // line 11
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "\" /> <h1>Welcome to DropPay</h1>             
              <h2>Login Form</h2>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
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
                  <a href=\"#signup\" class=\"to_register\"> Create Account </a><br>
                  or know more about <a href=\"#\" class=\"to_register\"> DropPay</a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

              </div>
            </form>
          </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
          <section class=\"login_content\">
              <form class=\"fos_user_registration_register\" action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 47, $this->getSourceContext()); })()), "html", null, true);
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
        // line 59
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
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
";
        
        $__internal_8993c214d79f058987e3bbd0ef5caa077a1838c481c052a8a49b03944f87fc76->leave($__internal_8993c214d79f058987e3bbd0ef5caa077a1838c481c052a8a49b03944f87fc76_prof);

        
        $__internal_1123421370be1b2171caa4f83b5f2c5df0e0c0ea62b0417f9b4bbb570207c567->leave($__internal_1123421370be1b2171caa4f83b5f2c5df0e0c0ea62b0417f9b4bbb570207c567_prof);

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
        return array (  113 => 59,  98 => 47,  94 => 46,  69 => 24,  63 => 21,  55 => 18,  49 => 15,  44 => 14,  37 => 11,  35 => 10,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

 <div>
      <a class=\"hiddenanchor\" id=\"signup\"></a>
      <a class=\"hiddenanchor\" id=\"signin\"></a>

      <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
          <section class=\"login_content\">
              {% if error %}
                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                <br/>
              {% endif %}
              <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"POST\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" /> <h1>Welcome to DropPay</h1>             
              <h2>Login Form</h2>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'security.login.username'|trans }}\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
              </div>
              <div>
                <input type=\"password\" class=\"form-control\" placeholder=\"{{ 'security.login.password'|trans }}\" id=\"password\" name=\"_password\" required=\"required\" />
              </div>              
              <div>
                <input class=\"btn btn-default submit\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />                
                <a class=\"reset_pass\" href=\"#\">Lost your password?</a>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">New to site?
                  <a href=\"#signup\" class=\"to_register\"> Create Account </a><br>
                  or know more about <a href=\"#\" class=\"to_register\"> DropPay</a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

              </div>
            </form>
          </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
          <section class=\"login_content\">
              <form class=\"fos_user_registration_register\" action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />              
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
              <input class=\"btn btn-default submit\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">Already a member ?
                  <a href=\"#signin\" class=\"to_register\"> Log in </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
", "@FOSUser/Security/login_content.html.twig", "/home/malak/progetto_verifica_clientela/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
