<?php

/* BallackTimeSheetBundle:Default:sibar.html.twig */
class __TwigTemplate_47318a2a4d99a859469bc6b66db4318e37afa5f6f3bb45cedd2136edd183a423 extends Twig_Template
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
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_index");
        echo "\">Liste demandes</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_index");
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
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-check fa-fw\"></i> Validation<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation");
        echo "\">Conges</a>
                    </li>
                    <li>
                        <a href=\"#\">Heures Supplémentaires</a>
                    </li>
                 
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Projet<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_index");
        echo "\">Liste Projets</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\">Liste Clients</a>
                    </li>
                    
                </ul>
                <!-- /.nav-second-level -->
            </li>";
        // line 71
        echo "            <li>
                <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Administration<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_index");
        echo "\">Liste Employes</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_index");
        echo "\">Liste Departements</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_index");
        echo "\">Liste Contrats</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typeabsence_index");
        echo "\">Liste Type</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>";
        // line 89
        echo "        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
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
        return array (  143 => 89,  136 => 84,  130 => 81,  124 => 78,  118 => 75,  112 => 71,  104 => 65,  98 => 62,  82 => 49,  56 => 26,  50 => 23,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar-default sidebar\" role=\"navigation\">
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
                        <a href=\"{{ path('absence_index') }}\">Mes demandes</a>
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
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-check fa-fw\"></i> Validation<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"{{ path('validation') }}\">Conges</a>
                    </li>
                    <li>
                        <a href=\"#\">Heures Supplémentaires</a>
                    </li>
                 
                </ul>
                <!-- /.nav-second-level -->
            </li>
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
            </li>{#{% if is_granted('ROLE_USER') %}#}
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
            </li>{#{% endif %}#}
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
", "BallackTimeSheetBundle:Default:sibar.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Default/sibar.html.twig");
    }
}
