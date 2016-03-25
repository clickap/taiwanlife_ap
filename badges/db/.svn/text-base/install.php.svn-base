<?php
defined('MOODLE_INTERNAL') || die();

function xmldb_badge_install($oldversion=0) {
    global $CFG, $DB, $OUTPUT;  
    $result = true;
    //if not isset then create
    $dbman = $DB->get_manager();
    // Define field to be added to course.
    $table = new xmldb_table('badge');
    
    $field = new xmldb_field('institution_id', XMLDB_TYPE_INTEGER, '10', null, null, null, null, 'nextcron'); 
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }
     
    $field = new xmldb_field('summary', XMLDB_TYPE_TEXT, 'big', null, null, null, null, 'institution_id'); 
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }
    
    $field = new xmldb_field('summaryformat', XMLDB_TYPE_INTEGER, '1', null, null, null, null, 'summary');
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }
    
    $field = new xmldb_field('teacher', XMLDB_TYPE_TEXT, 'big', null, null, null, null, 'summaryformat');
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }
    
    $field = new xmldb_field('teacherformat', XMLDB_TYPE_INTEGER, '1', null, null, null, null, 'teacher');
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }

    $field = new xmldb_field('learnmap', XMLDB_TYPE_TEXT, 'big', null, null, null, null, 'teacherformat'); 
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }
    
    $field = new xmldb_field('learnmapformat', XMLDB_TYPE_INTEGER, '1', null, null, null, null, 'learnmap');
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }
    
    $field = new xmldb_field('content', XMLDB_TYPE_TEXT, 'big', null, null, null, null, 'learnmapformat');
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }
    
    $field = new xmldb_field('contentformat', XMLDB_TYPE_INTEGER, '1', null, null, null, null, 'content');
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    } 
    
    $field = new xmldb_field('ability', XMLDB_TYPE_TEXT, 'big', null, null, null, null, 'contentformat');
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }
    
    $field = new xmldb_field('abilityformat', XMLDB_TYPE_INTEGER, '1', null, null, null, null, 'ability');
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    } 
   
    $field = new xmldb_field('qna', XMLDB_TYPE_TEXT, 'big', null, null, null, null, 'abilityformat'); 
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }
    
    $field = new xmldb_field('qnaformat', XMLDB_TYPE_INTEGER, '1', null, null, null, null, 'qna');
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }
    
    $field = new xmldb_field('memo', XMLDB_TYPE_TEXT, 'big', null, null, null, null, 'qnaformat');
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    }
    
    $field = new xmldb_field('memoformat', XMLDB_TYPE_INTEGER, '1', null, null, null, null, 'memo');
    if (!$dbman->field_exists($table, $field)) {
        $dbman->add_field($table, $field);
    } 

    return $result;   
}