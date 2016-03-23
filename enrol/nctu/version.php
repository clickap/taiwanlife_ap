<?php
/**
 * NCTU-Moocs enrolment plugin version specification.
 *
 * @package    enrol_nctu
 * @copyright  2013 Jack Liou  {@link http://www.click-ap.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2013050100;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2013050100;        // Requires this Moodle version
$plugin->component = 'enrol_nctu';      // Full name of the plugin (used for diagnostics)
$plugin->cron      = 600;
