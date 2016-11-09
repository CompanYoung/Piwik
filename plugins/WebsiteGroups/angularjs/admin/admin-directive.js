/**
 * Piwik PRO - cloud hosting and enterprise analytics consultancy
 * from the creators of Piwik.org
 *
 * @link http://piwik.pro
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

/**
 * This widget adds the possibility to assign a group to a website and to rename groups.
 * Hooks into any element that has a multisitesLabel css class if the user has superuser access. The text of the
 * node having the class multisitesLabel will be kept.
 *
 * Example
 * <div piwik-multisites-dashboard>
 *     <div piwik-multisites-site>
 *          <div class="multisitesLabel">Website Or Group Name</div>
 *     </div>
 * </div>
 */
angular.module('piwikApp').directive('multisitesLabel', function(piwik, websiteGroupsAdminModel){

    if (!piwik.hasSuperUserAccess) {
        return {};
    }

    // fetch it only once per directive and not for each instantiation.
    websiteGroupsAdminModel.fetchSitesGroups();

    return {
        restrict: 'C',
        transclude: true,
        scope: {},
        require: ['^piwikMultisitesSite', '^piwikMultisitesDashboard'],
        templateUrl: 'plugins/WebsiteGroups/angularjs/admin/admin.html?cb=' + piwik.cacheBuster,
        link: function (scope, element, attrs, controllers) {
            scope.groupModel = websiteGroupsAdminModel;
            scope.website    = controllers[0].getWebsite();
            scope.dashboardCtrl = controllers[1];
        },
        controller: 'WebsiteGroupsAdminController'
    }
});