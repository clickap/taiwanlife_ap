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
