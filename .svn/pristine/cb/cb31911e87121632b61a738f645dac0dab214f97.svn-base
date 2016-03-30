<?php

/**
 * Videoquiz module renderering methods are defined here.
 *
 * @package    mod_videoquiz
 * @copyright  2014 Jack <jack@click-ap.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/videoquiz/locallib.php');

/**
 * Videoquiz module renderer class
 */
class mod_videoquiz_renderer extends plugin_renderer_base {

    /**
     * Renders the videoquiz page header.
     *
     * @param videoquiz videoquiz
     * @return string
     */
    public function video_header($videoquiz, $viewobj) {
        global $CFG;

        $output = '';
        $reporting = error_reporting();
        $name = format_string($videoquiz->get_instance()->name,
                              true,
                              $videoquiz->get_course());
        $title = $this->page->course->shortname . ': ' . $name;

        $coursemoduleid = $videoquiz->get_course_module()->id;
        $context = context_module::instance($coursemoduleid);

        $vjver = 'video-js-4.12.11';
        $this->page->requires->css("/mod/videoquiz/$vjver/video-js.min.css");
        $this->page->requires->css("/mod/videoquiz/$vjver/video-quizoverlay.css"); 
        
        // Header setup. A
        //$this->page->set_title($title);
        //$this->page->set_heading($this->page->course->fullname);
        
        //$output .= $this->output->header();
        
        // Add videojs css and js files.
        //$vjver = 'video-js-4.12.11';
        //$this->page->requires->css("/mod/videoquiz/$vjver/video-js.min.css");
        ////$this->page->requires->css("/mod/videoquiz/$vjver/video-js.css");
        //$this->page->requires->css("/mod/videoquiz/$vjver/video-quizoverlay.css"); 
        ////$this->page->requires->css("/mod/videoquiz/$vjver/video-addQuestion.css"); 
        
        //debugging('Page layout has already been set and cannot be changed.', DEBUG_DEVELOPER);
        
        //if (!$reporting) {
        if (!debugging('', DEBUG_DEVELOPER)) {
            
            $this->page->requires->js("/mod/videoquiz/$vjver/video-min.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/mod_videoquiz-video-head-min.js", true);
        }
        else{
            $this->page->requires->js("/mod/videoquiz/$vjver/video.dev.js", true);
            
            // Media Sources plugin
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/videojs-media-sources.js", true);
            
            // HLS
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/videojs-hls.js", true);
            
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/xhr.js", true);
            
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/pkcs7.unpad.js", true);
            
            // segment handling
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/flv-tag.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/stream.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/exp-golomb.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/h264-extradata.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/h264-stream.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/aac-stream.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/metadata-stream.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/segment-parser.js", true);
            //m3u8 handling
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/m3u8-parser.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/playlist.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/playlist-loader.js", true);
            //$this->page->requires->js("/mod/videoquiz/$vjver/pkcs7.unpad.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/decrypter.js", true);
            $this->page->requires->js("/mod/videoquiz/$vjver/hls/bin-utils.js", true);
        }/**/
        
        //// Set the videojs flash fallback url.
        $swfurl = new moodle_url("/mod/videoquiz/$vjver/video-js.swf");
        $this->page->requires->js_init_code('videojs.options.flash.swf = "' . $swfurl . '";');

        $slides = $videoquiz->get_slides(); //array();
        //$slides = $videoquiz->get_slides($USER->id); //array();
        $options = new stdClass;
        $options->disableProgress = true;

        $options->canedit = $viewobj->canedit;

        $this->page->requires->yui_module(
            'moodle-mod_videoquiz-video',
            'M.mod_videoquiz.video.init',
            array($videoquiz->get_instance()->id,
                  $swfurl,
                  $videoquiz->get_instance()->width,
                  $videoquiz->get_instance()->height,
                  $slides,
                  $options
                  )
        );
        
        $this->page->requires->strings_for_js(array(
               'pluginname',
               'dialogheading',
               'submitlabel',
               'position',
               'editvalidating',
               'question',
               'deletequestion',
               'confirmdelquestion',
               'prompttime',
               'option',
               'addoption',
               'removeoption',
               'itemplacehold',
               'answervalidating',
               'correctanswer',
               'abortanswer',
               'rightanswer',
               'wronganswer',
               'continuewatch',
               'correctanswerstr',
               'wronganswerstr',
               'abortanswerstr'
            ), 'videoquiz');
        // Yui module handles responsive mode video resizing.
        if ($videoquiz->get_instance()->responsive) {
            $this->page->requires->yui_module(
                'moodle-mod_videoquiz-videojs',
                'M.mod_videoquiz.video.enableResize',
                array($videoquiz->get_instance()->id,
                      $videoquiz->get_instance()->width,
                      $videoquiz->get_instance()->height));
        }

        // Header setup. - B
        $this->page->set_title($title);
        $this->page->set_heading($this->page->course->fullname);

        $output .= $this->output->header();
        $output .= $this->output->heading($name, 3);

        /*if (!empty($videoquiz->get_instance()->intro)) {
            $output .= $this->output->box_start('generalbox boxaligncenter', 'intro');
            $output .= format_module_intro('videoquiz',
                                           $videoquiz->get_instance(),
                                           $coursemoduleid);
            $output .= $this->output->box_end();
        }*/

        return $output;
    }

