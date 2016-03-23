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
 * Strings for component 'feedback', language 'zh_tw', branch 'MOODLE_25_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = '新增問題到問卷中';
$string['add_pagebreak'] = '新增一個分頁符號';
$string['adjustment'] = '調整';
$string['after_submit'] = '在提交之後';
$string['allowfullanonymous'] = '允許完全匿名';
$string['analysis'] = '分析問卷';
$string['anonymous'] = '匿名';
$string['anonymous_edit'] = '記錄使用者名稱';
$string['anonymous_entries'] = '匿名輸入';
$string['anonymous_user'] = '匿名使用者';
$string['append_new_items'] = '附加新的項目';
$string['autonumbering'] = '每一個問題自動編號';
$string['autonumbering_help'] = '啟用或關閉每一問題的自動編號';
$string['average'] = '平均數';
$string['bold'] = '粗體';
$string['cancel_moving'] = '取消移動';
$string['cannotmapfeedback'] = '資料庫問題，無法把回饋對應到課程';
$string['cannotsavetempl'] = '不允許儲存樣版';
$string['cannotunmap'] = '資料庫問題，無法取消對應';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha 沒有被設定';
$string['check'] = '選擇題 - 複選';
$string['checkbox'] = '選擇題 - 複選 (核取方塊)';
$string['check_values'] = '可能的回應';
$string['choosefile'] = '第一步:選擇檔案';
$string['chosen_feedback_response'] = '選擇回饋回應';
$string['completed'] = '完成';
$string['completed_feedbacks'] = '已回答';
$string['complete_the_form'] = '填寫問卷...';
$string['completionsubmit'] = '若回饋已經提交，視為已經完成';
$string['configallowfullanonymous'] = '如果設定為是，那麼不需要登入就可以參與回應活動。這個選項只會影響到首頁的回應。';
$string['confirmdeleteentry'] = '您確定要刪除使用者的回應嗎？';
$string['confirmdeleteitem'] = '您確定要刪除這個項目嗎？';
$string['confirmdeletetemplate'] = '您確定要刪除這個樣版嗎？';
$string['confirmusetemplate'] = '您確定要使用這個樣版嗎？';
$string['continue_the_form'] = '繼續表單';
$string['count_of_nums'] = '計數';
$string['courseid'] = '課程識別編號';
$string['creating_templates'] = '儲存這些問題在新的樣版中';
$string['delete_entry'] = '刪除';
$string['delete_item'] = '刪除問題';
$string['delete_old_items'] = '刪除舊有項目';
$string['delete_template'] = '刪除樣版';
$string['delete_templates'] = '刪除樣版...';
$string['depending'] = '依賴性';
$string['depending_help'] = '依賴性使問題的顯示取決於對其他問題的回答。<br />
<strong>這裏有一個使用例子：</strong> <br /> <ul>
<li>首先創建一條其他問題要依賴的題。</li> <li>然後添加一個分頁符。</li>
<li>接著添加一條依賴於上面那道題的題。<br /> 在創建問題表單中的“依賴於問題”列表中選擇那道題，並將需要的值填入“依賴值”文本框中。</li> </ul>
<strong>試題結構應該像下面這樣：</strong>
<ol>
<li>問題：您有汽車嗎？回答：有/沒有</li>
<li>分頁符</li>
<li>問題：您的車是什麼顏色的？<br /> （此題當問題1選擇“有”時才顯示）</li>
<li>問題：您為什麼沒有車？<br /> （此題當問題1選擇“沒有”時才顯示）</li>
<li> ……其他問題</li>
</ol>';
$string['dependitem'] = '依賴項目';
$string['dependvalue'] = '依賴數值';
$string['description'] = '前言';
$string['do_not_analyse_empty_submits'] = '不要分析空白的提交';
$string['dropdown'] = '選擇題 - 單選 (下拉選單)';
$string['dropdownlist'] = '選擇題 - 單選 (下拉)';
$string['dropdownrated'] = '下拉選單 (評分)';
$string['dropdown_values'] = '回答';
$string['drop_feedback'] = '移除這個課程的表單';
$string['edit_item'] = '編輯問題';
$string['edit_items'] = '編輯問題...';
$string['email_notification'] = '啟用提交作業的email通知';
$string['email_notification_help'] = '若啟用，有問卷提交時，教師將會收到email通知';
$string['emailteachermail'] = '{$a->username} 已完成回饋活動 :
\'{$a->feedback} \'
您可以在這裡查看它:

 {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} 已完成回饋活動 :
