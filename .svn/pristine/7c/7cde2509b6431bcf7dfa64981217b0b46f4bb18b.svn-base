<?php

    require_once('../../config.php');
    require_once('lib.php');
    require_once($CFG->libdir.'/completionlib.php');

    $id          = optional_param('id', 0, PARAM_INT);       // Course Module ID
    $mode        = optional_param('mode', 0, PARAM_INT);     // Display mode (for single forum)
    $showall     = optional_param('showall', '', PARAM_INT); // show all discussions on one page
    $changegroup = optional_param('group', -1, PARAM_INT);   // choose the current group
    $page        = optional_param('page', 0, PARAM_INT);     // which page to show
    $search      = optional_param('search', '', PARAM_CLEAN);// search string

    $params = array();
    if ($id) {
        $params['id'] = $id;
    }
    if ($page) {
        $params['page'] = $page;
    }
    if ($search) {
        $params['search'] = $search;
    }
    $PAGE->set_url('/mod/forum/view.php', $params);
    //require_login($SITE); 
    $context = context_system::instance();
    $PAGE->set_context($context); 
    
    if($id == 0){
        $PAGE->set_title(get_string('qandaforums', 'forum'));
        $PAGE->add_body_class('forumtype-qanda');
        $PAGE->set_heading(get_string('qandaforums', 'forum'));
        $urlnav = new moodle_url('/mod/forum/faqforum_view.php');
        $PAGE->navbar->add(get_string('faquestion', 'admin'), $urlnav);
        echo $OUTPUT->header(); 
        
        //elaine change jk method
        //$faqforums = $DB->get_records("forum", array("course" => SITEID,"type" => 'qanda'));
        $select ="course=:course AND type !=:type";  //type:qanda,courseqanda,social,blog
        $params = array();
        $params['course']=SITEID;
        $params['type']='news';
        
        $faqforums = $DB->get_records_select('forum', $select,$params, '', '*', 0); 
        if(!$faqforums){
            /*forum_get_course_forum(SITEID,'qanda',1); 
            forum_get_course_forum(SITEID,'qanda',2);
            forum_get_course_forum(SITEID,'qanda',3);
            forum_get_course_forum(SITEID,'qanda',4);  
            $faqforums = $DB->get_records("forum", array("course" => SITEID,"type" => 'qanda'));
            */  
        }else{
            // Print header.

            $i=0;
            foreach($faqforums as $forums)
            {
                $fmodues = $DB->get_record("course_modules", array("course" => SITEID,"instance" => $forums->id));
                $id = $fmodues->id;

                if ($id) {
                    if (! $cm = get_coursemodule_from_id('forum', $id)) {
                        print_error('invalidcoursemodule');
                    }
                    if (! $course = $DB->get_record("course", array("id" => SITEID))) {
                        print_error('coursemisconf');
                    }
                    if (! $forum = $DB->get_record("forum", array("id" => $cm->instance))) {
                        print_error('invalidforumid', 'forum');
                    }
                    if ($forum->type == 'single') {
                        $PAGE->set_pagetype('mod-forum-discuss');
                    }
                    // move require_course_login here to use forced language for course
                    // fix for MDL-6926

                    $strforums = get_string("modulenameplural", "forum");
                    $strforum = get_string("modulename", "forum");
                } else {
                    print_error('missingparameter');
                }
                $context = context_module::instance($cm->id); 
                if($i=0)
                {
                    require_course_login($course, true, $cm);
                    $PAGE->set_context($context);
                }

                if (!empty($CFG->enablerssfeeds) && !empty($CFG->forum_enablerssfeeds) && $forum->rsstype && $forum->rssarticles) {
                    require_once("$CFG->libdir/rsslib.php");

                    $rsstitle = format_string($course->shortname, true, array('context' => context_course::instance($course->id))) . ': ' . format_string($forum->name);
                    rss_add_http_header($context, 'mod_forum', $forum, $rsstitle);
                }

                // Mark viewed if required
                //$completion = new completion_info($course);
                //$completion->set_module_viewed($cm);

                /// Some capability checks.
                if (empty($cm->visible) and !has_capability('moodle/course:viewhiddenactivities', $context)) {
                    notice(get_string("activityiscurrentlyhidden"));
                }

                if (!has_capability('mod/forum:viewdiscussion', $context)) {
                    notice(get_string('noviewdiscussionspermission', 'forum'));
                }

                /// find out current groups mode
                groups_print_activity_menu($cm, $CFG->wwwroot . '/mod/forum/view.php?id=' . $cm->id);
                $currentgroup = groups_get_activity_group($cm);
                $groupmode = groups_get_activity_groupmode($cm);

                /// Okay, we can show the discussions. Log the forum view.
                if ($cm->id) {
                    add_to_log($course->id, "forum", "view forum", "view.php?id=$cm->id", "$forum->id", $cm->id);
                } else {
                    add_to_log($course->id, "forum", "view forum", "view.php?f=$forum->id", "$forum->id");
                }

                $SESSION->fromdiscussion = qualified_me();   // Return here if we post or set subscription etc

                // If it's a simple single discussion forum, we need to print the display
                // mode control.
                if ($forum->type == 'single') {
                    $discussion = NULL;
                    $discussions = $DB->get_records('forum_discussions', array('forum'=>$forum->id), 'timemodified ASC');
                    if (!empty($discussions)) {
                        $discussion = array_pop($discussions);
                    }
                    if ($discussion) {
                        if ($mode) {
                            set_user_preference("forum_displaymode", $mode);
                        }
                        $displaymode = get_user_preferences("forum_displaymode", $CFG->forum_displaymode);
                        forum_print_mode_form($forum->id, $displaymode, $forum->type);
                    }
                }

                if (!empty($forum->blockafter) && !empty($forum->blockperiod)) {
                    $a = new stdClass();
                    $a->blockafter = $forum->blockafter;
                    $a->blockperiod = get_string('secondstotime'.$forum->blockperiod);
                    echo $OUTPUT->notification(get_string('thisforumisthrottled', 'forum', $a));
                }
                /*  //提醒標語
                if ($forum->type == 'qanda' && !has_capability('moodle/course:manageactivities', $context)) {
                    echo $OUTPUT->notification(get_string('qandanotify','forum'));
                }*/
                //qanda,courseqanda,social,blog
                switch ($forum->type) {
                    case 'qanda':
                        echo $OUTPUT->heading($forum->name, 3, 'headingblock header');
                        forum_print_latest_discussions($course, $forum, 10, 'header', 'p.modified DESC','','','','','',1);     //常見問題      
                        break;
                    case 'courseqanda':
                        echo $OUTPUT->heading($forum->name, 3, 'headingblock header');
                        forum_print_latest_discussions($course, $forum, 10, 'header', 'p.modified DESC','','','','','',1);  
                        break;
                    case 'social':
                        echo $OUTPUT->heading($forum->name, 3, 'headingblock header');
                        forum_print_latest_discussions($course, $forum, 10, 'header', 'p.modified DESC','','','','','',1);  
                        break;
                    case 'blog':
                        echo $OUTPUT->heading($forum->name, 3, 'headingblock header');
                        forum_print_latest_discussions($course, $forum, 10, 'header', 'p.modified DESC','','','','','',1);              
                        break;
                    default: 
                        if (!empty($forum->intro)) {
                            echo $OUTPUT->box(format_module_intro('forum', $forum, $cm->id), 'generalbox', 'intro');
                        }
                        echo '<br />';
                        if (!empty($showall)) {
                            forum_print_latest_discussions($course, $forum, 0, 'header', '', -1, -1, -1, 0, $cm);
                        } else {
                            forum_print_latest_discussions($course, $forum, -1, 'header', '', -1, -1, $page, $CFG->forum_manydiscussions, $cm);
                        } 
                
                        break;
                }
                $i++;
            }
        }
    }
    echo $OUTPUT->footer(); 


