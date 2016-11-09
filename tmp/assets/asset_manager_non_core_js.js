/* Piwik Javascript - cb=1c4b50a9e30800cbf4f57eaac0b8a560*/


angular.module('piwikApp').controller('WebsiteGroupsAdminController',function($scope,$timeout){function onError(){$scope.isUpdateGroupError=true;$timeout(function(){$scope.isUpdateGroupError=false;},1000);}
function done(){$scope.isUpdatingGroup=null;}
$scope.renameGroup=function(group,newName){$scope.isUpdatingGroup=true;function onSuccess(){group.label=newName;$scope.view.editGroup=false;if(group.sites){for(var index=0;index<group.sites.length;index++){group.sites[index].group=newName;}}}
$scope.groupModel.renameGroup(group.label,newName).then(onSuccess,onError)
['finally'](done);};$scope.assignGroup=function(website,groupName){$scope.isUpdatingGroup=groupName;function onSuccess(){website.group=groupName;$scope.isUpdateGroupSuccess=true;$timeout(function(){if($scope.dashboardCtrl)$scope.dashboardCtrl.refresh();},1000);}
$scope.groupModel.assignGroup(website.idsite,groupName).then(onSuccess,onError)
['finally'](done);}});

angular.module('piwikApp.service').service('websiteGroupsAdminModel',function(piwikApi){this.groups=[];this.fetchSitesGroups=function(){var that=this;piwikApi.fetch({method:'SitesManager.getSitesGroups'}).then(function(response){if(response&&response.length){var indexEmpty=response.indexOf('');if(-1!=indexEmpty){response.splice(indexEmpty,1);}
response.sort();that.groups=response;}});}
this.addGroup=function(groupname){if(groupname&&-1===this.groups.indexOf(groupname)){this.groups.push(groupname);}}
this.assignGroup=function(idSite,groupName){return piwikApi.post({method:'SitesManager.updateSite',idSite:idSite,group:groupName});}
this.renameGroup=function(oldGroupName,newGroupName){return piwikApi.post({method:'SitesManager.renameGroup',oldGroupName:oldGroupName,newGroupName:newGroupName});}});

angular.module('piwikApp').directive('multisitesLabel',function(piwik,websiteGroupsAdminModel){if(!piwik.hasSuperUserAccess){return{};}
websiteGroupsAdminModel.fetchSitesGroups();return{restrict:'C',transclude:true,scope:{},require:['^piwikMultisitesSite','^piwikMultisitesDashboard'],templateUrl:'plugins/WebsiteGroups/angularjs/admin/admin.html?cb='+piwik.cacheBuster,link:function(scope,element,attrs,controllers){scope.groupModel=websiteGroupsAdminModel;scope.website=controllers[0].getWebsite();scope.dashboardCtrl=controllers[1];},controller:'WebsiteGroupsAdminController'}});