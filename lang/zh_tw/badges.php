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
 * Strings for component 'badges', language 'zh_tw', branch 'MOODLE_25_STABLE'
 *
 * @package   badges
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '動作';
$string['activate'] = '啟用存取';
$string['activatesuccess'] = '存取微學程已經順利啟用';
$string['addbadgecriteria'] = '添加微學程判斷標準';
$string['addcourse'] = '添加課程';
$string['addcourse_help'] = '選出這一微學程所要求的所有課程。按下CTRL鍵可選擇多個項目。';
$string['addcriteria'] = '添加判斷規準';
$string['addcriteriatext'] = '要開始添加判斷規準，請從下拉選單中選擇一個選項。';
$string['addtobackpack'] = '添加到微學程';
$string['adminonly'] = '這一頁面能給給網站管理員使用';
$string['after'] = '在頒授的日期之後';
$string['aggregationmethod'] = '整合的方法';
$string['all'] = '全部';
$string['allmethod'] = '符合全部選出的條件';
$string['allmethodactivity'] = '完成全部選出的活動';
$string['allmethodcourseset'] = '完成全部選出的課程';
$string['allmethodmanual'] = '授與微學程給所有選出的角色';
$string['allmethodprofile'] = '所有選出的個人資料表欄位都有填寫';
$string['allowcoursebadges'] = '啟用課程微學程';
$string['allowcoursebadges_desc'] = '允許在課程處境中，建立並頒授微學程';
$string['allowexternalbackpack'] = '啟用到外部微學程的連結';
$string['allowexternalbackpack_desc'] = '允許用戶設定連接並顯示來自外部微學程提供者的微學程。

注意：如果這網站無法連上網際網路(比如因為防火牆)，建議讓這選項維持關閉狀態。';
$string['any'] = '任何';
$string['anymethod'] = '符合任合選出的條件';
$string['anymethodactivity'] = '完成任何選出的活動';
$string['anymethodcourseset'] = '完成任何選出的課程';
$string['anymethodmanual'] = '對選出的角色授予微學程';
$string['anymethodprofile'] = '完成任何選出的個人資料表欄位';
$string['attachment'] = '在訊息上附加上微學程';
$string['attachment_help'] = '若勾選，一個頒發的微學程將會附加在收件者的email上以便下載。';
$string['award'] = '授與微學程';
$string['awardedtoyou'] = '頒發給我';
$string['awardoncron'] = '這一微學程的存取功能已經成功啟用。由於有太多用戶可以立即贏得這一微學程，為確保網站的效能，這一頒發動作將花一些時間來處理。';
$string['awards'] = '收件者';
$string['backpackavailability'] = '外部微學程驗證';
$string['backpackavailability_help'] = '為了讓微學程收件者能證明他們從您那邊贏得他們的微學程，一個外部微學程服務應該能夠存取您的網站並驗證從它頒授的微學程。 您的網站目前似乎無法存取，這表示說您已經頒發的微學程和未來將頒發的微學程都無法驗證。

##為何我會看到此一訊息?

它可能是您的防火牆阻止您的網路之外的用戶存取，或您的網站有密碼保護，或您把網站架在無法連上網際網路的電腦上(比如區域網路)

##這是個麻煩問題嗎?

在您計畫要頒授微學程的網站上，你應該修復這一問題。否則收件者將無法證明他們是從您那邊贏得他們的微學程。若您的網站還沒正式啟用，那您可以建立並頒授測試用微學程來檢視網站的可取用性。

##若我無法讓我的網站公開存取，我該怎麼辦？

為了驗證，唯一需要的網址是 [your-site-url]/badges/assertion.php ] ，因此若您能修改您的防火牆，已允許外部存取這個檔案，那微學程的驗證仍然可以進行。';
$string['backpackbadges'] = '您有來自{$a->totalcollections} 的 {$a->totalbadges} 個微學程被顯示出來。<a href="mybackpack.php">更改微學程設定</a>。';
$string['backpackconnection'] = '微學程連接';
$string['backpackconnection_help'] = '這一頁允許您設定連接到一個外部微學程提供者。連接到一個微學程讓你可以在這網站上顯示外部的微學程，必把在此贏得的微學程放到你的微學程。

