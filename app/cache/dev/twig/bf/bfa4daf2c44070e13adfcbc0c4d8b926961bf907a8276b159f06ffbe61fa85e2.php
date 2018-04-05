<?php

/* BallackTimeSheetBundle:Absence:validation_final.html.twig */
class __TwigTemplate_6e60f491c474b131915a13602788ada39b002419b8992510da321d720ebc58f5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:Absence:validation_final.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Absence:validation_final.html.twig"));

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
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 11
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "type", array()), "html", null, true);
            echo " fade in\">
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
            <strong>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "title", array()), "html", null, true);
            echo "</strong><br/>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "message", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Employe</th>
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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) || array_key_exists("absences", $context) ? $context["absences"] : (function () { throw new Twig_Error_Runtime('Variable "absences" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 33
            echo "            <tr>
                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_show", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["absence"], "employe", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "startDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "endDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, $context["absence"], "statutChef", array()) == "attente")) {
                echo "<span class=\"label label-warning\">attente</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 39
$context["absence"], "statutChef", array()) == "accepte")) {
                echo "<span class=\"label label-success\">accepte</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 40
$context["absence"], "statutChef", array()) == "rejete")) {
                echo "<span class=\"label label-danger\">rejete</span>";
            }
            // line 41
            echo "                </td>

                <td>";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["absence"], "statut", array()) == "attente")) {
                echo "<span class=\"label label-warning\">attente</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 44
$context["absence"], "statut", array()) == "accepte")) {
                echo "<span class=\"label label-success\">accepte</span>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 45
$context["absence"], "statut", array()) == "rejete")) {
                echo "<span class=\"label label-danger\">rejete</span>";
            }
            // line 46
            echo "                </td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "remarque", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["absence"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                <td>
                    <div class=\"dropdown\">
                        <a class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">actions
                            <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li class=\"\"><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation_ok_final", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
            echo "\">accepte</a></li>
                            <li class=\"\"><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation_nonOk_final", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
            echo "\">rejete</a></li>
                            <li class=\"\"><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation_attente_final", array("id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", array()))), "html", null, true);
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
        // line 64
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:Absence:validation_final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 64,  175 => 57,  171 => 56,  167 => 55,  155 => 48,  151 => 47,  148 => 46,  144 => 45,  140 => 44,  136 => 43,  132 => 41,  128 => 40,  124 => 39,  120 => 38,  114 => 37,  108 => 36,  104 => 35,  98 => 34,  95 => 33,  91 => 32,  73 => 16,  62 => 13,  56 => 11,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
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
    {% for msg in app.session.flashbag.get('notice') %}
        <div class=\"alert alert-{{ msg.type }} fade in\">
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
            <strong>{{ msg.title }}</strong><br/>{{ msg.message }}
        </div>
    {% endfor %}

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Employe</th>
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
                <td>{{ absence.employe.nom }}</td>
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

                <td>
                    <div class=\"dropdown\">
                        <a class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">actions
                            <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li class=\"\"><a href=\"{{ path('validation_ok_final', { 'id': absence.id }) }}\">accepte</a></li>
                            <li class=\"\"><a href=\"{{ path('validation_nonOk_final', { 'id': absence.id }) }}\">rejete</a></li>
                            <li class=\"\"><a href=\"{{ path('validation_attente_final', { 'id': absence.id }) }}\">attente</a></li>

                        </ul>
                    </div>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "BallackTimeSheetBundle:Absence:validation_final.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Absence/validation_final.html.twig");
    }
}
