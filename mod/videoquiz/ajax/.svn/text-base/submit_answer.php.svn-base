<?php
require_once(dirname(__FILE__) . '/../../../config.php');
require_once($CFG->dirroot . '/mod/videoquiz/locallib.php');

$questionid = required_param('questionid', PARAM_INT); // Question id.
$abortans = optional_param('abort', false, PARAM_BOOL); // Answer id.
if(!$abortans){
    $answerid = required_param('answers', PARAM_INT); // Answer id.
}


//debugBreak();
$vq = $DB->get_record('videoquiz_question', array('id' => $questionid), '*', MUST_EXIST);
if (!$videoquiz = $DB->get_record('videoquiz', array('id' => $vq->video))) {
    print_error('invalidquizid', 'videoquiz');
}
$course = $DB->get_record('course', array('id' => $videoquiz->course), '*', MUST_EXIST);
//$cm = get_coursemodule_from_id('videoquiz', $vq->video, 0, false, MUST_EXIST);
$cm = get_coursemodule_from_instance('videoquiz', $videoquiz->id, $course->id);

$context = context_module::instance($cm->id);
require_login($course, true, $cm);

//add_to_log($course->id, 'videoquiz', 'view', "view.php?id={$cm->id}", $videoquiz->name, $cm->id);
add_to_log($course->id, 'videoquiz', 'answer', "asnwer.php?id={$cm->id}", $videoquiz->name, $cm->id);

//videoquiz_update_grades($videoquiz, $USER->id);

if (!$vqoptions = $DB->get_records('videoquiz_option', array('question' => $questionid), "id")) {
    print_error('invalidvideoquizoptions', 'videoquiz');
}

// get correct answers  
$correct_answers = $DB->get_fieldset_select('videoquiz_option', 'name', 'question = ? and isAnswer=1', array($questionid)); // same with locallib, don't change
$rightanswer = implode(",", $correct_answers );

// get user response answer  // Caution !!! ToDo: the order may be wrong!!!
$tmpCorrect = false;
$tmpResponse = "N/A";
if(!$abortans || isset($answerid)){
    $cnt = 0;
//debugBreak();
    foreach ($vqoptions as $options) {
        if ($cnt++ == $answerid){
            $tmpResponse = $options->name;
            $tmpCorrect = $options->isanswer == 1;
            break;
        }
    }
}

// Add the attempts record.
$attempt = new stdClass();
$attempt->userid = $USER->id;
$attempt->question = $questionid;
$attempt->questionsummary = $vq->name;
$attempt->rightanswer = $rightanswer;
if(!$abortans || isset($answerid)){
    $attempt->responsesummary = $tmpResponse;
}
else{
    $attempt->flagged = $abortans;
}
$attempt->timemodified = time();
$qid = $DB->insert_record('vq_question_attempts', $attempt);


//var_dump(json_decode("{success: true, attempts_id :$qid}"));

$response['rightanswer']= $rightanswer; //$tmpResponse;
$response['question_id']= $questionid;
if($abortans){
    $response['abort']= true;
}
else if(!$abortans || isset($answerid)){
    $response['success']= $tmpCorrect;
}
else{
    $response['success']= false;
}
echo json_encode($response);


