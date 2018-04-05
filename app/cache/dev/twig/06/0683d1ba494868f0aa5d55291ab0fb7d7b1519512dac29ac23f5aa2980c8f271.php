<?php

/* BallackTimeSheetBundle:activite:new.html.twig */
class __TwigTemplate_08994da6cc4f832008fe8abccc9072b282ab045c3a663264050a7b0d6cdc6812 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:activite:new.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:activite:new.html.twig"));

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
        <h2>Activite <small>New</small></h2>

        <div class=\"clearfix\"></div>
    </div>
<form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_new");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "description", array()), 'label', array("label" => "description "));
        echo "
                </div>
                ";
        // line 21
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "description", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 24
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "description", array()), 'widget');
        echo "
                </div></div>
           <div class=\"form-group\">
                ";
        // line 28
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "timeStart", array()), 'label', array("label" => "timeStart "));
        echo "
                </div>
                ";
        // line 32
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "timeStart", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 35
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "timeStart", array()), 'widget');
        echo "
                </div></div>
                <div class=\"form-group\">
                ";
        // line 39
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "timestop", array()), 'label', array("label" => "timestop "));
        echo "
                </div>
                ";
        // line 43
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "timestop", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 46
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "timestop", array()), 'widget');
        echo "
                </div></div>
                <div class=\"form-group\">
                ";
        // line 50
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "projet", array()), 'label', array("label" => "projet "));
        echo "
                </div>
                ";
        // line 54
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "projet", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 57
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "projet", array()), 'widget');
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
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), 'rest');
        echo "

        </form>
  ";
        // line 74
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:activite:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 77,  163 => 74,  157 => 67,  143 => 57,  137 => 54,  132 => 51,  129 => 50,  122 => 46,  116 => 43,  111 => 40,  108 => 39,  101 => 35,  95 => 32,  90 => 29,  87 => 28,  80 => 24,  74 => 21,  69 => 18,  66 => 17,  59 => 13,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Activite <small>New</small></h2>

        <div class=\"clearfix\"></div>
    </div>
<form action=\"{{ path('activite_new') }}\" method=\"post\" {{ form_enctype(form) }} class=\"form-horizontal form-label-left\">

            {# Les erreurs générales du formulaire. #}
            {{ form_errors(form) }}

            <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.description, \"description \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.description) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.description) }}
                </div></div>
           <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.timeStart, \"timeStart \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.timeStart) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.timeStart) }}
                </div></div>
                <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.timestop, \"timestop \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.timestop) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.timestop) }}
                </div></div>
                <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.projet, \"projet \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.projet) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.projet) }}
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
  {#  {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}#}

    <ul>
        <li>
            <a href=\"{{ path('activite_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "BallackTimeSheetBundle:activite:new.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/activite/new.html.twig");
    }
}
