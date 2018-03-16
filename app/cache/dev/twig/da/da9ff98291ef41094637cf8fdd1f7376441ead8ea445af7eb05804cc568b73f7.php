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
        echo "    <h1>Projet list</h1>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nomprojet</th>
            <th>Client</th>
            <th>Description</th>
            <th>Datestart</th>
            <th>Datestop</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new Twig_Error_Runtime('Variable "projets" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_show", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "nomProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["projet"], "dateStart", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "dateStart", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["projet"], "dateStop", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "dateStop", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                <td><div class=\"btn-group\">
                        <button type=\"submit\"
                                onclick=\"location.href = '";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_show", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "'\"
                                class=\"btn btn-info btn-sm\">
                            <span class=\"glyphicon glyphicon-eye-open\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                        </button>
                        <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                onclick=\"location.href = '";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "'\"
                                >
                            <span class=\"glyphicon glyphicon-pencil\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                        </button>
                        <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                onclick=\"location.href = '";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_affection", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "'\"
                                >
                            <span class=\"glyphicon glyphicon-filter\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                        </button>
                    </div></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
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
        return array (  140 => 55,  133 => 50,  119 => 42,  110 => 36,  101 => 30,  92 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  68 => 21,  65 => 20,  61 => 19,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <h1>Projet list</h1>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nomprojet</th>
            <th>Client</th>
            <th>Description</th>
            <th>Datestart</th>
            <th>Datestop</th>
            <th>Actions</th>
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

                <td><div class=\"btn-group\">
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
                    </div></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projet_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
", "BallackTimeSheetBundle:projet:myProjet.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/projet/myProjet.html.twig");
    }
}
