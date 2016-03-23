<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'assign', language 'zh_tw', branch 'MOODLE_25_STABLE'
 *
 * @package   assign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = '你有需要注意的作業';
$string['addattempt'] = '允許另一次的繳交';
$string['addnewattempt'] = '新增一個繳交管道';
$string['addnewattemptfromprevious'] = '依據先前的作業新增一個繳交管道';
$string['addnewattemptfromprevious_help'] = '這將會複製你先前作業的內容，到一個新作業上，供你修改使用。';
$string['addnewattempt_help'] = '這將會建立一個新的空白作業，供你使用。';
$string['addsubmission'] = '加入繳交';
$string['allowsubmissions'] = '允許用戶繼續繳交這一作業';
$string['allowsubmissionsanddescriptionfromdatesummary'] = '作業細節和繳交表格將在 <strong>{$a}</strong> 可用';
$string['allowsubmissionsfromdate'] = '開啟時間';
$string['allowsubmissionsfromdate_help'] = '如果啟用了此選項，在此日期之前，學省不能提交作業。如果停用此項目，則學生馬上可以提交作業。';
$string['allowsubmissionsfromdatesummary'] = '本作業將從<strong>{$a}</strong>起接受繳交';
$string['allowsubmissionsshort'] = '允許更改提交';
$string['alwaysshowdescription'] = '總是顯示描述';
$string['alwaysshowdescription_help'] = '如果此設定為否，上面設定的作業描述只會在開啟時間以後對學生顯示。';
$string['applytoteam'] = '套用分數和回饋到整個群組';
$string['assign:addinstance'] = '新增一個新作業';
$string['assign:exportownsubmission'] = '匯出自己的作業';
$string['assignfeedback'] = '回饋插件';
$string['assignfeedbackpluginname'] = '回饋插件';
$string['assign:grade'] = '作業評分';
$string['assign:grantextension'] = '寬延時間';
$string['assignmentisdue'] = '作業截止';
$string['assignmentmail'] = '{$a->grader}已經就您繳交的作業「{$a->assignment}」給出了反饋意見。

您可以在您的作業下方看到：

{$a->url}';
$string['assignmentmailhtml'] = '{$a->grader}已經就您繳交的作業「{$a->assignment}」給出了反饋意見。

您可以在您的作業下方看到：

