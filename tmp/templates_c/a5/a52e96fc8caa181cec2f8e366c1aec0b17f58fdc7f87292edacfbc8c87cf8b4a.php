<?php

/* @Feedback/index.twig */
class __TwigTemplate_de9cde01d1a52e146962b39a452211224331c8a7aa5ba6a823dd6923199beaa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user.twig", "@Feedback/index.twig", 1);
        $this->blocks = array(
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
        $context["test_piwikUrl"] = "http://demo.piwik.org/";
        // line 4
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, (((isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")) == "http://demo.piwik.org/") || ((isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")) == "https://demo.piwik.org/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 6
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AboutPiwikX", (isset($context["piwikVersion"]) ? $context["piwikVersion"] : $this->getContext($context, "piwikVersion")))), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
    <div id=\"feedback-faq\" class=\"admin\">
        <h2 piwik-enriched-headline
            feature-name=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Help")), "html", null, true);
        echo "\"
            >";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>

        <div class=\"header_full\">
            <p>";
        // line 16
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikIsACollaborativeProjectYouCanContributeAndDonate", "<a href='?module=Proxy&action=redirect&url=http://piwik.org' target='_blank'>", "</a>", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/get-involved/'>", "</a>", "<a href='#donate'>", "</a>", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/team/' target='_blank'>", "</a>"));
        // line 25
        echo "
            </p>
        </div>

        <h2>";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_CommunityHelp")), "html", null, true);
        echo "</h2>

        <div class=\"header_full\">
            <p> &bull; ";
        // line 32
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ViewUserGuides", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/'>", "</a>"));
        echo ".</p>
            <p> &bull; ";
        // line 33
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ViewAnswersToFAQ", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/faq/'>", "</a>"));
        echo ".</p>
            <p> &bull; ";
        // line 34
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_VisitTheForums", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://forum.piwik.org/'>", "</a>"));
        echo ".</p>
            <p> &bull; ";
        // line 35
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_LearnAboutCommonlyUsedTerms", (((("<a href=\"" . call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "API", "action" => "glossary")))) . "#metrics\">") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Metrics"))) . "</a>"), (((("<a href=\"" . call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "API", "action" => "glossary")))) . "#reports\">") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Reports"))) . "</a>")));
        // line 38
        echo " (";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_Glossary")), "html", null, true);
        echo ")</p>
        </div>

        <h2>";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ProfessionalHelp")), "html", null, true);
        echo "</h2>

        <div class=\"header_full\">
            <p>";
        // line 44
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ProfessionalServicesIntro")), "html", null, true);
        echo "</p>

            <p>";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ProfessionalServicesOfferIntro")), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ProfessionalServicesReviewPiwikSetup")), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 48
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ProfessionalServicesOptimizationMaintenance")), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 49
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ProfessionalServicesPhoneEmailSupport")), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 50
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ProfessionalServicesTraining")), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ProfessionalServicesPremiumFeatures")), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ProfessionalServicesCustomDevelopment")), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 53
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ProfessionalServicesAnalystConsulting")), "html", null, true);
        echo "</p>
        </div>

        <form target=\"_blank\" action=\"https://piwik.org/support/\">
            <input type=\"hidden\" name=\"pk_campaign\" value=\"App_Help\">
            <input type=\"hidden\" name=\"pk_source\" value=\"Piwik_App\">
            <input type=\"hidden\" name=\"pk_medium\" value=\"App_ContactUs_button\">
            <br />
            <input type=\"submit\" value=\"";
        // line 61
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_ContactUs")), "html", null, true);
        echo "\">
        </form>

        <h2>";
        // line 64
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_DoYouHaveBugReportOrFeatureRequest")), "html", null, true);
        echo "</h2>

        <div class=\"header_full\">
                <p>";
        // line 67
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_HowToCreateTicket", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://developer.piwik.org/guides/core-team-workflow%23submitting-a-bug-report'>", "</a>", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://developer.piwik.org/guides/core-team-workflow%23submitting-a-feature-request'>", "</a>", "<a target='_blank' href='?module=Proxy&action=redirect&url=https://github.com/piwik/piwik/issues'>", "</a>", "<a target='_blank' href='?module=Proxy&action=redirect&url=https://github.com/piwik/piwik/issues/new'>", "</a>"));
        // line 76
        echo "</p>
        </div>

        <div class=\"footer\">
            <hr/>
            <ul class=\"social\">
                <li>
                    <a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/newsletter/\"><img class=\"icon\" src=\"plugins/Feedback/images/newsletter.png\"></a>
                    <a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/newsletter/\">Newsletter</a>
                </li>
                <li>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://www.facebook.com/Piwik\"><img class=\"icon\" src=\"plugins/Feedback/images/facebook.png\"></a>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://www.facebook.com/Piwik\">Facebook</a>
                </li>
                <li>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://twitter.com/piwik\"><img class=\"icon\" src=\"plugins/Feedback/images/twitter.png\"></a>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://twitter.com/piwik\">Twitter</a>
                </li>
                <li>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://www.linkedin.com/groups?gid=867857\"><img class=\"icon\" src=\"plugins/Feedback/images/linkedin.png\"></a>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://www.linkedin.com/groups?gid=867857\">Linkedin</a>
                </li>
                <li>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"https://github.com/piwik/piwik\"><img class=\"icon\" src=\"plugins/Feedback/images/github.png\"></a>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"https://github.com/piwik/piwik\">GitHub</a>
                </li>
            </ul>
            <ul class=\"menu\">
                <li><a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/blog/\">Blog</a></li>
                <li><a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/about/sponsors/\">Sponsors</a></li>
                <li><a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://developer.piwik.org\">Developers</a></li>
                <li><a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://plugins.piwik.org\">Marketplace</a></li>
                <li><a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/thank-you-all/\">Credits</a></li>
            </ul>
            <p class=\"claim\"><small>";
        // line 110
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Feedback_PrivacyClaim", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/privacy/'>", "</a>"));
        // line 113
        echo "</small></p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Feedback/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 113,  192 => 110,  156 => 76,  154 => 67,  148 => 64,  142 => 61,  131 => 53,  127 => 52,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  98 => 44,  92 => 41,  85 => 38,  83 => 35,  79 => 34,  75 => 33,  71 => 32,  65 => 29,  59 => 25,  57 => 16,  51 => 13,  47 => 12,  42 => 9,  39 => 8,  35 => 1,  31 => 6,  27 => 4,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'user.twig' %}

