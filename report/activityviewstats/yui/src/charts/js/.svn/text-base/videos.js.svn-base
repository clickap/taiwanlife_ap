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
