<?php

/* JMSTranslationBundle:Translate:index.html.twig */
class __TwigTemplate_4b741a9057011c5f04c624da74e25f35957a91a5cacfae19d7e75c0af56253aa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JMSTranslationBundle::base.html.twig", "JMSTranslationBundle:Translate:index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JMSTranslationBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JMSTranslationBundle:Translate:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script language=\"javascript\" type=\"text/javascript\">
        var updateMessagePath = ";
        // line 6
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jms_translation_update_message", array("config" => (isset($context["selectedConfig"]) || array_key_exists("selectedConfig", $context) ? $context["selectedConfig"] : (function () { throw new Twig_Error_Runtime('Variable "selectedConfig" does not exist.', 6, $this->source); })()), "domain" => (isset($context["selectedDomain"]) || array_key_exists("selectedDomain", $context) ? $context["selectedDomain"] : (function () { throw new Twig_Error_Runtime('Variable "selectedDomain" does not exist.', 6, $this->source); })()), "locale" => (isset($context["selectedLocale"]) || array_key_exists("selectedLocale", $context) ? $context["selectedLocale"] : (function () { throw new Twig_Error_Runtime('Variable "selectedLocale" does not exist.', 6, $this->source); })()))));
        echo ";
        var isWritable        = ";
        // line 7
        echo ((((isset($context["isWriteable"]) || array_key_exists("isWriteable", $context) ? $context["isWriteable"] : (function () { throw new Twig_Error_Runtime('Variable "isWriteable" does not exist.', 7, $this->source); })()) === true)) ? ("true") : ("false"));
        echo ";
        var JMS               = new JMSTranslationManager(updateMessagePath, isWritable);

        JMS.ready();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
    <form id=\"config\" action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jms_translation_index");
        echo "\" method=\"get\">
        <select name=\"config\" class=\"span3\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new Twig_Error_Runtime('Variable "configs" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 19
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
            echo "\"";
            if (($context["config"] == (isset($context["selectedConfig"]) || array_key_exists("selectedConfig", $context) ? $context["selectedConfig"] : (function () { throw new Twig_Error_Runtime('Variable "selectedConfig" does not exist.', 19, $this->source); })()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </select>

        <select name=\"domain\" class=\"span3\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) || array_key_exists("domains", $context) ? $context["domains"] : (function () { throw new Twig_Error_Runtime('Variable "domains" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 25
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "\"";
            if (($context["domain"] == (isset($context["selectedDomain"]) || array_key_exists("selectedDomain", $context) ? $context["selectedDomain"] : (function () { throw new Twig_Error_Runtime('Variable "selectedDomain" does not exist.', 25, $this->source); })()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </select>

        <select name=\"locale\" class=\"span2\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 31
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\"";
            if (($context["locale"] == (isset($context["selectedLocale"]) || array_key_exists("selectedLocale", $context) ? $context["selectedLocale"] : (function () { throw new Twig_Error_Runtime('Variable "selectedLocale" does not exist.', 31, $this->source); })()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </select>
    </form>

    ";
        // line 36
        if (((isset($context["isWriteable"]) || array_key_exists("isWriteable", $context) ? $context["isWriteable"] : (function () { throw new Twig_Error_Runtime('Variable "isWriteable" does not exist.', 36, $this->source); })()) === false)) {
            // line 37
            echo "    <div class=\"alert-message error\">
        The translation file \"<strong>";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "</strong>\" is not writable.
    </div>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if (("xliff" != (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new Twig_Error_Runtime('Variable "format" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format.

        <br /><br />

        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract ";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["selectedLocale"]) || array_key_exists("selectedLocale", $context) ? $context["selectedLocale"] : (function () { throw new Twig_Error_Runtime('Variable "selectedLocale" does not exist.', 49, $this->source); })()), "html", null, true);
            echo " --config=";
            echo twig_escape_filter($this->env, (isset($context["selectedConfig"]) || array_key_exists("selectedConfig", $context) ? $context["selectedConfig"] : (function () { throw new Twig_Error_Runtime('Variable "selectedConfig" does not exist.', 49, $this->source); })()), "html", null, true);
            echo " --output-format=xliff</code>
    </div>
    ";
        }
        // line 52
        echo "
    <h2>Available Messages</h2>
\t<h3>
\t\tFilter messages by Id
\t\t<input id=\"filter\" placeholder=\"Enter a key to filter the entries.\" title=\"A wildcard/regexp-search for '*your_key*' will be done. You can also use the '.' as 1-char wildcard, '.*' as wildcard for 0-n chars. Search the web for 'JS Regex Documentation' for more information about regular expressions.\"/>
\t</h3>

    ";
        // line 59
        if ( !twig_test_empty((isset($context["newMessages"]) || array_key_exists("newMessages", $context) ? $context["newMessages"] : (function () { throw new Twig_Error_Runtime('Variable "newMessages" does not exist.', 59, $this->source); })()))) {
            // line 60
            echo "    <h3>New Messages</h3>
    ";
            // line 61
            $this->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig", "JMSTranslationBundle:Translate:index.html.twig", 61)->display(array_merge($context, array("messages" => (isset($context["newMessages"]) || array_key_exists("newMessages", $context) ? $context["newMessages"] : (function () { throw new Twig_Error_Runtime('Variable "newMessages" does not exist.', 61, $this->source); })()))));
            // line 62
            echo "    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if ( !twig_test_empty((isset($context["existingMessages"]) || array_key_exists("existingMessages", $context) ? $context["existingMessages"] : (function () { throw new Twig_Error_Runtime('Variable "existingMessages" does not exist.', 64, $this->source); })()))) {
            // line 65
            echo "    <h3>Existing Messages</h3>
    ";
            // line 66
            $this->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig", "JMSTranslationBundle:Translate:index.html.twig", 66)->display(array_merge($context, array("messages" => (isset($context["existingMessages"]) || array_key_exists("existingMessages", $context) ? $context["existingMessages"] : (function () { throw new Twig_Error_Runtime('Variable "existingMessages" does not exist.', 66, $this->source); })()))));
            // line 67
            echo "    ";
        }
        // line 68
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "JMSTranslationBundle:Translate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 68,  215 => 67,  213 => 66,  210 => 65,  208 => 64,  205 => 63,  202 => 62,  200 => 61,  197 => 60,  195 => 59,  186 => 52,  178 => 49,  170 => 43,  168 => 42,  165 => 41,  159 => 38,  156 => 37,  154 => 36,  149 => 33,  134 => 31,  130 => 30,  125 => 27,  110 => 25,  106 => 24,  101 => 21,  86 => 19,  82 => 18,  77 => 16,  74 => 15,  68 => 14,  55 => 7,  51 => 6,  45 => 4,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JMSTranslationBundle::base.html.twig\" %}

{% block javascripts %}
    {{ parent() }}
    <script language=\"javascript\" type=\"text/javascript\">
        var updateMessagePath = {{ path(\"jms_translation_update_message\", {\"config\": selectedConfig, \"domain\": selectedDomain, \"locale\": selectedLocale})|json_encode|raw }};
        var isWritable        = {{ isWriteable is same as(true) ? 'true' : 'false' }};
        var JMS               = new JMSTranslationManager(updateMessagePath, isWritable);

        JMS.ready();
    </script>
{% endblock %}

{% block body %}

    <form id=\"config\" action=\"{{ path(\"jms_translation_index\") }}\" method=\"get\">
        <select name=\"config\" class=\"span3\">
            {% for config in configs %}
            <option value=\"{{ config }}\"{% if config == selectedConfig %} selected=\"selected\"{% endif %}>{{ config }}</option>
            {% endfor %}
        </select>

        <select name=\"domain\" class=\"span3\">
            {% for domain in domains %}
            <option value=\"{{ domain }}\"{% if domain == selectedDomain %} selected=\"selected\"{% endif %}>{{ domain }}</option>
            {% endfor %}
        </select>

        <select name=\"locale\" class=\"span2\">
            {% for locale in locales %}
            <option value=\"{{ locale }}\"{% if locale == selectedLocale %} selected=\"selected\"{% endif %}>{{ locale }}</option>
            {% endfor %}
        </select>
    </form>

    {% if isWriteable is same as(false) %}
    <div class=\"alert-message error\">
        The translation file \"<strong>{{ file }}</strong>\" is not writable.
    </div>
    {% endif %}

    {% if \"xliff\" != format %}
    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format.

        <br /><br />

        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract {{ selectedLocale }} --config={{ selectedConfig }} --output-format=xliff</code>
    </div>
    {% endif %}

    <h2>Available Messages</h2>
\t<h3>
\t\tFilter messages by Id
\t\t<input id=\"filter\" placeholder=\"Enter a key to filter the entries.\" title=\"A wildcard/regexp-search for '*your_key*' will be done. You can also use the '.' as 1-char wildcard, '.*' as wildcard for 0-n chars. Search the web for 'JS Regex Documentation' for more information about regular expressions.\"/>
\t</h3>

    {% if newMessages is not empty %}
    <h3>New Messages</h3>
    {% include \"JMSTranslationBundle:Translate:messages.html.twig\" with {\"messages\": newMessages} %}
    {% endif %}

    {% if existingMessages is not empty %}
    <h3>Existing Messages</h3>
    {% include \"JMSTranslationBundle:Translate:messages.html.twig\" with {\"messages\": existingMessages} %}
    {% endif %}

{% endblock %}
", "JMSTranslationBundle:Translate:index.html.twig", "/opt/lampp/htdocs/timesheet/Symfony/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views/Translate/index.html.twig");
    }
}
