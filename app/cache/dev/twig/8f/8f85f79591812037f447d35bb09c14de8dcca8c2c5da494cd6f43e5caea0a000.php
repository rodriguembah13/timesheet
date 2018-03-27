<?php

/* BallackTimeSheetBundle:contrat:new.html.twig */
class __TwigTemplate_99bd434f11edcfbf276436d109dd7a7c9508aeaa14c41033d8f09f6d4f304b53 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:contrat:new.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:contrat:new.html.twig"));

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
        <h2>Contrat <small>New</small></h2>

        <div class=\"clearfix\"></div>
    </div>
    <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), 'enctype');
        echo " class=\"form-horizontal form-label-left\">

        ";
        // line 13
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 17
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "employe", array()), 'label', array("label" => "employe "));
        echo "
            </div>
            ";
        // line 21
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "employe", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 24
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "employe", array()), 'widget');
        echo "
            </div></div>
        <div class=\"form-group\">
            ";
        // line 28
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "typeContrat", array()), 'label', array("label" => "typeContrat "));
        echo "
            </div>
            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "typeContrat", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 35
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "typeContrat", array()), 'widget');
        echo "
            </div></div>
        <div class=\"form-group\">
            ";
        // line 39
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "salaireBrute", array()), 'label', array("label" => "salaireBrute "));
        echo "
            </div>
            ";
        // line 43
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "salaireBrute", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 46
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "salaireBrute", array()), 'widget');
        echo "
            </div></div>
        <div class=\"form-group\">
            ";
        // line 50
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "startDate", array()), 'label', array("label" => "startDate "));
        echo "
            </div>
            ";
        // line 54
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "startDate", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 57
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "startDate", array()), 'widget');
        echo "
            </div></div>
        <div class=\"form-group\">
            ";
        // line 61
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "endDate", array()), 'label', array("label" => "endDate "));
        echo "
            </div>
            ";
        // line 65
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "endDate", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 68
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "endDate", array()), 'widget');
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
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), 'rest');
        echo "

    </form>
    ";
        // line 82
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), 'form_start');
        echo "
    ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), 'widget');
        echo "
    <input type=\"submit\" value=\"Create\" />
    ";
        // line 85
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_index");
        echo "\">Back to the list</a>
        </li>
    </ul></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:contrat:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 89,  194 => 85,  189 => 83,  185 => 82,  179 => 79,  164 => 68,  158 => 65,  153 => 62,  150 => 61,  143 => 57,  137 => 54,  132 => 51,  129 => 50,  122 => 46,  116 => 43,  111 => 40,  108 => 39,  101 => 35,  95 => 32,  90 => 29,  87 => 28,  80 => 24,  74 => 21,  69 => 18,  66 => 17,  59 => 13,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Contrat <small>New</small></h2>

        <div class=\"clearfix\"></div>
    </div>
    <form action=\"{{ path('contrat_new') }}\" method=\"post\" {{ form_enctype(form) }} class=\"form-horizontal form-label-left\">

        {# Les erreurs générales du formulaire. #}
        {{ form_errors(form) }}

        <div class=\"form-group\">
            {# Génération du label. #}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {{ form_label(form.employe, \"employe \") }}
            </div>
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.employe) }}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {# Génération de l'input. #}
                {{ form_widget(form.employe) }}
            </div></div>
        <div class=\"form-group\">
            {# Génération du label. #}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {{ form_label(form.typeContrat, \"typeContrat \") }}
            </div>
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.typeContrat) }}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {# Génération de l'input. #}
                {{ form_widget(form.typeContrat) }}
            </div></div>
        <div class=\"form-group\">
            {# Génération du label. #}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {{ form_label(form.salaireBrute, \"salaireBrute \") }}
            </div>
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.salaireBrute) }}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {# Génération de l'input. #}
                {{ form_widget(form.salaireBrute) }}
            </div></div>
        <div class=\"form-group\">
            {# Génération du label. #}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {{ form_label(form.startDate, \"startDate \") }}
            </div>
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.startDate) }}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {# Génération de l'input. #}
                {{ form_widget(form.startDate) }}
            </div></div>
        <div class=\"form-group\">
            {# Génération du label. #}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {{ form_label(form.endDate, \"endDate \") }}
            </div>
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.endDate) }}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {# Génération de l'input. #}
                {{ form_widget(form.endDate) }}
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
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('contrat_index') }}\">Back to the list</a>
        </li>
    </ul></div>
{% endblock %}
", "BallackTimeSheetBundle:contrat:new.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/contrat/new.html.twig");
    }
}
