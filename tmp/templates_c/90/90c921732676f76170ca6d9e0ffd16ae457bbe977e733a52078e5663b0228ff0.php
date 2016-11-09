<?php

/* @MobileMessaging/index.twig */
class __TwigTemplate_3522e652d380aae32063fe720bbc6019a081575756ec8e0fcc76e5cf18d18c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@MobileMessaging/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macro"] = $this->loadTemplate("@MobileMessaging/macros.twig", "@MobileMessaging/index.twig", 3);
        // line 5
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_SettingsMenu")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 10
            echo "        <h2>";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h2>

        <div class=\"form-group\">
            <label>";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_LetUsersManageAPICredential")), "html", null, true);
            echo "</label>

            <label class=\"radio\">
                <input type='radio' value='false' id=\"delegatedManagement\" name='delegatedManagement'
                        ";
            // line 17
            if ( !(isset($context["delegatedManagement"]) ? $context["delegatedManagement"] : $this->getContext($context, "delegatedManagement"))) {
                echo " checked='checked'";
            }
            echo "/>
                ";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "

                <span class='form-description'>";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Default")), "html", null, true);
            echo ".
                    ";
            // line 21
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_LetUsersManageAPICredential_No_Help")), "html", null, true);
            echo "</span>
            </label>

            <label class=\"radio\">
                <input type='radio' value='true' id=\"delegatedManagement\" name='delegatedManagement'
                        ";
            // line 26
            if ((isset($context["delegatedManagement"]) ? $context["delegatedManagement"] : $this->getContext($context, "delegatedManagement"))) {
                echo " checked='checked'";
            }
            echo "/>
                ";
            // line 27
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "

                <span class='form-description'>";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_LetUsersManageAPICredential_Yes_Help")), "html", null, true);
            echo "</span>
            </label>
        </div>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (((isset($context["accountManagedByCurrentUser"]) ? $context["accountManagedByCurrentUser"] : $this->getContext($context, "accountManagedByCurrentUser")) && (isset($context["delegatedManagement"]) ? $context["delegatedManagement"] : $this->getContext($context, "delegatedManagement")))) {
            // line 35
            echo "
        <h2 piwik-enriched-headline
                >";
            // line 37
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SMSProvider")), "html", null, true);
            echo "</h2>
        To manage your SMS provider go to your <a href=\"";
            // line 38
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "userSettings"))), "html", null, true);
            echo "\">personal mobile messaging settings</a>.

    ";
        } elseif (        // line 40
(isset($context["accountManagedByCurrentUser"]) ? $context["accountManagedByCurrentUser"] : $this->getContext($context, "accountManagedByCurrentUser"))) {
            // line 41
            echo "
        <h2 piwik-enriched-headline
                >";
            // line 43
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SMSProvider")), "html", null, true);
            echo "</h2>

        ";
            // line 45
            echo $context["macro"]->getmanageSmsApi((isset($context["credentialSupplied"]) ? $context["credentialSupplied"] : $this->getContext($context, "credentialSupplied")), (isset($context["creditLeft"]) ? $context["creditLeft"] : $this->getContext($context, "creditLeft")), (isset($context["smsProviders"]) ? $context["smsProviders"] : $this->getContext($context, "smsProviders")), (isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")));
            echo "
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@MobileMessaging/index.twig", 48);
        // line 49
        echo "
    <div style=\"margin-top:10px\">
        ";
        // line 51
        echo $context["ajax"]->geterrorDiv("ajaxErrorMobileMessagingSettings");
        echo "
    </div>

    <h2>";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_PhoneNumbers")), "html", null, true);
        echo "</h2>
    To manage your phone numbers go to your <a href=\"";
        // line 55
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "userSettings"))), "html", null, true);
        echo "\">personal mobile messaging settings</a>.

    ";
        // line 57
        echo $context["ajax"]->getloadingDiv("ajaxLoadingMobileMessagingSettings");
        echo "

    <div class='ui-confirm' id='confirmDeleteAccount'>
        <h2>";
        // line 60
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_DeleteAccountConfirm")), "html", null, true);
        echo "</h2>
        <input role='yes' type='button' value='";
        // line 61
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "'/>
        <input role='no' type='button' value='";
        // line 62
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "'/>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@MobileMessaging/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 62,  166 => 61,  162 => 60,  156 => 57,  151 => 55,  147 => 54,  141 => 51,  137 => 49,  135 => 48,  132 => 47,  127 => 45,  122 => 43,  118 => 41,  116 => 40,  111 => 38,  107 => 37,  103 => 35,  101 => 34,  98 => 33,  91 => 29,  86 => 27,  80 => 26,  72 => 21,  68 => 20,  63 => 18,  57 => 17,  50 => 13,  43 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin.twig' %}

{% import '@MobileMessaging/macros.twig' as macro %}

{% set title %}{{ 'MobileMessaging_SettingsMenu'|translate }}{% endset %}

{% block content %}

    {% if isSuperUser %}
        <h2>{{ title }}</h2>

        <div class=\"form-group\">
            <label>{{ 'MobileMessaging_Settings_LetUsersManageAPICredential'|translate }}</label>

            <label class=\"radio\">
                <input type='radio' value='false' id=\"delegatedManagement\" name='delegatedManagement'
                        {% if not delegatedManagement %} checked='checked'{% endif %}/>
                {{ 'General_No'|translate }}

                <span class='form-description'>{{ 'General_Default'|translate }}.
                    {{ 'MobileMessaging_Settings_LetUsersManageAPICredential_No_Help'|translate }}</span>
            </label>

            <label class=\"radio\">
                <input type='radio' value='true' id=\"delegatedManagement\" name='delegatedManagement'
                        {% if delegatedManagement %} checked='checked'{% endif %}/>
                {{ 'General_Yes'|translate }}

                <span class='form-description'>{{ 'MobileMessaging_Settings_LetUsersManageAPICredential_Yes_Help'|translate }}</span>
            </label>
        </div>
    {% endif %}

    {% if accountManagedByCurrentUser and delegatedManagement %}

        <h2 piwik-enriched-headline
                >{{ 'MobileMessaging_Settings_SMSProvider'|translate }}</h2>
        To manage your SMS provider go to your <a href=\"{{ linkTo({'action':'userSettings'}) }}\">personal mobile messaging settings</a>.

    {% elseif accountManagedByCurrentUser %}

        <h2 piwik-enriched-headline
                >{{ 'MobileMessaging_Settings_SMSProvider'|translate }}</h2>

        {{ macro.manageSmsApi(credentialSupplied, creditLeft, smsProviders, provider) }}
    {% endif %}

    {% import 'ajaxMacros.twig' as ajax %}

    <div style=\"margin-top:10px\">
        {{ ajax.errorDiv('ajaxErrorMobileMessagingSettings') }}
    </div>

    <h2>{{ 'MobileMessaging_PhoneNumbers'|translate }}</h2>
    To manage your phone numbers go to your <a href=\"{{ linkTo({'action':'userSettings'}) }}\">personal mobile messaging settings</a>.

    {{ ajax.loadingDiv('ajaxLoadingMobileMessagingSettings') }}

    <div class='ui-confirm' id='confirmDeleteAccount'>
        <h2>{{ 'MobileMessaging_Settings_DeleteAccountConfirm'|translate }}</h2>
        <input role='yes' type='button' value='{{ 'General_Yes'|translate }}'/>
        <input role='no' type='button' value='{{ 'General_No'|translate }}'/>
    </div>

{% endblock %}
";
    }
}
