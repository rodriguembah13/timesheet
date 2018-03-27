<?php

/* BallackTimeSheetBundle:employe:index.html.twig */
class __TwigTemplate_b7d83f7f4ddd019e8b796544ae71e938a4b680f04ca96d3be21e8b73b9c70066 extends Twig_Template
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
        echo "    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Employe <small>List</small></h2>

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
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/images/loader.gif"), "html", null, true);
        echo " style=\"vertical-align:
                                middle; display: none\" />

                </div>
            </div>
            <div class=\"col-lg-4 col-lg-offset-4\">
                <a class=\"btn btn-primary\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_new");
        echo "\">Reinitialiser Conges</a>
                <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_new");
        echo "\">Create a new entry</a>
            </div>
        </div>
        ";
        // line 31
        echo "        ";
        // line 34
        echo "        <table class=\"table table-striped\" id=\"table\">
            <thead>
                <tr><th>Id</th><th>photo</th>
                        ";
        // line 38
        echo "                        ";
        // line 41
        echo "<th>nom</th>
                    <th>Prenom</th>
                    <th>Situation</th>
                        ";
        // line 45
        echo "          <th>Datenaissance</th><th>Departement</th>
                    <th>Ischef</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new Twig_Error_Runtime('Variable "employes" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 52
            echo "
                    <tr>
                        <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_show", array("id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td><img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["employe"], "image", array()))), "html", null, true);
            echo "\" height=\"50px\" width=\"50px\"></td>

                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "situation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["employe"], "dateNaissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "dateNaissance", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employe"], "departement", array()), "departement", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
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
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_show", array("id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", array()))), "html", null, true);
            echo "'\"
                                        class=\"btn btn-info btn-sm\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>
                                    <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                                </button>
                                <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                        onclick=\"location.href = '";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", array()))), "html", null, true);
            echo "'\"
                                        >
                                    <span class=\"glyphicon glyphicon-pencil\"></span>
                                    <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                                </button>
                                <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                        onclick=\"location.href = '";
            // line 79
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
        // line 88
        echo "            </tbody>
        </table>
        <div class=\"navigation\">
            ";
        // line 92
        echo "        </div></div>
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
        return array (  194 => 92,  189 => 88,  174 => 79,  165 => 73,  156 => 67,  144 => 62,  140 => 61,  134 => 60,  130 => 59,  126 => 58,  122 => 57,  117 => 55,  111 => 54,  107 => 52,  103 => 51,  95 => 45,  90 => 41,  88 => 38,  83 => 34,  81 => 31,  75 => 27,  71 => 26,  62 => 20,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Employe <small>List</small></h2>

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
                <a class=\"btn btn-primary\" href=\"{{ path('employe_new') }}\">Reinitialiser Conges</a>
                <a class=\"btn btn-default\" href=\"{{ path('employe_new') }}\">Create a new entry</a>
            </div>
        </div>
        {# total items count #}
        {# <div class=\"count\">
             {{ pagination.getTotalItemCount }}
         </div>#}
        <table class=\"table table-striped\" id=\"table\">
            <thead>
                <tr><th>Id</th><th>photo</th>
                        {# sorting of properties based on query components #}
                        {#      <th>{{ knp_pagination_sortable(pagination, 'Id', 'id') }}</th>
                              <th>Photo</th>
                              <th{% if pagination.isSorted('nom') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Nom', 'nom') }}</th>
                  #}<th>nom</th>
                    <th>Prenom</th>
                    <th>Situation</th>
                        {#<th>{{ knp_pagination_sortable(pagination, 'Datenaissance', ['employe.dateNaissance', 'a.time']) }}</th>
            #}          <th>Datenaissance</th><th>Departement</th>
                    <th>Ischef</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for employe in employes %}

                    <tr>
                        <td><a href=\"{{ path('employe_show', { 'id': employe.id }) }}\">{{ employe.id }}</a></td>
                        <td><img src=\"{{ asset('uploads/images/' ~ employe.image) }}\" height=\"50px\" width=\"50px\"></td>

                        <td>{{ employe.nom }}</td>
                        <td>{{ employe.prenom }}</td>
                        <td>{{ employe.situation }}</td>
                        <td>{% if employe.dateNaissance %}{{ employe.dateNaissance|date('Y-m-d H:i:s') }}{% endif %}</td>
                        <td>{{ employe.departement.departement }}</td>
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
            {# {{ knp_pagination_render(pagination) }}#}
        </div></div>
    {% endblock %}
", "BallackTimeSheetBundle:employe:index.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/employe/index.html.twig");
    }
}