{$a->url}';
$string['assignmentmailsmall'] = '{$a->grader}已經就您繳交的作業「{$a->assignment}」填寫了反饋意見，您可以打開作業查看它。';
$string['assignmentname'] = '作業名稱';
$string['assignmentplugins'] = '作業插件';
$string['assignmentsperpage'] = '每顯示的頁面數';
$string['assign:revealidentities'] = '顯示學生身份';
$string['assignsubmission'] = '提交插件';
$string['assignsubmissionpluginname'] = '提交插件';
$string['assign:submit'] = '繳交作業';
$string['assign:view'] = '檢視作業';
$string['attemptheading'] = '第{$a->attemptnumber}次作業提交 : {$a->submissionsummary}';
$string['attempthistory'] = '先前的提交';
$string['attemptnumber'] = '作業提交次數';
$string['attemptreopenmethod'] = '作業提交已重新開啟';
$string['attemptreopenmethod_help'] = '定義學生交作業如何重新開啟。選項有：1.學生不能再交作業。  2.須由教師再允許學生交作業。 3.學生可以一直繳交作業，直到達到通過的分數為止。通過的分數根據成績單中為此作業所設定之分數為準。';
$string['attemptreopenmethod_manual'] = '手工的';
$string['attemptreopenmethod_none'] = '從不';
$string['attemptreopenmethod_untilpass'] = '自動的，直到通過';
$string['attemptsettings'] = '繳交設定';
$string['availability'] = '可用性';
$string['backtoassignment'] = '返回作業';
$string['batchoperationconfirmaddattempt'] = '允許被選出的已繳交作業可以再提交一次？';
$string['batchoperationconfirmgrantextension'] = '同意所選取的作業延期繳交嗎？';
$string['batchoperationconfirmlock'] = '鎖住所有選定的作業嗎？';
$string['batchoperationconfirmreverttodraft'] = '將選擇的作業退回到草稿狀態？';
$string['batchoperationconfirmunlock'] = '解鎖所有選定的作業嗎？';
$string['batchoperationlock'] = '鎖定';
$string['batchoperationreverttodraft'] = '退回為草稿';
$string['batchoperationsdescription'] = '對選取的項目...';
$string['batchoperationunlock'] = '解鎖';
$string['blindmarking'] = '姓名彌封評分';
$string['blindmarking_help'] = '隱匿評分是在評分時隱藏學生的身份識別資料。如果相關本項作業已經有繳交或是評分了，則隱匿評分的設置將被鎖定。';
$string['changegradewarning'] = '這一作業已經完成評分，更改分數不會自動重新計算每個繳交作業的分數。如果您希望更改這分數，那麼您必須重新評分所有已繳交的作業。';
$string['choosegradingaction'] = '計分動作';
$string['chooseoperation'] = '選擇操作';
$string['comment'] = '評語';
$string['completionsubmit'] = '學生必須提交到這一個活動才能完成它';
$string['configshowrecentsubmissions'] = '在最新活動報告中，所有人都可以看到作業繳交通知。';
$string['confirmbatchgradingoperation'] = '您確定您要對 {$a->count} 名學生進行{$a->operation}操作嗎?';
$string['confirmsubmission'] = '你確定要提交你的作業去評分？提交後就不能做任何的更改了。';
$string['conversionexception'] = '無法執行轉換的任務。例外狀況：{$a}。';
$string['couldnotconvertgrade'] = '無法為用戶{$a}轉換作業分數。';
$string['couldnotconvertsubmission'] = '無法為用戶{$a}轉換繳交的作業。';
$string['couldnotcreatecoursemodule'] = '無法建立課程模組。';
$string['couldnotcreatenewassignmentinstance'] = '無法建立新作業的實體。';
$string['couldnotfindassignmenttoupgrade'] = '找不到需要升級的舊作業實體。';
$string['currentattempt'] = '這是第{$a}次繳交';
$string['currentattemptof'] = '這是第{$a->attemptnumber}次繳交(允許繳交 {$a->maxattempts} 次)';
$string['currentgrade'] = '在成績簿中目前的分數';
$string['cutoffdate'] = '最後期限';
$string['cutoffdatefromdatevalidation'] = '最後期限必須在允許繳交的日期之後';
$string['cutoffdate_help'] = '若設定，這一作業模組在這日期之後，將不再接受繳交作業，除非有寬延時間';
$string['cutoffdatevalidation'] = '最後期限不能夠早於到期日';
$string['defaultplugins'] = '預設作業設定';
$string['defaultplugins_help'] = '這些定義了所有新作業的預設設定。';
$string['defaultteam'] = '預設群組';
$string['deleteallsubmissions'] = '刪除所有提交的作業';
$string['deletepluginareyousure'] = '刪除作業插件{$a}： 您確定嗎？';
$string['deletepluginareyousuremessage'] = '您將要完全刪除這作業插件{$a}。這將會完全刪除在資料庫中和這一作業插件有關的一切資訊。您確定要繼續嗎？';
$string['deletingplugin'] = '刪除插件{$a}。';
$string['description'] = '說明';
$string['downloadall'] = '下載所有繳交的作業';
$string['duedate'] = '截止日期';
$string['duedate_help'] = '此為繳交作業期限。此時間點過後仍可交作業，但會被記上"遲交"。為了預防某日期之後還再一直交作業，可以設定一個完全不收的日期。';
$string['duedateno'] = '沒有截止日期';
$string['duedatereached'] = '已經超過這個作業的繳交截止日期';
$string['duedatevalidation'] = '截止時間必須比開始時間晚';
$string['editaction'] = '動作...';
$string['editattemptfeedback'] = '為第{$a}次繳交的作業編輯分數和回饋';
$string['editingpreviousfeedbackwarning'] = '你正在為一個先前繳交的作業編輯回饋。這是第{$a->attemptnumber} 次，總共有 {$a->totalattempts}次。';
$string['editingstatus'] = '編輯狀態';
$string['editsubmission'] = '修改我已繳交的作業';
$string['editsubmission_help'] = '更改你所繳交的作業';
$string['enabled'] = '已啟用';
$string['errornosubmissions'] = '沒有已繳交的作業可下載';
$string['errorquickgradingvsadvancedgrading'] = '快速評分未被儲存，因為此作業正使用進階評分方法';
$string['errorrecordmodified'] = '由於在您載入該頁面這段時間內，有人修改過一個或多個記錄，導致評分沒有儲存。';
$string['extensionduedate'] = '寬延的截止日期';
$string['extensionnotafterduedate'] = '寬延日期必須在截止繳交的日期之後';
$string['extensionnotafterfromdate'] = '寬延日期必須在開始允許繳交的日期之後';
$string['feedback'] = '回饋';
$string['feedbackavailablehtml'] = '{$a->username}已經就您繳交的作業「<i>{$a->assignment}</i>」給出了回應意見。<br /><br />
您可以在<a href="{$a->url}">您的作業</a>下方看到。';
$string['feedbackavailablesmall'] = '{$a->username}已經為作業{$a->assignment}寫了回饋';
$string['feedbackavailabletext'] = '{$a->username}已經就您繳交的作業「{$a->assignment}」給出了回應意見。