    /**
     * Render the footer
     *
     * @return string
     */
    public function video_footer() {
        return $this->output->footer();
    }

    /**
     * Render the videoquiz page
     *
     * @param videoquiz videoquiz
     * @return string The page output.
     */
    public function video_page($videoquiz, $viewobj) {
        $vid = $videoquiz->get_instance()->id;
        $showevent_str = "javascript:M.mod_videoquiz.video.showhide(".$vid.");";
        $saveevent_str = "javascript:M.mod_videoquiz.video.savequiz(".$vid.");";
        $addevent_str = "javascript:M.mod_videoquiz.video.addquestion(".$vid.");";
        
        $output = '';
        $output .= $this->video_header($videoquiz, $viewobj);
        $output .= $this->video($videoquiz);
        if (!$viewobj->quizhasquestions) {
            $output .= $this->no_questions_message($viewobj->canedit, $viewobj->editurl);
        }
        if ($viewobj->canedit) {
            ////$output .= $this->single_button($editurl, get_string('editquiz', 'videoquiz'), 'get');
            //$output .= html_writer::tag('div', 'EditMode', array('id' => 'showhiders', 'class' => 'button', 'onClick' => $showevent_str)); //" onClick="showhide()">Show/Hide RS</div>
            //$output .= html_writer::tag('div', 'SaveQuiz', array('id' => 'savequiz', 'class' => 'button', 'onClick' => $saveevent_str)); 
            //$output .= html_writer::tag('div', 'AddQuiz', array('id' => 'addquiz', 'class' => 'button', 'onClick' => $addevent_str)); 
        }
        /*$output .= "<script type=text/javascript>
function showhide(){
    player.play();
    player.pause();
}
</script>";/**/
        
        $output .= $this->video_footer();

        return $output;
    }


    /**
     * Utility function for getting a file URL
     *
     * @param stored_file $file
     * @return string file url
     */
    private function util_get_file_url($file) {
        return moodle_url::make_pluginfile_url(
            $file->get_contextid(),
            $file->get_component(),
            $file->get_filearea(),
            $file->get_itemid(),
            $file->get_filepath(),
            $file->get_filename(),
            false);
    }

    /**
     * Utility function for getting area files
     *
     * @param int $contextid
     * @param string $areaname file area name (e.g. "videos")
     * @return array of stored_file objects
     */
    private function util_get_area_files($contextid, $areaname) {
        $fs = get_file_storage();
        return $fs->get_area_files($contextid,
                                   'mod_videoquiz',
                                   $areaname,
                                   false,
                                   'itemid, filepath, filename',
                                   false);
    }

