<?php

/* BallackTimeSheetBundle:contrat:new.html.twig */
class __TwigTemplate_0bb51b0006666275c33d24a738227da1cd9e555760970ed4283b859fa5fae6c8 extends Twig_Template
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
        echo "    <div class=\"x_panel\">
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'errors');
        echo "
            <div class=\"form-group\">
               
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "departement", array()), 'label', array("label" => "Departement "));
        echo "
                </div>
                
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "departement", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                   
                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "departement", array()), 'widget');
        echo "
                </div></div>
           <div class=\"form-group\">
                
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "employe", array()), 'label', array("label" => "employe "));
        echo "
                </div>
                
                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "employe", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                   
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "employe", array()), 'widget');
        echo "
                </div></div>
            <div class=\"form-group\">
                
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "typeContrat", array()), 'label', array("label" => "typeContrat "));
        echo "
                </div>
                
                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "typeContrat", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    
                    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "typeContrat", array()), 'widget');
        echo "
                </div></div>
            <div class=\"form-group\">
                
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "salaireBrute", array()), 'label', array("label" => "salaireBrute "));
        echo "
                </div>
                
                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "salaireBrute", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                   
                    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "salaireBrute", array()), 'widget');
        echo "
                </div></div>
            <div class=\"form-group\">
               
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "startDate", array()), 'label', array("label" => "startDate "));
        echo "
                </div>
                
                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "startDate", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    
                    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "startDate", array()), 'widget');
        echo "
                </div></div>
            <div class=\"form-group\">
                
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "endDate", array()), 'label', array("label" => "endDate "));
        echo "
                </div>
                
                ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "endDate", array()), 'errors');
        echo "
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                   
                    ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "endDate", array()), 'widget');
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
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), 'rest');
        echo "

        </form>
";
        // line 96
        echo "
        <ul>
            <li>
                <a href=\"";
        // line 99
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
        return array (  204 => 99,  199 => 96,  193 => 89,  179 => 78,  173 => 75,  167 => 72,  159 => 67,  153 => 64,  147 => 61,  139 => 56,  133 => 53,  127 => 50,  119 => 45,  113 => 42,  107 => 39,  99 => 34,  93 => 31,  87 => 28,  79 => 23,  73 => 20,  67 => 17,  60 => 13,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
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

           
            {{ form_errors(form) }}
            <div class=\"form-group\">
               
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.departement, \"Departement \") }}
                </div>
                
                {{ form_errors(form.departement) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                   
                    {{ form_widget(form.departement) }}
                </div></div>
           <div class=\"form-group\">
                
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.employe, \"employe \") }}
                </div>
                
                {{ form_errors(form.employe) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                   
                    {{ form_widget(form.employe) }}
                </div></div>
            <div class=\"form-group\">
                
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.typeContrat, \"typeContrat \") }}
                </div>
                
                {{ form_errors(form.typeContrat) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    
                    {{ form_widget(form.typeContrat) }}
                </div></div>
            <div class=\"form-group\">
                
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.salaireBrute, \"salaireBrute \") }}
                </div>
                
                {{ form_errors(form.salaireBrute) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                   
                    {{ form_widget(form.salaireBrute) }}
                </div></div>
            <div class=\"form-group\">
               
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.startDate, \"startDate \") }}
                </div>
                
                {{ form_errors(form.startDate) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    
                    {{ form_widget(form.startDate) }}
                </div></div>
            <div class=\"form-group\">
                
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.endDate, \"endDate \") }}
                </div>
                
                {{ form_errors(form.endDate) }}
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                   
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
{#        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
        {{ form_end(form) }}#}

        <ul>
            <li>
                <a href=\"{{ path('contrat_index') }}\">Back to the list</a>
            </li>
        </ul></div>
    {% endblock %}
", "BallackTimeSheetBundle:contrat:new.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/contrat/new.html.twig");
    }
}
