<?php

/* BallackTimeSheetBundle:overtime:validation_overtime.html.twig */
class __TwigTemplate_c27e376bf4a411dab1a5ccd3be6d7b8abf066bc6bfb6d1baadd1027749c24f40 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:overtime:validation_overtime.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:overtime:validation_overtime.html.twig"));

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
            <h2>Overtimes <small>A valider</small></h2>

            <div class=\"clearfix\"></div>
        </div>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 11
            echo "            <div class=\"alert alert-";
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
        echo "        <table class='table'>
            <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Duree (en heure)</th>
                <th>Cause</th>
                <th>Statut</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["overTimes"]) || array_key_exists("overTimes", $context) ? $context["overTimes"] : (function () { throw new Twig_Error_Runtime('Variable "overTimes" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["overTime"]) {
            // line 29
            echo "                <tr>
                    <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_show", array("id" => twig_get_attribute($this->env, $this->source, $context["overTime"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overTime"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["overTime"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overTime"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overTime"], "duree", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overTime"], "cause", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["overTime"], "statut", array()) == "attente")) {
                echo "<span class='label label-default'>en attente</span>";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["overTime"], "statut", array()) == "accepte")) {
                echo "<span class='label label-success'>accepte</span>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 35
$context["overTime"], "statut", array()) == "rejete")) {
                echo "<span class='label label-danger'>refuse</span>";
            }
            echo "</td>
                    <td>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Actions
                                <span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_attente", array("id" => twig_get_attribute($this->env, $this->source, $context["overTime"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-ellipsis-h\"></i> en attente</a></li>
                                <li><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_ok", array("id" => twig_get_attribute($this->env, $this->source, $context["overTime"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-check\"></i> accepte</a></li>
                                <li><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_nonOk", array("id" => twig_get_attribute($this->env, $this->source, $context["overTime"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash-o\"></i> rejette</a></li>
                            </ul>
                        </div>

                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['overTime'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>

        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:overtime:validation_overtime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 50,  139 => 43,  135 => 42,  131 => 41,  120 => 35,  114 => 34,  110 => 33,  106 => 32,  100 => 31,  94 => 30,  91 => 29,  87 => 28,  73 => 16,  62 => 13,  56 => 11,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Overtimes <small>A valider</small></h2>

            <div class=\"clearfix\"></div>
        </div>
        {% for msg in app.session.flashbag.get('notice') %}
            <div class=\"alert alert-{{ msg.type }} fade in\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>{{ msg.title }}</strong><br/>{{ msg.message }}
            </div>
        {% endfor %}
        <table class='table'>
            <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Duree (en heure)</th>
                <th>Cause</th>
                <th>Statut</th>

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
                        <div class=\"dropdown\">
                            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Actions
                                <span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{path('overtime_attente', { 'id': overTime.id })}}\"><i class=\"fa fa-ellipsis-h\"></i> en attente</a></li>
                                <li><a href=\"{{path('overtime_ok', { 'id': overTime.id })}}\"><i class=\"fa fa-check\"></i> accepte</a></li>
                                <li><a href=\"{{path('overtime_nonOk', { 'id': overTime.id })}}\"><i class=\"fa fa-trash-o\"></i> rejette</a></li>
                            </ul>
                        </div>

                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        </div>
{% endblock %}
", "BallackTimeSheetBundle:overtime:validation_overtime.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/overtime/validation_overtime.html.twig");
    }
}
