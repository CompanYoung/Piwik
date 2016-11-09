/**
 * Piwik PRO - cloud hosting and enterprise analytics consultancy
 * from the creators of Piwik.org
 *
 * @link http://piwik.pro
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

describe("WebsiteGroups", function () {
    this.timeout(0);

    this.fixture = "Piwik\\Tests\\Fixtures\\ThreeGoalsOnePageview";
    this.optionsOverride = {
        'persist-fixture-data': false
    };

    var url = "?module=Widgetize&action=iframe&idSite=1&period=day&date=2012-01-05&moduleToWidgetize=MultiSites&"
            + "actionToWidgetize=standalone";

    it("should display a form on click of special icon in all websites dashboard", function (done) {
        expect.screenshot('add_group').to.be.capture(function (page) {
            page.load(url);
            page.mouseMove('td.multisites-label');
            page.click('td.multisites-label img.edit');
        }, done);
    });

    it("should add a group successfully", function (done) {
        expect.screenshot('group_added').to.be.capture(function (page) {
            page.sendKeys('input[ng-model=newgroupname]', 'new group');
            page.click('.add_new_group');
        }, done);
    });

    it("should add a website to a group successfully", function (done) {
        expect.screenshot('group_website_added').to.be.capture(function (page) {
            page.click('ul.custom_select_ul_list>li:eq(1)', 3000);
        }, done);
    });
});