目前只有支援<a href="http://backpack.openbadges.org">Mozilla 開放微學程微學程</a> 。你需要先註冊微學程服務，才可以在這一頁設定微學程連結。';
$string['backpackdetails'] = '微學程設定';
$string['backpackemail'] = 'email 地址';
$string['backpackemail_help'] = '這一email地址關連到你的微學程。當你被連接時，任何在這網站贏得的微學程，將會與這email地址相關聯。';
$string['backpackimport'] = '微學程匯入設定';
$string['backpackimport_help'] = '在成功建立微學程連結之後，來自您的微學程的微學程可以顯示在您的"我的微學程"頁面和您的個人資料頁面。

在這一區域，你可以從您的微學程選擇微學程的蒐藏庫，以顯示在您的個人資料頁。';
$string['badgedetails'] = '微學程細節';
$string['badgeimage'] = '微學程圖樣';
$string['badgeimage_help'] = '這是代表這一微學程的圖像。

要添加一個新圖像，瀏覽並選出一個圖像(JPG 或PNG格式)，然後點選 "儲存更改"。這圖像將會被裁剪成正方形並縮放以符合微學程圖像的要求。';
$string['badgeprivacysetting'] = '微學程隱私設定';
$string['badgeprivacysetting_help'] = '您贏得的微學程可以顯示在您的個人資料頁上。這一設定讓您自動設定新贏得微學程的可見度。

您仍然可以在您的"我的微學程"頁面中控制個別微學程的隱私設定。';
$string['badgeprivacysetting_str'] = '自動在我的個人資料頁上顯示我獲得的微學程';
$string['badgesalt'] = '添加在收件人地址中的密碼';
$string['badgesalt_desc'] = '使用添加密碼，可以讓微學程服務去確認微學程得獎人，而不需要暴露他們的email地址。這一設定只允許使用數字和英文字母。

