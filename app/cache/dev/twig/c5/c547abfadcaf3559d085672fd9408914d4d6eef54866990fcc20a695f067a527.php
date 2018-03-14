<?php

/* BallackTimeSheetBundle:Departement:new.html.twig */
class __TwigTemplate_64027e5ada3ebcad931de5907b16335394a18613e60e15ac407263a30158565c extends Twig_Template
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
        echo "    <h1>Departement creation</h1>
 <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'enctype');
        echo " class=\"form-horizontal form-label-left\">

            ";
        // line 8
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'errors');
        echo "

            <div class=\"form-group\">
                ";
        // line 12
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "departement", array()), 'label', array("label" => "Libelle "));
        echo "
                </div>
                ";
        // line 16
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "departement", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 19
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "departement", array()), 'widget');
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
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), 'rest');
        echo "

        </form>
";
        // line 37
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
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
        return array (  101 => 40,  96 => 37,  90 => 30,  75 => 19,  69 => 16,  64 => 13,  61 => 12,  54 => 8,  47 => 5,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <h1>Departement creation</h1>
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
    </ul>
{% endblock %}
", "BallackTimeSheetBundle:Departement:new.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Departement/new.html.twig");
    }
}
