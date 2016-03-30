<?php
/**
 * @package    local_favoritelink
 * @copyright 2014 JACK LIOU {@link http://www.click-ap.com}
 * @copyright 2014 MARY Chen {@link http://www.click-ap.com}
 * @license    http://www.click-ap.com v1.0
 */
defined('MOODLE_INTERNAL') || die();

$capabilities = array(
     
    'local/favoritelink:manage' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,

        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
        ),

        'clonepermissionsfrom' => 'moodle/site:config'
    ),
);
