<?php

/* BallackTimeSheetBundle:typeabsence:index.html.twig */
class __TwigTemplate_594b5551d9ff5fb49a69bc73ffa8db5e9539905c6559850f1e02131e467ccafc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:typeabsence:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:typeabsence:index.html.twig"));

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
        <h2>TypeAbsence  <small>List</small></h2>

        <div class=\"clearfix\"></div>
    </div>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Dayoff</th>
                <th>Ispayant</th>
                <th>Pourcentage</th>
                <th>Decription</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeAbsences"]) || array_key_exists("typeAbsences", $context) ? $context["typeAbsences"] : (function () { throw new Twig_Error_Runtime('Variable "typeAbsences" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["typeAbsence"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typeabsence_show", array("id" => twig_get_attribute($this->env, $this->source, $context["typeAbsence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeAbsence"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeAbsence"], "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeAbsence"], "dayoff", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["typeAbsence"], "isPayant", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeAbsence"], "pourcentage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeAbsence"], "decription", array()), "html", null, true);
            echo "</td>
                             <td><div class=\"btn-group\">
                            <button type=\"submit\"
                                    onclick=\"location.href = '";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typeabsence_show", array("id" => twig_get_attribute($this->env, $this->source, $context["typeAbsence"], "id", array()))), "html", null, true);
            echo "'\"
                                    class=\"btn btn-info btn-sm\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                            </button>
                            <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                    onclick=\"location.href = '";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typeabsence_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["typeAbsence"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeAbsence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typeabsence_new");
        echo "\">Create a new entry</a>
        </li>
    </ul></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:typeabsence:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 53,  128 => 48,  114 => 40,  105 => 34,  99 => 31,  95 => 30,  87 => 29,  83 => 28,  79 => 27,  73 => 26,  70 => 25,  66 => 24,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>TypeAbsence  <small>List</small></h2>

        <div class=\"clearfix\"></div>
    </div>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Dayoff</th>
                <th>Ispayant</th>
                <th>Pourcentage</th>
                <th>Decription</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for typeAbsence in typeAbsences %}
            <tr>
                <td><a href=\"{{ path('typeabsence_show', { 'id': typeAbsence.id }) }}\">{{ typeAbsence.id }}</a></td>
                <td>{{ typeAbsence.libelle }}</td>
                <td>{{ typeAbsence.dayoff }}</td>
                <td>{% if typeAbsence.isPayant %}Yes{% else %}No{% endif %}</td>
                <td>{{ typeAbsence.pourcentage }}</td>
                <td>{{ typeAbsence.decription }}</td>
                             <td><div class=\"btn-group\">
                            <button type=\"submit\"
                                    onclick=\"location.href = '{{ path('typeabsence_show', { 'id': typeAbsence.id }) }}'\"
                                    class=\"btn btn-info btn-sm\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                            </button>
                            <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                    onclick=\"location.href = '{{ path('typeabsence_edit', { 'id': typeAbsence.id }) }}'\"
                                    >
                                <span class=\"glyphicon glyphicon-pencil\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                            </button>
                        </div></td>
                            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('typeabsence_new') }}\">Create a new entry</a>
        </li>
    </ul></div>
{% endblock %}
", "BallackTimeSheetBundle:typeabsence:index.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/typeabsence/index.html.twig");
    }
}