{% set test_piwikUrl='http://demo.piwik.org/' %}
{% set isPiwikDemo %}{{ piwikUrl == 'http://demo.piwik.org/' or piwikUrl == 'https://demo.piwik.org/'}}{% endset %}

{% set title %}{{ 'General_AboutPiwikX'|translate(piwikVersion) }}{% endset %}

{% block content %}

    <div id=\"feedback-faq\" class=\"admin\">
        <h2 piwik-enriched-headline
            feature-name=\"{{ 'General_Help'|translate }}\"
            >{{ title }}</h2>

        <div class=\"header_full\">
            <p>{{ 'General_PiwikIsACollaborativeProjectYouCanContributeAndDonate'|translate(
            \"<a href='?module=Proxy&action=redirect&url=http://piwik.org' target='_blank'>\",
            \"</a>\",
            \"<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/get-involved/'>\",
            \"</a>\",
            \"<a href='#donate'>\",
            \"</a>\",
            \"<a href='?module=Proxy&action=redirect&url=http://piwik.org/team/' target='_blank'>\",
            \"</a>\"
            )|raw }}
            </p>
        </div>

        <h2>{{ 'Feedback_CommunityHelp'|translate }}</h2>

        <div class=\"header_full\">
            <p> &bull; {{ 'Feedback_ViewUserGuides'|translate(\"<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/'>\",\"</a>\")|raw }}.</p>
            <p> &bull; {{ 'Feedback_ViewAnswersToFAQ'|translate(\"<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/faq/'>\",\"</a>\")|raw }}.</p>
            <p> &bull; {{ 'Feedback_VisitTheForums'|translate(\"<a target='_blank' href='?module=Proxy&action=redirect&url=http://forum.piwik.org/'>\",\"</a>\")|raw }}.</p>
            <p> &bull; {{ 'API_LearnAboutCommonlyUsedTerms'|translate(
                '<a href=\"'~ linkTo({'module':\"API\",'action':\"glossary\"}) ~ '#metrics\">' ~ 'General_Metrics'|translate ~ '</a>',
                '<a href=\"'~ linkTo({'module':\"API\",'action':\"glossary\"}) ~ '#reports\">' ~ 'General_Reports'|translate ~ '</a>')|raw
                }} ({{ 'API_Glossary'|translate }})</p>
        </div>

        <h2>{{ 'Feedback_ProfessionalHelp'|translate }}</h2>

        <div class=\"header_full\">
            <p>{{ 'Feedback_ProfessionalServicesIntro'|translate }}</p>

            <p>{{ 'Feedback_ProfessionalServicesOfferIntro'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesReviewPiwikSetup'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesOptimizationMaintenance'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesPhoneEmailSupport'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesTraining'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesPremiumFeatures'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesCustomDevelopment'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesAnalystConsulting'|translate }}</p>
        </div>

        <form target=\"_blank\" action=\"https://piwik.org/support/\">
            <input type=\"hidden\" name=\"pk_campaign\" value=\"App_Help\">
            <input type=\"hidden\" name=\"pk_source\" value=\"Piwik_App\">
            <input type=\"hidden\" name=\"pk_medium\" value=\"App_ContactUs_button\">
            <br />
            <input type=\"submit\" value=\"{{ 'Feedback_ContactUs'|translate }}\">
        </form>

        <h2>{{ 'Feedback_DoYouHaveBugReportOrFeatureRequest'|translate }}</h2>

        <div class=\"header_full\">
                <p>{{ 'Feedback_HowToCreateTicket'|translate(
                \"<a target='_blank' href='?module=Proxy&action=redirect&url=http://developer.piwik.org/guides/core-team-workflow%23submitting-a-bug-report'>\",
                \"</a>\",
                \"<a target='_blank' href='?module=Proxy&action=redirect&url=http://developer.piwik.org/guides/core-team-workflow%23submitting-a-feature-request'>\",
                \"</a>\",
                \"<a target='_blank' href='?module=Proxy&action=redirect&url=https://github.com/piwik/piwik/issues'>\",
                \"</a>\",
                \"<a target='_blank' href='?module=Proxy&action=redirect&url=https://github.com/piwik/piwik/issues/new'>\",
                \"</a>\"
                )|raw }}</p>
        </div>

        <div class=\"footer\">
            <hr/>
            <ul class=\"social\">
                <li>
                    <a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/newsletter/\"><img class=\"icon\" src=\"plugins/Feedback/images/newsletter.png\"></a>
                    <a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/newsletter/\">Newsletter</a>
                </li>
                <li>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://www.facebook.com/Piwik\"><img class=\"icon\" src=\"plugins/Feedback/images/facebook.png\"></a>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://www.facebook.com/Piwik\">Facebook</a>
                </li>
                <li>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://twitter.com/piwik\"><img class=\"icon\" src=\"plugins/Feedback/images/twitter.png\"></a>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://twitter.com/piwik\">Twitter</a>
                </li>
                <li>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://www.linkedin.com/groups?gid=867857\"><img class=\"icon\" src=\"plugins/Feedback/images/linkedin.png\"></a>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"http://www.linkedin.com/groups?gid=867857\">Linkedin</a>
                </li>
                <li>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"https://github.com/piwik/piwik\"><img class=\"icon\" src=\"plugins/Feedback/images/github.png\"></a>
                    <a rel=\"noreferrer\"  target=\"_blank\" href=\"https://github.com/piwik/piwik\">GitHub</a>
                </li>
            </ul>
            <ul class=\"menu\">
                <li><a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/blog/\">Blog</a></li>
                <li><a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/about/sponsors/\">Sponsors</a></li>
                <li><a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://developer.piwik.org\">Developers</a></li>
                <li><a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://plugins.piwik.org\">Marketplace</a></li>
                <li><a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/thank-you-all/\">Credits</a></li>
            </ul>
            <p class=\"claim\"><small>{{ 'Feedback_PrivacyClaim'|translate(
                    \"<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/privacy/'>\",
                    \"</a>\"
                )|raw}}</small></p>
        </div>
    </div>
{% endblock %}";
    }
}
