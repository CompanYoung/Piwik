/**
 * Piwik PRO - cloud hosting and enterprise analytics consultancy
 * from the creators of Piwik.org
 *
 * @link http://piwik.pro
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

angular.module('piwikApp').controller('WebsiteGroupsAdminController', function ($scope, $timeout) {
    /**
     * We add a css class depending on "isUpdatingGroup", "isUpdateGroupError" and "isUpdateGroupSuccess" which in turn
     * triggers an animation.
     */

    function onError () {
        $scope.isUpdateGroupError = true;
        $timeout(function () { $scope.isUpdateGroupError = false; }, 1000);
    }

    function done() {
        $scope.isUpdatingGroup = null;
    }

    /**
     * Renames an existing group by updating the groupname of all sites within that group.
     *
     * @param {object} group eg {label: 'groupName', sites: [{label:'site1', ...},{label:'site2', ...}]} see
     *                       multisites dashboard
     * @param {string} newName   New group name
     */
    $scope.renameGroup = function (group, newName) {
        $scope.isUpdatingGroup = true;

        function onSuccess () {
            group.label = newName;
            $scope.view.editGroup = false;
            if (group.sites) {
                for (var index = 0; index < group.sites.length; index++) {
                    group.sites[index].group = newName;
                }
            }
        }

        $scope.groupModel.renameGroup(group.label, newName)
                         .then(onSuccess, onError)
                         ['finally'](done);
    };

    /**
     * Assigns (overwrites) the name of the group of the given website.
     *
     * @param {object} website group eg {label: 'groupName', idsite: 5, main_url: '', ...}
     * @param {string} groupName   The group name to set
     */
    $scope.assignGroup = function (website, groupName) {
        $scope.isUpdatingGroup = groupName;

        function onSuccess () {
            website.group = groupName;
            $scope.isUpdateGroupSuccess = true;
            $timeout(function () {
                if ($scope.dashboardCtrl) $scope.dashboardCtrl.refresh();
            }, 1000);
        }

        $scope.groupModel.assignGroup(website.idsite, groupName)
                         .then(onSuccess, onError)
                         ['finally'](done);
    }
});
