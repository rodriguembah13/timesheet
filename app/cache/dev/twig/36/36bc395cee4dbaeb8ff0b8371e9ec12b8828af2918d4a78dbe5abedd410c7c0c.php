<?php

/* BallackTimeSheetBundle:Default:menu.html.twig */
class __TwigTemplate_9e8d9ee33fdef231534e42927aac3a5e85b9394f6aa2d01bcba15e7e3cbf1978 extends Twig_Template
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
                    <a href=\"#\"><i class=\"fa fa-calendar fa-fw\"></i> Calandrier<span class=\"fa plus-minus\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        ";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CHEF")) {
                // line 41
                echo "                        <li>
                            <a href=\"";
                // line 42
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ballack_time_sheet_calendar");
                echo "\">Demandes Conges</a>
                        </li>";
            }
            // line 44
            echo "                        <li>
                            <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ballack_time_sheet_calendar_collegue");
            echo "\">Demande Conges:Mes Collegues</a>
                        </li>


                    </ul>
                </li>
                ";
            // line 51
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CHEF")) {
                // line 52
                echo "                <li>
                      <a href=\"#\"><i class=\"fa fa-stack-overflow fa-fw\"></i>Suivi Du Personnel<span class=\"fa plus-minus\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"#\"><i class=\"fa fa-check fa-fw\"></i>Validation <span class=\"fa plus-minus\"></span></a>
                            <ul class=\"nav nav-third-level\">
                                <li>
                                    <a href=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation");
                echo "\">Absence & Conge</a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 62
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("overtime_validation");
                echo "\">Heures Supp</a>
                                </li>
                                ";
                // line 64
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    echo "     <li>
                              <a href=\"";
                    // line 65
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation_final");
                    echo "\">Absence & Conge par Admin</a>
                          </li>
                            </ul>
                        </li>";
                }
                // line 69
                echo "                        <li>
                            <a href=\"#\">Affectation Projet</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 73
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index_by_departement");
                echo "\">Suivi Activite</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-table fa-fw\"></i> Administration Projet<span class=\"fa plus-minus\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"";
                // line 82
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_index");
                echo "\">Liste Projets</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 85
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
                echo "\">Liste Clients</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 88
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index_by_departement");
                echo "\">Suivi Projets</a>
                        </li>
                    </ul>
                </li> ";
            }
            // line 92
            echo "                ";
            // line 108
            echo "
                ";
            // line 109
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "       <li>
                <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i>Gestion Salaire<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
                // line 113
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_index");
                echo "\">Comptabilite</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 116
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
                echo "\">RH</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>";
            }
            // line 122
            echo "
                ";
            // line 123
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 124
                echo "            <li>
                <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Administration<span class=\"fa plus-minus\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"";
                // line 128
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_index");
                echo "\">Liste Employes</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 131
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_index");
                echo "\">Liste Departements</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 134
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_index");
                echo "\">Liste Contrats</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 137
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typeabsence_index");
                echo "\">Liste Type D'absence</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 140
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typecontrat_index");
                echo "\">Liste Type De Contrat</a>
                    </li>
                     <li>
                        <a href=\"";
                // line 143
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dayferiee_index");
                echo "\">Liste Jours Feries</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>";
            }
            // line 148
            echo "        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>";
        }
        // line 152
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
        return array (  255 => 152,  249 => 148,  241 => 143,  235 => 140,  229 => 137,  223 => 134,  217 => 131,  211 => 128,  205 => 124,  203 => 123,  200 => 122,  191 => 116,  185 => 113,  178 => 109,  175 => 108,  173 => 92,  166 => 88,  160 => 85,  154 => 82,  142 => 73,  136 => 69,  129 => 65,  125 => 64,  120 => 62,  114 => 59,  105 => 52,  103 => 51,  94 => 45,  91 => 44,  86 => 42,  83 => 41,  81 => 40,  71 => 33,  65 => 30,  59 => 27,  55 => 25,  49 => 21,  28 => 2,  26 => 1,);
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
                    <a href=\"#\"><i class=\"fa fa-calendar fa-fw\"></i> Calandrier<span class=\"fa plus-minus\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        {% if is_granted('ROLE_CHEF') %}
                        <li>
                            <a href=\"{{ path('ballack_time_sheet_calendar') }}\">Demandes Conges</a>
                        </li>{% endif %}
                        <li>
                            <a href=\"{{ path('ballack_time_sheet_calendar_collegue') }}\">Demande Conges:Mes Collegues</a>
                        </li>


                    </ul>
                </li>
                {% if is_granted('ROLE_CHEF') %}
                <li>
                      <a href=\"#\"><i class=\"fa fa-stack-overflow fa-fw\"></i>Suivi Du Personnel<span class=\"fa plus-minus\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
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
                          </li>
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
                </li>
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

                {% if is_granted('ROLE_ADMIN') %}       <li>
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
            </li>{% endif %}

                {% if is_granted('ROLE_ADMIN') %}
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
