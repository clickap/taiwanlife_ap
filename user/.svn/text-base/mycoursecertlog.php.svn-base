<?php
/**
 * The mycoursecert log
 *
 * @package   mycourse_cert log
 * @copyright 2013 elaine Connault
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
                  //  mycoursecertlog
require_once '../config.php';
require_once $CFG->libdir.'/gradelib.php';
require_once $CFG->dirroot.'/grade/lib.php';
require_once($CFG->dirroot . '/grade/report/lib.php'); 
require_once $CFG->dirroot.'/grade/report/overview/lib.php';

$id       = optional_param('id', SITEID, PARAM_INT);  
$userid   = optional_param('userid', $USER->id, PARAM_INT);

//$PAGE->set_url(new moodle_url('/user/myallcoursegrade.php', array('id'=>SITEID)));
/// basic access checks
if(!confirm_sesskey()){
    print_error('no......');
}


if (!$course = $DB->get_record('course', array('id' =>$id))) {
    print_error('nocourseid');
}
require_login();


$context = context_course::instance($course->id);
$PAGE->set_context($context);  
$systemcontext = context_system::instance();


if (empty($userid)) {
    require_capability('moodle/grade:viewall', $systemcontext);
} else {
    if (!$DB->get_record('user', array('id'=>$userid, 'deleted'=>0)) or isguestuser($userid)) {
        print_error('invaliduserid');
    }
}

$url = new moodle_url('/user/mycoursecertlog.php?id='.$id);      
$PAGE->set_url($url);
$PAGE->set_pagelayout('standard');  //elaine add /theme/essential/layout/mycourses.php for no navbar
$PAGE->set_title(get_string('mycertificates', 'certificate'));
$PAGE->set_heading(get_string('mycertificates', 'certificate').'-'.$USER->firstname.''.$USER->lastname);

echo $OUTPUT->header();
$coursenametitle  = get_string('coursename', 'grades');
$certdate  = get_string('datehelp', 'certificate'); 

$table = new html_table();
$table->attributes['class'] = 'generaltable '.$USER->id.'_cos_'.$id;
$table->head  = array ($coursenametitle, $certdate);
$table->align = array ('left', 'right');


$canviewhidden = has_capability('moodle/grade:viewhidden', $context);
// Get course grade_item
$course_item = grade_item::fetch_course_item($course->id);
// Get the stored grade
$course_grade = new grade_grade(array('itemid'=>$course_item->id, 'userid'=>$USER->id));
$course_grade->grade_item =& $course_item;
$finalgrade = $course_grade->finalgrade;

if (!$canviewhidden and !is_null($finalgrade)) {
    if ($course_grade->is_hidden() || $course->enddate > time()) {  //課程結束後才公佈成績
        $finalgrade = null;
    } else {
        //$finalgrade = blank_hidden_total($course->id, $course_item, $finalgrade);
        $finalgrade = (int)$finalgrade;
    }
}
$gradeset="";
$grades = $DB->get_records('course_completion_criteria',
                array('course' => $course->id,
               'criteriatype' => '6',));
foreach ($grades as $grade) {
    $gradeset = $grade->gradepass;
}

$sql = "SELECT cm.*, m.name, md.name AS modname
        FROM mdl_course_modules cm
        JOIN mdl_modules md ON md.id = cm.module
        JOIN mdl_certificate m ON m.id = cm.instance
        WHERE md.name = 'certificate'
        and m.course = :courseid LIMIT 1";   
        $params['courseid']  = $course->id;
        $certs = $DB->get_records_sql($sql, $params, 0, '');
        $cert_id="";
        foreach ($certs as $cert) {
            $cert_id = $cert->id;
        } 
 
$sesskey=sesskey();                                  
if(($finalgrade >= (int)$gradeset) && $gradeset!=""){
    $url =$CFG->wwwroot.'/user/edit.php';
    echo html_writer::start_tag('div', array('style'=>'text-align:right'));
    echo $OUTPUT->container_start('buttons');
    echo $OUTPUT->single_button(new moodle_url($url, array('sesskey' => $sesskey,'cert' => $cert_id,'cos_id' =>$id)), get_string('applycert', 'certificate'), 'get');
    echo $OUTPUT->container_end();
    echo html_writer::end_tag('div');
}



$certlog = $DB->get_records('log',
            array('course' => $course->id,
                  'module' => 'certificate',
                  'action' => 'download',
                  'userid' => $USER->id,
                  'cmid' => $cert_id));
foreach($certlog as $log){
    $downloadtime = strftime('%Y/%m/%d %H:%M:%S', $log->time);   
    $table->data[] = array ($course->fullname,$downloadtime);
}
echo html_writer::table($table);  
   
echo $OUTPUT->footer();


