/**
 * Piwik PRO - cloud hosting and enterprise analytics consultancy
 * from the creators of Piwik.org
 *
 * @link http://piwik.pro
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

angular.module('piwikApp.service').service('websiteGroupsAdminModel', function(piwikApi){

    this.groups = [];

    /**
     * Fetch all sites
     */
    this.fetchSitesGroups = function () {
        var that = this;
        piwikApi.fetch({method: 'SitesManager.getSitesGroups'}).then(function (response) {
            if (response && response.length) {
                var indexEmpty = response.indexOf('');
                if (-1 != indexEmpty) {
                    response.splice(indexEmpty, 1);
                }

                response.sort();
                that.groups = response;
            }
        });
    }

    /**
     * Adds a new group to the list of existing groups. Won't be persisted unless a website gets actually assigned
     * to this groupname.
     *
     * @param {string} groupname
     */
    this.addGroup = function (groupname) {
        if (groupname && -1 === this.groups.indexOf(groupname)) {
            this.groups.push(groupname);
        }
    }

    /**
     * Sets (overwrites) the assigned groupname of the given site.
     *
     * @param {int} idSite
     * @param {string} groupName
     * @returns {Promise}
     */
    this.assignGroup = function (idSite, groupName) {
        return piwikApi.post({
            method: 'SitesManager.updateSite',
            idSite: idSite,
            group: groupName
        });
    }

    /**
     * Sets the new groupname to all websites having currently the old groupname.
     *
     * @param {string} oldGroupName
     * @param {string} newGroupName
     * @returns {Promise}
     */
    this.renameGroup = function (oldGroupName, newGroupName) {
        return piwikApi.post({
            method: 'SitesManager.renameGroup',
            oldGroupName: oldGroupName,
            newGroupName: newGroupName
        });
    }
});