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