注意：為了收件者驗證的目的，一旦你開始頒發微學程，就不可以更改這一設定。';
$string['badgesdisabled'] = '這一網站尚未啟用微學程功能';
$string['badgesearned'] = '贏得的微學程數：{$a}';
$string['badgesettings'] = '微學程設定';
$string['badgestatus_0'] = '用戶不可以使用';
$string['badgestatus_1'] = '用戶可以使用';
$string['badgestatus_2'] = '用戶不可以使用';
$string['badgestatus_3'] = '用戶可以使用';
$string['badgestatus_4'] = '存檔';
$string['badgestoearn'] = '可用的微學程數量: {$a}';
$string['badgesview'] = '課程微學程';
$string['badgeurl'] = '已頒發微學程的鏈結';
$string['bawards'] = '收件人（{$a}）';
$string['bcriteria'] = '判斷規準';
$string['bdetails'] = '編輯細節';
$string['bmessage'] = '訊息';
$string['boverview'] = '綜覽';
$string['bydate'] = '完成於';
$string['clearsettings'] = '清除設定';
$string['completioninfo'] = '頒發這微學程是因為完成:';
$string['completionnotenabled'] = '這一課程沒有啟用"課程完成"功能，因此它不能作為頒發微學程的判斷規準。你可以在課程設定中啟用"課程完成"功能。';
$string['configenablebadges'] = '若啟用，這一功能能讓你創建微學程並它們用來獎勵網站用戶。';
$string['configuremessage'] = '微學程訊息';
$string['connect'] = '連結';
$string['connected'] = '已經連結';
$string['connecting'] = '連接中...';
$string['contact'] = '聯絡';
$string['contact_help'] = '微學程頒發者的電子郵件地址';
$string['copyof'] = '{$a}複製品';
$string['coursebadges'] = '微學程';
$string['coursebadgesdisabled'] = '在這網站並未啟用課程微學程';
$string['coursecompletion'] = '用戶必須完成這一課程';
$string['create'] = '新微學程';
$string['createbutton'] = '建立微學程';
$string['creatorbody'] = '<p>{$a->user} 已經完成微學程所要求的條件，並已經被頒授微學程。請在 {$a->link}檢視獲得的微學程 。</p>';
$string['creatorsubject'] = '\'{$a}\' 已經被獎勵!';
$string['criteria_0'] = '這一微學程是用來獎勵...';
$string['criteria_1'] = '完成活動';
$string['criteria_1_help'] = '允許頒發微學程給在一課程中完成一組活動的客戶。';
$string['criteria_2'] = '依據角色手動頒發';
$string['criteria_2_help'] = '允許手動頒發微學程給在這網站或課程中有特殊角色的用戶。';
$string['criteria_3'] = '社會參與';
$string['criteria_3_help'] = '社交';
$string['criteria_4'] = '完成課程';
$string['criteria_4_help'] = '允許頒發微學程給完成這課程的用戶。這判斷規準可以加上附帶條件，例如，最低分數或課程完成日期。';
$string['criteria_5'] = '完成一組課程';
$string['criteria_5_help'] = '允許頒發微學程給完成一組課程的用戶。每一課程可以加上附帶條件，例如，最低分數或課程完成日期。';
$string['criteria_6'] = '完成個人資料表';
$string['criteria_6_help'] = '允許頒發微學程給有填寫個人資料表上特定欄位的用戶。你可以從預設和自訂的個人資料表欄位上選擇。';
$string['criteriacreated'] = '已成功建立微學程判斷規準';
$string['criteriadeleted'] = '已成功刪除微學程判斷規準';
$string['criteria_descr'] = '已成功刪除微學程判斷規準';
$string['criteria_descr_0'] = '用戶若完成<strong>{$a}</strong>個列表中的條件，即可獲頒這一微學程。';
$string['criteria_descr_1'] = '已經完成<strong>{$a}</strong>個下列活動：';
$string['criteria_descr_2'] = '這微學程已經頒發給有<strong>{$a}</strong> 角色的用戶，
有下列角色：';
$string['criteria_descr_4'] = '用戶必須完成這課程';
$string['criteria_descr_5'] = '必須至少完成<strong>{$a}</strong>個下列課程：';
$string['criteria_descr_6'] = '必須至少完成<strong>{$a}</strong>個下列用戶資料表欄位：';
$string['criteria_descr_bydate'] = '於日期<em>{$a}</em>';
$string['criteria_descr_grade'] = '要達到最低成績 <em>{$a}</em>';
$string['criteria_descr_short0'] = '完成 <strong>{$a}</strong> 個，共有：';
$string['criteria_descr_short1'] = '完成 <strong>{$a}</strong> 個，共有：';
$string['criteria_descr_short2'] = '頒獎者： <strong>{$a}</strong> 於:';
$string['criteria_descr_short4'] = '完成這課程';
$string['criteria_descr_short5'] = '完成<strong>{$a}</strong> 的：';
$string['criteria_descr_short6'] = '完成<strong>{$a}</strong> 的：';
$string['criteria_descr_single_1'] = '必須完成下列活動：';
$string['criteria_descr_single_2'] = '這一微學程必須頒授給有下列角色的用戶：';
$string['criteria_descr_single_4'] = '用戶必須完成這一課程';
$string['criteria_descr_single_5'] = '必須完成下列課程：';
$string['criteria_descr_single_6'] = '必須完成下列用戶資料欄位：';
$string['criteria_descr_single_short1'] = '完成：';
$string['criteria_descr_single_short2'] = '頒獎者：';
$string['criteria_descr_single_short4'] = '完成這課程';
$string['criteria_descr_single_short5'] = '完成：';
$string['criteria_descr_single_short6'] = '完成：';
$string['criteriasummary'] = '判斷規準摘要';
$string['criteriaupdated'] = '已成功更新微學程判斷規準';
$string['criterror'] = '當前附加條件問題';
$string['criterror_help'] = '這一欄位設定顯示所有當初加到微學程要求條件的附加條件，但是現在已經不再可以使用了。

