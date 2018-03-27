<?php

/* BallackTimeSheetBundle:Default:nav.html.twig */
class __TwigTemplate_e7398caf3dfea434175cb4535b7d5993fa6620bb58f61dc22ab2d97b3aa20795 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Default:nav.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav navbar-right\">
    <li> 
        <div class=\"dropdown\" style=\"margin-top:5px\">
            <button class=\"btn btn-success dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class='glyphicon glyphicon-flag'></i>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.choisir_langue"), "html", null, true);
        echo "<span class=\"caret\"></span></button>
            ";
        // line 9
        echo "        </div>
    </li>
    ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show", array("username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", array()), "username", array()))), "html", null, true);
            echo "\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "
            </a></li>
        <li><a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">
                <span class=\"glyphicon glyphicon-log-out\"></span> ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a> </li>";
        } else {
            // line 18
            echo "        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        </li><li><a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        </li> ";
        }
        // line 21
        echo "
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:Default:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  67 => 19,  60 => 18,  55 => 16,  51 => 15,  46 => 13,  41 => 12,  39 => 11,  35 => 9,  31 => 4,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav navbar-nav navbar-right\">
    <li> 
        <div class=\"dropdown\" style=\"margin-top:5px\">
            <button class=\"btn btn-success dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class='glyphicon glyphicon-flag'></i>{{ 'menu.choisir_langue'|trans }}<span class=\"caret\"></span></button>
            {#<ul class=\"dropdown-menu\">
                <li><a href=\"{{ path('setlocale',{'language':'en'}) }}\"><img src=\"{{ asset('images/en.gif') }}\" alt=\"\" /> English</a></li>
                <li><a href=\"{{ path('setlocale',{'language':'fr'}) }}\"><img src=\"{{ asset('images/fr.gif') }}\" alt=\"\" /> French</a></li>
            </ul>#}
        </div>
    </li>
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <li><a href=\"{{ path('fos_user_profile_show', {'username': app.user.username}) }}\">
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}
            </a></li>
        <li><a href=\"{{ path('fos_user_security_logout') }}\">
                <span class=\"glyphicon glyphicon-log-out\"></span> {{ 'layout.logout'|trans([], 'FOSUserBundle') }}
            </a> </li>{% else %}
        <li><a href=\"{{ path('fos_user_security_login') }}\"><span class=\"glyphicon glyphicon-user\"></span> {{ 'layout.login'|trans([], 'FOSUserBundle') }}</a>
        </li><li><a href=\"{{ path('fos_user_registration_register') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> {{ 'layout.register'|trans([], 'FOSUserBundle') }}</a>
        </li> {% endif %}

    </ul>
", "BallackTimeSheetBundle:Default:nav.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Default/nav.html.twig");
    }
}
