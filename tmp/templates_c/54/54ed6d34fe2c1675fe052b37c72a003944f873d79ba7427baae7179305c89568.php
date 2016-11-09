<?php

/* @DevicesDetection/detection.twig */
class __TwigTemplate_dfb787b9d0a3f80488fe3f2041fe8e798ada11f2674d13df5daf3358d9cb4a84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@DevicesDetection/detection.twig", 1);
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
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_DeviceDetection")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <script type=\"text/javascript\">

        function showList(type) {
            var ajaxHandler = new ajaxHelper();
            ajaxHandler.addParams({
                module: 'DevicesDetection',
                action: 'showList',
                type: type
            }, 'GET');
            ajaxHandler.setFormat('html');
            ajaxHandler.setCallback(function(response){
                \$('.itemList').html(response).dialog({
                    modal: true,
                    width: '50%',
                    maxHeight: 400
                });
            });
            ajaxHandler.send(true);
        }

    </script>

    <style type=\"text/css\">
        textarea {
            width: 700px;
            display: block;
        }

        .detection {
            padding-top:10px;
        }
        .detection td {
            width: 50%;
        }
        .detection td img {
            margin-right: 10px;
        }
    </style>

    <h2>";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>

    <h3>";
        // line 48
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_UserAgent")), "html", null, true);
        echo "</h3>

    <br />
    <form action=\"";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array())), "html", null, true);
        echo "\" method=\"POST\">
        <textarea name=\"ua\">";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["userAgent"]) ? $context["userAgent"] : $this->getContext($context, "userAgent")), "html", null, true);
        echo "</textarea>
        <br />
        <input type=\"submit\" value=\"";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Refresh")), "html", null, true);
        echo "\" />
    </form>

    <h3>";
        // line 57
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_ColumnOperatingSystem")), "html", null, true);
        echo "</h3>
    <table class=\"simple-table detection\">
        <tr>
            <td>";
        // line 60
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Name")), "html", null, true);
        echo " <small>(<a href=\"javascript:showList('os');\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_ShowAll")), "html", null, true);
        echo "</a>)</small></td>
            <td><img src=\"";
        // line 61
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["os_logo"]) ? $context["os_logo"] : $this->getContext($context, "os_logo")), "html", null, true);
        echo "\" />";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["os_name"]) ? $context["os_name"] : $this->getContext($context, "os_name")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 64
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Version")), "html", null, true);
        echo "</td>
            <td>";
        // line 65
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["os_version"]) ? $context["os_version"] : $this->getContext($context, "os_version")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 68
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_OperatingSystemFamily")), "html", null, true);
        echo "  <small>(<a href=\"javascript:showList('osfamilies');\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_ShowAll")), "html", null, true);
        echo "</a>)</small></td>
            <td><img src=\"";
        // line 69
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["os_family_logo"]) ? $context["os_family_logo"] : $this->getContext($context, "os_family_logo")), "html", null, true);
        echo "\" />";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["os_family"]) ? $context["os_family"] : $this->getContext($context, "os_family")), "html", null, true);
        echo "</td>
        </tr>
    </table>

    <h3>";
        // line 73
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_ColumnBrowser")), "html", null, true);
        echo "</h3>
    <table class=\"simple-table detection\">
        <tr>
            <td>";
        // line 76
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Name")), "html", null, true);
        echo " <small>(<a href=\"javascript:showList('browsers');\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_ShowAll")), "html", null, true);
        echo "</a>)</small></td>
            <td><img src=\"";
        // line 77
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["browser_logo"]) ? $context["browser_logo"] : $this->getContext($context, "browser_logo")), "html", null, true);
        echo "\" />";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["browser_name"]) ? $context["browser_name"] : $this->getContext($context, "browser_name")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 80
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Version")), "html", null, true);
        echo "</td>
            <td>";
        // line 81
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["browser_version"]) ? $context["browser_version"] : $this->getContext($context, "browser_version")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 84
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_BrowserFamily")), "html", null, true);
        echo " <small>(<a href=\"javascript:showList('browserfamilies');\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_ShowAll")), "html", null, true);
        echo "</a>)</small></td>
            <td><img src=\"";
        // line 85
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["browser_family_logo"]) ? $context["browser_family_logo"] : $this->getContext($context, "browser_family_logo")), "html", null, true);
        echo "\" />";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["browser_family"]) ? $context["browser_family"] : $this->getContext($context, "browser_family")), "html", null, true);
        echo "</td>
        </tr>
    </table>

    <h3>";
        // line 89
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_Device")), "html", null, true);
        echo "</h3>
    <table class=\"simple-table detection\">
        <tr>
            <td>";
        // line 92
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_dataTableLabelTypes")), "html", null, true);
        echo " <small>(<a href=\"javascript:showList('devicetypes');\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_ShowAll")), "html", null, true);
        echo "</a>)</small></td>
            <td><img src=\"";
        // line 93
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["device_type_logo"]) ? $context["device_type_logo"] : $this->getContext($context, "device_type_logo")), "html", null, true);
        echo "\" />";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["device_type"]) ? $context["device_type"] : $this->getContext($context, "device_type")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 96
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_dataTableLabelBrands")), "html", null, true);
        echo " <small>(<a href=\"javascript:showList('brands');\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_ShowAll")), "html", null, true);
        echo "</a>)</small></td>
            <td><img src=\"";
        // line 97
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["device_brand_logo"]) ? $context["device_brand_logo"] : $this->getContext($context, "device_brand_logo")), "html", null, true);
        echo "\" />";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["device_brand"]) ? $context["device_brand"] : $this->getContext($context, "device_brand")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 100
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_dataTableLabelModels")), "html", null, true);
        echo "</td>
            <td>";
        // line 101
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["device_model"]) ? $context["device_model"] : $this->getContext($context, "device_model")), "html", null, true);
        echo "</td>
        </tr>
    </table>

    <div style=\"display: none;\" class=\"itemList\"></div>