建議您取消這些附加條件，以確保用戶未來可以贏得這一微學程。';
$string['currentimage'] = '當前圖像';
$string['currentstatus'] = '當前狀態：';
$string['dateawarded'] = '頒發的日期';
$string['dateearned'] = '日期：{$a}';
$string['day'] = '日';
$string['deactivate'] = '關閉存取';
$string['deactivatesuccess'] = '存取微學程的功能已經順利關閉';
$string['defaultissuercontact'] = '預設的微學程頒發單位聯絡細節';
$string['defaultissuercontact_desc'] = '微學程頒發單位的email地址';
$string['defaultissuername'] = '預設的微學程頒發單位名稱';
$string['defaultissuername_desc'] = '頒發微學程的單位或機構名稱';
$string['delbadge'] = '刪除微學程';
$string['delconfirm'] = '你確定你要刪除微學程"{$a}"嗎?';
$string['delcritconfirm'] = '你確定你要刪除這一判斷規準嗎?';
$string['delparamconfirm'] = '你確定你要刪除這一附加條件？';
$string['description'] = '說明';
$string['disconnect'] = '中斷連結';
$string['donotaward'] = '目前這一微學程還未被啟用，因此無法頒發給用戶，若你想要頒發這微學程，起把它的狀態設定為啟用。';
$string['editsettings'] = '編輯設定';
$string['enablebadges'] = '啟用微學程';
$string['error:backpackdatainvalid'] = '從微學程回傳的資料是無效的';
$string['error:backpackemailnotfound'] = '這一 email \'{$a}\' 與微學程無關聯。你需要位這一帳號  <a href="http://backpack.openbadges.org">建立一微學程</a> 或用另一個 email 位址登入。';
$string['error:backpackloginfailed'] = '您不能連接到一外部微學程，因為下列理由：{$a}';
$string['error:backpacknotavailable'] = '你的網站無法從網際網路存取，因此從這網站頒發的任何微學程都無法由外部微學程服務驗證。';
$string['error:backpackproblem'] = '現在無法連接上你的微學程服務提供者。請稍後再試。';
$string['error:badjson'] = '這連接企圖回傳無效的資料';
$string['error:cannotact'] = '無法啟用這個微學程';
$string['error:cannotawardbadge'] = '無法授予微學程給用戶';
$string['error:clone'] = '無法複製這微學程';
$string['error:connectionunknownreason'] = '這連接未成功，但沒有說明原因';
$string['error:duplicatename'] = '在這系統中已經存有這一名稱的微學程';
$string['error:externalbadgedoesntexist'] = '沒發現微學程';
$string['error:guestuseraccess'] = '你現在是以訪客身分來使用穩站，要看到微學程，你需要使用你的帳號登入';
$string['error:invalidbadgeurl'] = '微學程頒授者的網址格式無效';
$string['error:invalidcriteriatype'] = '無效的判斷規準類型';
$string['error:invalidexpiredate'] = '失效日期必須設定在未來';
$string['error:invalidexpireperiod'] = '失效期限不可以設定為負數或0';
$string['error:noactivities'] = '在這一課程中沒有啟用活動的完成判斷規準';
$string['error:noassertion'] = '沒有獲得肯定的回覆。你可能在完成登入過程之前關閉了對話。';
$string['error:nocourses'] = '在這網站上沒有任何課程啟用課程完成記錄功能，所以無法顯示。你可以在課程設定中啟用課程完成紀錄功能。';
$string['error:nogroups'] = '<p>在您的微學程裡，沒有公開的微學程蒐藏庫。</p>

