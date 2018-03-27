<?php

/* BallackTimeSheetBundle:dayferiee:index.html.twig */
class __TwigTemplate_53b2d4715ffc7a4faac9c024d5403b38b55c6a7831beb66e46db515f03d34b01 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:dayferiee:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:dayferiee:index.html.twig"));

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
            <h2>Jours Feriee <small>List</small></h2>

            <div class=\"clearfix\"></div>
        </div>
                <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"input-group custom-search-form\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" id=\"search\">

                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\">
                            <i class=\"fa fa-search\"></i>
                        </button>
                    </span><img id=\"loader\" src=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/images/loader.gif"), "html", null, true);
        echo " style=\"vertical-align:
                                middle; display: none\" />

                </div>
            </div>
            <div class=\"col-lg-4 col-lg-offset-4\">
                <a class=\"btn btn-default\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dayferiee_new");
        echo "\">Create a new entry</a>
            </div>
        </div>
        <table class='table'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Occasion</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dayFeriees"]) || array_key_exists("dayFeriees", $context) ? $context["dayFeriees"] : (function () { throw new Twig_Error_Runtime('Variable "dayFeriees" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dayFeriee"]) {
            // line 39
            echo "            <tr>
                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dayferiee_show", array("id" => twig_get_attribute($this->env, $this->source, $context["dayFeriee"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayFeriee"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayFeriee"], "occasion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["dayFeriee"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayFeriee"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dayferiee_show", array("id" => twig_get_attribute($this->env, $this->source, $context["dayFeriee"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dayferiee_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["dayFeriee"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayFeriee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:dayferiee:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 55,  118 => 49,  112 => 46,  103 => 42,  99 => 41,  93 => 40,  90 => 39,  86 => 38,  70 => 25,  61 => 19,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Jours Feriee <small>List</small></h2>

            <div class=\"clearfix\"></div>
        </div>
                <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"input-group custom-search-form\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" id=\"search\">

                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\">
                            <i class=\"fa fa-search\"></i>
                        </button>
                    </span><img id=\"loader\" src={{ asset('bundles/ballacktimesheet/images/loader.gif') }} style=\"vertical-align:
                                middle; display: none\" />

                </div>
            </div>
            <div class=\"col-lg-4 col-lg-offset-4\">
                <a class=\"btn btn-default\" href=\"{{ path('dayferiee_new') }}\">Create a new entry</a>
            </div>
        </div>
        <table class='table'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Occasion</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for dayFeriee in dayFeriees %}
            <tr>
                <td><a href=\"{{ path('dayferiee_show', { 'id': dayFeriee.id }) }}\">{{ dayFeriee.id }}</a></td>
                <td>{{ dayFeriee.occasion }}</td>
                <td>{% if dayFeriee.date %}{{ dayFeriee.date|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('dayferiee_show', { 'id': dayFeriee.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('dayferiee_edit', { 'id': dayFeriee.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    </div>
{% endblock %}
", "BallackTimeSheetBundle:dayferiee:index.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/dayferiee/index.html.twig");
    }
}
