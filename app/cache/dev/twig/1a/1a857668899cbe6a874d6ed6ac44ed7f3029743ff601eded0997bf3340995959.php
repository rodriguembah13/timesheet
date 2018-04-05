<?php

/* BallackTimeSheetBundle:Default:calendrier.html.twig */
class __TwigTemplate_dd14fa43d0cef97857dd5efe99a1f7a6455c8c8a1c80dda8e7fdcde28d63ffb1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:Default:calendrier.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Default:calendrier.html.twig"));

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
            <h2>Calendrier <small>Des demandes de conges</small></h2>

            <div class=\"clearfix\"></div>
        </div>
        <div class=\"block-calandar text-center\">
            <span class=\"label label-default col-lg-1\">en attente</span>

            <span class=\"label label-success col-lg-1 col-lg-offset-4\">accepte</span>


            <span class=\"label label-danger col-lg-1 col-lg-offset-4\">rejete</span>

        </div>
        <div class=\"clearfix\"></div>


        <div id='calendar' class=\"\"></div>
        <div id=\"loadin\" class=\"modal fade\">
            <div class=\"modal-header\">
                <h2 class=\"modal-title\">Patientez</h2>
            </div>
            <div class=\"modal-body\">
                <img id=\"loader\" align=\"middle\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/images/loader.gif"), "html", null, true);
        echo "\" />
            </div>


        </div> 

        <div id=\"loading\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h2 class=\"modal-title text-center\">Patientez</h2>
                    </div>
                    <div class=\"modal-body text-center\">
                       <img id=\"loader\" align=\"middle\" src=\"";
        // line 43
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
        return "BallackTimeSheetBundle:Default:calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 43,  70 => 28,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Calendrier <small>Des demandes de conges</small></h2>

            <div class=\"clearfix\"></div>
        </div>
        <div class=\"block-calandar text-center\">
            <span class=\"label label-default col-lg-1\">en attente</span>

            <span class=\"label label-success col-lg-1 col-lg-offset-4\">accepte</span>


            <span class=\"label label-danger col-lg-1 col-lg-offset-4\">rejete</span>

        </div>
        <div class=\"clearfix\"></div>


        <div id='calendar' class=\"\"></div>
        <div id=\"loadin\" class=\"modal fade\">
            <div class=\"modal-header\">
                <h2 class=\"modal-title\">Patientez</h2>
            </div>
            <div class=\"modal-body\">
                <img id=\"loader\" align=\"middle\" src=\"{{ asset('bundles/ballacktimesheet/images/loader.gif') }}\" />
            </div>


        </div> 

        <div id=\"loading\" class=\"modal fade\" role=\"dialog\">
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
{% endblock %}", "BallackTimeSheetBundle:Default:calendrier.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Default/calendrier.html.twig");
    }
}