您可以在您的作業下方看到：

{$a->url}';
$string['feedbackplugin'] = '回饋插件';
$string['feedbackpluginforgradebook'] = '用來把評論送入成績簿的回饋插件';
$string['feedbackpluginforgradebook_help'] = '只有一個作業反饋可以將評論填入成績單。';
$string['feedbackplugins'] = '回饋插件';
$string['feedbacksettings'] = '反饋設定';
$string['feedbacktypes'] = '回饋類型';
$string['filesubmissions'] = '檔案繳交';
$string['filter'] = '過濾方式';
$string['filternone'] = '沒有過濾';
$string['filterrequiregrading'] = '等待評分';
$string['filtersubmitted'] = '已繳交';
$string['gradeabovemaximum'] = '給出的分數不能超過 {$a}。';
$string['gradebelowzero'] = '給出的分數必須大於等於 0。';
$string['graded'] = '已評分';
$string['gradedby'] = '評分人';
$string['gradedon'] = '評分時間';
$string['gradelocked'] = '這一分數在這成績簿中是被鎖定或覆蓋的';
$string['gradeoutof'] = '成績(滿分{$a})';
$string['gradeoutofhelp'] = '成績';
$string['gradeoutofhelp_help'] = '請輸入該學生的分數，可以包含小數。';
$string['gradersubmissionupdatedhtml'] = '{$a->username}已經更新<i>"{$a->assignment}"</i>作業。新的內容可以 <a href="{$a->url}">點按此處</a> 查閱。';
$string['gradersubmissionupdatedsmall'] = '{$a->username}已經更新了他的作業：{$a->assignment}。';
$string['gradersubmissionupdatedtext'] = '{$a->username}已經更新他繳交的"{$a->assignment}"作業

可以在點按下列網址查閱：

{$a->url}';
$string['gradestudent'] = '學生：（id={$a->id}，姓名={$a->fullname}）。';
$string['gradeuser'] = '評定{$a}的分數';
$string['grading'] = '作業評分';
$string['gradingchangessaved'] = '更改的分數已經被儲存';
$string['gradingmethodpreview'] = '評分的判斷規準';
$string['gradingoptions'] = '選項';
$string['gradingstatus'] = '評分狀態';
$string['gradingstudent'] = '評分學生';
$string['gradingsummary'] = '作業評分狀況總結';
$string['grantextension'] = '寬延時間';
$string['grantextensionforusers'] = '為{$a}位學生寬延時間';
$string['groupsubmissionsettings'] = '群組繳交作業設定';
$string['hiddenuser'] = '參與者';
$string['hideshow'] = '隱藏/顯示';
$string['instructionfiles'] = '說明文件';
$string['invalidfloatforgrade'] = '該評分格式不對：{$a}';
$string['invalidgradeforscale'] = '所提供的分數對於目前等級不適用';
$string['lastmodifiedgrade'] = '最後修改（老師）';
$string['lastmodifiedsubmission'] = '最後修改（學生）';
$string['latesubmissions'] = '逾期的繳交作業';
$string['latesubmissionsaccepted'] = '只有被寬延繳交時間的學生，才可以繼續提交這作業';
$string['locksubmissionforstudent'] = '禁止該學生再次繳交作業：（id={$a->id},姓名={$a->fullname}）。';
$string['locksubmissions'] = '鎖定作業';
$string['manageassignfeedbackplugins'] = '管理作業回饋插件';
$string['manageassignsubmissionplugins'] = '管理作業提交插件';
$string['maxattempts'] = '最大提交次數';
$string['maxattempts_help'] = '學生所能繳交作業的最大數量。超過這個數字，學生的作業無法再開啟。';
$string['maxgrade'] = '最高分數';
$string['messageprovider:assign_notification'] = '作業通知';
$string['modulename'] = '作業';
$string['modulename_help'] = '作業活動模組允許老師給學生分配任務，收集作業，並且可以對作業評分和寫評語。

