<?php

/* BallackTimeSheetBundle:activite:index.html.twig */
class __TwigTemplate_8cf77b217b13ea2acd2a08ab52e343ffaf4c8ef681be78f375fd0a7afd80a1f2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:activite:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:activite:index.html.twig"));

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
        <h2>Activite <small>List</small></h2>

        <div class=\"clearfix\"></div>
    </div>

    <table width=\"100%\" class=\"table table-striped table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Datecreation</th>
                <th>Timestart</th>
                <th>Timestop</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new Twig_Error_Runtime('Variable "activites" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_show", array("id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["activite"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["activite"], "timeStart", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "timeStart", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["activite"], "timestop", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "timestop", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "description", array()), "html", null, true);
            echo "</td>
                
                             <td><div class=\"btn-group\">
                            <button type=\"submit\"
                                    onclick=\"location.href = '";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_show", array("id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", array()))), "html", null, true);
            echo "'\"
                                    class=\"btn btn-info btn-sm\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                            </button>
                            <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                    onclick=\"location.href = '";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:activite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  112 => 39,  103 => 33,  96 => 29,  90 => 28,  84 => 27,  78 => 26,  72 => 25,  69 => 24,  65 => 23,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Activite <small>List</small></h2>

        <div class=\"clearfix\"></div>
    </div>

    <table width=\"100%\" class=\"table table-striped table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Datecreation</th>
                <th>Timestart</th>
                <th>Timestop</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for activite in activites %}
            <tr>
                <td><a href=\"{{ path('activite_show', { 'id': activite.id }) }}\">{{ activite.id }}</a></td>
                <td>{% if activite.dateCreation %}{{ activite.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if activite.timeStart %}{{ activite.timeStart|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if activite.timestop %}{{ activite.timestop|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ activite.description }}</td>
                
                             <td><div class=\"btn-group\">
                            <button type=\"submit\"
                                    onclick=\"location.href = '{{ path('activite_show', { 'id': activite.id }) }}'\"
                                    class=\"btn btn-info btn-sm\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                            </button>
                            <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                    onclick=\"location.href = '{{ path('activite_edit', { 'id': activite.id }) }}'\"
                                    >
                                <span class=\"glyphicon glyphicon-pencil\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                            </button>
                        </div></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    </div>
{% endblock %}
", "BallackTimeSheetBundle:activite:index.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/activite/index.html.twig");
    }
}
