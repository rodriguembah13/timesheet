<?php

/* BallackTimeSheetBundle:employe:profil.html.twig */
class __TwigTemplate_7384a5f72f0b6d763c7e91c7270a5ea3461dd318576a864ad68426d32ced434f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:employe:profil.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:employe:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"row\">
    <div class=\"col-lg-3\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 6, $this->source); })()), "image", array()))), "html", null, true);
        echo "\" height=\"100px\" width=\"100px\">
        <button class=\"btn btn-primary\" onclick=\"location.href = '";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_show", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 7, $this->source); })()), "id", array()))), "html", null, true);
        echo "'\">
            changer photo
        </button>
    </div>
    <div class=\"col-lg-6\">
        <dl>
            <dt>CHEF DEPARTEMENT:</dt>
            <dd>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new Twig_Error_Runtime('Variable "chef" does not exist.', 14, $this->source); })()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new Twig_Error_Runtime('Variable "chef" does not exist.', 14, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</dd>
            <dd>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new Twig_Error_Runtime('Variable "chef" does not exist.', 15, $this->source); })()), "departement", array()), "departement", array()), "html", null, true);
        echo "</dd>
        </dl>

    </div>
</div>
    <div class=\"row\">
        <div class=\"container\">
            <table class=\"table table-hover\">
                <tbody>
                <tr>
                    <th>Matricule</th>
                    <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 26, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 30, $this->source); })()), "nom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Prenom</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 34, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Situation</th>
                    <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 38, $this->source); })()), "situation", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Datenaissance</th>
                    <td>";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 42, $this->source); })()), "dateNaissance", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 42, $this->source); })()), "dateNaissance", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                </tr>
                <tr>
                    <th>Ischef</th>
                    <td>";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 46, $this->source); })()), "isChef", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class=\"panel-group\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                        <a data-toggle=\"collapse\" href=\"#collapse1\">Mes Collegues</a>
                    </h4>
                </div>
                <div id=\"collapse1\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">
                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collegues"]) || array_key_exists("collegues", $context) ? $context["collegues"] : (function () { throw new Twig_Error_Runtime('Variable "collegues" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["collegue"]) {
            // line 61
            echo "
                                <div class=\"row\" style=\"border: #111111 solid 1px\">
                                    <div class=\"col-lg-1\">
                                        <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["collegue"], "image", array()))), "html", null, true);
            echo "\" height=\"50px\" width=\"50px\">
                                    </div>
                                    <div class=\"col-lg-6\">
                                    <p>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collegue"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collegue"], "prenom", array()), "html", null, true);
            echo " </p>
                                        <p> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["collegue"], "departement", array()), "departement", array()), "html", null, true);
            echo "</p>
                                    </div>
                                </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collegue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                    </div>
                    <div class=\"panel-footer\">Panel Footer</div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:employe:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 73,  161 => 68,  155 => 67,  149 => 64,  144 => 61,  140 => 60,  119 => 46,  110 => 42,  103 => 38,  96 => 34,  89 => 30,  82 => 26,  68 => 15,  62 => 14,  52 => 7,  48 => 6,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"row\">
    <div class=\"col-lg-3\">
        <img src=\"{{ asset('uploads/images/' ~ employe.image) }}\" height=\"100px\" width=\"100px\">
        <button class=\"btn btn-primary\" onclick=\"location.href = '{{ path('employe_show', { 'id': employe.id }) }}'\">
            changer photo
        </button>
    </div>
    <div class=\"col-lg-6\">
        <dl>
            <dt>CHEF DEPARTEMENT:</dt>
            <dd>{{ chef.nom }} {{ chef.prenom }}</dd>
            <dd>{{ chef.departement.departement }}</dd>
        </dl>

    </div>
</div>
    <div class=\"row\">
        <div class=\"container\">
            <table class=\"table table-hover\">
                <tbody>
                <tr>
                    <th>Matricule</th>
                    <td>{{ employe.id }}</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>{{ employe.nom }}</td>
                </tr>
                <tr>
                    <th>Prenom</th>
                    <td>{{ employe.prenom }}</td>
                </tr>
                <tr>
                    <th>Situation</th>
                    <td>{{ employe.situation }}</td>
                </tr>
                <tr>
                    <th>Datenaissance</th>
                    <td>{% if employe.dateNaissance %}{{ employe.dateNaissance|date('Y-m-d H:i:s') }}{% endif %}</td>
                </tr>
                <tr>
                    <th>Ischef</th>
                    <td>{% if employe.isChef %}Yes{% else %}No{% endif %}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class=\"panel-group\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                        <a data-toggle=\"collapse\" href=\"#collapse1\">Mes Collegues</a>
                    </h4>
                </div>
                <div id=\"collapse1\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">
                        {% for collegue in collegues %}

                                <div class=\"row\" style=\"border: #111111 solid 1px\">
                                    <div class=\"col-lg-1\">
                                        <img src=\"{{ asset('uploads/images/' ~ collegue.image) }}\" height=\"50px\" width=\"50px\">
                                    </div>
                                    <div class=\"col-lg-6\">
                                    <p>{{ collegue.nom }} {{ collegue.prenom }} </p>
                                        <p> {{ collegue.departement.departement }}</p>
                                    </div>
                                </div>

                        {% endfor %}

                    </div>
                    <div class=\"panel-footer\">Panel Footer</div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "BallackTimeSheetBundle:employe:profil.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/employe/profil.html.twig");
    }
}
