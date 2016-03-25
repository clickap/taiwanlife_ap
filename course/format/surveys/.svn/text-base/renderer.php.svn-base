<?php

/**
 * Renderer for outputting the surveys course format.
 *
 * @package format_surveys
 * @copyright 2012 Dan Poltawski
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since Moodle 2.3
 */


defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot.'/course/format/renderer.php');
require_once($CFG->dirroot.'/course/format/surveys/locallib.php');

/**
 * Basic renderer for surveys format.
 *
 * @copyright 2012 Dan Poltawski
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class format_surveys_renderer extends format_section_renderer_base {
    
    /** @var core_course_renderer Stores instances of core_course_renderer */
    protected $courserenderer = null;

    /**
     * Constructor method, calls the parent constructor
     *
     * @param moodle_page $page
     * @param string $target one of rendering target constants
     */
    public function __construct(moodle_page $page, $target) {
        parent::__construct($page, $target);

        // Since format_surveys_renderer::section_edit_controls() only displays the 'Set current section' control when editing mode is on
        // we need to be sure that the link 'Turn editing mode on' is available for a user who does not have any other managing capability.
        $page->set_other_editing_capability('moodle/course:setcurrentsection');
        $this->courserenderer = $page->get_renderer('core', 'course');
    }

    /**
     * Generate the starting container html for a list of sections
     * @return string HTML to output.
     */
    protected function start_section_list() {
        return html_writer::start_tag('ul', array('class' => 'topics'));
    }

    /**
     * Generate the closing container html for a list of sections
     * @return string HTML to output.
     */
    protected function end_section_list() {
        return html_writer::end_tag('ul');
    }

    /**
     * Generate the title for this section page
     * @return string the page title
     */
    protected function page_title() {
        //return get_string('topicoutline');
        return get_string('pluginname', 'format_surveys');
    }

    /**
     * Generate the edit controls of a section
     *
     * @param stdClass $course The course entry from DB
     * @param stdClass $section The course_section entry from DB
     * @param bool $onsectionpage true if being printed on a section page
     * @return array of links with edit controls
     */
    protected function section_edit_controls2($course, $section, $onsectionpage = false) {
        global $PAGE;

        if (!$PAGE->user_is_editing()) {
            return array();
        }

        $coursecontext = context_course::instance($course->id);

        if ($onsectionpage) {
            $url = course_get_url($course, $section->section);
        } else {
            $url = course_get_url($course);
        }
        $url->param('sesskey', sesskey());

        $controls = array();
        // lightball->pix_url('i/marked') , remove , jk

        return array_merge($controls, parent::section_edit_controls($course, $section, $onsectionpage));
    }
    
    public function print_multiple_section_page($course, $sections, $mods, $modnames, $modnamesused) {
        global $PAGE,$DB;

        $modinfo = get_fast_modinfo($course);
        $course = course_get_format($course)->get_course();
        $context = context_course::instance($course->id);
        // allow survey types
        $config = get_config('format_surveys');
        $allowtypes = explode(',', $config->activitytypes);
        /// Title with completion help icon.

        //echo $this->output->heading($this->page_title(), 2, 'accesshide');
        echo $this->output->heading($this->page_title(), 2, '');

        // Copy activity clipboard..
        echo $this->course_activity_clipboard($course, 0);

        // Now the list of sections..
        echo $this->start_section_list();

        //elaine 
        $forumsection = $DB->get_records('course_sections',
                        array('course' => $course->id,
                              'section' => 91), '', '*');
        //foreach ($modinfo->get_section_info_all() as $section => $thissection) {
        foreach ($forumsection as $section => $thissection){
            $thissection->uservisible=true; 
            if ($section == 0) {
                // 0-section is displayed a little different then the others
                continue;
            }
            if ($section > $course->numsections) {
                // activities inside this section are 'orphaned', this section will be printed as 'stealth' below
                //continue;
            }
            // Show the section if the user is permitted to access it, OR if it's not available
            // but showavailability is turned on (and there is some available info text).
            $showsection = $thissection->uservisible ||
                    ($thissection->visible && !$thissection->available && $thissection->showavailability
                    && !empty($thissection->availableinfo));
            if (!$showsection) {
                // Hidden section message is overridden by 'unavailable' control
                // (showavailability option).
                //if (!$course->hiddensections && $thissection->available) {
                //    echo $this->section_hidden($section);
                //}
                //continue;
            }

            if (!$PAGE->user_is_editing() && $course->coursedisplay == COURSE_DISPLAY_MULTIPAGE) {
                // Display section summary only.
                //echo $this->section_summary($thissection, $course, null); // survey doesn't show summary, jk
            } else {
                echo $this->section_header($thissection, $course, false, 0);
                if ($thissection->uservisible) {
                    //echo $this->courserenderer->course_section_cm_list($course, $thissection, 0); // show survey
                    echo $this->local_section_cm_list($course, $thissection, $allowtypes, 0); // local show survey(only survey)
                    //echo $this->courserenderer->course_section_add_cm_control($course, $section, 0);
                    echo $this->local_section_add_cm_control($course, $section, $allowtypes, 0);
                }
                echo $this->section_footer();
            }
        } // end of foreach
        echo $this->end_section_list();
        
    }
    
    // jk
    protected function section_header($section, $course, $onsectionpage, $sectionreturn=null) {
        global $PAGE;

        $o = $currenttext = $sectionstyle = '';

        if ($section->section != 0) {
            // Only in the non-general sections.
            if (!$section->visible) {
                $sectionstyle = ' hidden';
            } else if (course_get_format($course)->is_section_current($section)) {
                $sectionstyle = ' current';
            }
        }

        $o.= html_writer::start_tag('li', array('id' => 'section-'.$section->section,
            'class' => 'section main clearfix'.$sectionstyle, 'role'=>'region',
            'aria-label'=> get_section_name($course, $section)));

        $leftcontent = $this->section_left_content($section, $course, $onsectionpage);
        $o.= html_writer::tag('div', $leftcontent, array('class' => 'left side'));

        $rightcontent = $this->section_right_content($section, $course, $onsectionpage);
        $o.= html_writer::tag('div', $rightcontent, array('class' => 'right side'));
        $o.= html_writer::start_tag('div', array('class' => 'content'));

        // When not on a section page, we display the section titles except the general section if null
        $hasnamenotsecpg = (!$onsectionpage && ($section->section != 0 || !is_null($section->name)));

        // When on a section page, we only display the general section title, if title is not the default one
        $hasnamesecpg = ($onsectionpage && ($section->section == 0 && !is_null($section->name)));

        if ($hasnamenotsecpg || $hasnamesecpg) {
            if($section->section <=52)
                $o.= $this->output->heading($this->section_title($section, $course), 3, 'sectionname');
            else
                $o.= $this->output->heading('', 3, 'sectionname');
        }

        $o.= html_writer::start_tag('div', array('class' => 'summary'));
        $o.= $this->format_summary_text($section);
        $context = context_course::instance($course->id);
        /// summary doesn't need, jk
        $o.= html_writer::end_tag('div');
        
        $o .= $this->section_availability_message($section,
                has_capability('moodle/course:viewhiddensections', $context));

        return $o;
    }
    
    // jk , ToDo: add restrict mod type
    private function local_section_cm_list($course, $section, $allowtypes, $sectionreturn = null, $displayoptions = array()) {
        global $USER;

        $output = '';
        $modinfo = get_fast_modinfo($course);
        if (is_object($section)) {
            $section = $modinfo->get_section_info($section->section);
        } else {
            $section = $modinfo->get_section_info($section);
        }
        $completioninfo = new completion_info($course);

        // check if we are currently in the process of moving a module with JavaScript disabled
        $ismoving = $this->page->user_is_editing() && ismoving($course->id);
        if ($ismoving) {
            $movingpix = new pix_icon('movehere', get_string('movehere'), 'moodle', array('class' => 'movetarget'));
            $strmovefull = strip_tags(get_string("movefull", "", "'$USER->activitycopyname'"));
        }

        // Get the list of modules visible to user (excluding the module being moved if there is one)
        $moduleshtml = array();
        if (!empty($modinfo->sections[$section->section])) {
            foreach ($modinfo->sections[$section->section] as $modnumber) {
                $mod = $modinfo->cms[$modnumber];

                if ($ismoving and $mod->id == $USER->activitycopy) {
                    // do not display moving mod
                    continue;
                }

                if(in_array($mod->modname, $allowtypes)){
                    //if ($modulehtml = $this->course_section_cm($course, $completioninfo, $mod, $sectionreturn, $displayoptions)) {
                    if ($modulehtml = $this->courserenderer->course_section_cm($course, $completioninfo, $mod, $sectionreturn, $displayoptions)) {
                        $moduleshtml[$modnumber] = $modulehtml;
                    }
                }
            }
        }

        if (!empty($moduleshtml) || $ismoving) {
            $output .= html_writer::start_tag('ul', array('class' => 'section img-text'));
            foreach ($moduleshtml as $modnumber => $modulehtml) {
                if ($ismoving) {
                    $movingurl = new moodle_url('/course/mod.php', array('moveto' => $modnumber, 'sesskey' => sesskey()));
                    $output .= html_writer::tag('li', html_writer::link($movingurl, $this->output->render($movingpix)),
                            array('class' => 'movehere', 'title' => $strmovefull));
                }

                $mod = $modinfo->cms[$modnumber];
                $modclasses = 'activity '. $mod->modname. ' modtype_'.$mod->modname. ' '. $mod->get_extra_classes();
                $output .= html_writer::start_tag('li', array('class' => $modclasses, 'id' => 'module-'. $mod->id));
                $output .= $modulehtml;
                $output .= html_writer::end_tag('li');
            }

            if ($ismoving) {
                $movingurl = new moodle_url('/course/mod.php', array('movetosection' => $section->id, 'sesskey' => sesskey()));
                $output .= html_writer::tag('li', html_writer::link($movingurl, $this->output->render($movingpix)),
                        array('class' => 'movehere', 'title' => $strmovefull));
            }

            $output .= html_writer::end_tag('ul'); // .section
        }

        return $output;
    }
    
    // jk
    private function local_section_add_cm_control($course, $section, $allowtypes, $sectionreturn = null, $displayoptions = array()) {
        global $CFG;
        //DebugBreak();
        $vertical = !empty($displayoptions['inblock']); // e.g. block_site_main_menu

        // check to see if user can add menus and there are modules to add
        if (!has_capability('moodle/course:manageactivities', context_course::instance($course->id))
                || !$this->page->user_is_editing()
                || !($modnames = get_module_types_names()) || empty($modnames)) {
            return '';
        }
        
        // Retrieve all modules with associated metadata, jk: retrieve module with survey
        /// $modules = get_module_metadata($course, $modnames, $sectionreturn); 
        $modules = format_surveys_get_module_metadata($course, $modnames, $sectionreturn); // change mod->link(from /course/mod.php => /blocks/xxx/mod.php)
        $urlparams = array('section' => $section);

        // We'll sort surveys and activities into two lists
        $activities = array(MOD_CLASS_ACTIVITY => array(), MOD_CLASS_RESOURCE => array());

        $newmodules = array();
        foreach ($modules as $module) {
                $activityclass = MOD_CLASS_ACTIVITY;
                //if ($module->archetype == MOD_ARCHETYPE_RESOURCE && in_array($module->name, $allowtypes)) {
                if (in_array($module->name, $allowtypes)) { 
                    $activityclass = MOD_CLASS_RESOURCE;
                    $link = $module->link->out(true, $urlparams);
                    $activities[$activityclass][$link] = $module->title;
                    $newmodules[] = $module;
                } else if ($module->archetype === MOD_ARCHETYPE_SYSTEM) {
                    // System modules cannot be added by user, do not add to dropdown
                    continue;
                }
                //$link = $module->link->out(true, $urlparams);
                //$activities[$activityclass][$link] = $module->title;
        }

        //$straddactivity = get_string('addactivity');
        $straddresource = get_string('addresource');
        $sectionname = get_section_name($course, $section);
        //$stractivitylabel = get_string('addactivitytosection', null, $sectionname);
        $strresourcelabel = get_string('addresourcetosection', null, $sectionname);

        $output = html_writer::start_tag('div', array('class' => 'section_add_menus', 'id' => 'add_menus-section-' . $section));

        if (!$vertical) {
            $output .= html_writer::start_tag('div', array('class' => 'horizontal'));
        }

        if (!empty($activities[MOD_CLASS_RESOURCE])) {
            $select = new url_select($activities[MOD_CLASS_RESOURCE], '', array(''=>$straddresource), "ressection$section");
            $select->set_help_icon('resources');
            $select->set_label($strresourcelabel, array('class' => 'accesshide'));
            $output .= $this->output->render($select); // jumpto
        }

        //if (!empty($activities[MOD_CLASS_ACTIVITY])) {
        //    $select = new url_select($activities[MOD_CLASS_ACTIVITY], '', array(''=>$straddactivity), "section$section");
        //    $select->set_help_icon('activities');
        //    $select->set_label($stractivitylabel, array('class' => 'accesshide'));
        //    $output .= $this->output->render($select);
        //}

        if (!$vertical) {
            $output .= html_writer::end_tag('div');
        }

        $output .= html_writer::end_tag('div');

        if (course_ajax_enabled($course) && $course->id == $this->page->course->id) {
            // modchooser can be added only for the current course set on the page!
            $straddeither = get_string('addresourceoractivity');
            // The module chooser link
            $modchooser = html_writer::start_tag('div', array('class' => 'mdl-right'));
            $modchooser.= html_writer::start_tag('div', array('class' => 'section-modchooser'));
            $icon = $this->output->pix_icon('t/add', '');
            $span = html_writer::tag('span', $straddeither, array('class' => 'section-modchooser-text'));
            $modchooser .= html_writer::tag('span', $icon . $span, array('class' => 'section-modchooser-link'));
            $modchooser.= html_writer::end_tag('div');
            $modchooser.= html_writer::end_tag('div');

            // Wrap the normal output in a noscript div
            $usemodchooser = get_user_preferences('usemodchooser', $CFG->modchooserdefault);
            if ($usemodchooser) {
                $output = html_writer::tag('div', $output, array('class' => 'hiddenifjs addresourcedropdown'));
                $modchooser = html_writer::tag('div', $modchooser, array('class' => 'visibleifjs addresourcemodchooser'));
            } else {
                // If the module chooser is disabled, we need to ensure that the dropdowns are shown even if javascript is disabled
                $output = html_writer::tag('div', $output, array('class' => 'show addresourcedropdown'));
                $modchooser = html_writer::tag('div', $modchooser, array('class' => 'hide addresourcemodchooser'));
            }
//DebugBreak();
            //$output = $this->course_modchooser($modules, $course) . $modchooser . $output;
            $output = $this->courserenderer->course_modchooser($newmodules, $course) . $modchooser . $output; // use $newmodules!

        }

        return $output;
    }
    
}
