<?php
/**
 * The gradebook overview report
 *
 * @package   mycourse_gradereport
 * @copyright 2013 elaine Connault
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once '../config.php';
require_once $CFG->libdir.'/gradelib.php';
require_once $CFG->dirroot.'/grade/lib.php';
require_once($CFG->dirroot . '/grade/report/lib.php'); 
require_once $CFG->dirroot.'/grade/report/overview/lib.php';
$userid   = optional_param('userid', $USER->id, PARAM_INT);

//$PAGE->set_url(new moodle_url('/user/myallcoursegrade.php', array('id'=>SITEID)));
/// basic access checks
if (!$course = $DB->get_record('course', array('id' => SITEID))) {
    print_error('nocourseid');
}
require_login();

$context = context_course::instance($course->id);
$PAGE->set_context($context);  
$systemcontext = context_system::instance();
//require_capability('gradereport/overview:view', $context);

if (empty($userid)) {
    require_capability('moodle/grade:viewall', $systemcontext);

} else {
    if (!$DB->get_record('user', array('id'=>$userid, 'deleted'=>0)) or isguestuser($userid)) {
        print_error('invaliduserid');
    }
}

$url = new moodle_url('/user/myallcoursegrade.php?id='.SITEID);      
$PAGE->set_url($url);
//$PAGE->set_pagetype('site-index');
//$PAGE->set_docs_path('');
$PAGE->set_pagelayout('standard');  //elaine add /theme/essential/layout/mycourses.php for no navbar
$PAGE->set_title(get_string('pluginname', 'gradereport_overview'));
$PAGE->set_heading(get_string('pluginname', 'gradereport_overview').'-'.$USER->firstname.''.$USER->lastname);
//$courserenderer = $PAGE->get_renderer('core', 'course');
echo $OUTPUT->header();
$enrol_cos = enrol_get_users_courses($userid, false, 'id, shortname, showgrades');    

$coursenametitle  = get_string('coursename', 'grades');
$gradetitle  = get_string('grade', 'grades'); 
$certtitle  = get_string('mycertificates', 'certificate'); 

$table = new html_table();
$table->attributes['class'] = 'generaltable '.$USER->id;
$table->head  = array ($coursenametitle, $gradetitle ,$certtitle);
$table->align = array ('left', 'right', 'right');
foreach($enrol_cos as $cos){
    $coursecontext = context_course::instance($cos->id);
    
    $courselink = html_writer::link(new moodle_url('/grade/report/user/index.php', array('id' => $course->id, 'userid' => $USER->id)), $cos->fullname);
    $canviewhidden = has_capability('moodle/grade:viewhidden', $coursecontext);

    // Get course grade_item
    $course_item = grade_item::fetch_course_item($cos->id);

    $now=time();
    $finalgrade='';
    if($cos->enddate <= time()){    
        // Get the stored grade
        $course_grade = new grade_grade(array('itemid'=>$course_item->id, 'userid'=>$USER->id));
        $course_grade->grade_item =& $course_item;
        $finalgrade = $course_grade->finalgrade;
        
        if (!$canviewhidden and !is_null($finalgrade)) {
            if ($course_grade->is_hidden() || $course->garde_publishdate > $now) {  //課程結束後才公佈成績
                $finalgrade = null;
            } else {
                //$finalgrade = blank_hidden_total($course->id, $course_item, $finalgrade);
                $finalgrade = (int)$finalgrade;
            }
        }
    }
    
    //$cert = $DB->get_record('certificate', array('course' => $cos->id));
    
$sql = "SELECT cm.*, m.name, md.name AS modname
        FROM mdl_course_modules cm
        JOIN mdl_modules md ON md.id = cm.module
        JOIN mdl_certificate m ON m.id = cm.instance
        WHERE md.name = 'certificate'
        and m.course = :courseid LIMIT 1";   
        $params['courseid']  = $cos->id;
        $certs = $DB->get_records_sql($sql, $params, 0, '');
        foreach ($certs as $cert) {
            $cert_id = $cert->id;
        } 
    $gradeset="";  

    $grades = $DB->get_records('course_completion_criteria',
            array('course' => $cos->id,
                  'criteriatype' => '6',));  
    foreach ($grades as $grade) {
        $gradeset = $grade->gradepass;
    }
    $sesskey=sesskey();  
                                                                                             //&& ($course->garde_publishdate != NULL)
    if(($finalgrade >= (int)$gradeset) && $gradeset!="" && $course->garde_publishdate <= time()  ){  
        //$certificate = "<a href=\"$CFG->wwwroot/mod/certificate/view.php?id=$cert_id&action=get&sesskey=$sesskey \">".get_string('getcertificate','certificate')."</a>";
        $certificate = "<a href=\"$CFG->wwwroot/user/mycoursecertlog.php?id=$cos->id&sesskey=$sesskey \">".get_string('getcertificate','certificate')."</a>";
    }else{
        $certificate = "";
        //$certificate = "<a href=\"$CFG->wwwroot/user/mycoursecertlog.php?id=$cos->id&sesskey=$sesskey \">".get_string('getcertificate','certificate')."</a>";
    }
    
    $table->data[] = array ($cos->fullname,$finalgrade,$certificate);
}
echo html_writer::table($table);  
/*
    $report = new grade_report_overview($userid, $gpr, $context);

    // print the page
    print_grade_page_head($course->id, 'report', 'overview', get_string('pluginname', 'gradereport_overview'). ' - '.fullname($report->user));

    if ($report->fill_table()) {
        echo '<br />'.$report->print_table(true);
    }
*/

echo $OUTPUT->footer();