學生可以繳交任何數位內容（檔案），比如文字處理的文件、電子試算表、圖片或聲音和影片檔案。此外，或同時，作業還可以要求學生直接在文字編輯器裡輸入文字。

作業也可以用來提醒學生去做完全離線的"真實世界"中的作業，例如勞作作品，而不需要繳交任何數位內容。

在批閱作業時，老師可以寫評語，還可以上傳檔案，例如加了批改的學生作業、有評語或語音回饋的文件檔。

教師可以利用數字或自訂量尺，或更進階的方法如評分規程(rubric)對作業進行評分。最後的分數式記錄在成績簿(gradebook)中。';
$string['modulenameplural'] = '作業';
$string['mysubmission'] = '我的作業：';
$string['newsubmissions'] = '作業已繳交';
$string['noattempt'] = '沒有繳交作業';
$string['nofiles'] = '沒有檔案。';
$string['nograde'] = '沒有成績。';
$string['nolatesubmissions'] = '沒有再收到遲交的作業。';
$string['nomoresubmissionsaccepted'] = '沒有再收到更多的作業。';
$string['noonlinesubmissions'] = '這個作業不需要您在網路上繳交任何東西';
$string['nosavebutnext'] = '往後';
$string['nosubmission'] = '這個作業還沒有繳交任何東西';
$string['nosubmissionsacceptedafter'] = '作業繳交期限為';
$string['notgraded'] = '尚未評分';
$string['notgradedyet'] = '尚未評分';
$string['notifications'] = '通知';
$string['notsubmittedyet'] = '尚未繳交作業';
$string['nousersselected'] = '沒有用戶被選出';
$string['numberofdraftsubmissions'] = '草稿';
$string['numberofparticipants'] = '參與人數';
$string['numberofsubmissionsneedgrading'] = '需要評分';
$string['numberofsubmittedassignments'] = '繳交';
$string['numberofteams'] = '群組';
$string['offline'] = '不需要在線上繳交';
$string['open'] = '打開';
$string['outlinegrade'] = '分數:{$a}';
$string['outof'] = '{$a->總數}之{$a->目前數量}';
$string['overdue'] = '<font color="red">作業截止日期：{$a}</font>';
$string['page-mod-assign-view'] = '作業模組首頁';
$string['page-mod-assign-x'] = '任意作業模組頁面';
$string['participant'] = '參與者';
$string['pluginadministration'] = '作業管理';
$string['pluginname'] = '作業';
$string['preventsubmissions'] = '禁止用戶繼續繳交這一作業';
$string['preventsubmissionsshort'] = '禁止變更作業';
$string['previous'] = '向前';
$string['quickgrading'] = '快速評分模式';
$string['quickgradingchangessaved'] = '評分結果已經儲存';
$string['quickgrading_help'] = '快速評分模式允許您直接在作業列表後面對每個學生進行評分。快速評分與進階評分不相容，當需要多項反應評價學生時，不推薦使用此評分方式。';
$string['quickgradingresult'] = '快速評分';
$string['recordid'] = '識別碼';
$string['requireallteammemberssubmit'] = '要求所有群組成員都要繳交';
$string['requireallteammemberssubmit_help'] = '如果啟用，學生組的所有成員都必須點擊“提交”按鈕，這項任務將被視為提交前組提交。如果禁用，組提交將被視為學生組的任何成員點擊“提交”按鈕提交。';
$string['requiresubmissionstatement'] = '要求學生接受繳交作業的聲明';
$string['revealidentities'] = '揭示學生身份';
$string['revealidentitiesconfirm'] = '您確定要在此項作業公開學生姓名?此項操作將無法取消。且，一旦公開學生姓名將無法復原，分數將出現在分數欄內。';
$string['reverttodraft'] = '退回為草稿狀態。';
$string['reverttodraftforstudent'] = '將該學生的作業退回到草稿狀態：（學生ID={$a->id}，姓名={$a->fullname}）。';
$string['reverttodraftshort'] = '退回到草稿';
$string['reviewed'] = '已檢視的';
$string['saveallquickgradingchanges'] = '儲存所有快速評分修改結果';
$string['savechanges'] = '儲存更改';
$string['savegradingresult'] = '分數';
$string['savenext'] = '儲存並顯示下一個';
$string['scale'] = '量尺';
$string['selectlink'] = '選擇...';
$string['selectuser'] = '選擇{$a}';
$string['sendlatenotifications'] = '遲交時通知評分人';
$string['sendlatenotifications_help'] = '如果啟用這項，評分人（通嘗試老師）會在學生遲交作業時收到一個訊息。訊息的發送方式可以設定。';
$string['sendnotifications'] = '學生交作業時通知評分人';
$string['sendnotifications_help'] = '如果此項選擇了是，則評分人(通常是老師）會在學生傳送作業時收到一條通知訊息，不管他是提前、和還是遲交作業均會收到。消息傳送方式可以在管理功能裡面設定。';
$string['sendstudentnotifications'] = '通知學生';
$string['sendstudentnotifications_help'] = '若啟用，學生會收到有關更新分數或回饋的簡訊。';
$string['sendsubmissionreceipts'] = '發送提交收據給學生';
$string['sendsubmissionreceipts_help'] = '若啟用，將會對學生發給收據。每次學生成功地提交一份作業，他就會經由電子郵件收到一個通知。';
$string['settings'] = '作業設定';
$string['showrecentsubmissions'] = '顯示最近的作業';
$string['submission'] = '繳交';
$string['submissioncopiedhtml'] = '你已複製了您先前繳交的作業給<i>{$a->assignment}</i>\'.</p>
<p>，你可以看到你的<a href="{$a->url}">assignment submission</a>.</p>的狀態。';
$string['submissioncopiedsmall'] = '你拷貝了你先前繳交的作業{$a->assignment}';
$string['submissioncopiedtext'] = '你已複製了您先前繳交的作業給{$a->assignment}\'，你可以在{$a->url}看到你繳交作業的狀態。';
$string['submissiondrafts'] = '學生必須點選繳交按鈕';
$string['submissiondrafts_help'] = '如果啟用，學生將需要點及繳交按鈕來聲明他們繳交的是最後版本。這樣學生也就可以在系統儲存作業的草稿。如果在學生已經繳交作業後，該設定從"否"變更為"是"，那麼這些作業會被視為最後版本。';
$string['submissioneditable'] = '學生可以編輯這一繳交的作業';
$string['submissionempty'] = '沒有提交任何東西';
$string['submissionnotcopiedinvalidstatus'] = '這提交的作業沒有被複製，因為在重新開放之前，它已經被編輯過了。';
$string['submissionnoteditable'] = '學生無法編輯這一繳交的作業';
$string['submissionnotready'] = '此作業還沒有做好接受繳交準備：';
$string['submissionplugins'] = '提交插件';
$string['submissionreceipthtml'] = '您已經傳送了作業“<i>{$a->assignment}</i>”<br /><br />
您可以檢視<a href="{$a->url}">作業</a>狀態。';
$string['submissionreceipts'] = '傳送作業回條';
$string['submissionreceiptsmall'] = '您已經向 {$a->assignment} 繳交了作業';
$string['submissionreceipttext'] = '您已經繳交作業“{$a->assignment}”

