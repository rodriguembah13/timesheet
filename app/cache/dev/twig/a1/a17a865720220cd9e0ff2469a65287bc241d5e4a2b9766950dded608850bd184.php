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
        echo "    <div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Mes Demandes <small>De Conges</small></h2>

        <div class=\"clearfix\"></div>
    </div>
   <a class=\"btn btn-primary pull-right\" href=\"";
        // line 10
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) || array_key_exists("absences", $context) ? $context["absences"] : (function () { throw new Twig_Error_Runtime('Variable "absences" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_show", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "startDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "endDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                <td>";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["absence"], "statutChef", array()) == "attente")) {
                echo "<span class=\"label label-warning\">attente</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 32
$context["absence"], "statutChef", array()) == "accepte")) {
                echo "<span class=\"label label-success\">accepte</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 33
$context["absence"], "statutChef", array()) == "rejete")) {
                echo "<span class=\"label label-danger\">rejete</span>";
            }
            // line 34
            echo "                </td>

                <td>";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["absence"], "statut", array()) == "attente")) {
                echo "<span class=\"label label-warning\">attente</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 37
$context["absence"], "statut", array()) == "accepte")) {
                echo "<span class=\"label label-success\">accepte</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 38
$context["absence"], "statut", array()) == "rejete")) {
                echo "<span class=\"label label-danger\">rejete</span>";
            }
            // line 39
            echo "                </td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "remarque", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                <td><div class=\"btn-group\">
                        <button type=\"submit\"
                                onclick=\"location.href = '";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_show", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
            echo "'\"
                                class=\"btn btn-info btn-sm\">
                            <span class=\"glyphicon glyphicon-eye-open\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                        </button>
                        <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                onclick=\"location.href = '";
            // line 51
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
        // line 59
        echo "        </tbody>
    </table></div>
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
        return array (  163 => 59,  149 => 51,  140 => 45,  131 => 41,  127 => 40,  124 => 39,  120 => 38,  116 => 37,  112 => 36,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  89 => 29,  83 => 28,  77 => 27,  74 => 26,  70 => 25,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Mes Demandes <small>De Conges</small></h2>

        <div class=\"clearfix\"></div>
    </div>
   <a class=\"btn btn-primary pull-right\" href=\"{{ path('absence_new') }}\">Create a new entry</a>
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

                <td>{% if absence.statutChef==\"attente\" %}<span class=\"label label-warning\">attente</span>
                    {% elseif absence.statutChef==\"accepte\" %}<span class=\"label label-success\">accepte</span>
                    {% elseif absence.statutChef==\"rejete\" %}<span class=\"label label-danger\">rejete</span>{% endif %}
                </td>

                <td>{% if absence.statut==\"attente\" %}<span class=\"label label-warning\">attente</span>
                    {% elseif absence.statut==\"accepte\" %}<span class=\"label label-success\">accepte</span>
                    {% elseif absence.statut==\"rejete\" %}<span class=\"label label-danger\">rejete</span>{% endif %}
                </td>
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
    </table></div>
{% endblock %}", "BallackTimeSheetBundle:Absence:myAbsence.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Absence/myAbsence.html.twig");
    }
}
