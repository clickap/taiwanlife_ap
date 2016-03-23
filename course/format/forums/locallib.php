<?php

defined('MOODLE_INTERNAL') || die();
//require_once($CFG->dirroot.'/course/lib.php');

/**
 * Retrieve all metadata for the requested modules
 *
 * @param object $course The Course
 * @param array $modnames An array containing the list of modules and their
 * names
 * @param int $sectionreturn The section to return to
 * @return array A list of stdClass objects containing metadata about each
 * module
 */
function format_forums_get_module_metadata($course, $modnames, $sectionreturn = null) {
    global $CFG, $OUTPUT;
    // get_module_metadata will be called once per section on the page and courses may show
    // different modules to one another
    static $modlist = array();
    if (!isset($modlist[$course->id])) {
        $modlist[$course->id] = array();
    }

    $return = array();
    // check where come from url
    $config = get_config('format_forums');
    $courseviewbase = $config->controlviewpath;
    if(!$courseviewbase){ 
      $urlbase = new moodle_url('/course/mod.php', array('id' => $course->id, 'sesskey' => sesskey()));
    }
    else{
      $urlbase = new moodle_url($courseviewbase . '/mod.php', array('id' => $course->id, 'sesskey' => sesskey()));
    }
    if ($sectionreturn !== null) {
        $urlbase->param('sr', $sectionreturn);
    }
    foreach($modnames as $modname => $modnamestr) {
        if (!course_allowed_module($course, $modname)) {
            continue;
        }
        if (isset($modlist[$course->id][$modname])) {
            // This module is already cached
            $return[$modname] = $modlist[$course->id][$modname];
            continue;
        }

        // Include the module lib
        $libfile = "$CFG->dirroot/mod/$modname/lib.php";
        if (!file_exists($libfile)) {
            continue;
        }
        include_once($libfile);

        // NOTE: this is legacy stuff, module subtypes are very strongly discouraged!!
        
            $module = new stdClass();
            $module->title = $modnamestr;
            $module->name = $modname;
            $module->link = new moodle_url($urlbase, array('add' => $modname));
            $module->icon = $OUTPUT->pix_icon('icon', '', $module->name, array('class' => 'icon'));
            $sm = get_string_manager();
            if ($sm->string_exists('modulename_help', $modname)) {
                $module->help = get_string('modulename_help', $modname);
                if ($sm->string_exists('modulename_link', $modname)) {  // Link to further info in Moodle docs
                    $link = get_string('modulename_link', $modname);
                    $linktext = get_string('morehelp');
                    $module->help .= html_writer::tag('div', $OUTPUT->doc_link($link, $linktext, true), array('class' => 'helpdoclink'));
                }
            }
            $module->archetype = plugin_supports('mod', $modname, FEATURE_MOD_ARCHETYPE, MOD_ARCHETYPE_OTHER);
            $modlist[$course->id][$modname] = $module;
        
        if (isset($modlist[$course->id][$modname])) {
            $return[$modname] = $modlist[$course->id][$modname];
        } else {
            debugging("Invalid module metadata configuration for {$modname}");
        }
    }

    return $return;
}