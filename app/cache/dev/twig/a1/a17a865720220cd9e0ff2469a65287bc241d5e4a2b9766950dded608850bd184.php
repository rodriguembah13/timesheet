<?php

/* BallackTimeSheetBundle:Absence:myAbsence.html.twig */
class __TwigTemplate_81e30cd0ab51a5010b3d2f4f8807f584379aef0ef6cb2a43b0ef6843e4681c67 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:Absence:myAbsence.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Absence:myAbsence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "   <a class=\"btn btn-primary\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_new");
        echo "\">Create a new entry</a>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Startdate</th>
            <th>Enddate</th>
            <th>Statutchef</th>
            <th>Statut</th>
            <th>Remarque</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) || array_key_exists("absences", $context) ? $context["absences"] : (function () { throw new Twig_Error_Runtime('Variable "absences" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_show", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "startDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "endDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "statutChef", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "statut", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "remarque", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                <td><div class=\"btn-group\">
                        <button type=\"submit\"
                                onclick=\"location.href = '";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_show", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
            echo "'\"
                                class=\"btn btn-info btn-sm\">
                            <span class=\"glyphicon glyphicon-eye-open\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                        </button>
                        <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                onclick=\"location.href = '";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
            echo "'\"
                                >
                            <span class=\"glyphicon glyphicon-pencil\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                        </button>
                    </div></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:Absence:myAbsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 45,  126 => 37,  117 => 31,  108 => 27,  104 => 26,  96 => 25,  88 => 24,  82 => 23,  76 => 22,  70 => 21,  67 => 20,  63 => 19,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
   <a class=\"btn btn-primary\" href=\"{{ path('absence_new') }}\">Create a new entry</a>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Startdate</th>
            <th>Enddate</th>
            <th>Statutchef</th>
            <th>Statut</th>
            <th>Remarque</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for absence in absences %}
            <tr>
                <td><a href=\"{{ path('absence_show', { 'id': absence.id }) }}\">{{ absence.id }}</a></td>
                <td>{% if absence.startDate %}{{ absence.startDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if absence.endDate %}{{ absence.endDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if absence.statutChef %}Yes{% else %}No{% endif %}</td>
                <td>{% if absence.statut %}Yes{% else %}No{% endif %}</td>
                <td>{{ absence.remarque }}</td>
                <td>{% if absence.date %}{{ absence.date|date('Y-m-d H:i:s') }}{% endif %}</td>

                <td><div class=\"btn-group\">
                        <button type=\"submit\"
                                onclick=\"location.href = '{{ path('absence_show', { 'id': absence.id }) }}'\"
                                class=\"btn btn-info btn-sm\">
                            <span class=\"glyphicon glyphicon-eye-open\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                        </button>
                        <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                onclick=\"location.href = '{{ path('absence_edit', { 'id': absence.id }) }}'\"
                                >
                            <span class=\"glyphicon glyphicon-pencil\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                        </button>
                    </div></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "BallackTimeSheetBundle:Absence:myAbsence.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Absence/myAbsence.html.twig");
    }
}
