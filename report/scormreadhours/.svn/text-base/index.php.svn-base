<?php 
/**
 * Strings for component 'report_cscormreadhours'.
 *
 * @package    report
 * @pluginname scormreadhours
 * @copyright  2014 Click-ap jack liou,elaine chen
 * @license    http:/www.click-ap.com version 2.2
 */
    require_once('../../config.php');
    require_once("lib.php");

    $id = required_param('id', PARAM_INT);   // course id

    if (!empty($id)) {
        if (! $course = $DB->get_record("course", array('id' => $id), '*', MUST_EXIST)) {
            error("Course ID is incorrect");
        }
    } else {
        error('A required parameter is missing');
    }
    
    $params = array();
    if ($id !== 0) {
        $params['id'] = $id;
    }
    
    $PAGE->set_url('/report/scormreadhours/index.php', $params);
    $PAGE->set_pagelayout('report');
    require_course_login($course);
    add_to_log($course->id, "scorm", "report view all SCORM", "report/scormreadhours/index.php?id=$course->id", $course->id);
    
    $context = context_course::instance($course->id); 
    require_capability('report/scormreadhours:view', $context);
    
    $pluginname = get_string('pluginname', 'report_scormreadhours');
    $PAGE->set_title($course->shortname .': '. $pluginname);
    $PAGE->set_heading($course->fullname);
    echo $OUTPUT->header();
    echo $OUTPUT->heading($pluginname);
    //groups_print_course_menu($course, 'index.php?id=' . $course->id);
    //admin_externalpage_setup('reportscormreadhours');
    $strscorm = get_string("modulename", "scorm");
    $strscorms = get_string("modulenameplural", "scorm");
    $strweek = get_string("week");
    $strtopic = get_string("topic");
    $strname = get_string("name");
    $strsummary = get_string("summary");
    $strreport = get_string("report",'scorm');
    $strlastmodified = get_string("lastmodified");

    if ($course->format == "weeks" or $course->format == "topics") {
        $sortorder = "cw.section ASC";
    } else {
        $sortorder = "m.timemodified DESC";
    }

    if (! $scorms = get_all_instances_in_course("scorm", $course)) {
        notice(get_string('thereareno', 'moodle', $strscorms), "../../course/view.php?id=$course->id");
        exit;
    }
    $table = new html_table();
    $table->width = '100%';
    
    if ($course->format == "weeks") {
        $table->head  = array ($strweek, $strname, $strsummary, $strreport);
        $table->align = array ("center", "left", "left", "left");
    } else if ($course->format == "topics") {
        $table->head  = array ($strtopic, $strname, $strsummary, $strreport);
        $table->align = array ("center", "left", "left", "left");
    } else {
        $table->head  = array ($strlastmodified, $strname, $strsummary, $strreport);
        $table->align = array ("left", "left", "left", "left");
    }

    foreach ($scorms as $scorm) {

        $context = context_module::instance($scorm->coursemodule);
        $tt = "";
        if ($course->format == "weeks" or $course->format == "topics") {
            if ($scorm->section) {
                $tt = "$scorm->section";
            }
        } else {
            $tt = userdate($scorm->timemodified);
        }
        $report = '&nbsp;';
        $reportshow = '&nbsp;';
        if (has_capability('mod/scorm:viewreport', $context)) {
            /*計算已閱讀人數*/
            $trackedusers = scormreadhours_get_count_users($scorm->id, $scorm->groupingid);
            if ($trackedusers > 0) {
                $reportshow = '<a href="report.php?id='.$scorm->coursemodule.'">'.get_string('viewallreports','scorm',$trackedusers).'</a><br />';
                $reportshow .= '<a href="download.php?id='.$scorm->coursemodule.'&logformat=downloadasexcel">'.get_string('downloadreport','report_scormreadhours').'</a></div>';
            } else {
                $reportshow = get_string('noreports','scorm');
            }
        } else if (has_capability('mod/scorm:viewscores', $context)) {
            require_once('locallib.php');
            $report = scorm_grade_user($scorm, $USER->id);
            $reportshow = get_string('score','scorm').": ".$report;
        }
        if (!$scorm->visible) {
           //Show dimmed if the mod is hidden
           $table->data[] = array ($tt, "<a class=\"dimmed\" href=\"../../mod/scorm/view.php?id=$scorm->coursemodule\">".format_string($scorm->name)."</a>",
                                   format_text($scorm->intro), $reportshow);
        } else {
           //Show normal if the mod is visible
           $table->data[] = array ($tt, "<a href=\"../../mod/scorm/view.php?id=$scorm->coursemodule\">".format_string($scorm->name)."</a>",
                                   format_text($scorm->intro), $reportshow);
        }
    }

    //echo "<br />";
    echo html_writer::table($table);
    echo $OUTPUT->footer();

?>