";
    }

    public function getTemplateName()
    {
        return "@DevicesDetection/detection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 101,  228 => 100,  220 => 97,  214 => 96,  206 => 93,  200 => 92,  194 => 89,  185 => 85,  179 => 84,  173 => 81,  169 => 80,  161 => 77,  155 => 76,  149 => 73,  140 => 69,  134 => 68,  128 => 65,  124 => 64,  116 => 61,  110 => 60,  104 => 57,  98 => 54,  93 => 52,  89 => 51,  83 => 48,  78 => 46,  36 => 6,  33 => 5,  29 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin.twig' %}

{% set title %}{{ 'DevicesDetection_DeviceDetection'|translate }}{% endset %}

{% block content %}

    <script type=\"text/javascript\">

        function showList(type) {
            var ajaxHandler = new ajaxHelper();
            ajaxHandler.addParams({
                module: 'DevicesDetection',
                action: 'showList',
                type: type
            }, 'GET');
            ajaxHandler.setFormat('html');
            ajaxHandler.setCallback(function(response){
                \$('.itemList').html(response).dialog({
                    modal: true,
                    width: '50%',
                    maxHeight: 400
                });
            });
            ajaxHandler.send(true);
        }

    </script>

    <style type=\"text/css\">
        textarea {
            width: 700px;
            display: block;
        }

        .detection {
            padding-top:10px;
        }
        .detection td {
            width: 50%;
        }
        .detection td img {
            margin-right: 10px;
        }
    </style>

    <h2>{{ title }}</h2>

    <h3>{{ 'DevicesDetection_UserAgent'|translate }}</h3>

    <br />
    <form action=\"{{ linkTo({}) }}\" method=\"POST\">
        <textarea name=\"ua\">{{ userAgent }}</textarea>
        <br />
        <input type=\"submit\" value=\"{{ 'General_Refresh'|translate }}\" />
    </form>

    <h3>{{ 'DevicesDetection_ColumnOperatingSystem'|translate }}</h3>
    <table class=\"simple-table detection\">
        <tr>
            <td>{{ 'General_Name'|translate }} <small>(<a href=\"javascript:showList('os');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
            <td><img src=\"{{ os_logo }}\" />{{ os_name }}</td>
        </tr>
        <tr>
            <td>{{ 'CorePluginsAdmin_Version'|translate }}</td>
            <td>{{ os_version }}</td>
        </tr>
        <tr>
            <td>{{ 'DevicesDetection_OperatingSystemFamily'|translate }}  <small>(<a href=\"javascript:showList('osfamilies');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
            <td><img src=\"{{ os_family_logo }}\" />{{ os_family }}</td>
        </tr>
    </table>

    <h3>{{ 'DevicesDetection_ColumnBrowser'|translate }}</h3>
    <table class=\"simple-table detection\">
        <tr>
            <td>{{ 'General_Name'|translate }} <small>(<a href=\"javascript:showList('browsers');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
            <td><img src=\"{{ browser_logo }}\" />{{ browser_name }}</td>
        </tr>
        <tr>
            <td>{{ 'CorePluginsAdmin_Version'|translate }}</td>
            <td>{{ browser_version }}</td>
        </tr>
        <tr>
            <td>{{ 'DevicesDetection_BrowserFamily'|translate }} <small>(<a href=\"javascript:showList('browserfamilies');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
            <td><img src=\"{{ browser_family_logo }}\" />{{ browser_family }}</td>
        </tr>
    </table>

    <h3>{{ 'DevicesDetection_Device'|translate }}</h3>
    <table class=\"simple-table detection\">
        <tr>
            <td>{{ 'DevicesDetection_dataTableLabelTypes'|translate }} <small>(<a href=\"javascript:showList('devicetypes');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
            <td><img src=\"{{ device_type_logo }}\" />{{ device_type }}</td>
        </tr>
        <tr>
            <td>{{ 'DevicesDetection_dataTableLabelBrands'|translate }} <small>(<a href=\"javascript:showList('brands');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
            <td><img src=\"{{ device_brand_logo }}\" />{{ device_brand }}</td>
        </tr>
        <tr>
            <td>{{ 'DevicesDetection_dataTableLabelModels'|translate }}</td>
            <td>{{ device_model }}</td>
        </tr>
    </table>

    <div style=\"display: none;\" class=\"itemList\"></div>

{% endblock %}
";
    }
}
