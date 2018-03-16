<?php

/* BallackTimeSheetBundle:employe:profil.html.twig */
class __TwigTemplate_7fe2a04940cebb88e13e13b21f10bbfdf68267e7b2bf71641dc8bd0f5a4fb202 extends Twig_Template
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
    <h3 style=\"margin:25px\"><span class=\"fa fa-angle-double-right\"></span>Mon Profil</h3>
    <div class=\"col-lg-3\">
    <div class=\"row\">
     <div class=\"col-lg-5\" >
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 9, $this->source); })()), "image", array()))), "html", null, true);
        echo "\" height=\"100px\" width=\"100px\">
    </div>
     <div class=\"col-lg-7\">
        <h3 style=\"marker-end: 2px\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 12, $this->source); })()), "compte", array()), "username", array()), "html", null, true);
        echo "</h3>
        <h5>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 13, $this->source); })()), "compte", array()), "email", array()), "html", null, true);
        echo "</h5>

    </div>
    <div class=\"row\" style=\"margin-left: 5px\">
     <dl >
  <dt>
  <p>Nom :";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 19, $this->source); })()), "nom", array()), "html", null, true);
        echo "</p>
  <p>Penom :";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 20, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</p>
  <p>Date de Naissance :";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 21, $this->source); })()), "dateNaissance", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 21, $this->source); })()), "dateNaissance", array()), "Y-m-d"), "html", null, true);
        }
        echo "</p>
  <p>Situation Matrimonial :";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 22, $this->source); })()), "situation", array()), "html", null, true);
        echo "</p>
  </dt>
</dl>
    </div>
    </div>
    </div>

    <div class=\"col-lg-9\"  style=\"border-left: solid\">

                <h4>Departement : ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 31, $this->source); })()), "departement", array()), "departement", array()), "html", null, true);
        echo "</h4>
                <h4>CHEF DU DEPARTEMENT</h4>
                 <div class=\"row\" style=\"margin-bottom: 5px\">
                            <div class=\"col-lg-1\">
                                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new Twig_Error_Runtime('Variable "chef" does not exist.', 35, $this->source); })()), "image", array()))), "html", null, true);
        echo "\" height=\"50px\" width=\"50px\">
                            </div>
                            <div class=\"col-lg-6\">
                            <h5>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new Twig_Error_Runtime('Variable "chef" does not exist.', 38, $this->source); })()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new Twig_Error_Runtime('Variable "chef" does not exist.', 38, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</h5>
                            </div>
                        </div>

        <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                <h3>Mes Collegues</h3>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collegues"]) || array_key_exists("collegues", $context) ? $context["collegues"] : (function () { throw new Twig_Error_Runtime('Variable "collegues" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["colegue"]) {
            // line 46
            echo "                        <div class=\"row\">
                            <div class=\"col-lg-2\">
                                <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["colegue"], "image", array()))), "html", null, true);
            echo "\" height=\"50px\" width=\"50px\">
                            </div>
                            <div class=\"col-lg-6\">
                            <p>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colegue"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colegue"], "prenom", array()), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colegue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </div>
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
        return array (  147 => 55,  135 => 51,  129 => 48,  125 => 46,  121 => 45,  109 => 38,  103 => 35,  96 => 31,  84 => 22,  78 => 21,  74 => 20,  70 => 19,  61 => 13,  57 => 12,  51 => 9,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"row\">
    <h3 style=\"margin:25px\"><span class=\"fa fa-angle-double-right\"></span>Mon Profil</h3>
    <div class=\"col-lg-3\">
    <div class=\"row\">
     <div class=\"col-lg-5\" >
<img src=\"{{ asset('uploads/images/' ~ employe.image) }}\" height=\"100px\" width=\"100px\">
    </div>
     <div class=\"col-lg-7\">
        <h3 style=\"marker-end: 2px\">{{ employe.compte.username }}</h3>
        <h5>{{ employe.compte.email }}</h5>

    </div>
    <div class=\"row\" style=\"margin-left: 5px\">
     <dl >
  <dt>
  <p>Nom :{{ employe.nom }}</p>
  <p>Penom :{{ employe.prenom }}</p>
  <p>Date de Naissance :{% if employe.dateNaissance %}{{ employe.dateNaissance|date('Y-m-d') }}{% endif %}</p>
  <p>Situation Matrimonial :{{ employe.situation }}</p>
  </dt>
</dl>
    </div>
    </div>
    </div>

    <div class=\"col-lg-9\"  style=\"border-left: solid\">

                <h4>Departement : {{ employe.departement.departement }}</h4>
                <h4>CHEF DU DEPARTEMENT</h4>
                 <div class=\"row\" style=\"margin-bottom: 5px\">
                            <div class=\"col-lg-1\">
                                <img src=\"{{ asset('uploads/images/' ~ chef.image) }}\" height=\"50px\" width=\"50px\">
                            </div>
                            <div class=\"col-lg-6\">
                            <h5>{{ chef.nom }} {{ chef.prenom }}</h5>
                            </div>
                        </div>

        <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                <h3>Mes Collegues</h3>
                    {% for colegue in collegues %}
                        <div class=\"row\">
                            <div class=\"col-lg-2\">
                                <img src=\"{{ asset('uploads/images/' ~ colegue.image) }}\" height=\"50px\" width=\"50px\">
                            </div>
                            <div class=\"col-lg-6\">
                            <p>{{ colegue.nom }} {{ colegue.prenom }}</p>
                            </div>
                        </div>
                        {% endfor %}
                </div>
                <div class=\"panel-footer\">Panel Footer</div>
            </div>
        </div>
    </div>

</div>
{% endblock %}
", "BallackTimeSheetBundle:employe:profil.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/employe/profil.html.twig");
    }
}
