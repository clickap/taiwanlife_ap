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
 * Editing badge details, criteria, messages
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

$badgeid = required_param('id', PARAM_INT);
$action = optional_param('action', 'details', PARAM_TEXT);

require_login();

if (empty($CFG->enablebadges)) {
    print_error('badgesdisabled', 'badges');
}

$badge = new badge($badgeid);
$context = $badge->get_context();
$navurl = new moodle_url('/badges/index.php', array('type' => $badge->type));

if ($action == 'message') {
    require_capability('moodle/badges:configuremessages', $context);
} else {
    require_capability('moodle/badges:configuredetails', $context);
}

if ($badge->type == BADGE_TYPE_COURSE) {
    if (empty($CFG->badges_allowcoursebadges)) {
        print_error('coursebadgesdisabled', 'badges');
    }
    require_login($badge->courseid);
    $navurl = new moodle_url('/badges/index.php', array('type' => $badge->type, 'id' => $badge->courseid));
}

$currenturl = new moodle_url('/badges/edit.php', array('id' => $badge->id, 'action' => $action));

$PAGE->set_context($context);
$PAGE->set_url($currenturl);
$PAGE->set_pagelayout('standard');
$PAGE->set_heading($badge->name);
$PAGE->set_title($badge->name);

// Set up navigation and breadcrumbs.
navigation_node::override_active_url($navurl);
$PAGE->navbar->add($badge->name);

$output = $PAGE->get_renderer('core', 'badges');
$statusmsg = '';
$errormsg  = '';

$badge->message = clean_text($badge->message, FORMAT_HTML);
$editoroptions = array(
        'subdirs' => 0,
        'maxbytes' => 0,
        'maxfiles' => 0,
        'changeformat' => 0,
        'context' => $context,
        'noclean' => false,
        'trusttext' => false
        );
$badge = file_prepare_standard_editor($badge, 'message', $editoroptions, $context);
/*elaine:badge擴充欄位*/  
$badgeoptions = array('maxfiles' => EDITOR_UNLIMITED_FILES, 'maxbytes'=>$CFG->maxbytes, 'trusttext'=>false, 'noclean'=>true);
$badgeoptions['context'] = $context;       
$badge = file_prepare_standard_editor($badge, 'summary', $badgeoptions, $context, 'badges', 'summary', $badgeid);     
$badge = file_prepare_standard_editor($badge, 'teacher', $badgeoptions, $context, 'badges', 'teacher', $badgeid);   
$badge = file_prepare_standard_editor($badge, 'learnmap', $badgeoptions, $context, 'badges', 'learnmap', $badgeid);   
$badge = file_prepare_standard_editor($badge, 'content', $badgeoptions, $context, 'badges', 'content', $badgeid);   
$badge = file_prepare_standard_editor($badge, 'ability', $badgeoptions, $context, 'badges', 'ability', $badgeid);   
$badge = file_prepare_standard_editor($badge, 'qna', $badgeoptions, $context, 'badges', 'qna', $badgeid);        
$badge = file_prepare_standard_editor($badge, 'memo', $badgeoptions, $context, 'badges', 'memo', $badgeid);      
/**/
$form_class = 'edit_' . $action . '_form'; 
/*elaine:add badgeoptions*/  
//$form = new $form_class($currenturl, array('badge' => $badge, 'action' => $action, 'editoroptions' => $editoroptions));
$form = new $form_class($currenturl, array('badge' => $badge, 'action' => $action, 'editoroptions' => $editoroptions, 'badgeoptions'=>$badgeoptions));  

if ($form->is_cancelled()) {
    redirect(new moodle_url('/badges/overview.php', array('id' => $badgeid)));
} else if ($form->is_submitted() && $form->is_validated() && ($data = $form->get_data())) {
    if ($action == 'details') {
        /*elaine:badge擴充欄位*/
        $data = file_postupdate_standard_editor($data, 'summary', $badgeoptions, $context, 'badges', 'summary', $badgeid);  
        $data = file_postupdate_standard_editor($data, 'teacher', $badgeoptions, $context, 'badges', 'teacher', $badgeid);   
        $data = file_postupdate_standard_editor($data, 'learnmap', $badgeoptions, $context, 'badges', 'learnmap', $badgeid);   
        $data = file_postupdate_standard_editor($data, 'content', $badgeoptions, $context, 'badges', 'content', $badgeid);   
        $data = file_postupdate_standard_editor($data, 'ability', $badgeoptions, $context, 'badges', 'ability', $badgeid);   
        $data = file_postupdate_standard_editor($data, 'qna', $badgeoptions, $context, 'badges', 'qna', $badgeid);        
        $data = file_postupdate_standard_editor($data, 'memo', $badgeoptions, $context, 'badges', 'memo', $badgeid);     

        unset($badge->summary_editor);
        unset($badge->teacher_editor);
        unset($badge->learnmap_editor);
        unset($badge->content_editor);
        unset($badge->ability_editor);
        unset($badge->qna_editor);
        unset($badge->memo_editor);
        /**/
        $badge->name = $data->name;
        $badge->institution_id=$data->institution;
        $badge->description = $data->description;
        $badge->usermodified = $USER->id;
        $badge->issuername = $data->issuername;
        $badge->issuerurl = $data->issuerurl;
        $badge->issuercontact = $data->issuercontact;
        $badge->expiredate = ($data->expiry == 1) ? $data->expiredate : null;
        $badge->expireperiod = ($data->expiry == 2) ? $data->expireperiod : null;
        /*elaine:badge 擴充欄位*/ 
        $badge->summary = $data->summary;
        $badge->teacher = $data->teacher;
        $badge->learnmap = $data->learnmap;
        $badge->content = $data->content;
        $badge->ability = $data->ability;
        $badge->qna = $data->qna;
        $badge->memo = $data->memo;
        /**/
        // Need to unset message_editor options to avoid errors on form edit.
        unset($badge->messageformat);
        unset($badge->message_editor);

        if ($badge->save()) {
            badges_process_badge_image($badge, $form->save_temp_file('image'));
            $form->set_data($badge);
            $statusmsg = get_string('changessaved');
        } else {
            $errormsg = get_string('error:save', 'badges');
        }
    } else if ($action == 'message') {
        // Calculate next message cron if form data is different from original badge data.
        if ($data->notification != $badge->notification) {
            if ($data->notification > BADGE_MESSAGE_ALWAYS) {
                $badge->nextcron = badges_calculate_message_schedule($data->notification);
            } else {
                $badge->nextcron = null;
            }
        }

        $badge->message = clean_text($data->message_editor['text'], FORMAT_HTML);
        $badge->messagesubject = $data->messagesubject;
        $badge->notification = $data->notification;
        $badge->attachment = $data->attachment;

        unset($badge->messageformat);
        unset($badge->message_editor);
        if ($badge->save()) {
            $statusmsg = get_string('changessaved');
        } else {
            $errormsg = get_string('error:save', 'badges');
        }
    }
}

echo $OUTPUT->header();
echo $OUTPUT->heading(print_badge_image($badge, $context, 'small') . ' ' . $badge->name);

if ($errormsg !== '') {
    echo $OUTPUT->notification($errormsg);

} else if ($statusmsg !== '') {
    echo $OUTPUT->notification($statusmsg, 'notifysuccess');
}

echo $output->print_badge_status_box($badge);
$output->print_badge_tabs($badgeid, $context, $action);

$form->display();

echo $OUTPUT->footer();