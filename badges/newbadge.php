<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * First step page for creating a new badge
 *
 * @package    core
 * @subpackage badges
 * @copyright  2012 onwards Totara Learning Solutions Ltd {@link http://www.totaralms.com/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Yuliya Bozhko <yuliya.bozhko@totaralms.com>
 */

require_once(dirname(dirname(__FILE__)) . '/config.php');
require_once($CFG->libdir . '/badgeslib.php');
require_once($CFG->dirroot . '/badges/edit_form.php');

$type = required_param('type', PARAM_INT);
$courseid = optional_param('id', 0, PARAM_INT);

require_login();

if (empty($CFG->enablebadges)) {
    print_error('badgesdisabled', 'badges');
}

if (empty($CFG->badges_allowcoursebadges) && ($type == BADGE_TYPE_COURSE)) {
    print_error('coursebadgesdisabled', 'badges');
}

$title = get_string('create', 'badges');

if (($type == BADGE_TYPE_COURSE) && ($course = $DB->get_record('course', array('id' => $courseid)))) {
    require_login($course);
    $coursecontext = context_course::instance($course->id);
    $PAGE->set_context($coursecontext);
    $PAGE->set_pagelayout('course');
    $PAGE->set_url('/badges/newbadge.php', array('type' => $type, 'id' => $course->id));
    $heading = format_string($course->fullname, true, array('context' => $coursecontext)) . ": " . $title;
    $PAGE->set_heading($heading);
    $PAGE->set_title($heading);
} else {
    $PAGE->set_context(context_system::instance());
    $PAGE->set_pagelayout('admin');
    $PAGE->set_url('/badges/newbadge.php', array('type' => $type));
    $PAGE->set_heading($title);
    $PAGE->set_title($title);
}

require_capability('moodle/badges:createbadge', $PAGE->context);

$PAGE->requires->js('/badges/backpack.js');
$PAGE->requires->js_init_call('check_site_access', null, false);
/*elaine:badge 擴充欄位*/    
$badgeoptions = array('maxfiles' => EDITOR_UNLIMITED_FILES, 'maxbytes'=>$CFG->maxbytes, 'trusttext'=>false, 'noclean'=>true);

$fordb = new stdClass();
$fordb->id = null;

/*elaine:badge 擴充badgeoptions*/  
//$form = new edit_details_form($PAGE->url, array('action' => 'new'));     
$form = new edit_details_form($PAGE->url, array('action' => 'new', 'badgeoptions'=>$badgeoptions));     

if ($form->is_cancelled()) {
    redirect(new moodle_url('/badges/index.php', array('type' => $type, 'id' => $courseid)));
} else if ($data = $form->get_data()) {
    // Creating new badge here.
    $now = time();

    $fordb->name = $data->name;
    $fordb->institution_id=$data->institution;
    $fordb->description = $data->description;
    $fordb->timecreated = $now;
    $fordb->timemodified = $now;
    $fordb->usercreated = $USER->id;
    $fordb->usermodified = $USER->id;
    $fordb->image = 0;
    $fordb->issuername = $data->issuername;
    $fordb->issuerurl = $data->issuerurl;
    $fordb->issuercontact = $data->issuercontact;
    $fordb->expiredate = ($data->expiry == 1) ? $data->expiredate : null;
    $fordb->expireperiod = ($data->expiry == 2) ? $data->expireperiod : null;
    $fordb->type = $type;
    $fordb->courseid = ($type == BADGE_TYPE_COURSE) ? $courseid : null;
    $fordb->messagesubject = get_string('messagesubject', 'badges');
    $fordb->message = get_string('messagebody', 'badges',
            html_writer::link($CFG->wwwroot . '/badges/mybadges.php', get_string('mybadges', 'badges')));
    $fordb->attachment = 1;
    $fordb->notification = BADGE_MESSAGE_NEVER;
    $fordb->status = BADGE_STATUS_INACTIVE;

    $newid = $DB->insert_record('badge', $fordb, true);

    $newbadge = new badge($newid);
    
    /*elaine:badge 擴充欄位*/    
    $badgecontext = $newbadge->get_context();
    if ($badgeoptions) {
        $badgeoptions['context'] = $badgecontext;    
        $data = file_postupdate_standard_editor($data, 'summary', $badgeoptions, $badgecontext, 'badges', 'summary', $newid);       
        $data = file_postupdate_standard_editor($data, 'teacher', $badgeoptions, $badgecontext, 'badges', 'teacher', $newid);
        $data = file_postupdate_standard_editor($data, 'learnmap', $badgeoptions, $badgecontext, 'badges', 'learnmap', $newid);
        $data = file_postupdate_standard_editor($data, 'content', $badgeoptions, $badgecontext, 'badges', 'content', $newid);
        $data = file_postupdate_standard_editor($data, 'ability', $badgeoptions, $badgecontext, 'badges', 'ability', $newid);
        $data = file_postupdate_standard_editor($data, 'qna', $badgeoptions, $badgecontext, 'badges', 'qna', $newid);
        $data = file_postupdate_standard_editor($data, 'memo', $badgeoptions, $badgecontext, 'badges', 'memo', $newid);
    }          
    
    badges_process_badge_image($newbadge, $form->save_temp_file('image'));
       
    $DB->set_field('badge', 'summary', $data->summary, array('id'=>$newid));
        $DB->set_field('badge', 'summaryformat', 1, array('id'=>$newid));
    $DB->set_field('badge', 'teacher', $data->teacher, array('id'=>$newid));
        $DB->set_field('badge', 'teacherformat', 1, array('id'=>$newid));
    $DB->set_field('badge', 'learnmap', $data->learnmap, array('id'=>$newid));
        $DB->set_field('badge', 'learnmapformat', 1, array('id'=>$newid));
    $DB->set_field('badge', 'content', $data->content, array('id'=>$newid));
        $DB->set_field('badge', 'contentformat', 1, array('id'=>$newid));
    $DB->set_field('badge', 'ability', $data->ability, array('id'=>$newid));
        $DB->set_field('badge', 'abilityformat', 1, array('id'=>$newid));
    $DB->set_field('badge', 'qna', $data->qna, array('id'=>$newid));
        $DB->set_field('badge', 'qnaformat', 1, array('id'=>$newid));
    $DB->set_field('badge', 'memo', $data->memo, array('id'=>$newid));
        $DB->set_field('badge', 'memoformat', 1, array('id'=>$newid));
    /**/   
    // If a user can configure badge criteria, they will be redirected to the criteria page.
    if (has_capability('moodle/badges:configurecriteria', $PAGE->context)) {
        redirect(new moodle_url('/badges/criteria.php', array('id' => $newid)));
    }
    redirect(new moodle_url('/badges/overview.php', array('id' => $newid)));
}

echo $OUTPUT->header();
echo $OUTPUT->box('', 'notifyproblem hide', 'check_connection');

$form->display();

echo $OUTPUT->footer();