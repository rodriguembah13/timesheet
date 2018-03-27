<?php

/* BallackTimeSheetBundle:projet:index.html.twig */
class __TwigTemplate_dc0e29b39d81698af6fe4be5a50778e6d367a81bf97472024f28223bff732faf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:projet:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:projet:index.html.twig"));

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
            <h2>Projet <small>List</small></h2>

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
                ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo "    <a class=\"btn btn-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_new");
            echo "\">Create a new entry</a>
                ";
        }
        // line 26
        echo " </div>
        </div>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nomprojet</th>
                    <th>Team Members</th>
                    <th>Client</th>
                    <th>Description</th>
                    <th>Statut</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new Twig_Error_Runtime('Variable "projets" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 43
            echo "                    <tr>
                        <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_show", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "nomProjet", array()), "html", null, true);
            echo "
                            <br/>
                            <small>Created ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["projet"], "dateStart", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "dateStart", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</small>
                            <br/> <small>Finish ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["projet"], "dateStop", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "dateStop", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</small>

                        </td>
                        <td>
                            <ul class=\"list-inline\">
                                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["projet"], "employes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 54
                echo "                                    <li>
                                        <img src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["user"], "image", array()))), "html", null, true);
                echo "\" class=\"avatar\">
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                            </ul>
                        </td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "statut", array()), "html", null, true);
            echo "</td>

                        <td><div class=\"btn-group\">
                                <button type=\"submit\"
                                        onclick=\"location.href = '";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_show", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "'\"
                                        class=\"btn btn-info btn-sm\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>
                                    <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                                </button>
                                <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                        onclick=\"location.href = '";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "'\"
                                        >
                                    <span class=\"glyphicon glyphicon-pencil\"></span>
                                    <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                                </button>
                                <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                        onclick=\"location.href = '";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_affection", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "'\"
                                        >
                                    <span class=\"glyphicon glyphicon-filter\"></span>
                                    <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                                </button>
                            </div></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </tbody>
        </table></div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 86,  182 => 78,  173 => 72,  164 => 66,  157 => 62,  153 => 61,  149 => 60,  145 => 58,  136 => 55,  133 => 54,  129 => 53,  119 => 48,  113 => 47,  108 => 45,  102 => 44,  99 => 43,  95 => 42,  77 => 26,  70 => 25,  61 => 19,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Projet <small>List</small></h2>

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
                {% if is_granted('ROLE_ADMIN') %}    <a class=\"btn btn-primary\" href=\"{{ path('projet_new') }}\">Create a new entry</a>
                {%endif%} </div>
        </div>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nomprojet</th>
                    <th>Team Members</th>
                    <th>Client</th>
                    <th>Description</th>
                    <th>Statut</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for projet in projets %}
                    <tr>
                        <td><a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">{{ projet.id }}</a></td>
                        <td>{{ projet.nomProjet }}
                            <br/>
                            <small>Created {% if projet.dateStart %}{{ projet.dateStart|date('Y-m-d H:i:s') }}{% endif %}</small>
                            <br/> <small>Finish {% if projet.dateStop %}{{ projet.dateStop|date('Y-m-d H:i:s') }}{% endif %}</small>

                        </td>
                        <td>
                            <ul class=\"list-inline\">
                                {% for user in projet.employes %}
                                    <li>
                                        <img src=\"{{ asset('uploads/images/' ~ user.image) }}\" class=\"avatar\">
                                    </li>
                                {% endfor%}
                            </ul>
                        </td>
                        <td>{{ projet.client.nomComplet }}</td>
                        <td>{{ projet.description }}</td>
                        <td>{{ projet.statut }}</td>

                        <td><div class=\"btn-group\">
                                <button type=\"submit\"
                                        onclick=\"location.href = '{{ path('projet_show', { 'id': projet.id }) }}'\"
                                        class=\"btn btn-info btn-sm\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>
                                    <span class=\"hidden-sm-down\" data-translate=\"entity.action.view\"></span>
                                </button>
                                <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                        onclick=\"location.href = '{{ path('projet_edit', { 'id': projet.id }) }}'\"
                                        >
                                    <span class=\"glyphicon glyphicon-pencil\"></span>
                                    <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                                </button>
                                <button type=\"submit\" class=\"btn btn-success btn-sm\"
                                        onclick=\"location.href = '{{ path('projet_affection', { 'id': projet.id }) }}'\"
                                        >
                                    <span class=\"glyphicon glyphicon-filter\"></span>
                                    <span class=\"hidden-sm-down\" data-translate=\"entity.action.edit\"></span>
                                </button>
                            </div></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table></div>
    {% endblock %}
", "BallackTimeSheetBundle:projet:index.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/projet/index.html.twig");
    }
}
