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
