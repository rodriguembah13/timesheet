<?php

/* BallackTimeSheetBundle:Default:sibar.html.twig */
class __TwigTemplate_2bce7283ebe2c2bb3fcfef0a8a09997ffb8213976686dee3d2295181d34c0fb9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Default:sibar.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "<div class=\"navbar-default sidebar\" role=\"navigation\">
    <div class=\"sidebar-nav navbar-collapse\">
        <ul class=\"nav\" id=\"side-menu\">
            <li class=\"sidebar-search\">
                <div class=\"input-group custom-search-form\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\">
                            <i class=\"fa fa-search\"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>

            <li>
                <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-stack-overflow fa-fw\"></i> Conges<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_index");
            echo "\">Liste demandes</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_my");
            echo "\">Mes demandes</a>
                    </li>
                    <li>
                        <a href=\"#\">Etat demande</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"tables.html\"><i class=\"fa fa-table fa-fw\"></i> Rapport<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"#\">demandes</a>
                    </li>
                    <li>
                        <a href=\"#\">Absences</a>
                    </li>
                </ul>
            </li>";
            // line 45
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CHEF")) {
                // line 46
                echo "            <li>
                <a href=\"#\"><i class=\"fa fa-check fa-fw\"></i> Validation<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
                // line 50
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation");
                echo "\">Conges</a>
                    </li>
                    <li>
                        <a href=\"#\">Heures Supplémentaires</a>
                    </li>
                    ";
                // line 55
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    echo "     <li>
                        <a href=\"";
                    // line 56
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation_final");
                    echo "\">Valide Conges</a>
                    </li>";
                }
                // line 58
                echo "                 
                </ul>
                <!-- /.nav-second-level -->
            </li>";
            }
            // line 62
            echo "            <li>
                <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Projet<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_index");
            echo "\">Liste Projets</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
            echo "\">Liste Clients</a>
                    </li>
                    
                </ul>
                <!-- /.nav-second-level -->
            </li>";
            // line 74
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 75
                echo "            <li>
                <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Administration<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
                // line 79
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_index");
                echo "\">Liste Employes</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 82
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_index");
                echo "\">Liste Departements</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 85
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_index");
                echo "\">Liste Contrats</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 88
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typeabsence_index");
                echo "\">Liste Type</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>";
            }
            // line 93
            echo "        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>";
        }
        // line 97
        echo "<!-- /.navbar-static-side -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:Default:sibar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 97,  164 => 93,  156 => 88,  150 => 85,  144 => 82,  138 => 79,  132 => 75,  130 => 74,  122 => 69,  116 => 66,  110 => 62,  104 => 58,  99 => 56,  95 => 55,  87 => 50,  81 => 46,  79 => 45,  58 => 27,  52 => 24,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
<div class=\"navbar-default sidebar\" role=\"navigation\">
    <div class=\"sidebar-nav navbar-collapse\">
        <ul class=\"nav\" id=\"side-menu\">
            <li class=\"sidebar-search\">
                <div class=\"input-group custom-search-form\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\">
                            <i class=\"fa fa-search\"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>

            <li>
                <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-stack-overflow fa-fw\"></i> Conges<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"{{ path('absence_index') }}\">Liste demandes</a>
                    </li>
                    <li>
                        <a href=\"{{ path('absence_my') }}\">Mes demandes</a>
                    </li>
                    <li>
                        <a href=\"#\">Etat demande</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"tables.html\"><i class=\"fa fa-table fa-fw\"></i> Rapport<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"#\">demandes</a>
                    </li>
                    <li>
                        <a href=\"#\">Absences</a>
                    </li>
                </ul>
            </li>{% if is_granted('ROLE_CHEF') %}
            <li>
                <a href=\"#\"><i class=\"fa fa-check fa-fw\"></i> Validation<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"{{ path('validation') }}\">Conges</a>
                    </li>
                    <li>
                        <a href=\"#\">Heures Supplémentaires</a>
                    </li>
                    {% if is_granted('ROLE_ADMIN') %}     <li>
                        <a href=\"{{ path('validation_final') }}\">Valide Conges</a>
                    </li>{% endif %}
                 
                </ul>
                <!-- /.nav-second-level -->
            </li>{% endif%}
            <li>
                <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Projet<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"{{ path('projet_index') }}\">Liste Projets</a>
                    </li>
                    <li>
                        <a href=\"{{ path('client_index') }}\">Liste Clients</a>
                    </li>
                    
                </ul>
                <!-- /.nav-second-level -->
            </li>{% if is_granted('ROLE_ADMIN') %}
            <li>
                <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Administration<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"{{ path('employe_index') }}\">Liste Employes</a>
                    </li>
                    <li>
                        <a href=\"{{ path('departement_index') }}\">Liste Departements</a>
                    </li>
                    <li>
                        <a href=\"{{ path('contrat_index') }}\">Liste Contrats</a>
                    </li>
                    <li>
                        <a href=\"{{ path('typeabsence_index') }}\">Liste Type</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>{% endif %}
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>{% endif %}
<!-- /.navbar-static-side -->
", "BallackTimeSheetBundle:Default:sibar.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Default/sibar.html.twig");
    }
}
