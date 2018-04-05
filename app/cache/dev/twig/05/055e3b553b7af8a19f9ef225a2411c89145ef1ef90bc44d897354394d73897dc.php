<?php

/* BallackTimeSheetBundle:overtime:new.html.twig */
class __TwigTemplate_952e042ecd46b32a5ef19035af86184fc1766e313cb73706b1736e14bb4e5975 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:overtime:new.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:overtime:new.html.twig"));

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
            <h2>Overtime <small>ADD</small></h2>

            <div class=\"clearfix\"></div>
        </div>
    
<form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), 'enctype');
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "date", array()), 'label', array("label" => "date "));
        echo "
                </div>
                ";
        // line 21
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "date", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 24
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "date", array()), 'widget');
        echo "
                </div>
            </div>
                 <div class=\"form-group\">
                ";
        // line 29
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "duree", array()), 'label', array("label" => "duree"));
        echo "
                </div>
                ";
        // line 33
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "duree", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 36
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "duree", array()), 'widget');
        echo "
                </div>(en heure)
                 </div>
                 <div class=\"form-group\">
                ";
        // line 41
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "cause", array()), 'label', array("label" => "cause "));
        echo "
                </div>
                ";
        // line 45
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "cause", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 48
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "cause", array()), 'widget');
        echo "
                </div>
                 </div>
                 <div class=\"form-group\">
                ";
        // line 53
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "projet", array()), 'label', array("label" => "projet "));
        echo "
                </div>
                ";
        // line 57
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "projet", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 60
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "projet", array()), 'widget');
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
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), 'rest');
        echo "

        </form>
    <ul>
        <li>
            <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_my");
        echo "\">Back to the list</a>
        </li>
    </ul></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:overtime:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 76,  161 => 71,  146 => 60,  140 => 57,  135 => 54,  132 => 53,  124 => 48,  118 => 45,  113 => 42,  110 => 41,  102 => 36,  96 => 33,  91 => 30,  88 => 29,  80 => 24,  74 => 21,  69 => 18,  66 => 17,  59 => 13,  53 => 11,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Overtime <small>ADD</small></h2>

            <div class=\"clearfix\"></div>
        </div>
    
<form action=\"{{ path('overtime_new') }}\" method=\"post\" {{ form_enctype(form) }} class=\"form-horizontal form-label-left\">
            {# Les erreurs générales du formulaire. #}
            {{ form_errors(form) }}

            <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.date, \"date \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.date) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.date) }}
                </div>
            </div>
                 <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.duree, \"duree\") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.duree) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.duree) }}
                </div>(en heure)
                 </div>
                 <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.cause, \"cause \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.cause) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.cause) }}
                </div>
                 </div>
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
    <ul>
        <li>
            <a href=\"{{ path('overtime_my') }}\">Back to the list</a>
        </li>
    </ul></div>
{% endblock %}
", "BallackTimeSheetBundle:overtime:new.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/overtime/new.html.twig");
    }
}
