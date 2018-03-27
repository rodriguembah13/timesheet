<?php

/* BallackTimeSheetBundle:employe:profil.html.twig */
class __TwigTemplate_7fe2a04940cebb88e13e13b21f10bbfdf68267e7b2bf71641dc8bd0f5a4fb202 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:employe:profil.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:employe:profil.html.twig"));

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
                    <h2>User Report <small>Activity report</small></h2>
                   
                    <div class=\"clearfix\"></div>
                  </div>
    <div class=\"x_content\">
                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                      <div class=\"profile_img\">
                        <div id=\"crop-avatar\">
                          <!-- Current avatar -->
                          <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 15, $this->source); })()), "image", array()))), "html", null, true);
        echo "\" class=\"img-responsive avatar-view\">
                          </div>
                      </div>
                      <h3>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 18, $this->source); })()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 18, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</h3>

                      <ul class=\"list-unstyled user_data\">
                        <li><i class=\"fa fa-map-marker user-profile-icon\"></i> San Francisco, California, USA
                        </li>

                        <li>
                          <i class=\"fa fa-briefcase user-profile-icon\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 25, $this->source); })()), "departement", array()), "departement", array()), "html", null, true);
        echo "
                        </li>

                        <li class=\"m-top-xs\">
                          <i class=\"fa fa-external-link user-profile-icon\"></i>
                          ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 30, $this->source); })()), "compte", array()), "email", array()), "html", null, true);
        echo "
                        </li>
                      </ul>

                      <a class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Edit Profile</a>
                      <br />
