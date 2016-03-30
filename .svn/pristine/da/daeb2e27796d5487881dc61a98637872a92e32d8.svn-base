<?php
require(dirname(__FILE__).'/../../config.php'); 
require_once($CFG->dirroot.'/course/lib.php');   
require_once($CFG->dirroot.'/lib/statslib.php');
require_once($CFG->libdir.'/adminlib.php');
require_once('lib.php');    
   
    $report     = optional_param('report', STATS_REPORT_ACTIVE_COURSES, PARAM_INT);
    $time       = optional_param('time', 0, PARAM_INT);
    $numcourses = optional_param('numcourses', 20, PARAM_INT);
  
    admin_externalpage_setup('reportregisterreportview', '', null, '', array('pagelayout'=>'report'));     
    
    $site = get_site();
    stats_check_uptodate($site->id);

    echo $OUTPUT->header();

    echo $OUTPUT->heading(get_string('registeranalysis', 'report_registerreportview'));  
    $_SESSION['lr_begin']="";
    
    $start_date=date("Y/m/d",time());
    if(isset($_POST['start_date'])){
        $start_date= $_POST['start_date'];
        //$begin= $start_date.' 00:00:00';
        $_SESSION['lr_begin']=$start_date;
     }
    
    $table = new html_table();  
    $table->width = '100%';
    $table->id = 'registeranalysis';
    $table->attributes['class'] = 'admintable generaltable registeranalysis';
    $table->align =  array('left','left','left');
    $table->data[] = array( '統計期間',
                            '<input type="text" name="start_date" size="10" maxlength="10" value="'.$start_date.'" />',
                            '<input id="s1" name ="s1" type="submit" value="'.get_string('search').'" />') ;

    $actionurl = new moodle_url($CFG->wwwroot.'/report/registerreportview/index.php');    
    echo html_writer::start_tag('form', array('id' => 'registeranalysis', 'action' => $actionurl, 'method' => 'post'));
    echo html_writer::start_tag('div');
    echo html_writer::empty_tag('input', array('type' => 'hidden', 'name' => 'sesskey', 'value' => sesskey()));
    echo html_writer::table($table);
    echo html_writer::end_tag('div');
    echo html_writer::end_tag('form');
    echo html_writer::empty_tag('br'); 
    

    $tName="";
    
    if(($_SESSION['lr_begin'] != "")){                                       
        
        $begin= $_SESSION['lr_begin'].' 00:00:00';
        $myGmDateS = strtotime($begin);    
        $myGmDateE =  date("Y/m/d",$myGmDateS-WEEKSECS);
        echo "　統計期間：".$myGmDateE." ~ ".$_SESSION['lr_begin'];   
        $param = stats_get_parameters($time, STATS_REPORT_ACTIVE_COURSES, SITEID,STATS_MODE_RANKED);
        if (!empty($param->sql)) {
            $sql = $param->sql;
        } else {
            $threshold = 0; 
            if (!empty($CFG->statsuserthreshold) && is_numeric($CFG->statsuserthreshold)) {
                $threshold = $CFG->statsuserthreshold;
            }
            
            echo '　<a href="'.$CFG->wwwroot.'/report/registerreportview/download.php?logformat=download_register&stime='.$myGmDateS.'">下載統計</a><br/>';
            
            $day4 = date("Y/m/d",$myGmDateS-4*DAYSECS);  
            $day3 = date("Y/m/d",$myGmDateS-3*DAYSECS); 
            $day2 = date("Y/m/d",$myGmDateS-2*DAYSECS); 
            $day1 = date("Y/m/d",$myGmDateS-1*DAYSECS); 
            $day0 = date("Y/m/d",$myGmDateS); 
            
            $table = new html_table();
            $table->width = '100%';
            $table->align = array('left','left','center','center','center','center','center','center','center',);
            $table->head =  array( "編號","國家","更早之前", $day4,$day3,$day2,$day1,$day0, "總人次");  

            $countrys = get_country();
             
            $i=1;
            foreach ($countrys as $c) {
                $country = $c->country;
                
                $csum = get_registernumber($country,'',false);
                $cdaybefore = get_registernumber($country,($myGmDateS-4*DAYSECS),true);
                $cday4 = get_registernumber($country,($myGmDateS-4*DAYSECS),false);
                $cday3 = get_registernumber($country,($myGmDateS-3*DAYSECS),false);
                $cday2 = get_registernumber($country,($myGmDateS-2*DAYSECS),false);
                $cday1 = get_registernumber($country,($myGmDateS-1*DAYSECS),false);
                $cday0 = get_registernumber($country,($myGmDateS),false);
                
                if(empty($country))  $country ='未知';
                $a = array();
                
                $a[] = $i;  
                $a[] = $country;
                $a[] = $cdaybefore;             
                $a[] = $cday4;
                $a[] = $cday3;
                $a[] = $cday2;
                $a[] = $cday1;    
                $a[] = $cday0;    
                $a[] = $csum;    


                $table->data[] = $a;
                $i++;
                

            }
            echo html_writer::table($table);
        }
    }
echo $OUTPUT->footer();   
?>