    /**
     * Utility function for getting the video poster image
     *
     * @param int $contextid
     * @return url to the poster image (or the default image)
     */
    private function get_poster_image($contextid) {
        global $CFG;
        $posterurl = null;
        $posters = $this->util_get_area_files($contextid, 'posters');
        foreach ($posters as $file) {
            $posterurl = $this->util_get_file_url($file);
            break;  // Only one poster allowed.
        }
        if (!$posterurl) {
            if(!isset($CFG->ewant_site) || $CFG->ewant_site=="" ){
                $posterurl = $this->pix_url('ewant-logo', 'videoquiz');
            }
            else{
                $posterurl = $this->pix_url($CFG->ewant_site . '-logo', 'videoquiz');
            }
        }

        return $posterurl;
    }

    /**
     * Utility function for creating the video element HTML.
     *
     * @param object $videoquiz
     * @param url to the video poster image
     * @return string the video element HTML
     */
    private function get_video_element_html($videoquiz, $posterurl) {
        /* The width and height are set to auto if responsive flag is set
           but is not ignored. They are still used to calculate proportions
           in the javascript that handles video resizing. */
        $width = ($videoquiz->get_instance()->responsive ? 'auto' : $videoquiz->get_instance()->width);
        $height = ($videoquiz->get_instance()->responsive ? 'auto' : $videoquiz->get_instance()->height);
                   
        $output = '';
        $output .= html_writer::start_tag('section', array('id' => 'cuePlayer'));
        // Renders the video element.
        // 'preload' => 'none',
        $output .= html_writer::start_tag(
            'video',
            array('id' => 'videoquiz-' . $videoquiz->get_instance()->id,
                  'class' => 'video-js vjs-default-skin',
                  'controls' => 'controls',
                  //'autoplay' => 'autoplay',
                  'preload' => 'auto',
                  'width' => $width,
                  'height' => $height,
                  'poster' => $posterurl)
                  //'data-setup' => '{}')

                  // The below data-setup will trigger vjs.autoSetup, even '{}' !== null  
                  // So, I won't it. move to m.mod_videoquiz.
                  //'data-setup' => "{\"nativeControlsForTouch\": false, \"customControlsOnMobile\": true}") 
        );
        //$output .= html_writer::end_tag('section');
        return $output;
    }
    

    /**
     * Utility function for creating the video source elements HTML.
     *
     * @param int $contextid
     * @return string HTML
     */
    private function get_video_source_elements_html($contextid) {
        $output = '';
        $videos = $this->util_get_area_files($contextid, 'videos');
        foreach ($videos as $file) {
            if ($mimetype = $file->get_mimetype()) {
                $videourl = $this->util_get_file_url($file);
                $output .= html_writer::empty_tag(
                    'source',
                    array('src' => $videourl,
                          'type' => $mimetype)
                );
                break;
            }
        }

        return $output;
    }
    
    private function get_m3u8_source_elements_html($videourl, $mimetype) {
        //<source src="rtmp://210.61.8.241:1935/myapp/T1" type='rtmp/mp4'>
        //$videourl = "rtmp://210.61.8.241:1935/myapp/T1";
        //$mimetype ='rtmp/mp4';
        $output = html_writer::empty_tag(
            'source',
            array('src' => $videourl,
                  'type' => $mimetype)
        );
        return $output;
    }

    /**
     * Utility function for creating the video caption track elements
     * HTML.
     *
     * @param int $contextid
     * @return string HTML
     */
    private function get_video_caption_track_elements_html($contextid) {
        $output = '';
        $first = true;
        $captions = $this->util_get_area_files($contextid, 'captions');
        foreach ($captions as $file) {
            if ($mimetype = $file->get_mimetype()) {
                $captionurl = $this->util_get_file_url($file);

                // Get or construct caption label for video player.
                $filename = $file->get_filename();
                $dot = strrpos($filename, '.');
                if ($dot) {
                    $label = substr($filename, 0, $dot);
                } else {
                    $label = $filename;
                }

                // Perhaps filename is a three letter ISO 6392 language code (e.g. eng, swe)?
                if (preg_match('/^[a-z]{3}$/', $label)) {
                    $maybelabel = get_string($label, 'core_iso6392');

                    /* Strings not in language files come back as [[string]], don't
                       use those for labels. */
                    if (substr($maybelabel, 0, 2) !== '[[' ||
                            substr($maybelabel, -2, 2) === ']]') {
                        $label = $maybelabel;
                    }
                }

                $options = array('kind' => 'captions',
                                 'src' => $captionurl,
                                 'label' => $label);
                if ($first) {
                    $options['default'] = 'default';
                    $first = false;
                }

                // Track seems to need closing tag in IE9 (!).
                $output .= html_writer::tag('track', '', $options);
            }
        }

        return $output;
    }

