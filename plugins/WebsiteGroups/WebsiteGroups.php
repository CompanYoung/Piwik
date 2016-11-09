<?php
/**
 * Piwik PRO - cloud hosting and enterprise analytics consultancy
 * from the creators of Piwik.org
 *
 * @link http://piwik.pro
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\WebsiteGroups;

/**
 */
class WebsiteGroups extends \Piwik\Plugin
{
    /**
     * @see Piwik\Plugin::getListHooksRegistered
     */
    public function getListHooksRegistered()
    {
        return array(
            'AssetManager.getJavaScriptFiles' => 'getJsFiles',
            'AssetManager.getStylesheetFiles' => 'getStylesheetFiles',
            'Translate.getClientSideTranslationKeys' => 'getClientSideTranslationKeys',
        );
    }

    public function getClientSideTranslationKeys(&$translations)
    {
        $translations[] = 'WebsiteGroups_Edit';
        $translations[] = 'WebsiteGroups_AssignGroup';
        $translations[] = 'WebsiteGroups_NoGroup';
        $translations[] = 'WebsiteGroups_AddNewGroup';
        $translations[] = 'WebsiteGroups_NewGroupInputHelp';
        $translations[] = 'WebsiteGroups_Rename';
        $translations[] = 'WebsiteGroups_RenameGroup';
        $translations[] = 'WebsiteGroups_NewGroupInputTitle';
    }

    public function getJsFiles(&$jsFiles)
    {
        $jsFiles[] = 'plugins/WebsiteGroups/angularjs/admin/admin-controller.js';
        $jsFiles[] = 'plugins/WebsiteGroups/angularjs/admin/admin-model.js';
        $jsFiles[] = 'plugins/WebsiteGroups/angularjs/admin/admin-directive.js';
    }

    public function getStylesheetFiles(&$stylesheetFiles)
    {
        $stylesheetFiles[] = 'plugins/WebsiteGroups/angularjs/admin/admin.less';
    }
}
