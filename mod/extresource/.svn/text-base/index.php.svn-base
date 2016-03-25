<?php
/**
 * Extend Resource module version information
 *
 * @package    mod
 * @subpackage extresource
 * @copyright  2014 Click-AP  {@link http://www.click-ap.com}
 * @license    http://www.click-ap.com GNU GPL v1 or later
 */
require('../../config.php');

$id = required_param('id', PARAM_INT); // course id

$course = $DB->get_record('course', array('id'=>$id), '*', MUST_EXIST);

require_course_login($course, true);
$PAGE->set_pagelayout('incourse');

add_to_log($course->id, 'extresource', 'view all', "index.php?id=$course->id", '');

$strresource     = get_string('modulename', 'extresource');
$strresources    = get_string('modulenameplural', 'extresource');
$strsectionname  = get_string('sectionname', 'format_'.$course->format);
$strname         = get_string('name');
$strintro        = get_string('moduleintro');
$strlastmodified = get_string('lastmodified');

$PAGE->set_url('/mod/extresource/index.php', array('id' => $course->id));
$PAGE->set_title($course->shortname.': '.$strresources);
$PAGE->set_heading($course->fullname);
$PAGE->navbar->add($strresources);
echo $OUTPUT->header();

if (!$resources = get_all_instances_in_course('extresource', $course)) {
    notice(get_string('thereareno', 'moodle', $strresources), "$CFG->wwwroot/course/view.php?id=$course->id");
    exit;
}

$usesections = course_format_uses_sections($course->format);

$table = new html_table();
$table->attributes['class'] = 'generaltable mod_index';

if ($usesections) {
    $table->head  = array ($strsectionname, $strname, $strintro);
    $table->align = array ('center', 'left', 'left');
} else {
    $table->head  = array ($strlastmodified, $strname, $strintro);
    $table->align = array ('left', 'left', 'left');
}

$modinfo = get_fast_modinfo($course);
$currentsection = '';
foreach ($resources as $resource) {
    $cm = $modinfo->cms[$resource->coursemodule];
    if ($usesections) {
        $printsection = '';
        if ($resource->section !== $currentsection) {
            if ($resource->section) {
                $printsection = get_section_name($course, $resource->section);
            }
            if ($currentsection !== '') {
                $table->data[] = 'hr';
            }
            $currentsection = $resource->section;
        }
    } else {
        $printsection = '<span class="smallinfo">'.userdate($resource->timemodified)."</span>";
    }

    $extra = empty($cm->extra) ? '' : $cm->extra;
    $icon = '';
    if (!empty($cm->icon)) {
        // each resource file has an icon in 2.0
        $icon = '<img src="'.$OUTPUT->pix_url($cm->icon).'" class="activityicon" alt="'.get_string('modulename', $cm->modname).'" /> ';
    }

    $class = $resource->visible ? '' : 'class="dimmed"'; // hidden modules are dimmed
    $table->data[] = array (
        $printsection,
        "<a $class $extra href=\"view.php?id=$cm->id\">".$icon.format_string($resource->name)."</a>",
        format_module_intro('resource', $resource, $cm->id));
}

echo html_writer::table($table);

echo $OUTPUT->footer();
