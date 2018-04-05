<?php

/* BallackTimeSheetBundle:projet:show.html.twig */
class __TwigTemplate_19305f2a29388c71c83dcdc1ebf0d5c71b73d15026f3f764aaf3d36787e84609 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:projet:show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:projet:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Information Projet</h2>
                    ";
        // line 24
        echo "                    <div class=\"clearfix\"></div>
                </div>

                <div class=\"x_content\">

                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                        <ul class=\"stats-overview\">
                            <li>
                                <span class=\"name\"> Total d'heure consacre pour le projet </span>
                                <span class=\"value text-success\"> 2300 </span>
                            </li>
                            <li>
                                <span class=\"name\"> Total heures travailles sur le projet </span>
                                <span class=\"value text-success\"> ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new Twig_Error_Runtime('Variable "nbre" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " </span>
                            </li>
                            <li class=\"hidden-phone\">
                                <span class=\"name\"> Total heures personnel sur le projet </span>
                                <span class=\"value text-success\"> ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["allTimes"]) || array_key_exists("allTimes", $context) ? $context["allTimes"] : (function () { throw new Twig_Error_Runtime('Variable "allTimes" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " </span>
                            </li>
                        </ul>
                        <br />

                        <div id=\"mainb\" style=\"height:350px;\"></div>

                        <div>

                            <h4>Recent Activity</h4>

                            <!-- end of user messages -->
                            <ul class=\"messages\">
                                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 55, $this->source); })()), "employes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "                                    <li>
                                        <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["item"], "image", array()))), "html", null, true);
            echo "\" class=\"avatar\">

                                        ";
            // line 60
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "activites", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
                // line 61
                echo "                                        <div class=\"message_date\">
                                            <h3 class=\"date text-info\">";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "dateCreation", array()), "d-m-y"), "html", null, true);
                echo "</h3>
                                            <p class=\"month\">";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "dateCreation", array()), "H:i:s"), "html", null, true);
                echo "</p>
                                        </div>
                                        <div class=\"message_wrapper\">
                                            <h4 class=\"heading\">";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", array()), "html", null, true);
                echo " <span class=\"label label-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "departement", array()), "departement", array()), "html", null, true);
                echo "</span></h4>
                                            <blockquote class=\"message\">";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "description", array()), "html", null, true);
                echo ".</blockquote>
                                            <br />
                                            <p class=\"url\">
                                                <span class=\"fs1 text-info\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                <a href=\"#\"><i class=\"fa fa-paperclip\"></i> User Acceptance Test.doc </a>
                                            </p>
                                        </div> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </ul>
                            <!-- end of user messages -->


                        </div>


                    </div>

                    <!-- start project-detail sidebar -->
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">

                        <section class=\"panel\">

                            <div class=\"x_title\">
                                <h2>Project Description</h2>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"panel-body\">
                                <h3 class=\"green\"><i class=\"fa fa-paint-brush\"></i>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 95, $this->source); })()), "nomProjet", array()), "html", null, true);
        echo "</h3>

                                <p>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 97, $this->source); })()), "description", array()), "html", null, true);
        echo ".</p>
                                <br />

                                <div class=\"project_detail\">

                                    <p class=\"title\">Client <span class=\"small\"></span></p>
                                    <p>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 103, $this->source); })()), "client", array()), "nomComplet", array()), "html", null, true);
        echo "</p>
                                    <p class=\"title\">Project Leader</p>
                                    <p>Tony Chicken</p>
                                </div>
                                <br />
                                <h5>Project files</h5>
                                <ul class=\"list-unstyled project_files\">
                                    <li><a href=\"\"><i class=\"fa fa-file-word-o\"></i> Functional-requirements.docx</a>
                                    </li>
                                    <li><a href=\"\"><i class=\"fa fa-file-pdf-o\"></i> UAT.pdf</a>
                                    </li>
                                    <li><a href=\"\"><i class=\"fa fa-mail-forward\"></i> Email-from-flatbal.mln</a>
                                    </li>
                                    <li><a href=\"\"><i class=\"fa fa-picture-o\"></i> Logo.png</a>
                                    </li>
                                    <li><a href=\"\"><i class=\"fa fa-file-word-o\"></i> Contract-10_12_2014.docx</a>
                                    </li>
                                </ul>
                                <br />

                                <div class=\"text-center mtop20\">
                                    <a href=\"#\" class=\"btn btn-sm btn-primary\">Add files</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-warning\">Report contact</a>
                                </div>
                            </div>

                        </section>

                    </div>
                    <!-- end project-detail sidebar -->

                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 181
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:projet:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 181,  183 => 103,  174 => 97,  169 => 95,  148 => 76,  141 => 74,  128 => 67,  120 => 66,  114 => 63,  110 => 62,  107 => 61,  102 => 60,  97 => 57,  94 => 56,  90 => 55,  74 => 42,  67 => 38,  51 => 24,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Information Projet</h2>
                    {#         <ul class=\"nav navbar-right panel_toolbox\">
                                 <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                                 </li>
                                 <li class=\"dropdown\">
                                     <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                                     <ul class=\"dropdown-menu\" role=\"menu\">
                                         <li><a href=\"#\">Settings 1</a>
                                         </li>
                                         <li><a href=\"#\">Settings 2</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                                 </li>
                             </ul>#}
                    <div class=\"clearfix\"></div>
                </div>

                <div class=\"x_content\">

                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                        <ul class=\"stats-overview\">
                            <li>
                                <span class=\"name\"> Total d'heure consacre pour le projet </span>
                                <span class=\"value text-success\"> 2300 </span>
                            </li>
                            <li>
                                <span class=\"name\"> Total heures travailles sur le projet </span>
                                <span class=\"value text-success\"> {{nbre}} </span>
                            </li>
                            <li class=\"hidden-phone\">
                                <span class=\"name\"> Total heures personnel sur le projet </span>
                                <span class=\"value text-success\"> {{allTimes}} </span>
                            </li>
                        </ul>
                        <br />

                        <div id=\"mainb\" style=\"height:350px;\"></div>

                        <div>

                            <h4>Recent Activity</h4>

                            <!-- end of user messages -->
                            <ul class=\"messages\">
                                {% for item in projet.employes %}
                                    <li>
                                        <img src=\"{{ asset('uploads/images/' ~ item.image) }}\" class=\"avatar\">

                                        {#{{render(controller('ballackTimeSheetBundle:Activite:myDetailActivite?',{'id':item}))}}#}
                                      {% for act in item.activites %}
                                        <div class=\"message_date\">
                                            <h3 class=\"date text-info\">{{act.dateCreation|date('d-m-y')}}</h3>
                                            <p class=\"month\">{{act.dateCreation|date('H:i:s')}}</p>
                                        </div>
                                        <div class=\"message_wrapper\">
                                            <h4 class=\"heading\">{{item.nom}} {{item.prenom}} <span class=\"label label-info\">{{item.departement.departement}}</span></h4>
                                            <blockquote class=\"message\">{{act.description}}.</blockquote>
                                            <br />
                                            <p class=\"url\">
                                                <span class=\"fs1 text-info\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                <a href=\"#\"><i class=\"fa fa-paperclip\"></i> User Acceptance Test.doc </a>
                                            </p>
                                        </div> {%endfor%}
                                    </li>
                                {%endfor%}
                            </ul>
                            <!-- end of user messages -->


                        </div>


                    </div>

                    <!-- start project-detail sidebar -->
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">

                        <section class=\"panel\">

                            <div class=\"x_title\">
                                <h2>Project Description</h2>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"panel-body\">
                                <h3 class=\"green\"><i class=\"fa fa-paint-brush\"></i>{{projet.nomProjet}}</h3>

                                <p>{{projet.description}}.</p>
                                <br />

                                <div class=\"project_detail\">

                                    <p class=\"title\">Client <span class=\"small\"></span></p>
                                    <p>{{projet.client.nomComplet}}</p>
                                    <p class=\"title\">Project Leader</p>
                                    <p>Tony Chicken</p>
                                </div>
                                <br />
                                <h5>Project files</h5>
                                <ul class=\"list-unstyled project_files\">
                                    <li><a href=\"\"><i class=\"fa fa-file-word-o\"></i> Functional-requirements.docx</a>
                                    </li>
                                    <li><a href=\"\"><i class=\"fa fa-file-pdf-o\"></i> UAT.pdf</a>
                                    </li>
                                    <li><a href=\"\"><i class=\"fa fa-mail-forward\"></i> Email-from-flatbal.mln</a>
                                    </li>
                                    <li><a href=\"\"><i class=\"fa fa-picture-o\"></i> Logo.png</a>
                                    </li>
                                    <li><a href=\"\"><i class=\"fa fa-file-word-o\"></i> Contract-10_12_2014.docx</a>
                                    </li>
                                </ul>
                                <br />

                                <div class=\"text-center mtop20\">
                                    <a href=\"#\" class=\"btn btn-sm btn-primary\">Add files</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-warning\">Report contact</a>
                                </div>
                            </div>

                        </section>

                    </div>
                    <!-- end project-detail sidebar -->

                </div>
            </div>
        </div>
    </div>
</div>
{#<table class=\"table table-hover\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>{{ projet.id }}</td>
        </tr>
        <tr>
            <th>Nomprojet</th>
            <td>{{ projet.nomProjet }}</td>
        </tr>
        <tr>
            <th>Client</th>
            <td>{{ projet.client.nomComplet }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ projet.description }}</td>
        </tr>
        <tr>
            <th>Datestart</th>
            <td>{% if projet.dateStart %}{{ projet.dateStart|date('Y-m-d H:i:s') }}{% endif %}</td>
        </tr>
        <tr>
            <th>Datestop</th>
            <td>{% if projet.dateStop %}{{ projet.dateStop|date('Y-m-d H:i:s') }}{% endif %}</td>
        </tr>
    </tbody>
</table>

<ul>
    <li>
        <a href=\"{{ path('projet_index') }}\">Back to the list</a>
    </li>
    <li>
        <a href=\"{{ path('projet_edit', { 'id': projet.id }) }}\">Edit</a>
    </li>
    {#<li>
        {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
        {{ form_end(delete_form) }}
    </li>
</ul>#}

{% endblock %}", "BallackTimeSheetBundle:projet:show.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/projet/show.html.twig");
    }
}
