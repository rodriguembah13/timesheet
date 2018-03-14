<?php

/* BallackTimeSheetBundle:employe:index.html.twig */
class __TwigTemplate_95b071d1865a3179b4f31f5ef902c2948a617be6ef7975ad75190e47303af995 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:employe:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:employe:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Employe list</h1>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <div class=\"input-group custom-search-form\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" id=\"search\">

        <span class=\"input-group-btn\">
            <button class=\"btn btn-default\" type=\"button\">
                <i class=\"fa fa-search\"></i>
            </button>
        </span><img id=\"loader\" src=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/images/loader.gif"), "html", null, true);
        echo " style=\"vertical-align:
                    middle; display: none\" />

            </div>
        </div>
        <div class=\"col-lg-4 col-lg-offset-4\">
            <a class=\"btn btn-default\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_new");
        echo "\">Create a new entry</a>
        </div>
    </div>
    ";
        // line 24
        echo "    <div class=\"count\">
        ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 25, $this->source); })()), "getTotalItemCount", array()), "html", null, true);
        echo "
    </div>
    <table class=\"table table-striped\" id=\"table\">
        <thead>
        <tr>
            ";
        // line 31
        echo "            <th>";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 31, $this->source); })()), "Id", "id");
        echo "</th>
            <th";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 32, $this->source); })()), "isSorted", array(0 => "nom"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 32, $this->source); })()), "Nom", "nom");
        echo "</th>

            <th>Prenom</th>
            <th>Situation</th>
            <th>";
        // line 36
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 36, $this->source); })()), "Datenaissance", array(0 => "employe.dateNaissance", 1 => "a.time"));
        echo "</th>

            <th>Ischef</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 44
            echo "
            <tr>
                <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_show", array("id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "situation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["employe"], "dateNaissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "dateNaissance", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["employe"], "isChef", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>

                <td>
                    <div class=\"btn-group\">
                        <button type=\"submit\"
                                onclick=\"location.href = '";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_show", array("id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", array()))), "html", null, true);
            echo "'\"
                                class=\"btn btn-info btn-sm\">
                            <span class=\"glyphicon glyphicon-eye-open\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                        </button>
                        <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                onclick=\"location.href = '";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", array()))), "html", null, true);
            echo "'\"
                                >
                            <span class=\"glyphicon glyphicon-pencil\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                        </button>
                        <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                onclick=\"location.href = '";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_role", array("id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", array()))), "html", null, true);
            echo "'\"
                                >
                            <span class=\"glyphicon glyphicon-user\"></span>

                        </button>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>
    <div class=\"navigation\">
        ";
        // line 80
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 80, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:employe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 80,  185 => 77,  170 => 68,  161 => 62,  152 => 56,  140 => 51,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  116 => 46,  112 => 44,  108 => 43,  98 => 36,  87 => 32,  82 => 31,  74 => 25,  71 => 24,  65 => 20,  56 => 14,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <h1>Employe list</h1>
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
            <a class=\"btn btn-default\" href=\"{{ path('employe_new') }}\">Create a new entry</a>
        </div>
    </div>
    {# total items count #}
    <div class=\"count\">
        {{ pagination.getTotalItemCount }}
    </div>
    <table class=\"table table-striped\" id=\"table\">
        <thead>
        <tr>
            {# sorting of properties based on query components #}
            <th>{{ knp_pagination_sortable(pagination, 'Id', 'id') }}</th>
            <th{% if pagination.isSorted('nom') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Nom', 'nom') }}</th>

            <th>Prenom</th>
            <th>Situation</th>
            <th>{{ knp_pagination_sortable(pagination, 'Datenaissance', ['employe.dateNaissance', 'a.time']) }}</th>

            <th>Ischef</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for employe in pagination %}

            <tr>
                <td><a href=\"{{ path('employe_show', { 'id': employe.id }) }}\">{{ employe.id }}</a></td>
                <td>{{ employe.nom }}</td>
                <td>{{ employe.prenom }}</td>
                <td>{{ employe.situation }}</td>
                <td>{% if employe.dateNaissance %}{{ employe.dateNaissance|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if employe.isChef %}Yes{% else %}No{% endif %}</td>

                <td>
                    <div class=\"btn-group\">
                        <button type=\"submit\"
                                onclick=\"location.href = '{{ path('employe_show', { 'id': employe.id }) }}'\"
                                class=\"btn btn-info btn-sm\">
                            <span class=\"glyphicon glyphicon-eye-open\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                        </button>
                        <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                onclick=\"location.href = '{{ path('employe_edit', { 'id': employe.id }) }}'\"
                                >
                            <span class=\"glyphicon glyphicon-pencil\"></span>
                            <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                        </button>
                        <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                onclick=\"location.href = '{{ path('employe_role', { 'id': employe.id }) }}'\"
                                >
                            <span class=\"glyphicon glyphicon-user\"></span>

                        </button>
                    </div>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>
{% endblock %}
", "BallackTimeSheetBundle:employe:index.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/employe/index.html.twig");
    }
}
