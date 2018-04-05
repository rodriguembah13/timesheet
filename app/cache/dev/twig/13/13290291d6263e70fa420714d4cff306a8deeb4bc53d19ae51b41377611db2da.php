<?php

/* BallackTimeSheetBundle:employe:new.html.twig */
class __TwigTemplate_3f278f49ce79d706fae67bbf305fcb32f4dabbbcab1438b4ff16def26a6c4e10 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:employe:new.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:employe:new.html.twig"));

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
                    <h2>New Employe</h2>
                   
                    <div class=\"clearfix\"></div>
                  </div>
 
<form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), 'enctype');
        echo " class=\"form-horizontal form-label-left col-md-6\">

            ";
        // line 14
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), 'errors');
        echo "
    <div class=\"\" style=\"border: #0000F0 solid\">
    <div class=\"form-group\">
        ";
        // line 18
        echo "        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "compte", array()), "email", array()), 'label', array("label" => "email "));
        echo "
        </div>
        ";
        // line 22
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "compte", array()), "email", array()), 'errors');
        echo "
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            ";
        // line 25
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "compte", array()), "email", array()), 'widget');
        echo "
        </div></div>
    <div class=\"form-group\">
        ";
        // line 29
        echo "        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "compte", array()), "username", array()), 'label', array("label" => "username "));
        echo "
        </div>
        ";
        // line 33
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "compte", array()), "username", array()), 'errors');
        echo "
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            ";
        // line 36
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "compte", array()), "username", array()), 'widget');
        echo "
        </div></div>
    <div class=\"form-group\">
        ";
        // line 40
        echo "        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">

        </div>
        ";
        // line 44
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "compte", array()), "plainPassword", array()), 'errors');
        echo "
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            ";
        // line 47
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "compte", array()), "plainPassword", array()), 'widget');
        echo "
        </div></div>
    </div>
            <div class=\"form-group\">
                ";
        // line 52
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "nom", array()), 'label', array("label" => "nom "));
        echo "
                </div>
                ";
        // line 56
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "nom", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 59
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "nom", array()), 'widget');
        echo "
                </div>
            </div>
                <div class=\"form-group\">
                ";
        // line 64
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "prenom", array()), 'label', array("label" => "prenom "));
        echo "
                </div>
                ";
        // line 68
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "prenom", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 71
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "prenom", array()), 'widget');
        echo "
                </div>
                </div>
                <div class=\"form-group\">
                ";
        // line 76
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "situation", array()), 'label', array("label" => "situation "));
        echo "
                </div>
                ";
        // line 80
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "situation", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 83
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "situation", array()), 'widget');
        echo "
                </div></div>
                <div class=\"form-group\">
                ";
        // line 87
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), "dateNaissance", array()), 'label', array("label" => "dateNaissance "));
        echo "
                </div>
                ";
        // line 91
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), "dateNaissance", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 94
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), "dateNaissance", array()), 'widget');
        echo "
                    <span class=\"add-on\"><i class=\"icon-th\"></i></span>
                </div>
                </div>
                <div class=\"form-group\">
                ";
        // line 100
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), "departement", array()), 'label', array("label" => "departement "));
        echo "
                </div>
                ";
        // line 104
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->source); })()), "departement", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 107
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->source); })()), "departement", array()), 'widget');
        echo "
                </div></div>
                <div class=\"form-group\">
                ";
        // line 111
        echo "                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->source); })()), "isChef", array()), 'label', array("label" => "isChef "));
        echo "
                </div>
                ";
        // line 115
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->source); })()), "isChef", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 118
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->source); })()), "isChef", array()), 'widget');
        echo "
                </div>
                </div>
    ";
        // line 133
        echo "
                ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->source); })()), 'rest');
        echo "
            <div class=\"ln_solid\"></div>
            <div class=\"form-group\">
                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                    <button class=\"btn btn-primary\" type=\"button\">Cancel</button>
                    <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                    <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                </div>
            </div>


        </form>
";
        // line 150
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:employe:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 150,  261 => 134,  258 => 133,  251 => 118,  245 => 115,  240 => 112,  237 => 111,  230 => 107,  224 => 104,  219 => 101,  216 => 100,  207 => 94,  201 => 91,  196 => 88,  193 => 87,  186 => 83,  180 => 80,  175 => 77,  172 => 76,  164 => 71,  158 => 68,  153 => 65,  150 => 64,  142 => 59,  136 => 56,  131 => 53,  128 => 52,  120 => 47,  114 => 44,  109 => 40,  102 => 36,  96 => 33,  91 => 30,  88 => 29,  81 => 25,  75 => 22,  70 => 19,  67 => 18,  60 => 14,  53 => 11,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
     <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>New Employe</h2>
                   
                    <div class=\"clearfix\"></div>
                  </div>
 
<form action=\"{{ path('employe_new') }}\" method=\"post\" {{ form_enctype(form) }} class=\"form-horizontal form-label-left col-md-6\">

            {# Les erreurs générales du formulaire. #}
            {{ form_errors(form) }}
    <div class=\"\" style=\"border: #0000F0 solid\">
    <div class=\"form-group\">
        {# Génération du label. #}
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            {{ form_label(form.compte.email, \"email \") }}
        </div>
        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(form.compte.email) }}
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            {# Génération de l'input. #}
            {{ form_widget(form.compte.email) }}
        </div></div>
    <div class=\"form-group\">
        {# Génération du label. #}
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            {{ form_label(form.compte.username, \"username \") }}
        </div>
        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(form.compte.username) }}
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            {# Génération de l'input. #}
            {{ form_widget(form.compte.username) }}
        </div></div>
    <div class=\"form-group\">
        {# Génération du label. #}
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">

        </div>
        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(form.compte.plainPassword) }}
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            {# Génération de l'input. #}
            {{ form_widget(form.compte.plainPassword) }}
        </div></div>
    </div>
            <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.nom, \"nom \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.nom) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.nom) }}
                </div>
            </div>
                <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.prenom, \"prenom \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.prenom) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.prenom) }}
                </div>
                </div>
                <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.situation, \"situation \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.situation) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.situation) }}
                </div></div>
                <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.dateNaissance, \"dateNaissance \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.dateNaissance) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.dateNaissance) }}
                    <span class=\"add-on\"><i class=\"icon-th\"></i></span>
                </div>
                </div>
                <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.departement, \"departement \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.departement) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.departement) }}
                </div></div>
                <div class=\"form-group\">
                {# Génération du label. #}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.isChef, \"isChef \") }}
                </div>
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.isChef) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.isChef) }}
                </div>
                </div>
    {#<div class=\"form-group\">
       
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            {{ form_label(form.image, \"image \") }}
        </div>
        
        {{ form_errors(form.image ) }}
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
           
            {{ form_widget(form.image) }}
        </div></div>
#}

                {{ form_rest(form) }}
            <div class=\"ln_solid\"></div>
            <div class=\"form-group\">
                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                    <button class=\"btn btn-primary\" type=\"button\">Cancel</button>
                    <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                    <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                </div>
            </div>


        </form>
{#    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}#}

</div>
{% endblock %}
", "BallackTimeSheetBundle:employe:new.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/employe/new.html.twig");
    }
}
