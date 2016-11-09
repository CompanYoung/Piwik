<?php

/* @API/listAllAPI.twig */
class __TwigTemplate_f388965434998b4984bb57630473b7c39c3574360ef1daa7d57cfe310cd217ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user.twig", "@API/listAllAPI.twig", 1);
        $this->blocks = array(
            'topcontrols' => array($this, 'block_topcontrols'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_ReportingApiReference")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topcontrols($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@API/listAllAPI.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@API/listAllAPI.twig", 7)->display($context);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"api-list\">

    <h2>";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>

    <p>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_PluginDescription")), "html", null, true);
        echo "</p>

    <p>
        ";
        // line 19
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_MoreInformation", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/analytics-api'>", "</a>", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/analytics-api/reference'>", "</a>"));
        echo "
    </p>

    <h2>";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_UserAuthentication")), "html", null, true);
        echo "</h2>

    <p>
        ";
        // line 25
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_UsingTokenAuth", "", "", ""));
        echo "<br/>
        <span id='token_auth'>&amp;token_auth=<strong>";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "html", null, true);
        echo "</strong></span><br/>
        ";
        // line 27
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_KeepTokenSecret", "<b>", "</b>"));
        echo "
        ";
        // line 28
        echo (isset($context["list_api_methods_with_links"]) ? $context["list_api_methods_with_links"] : $this->getContext($context, "list_api_methods_with_links"));
        echo "
        <br/>
</div>
";
    }

    public function getTemplateName()
    {
        return "@API/listAllAPI.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  84 => 27,  80 => 26,  76 => 25,  70 => 22,  64 => 19,  58 => 16,  53 => 14,  48 => 11,  45 => 10,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  26 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'user.twig' %}

{% set title %}{{ 'API_ReportingApiReference'|translate }}{% endset %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% include \"@CoreHome/_periodSelect.twig\" %}
{% endblock %}

{% block content %}

<div class=\"api-list\">

    <h2>{{ title }}</h2>

    <p>{{ 'API_PluginDescription'|translate }}</p>

    <p>
        {{ 'API_MoreInformation'|translate(\"<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/analytics-api'>\",\"</a>\",\"<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/analytics-api/reference'>\",\"</a>\")|raw }}
    </p>

    <h2>{{ 'API_UserAuthentication'|translate }}</h2>

    <p>
        {{ 'API_UsingTokenAuth'|translate('','',\"\")|raw }}<br/>
        <span id='token_auth'>&amp;token_auth=<strong>{{ token_auth }}</strong></span><br/>
        {{ 'API_KeepTokenSecret'|translate('<b>','</b>')|raw }}
        {{ list_api_methods_with_links|raw }}
        <br/>
</div>
{% endblock %}";
    }
}
