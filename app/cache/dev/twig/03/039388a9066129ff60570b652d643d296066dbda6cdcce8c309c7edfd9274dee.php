<?php

/* BallackTimeSheetBundle:employe:show.html.twig */
class __TwigTemplate_d3c18d148ea0178de80c024d6461cceb7ee1c16c1b4c97b8c93730d88c21356d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:employe:show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:employe:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "     <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Employe <small>Detail</small></h2>
                   
                    <div class=\"clearfix\"></div>
                  </div>
     <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 14, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 18, $this->source); })()), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 22, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Situation</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 26, $this->source); })()), "situation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datenaissance</th>
                <td>";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 30, $this->source); })()), "dateNaissance", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 30, $this->source); })()), "dateNaissance", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Ischef</th>
                <td>";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 34, $this->source); })()), "isChef", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
<div class=\"btn-group\">
    <a class=\"btn bg-primary\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_index");
        echo "\"><span class=\"fa fa-reply\"></span></a>
    <a class=\"btn bg-success\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 40, $this->source); })()), "id", array()))), "html", null, true);
        echo "\"><span class=\"fa fa-edit\"></span></a>
</div>
";
        // line 54
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:employe:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 54,  109 => 40,  105 => 39,  93 => 34,  84 => 30,  77 => 26,  70 => 22,  63 => 18,  56 => 14,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
     <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Employe <small>Detail</small></h2>
                   
                    <div class=\"clearfix\"></div>
                  </div>
     <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
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
<div class=\"btn-group\">
    <a class=\"btn bg-primary\" href=\"{{ path('employe_index') }}\"><span class=\"fa fa-reply\"></span></a>
    <a class=\"btn bg-success\" href=\"{{ path('employe_edit', { 'id': employe.id }) }}\"><span class=\"fa fa-edit\"></span></a>
</div>
{#    <ul>
        <li>
            <a class=\"btn bg-primary\" href=\"{{ path('employe_index') }}\"><span class=\"fa fa-reply\"></span>Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('employe_edit', { 'id': employe.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
</ul>#}</div>
{% endblock %}
", "BallackTimeSheetBundle:employe:show.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/employe/show.html.twig");
    }
}
