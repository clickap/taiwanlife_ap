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
