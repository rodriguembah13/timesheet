<?php

/* BallackTimeSheetBundle:Absence:validation.html.twig */
class __TwigTemplate_35f43ffd5ef8c30f820e03892c6d5fbffa464c88f6fd99b7293ee803d4709d62 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:Absence:validation.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Absence:validation.html.twig"));

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
        <h2>Demandes de conges  <small>A valider</small></h2>

        <div class=\"clearfix\"></div>
    </div>

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
              ";
            // line 33
            echo "                <td>";
            if ((twig_get_attribute($this->env, $this->source, $context["absence"], "statutChef", array()) == "attente")) {
                echo "<span class=\"label label-warning\">attente</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 34
$context["absence"], "statutChef", array()) == "accepte")) {
                echo "<span class=\"label label-success\">accepte</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 35
$context["absence"], "statutChef", array()) == "rejete")) {
                echo "<span class=\"label label-danger\">rejete</span>";
            }
            // line 36
            echo "                </td>

                <td>";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, $context["absence"], "statut", array()) == "attente")) {
                echo "<span class=\"label label-warning\">attente</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 39
$context["absence"], "statut", array()) == "accepte")) {
                echo "<span class=\"label label-success\">accepte</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 40
$context["absence"], "statut", array()) == "rejete")) {
                echo "<span class=\"label label-danger\">rejete</span>";
            }
            // line 41
            echo "                </td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "remarque", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                <td>
                    <div class=\"dropdown\">
                        <a class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">actions
                            <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"\"><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation_ok", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
            echo "\">valide</a></li>
                            <li class=\"\"><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation_non_ok", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
            echo "\">refuser</a></li>
                            <li class=\"\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation_attente", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
            echo "\">attente</a></li>
                        </ul>
                    </div>
                    </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:Absence:validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 57,  146 => 51,  142 => 50,  138 => 49,  126 => 42,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  105 => 36,  101 => 35,  97 => 34,  92 => 33,  86 => 29,  80 => 28,  74 => 27,  71 => 26,  67 => 25,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Demandes de conges  <small>A valider</small></h2>

        <div class=\"clearfix\"></div>
    </div>

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
              {#  <td>{% if absence.statutChef %}<a href=\"{{ path('validation_ok', { 'id': absence.id }) }}\">
                        <span class=\"fa fa-check fa-2x bg-success success\"></span></a>{% else %}<a href=\"{{ path('validation_ok', { 'id': absence.id }) }}\">
                            <span class=\"fa fa-close bg-danger fa-2x\"></span></a>{% endif %}</td>#}
                <td>{% if absence.statutChef==\"attente\" %}<span class=\"label label-warning\">attente</span>
                    {% elseif absence.statutChef==\"accepte\" %}<span class=\"label label-success\">accepte</span>
                    {% elseif absence.statutChef==\"rejete\" %}<span class=\"label label-danger\">rejete</span>{% endif %}
                </td>

                <td>{% if absence.statut==\"attente\" %}<span class=\"label label-warning\">attente</span>
                    {% elseif absence.statut==\"accepte\" %}<span class=\"label label-success\">accepte</span>
                    {% elseif absence.statut==\"rejete\" %}<span class=\"label label-danger\">rejete</span>{% endif %}
                </td><td>{{ absence.remarque }}</td>
                <td>{% if absence.date %}{{ absence.date|date('Y-m-d H:i:s') }}{% endif %}</td>

                <td>
                    <div class=\"dropdown\">
                        <a class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">actions
                            <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"\"><a href=\"{{ path('validation_ok', { 'id': absence.id }) }}\">valide</a></li>
                            <li class=\"\"><a href=\"{{ path('validation_non_ok', { 'id': absence.id }) }}\">refuser</a></li>
                            <li class=\"\"><a href=\"{{ path('validation_attente', { 'id': absence.id }) }}\">attente</a></li>
                        </ul>
                    </div>
                    </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "BallackTimeSheetBundle:Absence:validation.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Absence/validation.html.twig");
    }
}
