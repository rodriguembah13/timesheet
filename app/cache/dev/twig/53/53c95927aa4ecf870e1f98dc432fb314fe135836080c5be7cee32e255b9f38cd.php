<?php

/* BallackTimeSheetBundle:Departement:index.html.twig */
class __TwigTemplate_df0c298f1ccd47de008174ba09096499ef9e1997b0aea5b4e4b0359062719916 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:Departement:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Departement:index.html.twig"));

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
        <h2>Departement <small>List</small></h2>

        <div class=\"clearfix\"></div>
    </div>
    <div class=\"btn btn-primary right\"onclick=\"location.href = '";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_new");
        echo "'\">Create a new entry</div>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Departement</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departements"]) || array_key_exists("departements", $context) ? $context["departements"] : (function () { throw new Twig_Error_Runtime('Variable "departements" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["departement"]) {
            // line 20
            echo "                <tr>
                    <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_show", array("id" => twig_get_attribute($this->env, $this->source, $context["departement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["departement"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["departement"], "departement", array()), "html", null, true);
            echo "</td>
                             <td><div class=\"btn-group\">
                            <button type=\"submit\"
                                    onclick=\"location.href = '";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_show", array("id" => twig_get_attribute($this->env, $this->source, $context["departement"], "id", array()))), "html", null, true);
            echo "'\"
                                    class=\"btn btn-info btn-sm\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                            </button>
                            <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                    onclick=\"location.href = '";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["departement"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:Departement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  92 => 31,  83 => 25,  77 => 22,  71 => 21,  68 => 20,  64 => 19,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Departement <small>List</small></h2>

        <div class=\"clearfix\"></div>
    </div>
    <div class=\"btn btn-primary right\"onclick=\"location.href = '{{ path('departement_new') }}'\">Create a new entry</div>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Departement</th>
            </tr>
        </thead>
        <tbody>
            {% for departement in departements %}
                <tr>
                    <td><a href=\"{{ path('departement_show', { 'id': departement.id }) }}\">{{ departement.id }}</a></td>
                    <td>{{ departement.departement }}</td>
                             <td><div class=\"btn-group\">
                            <button type=\"submit\"
                                    onclick=\"location.href = '{{ path('departement_show', { 'id': departement.id }) }}'\"
                                    class=\"btn btn-info btn-sm\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                            </button>
                            <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                    onclick=\"location.href = '{{ path('departement_edit', { 'id': departement.id }) }}'\"
                                    >
                                <span class=\"glyphicon glyphicon-pencil\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                            </button>
                        </div></td>
                </tr>
            {% endfor %}
        </tbody>
    </table></div>
{% endblock %}
", "BallackTimeSheetBundle:Departement:index.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Departement/index.html.twig");
    }
}
