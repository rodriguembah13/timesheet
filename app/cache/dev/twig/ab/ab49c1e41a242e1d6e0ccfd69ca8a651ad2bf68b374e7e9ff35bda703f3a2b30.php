<?php

/* BallackTimeSheetBundle::layout.html.twig */
class __TwigTemplate_9b2bf08f974e3f3898bcd670b9bf96b6e14b1520e819b590fdd647dbea8fe214 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" /><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container-fluid\">
        <div class=\"row\"> 
            <div id=\"nav\">
                <nav class=\"navbar navbar-inverse navbar-fixed-top \" role=\"navigation\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"#\">TimeSheet</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav\">
                            </ul>
                            ";
        // line 37
        $this->loadTemplate("BallackTimeSheetBundle:Default:nav.html.twig", "BallackTimeSheetBundle::layout.html.twig", 37)->display($context);
        // line 38
        echo "                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div> 
        </div>
        <br><br><br><br>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-2\">
                   ";
        // line 47
        $this->loadTemplate("BallackTimeSheetBundle:Default:menu.html.twig", "BallackTimeSheetBundle::layout.html.twig", 47)->display($context);
        // line 48
        echo "                </div>
                <div class=\"col-lg-10\">
                ";
        // line 50
        $this->displayBlock('main', $context, $blocks);
        // line 52
        echo " </div></div>
        </div></div>
                ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
             <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/css/script.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/MetisMenu/metisMenu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ballack";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 51
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "            <script  src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script  src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                    <script  src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
            <script  src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/moment.min.js"), "html", null, true);
        echo "\"></script>
                    <script  src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/wow.js"), "html", null, true);
        echo "\"></script>

            <script  src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/MetisMenu/MetisMenu.js"), "html", null, true);
        echo "\"></script>
                    <script  src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 62,  197 => 61,  192 => 59,  188 => 58,  184 => 57,  180 => 56,  175 => 55,  169 => 54,  161 => 51,  155 => 50,  143 => 13,  134 => 12,  130 => 11,  126 => 10,  122 => 9,  118 => 8,  114 => 7,  111 => 6,  105 => 5,  96 => 64,  94 => 54,  90 => 52,  88 => 50,  84 => 48,  82 => 47,  71 => 38,  69 => 37,  43 => 14,  38 => 13,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" /><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        {% block stylesheets %}

            <link rel=\"stylesheet\" href=\"{{ asset('bundles/ballacktimesheet/css/bootstrap.css') }}\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/ballacktimesheet/css/font-awesome.min.css') }}\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/ballacktimesheet/css/animate.css') }}\" type=\"text/css\" media=\"all\"/>
             <link rel=\"stylesheet\" href=\"{{ asset('bundles/ballacktimesheet/css/script.css') }}\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/ballacktimesheet/css/bootstrap-datetimepicker.css') }}\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/ballacktimesheet/MetisMenu/metisMenu.css') }}\" type=\"text/css\" media=\"all\"/>
        {% endblock %}<title>{% block title %}Ballack{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container-fluid\">
        <div class=\"row\"> 
            <div id=\"nav\">
                <nav class=\"navbar navbar-inverse navbar-fixed-top \" role=\"navigation\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"#\">TimeSheet</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav\">
                            </ul>
                            {% include \"BallackTimeSheetBundle:Default:nav.html.twig\" %}
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div> 
        </div>
        <br><br><br><br>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-2\">
                   {% include \"BallackTimeSheetBundle:Default:menu.html.twig\" %}
                </div>
                <div class=\"col-lg-10\">
                {% block main %}

                {% endblock %} </div></div>
        </div></div>
                {% block javascripts %}
            <script  src=\"{{ asset('bundles/ballacktimesheet/js/jquery.min.js') }}\"></script>
            <script  src=\"{{ asset('bundles/ballacktimesheet/js/bootstrap.js') }}\"></script>
                    <script  src=\"{{ asset('bundles/ballacktimesheet/js/bootstrap-datetimepicker.min.js') }}\"></script>
            <script  src=\"{{ asset('bundles/ballacktimesheet/js/moment.min.js') }}\"></script>
                    <script  src=\"{{ asset('bundles/ballacktimesheet/js/wow.js') }}\"></script>

            <script  src=\"{{ asset('bundles/ballacktimesheet/MetisMenu/MetisMenu.js') }}\"></script>
                    <script  src=\"{{ asset('bundles/ballacktimesheet/js/script.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "BallackTimeSheetBundle::layout.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/layout.html.twig");
    }
}
