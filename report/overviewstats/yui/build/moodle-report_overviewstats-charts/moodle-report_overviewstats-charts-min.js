YUI.add("moodle-report_overviewstats-charts",function(e,t){M.report_overviewstats=M.report_overviewstats||{},M.report_overviewstats.charts=M.report_overviewstats.charts||{},M.report_overviewstats.charts.countries={init:function(t){var n=new e.Chart({type:"bar",categoryKey:"country",verticalGridlines:!0,dataProvider:t});e.one("#chart_countries").setStyle("backgroundImage","none"),n.render("#chart_countries")}},M.report_overviewstats=M.report_overviewstats||{},M.report_overviewstats.charts=M.report_overviewstats.charts||{},M.report_overviewstats.charts.courses={init:function(t){var n=new e.Chart({type:"column",categoryKey:"course_size",horizontalGridlines:!0,verticalGridlines:!0,dataProvider:t.sizes});e.one("#chart_courses_sizes").setStyle("backgroundImage","none"),n.render("#chart_courses_sizes")}},M.report_overviewstats=M.report_overviewstats||{},M.report_overviewstats.charts=M.report_overviewstats.charts||{},M.report_overviewstats.charts.enrolments={init:function(t){var n=new e.Chart({type:"combo",dataProvider:t.lastmonth,categoryKey:"date",horizontalGridlines:!0,verticalGridlines:!0,styles:{axes:{date:{label:{rotation:-90}}}}});e.one("#chart_enrolments_lastmonth").setStyle("backgroundImage","none"),n.render("#chart_enrolments_lastmonth");var r=new e.Chart({type:"combo",dataProvider:t.lastyear,categoryKey:"date",horizontalGridlines:!0,verticalGridlines:!0,styles:{axes:{date:{label:{rotation:-90}}}}});e.one("#chart_enrolments_lastyear").setStyle("backgroundImage","none"),r.render("#chart_enrolments_lastyear")}},M.report_overviewstats=M.report_overviewstats||{},M.report_overviewstats.charts=M.report_overviewstats.charts||{},M.report_overviewstats.charts.langs={init:function(t){var n=new e.Chart({type:"bar",categoryKey:"language",verticalGridlines:!0,dataProvider:t});e.one("#chart_langs").setStyle("backgroundImage","none"),n.render("#chart_langs")}},M.report_overviewstats=M.report_overviewstats||{},M.report_overviewstats.charts=M.report_overviewstats.charts||{},M.report_overviewstats.charts.logins={init:function(t){var n=new e.Chart({type:"combo",dataProvider:t.perday,categoryKey:"date",horizontalGridlines:!0,verticalGridlines:!0,styles:{axes:{date:{label:{rotation:-90}}}}});e.one("#chart_logins_perday").setStyle("backgroundImage","none"),n.render("#chart_logins_perday")}}},"@VERSION@",{requires:["base","node","charts","charts-legend"]});
