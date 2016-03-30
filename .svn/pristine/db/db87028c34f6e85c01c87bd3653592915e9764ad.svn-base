<?php
/**
 * @package    local_favoritelink
 * @copyright 2014 JACK LIOU {@link http://www.click-ap.com}
 * @copyright 2014 MARY Chen {@link http://www.click-ap.com}
 * @license    http://www.click-ap.com v1.0
 */
require_once('../../config.php');
require_once('lib.php');
//include_once '../../lib/is_china_ip.php';

$strfavoritelinks = get_string('favoritelink', 'local_favoritelink');
$straddnewfavoritelink = get_string('add-favoritelink', 'local_favoritelink');
$can_edit = local_favoritelink_can_edit();

$site = get_site();

$url = new moodle_url('/local/favoritelink/index.php');
$PAGE->set_url($url);

$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('admin');

$current_lang = current_language();

if(!local_favoritelink_table_exists()) {	
	redirect(new moodle_url($CFG->wwwroot.'/local/favoritelink/error.php'));
}
else {
	$PAGE->navbar->add($strfavoritelinks);
	$PAGE->set_title("$site->shortname: $strfavoritelinks");
	$PAGE->set_heading($strfavoritelinks);

	//now the page contents
	echo $OUTPUT->header();
	echo $OUTPUT->box_start('favoritelinkboxes');
	$favoritelinks = local_favoritelink_get_all();
	
	//Buttons
	if($can_edit) {
		echo $OUTPUT->container_start('buttons');
			echo $OUTPUT->single_button(new moodle_url('edit.php'), $straddnewfavoritelink, 'get');
		echo $OUTPUT->container_end();
	}
	
	//Table is empty
	if(empty($favoritelinks)) {	
		echo html_writer::start_tag('div', array('class' => 'empty'));
			echo get_string('warning-empty', 'local_favoritelink');
		echo html_writer::end_tag('div');
	}
	else {
		echo html_writer::start_tag('ul', array('class'=>'unlist'));
		foreach ($favoritelinks as $favoritelink) {
			$url_options = array('id' => $favoritelink->id);
			echo html_writer::start_tag('li');
				echo html_writer::start_tag('div', array('class'=>'favoritebox clearfix'));
                	echo html_writer::start_tag('div', array('class'=>'info','style' => 'width:30%;'));
           
                    $emptyurl = file_encode_url($CFG->wwwroot.'/pix/index_course.jpg',''); 
                    $contentimages = html_writer::tag('div',
                                    html_writer::empty_tag('img', array('src' => $emptyurl,'width' => '80px','height' => '80px')),
                                    array('class' => 'courseimage', 'style' =>'width:80px'));
                    $logofiles = favoritelink_get_logo($favoritelink);
                    foreach ($logofiles as $file) {
                        $isimage = $file->is_valid_image();
                        if ($isimage) {
                            $logourl = file_encode_url("$CFG->wwwroot/pluginfile.php",
                                    '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                                    $file->get_filearea(). $file->get_filepath(). $file->get_itemid().'/'. $file->get_filename(), !$isimage);
                        
                            $contentimages = html_writer::tag('div',
                                    html_writer::empty_tag('img', array('src' => $logourl,'width' => '80px','height' => '80px')),
                                    array('class' => 'courseimage', 'style' =>'width:80px'));
                            break;
                        }
                    }
                    echo $contentimages;  
				echo html_writer::end_tag('div');
                if($current_lang =='zh_cn'){
                    $favoritelink_name = $favoritelink->cnname;
                }
                else {
                    $favoritelink_name = $favoritelink->name;
                }
				echo html_writer::start_tag('div', array('class'=>'summary'));
				    echo html_writer::start_tag('h3', array('class'=>'name'));
                        echo html_writer::link(new moodle_url($favoritelink->url), $favoritelink_name);
                    echo html_writer::end_tag('h3');    
                    
                    if(!empty($favoritelink->enname)) {
                        echo '<p class="enname"><b>'.get_string('field-enname', 'local_favoritelink').'</b>: '.$favoritelink->enname.'</p>';
                    }   
				echo html_writer::end_tag('div');

				if($can_edit) {
					echo html_writer::start_tag('div', array('class'=>'options'));
						$options = array('title' => get_string('edit'));
						$image = '<img src="'.$OUTPUT->pix_url('t/edit').'" alt="'.$options['title'].'" />';
						echo html_writer::link(new moodle_url('edit.php', $url_options), $image, $options);
                        
						$options = array('title' => get_string('delete'));
						$image = '<img src="'.$OUTPUT->pix_url('t/delete').'" alt="'.$options['title'].'" />';
						echo html_writer::link(new moodle_url('delete.php', $url_options), $image, $options);

					echo html_writer::end_tag('div');
				}
			echo html_writer::end_tag('li');
        }
		echo html_writer::end_tag('ul');
	}
	
	echo $OUTPUT->box_end();

	echo $OUTPUT->footer();
}