<p>只有公開的蒐藏庫會被顯示，所以<a href="http://backpack.openbadges.org">請訪視您的微學程</a>來建立一些公開的蒐藏庫。</p>';
$string['error:nopermissiontoview'] = '你沒被授權去看微學程收件者';
$string['error:nosuchbadge'] = '編號{$a}的微學程並不存在';
$string['error:nosuchcourse'] = '警告：這一課程已經無法使用';
$string['error:nosuchfield'] = '警告：這一用戶資料表欄位已經無法使用';
$string['error:nosuchmod'] = '警告：這一活動已經無法使用';
$string['error:nosuchrole'] = '警告：這一角色已經無法使用';
$string['error:nosuchuser'] = '有這一email地址的用戶在當前的微學程提供者中沒有帳號。';
$string['error:notifycoursedate'] = '警告：需要完成課程和活動才頒授的微學程，在課程開始日期之前無法頒發。';
$string['error:parameter'] = '警告：至少要選出一個附加條件以確保正確的微學程頒授流程。';
$string['error:personaneedsjs'] = '目前需要Javascript 來連結到您的被包。若可以，請請啟動Javascript 並重新裝載此頁。';
$string['error:requesterror'] = '這連接的請求失敗(錯誤代碼{$a})';
$string['error:requesttimeout'] = '這連接的請求，在他完成之前已超過時間';
$string['error:save'] = '無法儲存這微學程';
$string['error:userdeleted'] = '{$a->user} (這一用戶已經不存在 {$a->site})';
$string['evidence'] = '證據';
$string['existingrecipients'] = '現有微學程的收件人';
$string['expired'] = '已經失效';
$string['expiredate'] = '這微學程在{$a}失效';
$string['expireddate'] = '這微學程已經在{$a}過期失效';
$string['expireperiod'] = '這一微學程在頒授後{$a}天失效。';
$string['expireperiodh'] = '這一微學程在頒授後{$a}小時失效。';
$string['expireperiodm'] = '這一微學程在頒授後{$a}分鐘失效。';
$string['expireperiods'] = '這一微學程在頒授後{$a}秒失效。';
$string['expirydate'] = '失效日期';
$string['expirydate_help'] = '你可自行決定，讓微學程到一指定日期即失效，或是微學程頒發給用戶多久之後即失效。';
$string['externalbadges'] = '我的來自其他網站的微學程';
$string['externalbadges_help'] = '這一區域用來展示來自你外部微學程的微學程';
$string['externalbadgesp'] = '來自其他網站的微學程:';
$string['externalconnectto'] = '為了要顯示外來的微學程，你需要<a href="{$a}">連接到一微學程</a>';
$string['fixed'] = '固定的日期';
$string['hidden'] = '隱藏';
$string['hiddenbadge'] = '很抱歉，這微學程的擁有者沒有提供這一資訊';
/*elaine $string['issuancedetails'] = '微學程到期';*/
$string['issuedbadge'] = '頒授微學程的訊息';
/*elaine $string['issuerdetails'] = '頒授者細節';*/
$string['issuername'] = '頒授者的姓名';
$string['issuername_help'] = '頒授機關或主管的名稱';
$string['issuerurl'] = '頒授者的網址';
$string['localbadges'] = '我的來自{$a}網站的微學程';
$string['localbadgesh'] = '我的來自這一網站的微學程';
$string['localbadgesh_help'] = '你可以透過完成課程、完成課程活動、或完成其他要求，而在這網站上獲得微學程。

你可以藉由讓它們在你的個人資料頁上公開或隱藏，來管理你的微學程。

