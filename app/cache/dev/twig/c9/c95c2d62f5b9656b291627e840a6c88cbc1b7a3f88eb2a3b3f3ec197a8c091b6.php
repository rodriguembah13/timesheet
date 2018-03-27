<?php

/* BallackTimeSheetBundle:Default:menu.html.twig */
class __TwigTemplate_0152864a03559563ffbf38949acb8dfb425b897d429d509d248a988aab354410 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Default:menu.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "    <div class=\"navbar-default sidebar\" role=\"navigation\">
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
                    <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> Dossier Personnel<span class=\"fa plus-minus\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_my");
            echo "\">Mes Absences</a>
                        </li>
                        <li>
                            ";
            // line 25
            echo "                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_my");
            echo "\">Mes Projets</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_my");
            echo "\">Mes Heures Supp</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_profil");
            echo "\">Mon Compte</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-stack-overflow fa-fw\"></i>Suivi Du Personnel<span class=\"fa plus-minus\"></span></a>
                    <ul class=\"nav nav-second-level\">
                      ";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CHEF")) {
                echo "  <li>
                            <a href=\"#\"><i class=\"fa fa-check fa-fw\"></i>Validation <span class=\"fa plus-minus\"></span></a>
                            <ul class=\"nav nav-third-level\">
                                <li>
                                    <a href=\"";
                // line 44
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation");
                echo "\">Absence & Conge</a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 47
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_validation");
                echo "\">Heures Supp</a>
                                </li>
                                ";
                // line 49
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    echo "     <li>
                              <a href=\"";
                    // line 50
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation_final");
                    echo "\">Absence & Conge par Admin</a>
                          </li>";
                }
                // line 52
                echo "                            </ul>
                        </li>";
            }
            // line 54
            echo "                        <li>
                            <a href=\"#\">Affectation Projet</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index_by_departement");
            echo "\">Suivi Activite</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>";
            // line 62
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CHEF")) {
                // line 63
                echo "                <li>
                    <a href=\"#\"><i class=\"fa fa-table fa-fw\"></i> Administration Projet<span class=\"fa plus-minus\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"";
                // line 67
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_index");
                echo "\">Liste Projets</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 70
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
                echo "\">Liste Clients</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 73
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index_by_departement");
                echo "\">Suivi Projets</a>
                        </li>
                    </ul>
                </li> ";
            }
            // line 77
            echo "                ";
            // line 93
            echo "           
            <li>
                <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i>Gestion Salaire<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_index");
            echo "\">Comptabilite</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
            echo "\">RH</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>";
            // line 106
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 107
                echo "            <li>
                <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Administration<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
                // line 111
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_index");
                echo "\">Liste Employes</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 114
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_index");
                echo "\">Liste Departements</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 117
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_index");
                echo "\">Liste Contrats</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 120
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typeabsence_index");
                echo "\">Liste Type D'absence</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 123
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typecontrat_index");
                echo "\">Liste Type De Contrat</a>
                    </li>
                     <li>
                        <a href=\"";
                // line 126
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dayferiee_index");
                echo "\">Liste Jours Feries</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>";
            }
            // line 131
            echo "        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>";
        }
        // line 135
        echo "<!-- /.navbar-static-side -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 135,  221 => 131,  213 => 126,  207 => 123,  201 => 120,  195 => 117,  189 => 114,  183 => 111,  177 => 107,  175 => 106,  167 => 101,  161 => 98,  154 => 93,  152 => 77,  145 => 73,  139 => 70,  133 => 67,  127 => 63,  125 => 62,  118 => 58,  112 => 54,  108 => 52,  103 => 50,  99 => 49,  94 => 47,  88 => 44,  81 => 40,  71 => 33,  65 => 30,  59 => 27,  55 => 25,  49 => 21,  28 => 2,  26 => 1,);
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
                    <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> Dossier Personnel<span class=\"fa plus-minus\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"{{ path('absence_my') }}\">Mes Absences</a>
                        </li>
                        <li>
                            {#<a href=\"{{ path('activite_my',{}) }}\">Mes Activites</a>#}
                        </li>
                        <li>
                            <a href=\"{{ path('projet_my') }}\">Mes Projets</a>
                        </li>
                        <li>
                            <a href=\"{{ path('overtime_my') }}\">Mes Heures Supp</a>
                        </li>
                        <li>
                            <a href=\"{{ path('employe_profil') }}\">Mon Compte</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-stack-overflow fa-fw\"></i>Suivi Du Personnel<span class=\"fa plus-minus\"></span></a>
                    <ul class=\"nav nav-second-level\">
                      {% if is_granted('ROLE_CHEF') %}  <li>
                            <a href=\"#\"><i class=\"fa fa-check fa-fw\"></i>Validation <span class=\"fa plus-minus\"></span></a>
                            <ul class=\"nav nav-third-level\">
                                <li>
                                    <a href=\"{{ path('validation') }}\">Absence & Conge</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('overtime_validation') }}\">Heures Supp</a>
                                </li>
                                {% if is_granted('ROLE_ADMIN') %}     <li>
                              <a href=\"{{ path('validation_final') }}\">Absence & Conge par Admin</a>
                          </li>{% endif %}
                            </ul>
                        </li>{% endif %}
                        <li>
                            <a href=\"#\">Affectation Projet</a>
                        </li>
                        <li>
                            <a href=\"{{ path('activite_index_by_departement') }}\">Suivi Activite</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>{% if is_granted('ROLE_CHEF') %}
                <li>
                    <a href=\"#\"><i class=\"fa fa-table fa-fw\"></i> Administration Projet<span class=\"fa plus-minus\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"{{ path('projet_index') }}\">Liste Projets</a>
                        </li>
                        <li>
                            <a href=\"{{ path('client_index') }}\">Liste Clients</a>
                        </li>
                        <li>
                            <a href=\"{{ path('activite_index_by_departement') }}\">Suivi Projets</a>
                        </li>
                    </ul>
                </li> {% endif%}
                {#  <li>
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
                  </li>#}
           
            <li>
                <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i>Gestion Salaire<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"{{ path('projet_index') }}\">Comptabilite</a>
                    </li>
                    <li>
                        <a href=\"{{ path('client_index') }}\">RH</a>
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
                        <a href=\"{{ path('typeabsence_index') }}\">Liste Type D'absence</a>
                    </li>
                    <li>
                        <a href=\"{{ path('typecontrat_index') }}\">Liste Type De Contrat</a>
                    </li>
                     <li>
                        <a href=\"{{ path('dayferiee_index') }}\">Liste Jours Feries</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>{% endif %}
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>{% endif %}
<!-- /.navbar-static-side -->
", "BallackTimeSheetBundle:Default:menu.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Default/menu.html.twig");
    }
}
