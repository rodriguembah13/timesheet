<?php

/* BallackTimeSheetBundle:typeabsence:show.html.twig */
class __TwigTemplate_557195599b0d4cc1e651d201061ceb96e911aec76981c7cec0830408ef22ce21 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:typeabsence:show.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BallackTimeSheetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:typeabsence:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>TypeAbsence</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["typeAbsence"]) || array_key_exists("typeAbsence", $context) ? $context["typeAbsence"] : (function () { throw new Twig_Error_Runtime('Variable "typeAbsence" does not exist.', 10, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["typeAbsence"]) || array_key_exists("typeAbsence", $context) ? $context["typeAbsence"] : (function () { throw new Twig_Error_Runtime('Variable "typeAbsence" does not exist.', 14, $this->source); })()), "libelle", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dayoff</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["typeAbsence"]) || array_key_exists("typeAbsence", $context) ? $context["typeAbsence"] : (function () { throw new Twig_Error_Runtime('Variable "typeAbsence" does not exist.', 18, $this->source); })()), "dayoff", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ispayant</th>
                <td>";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["typeAbsence"]) || array_key_exists("typeAbsence", $context) ? $context["typeAbsence"] : (function () { throw new Twig_Error_Runtime('Variable "typeAbsence" does not exist.', 22, $this->source); })()), "isPayant", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Pourcentage</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["typeAbsence"]) || array_key_exists("typeAbsence", $context) ? $context["typeAbsence"] : (function () { throw new Twig_Error_Runtime('Variable "typeAbsence" does not exist.', 26, $this->source); })()), "pourcentage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Decription</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["typeAbsence"]) || array_key_exists("typeAbsence", $context) ? $context["typeAbsence"] : (function () { throw new Twig_Error_Runtime('Variable "typeAbsence" does not exist.', 30, $this->source); })()), "decription", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typeabsence_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typeabsence_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["typeAbsence"]) || array_key_exists("typeAbsence", $context) ? $context["typeAbsence"] : (function () { throw new Twig_Error_Runtime('Variable "typeAbsence" does not exist.', 40, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 43, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:typeabsence:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 45,  113 => 43,  107 => 40,  101 => 37,  91 => 30,  84 => 26,  73 => 22,  66 => 18,  59 => 14,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <h1>TypeAbsence</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ typeAbsence.id }}</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>{{ typeAbsence.libelle }}</td>
            </tr>
            <tr>
                <th>Dayoff</th>
                <td>{{ typeAbsence.dayoff }}</td>
            </tr>
            <tr>
                <th>Ispayant</th>
                <td>{% if typeAbsence.isPayant %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Pourcentage</th>
                <td>{{ typeAbsence.pourcentage }}</td>
            </tr>
            <tr>
                <th>Decription</th>
                <td>{{ typeAbsence.decription }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('typeabsence_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('typeabsence_edit', { 'id': typeAbsence.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "BallackTimeSheetBundle:typeabsence:show.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/typeabsence/show.html.twig");
    }
}
