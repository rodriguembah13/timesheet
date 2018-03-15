<?php

/* BallackTimeSheetBundle:contrat:new.html.twig */
class __TwigTemplate_b7aad4c7cd3db335d4dcdf71943163ad61e4704a92ca32649cff5214f59e2960 extends Twig_Template
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
        echo "    <h1>Contrat creation</h1>
    <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'enctype');
        echo " class=\"form-horizontal form-label-left\">

        ";
        // line 8
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 12
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "employe", array()), 'label', array("label" => "employe "));
        echo "
            </div>
            ";
        // line 16
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "employe", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 19
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "employe", array()), 'widget');
        echo "
            </div></div>
        <div class=\"form-group\">
            ";
        // line 23
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "typeContrat", array()), 'label', array("label" => "typeContrat "));
        echo "
            </div>
            ";
        // line 27
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "typeContrat", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 30
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "typeContrat", array()), 'widget');
        echo "
            </div></div>
        <div class=\"form-group\">
            ";
        // line 34
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "salaireBrute", array()), 'label', array("label" => "salaireBrute "));
        echo "
            </div>
            ";
        // line 38
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "salaireBrute", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 41
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "salaireBrute", array()), 'widget');
        echo "
            </div></div>
        <div class=\"form-group\">
            ";
        // line 45
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "startDate", array()), 'label', array("label" => "startDate "));
        echo "
            </div>
            ";
        // line 49
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "startDate", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 52
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "startDate", array()), 'widget');
        echo "
            </div></div>
        <div class=\"form-group\">
            ";
        // line 56
        echo "            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "endDate", array()), 'label', array("label" => "endDate "));
        echo "
            </div>
            ";
        // line 60
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "endDate", array()), 'errors');
        echo "
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 63
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "endDate", array()), 'widget');
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
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), 'rest');
        echo "

    </form>
    ";
        // line 77
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), 'form_start');
        echo "
    ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), 'widget');
        echo "
    <input type=\"submit\" value=\"Create\" />
    ";
        // line 80
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
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
        return array (  196 => 84,  189 => 80,  184 => 78,  180 => 77,  174 => 74,  159 => 63,  153 => 60,  148 => 57,  145 => 56,  138 => 52,  132 => 49,  127 => 46,  124 => 45,  117 => 41,  111 => 38,  106 => 35,  103 => 34,  96 => 30,  90 => 27,  85 => 24,  82 => 23,  75 => 19,  69 => 16,  64 => 13,  61 => 12,  54 => 8,  47 => 5,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <h1>Contrat creation</h1>
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
    </ul>
{% endblock %}
", "BallackTimeSheetBundle:contrat:new.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/contrat/new.html.twig");
    }
}
