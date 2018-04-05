<?php

/* BallackTimeSheetBundle:overtime:mesOvertime.html.twig */
class __TwigTemplate_5c3180edbeffc288b4767ba500d525b09425fbabc57edfa1f96c7b1754cdaefe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:overtime:mesOvertime.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:overtime:mesOvertime.html.twig"));

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
            <h2>Mes Heures Supp <small>List</small></h2>

            <div class=\"clearfix\"></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-1\">
                <a class=\"btn btn-default\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_new");
        echo "\">Create a new entry</a>
            </div>
        </div>
    <table class='table'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Duree</th>
                <th>Cause</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["overTimes"]) || array_key_exists("overTimes", $context) ? $context["overTimes"] : (function () { throw new Twig_Error_Runtime('Variable "overTimes" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["overTime"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_show", array("id" => twig_get_attribute($this->env, $this->source, $context["overTime"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overTime"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["overTime"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overTime"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overTime"], "duree", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overTime"], "cause", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["overTime"], "statut", array()) == "attente")) {
                echo "<span class='label label-default'>en attente</span>";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["overTime"], "statut", array()) == "accepte")) {
                echo "<span class='label label-success'>accepte</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 34
$context["overTime"], "statut", array()) == "rejete")) {
                echo "<span class='label label-danger'>refuse</span>";
            }
            echo "</td>
                <td>
                    <div class=\"btn-group\">
                        <button type=\"submit\"
                                onclick=\"location.href = '";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_show", array("id" => twig_get_attribute($this->env, $this->source, $context["overTime"], "id", array()))), "html", null, true);
            echo "'\"
                                class=\"btn btn-info btn-sm\">
                            <span class=\"glyphicon glyphicon-eye-open\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                        </button>
                        <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                onclick=\"location.href = '";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["overTime"], "id", array()))), "html", null, true);
            echo "'\"
                                >
                            <span class=\"glyphicon glyphicon-pencil\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                        </button>

                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['overTime'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:overtime:mesOvertime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 54,  123 => 44,  114 => 38,  105 => 34,  99 => 33,  95 => 32,  91 => 31,  85 => 30,  79 => 29,  76 => 28,  72 => 27,  54 => 12,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Mes Heures Supp <small>List</small></h2>

            <div class=\"clearfix\"></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-1\">
                <a class=\"btn btn-default\" href=\"{{ path('overtime_new') }}\">Create a new entry</a>
            </div>
        </div>
    <table class='table'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Duree</th>
                <th>Cause</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for overTime in overTimes %}
            <tr>
                <td><a href=\"{{ path('overtime_show', { 'id': overTime.id }) }}\">{{ overTime.id }}</a></td>
                <td>{% if overTime.date %}{{ overTime.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ overTime.duree }}</td>
                <td>{{ overTime.cause }}</td>
                <td>{% if overTime.statut==\"attente\" %}<span class='label label-default'>en attente</span>{% elseif overTime.statut==\"accepte\" %}<span class='label label-success'>accepte</span>
                    {% elseif overTime.statut==\"rejete\" %}<span class='label label-danger'>refuse</span>{% endif %}</td>
                <td>
                    <div class=\"btn-group\">
                        <button type=\"submit\"
                                onclick=\"location.href = '{{ path('overtime_show', { 'id': overTime.id }) }}'\"
                                class=\"btn btn-info btn-sm\">
                            <span class=\"glyphicon glyphicon-eye-open\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                        </button>
                        <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                onclick=\"location.href = '{{ path('overtime_edit', { 'id': overTime.id }) }}'\"
                                >
                            <span class=\"glyphicon glyphicon-pencil\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                        </button>

                    </div>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
{% endblock %}

", "BallackTimeSheetBundle:overtime:mesOvertime.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/overtime/mesOvertime.html.twig");
    }
}