你可以下載全部微學程或逐一下載，並儲存在你自己的電腦上。下載的微學程可以被添加到你的外部微學程服務。';
$string['localbadgesp'] = '微學程來自{$a}：';
$string['localconnectto'] = '若要分享這網站以外的微學程，你需要<a href="{$a}">連接到一微學程</a>';
$string['makeprivate'] = '對外隱藏';
$string['makepublic'] = '對外公開';
$string['managebadges'] = '管理微學程';
$string['message'] = '訊息主文';
$string['messagebody'] = '<p>你已經被頒授一個微學程 "%badgename%"!</p>
<p>有關這微學程的詳細訊息，請看 %badgelink%.</p>
<p>如果沒有微學程附加在這email上，你可以從{$a} 頁面管理和下載它。</p>';
$string['messagesubject'] = '恭喜! 您剛贏得一個微學程!';
$string['method'] = '這一判斷規準已完成，當...';
$string['mingrade'] = '需要的最低成績';
$string['month'] = '月';
$string['mybackpack'] = '我的微學程設定';
$string['mybadges'] = '我的微學程';
/*elaine $string['never'] = '從不';*/
$string['newbadge'] = '添加一新微學程';
/*elaine $string['newimage'] = '新圖像';*/
$string['noawards'] = '還沒有人贏得這一微學程';
$string['nobackpack'] = '這裡沒有微學程服務連接到這一帳號<br/>';
$string['nobackpackbadges'] = '在你選出的蒐藏中沒有微學程。<a href="mybackpack.php">添加更多蒐藏</a>。';
$string['nobackpackcollections'] = '沒有選出微學程蒐藏。<a href="mybackpack.php">添加蒐藏</a>。';
$string['nobadges'] = '這裡沒有可用的微學程';
$string['nocriteria'] = '這一微學程的判斷規準還沒有設定';
$string['noexpiry'] = '這一微學程沒有定失效日期';
$string['noparamstoadd'] = '這裡沒有附加條件可以加到這一微學程的要求條件中。';
$string['notacceptedrole'] = '您目前的角色不在可以手動頒發這微學程的角色中。<br/>
若您要看有誰已經贏得這一微學程您可以到{$a}頁面。';
$string['notconnected'] = '沒有連結上';
$string['nothingtoadd'] = '這兒沒有可用的判斷規準可以添加';
$string['notification'] = '通知微學程的創造者';
$string['notification_help'] = '這一設定用來控制要如何通知微學程創造者，讓他們知道有多少微學程頒授出去。

有五個選項可以使用:

* **從不**
* **每一次**
* **每天**
* **每週**
* **每月**';
$string['notifydaily'] = '每日';
$string['notifyevery'] = '每次';
$string['notifymonthly'] = '每月';
$string['notifyweekly'] = '每週';
$string['numawards'] = '這一微學程一經頒發給 <a href="{$a->link}">{$a->count}</a> 位用戶。';
$string['numawardstat'] = '這一微學程已經頒授給{$a}位用戶。';
$string['overallcrit'] = '選出的判斷規準已完成。';
$string['personaconnection'] = '用你的email登入';
$string['personaconnection_help'] = 'Persona 是一個使用您擁有的Email地址來在不同網站中證明你自己的系統。這 Open Badges backpack使用 Persona 最為登入系統，因此為了要連接到一微學程，您需要一個 Persona 帳號。

要知道更多Persona，請訪問 <a href="https://login.persona.org/about">https://login.persona.org/about</a>。';
$string['potentialrecipients'] = '可能的微學程收件者';
$string['recipientdetails'] = '收件者細節';
$string['recipientidentificationproblem'] = '在現有的用戶中，無法找到這一微學程的收件人。';
$string['recipients'] = '微學程收件者';
$string['recipientvalidationproblem'] = '當前用戶無法驗證是否為這一微學程的收件人';
/*$string['relative'] = '相對日期';*/
$string['requiredcourse'] = '至少要添加一個課程到課程組合的判斷規準。';
$string['reviewbadge'] = '變更微學程的存取狀態';
$string['reviewconfirm'] = '<p>這將讓用戶看到你的微學程，並讓他們開始贏得它 </p>

<p>可能有些用戶已經符合這微學程的判斷規準，並在您啟用它之後立即獲頒微學程</p>

