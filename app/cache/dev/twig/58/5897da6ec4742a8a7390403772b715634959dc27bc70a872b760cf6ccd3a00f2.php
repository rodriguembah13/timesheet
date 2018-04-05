<?php

/* BallackTimeSheetBundle:Departement:new.html.twig */
class __TwigTemplate_1f9dfa898949f2ba40fba2409026bca209867f1e9cc02ad582cc218acbe4a768 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:Departement:new.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Departement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Departement <small>new</small></h2>

        <div class=\"clearfix\"></div>
    </div>
 <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), 'enctype');
        echo " class=\"form-horizontal form-label-left\">

            ";
        // line 13
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'errors');
        echo "

            <div class=\"form-group\">
                ";
        // line 17
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "departement", array()), 'label', array("label" => "Libelle "));
        echo "
                </div>
                ";
        // line 21
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "departement", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 24
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "departement", array()), 'widget');
        echo "
                </div></div>
           
            <div class=\"ln_solid\"></div>
            <div class=\"form-group\">
                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                    <button class=\"btn btn-primary\" type=\"button\">Cancel</button>
                    <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                    <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                </div>
            </div>
            ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), 'rest');
        echo "

        </form>
";
        // line 42
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_index");
        echo "\">Back to the list</a>
        </li>
    </ul></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:Departement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 45,  101 => 42,  95 => 35,  80 => 24,  74 => 21,  69 => 18,  66 => 17,  59 => 13,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Departement <small>new</small></h2>

        <div class=\"clearfix\"></div>
    </div>
 <form action=\"{{ path('departement_new') }}\" method=\"post\" {{ form_enctype(form) }} class=\"form-horizontal form-label-left\">

            {# Les erreurs générales du formulaire. #}
            {{ form_errors(form) }}

            <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.departement, \"Libelle \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.departement) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.departement) }}
                </div></div>
           
            <div class=\"ln_solid\"></div>
            <div class=\"form-group\">
                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                    <button class=\"btn btn-primary\" type=\"button\">Cancel</button>
                    <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                    <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                </div>
            </div>
            {{ form_rest(form) }}

        </form>
{#    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}#}

    <ul>
        <li>
            <a href=\"{{ path('departement_index') }}\">Back to the list</a>
        </li>
    </ul></div>
{% endblock %}
", "BallackTimeSheetBundle:Departement:new.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Departement/new.html.twig");
    }
}
