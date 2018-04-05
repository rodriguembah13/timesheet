<?php

/* NelmioApiDocBundle:Components:version.html.twig */
class __TwigTemplate_10ad794c10d5455817619225926203f762ca15b723db68c11632f12fbc88ae66 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        // line 1
        if ((twig_test_empty((isset($context["sinceVersion"]) || array_key_exists("sinceVersion", $context) ? $context["sinceVersion"] : (function () { throw new Twig_Error_Runtime('Variable "sinceVersion" does not exist.', 1, $this->source); })())) && twig_test_empty((isset($context["untilVersion"]) || array_key_exists("untilVersion", $context) ? $context["untilVersion"] : (function () { throw new Twig_Error_Runtime('Variable "untilVersion" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ( !twig_test_empty((isset($context["sinceVersion"]) || array_key_exists("sinceVersion", $context) ? $context["sinceVersion"] : (function () { throw new Twig_Error_Runtime('Variable "sinceVersion" does not exist.', 4, $this->source); })()))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, (isset($context["sinceVersion"]) || array_key_exists("sinceVersion", $context) ? $context["sinceVersion"] : (function () { throw new Twig_Error_Runtime('Variable "sinceVersion" does not exist.', 4, $this->source); })()), "html", null, true);
            }
            // line 5
            echo "    ";
            if ( !twig_test_empty((isset($context["untilVersion"]) || array_key_exists("untilVersion", $context) ? $context["untilVersion"] : (function () { throw new Twig_Error_Runtime('Variable "untilVersion" does not exist.', 5, $this->source); })()))) {
                // line 6
                echo "        ";
                if ( !twig_test_empty((isset($context["sinceVersion"]) || array_key_exists("sinceVersion", $context) ? $context["sinceVersion"] : (function () { throw new Twig_Error_Runtime('Variable "sinceVersion" does not exist.', 6, $this->source); })()))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, (isset($context["untilVersion"]) || array_key_exists("untilVersion", $context) ? $context["untilVersion"] : (function () { throw new Twig_Error_Runtime('Variable "untilVersion" does not exist.', 6, $this->source); })()), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  38 => 5,  32 => 4,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sinceVersion is empty and untilVersion is empty %}
*
{% else %}
    {% if sinceVersion is not empty %}&gt;={{ sinceVersion }}{% endif %}
    {% if untilVersion is not empty %}
        {% if sinceVersion is not empty %},{% endif %}&lt;={{ untilVersion }}
    {% endif %}
{% endif %}
", "NelmioApiDocBundle:Components:version.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/version.html.twig");
    }
}
