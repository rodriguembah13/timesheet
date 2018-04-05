<?php

/* BallackTimeSheetBundle:activite:show.html.twig */
class __TwigTemplate_d71c5608fa2bda225eab2c9fb797bdaaa1676660fe046eea93a93d597105d58f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:activite:show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:activite:show.html.twig"));

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
        <h2>Activite <small>Show</small></h2>

        <div class=\"clearfix\"></div>
    </div>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 15, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 19, $this->source); })()), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 19, $this->source); })()), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Timestart</th>
                <td>";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 23, $this->source); })()), "timeStart", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 23, $this->source); })()), "timeStart", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Timestop</th>
                <td>";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 27, $this->source); })()), "timestop", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 27, $this->source); })()), "timestop", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 31, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"btn-group\">
        <button type=\"submit\"
                onclick=\"location.href = '";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index");
        echo "'\"
                class=\"btn btn-info btn-sm\">
            <span class=\"fa fa-list\"></span>
            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
        </button>
        <button type=\"submit\"
                onclick=\"location.href = '";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 43, $this->source); })()), "id", array()))), "html", null, true);
        echo "'\"
                class=\"btn btn-primary btn-sm\">
            <span class=\"fa fa-edit\"></span>
            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
        </button>";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
        <button type=\"submit\"  class=\"btn btn-danger btn-sm\"> 
            <span class=\"fa fa-remove\"></span>
        </button>";
        // line 50
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 57, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 60
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 60, $this->source); })()), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 62
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:activite:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 62,  141 => 60,  135 => 57,  129 => 54,  122 => 50,  116 => 47,  109 => 43,  100 => 37,  91 => 31,  82 => 27,  73 => 23,  64 => 19,  57 => 15,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Activite <small>Show</small></h2>

        <div class=\"clearfix\"></div>
    </div>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ activite.id }}</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>{% if activite.dateCreation %}{{ activite.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Timestart</th>
                <td>{% if activite.timeStart %}{{ activite.timeStart|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Timestop</th>
                <td>{% if activite.timestop %}{{ activite.timestop|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ activite.description }}</td>
            </tr>
        </tbody>
    </table>
    <div class=\"btn-group\">
        <button type=\"submit\"
                onclick=\"location.href = '{{ path('activite_index') }}'\"
                class=\"btn btn-info btn-sm\">
            <span class=\"fa fa-list\"></span>
            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
        </button>
        <button type=\"submit\"
                onclick=\"location.href = '{{ path('activite_edit', { 'id': activite.id }) }}'\"
                class=\"btn btn-primary btn-sm\">
            <span class=\"fa fa-edit\"></span>
            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
        </button>{{ form_start(delete_form) }}
        <button type=\"submit\"  class=\"btn btn-danger btn-sm\"> 
            <span class=\"fa fa-remove\"></span>
        </button>{{ form_end(delete_form) }}
    </div>
    <ul>
        <li>
            <a href=\"{{ path('activite_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('activite_edit', { 'id': activite.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul></div>
{% endblock %}
", "BallackTimeSheetBundle:activite:show.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/activite/show.html.twig");
    }
}
