<?php

/* BallackTimeSheetBundle:Absence:show.html.twig */
class __TwigTemplate_62077bf4daa03fe5082be88b6739ffa03978f140b5129a96ac5605146f686bce extends Twig_Template
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
        echo "    <h1>Absence</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 10, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Startdate</th>
                <td>";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 14, $this->source); })()), "startDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 14, $this->source); })()), "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Enddate</th>
                <td>";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 18, $this->source); })()), "endDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 18, $this->source); })()), "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Statutchef</th>
                <td>";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 22, $this->source); })()), "statutChef", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 26, $this->source); })()), "statut", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Remarque</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 30, $this->source); })()), "remarque", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 34, $this->source); })()), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 34, $this->source); })()), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new Twig_Error_Runtime('Variable "absence" does not exist.', 44, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
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
        return array (  135 => 49,  130 => 47,  124 => 44,  118 => 41,  106 => 34,  99 => 30,  88 => 26,  77 => 22,  68 => 18,  59 => 14,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <h1>Absence</h1>

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
    </ul>
{% endblock %}
", "BallackTimeSheetBundle:Absence:show.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Absence/show.html.twig");
    }
}
