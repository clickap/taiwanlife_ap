<?php

/**
 * Capability definitions.
 *
 * @package    local
 * @subpackage ewantadmin
 * @copyright  2014 Jack Liou <jack@click-ap.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$capabilities = array(

    'local/ewantadmin:manage' => array(

        'riskbitmask' => RISK_SPAM,

        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW
        ),
        'clonepermissionsfrom' => 'moodle/site:config'  //moodle/site:approvecourse
    ),
    
    'local/ewantadmin:view' => array(

        'riskbitmask' => RISK_SPAM,

        'captype' => 'read',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW
        ),
        'clonepermissionsfrom' => 'moodle/site:config'
    )
);