";
        // line 37
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["dictionary"]) || array_key_exists("dictionary", $context) ? $context["dictionary"] : (function () { throw new Twig_Error_Runtime('Variable "dictionary" does not exist.', 37, $this->source); })()), "projet", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 38
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()), "html", null, true);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                      <!-- start skills -->
                     ";
        // line 68
        echo "                      <!-- end of skills -->

                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                      <div class=\"profile_title\">
                        <div class=\"col-md-6\">
                          <h2>User Activity Report</h2>
                        </div>
                        <div class=\"col-md-6\">
                          <div id=\"reportrange\" class=\"pull-right\" style=\"margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED\">
                            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                            <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                          </div>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      <div id=\"graph_bar\" style=\"width:100%; height:280px;\"></div>
                      <!-- end of user-activity-graph -->

                      <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                        <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                          <li role=\"presentation\" class=\"active\"><a href=\"#tab_content1\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Recent Activity</a>
                          </li>
                          <li role=\"presentation\" class=\"\"><a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Projects Worked on</a>
                          </li>
                          <li role=\"presentation\" class=\"\"><a href=\"#tab_content3\" role=\"tab\" id=\"profile-tab2\" data-toggle=\"tab\" aria-expanded=\"false\">Profile</a>
                          </li>
                        </ul>
                        <div id=\"myTabContent\" class=\"tab-content\">
                          <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">

                            <!-- start recent activity -->
                            <ul class=\"messages\">
                                 ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 102, $this->source); })()), "activites", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 103
            echo "                                     <li>    <div class=\"message_date\">
                                            <h3 class=\"date text-info\">";
            // line 104
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "dateCreation", array()), "d-m-y"), "html", null, true);
            echo "</h3>
                                            <p class=\"month\">";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "dateCreation", array()), "H:i:s"), "html", null, true);
            echo "</p>
                                        </div>
                                        <div class=\"message_wrapper\">
                                           <blockquote class=\"message\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "description", array()), "html", null, true);
            echo ".</blockquote>
                                            <br />
                                            <p class=\"url\">
                                                <span class=\"fs1 text-info\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                <a href=\"#\"><i class=\"fa fa-paperclip\"></i> User Acceptance Test.doc </a>
                                            </p>
                                        </div> </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">

                            <!-- start user projects -->
                            <table class=\"data table table-striped no-margin\">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Project Name</th>
                                  <th>Client Company</th>
                                  <th class=\"hidden-phone\">Hours Spent</th>
                                  <th>Contribution</th>
                                </tr>
                              </thead>
                              <tbody>
                                  ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 133, $this->source); })()), "projets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 134
            echo "                                <tr>
                                  <td>1</td>
                                  <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "nomProjet", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
                                  <td class=\"hidden-phone\">18</td>
                                  <td class=\"vertical-align-mid\">
                                   ";
            // line 143
            echo "                                      <div class=\"progress\">
                                          <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"70\"
                                               aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:70%\">
                                              70%
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                  
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
                            <p>Mon Soldes Conges: ";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new Twig_Error_Runtime('Variable "employe" does not exist.', 158, $this->source); })()), "soldeVacances", array()), "html", null, true);
        echo " Jours</p>
                              <p>Type De Contrat :";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new Twig_Error_Runtime('Variable "contrat" does not exist.', 159, $this->source); })()), "typeContrat", array()), "libelle", array()), "html", null, true);
        echo "</p>
                              <p>Mon Salaire de Base:";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new Twig_Error_Runtime('Variable "contrat" does not exist.', 160, $this->source); })()), "salaireBrute", array()), "html", null, true);
        echo "</p>";
        // line 166
        echo "                          </div>
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
        return "BallackTimeSheetBundle:employe:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 166,  244 => 160,  240 => 159,  236 => 158,  227 => 151,  213 => 143,  207 => 137,  203 => 136,  199 => 134,  195 => 133,  175 => 115,  162 => 108,  156 => 105,  152 => 104,  149 => 103,  145 => 102,  109 => 68,  106 => 40,  97 => 38,  92 => 37,  83 => 30,  75 => 25,  63 => 18,  57 => 15,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>User Report <small>Activity report</small></h2>
                   
                    <div class=\"clearfix\"></div>
                  </div>
    <div class=\"x_content\">
                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                      <div class=\"profile_img\">
                        <div id=\"crop-avatar\">
                          <!-- Current avatar -->
                          <img src=\"{{ asset('uploads/images/' ~ employe.image) }}\" class=\"img-responsive avatar-view\">
                          </div>
                      </div>
                      <h3>{{ employe.nom }} {{ employe.prenom }}</h3>

                      <ul class=\"list-unstyled user_data\">
                        <li><i class=\"fa fa-map-marker user-profile-icon\"></i> San Francisco, California, USA
                        </li>

                        <li>
                          <i class=\"fa fa-briefcase user-profile-icon\"></i> {{ employe.departement.departement }}
                        </li>

                        <li class=\"m-top-xs\">
                          <i class=\"fa fa-external-link user-profile-icon\"></i>
                          {{ employe.compte.email }}
                        </li>
                      </ul>

                      <a class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Edit Profile</a>
                      <br />
{#{{ test }}  {{ essai }}#}
                        {% for projet in dictionary.projet  %}
                        {{ projet.id }}
                        {% endfor %}
                      <!-- start skills -->
                     {# <h4>Skills</h4>
                      <ul class=\"list-unstyled user_data\">
                        <li>
                          <p>Web Applications</p>
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"70\"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"30\"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                          </div>
                        </li>
                      </ul>#}
                      <!-- end of skills -->

                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                      <div class=\"profile_title\">
                        <div class=\"col-md-6\">
                          <h2>User Activity Report</h2>
                        </div>
                        <div class=\"col-md-6\">
                          <div id=\"reportrange\" class=\"pull-right\" style=\"margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED\">
                            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                            <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                          </div>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      <div id=\"graph_bar\" style=\"width:100%; height:280px;\"></div>
                      <!-- end of user-activity-graph -->

                      <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                        <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                          <li role=\"presentation\" class=\"active\"><a href=\"#tab_content1\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Recent Activity</a>
                          </li>
                          <li role=\"presentation\" class=\"\"><a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Projects Worked on</a>
                          </li>
                          <li role=\"presentation\" class=\"\"><a href=\"#tab_content3\" role=\"tab\" id=\"profile-tab2\" data-toggle=\"tab\" aria-expanded=\"false\">Profile</a>
                          </li>
                        </ul>
                        <div id=\"myTabContent\" class=\"tab-content\">
                          <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">

                            <!-- start recent activity -->
                            <ul class=\"messages\">
                                 {% for act in employe.activites %}
                                     <li>    <div class=\"message_date\">
                                            <h3 class=\"date text-info\">{{act.dateCreation|date('d-m-y')}}</h3>
                                            <p class=\"month\">{{act.dateCreation|date('H:i:s')}}</p>
                                        </div>
                                        <div class=\"message_wrapper\">
                                           <blockquote class=\"message\">{{act.description}}.</blockquote>
                                            <br />
                                            <p class=\"url\">
                                                <span class=\"fs1 text-info\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                <a href=\"#\"><i class=\"fa fa-paperclip\"></i> User Acceptance Test.doc </a>
                                            </p>
                                        </div> </li>{%endfor%}
                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">

                            <!-- start user projects -->
                            <table class=\"data table table-striped no-margin\">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Project Name</th>
                                  <th>Client Company</th>
                                  <th class=\"hidden-phone\">Hours Spent</th>
                                  <th>Contribution</th>
                                </tr>
                              </thead>
                              <tbody>
                                  {% for projet in employe.projets %}
                                <tr>
                                  <td>1</td>
                                  <td>{{projet.nomProjet}}</td>
                                  <td>{{projet.client.nomComplet}}</td>
                                  <td class=\"hidden-phone\">18</td>
                                  <td class=\"vertical-align-mid\">
                                   {# <div class=\"progress\">
                                      <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"35\">2</div>
                                    </div>#}
                                      <div class=\"progress\">
                                          <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"70\"
                                               aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:70%\">
                                              70%
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                {%endfor%}                  
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
                            <p>Mon Soldes Conges: {{employe.soldeVacances}} Jours</p>
                              <p>Type De Contrat :{{ contrat.typeContrat.libelle }}</p>
                              <p>Mon Salaire de Base:{{ contrat.salaireBrute }}</p>{#
                              <ul>
                                  {% for ct in contrat %}
                                  <li>{{ ct.typeContrat.libelle }}</li>
                                  {% endfor %}
                              </ul>#}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
{#<div class=\"row\">
    <h3 style=\"margin:25px\"><span class=\"fa fa-angle-double-right\"></span>Mon Profil</h3>
    <div class=\"col-lg-3\">
    <div class=\"row\">
     <div class=\"col-lg-5\" >
<img src=\"{{ asset('uploads/images/' ~ employe.image) }}\" height=\"100px\" width=\"100px\">
    </div>
     <div class=\"col-lg-7\">
        <h3 style=\"marker-end: 2px\">{{ employe.compte.username }}</h3>
        <h5>{{ employe.compte.email }}</h5>

    </div>
    <div class=\"row\" style=\"margin-left: 5px\">
     <dl >
  <dt>
  <p>Nom :{{ employe.nom }}</p>
  <p>Penom :{{ employe.prenom }}</p>
  <p>Date de Naissance :{% if employe.dateNaissance %}{{ employe.dateNaissance|date('Y-m-d') }}{% endif %}</p>
  <p>Situation Matrimonial :{{ employe.situation }}</p>
  </dt>
</dl>
    </div>
    </div>
    </div>

    <div class=\"col-lg-9\"  style=\"border-left: solid\">

                <h4>Departement : {{ employe.departement.departement }}</h4>
                <h4>CHEF DU DEPARTEMENT</h4>
                 <div class=\"row\" style=\"margin-bottom: 5px\">
                            <div class=\"col-lg-1\">
                                <img src=\"{{ asset('uploads/images/' ~ chef.image) }}\" height=\"50px\" width=\"50px\">
                            </div>
                            <div class=\"col-lg-6\">
                            <h5>{{ chef.nom }} {{ chef.prenom }}</h5>
                            </div>
                        </div>

        <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                <h3>Mes Collegues</h3>
                    {% for colegue in collegues %}
                        <div class=\"row\">
                            <div class=\"col-lg-2\">
                                <img src=\"{{ asset('uploads/images/' ~ colegue.image) }}\" height=\"50px\" width=\"50px\">
                            </div>
                            <div class=\"col-lg-6\">
                            <p>{{ colegue.nom }} {{ colegue.prenom }}</p>
                            </div>
                        </div>
                        {% endfor %}
                </div>
                <div class=\"panel-footer\">Panel Footer</div>
            </div>
        </div>
    </div>

</div>#}
{% endblock %}
", "BallackTimeSheetBundle:employe:profil.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/employe/profil.html.twig");
    }
}
