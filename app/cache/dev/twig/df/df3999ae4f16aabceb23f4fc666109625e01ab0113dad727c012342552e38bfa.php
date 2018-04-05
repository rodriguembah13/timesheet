<?php

/* BallackTimeSheetBundle:Default:calendriercollegue.html.twig */
class __TwigTemplate_253801802e66132f1974b14bd479037536904ffa3223d35631aad47e7c4bef9d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:Default:calendriercollegue.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Default:calendriercollegue.html.twig"));

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
            <h2>Calendrier <small>Des demandes de conges Collegues</small></h2>

            <div class=\"clearfix\"></div>
        </div>
        <div class=\"alert alert-primary\" role=\"alert\">
            LEGENDE
        </div>
        <div class=\"block-calandar text-center\">
            <span class=\"label label-default col-lg-1\">en attente</span>

            <span class=\"label label-success col-lg-1 col-lg-offset-4\">accepte</span>


            <span class=\"label label-danger col-lg-1 col-lg-offset-4\">rejete</span>

        </div><div class=\"clearfix\"></div>
        <div id='calendar_collegue'></div>
     <div id=\"loading_c\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h2 class=\"modal-title text-center\">Patientez</h2>
                    </div>
                    <div class=\"modal-body text-center\">
                       <img id=\"loader\" align=\"middle\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/images/loader.gif"), "html", null, true);
        echo "\" />
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:Default:calendriercollegue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 32,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Calendrier <small>Des demandes de conges Collegues</small></h2>

            <div class=\"clearfix\"></div>
        </div>
        <div class=\"alert alert-primary\" role=\"alert\">
            LEGENDE
        </div>
        <div class=\"block-calandar text-center\">
            <span class=\"label label-default col-lg-1\">en attente</span>

            <span class=\"label label-success col-lg-1 col-lg-offset-4\">accepte</span>


            <span class=\"label label-danger col-lg-1 col-lg-offset-4\">rejete</span>

        </div><div class=\"clearfix\"></div>
        <div id='calendar_collegue'></div>
     <div id=\"loading_c\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h2 class=\"modal-title text-center\">Patientez</h2>
                    </div>
                    <div class=\"modal-body text-center\">
                       <img id=\"loader\" align=\"middle\" src=\"{{ asset('bundles/ballacktimesheet/images/loader.gif') }}\" />
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
{% endblock %}", "BallackTimeSheetBundle:Default:calendriercollegue.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Default/calendriercollegue.html.twig");
    }
}
