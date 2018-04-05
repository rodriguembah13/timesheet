<?php

/* BallackTimeSheetBundle:dayferiee:show.html.twig */
class __TwigTemplate_b0565bd066c7681057d0a19314ad61fddb2168b13f469584de9a970ff88e2301 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:dayferiee:show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:dayferiee:show.html.twig"));

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
            <h2>Jours Feriee <small>Detail</small></h2>

            <div class=\"clearfix\"></div>
        </div>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dayFeriee"]) || array_key_exists("dayFeriee", $context) ? $context["dayFeriee"] : (function () { throw new Twig_Error_Runtime('Variable "dayFeriee" does not exist.', 15, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Occasion</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dayFeriee"]) || array_key_exists("dayFeriee", $context) ? $context["dayFeriee"] : (function () { throw new Twig_Error_Runtime('Variable "dayFeriee" does not exist.', 19, $this->source); })()), "occasion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["dayFeriee"]) || array_key_exists("dayFeriee", $context) ? $context["dayFeriee"] : (function () { throw new Twig_Error_Runtime('Variable "dayFeriee" does not exist.', 23, $this->source); })()), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dayFeriee"]) || array_key_exists("dayFeriee", $context) ? $context["dayFeriee"] : (function () { throw new Twig_Error_Runtime('Variable "dayFeriee" does not exist.', 23, $this->source); })()), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dayferiee_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dayferiee_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["dayFeriee"]) || array_key_exists("dayFeriee", $context) ? $context["dayFeriee"] : (function () { throw new Twig_Error_Runtime('Variable "dayFeriee" does not exist.', 33, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:dayferiee:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  95 => 36,  89 => 33,  83 => 30,  71 => 23,  64 => 19,  57 => 15,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Jours Feriee <small>Detail</small></h2>

            <div class=\"clearfix\"></div>
        </div>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ dayFeriee.id }}</td>
            </tr>
            <tr>
                <th>Occasion</th>
                <td>{{ dayFeriee.occasion }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if dayFeriee.date %}{{ dayFeriee.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('dayferiee_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('dayferiee_edit', { 'id': dayFeriee.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul></div>
{% endblock %}
", "BallackTimeSheetBundle:dayferiee:show.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/dayferiee/show.html.twig");
    }
}
