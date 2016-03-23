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
 * Strings for component 'tool_installaddon', language 'zh_tw', branch 'MOODLE_25_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = '銘謝';
$string['acknowledgementmust'] = '你必須銘謝這個';
$string['acknowledgementtext'] = '我知道在安裝外掛之前，將這個網站做完整的備份是我的責任。我接受並理解到外掛(特別是，但非侷限於，源自非官方的程式碼)可能包含安全上的漏洞，會使網站掛掉，或造成私人資料的洩漏或喪失。';
$string['featuredisabled'] = '這一網站已經關閉了外掛安裝器。';
$string['installaddon'] = '安裝外掛！';
$string['installaddons'] = '安裝外掛！';
$string['installexception'] = '糟了...在安裝外掛時發生錯誤。請開啟PHP的除錯模式，以看到這錯誤的細節';
$string['installfromrepo'] = '從Moodle的插件目錄安裝外掛';
$string['installfromrepo_help'] = '你將會被重新導向 Moodle 插件目錄來搜尋並安裝一個插件。注意，你的網站的完整名稱、網址、和Moodle 版本將會同時送出，以讓安裝過程變得更容易。';
$string['installfromzip'] = '從ZIP壓縮檔安裝外掛程式';
$string['installfromzipfile'] = 'ZIP包裹';
$string['installfromzipfile_help'] = '這插件ZIP包裹必須包含恰好一個目錄，其名稱要符合這插件。這壓縮的內容將會被抽取到一個給這插件類型的適當位置 。若這包裹已經從Moodle插件目錄被下載，那它將會有這一結構。';
$string['installfromzip_help'] = '除了直接從 Moodle插件目錄安裝外掛之外，另一個方法是上傳這外掛的ZIP 包裹。這ZIP包裹應該和從Moodle插件包裹下載的包裹有相同的結構。';
$string['installfromziprootdir'] = '重新命名這根目錄';
$string['installfromziprootdir_help'] = '某些ZIP壓縮包裹，比如那些由Github產生的，可能包含一個不正確的根目錄名稱。如果是這樣，可以在此輸入正倔名稱。';
$string['installfromzipsubmit'] = '從這ZIP壓縮檔安裝外掛';
$string['installfromziptype'] = '插件類型';
$string['installfromziptype_help'] = '選擇你即將安裝的插件的正確類型。警告：若指定的插件類型不正確，安裝程序會嚴重失敗。';
$string['permcheck'] = '要確定插件類型根目錄位置是可透過網頁伺服器程序寫入的。';
$string['permcheckerror'] = '當檢查寫入權限時發現錯誤';
$string['permcheckprogress'] = '正在檢查寫入的權限....';
$string['permcheckresultno'] = '插件類型位置<em>{$a->path}</em> 是不可寫入的';
$string['permcheckresultyes'] = '插件類型位置<em>{$a->path}</em> 是可寫入的';
$string['pluginname'] = '外掛安裝器';
$string['remoterequestalreadyinstalled'] = '這兒有一個請求要從這網站的Moodle插件目錄安裝外掛{$a->name} ({$a->component}) 版本 {$a->version} 。然而，這一插件 <strong>已經安裝</strong> 在這網站上。';
$string['remoterequestconfirm'] = '這兒有一個請求要從這網站的Moodle插件目錄安裝外掛<strong>{$a->name} </strong> ({$a->component}) 版本 {$a->version} 。若你繼續，這外掛 ZIP包裹將會被下載做驗證。目前還不會安裝任何東西。';
$string['remoterequestinvalid'] = '這兒有一請求要求從這網站的Moodle插件目錄中安裝一外掛。不幸的是這請求是無效的，所以這外掛無法安裝。';
$string['remoterequestpermcheck'] = '這兒有一個請求要從這網站的Moodle插件目錄安裝外掛<strong>{$a->name} </strong> ({$a->component}) 版本 {$a->version} 。然而，這插件類型的位置<strong>{$a->typepath}</strong>是<strong>不可寫入的</strong>。

