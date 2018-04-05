<?php

/* BallackTimeSheetBundle:overtime:show.html.twig */
class __TwigTemplate_44fe985347a05defdc6abcff5bd8ba060b945a49ed96347c8995f65666ad422d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:overtime:show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:overtime:show.html.twig"));

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
            <h2>Overtime <small>Show</small></h2>

            <div class=\"clearfix\"></div>
        </div>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["overTime"]) || array_key_exists("overTime", $context) ? $context["overTime"] : (function () { throw new Twig_Error_Runtime('Variable "overTime" does not exist.', 14, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["overTime"]) || array_key_exists("overTime", $context) ? $context["overTime"] : (function () { throw new Twig_Error_Runtime('Variable "overTime" does not exist.', 18, $this->source); })()), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["overTime"]) || array_key_exists("overTime", $context) ? $context["overTime"] : (function () { throw new Twig_Error_Runtime('Variable "overTime" does not exist.', 18, $this->source); })()), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["overTime"]) || array_key_exists("overTime", $context) ? $context["overTime"] : (function () { throw new Twig_Error_Runtime('Variable "overTime" does not exist.', 22, $this->source); })()), "duree", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cause</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["overTime"]) || array_key_exists("overTime", $context) ? $context["overTime"] : (function () { throw new Twig_Error_Runtime('Variable "overTime" does not exist.', 26, $this->source); })()), "cause", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["overTime"]) || array_key_exists("overTime", $context) ? $context["overTime"] : (function () { throw new Twig_Error_Runtime('Variable "overTime" does not exist.', 30, $this->source); })()), "statut", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
    ";
        // line 39
        echo "        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["overTime"]) || array_key_exists("overTime", $context) ? $context["overTime"] : (function () { throw new Twig_Error_Runtime('Variable "overTime" does not exist.', 40, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 43, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:overtime:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 45,  108 => 43,  102 => 40,  99 => 39,  86 => 30,  79 => 26,  72 => 22,  63 => 18,  56 => 14,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Overtime <small>Show</small></h2>

            <div class=\"clearfix\"></div>
        </div>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ overTime.id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if overTime.date %}{{ overTime.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>{{ overTime.duree }}</td>
            </tr>
            <tr>
                <th>Cause</th>
                <td>{{ overTime.cause }}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{% if overTime.statut %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
    {#    <li>
            <a href=\"{{ path('overtime_index') }}\">Back to the list</a>
        </li>#}
        <li>
            <a href=\"{{ path('overtime_edit', { 'id': overTime.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul></div>
{% endblock %}
", "BallackTimeSheetBundle:overtime:show.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/overtime/show.html.twig");
    }
}
