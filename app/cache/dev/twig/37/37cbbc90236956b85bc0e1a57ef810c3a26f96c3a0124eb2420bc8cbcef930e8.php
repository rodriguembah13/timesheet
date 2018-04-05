<?php

/* BallackTimeSheetBundle:projet:new.html.twig */
class __TwigTemplate_611ae2b786a533c193194dba8e02c07d7166e79a5c9ad3d4068e9734801bd183 extends Twig_Template
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
        echo "<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Projet  <small>New</small></h2>

        <div class=\"clearfix\"></div>
    </div>
    <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), 'enctype');
        echo "
          class=\"form-horizontal form-label-left\">

        ";
        // line 14
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 18
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "nomProjet", array()), 'label', array("label" => "nomProjet "));
        echo "
            </div>
            ";
        // line 22
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "nomProjet", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 25
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "nomProjet", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 30
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "client", array()), 'label', array("label" => "client "));
        echo "
            </div>
            ";
        // line 34
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "client", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 37
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "client", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 42
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "description", array()), 'label', array("label" => "description "));
        echo "
            </div>
            ";
        // line 46
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "description", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 49
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "description", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 54
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "dateStart", array()), 'label', array("label" => "dateStart "));
        echo "
            </div>
            ";
        // line 58
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "dateStart", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 61
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "dateStart", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 66
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "dateStop", array()), 'label', array("label" => "dateStop "));
        echo "
            </div>
            ";
        // line 70
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "dateStop", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 73
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "dateStop", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 78
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "employes", array()), 'label', array("label" => "employes "));
        echo "
            </div>
            ";
        // line 82
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "employes", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 85
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "employes", array()), 'widget');
        echo "
            </div>
        </div>
        ";
        // line 91
        echo "        <div class=\"ln_solid\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <button class=\"btn btn-primary\" type=\"button\">Cancel</button>
                <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                <button type=\"submit\" class=\"btn btn-success\">Submit</button>
            </div>
        </div>
        ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->source); })()), 'rest');
        echo "

    </form>
    <ul>
        <li>
            <a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_index");
        echo "\">Back to the list</a>
        </li>
    </ul></div>
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
        return array (  216 => 104,  208 => 99,  198 => 91,  191 => 85,  185 => 82,  180 => 79,  177 => 78,  169 => 73,  163 => 70,  158 => 67,  155 => 66,  147 => 61,  141 => 58,  136 => 55,  133 => 54,  125 => 49,  119 => 46,  114 => 43,  111 => 42,  103 => 37,  97 => 34,  92 => 31,  89 => 30,  81 => 25,  75 => 22,  70 => 19,  67 => 18,  60 => 14,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Projet  <small>New</small></h2>

        <div class=\"clearfix\"></div>
    </div>
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
    </ul></div>
{% endblock %}
", "BallackTimeSheetBundle:projet:new.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/projet/new.html.twig");
    }
}