<i>\'{$a->feedback}\'</i><br /><br />
您可以在 <a href="{$a->url}">這裡</a> 查看它.';
$string['entries_saved'] = '您的回答已經儲存， 感謝您。';
$string['export_questions'] = '匯出問卷';
$string['export_to_excel'] = '匯出到Excel';
$string['feedback:addinstance'] = '添加一新回饋';
$string['feedbackclose'] = '問卷關閉時間';
$string['feedback:complete'] = '完成問卷';
$string['feedback:createprivatetemplate'] = '建立私人的樣版';
$string['feedback:createpublictemplate'] = '建立公用的樣版';
$string['feedback:deletesubmissions'] = '刪除完成的提交';
$string['feedback:deletetemplate'] = '刪除樣版';
$string['feedback:edititems'] = '編輯項目';
$string['feedback_is_not_for_anonymous'] = '回饋不是給匿名者使用';
$string['feedback_is_not_open'] = '這個問卷還沒有開啟';
$string['feedback:mapcourse'] = '向全球的回饋繪製課程地圖';
$string['feedbackopen'] = '問卷開放時間';
$string['feedback:receivemail'] = '收到電子郵件通知';
$string['feedback:view'] = '檢視一個回饋';
$string['feedback:viewanalysepage'] = '在提交之後，檢視分析頁面';
$string['feedback:viewreports'] = '檢視報告';
$string['file'] = '檔案';
$string['filter_by_course'] = '課程過濾器';
$string['handling_error'] = '回饋模組處理時發生錯誤';
$string['hide_no_select_option'] = '隱藏這個"沒被選擇"選項';
$string['horizontal'] = '水平';
$string['importfromthisfile'] = '第二步:確定';
$string['import_questions'] = '匯入問卷';
$string['import_successfully'] = '匯入成功';
$string['info'] = '資訊';
$string['infotype'] = '資訊的類型';
$string['insufficient_responses'] = '回應不足夠';
$string['insufficient_responses_for_this_group'] = '不充足的回應';
$string['insufficient_responses_help'] = '這一群組沒有足夠的回應。

要保持回饋的匿名性，至少要有2個回應。';
$string['item_label'] = '標示';
$string['item_name'] = '問題';
$string['label'] = '標籤';
$string['line_values'] = '評分';
$string['mapcourse'] = '把回饋對應到課程';
$string['mapcourse_help'] = '預設狀況下，您在主要頁面建立的回應表單全站都可使用，並且會在所有用了回應區塊的課程中出現。您可以把回應表單設定成黏貼區塊來強制它出現，或者透過將它對應到指定的課程來限制此回應表單出現的課程。';
$string['mapcourseinfo'] = '這是一種適用於整個網站的問卷，它可藉由回饋區塊應用在所有課程上。

然而你可以限制那些課程要有回饋區塊。搜尋這課程並把它對應到這一問卷。';
$string['mapcoursenone'] = '沒有課程繪製地圖。對所有課程可供使用的回饋';
$string['mapcourses'] = '在課程中繪製回饋地圖';
$string['mapcourses_help'] = '如果您在搜尋中選擇的相關的課程，您可以使用對應課程將它們與本回應關連。按住Apple或ctrl按鈕點選課程名稱，可以選擇多個課程。任何時候都可以取消課程回應的關連。';
$string['mappedcourses'] = '繪製地圖課程';
$string['max_args_exceeded'] = 'Max 6個爭論能被處理，贊成的太多的意見';
$string['maximal'] = '最大的';
$string['messageprovider:message'] = '回饋提醒者';
$string['messageprovider:submission'] = '回饋通知';
$string['mode'] = '模式';
$string['modulename'] = '問卷';
$string['modulename_help'] = '啟用回應模組使老師能建立自訂的調查用於從課程參與者蒐集使用數個不同類型的問題來回應，包含多重選擇、yes/no選擇或者是文字輸入。

回應可以依據設定是否匿名化，而結果可以設定為是否只給老師觀看。人和回應活動在網站首頁也可以讓沒有登入的人填寫。

回應活動也可以用在

