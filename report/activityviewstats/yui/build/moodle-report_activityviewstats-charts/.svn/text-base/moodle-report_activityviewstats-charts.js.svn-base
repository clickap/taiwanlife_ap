YUI.add('moodle-report_activityviewstats-charts', function (Y, NAME) {

M.report_activityviewstats = M.report_activityviewstats || {};
M.report_activityviewstats.charts = M.report_activityviewstats.charts || {};
M.report_activityviewstats.charts.countries = {

    /**
     * @method init
     * @param data
     */
    init: function(data) {
        var chart = new Y.Chart({
            type: "bar",
            categoryKey: "country",
            verticalGridlines: true,
            dataProvider: data
        });

        Y.one("#chart_countries").setStyle("backgroundImage", "none");
        chart.render("#chart_countries");
    }
};
M.report_activityviewstats = M.report_activityviewstats || {};
M.report_activityviewstats.charts = M.report_activityviewstats.charts || {};
M.report_activityviewstats.charts.courses = {

    /**
     * @method init
     * @param data
     */
    init: function(data) {
        var sizes = new Y.Chart({
            type: "column",
            categoryKey: "course_size",
            horizontalGridlines: true,
            verticalGridlines: true,
            dataProvider: data.sizes
        });

        Y.one("#chart_courses_sizes").setStyle("backgroundImage", "none");
        sizes.render("#chart_courses_sizes");
    }
};
M.report_activityviewstats = M.report_activityviewstats || {};
M.report_activityviewstats.charts = M.report_activityviewstats.charts || {};
M.report_activityviewstats.charts.enrolments = {

    /**
     * @method init
     * @param data
     */
    init: function(data) {
        var lastmonth = new Y.Chart({
            type: "combo",
            dataProvider: data.lastmonth,
            categoryKey: "date",
            horizontalGridlines: true,
            verticalGridlines: true,
            styles: {
                axes: {
                    date: {
                        label: {
                            rotation: -90
                        }
                    }
                }
            }

        });

        Y.one("#chart_enrolments_lastmonth").setStyle("backgroundImage", "none");
        lastmonth.render("#chart_enrolments_lastmonth");

        var lastyear = new Y.Chart({
            type: "combo",
            dataProvider: data.lastyear,
            categoryKey: "date",
            horizontalGridlines: true,
            verticalGridlines: true,
            styles: {
                axes: {
                    date: {
                        label: {
                            rotation: -90
                        }
                    }
                }
            }

        });

        Y.one("#chart_enrolments_lastyear").setStyle("backgroundImage", "none");
        lastyear.render("#chart_enrolments_lastyear");
    }
};
M.report_activityviewstats = M.report_activityviewstats || {};
M.report_activityviewstats.charts = M.report_activityviewstats.charts || {};
M.report_activityviewstats.charts.langs = {

    /**
     * @method init
     * @param data
     */
    init: function(data) {
        var chart = new Y.Chart({
            type: "bar",
            categoryKey: "language",
            verticalGridlines: true,
            dataProvider: data
        });

        Y.one("#chart_langs").setStyle("backgroundImage", "none");
        chart.render("#chart_langs");
    }
};
M.report_activityviewstats = M.report_activityviewstats || {};
M.report_activityviewstats.charts = M.report_activityviewstats.charts || {};
M.report_activityviewstats.charts.logins = {

    /**
     * @method init
     * @param data
     */
    init: function(data) {
        var perday = new Y.Chart({
            type: "combo",
            dataProvider: data.perday,
            categoryKey: "date",
            horizontalGridlines: true,
            verticalGridlines: true,
            styles: {
                axes: {
                    date: {
                        label: {
                            rotation: -90
                        }
                    }
                }
            }

        });

        Y.one("#chart_logins_perday").setStyle("backgroundImage", "none");
        perday.render("#chart_logins_perday");

    }
};
M.report_activityviewstats = M.report_activityviewstats || {};
M.report_activityviewstats.charts = M.report_activityviewstats.charts || {};
M.report_activityviewstats.charts.videos = {

    /**
     * @method init
     * @param data
     */
    init: function(data) {
        var chart = new Y.Chart({
            type: "bar",
            categoryKey: "video",
            verticalGridlines: true,
            dataProvider: data
        });

        Y.one("#chart_videos").setStyle("backgroundImage", "none");
        chart.render("#chart_videos");
    }
};
M.report_activityviewstats = M.report_activityviewstats || {};
M.report_activityviewstats.charts = M.report_activityviewstats.charts || {};
M.report_activityviewstats.charts.resources = {

    /**
     * @method init
     * @param data
     */
    init: function(data) {
        var chart = new Y.Chart({
            type: "bar",
            categoryKey: "resource",
            verticalGridlines: true,
            dataProvider: data
        });
        Y.one("#chart_resources").setStyle("backgroundImage", "none");
        chart.render("#chart_resources");
    }
};
M.report_activityviewstats = M.report_activityviewstats || {};
M.report_activityviewstats.charts = M.report_activityviewstats.charts || {};
M.report_activityviewstats.charts.quizes = {

    /**
     * @method init
     * @param data
     */
    init: function(data) {
        var chart = new Y.Chart({
            type: "bar",
            categoryKey: "quiz",
            verticalGridlines: true,
            dataProvider: data
        });
        Y.one("#chart_quizes").setStyle("backgroundImage", "none");
        chart.render("#chart_quizes");
    }
};
M.report_activityviewstats = M.report_activityviewstats || {};
M.report_activityviewstats.charts = M.report_activityviewstats.charts || {};
M.report_activityviewstats.charts.forums = {

    /**
     * @method init
     * @param data
     */
    init: function(data) {
        var chart = new Y.Chart({
            type: "bar",
            categoryKey: "forum",
            verticalGridlines: true,
            dataProvider: data
        });
        Y.one("#chart_forums").setStyle("backgroundImage", "none");
        chart.render("#chart_forums");
    }
};


}, '@VERSION@', {"requires": ["base", "node", "charts", "charts-legend"]});
