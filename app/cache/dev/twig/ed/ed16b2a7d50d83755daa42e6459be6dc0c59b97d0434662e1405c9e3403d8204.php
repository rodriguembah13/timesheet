<?php

/* BallackUserBundle:Security:login.html.twig */
class __TwigTemplate_3dc7c38404f571a7fbf5e96c342a8abb7fef08ec5afdffe5ebea9ab37927623d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "BallackUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
    <div class=\"jumbotron\">
            <center>
                <h1 class=\"animated wow fadeInDown\">TimeSheet Application</h1>
                </center>
        </div> 
    ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "        <div>";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "    ";
        // line 27
        echo "
    <div class=\"panel col-md-5 center-block\" style=\"margin-left: 25%\">
        <div class=\"panel-body \">
            <form action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\"  class=\"form form-label-left\">
                <div class=\"form-group\">
                    <label for=\"username\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />
                </div> 
                <div class=\"checkbox\">
                    <label for=\"remember_me\">  <input type=\"checkbox\" id=\"remember_me\" />
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>

                <button type=\"submit\" class=\"btn btn-success\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
            </form>
            <p>
                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
            </p>
        </div></div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 47,  96 => 44,  90 => 41,  82 => 36,  76 => 33,  72 => 32,  67 => 30,  62 => 27,  60 => 13,  54 => 11,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block content %}
    <div class=\"container\">
    <div class=\"jumbotron\">
            <center>
                <h1 class=\"animated wow fadeInDown\">TimeSheet Application</h1>
                </center>
        </div> 
    {% if error %}
        <div>{{ error }}</div>
    {% endif %}
    {#       <form role=\"form\">
      <div class=\"form-group\">
        <label for=\"email\">Email address:</label>
        <input type=\"email\" class=\"form-control\" id=\"email\">
      </div>
      <div class=\"form-group\">
        <label for=\"pwd\">Password:</label>
        <input type=\"password\" class=\"form-control\" id=\"pwd\">
      </div>
      <div class=\"checkbox\">
        <label><input type=\"checkbox\"> Remember me</label>
      </div>
      <button type=\"submit\" class=\"btn btn-default\">Submit</button>
    </form>#}

    <div class=\"panel col-md-5 center-block\" style=\"margin-left: 25%\">
        <div class=\"panel-body \">
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\"  class=\"form form-label-left\">
                <div class=\"form-group\">
                    <label for=\"username\">{{ 'security.login.username'|trans([], 'FOSUserBundle') }}</label>
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">{{ 'security.login.password'|trans([], 'FOSUserBundle') }}</label>
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />
                </div> 
                <div class=\"checkbox\">
                    <label for=\"remember_me\">  <input type=\"checkbox\" id=\"remember_me\" />
                        {{ 'security.login.remember_me'|trans([], 'FOSUserBundle') }}</label>
                </div>

                <button type=\"submit\" class=\"btn btn-success\">{{ 'security.login.submit'|trans([], 'FOSUserBundle') }}</button>
            </form>
            <p>
                <a href=\"{{ path('fos_user_change_password') }}\">{{ 'resetting.request.submit'|trans([], 'FOSUserBundle') }}</a>
            </p>
        </div></div></div>
{% endblock content %}", "BallackUserBundle:Security:login.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/UserBundle/Resources/views/Security/login.html.twig");
    }
}
