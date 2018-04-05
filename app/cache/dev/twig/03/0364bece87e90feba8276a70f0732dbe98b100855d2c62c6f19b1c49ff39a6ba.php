<?php

/* BallackTimeSheetBundle:contrat:index.html.twig */
class __TwigTemplate_593ae32f9e541504a2fd619317a5096f3e3d124738ef01e48c7441db06f7a88f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:contrat:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:contrat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "   <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Contrat<small>List</small></h2>

            <div class=\"clearfix\"></div>
        </div>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Employe</th>
                <th>Startdate</th>
                <th>Enddate</th>
                <th>Salairebrute</th>
                <th>Typecontrat</th><th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new Twig_Error_Runtime('Variable "contrats" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_show", array("id" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrat"], "employe", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrat"], "employe", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["contrat"], "startDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["contrat"], "endDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "salaireBrute", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrat"], "typeContrat", array()), "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["contrat"], "etat", array())) {
                echo "<span class=\"label label-success\">active</span>";
            } else {
                // line 32
                echo "                        <span class=\"label label-danger\">inactif</span>
                    ";
            }
            // line 33
            echo "</td>
                             <td><div class=\"btn-group\">
                            <button type=\"submit\"
                                    onclick=\"location.href = '";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_show", array("id" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", array()))), "html", null, true);
            echo "'\"
                                    class=\"btn btn-info btn-sm\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                            </button>
                            <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                    onclick=\"location.href = '";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
   </div>
    <ul>
        <li>
            <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:contrat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 55,  140 => 50,  126 => 42,  117 => 36,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  90 => 28,  84 => 27,  78 => 26,  72 => 25,  69 => 24,  65 => 23,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
   <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Contrat<small>List</small></h2>

            <div class=\"clearfix\"></div>
        </div>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Employe</th>
                <th>Startdate</th>
                <th>Enddate</th>
                <th>Salairebrute</th>
                <th>Typecontrat</th><th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for contrat in contrats %}
            <tr>
                <td><a href=\"{{ path('contrat_show', { 'id': contrat.id }) }}\">{{ contrat.id }}</a></td>
                <td>{{ contrat.employe.nom }} {{ contrat.employe.prenom }}</td>
                <td>{% if contrat.startDate %}{{ contrat.startDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if contrat.endDate %}{{ contrat.endDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ contrat.salaireBrute }}</td>
                <td>{{ contrat.typeContrat.libelle }}</td>
                <td>{% if contrat.etat %}<span class=\"label label-success\">active</span>{% else %}
                        <span class=\"label label-danger\">inactif</span>
                    {% endif %}</td>
                             <td><div class=\"btn-group\">
                            <button type=\"submit\"
                                    onclick=\"location.href = '{{ path('contrat_show', { 'id': contrat.id }) }}'\"
                                    class=\"btn btn-info btn-sm\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                            </button>
                            <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                    onclick=\"location.href = '{{ path('contrat_edit', { 'id': contrat.id }) }}'\"
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
    <ul>
        <li>
            <a href=\"{{ path('contrat_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
", "BallackTimeSheetBundle:contrat:index.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/contrat/index.html.twig");
    }
}
