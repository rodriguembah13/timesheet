<?php

/* BallackTimeSheetBundle::layout.html.twig */
class __TwigTemplate_8b1b43b30729dd8f637dec17f6d573ea1e9e194019af1a0cb21956ef565cb38d extends Twig_Template
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
        // line 16
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
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
        // line 40
        $this->loadTemplate("BallackTimeSheetBundle:Default:nav.html.twig", "BallackTimeSheetBundle::layout.html.twig", 40)->display($context);
        // line 41
        echo "                            </div><!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div> 
            </div>
            <br><br><br><br>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-2\">
                        ";
        // line 50
        $this->loadTemplate("BallackTimeSheetBundle:Default:menu.html.twig", "BallackTimeSheetBundle::layout.html.twig", 50)->display($context);
        // line 51
        echo "                    </div>
                    <div class=\"col-lg-10\">
                        ";
        // line 53
        $this->displayBlock('main', $context, $blocks);
        // line 55
        echo " </div></div>
            </div></div>
            ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/css/fullcalendar.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/metisMenu/metisMenu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/css/dropzone.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ballack";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 54
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "            <script  src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script  src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script  src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script  src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>

            <script  src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/wow.js"), "html", null, true);
        echo "\"></script>
            <script  src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
            <script  src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/metisMenu/metisMenu.js"), "html", null, true);
        echo "\"></script>
            <script  src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/dropzone.js"), "html", null, true);
        echo "\"></script>
            <script  src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/main.js"), "html", null, true);
        echo "\"></script>
            <script  src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/ballacktimesheet/js/script.js"), "html", null, true);
        echo "\"></script>
            <script>
                Dropzone.options.image = {
                    maxFiles: 1,
                    acceptedFiles: \"image/jpeg,image/jpg,image/png,image/gif\",
                    dictDefaultMessage : \"change you image\",
                };
            </script>
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
        return array (  222 => 68,  218 => 67,  214 => 66,  210 => 65,  206 => 64,  202 => 63,  197 => 61,  193 => 60,  189 => 59,  184 => 58,  178 => 57,  170 => 54,  164 => 53,  152 => 16,  142 => 14,  138 => 13,  134 => 12,  130 => 11,  126 => 10,  122 => 9,  118 => 8,  114 => 7,  111 => 6,  105 => 5,  96 => 77,  94 => 57,  90 => 55,  88 => 53,  84 => 51,  82 => 50,  71 => 41,  69 => 40,  43 => 17,  38 => 16,  36 => 5,  30 => 1,);
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
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/ballacktimesheet/css/fullcalendar.min.css') }}\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/ballacktimesheet/css/bootstrap-datetimepicker.css') }}\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/ballacktimesheet/metisMenu/metisMenu.css') }}\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/ballacktimesheet/css/dropzone.css') }}\" type=\"text/css\" media=\"all\"/>

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
            <script  src=\"{{ asset('bundles/ballacktimesheet/js/moment.min.js') }}\"></script>
            <script  src=\"{{ asset('bundles/ballacktimesheet/js/bootstrap-datetimepicker.js') }}\"></script>

            <script  src=\"{{ asset('bundles/ballacktimesheet/js/wow.js') }}\"></script>
            <script  src=\"{{ asset('bundles/ballacktimesheet/js/fullcalendar.min.js') }}\"></script>
            <script  src=\"{{ asset('bundles/ballacktimesheet/metisMenu/metisMenu.js') }}\"></script>
            <script  src=\"{{ asset('bundles/ballacktimesheet/js/dropzone.js') }}\"></script>
            <script  src=\"{{ asset('bundles/ballacktimesheet/js/main.js') }}\"></script>
            <script  src=\"{{ asset('bundles/ballacktimesheet/js/script.js') }}\"></script>
            <script>
                Dropzone.options.image = {
                    maxFiles: 1,
                    acceptedFiles: \"image/jpeg,image/jpg,image/png,image/gif\",
                    dictDefaultMessage : \"change you image\",
                };
            </script>
        {% endblock %}
    </body>
</html>
", "BallackTimeSheetBundle::layout.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/layout.html.twig");
    }
}
