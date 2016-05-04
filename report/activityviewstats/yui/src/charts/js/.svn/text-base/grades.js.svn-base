M.report_activityviewstats = M.report_activityviewstats || {};
M.report_activityviewstats.charts = M.report_activityviewstats.charts || {};
M.report_activityviewstats.charts.grades = {

    /**
     * @method init
     * @param data
     */
    init: function(data) {
        var sizes = new Y.Chart({
            type: "column",
            categoryKey: "range",
            horizontalGridlines: true,
            verticalGridlines: true,
            dataProvider: data.sizes
        });

        Y.one("#chart_grades_range").setStyle("backgroundImage", "none");
        sizes.render("#chart_grades_range");
    }
};
