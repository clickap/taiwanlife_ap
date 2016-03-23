M.report_overviewstats = M.report_overviewstats || {};
M.report_overviewstats.charts = M.report_overviewstats.charts || {};
M.report_overviewstats.charts.grades = {

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