*改進課程，對於後來參與者增強課程內容。
*讓參與者能夠在課程模組中簽到
*.調查訪客選課意願。
*自動建立調查在學生中能
*在反霸凌調查中學生能匿名回應';
$string['modulenameplural'] = '問卷';
$string['movedown_item'] = '向下移動這個問題';
$string['move_here'] = '移到這裡';
$string['move_item'] = '移動這個問題';
$string['moveup_item'] = '向上移動這個問題';
$string['multichoice'] = '選擇題';
$string['multichoicerated'] = '選擇題(評分)';
$string['multichoicetype'] = '選擇題的樣式';
$string['multichoice_values'] = '選擇題的選項';
$string['multiplesubmit'] = '多重提交<br /><small>因為匿名的民意測驗允許無限擔保所有的使用者。<br/>對於使用者名稱被記錄的民意測驗允許使用者在那裡再提交回答。</small>';
$string['multiplesubmit_help'] = '若啟用，在匿名的調查上，用戶可以提交回饋無限多次。';
$string['name'] = '名稱';
$string['name_required'] = '要求輸入名稱';
$string['next_page'] = '下一頁';
$string['no_handler'] = '沒有行動管理者存在為了';
$string['no_itemlabel'] = '沒有標示';
$string['no_itemname'] = '沒有項目名稱';
$string['no_items_available_yet'] = '沒有問題目前已被建立';
$string['non_anonymous'] = '使用者的名稱將被記錄和顯示回答';
$string['non_anonymous_entries'] = '具名輸入';
$string['non_respondents_students'] = '沒有回應的學生';
$string['notavailable'] = '這一回饋無法使用';
$string['not_completed_yet'] = '目前未完成';
$string['no_templates_available_yet'] = '目前樣版不存在';
$string['not_selected'] = '點選適當的選項';
$string['not_started'] = '沒有開始';
$string['numeric'] = '數字答案';
$string['numeric_range_from'] = '範圍從';
$string['numeric_range_to'] = '範圍到';
$string['of'] = '屬於';
$string['oldvaluespreserved'] = '儲存所有舊的問題和設定值';
$string['oldvalueswillbedeleted'] = '刪除目前的問題和所有使用者的回應';
$string['only_one_captcha_allowed'] = '在一個回饋中，只允許有一個captcha';
$string['overview'] = '概要';
$string['page'] = '頁';
$string['page_after_submit'] = '完成後顯示的訊息';
$string['pagebreak'] = '分頁';
$string['page-mod-feedback-x'] = '任何回饋模組頁面';
$string['parameters_missing'] = '從遺失的參數';
$string['picture'] = '圖片';
$string['picture_file_list'] = '圖片清單';
$string['picture_values'] = '選擇一個或更多<br />來自清單的圖片檔案:';
$string['pluginadministration'] = '回饋管理';
$string['pluginname'] = '問卷';
$string['position'] = '位置';
$string['preview'] = '預覽';
$string['preview_help'] = '在預覽時，你可以改變這些問題的順序';
$string['previous_page'] = '上一頁';
$string['public'] = '公開樣版';
$string['question'] = '問題';
$string['questionandsubmission'] = '問題與提交的設定';
$string['questions'] = '問題';
$string['radio'] = '選擇題 - 單選';
$string['radiobutton'] = '選擇題 - 單選 (選項按鈕)';
$string['radiobutton_rated'] = '選項按鈕 (評分)';
$string['radiorated'] = '選項按鈕 (評分)';
$string['radio_values'] = '回應';
$string['ready_feedbacks'] = '準備好回饋';
$string['relateditemsdeleted'] = '刪除所有這個問題的所有使用者的回應';
$string['required'] = '必答';
$string['resetting_data'] = '重設回饋回應';
$string['resetting_feedbacks'] = '重新設定回饋';
$string['response_nr'] = '回應編號';
$string['responses'] = '回應';
$string['responsetime'] = '回應的時間';
$string['save_as_new_item'] = '另存為新問題';
$string['save_as_new_template'] = '儲存';
$string['save_entries'] = '送出並結束';
$string['save_item'] = '儲存';
$string['saving_failed'] = '儲存失敗';
$string['saving_failed_because_missing_or_false_values'] = '儲存失敗因為遺失或者錯誤值';
$string['search_course'] = '搜尋課程';
$string['searchcourses'] = '搜尋課程';
$string['searchcourses_help'] = '以代碼或課程名稱來搜尋你要加上這一回饋活動的課程';
$string['selected_dump'] = '選擇索引的 $SESSION 變數顯示下方:';
$string['send'] = '送出';
$string['send_message'] = '送出訊息';
$string['separator_decimal'] = '.';
$string['separator_thousand'] = ',';
$string['show_all'] = '全部顯示';
$string['show_analysepage_after_submit'] = '顯示分析頁面';
$string['show_entries'] = '顯示回應';
$string['show_entry'] = '顯示回應';
$string['show_nonrespondents'] = '顯示沒有回應的學生';
$string['site_after_submit'] = '完成後的網站';
$string['sort_by_course'] = '課程分類';
$string['start'] = '開始';
$string['started'] = '已經開始';
$string['stop'] = '結束';
$string['subject'] = '主旨';
$string['switch_group'] = '交換群組';
$string['switch_item_to_not_required'] = '轉換到: 不要求回答';
$string['switch_item_to_required'] = '轉換到: 要求回答';
$string['template'] = '樣版';
$string['templates'] = '樣版';
$string['template_saved'] = '儲存樣版';
$string['textarea'] = '問答題';
$string['textarea_height'] = '行數';
$string['textarea_width'] = '寬度';
$string['textfield'] = '簡答題';
$string['textfield_maxlength'] = '最多輸入多少字元';
$string['textfield_size'] = '文字框的寬度';
$string['there_are_no_settings_for_recaptcha'] = '這兒沒有針對captcha的設定';
$string['this_feedback_is_already_submitted'] = '您\'已經完成這種活動。';
$string['typemissing'] = '少了數值"類型"';
$string['update_item'] = '儲存';
$string['url_for_continue'] = '鏈結到下一活動';
$string['url_for_continue_help'] = '在提交問卷之後，會顯現一個繼續按鈕，它會鏈結的一個課程頁面。但是它也可以是鏈結到下一個活動，若你把這活動的網址輸入這裡。';
$string['use_one_line_for_each_value'] = '<br />一行只能有一個選項!<br />（選項和選項之間要換行）';
$string['use_this_template'] = '確定';
$string['using_templates'] = '使用樣版';
$string['vertical'] = '垂直';
$string['viewcompleted'] = '已經完成的回饋';
$string['viewcompleted_help'] = '你可以查看已經完成的回饋表單，它可以由課程和/或問題來搜尋。
回饋反應可以匯出成Excel檔。';