    /**
     * Utility function for getting the HTML for the alternative video
     * links in case video isn't showing/playing properly.
     *
     * @param int $contextid
     * @return string HTML
     */
    private function get_alternative_video_links_html($contextid) {
        $output = '';
        $videooutput = '';

        $first = true;
        $videos = $this->util_get_area_files($contextid, 'videos');
        foreach ($videos as $file) {
            if ($mimetype = $file->get_mimetype()) {
                $videourl = $this->util_get_file_url($file);

                if ($first) {
                    $first = false;
                } else {
                    $videooutput .= ', ';
                }
                $extension = pathinfo($file->get_filename(), PATHINFO_EXTENSION);
                $videooutput .= html_writer::tag('a',
                                                 $extension,
                                                 array('href' => $videourl));
            }
        }

        $output = html_writer::tag('p',
                                   get_string('video_not_playing',
                                              'videoquiz',
                                              $videooutput),
                                   array());
        return html_writer::tag('div',
                                $output,
                                array('class' => 'videoquiz-not-playing-msg'));
    }

    /**
     * Renders videoquiz video.
     *
     * @param videoquiz $videoquiz
     * @return string HTML
     */
    public function video(videoquiz $videoquiz) {
        $output  = '';
        $contextid = $videoquiz->get_context()->id;

        // Open videoquiz div.
        $vclass = ($videoquiz->get_instance()->responsive ? 'videoquiz videoquiz-responsive' : 'videoquiz');
        $output .= $this->output->container_start($vclass);

        // Open video tag.
        $posterurl = $this->get_poster_image($contextid);
        $output .= $this->get_video_element_html($videoquiz, $posterurl);

        // Elements for video sources.
        $urltype = $videoquiz->get_instance()->videotype;
        
        if($urltype == 0 ){
            $output .= $this->get_video_source_elements_html($contextid);
        }
        else{
            // m3u8
            //$m3u8_url = "http://www.bogotobogo.com/VideoStreaming/Files/HLS/playlist.m3u8"; // not working
            //$m3u8_url = "http://www.flashls.org/playlists/test_001/stream.m3u8"; 
            //$m3u8_url = "http://210.61.8.241/hls/Terminator/Terminator.m3u8";
            $m3u8_url  = $videoquiz->get_instance()->streamingurl;
            $output .= $this->get_m3u8_source_elements_html($m3u8_url, "application/x-mpegURL"); //"http://www.bogotobogo.com/VideoStreaming/Files/HLS/playlist.m3u8"
            //$output .= $this->get_video_source_elements_html("http://solutions.brightcove.com/jwhisenant/hls/apple/bipbop/bipbopall.m3u8", "application/x-mpegURL");
        }

        // Elements for caption tracks.
        //$output .= $this->get_video_caption_track_elements_html($contextid);

        // Close video tag.
        $output .= html_writer::end_tag('video');
        $output .= html_writer::end_tag('section');
        //// Alternative video links in case video isn't showing/playing properly.
        //$output .= $this->get_alternative_video_links_html($contextid);

        // Close videoquiz div.
        $output .= $this->output->container_end();

        return $output;
    }
    
    public function no_questions_message($canedit, $editurl) {
        $output = '';
        $output .= $this->notification(get_string('noquestions', 'videoquiz'));
        if ($canedit) {
        //    $output .= $this->single_button($editurl, get_string('editquiz', 'videoquiz'), 'get');
        }

        return $output;
    }
}
