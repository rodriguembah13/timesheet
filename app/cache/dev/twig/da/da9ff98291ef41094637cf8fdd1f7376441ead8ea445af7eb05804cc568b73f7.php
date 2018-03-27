<?php

/* BallackTimeSheetBundle:projet:myProjet.html.twig */
class __TwigTemplate_1112cb88e9110065bce81340d8c70082c0f5d939f546af1e89be77e2e4a486c2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:projet:myProjet.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:projet:myProjet.html.twig"));

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
            <h2>Mes Projets </h2>

            <div class=\"clearfix\"></div>
        </div>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nomprojet</th>
                    <th>Client</th>
                    <th>Description</th>
                    <th>Datestart</th>
                    <th>Datestop</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new Twig_Error_Runtime('Variable "projets" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 24
            echo "                    <tr>
                        <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_show", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "nomProjet", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["projet"], "dateStart", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "dateStart", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["projet"], "dateStop", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "dateStop", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                        <td>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Actions<span class=\"caret\"></span></button>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_my", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "\">Mes Activites</a></li>
                                    <li><a href=\"#\">Mes Heures Supp</a></li>
                                    <li><a href=\"#\">JavaScript</a></li>
                                </ul>
                            </div>
                            ";
            // line 61
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:projet:myProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 64,  115 => 61,  107 => 36,  96 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  72 => 25,  69 => 24,  65 => 23,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Mes Projets </h2>

            <div class=\"clearfix\"></div>
        </div>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nomprojet</th>
                    <th>Client</th>
                    <th>Description</th>
                    <th>Datestart</th>
                    <th>Datestop</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {% for projet in projets %}
                    <tr>
                        <td><a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">{{ projet.id }}</a></td>
                        <td>{{ projet.nomProjet }}</td>
                        <td>{{ projet.client.nomComplet }}</td>
                        <td>{{ projet.description }}</td>
                        <td>{% if projet.dateStart %}{{ projet.dateStart|date('Y-m-d H:i:s') }}{% endif %}</td>
                        <td>{% if projet.dateStop %}{{ projet.dateStop|date('Y-m-d H:i:s') }}{% endif %}</td>

                        <td>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Actions<span class=\"caret\"></span></button>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path('activite_my',{ 'id': projet.id }) }}\">Mes Activites</a></li>
                                    <li><a href=\"#\">Mes Heures Supp</a></li>
                                    <li><a href=\"#\">JavaScript</a></li>
                                </ul>
                            </div>
                            {#<div class=\"btn-group\">
                                <button type=\"submit\"
                                        onclick=\"location.href = '{{ path('projet_show', { 'id': projet.id }) }}'\"
                                        class=\"btn btn-info btn-sm\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>
                                    <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                                </button>
                                <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                        onclick=\"location.href = '{{ path('projet_edit', { 'id': projet.id }) }}'\"
                                        >
                                    <span class=\"glyphicon glyphicon-pencil\"></span>
                                    <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                                </button>
                                <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                        onclick=\"location.href = '{{ path('projet_affection', { 'id': projet.id }) }}'\"
                                        >
                                    <span class=\"glyphicon glyphicon-filter\"></span>
                                    <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                                </button>
                            </div>#}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "BallackTimeSheetBundle:projet:myProjet.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/projet/myProjet.html.twig");
    }
}