<p>一旦有微學程被般發出去，它將會被<strong> 鎖定</strong> ---某些設定，包括判斷規準和失效日期都無法再更改。
</p>

<p>你確定你要啟用這微學程"{$a}"的存取嗎？</p>';
$string['save'] = '儲存';
$string['searchname'] = '用名稱搜尋';
$string['selectaward'] = '請選擇你要使用來頒授這微學程的角色';
$string['selectgroup_end'] = '只有公開的蒐藏庫會被顯示，<a href="http://backpack.openbadges.org">訪視您的微學程</a>來建立更多蒐藏庫。';
$string['selectgroup_start'] = '從你的微學程選出蒐藏庫來顯示在這一網站';
$string['selecting'] = '和選出的微學程...';
$string['setup'] = '設定連接';
$string['signinwithyouremail'] = '以您的email註冊';
$string['sitebadges'] = '網站微學程';
$string['sitebadges_help'] = '網站微學程只可以因網站有關的活動而頒授給用戶。這包括完成一組課程或部分的個人資料表。網站微學程也可以用手動方式由一個用戶到另一個用戶。

課程相關活動的微學程必須在課程層次建立，課程微學程可以在"課程管理 > 微學程"之下找到。';
$string['status'] = '微學程狀態';
$string['status_help'] = '微學程的狀態會決定它在這系統裡的動作：

* **可用的** -- 表示用戶可以贏得這一微學程，一旦微學程可以頒授給用戶，它的判斷規準就不能被修改了。

* **無法使用** -- 表示這微學程還無法被贏得或人工的頒授。如果這一微學程以前從未頒授過，那它的判斷規準還可以被更改。

一個微學程一旦被頒授過，它會自動被**鎖住**，被鎖住的微學程還可以繼續頒發，但是它的判斷規準就不再可以更改。如果你需要修改一個被鎖住的微學程的細節或判斷規準，你可以複製這一微學程，然後作所有需要的修改。';
$string['statusmessage_0'] = '這一微學程目前用戶無法取用。若您要讓用戶可以贏得這一微學程，請啟動存取功能。';
$string['statusmessage_1'] = '這一微學程目前用戶可以取用。請關閉存取功能來做更改。';
$string['statusmessage_2'] = '這一微學程目前用戶無法取用，且它的判斷規準已被鎖定。若您要讓用戶可以贏得這一微學程，請啟動存取功能。';
$string['statusmessage_3'] = '這一微學程現在用戶已經可以使用，且它的判斷規準已經鎖定。';
$string['statusmessage_4'] = '這一微學程目前已被存檔';
$string['subject'] = '訊息主旨';
$string['variablesubstitution'] = '訊息中可替換的變項';
$string['variablesubstitution_help'] = '在微學程訊息中，可在訊息的主旨或內文中插入特定的變項，這樣在訊息送出時會替換成真實的資料。這些變項包括下面：


%badgename%
:   將替換成微學程的完整名稱。

%username%
:   將替換成收件者的全名。

%badgelink%
:  將替換成公開的網址，裡面有這頒授微學程的訊息。';
$string['viewbadge'] = '檢視頒授的微學程';
$string['visible'] = '可見的';
$string['warnexpired'] = '(這一微學程已經過期失效！)';
$string['year'] = '年';

/*elaine */
$string['issuerdetails'] = '發行者資訊';
$string['issuancedetails'] = '有效期限';
$string['never'] = '永久有效';
$string['relative'] = '相對日期';

$string['newimage'] = '變更圖像';

$string['summary'] = '簡介';     
$string['badgeteacher'] = '授課教師';
$string['badgelearnmap'] = '學習地圖';
$string['badgecontent'] = '內容';
$string['badgeability'] = '先修科目或先備能力';
$string['badgeqna'] = '常見問答';
$string['badgememo'] = '備註';

$string['missingsummary'] = '缺少了微學程簡介';
$string['missingability'] = '缺少了先修科目或先備能力';
$string['missinglearnmap'] = '缺少了學習地圖';