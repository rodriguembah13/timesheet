<?php

/* BallackTimeSheetBundle:typecontrat:index.html.twig */
class __TwigTemplate_33f670c504988b7c71f02aa75c0315222384381ba1166f1f3e906a58221034d5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:typecontrat:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:typecontrat:index.html.twig"));

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
        <h2>Typecontrats <small>List</small></h2>

        <div class=\"clearfix\"></div>
    </div>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Vacances</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeContrats"]) || array_key_exists("typeContrats", $context) ? $context["typeContrats"] : (function () { throw new Twig_Error_Runtime('Variable "typeContrats" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["typeContrat"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typecontrat_show", array("id" => twig_get_attribute($this->env, $this->source, $context["typeContrat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeContrat"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeContrat"], "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeContrat"], "vacances", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typecontrat_show", array("id" => twig_get_attribute($this->env, $this->source, $context["typeContrat"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typecontrat_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["typeContrat"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeContrat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typecontrat_new");
        echo "\">Create a new typeContrat</a>
        </li>
    </ul></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:typecontrat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 43,  105 => 38,  93 => 32,  87 => 29,  80 => 25,  76 => 24,  70 => 23,  67 => 22,  63 => 21,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Typecontrats <small>List</small></h2>

        <div class=\"clearfix\"></div>
    </div>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Vacances</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for typeContrat in typeContrats %}
            <tr>
                <td><a href=\"{{ path('typecontrat_show', { 'id': typeContrat.id }) }}\">{{ typeContrat.id }}</a></td>
                <td>{{ typeContrat.libelle }}</td>
                <td>{{ typeContrat.vacances }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('typecontrat_show', { 'id': typeContrat.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('typecontrat_edit', { 'id': typeContrat.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('typecontrat_new') }}\">Create a new typeContrat</a>
        </li>
    </ul></div>
{% endblock %}
", "BallackTimeSheetBundle:typecontrat:index.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/typecontrat/index.html.twig");
    }
}
