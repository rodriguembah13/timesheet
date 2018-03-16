<?php

/* BallackTimeSheetBundle:projet:new.html.twig */
class __TwigTemplate_a9c4279b0c0959758728145de057f6029a420de03d7310db28bd66328ea43a2a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:projet:new.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:projet:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Projet creation</h1>
    <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'enctype');
        echo "
          class=\"form-horizontal form-label-left\">

        ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 13
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "nomProjet", array()), 'label', array("label" => "nomProjet "));
        echo "
            </div>
            ";
        // line 17
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "nomProjet", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 20
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "nomProjet", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 25
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "client", array()), 'label', array("label" => "client "));
        echo "
            </div>
            ";
        // line 29
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "client", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 32
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "client", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 37
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "description", array()), 'label', array("label" => "description "));
        echo "
            </div>
            ";
        // line 41
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "description", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 44
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "description", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 49
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "dateStart", array()), 'label', array("label" => "dateStart "));
        echo "
            </div>
            ";
        // line 53
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "dateStart", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 56
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "dateStart", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 61
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "dateStop", array()), 'label', array("label" => "dateStop "));
        echo "
            </div>
            ";
        // line 65
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "dateStop", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 68
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "dateStop", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 73
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "employes", array()), 'label', array("label" => "employes "));
        echo "
            </div>
            ";
        // line 77
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "employes", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 80
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "employes", array()), 'widget');
        echo "
            </div>
        </div>
        ";
        // line 86
        echo "        <div class=\"ln_solid\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <button class=\"btn btn-primary\" type=\"button\">Cancel</button>
                <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                <button type=\"submit\" class=\"btn btn-success\">Submit</button>
            </div>
        </div>
        ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), 'rest');
        echo "

    </form>
    <ul>
        <li>
            <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:projet:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 99,  203 => 94,  193 => 86,  186 => 80,  180 => 77,  175 => 74,  172 => 73,  164 => 68,  158 => 65,  153 => 62,  150 => 61,  142 => 56,  136 => 53,  131 => 50,  128 => 49,  120 => 44,  114 => 41,  109 => 38,  106 => 37,  98 => 32,  92 => 29,  87 => 26,  84 => 25,  76 => 20,  70 => 17,  65 => 14,  62 => 13,  55 => 9,  47 => 5,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <h1>Projet creation</h1>
    <form action=\"{{ path('projet_new') }}\" method=\"post\" {{ form_enctype(form) }}
          class=\"form-horizontal form-label-left\">

        {# Les erreurs générales du formulaire. #}
        {{ form_errors(form) }}

        <div class=\"form-group\">
            {# Génération du label. #}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {{ form_label(form.nomProjet, \"nomProjet \") }}
            </div>
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.nomProjet) }}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {# Génération de l'input. #}
                {{ form_widget(form.nomProjet) }}
            </div>
        </div>
        <div class=\"form-group\">
            {# Génération du label. #}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {{ form_label(form.client, \"client \") }}
            </div>
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.client) }}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {# Génération de l'input. #}
                {{ form_widget(form.client) }}
            </div>
        </div>
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
            </div>
        </div>
        <div class=\"form-group\">
            {# Génération du label. #}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {{ form_label(form.dateStart, \"dateStart \") }}
            </div>
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.dateStart) }}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {# Génération de l'input. #}
                {{ form_widget(form.dateStart) }}
            </div>
        </div>
        <div class=\"form-group\">
            {# Génération du label. #}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {{ form_label(form.dateStop, \"dateStop \") }}
            </div>
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.dateStop) }}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {# Génération de l'input. #}
                {{ form_widget(form.dateStop) }}
            </div>
        </div>
        <div class=\"form-group\">
            {# Génération du label. #}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {{ form_label(form.employes, \"employes \") }}
            </div>
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.employes) }}
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {# Génération de l'input. #}
                {{ form_widget(form.employes) }}
            </div>
        </div>
        {#{% for tag in form.employes %}
            <li>{{ form_row(tag.nom) }}</li>
        {% endfor %}#}
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
            <a href=\"{{ path('projet_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "BallackTimeSheetBundle:projet:new.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/projet/new.html.twig");
    }
}
