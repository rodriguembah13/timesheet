<?php

/* BallackTimeSheetBundle:activite:show.html.twig */
class __TwigTemplate_733a1d83953cc2f7a53ff8ca2e42bc3b8f2de9d52452f6385e422b89724b27f0 extends Twig_Template
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
        echo "    <h1>Activite</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 10, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 14, $this->source); })()), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 14, $this->source); })()), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Timestart</th>
                <td>";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 18, $this->source); })()), "timeStart", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 18, $this->source); })()), "timeStart", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Timestop</th>
                <td>";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 22, $this->source); })()), "timestop", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 22, $this->source); })()), "timestop", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 26, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"btn-group\">
        <button type=\"submit\"
                onclick=\"location.href = '";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index");
        echo "'\"
                class=\"btn btn-info btn-sm\">
            <span class=\"fa fa-list\"></span>
            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
        </button>
        <button type=\"submit\"
                onclick=\"location.href = '";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 38, $this->source); })()), "id", array()))), "html", null, true);
        echo "'\"
                class=\"btn btn-primary btn-sm\">
            <span class=\"fa fa-edit\"></span>
            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
        </button>";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 42, $this->source); })()), 'form_start');
        echo "
        <button type=\"submit\"  class=\"btn btn-danger btn-sm\"> 
            <span class=\"fa fa-remove\"></span>
        </button>";
        // line 45
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new Twig_Error_Runtime('Variable "activite" does not exist.', 52, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 55, $this->source); })()), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
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
        return array (  141 => 57,  136 => 55,  130 => 52,  124 => 49,  117 => 45,  111 => 42,  104 => 38,  95 => 32,  86 => 26,  77 => 22,  68 => 18,  59 => 14,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <h1>Activite</h1>

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
    </ul>
{% endblock %}
", "BallackTimeSheetBundle:activite:show.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/activite/show.html.twig");
    }
}
