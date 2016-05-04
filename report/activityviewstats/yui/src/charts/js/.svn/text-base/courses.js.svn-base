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
