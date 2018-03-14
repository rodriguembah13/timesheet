<?php

/* BallackTimeSheetBundle:client:index.html.twig */
class __TwigTemplate_c16ac27d3288b3aece6bb393c782e673e4d97dad35e7bce65569e9283645cbd6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:client:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Client list</h1>
    <div class=\"row container\" style=\"margin-bottom: 5px\">
<div class=\"btn btn-primary\" style=\" float: right\" onclick=\"location.href = '";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_new");
        echo "'\">Create a new entry</div>
    </div>
   
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomcomplet</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nomComplet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>       <td><div class=\"btn-group\">
                            <button type=\"submit\"
                                    onclick=\"location.href = '";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", array()))), "html", null, true);
            echo "'\"
                                    class=\"btn btn-info btn-sm\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                            </button>
                            <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                    onclick=\"location.href = '";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 53,  121 => 45,  112 => 39,  104 => 34,  98 => 31,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  73 => 23,  70 => 22,  66 => 21,  48 => 6,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <h1>Client list</h1>
    <div class=\"row container\" style=\"margin-bottom: 5px\">
<div class=\"btn btn-primary\" style=\" float: right\" onclick=\"location.href = '{{ path('client_new') }}'\">Create a new entry</div>
    </div>
   
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomcomplet</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            <tr>
                <td><a href=\"{{ path('client_show', { 'id': client.id }) }}\">{{ client.id }}</a></td>
                <td>{{ client.nomComplet }}</td>
                <td>{{ client.email }}</td>
                <td>{{ client.telephone }}</td>
                <td>{{ client.adresse }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('client_show', { 'id': client.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('client_edit', { 'id': client.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>       <td><div class=\"btn-group\">
                            <button type=\"submit\"
                                    onclick=\"location.href = '{{ path('client_show', { 'id': client.id }) }}'\"
                                    class=\"btn btn-info btn-sm\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                            </button>
                            <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                    onclick=\"location.href = '{{ path('client_edit', { 'id': client.id }) }}'\"
                                    >
                                <span class=\"glyphicon glyphicon-pencil\"></span>
                                <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                            </button>
                        </div></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "BallackTimeSheetBundle:client:index.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/client/index.html.twig");
    }
}
