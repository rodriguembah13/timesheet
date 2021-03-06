<?php

/* BallackTimeSheetBundle:Default:role.html.twig */
class __TwigTemplate_e1033959097b7fba321e3e4136623457ecb6cb68f75fc9e68054711cdc5706e8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BallackTimeSheetBundle::layout.html.twig", "BallackTimeSheetBundle:Default:role.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BallackTimeSheetBundle:Default:role.html.twig"));

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
            <h2>Permission <small>Gestion</small></h2>

            <div class=\"clearfix\"></div>
        </div>
    <dl class=\"dl-horizontal\">

        <dt><span data-translate=\"userManagement.firstName\">UserName</span></dt>
        <dd>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "username", array()), "html", null, true);
        echo "</dd>
        <dt><span data-translate=\"userManagement.firstName\">Email</span></dt>
        <dd>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "email", array()), "html", null, true);
        echo "</dd>
        <dt><span data-translate=\"userManagement.firstName\">Roles</span></dt>
        <dd>";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->source); })()), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 18
            echo "            <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $context["r"], "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</dd>
        </dl>
        <label> Supprimer Un Role</label>
        <dl class=\"dl-horizontal\">
            <dd>";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 23, $this->source); })()), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 24
            echo "                <span class=\"label label-info\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_deleteRole", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 24, $this->source); })()), "id", array()), "role" => $context["r"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["r"], "html", null, true);
            echo "</a></span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</dd></dl>
            <label> Ajouter Un Role</label>
            <dl class=\"dl-horizontal\">
                <dd>";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ras"]) || array_key_exists("ras", $context) ? $context["ras"] : (function () { throw new Twig_Error_Runtime('Variable "ras" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 29
            echo "                    <span class=\"label label-info\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_addRole", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->source); })()), "id", array()), "role" => $context["r"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["r"], "html", null, true);
            echo "</a></span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</dd></dl>


                <p><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_index");
        echo "\">Liste des Employes</a>
                </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BallackTimeSheetBundle:Default:role.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 33,  119 => 30,  108 => 29,  104 => 28,  99 => 25,  88 => 24,  84 => 23,  78 => 19,  69 => 18,  65 => 17,  60 => 15,  55 => 13,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BallackTimeSheetBundle::layout.html.twig\" %}

{% block main %}
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Permission <small>Gestion</small></h2>

            <div class=\"clearfix\"></div>
        </div>
    <dl class=\"dl-horizontal\">

        <dt><span data-translate=\"userManagement.firstName\">UserName</span></dt>
        <dd>{{user.username}}</dd>
        <dt><span data-translate=\"userManagement.firstName\">Email</span></dt>
        <dd>{{user.email}}</dd>
        <dt><span data-translate=\"userManagement.firstName\">Roles</span></dt>
        <dd>{% for r in user.roles %}
            <span class=\"label label-info\">{{r}}</span>
            {% endfor %}</dd>
        </dl>
        <label> Supprimer Un Role</label>
        <dl class=\"dl-horizontal\">
            <dd>{% for r in user.roles %}
                <span class=\"label label-info\"><a href=\"{{ path('employe_deleteRole', { 'id': user.id ,'role': r} )}}\">{{r}}</a></span>
                {% endfor %}</dd></dl>
            <label> Ajouter Un Role</label>
            <dl class=\"dl-horizontal\">
                <dd>{% for r in ras %}
                    <span class=\"label label-info\"><a href=\"{{ path('employe_addRole', { 'id': user.id ,'role': r} )}}\">{{r}}</a></span>
                    {% endfor %}</dd></dl>


                <p><a href=\"{{ path('employe_index') }}\">Liste des Employes</a>
                </div>
                {% endblock %}", "BallackTimeSheetBundle:Default:role.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/src/Ballack/TimeSheetBundle/Resources/views/Default/role.html.twig");
    }
}
