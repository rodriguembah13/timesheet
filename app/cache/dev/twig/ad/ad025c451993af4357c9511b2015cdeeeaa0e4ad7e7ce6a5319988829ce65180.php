<?php

/* BallackTimeSheetBundle:Absence:show.html.twig */
class __TwigTemplate_a7fe467345787c6082d34a819bfd841475f8ce7670dbaec8b3422b0ab97234f1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:Absence:show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Absence:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Demandes de conges <small>Show</small></h2>

        <div class=\"clearfix\"></div>
    </div>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 15, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Startdate</th>
                <td>";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 19, $this->source); })()), "startDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 19, $this->source); })()), "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Enddate</th>
                <td>";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 23, $this->source); })()), "endDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 23, $this->source); })()), "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Statutchef</th>
                <td>";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 27, $this->source); })()), "statutChef", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 31, $this->source); })()), "statut", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Remarque</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 35, $this->source); })()), "remarque", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 39, $this->source); })()), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 39, $this->source); })()), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 49, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 54
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:Absence:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 54,  135 => 52,  129 => 49,  123 => 46,  111 => 39,  104 => 35,  93 => 31,  82 => 27,  73 => 23,  64 => 19,  57 => 15,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Demandes de conges <small>Show</small></h2>

        <div class=\"clearfix\"></div>
    </div>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ absence.id }}</td>
            </tr>
            <tr>
                <th>Startdate</th>
                <td>{% if absence.startDate %}{{ absence.startDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Enddate</th>
                <td>{% if absence.endDate %}{{ absence.endDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Statutchef</th>
                <td>{% if absence.statutChef %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{% if absence.statut %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Remarque</th>
                <td>{{ absence.remarque }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if absence.date %}{{ absence.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('absence_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('absence_edit', { 'id': absence.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul></div>
{% endblock %}
", "BallackTimeSheetBundle:Absence:show.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Absence/show.html.twig");
    }
}
