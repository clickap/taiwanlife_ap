<?php

/**
 * Topics course format.  Display the whole course as "resources" made of modules.
 *
 * @package format_resources
 * @copyright 2006 The Open University
 * @author N.D.Freear@open.ac.uk, and others.
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/filelib.php');
require_once($CFG->libdir.'/completionlib.php');

// Horrible backwards compatible parameter aliasing..
if ($topic = optional_param('topic', 0, PARAM_INT)) {
    $url = $PAGE->url;
    $url->param('section', $topic);
    debugging('Outdated topic param passed to course/view.php', DEBUG_DEVELOPER);
    redirect($url);
}
// End backwards-compatible aliasing..

$context = context_course::instance($course->id);

if (($marker >=0) && has_capability('moodle/course:setcurrentsection', $context) && confirm_sesskey()) {
    $course->marker = $marker;
    course_set_marker($course->id, $marker);
}

// make sure all sections are created
$course = course_get_format($course)->get_course();
course_create_sections_if_missing($course, range(0, $course->numsections));

$renderer = $PAGE->get_renderer('format_surveys');

//if (!empty($displaysection)) {
//    $renderer->print_single_section_page($course, null, null, null, null, $displaysection);
//} else {
//    $renderer->print_multiple_section_page($course, null, null, null, null);
//}
$renderer->print_multiple_section_page($course, null, null, null, null);

// Include course format js module
$PAGE->requires->js('/course/format/surveys/format.js');