你需要給予這網頁伺服器用戶有對插件類型位置有寫入的權限，然後按下繼續按鈕來重複這個檢查。';
$string['remoterequestpluginfoexception'] = '糟了...當試著獲取有關這外掛{$a->name}({$a->component}) 版本{$a->version}的訊息時發生錯誤。這外掛無法安裝。請打開除錯模式來看這錯誤的細節。';
$string['validation'] = '外掛軟件包驗證';
$string['validationmsg_componentmatch'] = '完整的組件名稱';
$string['validationmsg_componentmismatchname'] = '外掛名稱不符合';
$string['validationmsg_componentmismatchname_help'] = '有些ZIP壓縮包裹，比如由Github所產生的，可能包含一個不正確的根目錄名稱。你必須去修正這根目錄名稱以符合宣稱的外掛名稱。';
$string['validationmsg_componentmismatchname_info'] = '這外掛宣稱它的名稱是\'{$a}\' ，但是這不符合根目錄名稱。';
$string['validationmsg_componentmismatchtype'] = '外掛類型不符合';
$string['validationmsg_componentmismatchtype_info'] = '你選擇了類型\'{$a->expected}\' ，但是這外掛宣稱它的類型是 \'{$a->found}\'。';
$string['validationmsg_filenotexists'] = '沒有找到提取出來的檔案';
$string['validationmsg_filesnumber'] = '在這包裹找不到足夠的檔案';
$string['validationmsg_filestatus'] = '無法抽出所有的檔案';
$string['validationmsg_filestatus_info'] = '試圖抽取檔案{$a->file} 結果導致錯誤 \'{$a->status}\'。';
$string['validationmsglevel_debug'] = '除錯';
$string['validationmsglevel_error'] = '錯誤';
$string['validationmsglevel_info'] = '好了';
$string['validationmsglevel_warning'] = '警告';
$string['validationmsg_maturity'] = '宣布的成熟水準';
$string['validationmsg_maturity_help'] = '外掛可以宣稱它的成熟水準，若維護者認為這外掛穩定，這宣稱的成熟水準將會是<b>成熟_穩定</b>。所有其他成熟水準(比如alpha 或 beta)應該視為不穩定且要小心。';
$string['validationmsg_missingexpectedlangenfile'] = '英文語言的檔案名稱不符合';
$string['validationmsg_missingexpectedlangenfile_info'] = '這指定的外掛類型缺少應有的英語語言檔{$a}。';
$string['validationmsg_missinglangenfile'] = '找不到英文語言檔案';
$string['validationmsg_missinglangenfolder'] = '少了英文語言資料夾';
$string['validationmsg_missingversion'] = '外掛沒有聲明它的版本';
$string['validationmsg_missingversionphp'] = '沒有找到 version.php 檔案';
$string['validationmsg_multiplelangenfiles'] = '找到多個英文語言檔案';
$string['validationmsg_onedir'] = '這ZIP壓縮包裹的架構無效';
$string['validationmsg_onedir_help'] = '這ZIP壓縮包裹必須只包含一個根目錄，用來存放外掛的程式碼。而這根目錄的名稱必須符合這插件的名稱。';
$string['validationmsg_pathwritable'] = '檢查安裝路徑是否可寫入';
$string['validationmsg_pluginversion'] = '外掛的版本';
$string['validationmsg_release'] = '外掛的發行次';
$string['validationmsg_requiresmoodle'] = 'Moodle版本要多少以上';
$string['validationmsg_rootdir'] = '要安裝的外掛名稱';
$string['validationmsg_rootdir_help'] = '這ZIP壓縮包裹裡的根目錄名稱就是要安裝的外掛名稱。若這名稱不正確，你可以在安裝這外掛之前';
$string['validationmsg_rootdirinvalid'] = '無效的外掛名稱';
$string['validationmsg_rootdirinvalid_help'] = '在ZIP包裹裡的根目錄名稱違反了正式的語法要求。某些ZIP包裹，比如那些由 Github所產生的，可能包含一個不正確的根目錄名稱。

你需要修正這根目錄名稱以符合這外掛的名稱。';
$string['validationmsg_targetexists'] = '目標位置已經存在';
$string['validationmsg_targetexists_help'] = '這外掛所要安裝的目錄，必須還不存在。';
$string['validationmsg_unknowntype'] = '不明的插件類型';
$string['validationresult0'] = '驗證失敗!';
$string['validationresult0_help'] = '偵測到一嚴重問題，所以安裝這外掛式不安全的。詳細情形請看驗證日誌上的訊息。';
$string['validationresult1'] = '驗證通過!';
$string['validationresult1_help'] = '這外掛包裹以經過驗證，且沒有偵測到嚴重問題。';
$string['validationresultinfo'] = '資訊';
$string['validationresultmsg'] = '訊息';
$string['validationresultstatus'] = '狀態';