您可以瀏覽作業狀態：

   {$a->url}';
$string['submissions'] = '繳交';
$string['submissionsclosed'] = '繳交已經關閉';
$string['submissionsettings'] = '繳交設定';
$string['submissionslocked'] = '此作業不接受繳交';
$string['submissionslockedshort'] = '不允許更改繳交';
$string['submissionsnotgraded'] = '繳交尚未評分：{$a}';
$string['submissionstatement'] = '提交作業的聲明';
$string['submissionstatementacceptedlog'] = '用戶{$a}已經接受作業繳交的聲明';
$string['submissionstatementdefault'] = '這一作業，除了我有註明是引注他人作品之外，都是我自己寫的。';
$string['submissionstatement_help'] = '作業提交確認聲明';
$string['submissionstatus'] = '繳交狀態';
$string['submissionstatus_'] = '尚未繳交';
$string['submissionstatus_draft'] = '草稿（尚未繳交）';
$string['submissionstatusheading'] = '作業繳交狀態';
$string['submissionstatus_marked'] = '已評分';
$string['submissionstatus_new'] = '新的繳交';
$string['submissionstatus_reopened'] = '已經重新開啟';
$string['submissionstatus_submitted'] = '已經繳交等待評分';
$string['submissionsummary'] = '{$a->status}。最後修改時間: {$a->timemodified}';
$string['submissionteam'] = '群組';
$string['submissiontypes'] = '繳交作業類型';
$string['submitaction'] = '傳送';
$string['submitassignment'] = '繳交作業';
$string['submitassignment_help'] = '一旦這作業提交出去，你將無法再做任何更改。';
$string['submitted'] = '已繳交';
$string['submittedearly'] = '作業{$a} 提早繳交';
$string['submittedlate'] = '作業{$a} 遲交';
$string['submittedlateshort'] = '{$a}之後';
$string['teamsubmission'] = '學生以小組方式提交作業';
$string['teamsubmissiongroupingid'] = '學生群組的分類';
$string['teamsubmissiongroupingid_help'] = '這是學生作業的分組方式。如果不設定，分組即會使用預設的方式。';
$string['teamsubmission_help'] = '若啟用，學生將會依據預設的群組或自訂的臨時分群被分派到不同群組中。一個團體的作業將會在群組成員中被分享，且這群組的每一成員都可看到其他人對這座業所做的更改。';
$string['teamsubmissionstatus'] = '群組繳交作業狀態';
$string['textinstructions'] = '作業說明';
$string['timemodified'] = '作業修改';
$string['timeremaining'] = '剩餘時間';
$string['unlimitedattempts'] = '無限制的';
$string['unlimitedattemptsallowed'] = '允許無限次數提交作業';
$string['unlocksubmissionforstudent'] = '允許學生提交：(id={$a->id}, fullname={$a->fullname})。';
$string['unlocksubmissions'] = '解除鎖定';
$string['updategrade'] = '更新分數';
$string['updatetable'] = '儲存並更新列表';
$string['upgradenotimplemented'] = '插件({$a->type} {$a->subtype})沒有被升級';
$string['userextensiondate'] = '寬延繳交日期到：{$a}';
$string['usergrade'] = '用戶分數';
$string['userswhoneedtosubmit'] = '需要提交作業的用戶：{$a}';
$string['viewfeedback'] = '瀏覽回應';
$string['viewfeedbackforuser'] = '察看給用戶回應：{$a}';
$string['viewfull'] = '查看完整的';
$string['viewfullgradingpage'] = '打開完整評分頁面來提供反饋';
$string['viewgradebook'] = '瀏覽成績單';
$string['viewgrading'] = '瀏覽/評分所有繳交的作業';
$string['viewgradingformforstudent'] = '瀏覽學生（id={$a->id}，全名={$a->fullname}）的評分頁面。';
$string['viewownsubmissionform'] = '瀏覽自己的繳交作業頁面。';
$string['viewownsubmissionstatus'] = '瀏覽自己的繳交狀態頁面。';
$string['viewrevealidentitiesconfirm'] = '查看揭示學生身份的確認頁面。';
$string['viewsubmission'] = '瀏覽繳交';
$string['viewsubmissionforuser'] = '瀏覽用戶的作業：{$a}';
$string['viewsubmissiongradingtable'] = '瀏覽作業評分表。';
$string['viewsummary'] = '查看摘要';
