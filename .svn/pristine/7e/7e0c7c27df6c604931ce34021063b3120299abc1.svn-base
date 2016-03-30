<?php

/**
 * Settings for format_resources
 *
 * @package    format_videos
 * @copyright  2013 Jack Liou, Click-AP
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $availabletypes = get_module_types_names();
    $defaultresourcetypes = array(); 
    $key = array_search(get_string('modulename', 'quiz'), $availabletypes); // File
    if($key){
      $defaultresourcetypes[] = $key;
    } 
    
    // e.g. resource, label, url            
    $settings->add(new admin_setting_configmultiselect('format_quizs/activitytypes',
        new lang_string('resourcetypes', 'format_quizs'), new lang_string('configresourcetypes', 'format_quizs'),
        $defaultresourcetypes, $availabletypes));
        
    $settings->add(new admin_setting_configtext('format_quizs/controlviewpath', 
        new lang_string('controlviewpath', 'format_quizs'), new lang_string('configcontrolviewpath', 'format_quizs'),  '/blocks/modquiz', PARAM_TEXT));
}


