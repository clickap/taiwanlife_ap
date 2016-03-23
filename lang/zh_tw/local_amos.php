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
 * Strings for component 'local_amos', language 'zh_tw', branch 'MOODLE_24_STABLE'
 *
 * @package   local_amos
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS是Automated Manipulation Of Strings（自動翻譯處理器）的縮寫。它是Moodle翻譯及其異動記錄的資料庫。它跟蹤Moodle程式中的英文字串變化，收集翻譯，處理日常翻譯任務和生成由Moodle服務器分發的語言包。</p>
<p>參考<a href="http://docs.moodle.org/en/AMOS">AMOS說明</a>瞭解更多。</p>';
$string['amos'] = 'AMOS — Moodle翻譯工具';
$string['amos:commit'] = '將暫存的翻譯上傳到版本系統';
$string['amos:execute'] = '執行指定的 AMOScript';
$string['amos:importfile'] = '從上傳的檔案匯入翻譯並暫存它們';
$string['amos:importstrings'] = '匯入字符串(包括英語)直接進到主倉儲';
$string['amos:manage'] = 'AMOS管理首頁';
$string['amos:stage'] = '使用AMOS翻譯工具並暫存這些翻譯';
$string['amos:stash'] = '將目前暫存的翻譯儲存到資料庫';
$string['amos:usegoogle'] = '使用Google翻譯服務';
$string['commitbutton'] = '提交並取消暫存';
$string['commitbutton2'] = '提交並保持暫存';
$string['commitmessage'] = '提交的訊息';
$string['commitstage'] = '上傳暫存的字符串';
$string['commitstage_help'] = '永久保存AMOS資料庫所有暫存的翻譯。暫存區在上傳前會被自動清理和與最新翻譯同步。只有可上傳的翻譯會被保留。也就是說，只有背景是綠色的翻譯會被保存。上傳後，暫存區會被清空。';
$string['committableall'] = '所有語言';
$string['committablenone'] = '沒有允許的語言，請聯繫 AMOS 管理員';
$string['componentsall'] = '所有';
$string['componentsnone'] = '無';
$string['componentsstandard'] = '標準';
$string['confirmaction'] = '這個操作不能取消，確定？';
$string['contribaccept'] = '接受';
$string['contribactions'] = '操作貢獻的翻譯';
$string['contribactions_help'] = '取決於您的權限和貢獻翻譯工作流程，您可以使用下面的部分動作：

* 應用 - 將貢獻的翻譯拷貝到您的暫存區，不修改貢獻記錄
* 分配給我 - 將您自己設爲此貢獻的責任人，由您負責評估和集成
* 重新分配 - 刪除此貢獻的責任人
* 開始評估 - 分配此新貢獻給您自己，把它的狀態設爲”評估中“，並拷貝提交的翻譯到您的暫存區
* 接受 - 標記此貢獻爲已接受
* 拒收 - 標記此貢獻爲已拒收。請在評論中說明原因。

貢獻人會收到所有狀態變化的通知郵件。';
$string['contribapply'] = '套用';
$string['contribassignee'] = '責任人';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = '分配給我';
$string['contribauthor'] = '作者';
$string['contribclosedno'] = '隱藏已處理的貢獻';
$string['contribclosedyes'] = '顯示已處理的貢獻';
$string['contribcomponents'] = '元件';
$string['contribid'] = '帳號';
$string['contribincomingnone'] = '沒有未處理貢獻';
$string['contribincomingsome'] = '收到貢獻（{$a}）';
$string['contriblanguage'] = '語言';
$string['contribreject'] = '拒收';
$string['contribresign'] = '重新分配';
$string['contribstaged'] = '已暫存的貢獻<a href="contrib.php?id={$a->id}">#{$a->id}</a>，來自 {$a->author}';
$string['contribstagedinfo'] = '已暫存的貢獻';
$string['contribstagedinfo_help'] = '這暫存區包含的字符串是由一位社群成員所貢獻。這語言包的維護人應該會審核它們，並決定要接受(若已經提交)或拒收(若它們因為某些理由不能包括在官方語言包中)。';
$string['contribstartreview'] = '開始審核';
$string['contribstatus'] = '狀態';
$string['contribstatus0'] = '新的';
$string['contribstatus10'] = '審核中';
$string['contribstatus20'] = '已拒收';
$string['contribstatus30'] = '已接受';
$string['contribstatus_help'] = '貢獻翻譯工作流程包含下面的狀態：

* 新的 - 此貢獻已經提交，但還沒被評估
* 評估中 - 此貢獻已經分配給一名語言包維護人，並放入它的暫存區供評估
* 拒收 - 語言包維護人已拒收此貢獻，並可能在評論中做了解釋
* 接受 - 語言包維護人已經接受此貢獻';
$string['contribstrings'] = '翻譯';
$string['contribstringseq'] = '{$a->orig}個新的';
$string['contribstringsnone'] = '{$a->orig}（它們全部在語言包中都已經翻譯過了）';
$string['contribstringssome'] = '{$a->orig}（語言包中已經翻譯了{$a->same}個）';
$string['contribsubject'] = '標題';
$string['contribsubmittednone'] = '沒有已提交的貢獻';
$string['contribsubmittedsome'] = '您的貢獻（{$a}）';
$string['contribtimemodified'] = '已被修改';
$string['contributions'] = '貢獻';
$string['diff'] = '比較';
$string['diffaction'] = '如果有找到一個差異';
$string['diffaction1'] = '在他們的資料庫中暫存兩個翻譯';
$string['diffaction2'] = '暫存更多新近翻譯';
$string['diffmode'] = '暫存字符串';
$string['diffmode1'] = '英語字符串被更改了，但翻譯的沒有';
$string['diffmode2'] = '英語字符串沒被更改，但翻譯的被更改了';
$string['diffmode3'] = '英語或翻譯的字符串中有一個被更改了';
$string['diffmode4'] = '英語和翻譯的字串都更改過';
$string['diffprogress'] = '比較被選出的版本';
$string['diffprogressdone'] = '總共找到{$a}個差異';
$string['diffstaged'] = '差異';
$string['diffstrings'] = '比較兩個版本的翻譯';
$string['diffstrings_help'] = '這將會比較兩個選出的版本的全部字符串。如果字符串有差異，兩個版本都會被暫存。你可以使用"編輯暫存的字符串"功能，來檢視並修正這些改變。';
$string['diffversions'] = '版本';
$string['emailacceptbody'] = '語言包維護人{$a->assignee} 已經接受了您提供的翻譯#{$a->id} {$a->subject}。';
$string['emailacceptsubject'] = '[AMOS貢獻]接受';
$string['emailcontributionbody'] = '用戶{$a->author}提交了新翻譯：#{$a->id} {$a->subject}。

訪問 {$a->url} 瞭解更多細節。';
$string['emailcontributionsubject'] = '[AMOS貢獻]新翻譯已提交';
$string['emailrejectbody'] = '語言包維護人{$a->assignee}已經拒收了您貢獻的翻譯#{$a->id} {$a->subject}。

訪問{$a->url}瞭解更多細節。';
$string['emailrejectsubject'] = '[AMOS貢獻]拒收';
$string['emailreviewbody'] = '語言包維護人{$a->assignee}已經開始評估您貢獻的翻譯#{$a->id} {$a->subject}。

訪問{$a->url}瞭解更多細節。';
$string['emailreviewsubject'] = '[AMOS貢獻]已開始評估';
$string['err_exception'] = '錯誤：{$a}';
$string['err_invalidlangcode'] = '無效的語言代碼';
$string['err_parser'] = '解析錯誤： {$a}';
$string['filtercmp'] = '組件';
$string['filtercmp_desc'] = '顯示這些元件的翻譯';
$string['filterlng'] = '語言';
$string['filterlng_desc'] = '顯示這些語言的翻譯';
$string['filtermis'] = '雜項';
$string['filtermis_desc'] = '字符串顯示的其他條件';
$string['filtermisfglo'] = '只含加灰的字符串';
$string['filtermisfhlp'] = '只含幫助字符串';
$string['filtermisfmis'] = '只含未翻譯或未更新的字符串';
$string['filtermisfstg'] = '只含暫存的字符串';
$string['filtermisfwog'] = '不含加灰的字符串';
$string['filtersid'] = '字符串標識符';
$string['filtersid_desc'] = '在一系列字串中的關鍵字';
$string['filtersidpartial'] = '部份比對';
$string['filtertxt'] = '子字符串';
$string['filtertxtcasesensitive'] = '大小寫敏感';
$string['filtertxt_desc'] = '字符串中必須包含所給的文字';
$string['filtertxtregex'] = '正則表達式';
$string['filterver'] = '版本';
$string['filterver_desc'] = '顯示來自這些Moodle版本的字符串';
$string['found'] = '找到：{$a->found}     未翻譯：{$a->missing} ({$a->missingonpage})';
$string['foundinfo'] = '找到字符串的數量';
$string['foundinfo_help'] = '顯示翻譯表的總行數，未翻譯數和當前頁的未翻譯數';
$string['gotofirst'] = '回到第一頁';
$string['gotoprevious'] = '回到上一頁';
$string['greylisted'] = '加灰的字符串';
$string['greylisted_help'] = '因爲歷史原因，Moodle語言包可能包含一些不再使用但還未被刪除的字符串。這些字符串就是”加灰“的。一旦確認這些字符串不再使用，就會從語言包刪除。

如果您發現某個加灰的字符串還在被Moodle使用，請在本站Translating Moodle課程中的論壇發帖通知。通常，您可以節約您寶貴的時間，只翻譯還在被Moodle使用的字符串而忽略加灰的。';
$string['greylistedwarning'] = '字符串被加灰';
$string['importfile'] = '從檔案匯入已翻譯的字符串';
$string['importfile_help'] = '如果您是以離線方式翻譯字符串，你可以經由這一表單把它們放入暫存區。

* 檔案必須是合法的Moodle PHP字符串定義文件。Moodle的”/lang/en“目錄下的文件都是例子。
* 檔案名稱必須是字符串所屬的組件的英文名稱（例如”moodle.php“、”assignment.php“或”enrol_manual.php“）。

檔案中所有字符串都會按照所選的版本和語言放入暫存區。

如果你把多個PHP檔案壓縮，上傳後可以同時處裡。';
$string['language'] = '語言';
$string['languages'] = '語言';
$string['languagesall'] = '全部';
$string['languagesnone'] = '無';
$string['log'] = '日誌';
$string['logfilterbranch'] = '版本';
$string['logfiltercommithash'] = 'git hash（版本號）';
$string['logfiltercommitmsg'] = '提交信息包含';
$string['logfiltercommits'] = '提交過濾器';
$string['logfiltercommittedafter'] = '提交晚於';
$string['logfiltercommittedbefore'] = '提交早於';
$string['logfiltercomponent'] = '組件';
$string['logfilterlang'] = '語言';
$string['logfiltershow'] = '顯示過濾後的提交和字符串';
$string['logfiltersource'] = '源';
$string['logfiltersourceamos'] = 'amos（基於web的翻譯器）';
$string['logfiltersourcebot'] = '機器人(用腳本執行的批量操作)';
$string['logfiltersourcecommitscript'] = 'commitscript（提交信息中有AMOScript）';
$string['logfiltersourcefixdrift'] = '修正漂移（已修正的AMOS-git漂移）';
$string['logfiltersourcegit'] = 'git（Moodle源代碼和1.x包的git鏡像）';
$string['logfiltersourcerevclean'] = 'revclean（反向清理過程）';
$string['logfilterstringid'] = '字符串標識符';
$string['logfilterstrings'] = '字符串過濾器';
$string['logfilterusergrp'] = '提交人';
$string['logfilterusergrpor'] = '或';
$string['maintainers'] = '維護人';
$string['markuptodate'] = '標示此翻譯是最新的';
$string['markuptodate_help'] = 'AMOS檢測到此字符串可能有些舊了，因爲在它被翻譯後，英文的版本被修改過。重新評估這條翻譯。如果您認爲它仍是正確的，點這個選擇框。否則，請編輯它。';
$string['merge'] = '合併';
$string['mergestrings'] = '從其它分支合併字符串';
$string['mergestrings_help'] = '這會將所有在目的分支存在且未翻譯的字串從源分支中檢出，並放入暫存區。

您可以使用這個工具將已經翻譯的字串拷貝到所有其他版本的語言包中。只有語言包維護人可以使用這個工具。';
$string['newlanguage'] = '新語言';
$string['nodiffs'] = '沒有發先差異';
$string['nofiletoimport'] = '請提供一個供導入的文件。';
$string['nologsfound'] = '沒有符合條件的字符串，請修改過濾條件';
$string['nostringsfound'] = '沒有符合條件的字符串';
$string['nostringsfoundonpage'] = '在第{$a}頁沒有符合條件的字符串';
$string['nostringtoimport'] = '文件裏沒有合法的字符串。請確認文件名和文件格式正確。';
$string['nothingtostage'] = '此操作未返回任何可以暫存的字串。';
$string['novalidzip'] = '無法解壓縮這個ZIP檔';
$string['numofcommitsabovelimit'] = '經提交篩檢程式過濾，找到{$a->found}次提交，使用{$a->limit}個最新近的';
$string['numofcommitsunderlimit'] = '經提交篩檢程式過濾，找到{$a->found}次提交';
$string['numofmatchingstrings'] = '其中，{$a->commits}次提交的{$a->strings}次修改符合字串篩檢程式';
$string['outdatednotcommitted'] = '舊字符串';
$string['outdatednotcommitted_help'] = 'AMOS檢測到此字符串可能有些舊了，因爲在上次翻譯後，它的英文版有過修改。請重新評估此翻譯。';
$string['outdatednotcommittedwarning'] = '舊的';
$string['ownstashactions'] = '儲藏室動作';
$string['ownstashactions_help'] = '* 應用 - 把已翻譯的字符串從儲藏室拷貝到暫存區，但不修改儲藏室。如果暫存區裏已經有該字符串，會被儲藏室裏的覆蓋。
* 彈出 - 把已翻譯的字符串從儲藏室移動到暫存區，並從儲藏室刪除（相當於應用+刪除）
* 刪除 - 刪除放到儲藏室的字符串。
* 提交 - 打開一個提交儲藏室給官方語言維護人的表單，這樣他們就可以將您的貢獻放入官方語言包。';
$string['ownstashes'] = '您的儲藏室';
$string['ownstashes_help'] = '這是您所有儲藏室的列表。';
$string['ownstashesnone'] = '沒建任何自己的儲藏室';
$string['permalink'] = '永久鏈接';
$string['placeholder'] = '佔位符';
$string['placeholder_help'] = '佔位符是字符串中一些特殊語句，類似”{$a}“或”{$a->something}“。在字符串最終被顯示時，它們會被替換爲另一個值。

一定要將它們原封不動地從原始字符串裏拷貝。不要翻譯它們！';
$string['placeholderwarning'] = '有佔位符的字符串';
$string['pluginclasscore'] = '核心子系統';
$string['pluginclassnonstandard'] = '非標準插件';
$string['pluginclassstandard'] = '標準插件';
$string['pluginname'] = 'AMOS';
$string['presetcommitmessage'] = '由 {$a->author} 貢獻翻譯 #{$a->id}';
$string['presetcommitmessage2'] = '合併缺少的字符串，從{$a->source} 到 {$a->target} 版本';
$string['presetcommitmessage3'] = '修正{$a->versiona} 和 {$a->versionb}之間的差異';
$string['privileges'] = '您的特權';
$string['privilegesnone'] = '對公共信息，你有只讀權限。';
$string['propagate'] = '繁衍翻譯';
$string['propagatednone'] = '沒有翻譯被繁衍';
$string['propagatedsome'] = '{$a}暫存的翻譯已經被繁衍';
$string['propagate_help'] = '暫存的翻譯可以繁衍到選出的版本。AMOS';
$string['propagaterun'] = '傳送';
$string['requestactions'] = '動作';
$string['requestactions_help'] = '* 申請 - 從推送請求中複製已翻譯的字符串到自己的暫存區。如果這個字符串已經在暫存區中了，就覆蓋重寫它。
* 隱藏 - 屏蔽這個推送請求使得您不會再看到它了。';
$string['savefilter'] = '抓取過濾後的結果';
$string['script'] = 'AMOS腳本';
$string['scriptexecute'] = '執行並暫存結果';
$string['script_help'] = 'AMOS腳本是一組指令，用來管理字符串倉儲';
$string['sourceversion'] = '源版本';
$string['stage'] = '暫存區';
$string['stageactions'] = '暫存區動作';
$string['stageactions_help'] = '* 編輯已暫存字符串 - 修改翻譯器過濾器的設置，只顯示已暫存的翻譯。
* 清理不可提交的字符串 - 從暫存區刪除所有不允許提交的翻譯。在提交前，暫存區會被自動清理。
* 重新對齊 - 從暫存區刪除所有沒修改的翻譯，或者比容器中的當前翻譯舊的翻譯。在提交前，暫存區會被自動對齊。
* 清空暫存區 - 清空暫存區後，其內的所有翻譯都再也找不回來了。';
$string['stageedit'] = '編輯已暫存的字符串';
$string['stagelang'] = '語言';
$string['stageoriginal'] = '原文';
$string['stageprune'] = '清理不可提交的';
$string['stagerebase'] = '重新對齊';
$string['stagestring'] = '字符串';
$string['stagestringsnocommit'] = '暫存區有{$a->staged}個字符串';
$string['stagestringsnone'] = '暫存區沒有字符串';
$string['stagestringssome'] = '暫存區共有{$a->staged}個字符串，其中{$a->committable}個可以提交';
$string['stagesubmit'] = '提交給維護人';
$string['stagetranslation'] = '翻譯';
$string['stagetranslation_help'] = '顯示要提交的已暫存的翻譯。單元格背景色的含義：

* 綠色 - 您修改過或新翻譯了該字符串。您可以提交這條翻譯。
* 藍色 - 您修改過或新翻譯了該字符串，但您不能將它提交到對應的語言包。
* 無色 - 暫存的翻譯和當前翻譯是完全一樣的，所以不會提交。';
$string['stageunstageall'] = '清空暫存區';
$string['stashactions'] = '儲藏室動作';
$string['stashactions_help'] = '儲藏室是當前暫存區的一個快照。可以將儲藏室提交給官方語言包維護人，由它將其放入語言包。';
$string['stashapply'] = '應用';
$string['stashautosave'] = '自動保存的備份儲藏室';
$string['stashautosave_help'] = '這個儲藏室包含您的暫存區最新的快照。在某些情況下，比如不小心清空了暫存區，可以用它做備份。點擊”應用“可以拷貝儲藏室中的所有字符串到暫存區中（如果字符串已在暫存區中，會被覆蓋）。';
$string['stashcomponents'] = '<span>組件：</span> {$a}';
$string['stashdrop'] = '丟棄';
$string['stashes'] = '儲藏室';
$string['stashlanguages'] = '<span>語言：</span> {$a}';
$string['stashpop'] = '彈出';
$string['stashpush'] = '把暫存區中所有字符串放入一個新的儲藏室';
$string['stashstrings'] = '<span>字符串個數：</span> {$a}';
$string['stashsubmit'] = '提交給維護人';
$string['stashsubmitdetails'] = '提交細節';
$string['stashsubmitmessage'] = '消息';
$string['stashsubmitsubject'] = '主題';
$string['stashtitle'] = '儲藏室標題';
$string['stashtitledefault'] = '在製品 - {$a->time}';
$string['stringhistory'] = '歷史';
$string['strings'] = '字符串數';
$string['submitting'] = '提交一個貢獻';
$string['submitting_help'] = '這會將翻譯的字符串發送給官方語言維護人。他們會將您的貢獻放入暫存區，評估，並最後提交。請留下一些信息，描述一下您的翻譯和您爲什麼希望您的貢獻被接受。';
$string['targetversion'] = '目標版本';
$string['translatorlang'] = '語言';
$string['translatorlang_help'] = '顯示字符串翻譯到的語言的代碼。點擊<strong>+-</strong>鏈接顯示此字符串的歷史時間綫。';
$string['translatororiginal'] = '原文';
$string['translatororiginal_help'] = '顯示字符串的英文原文。它的下面有一個用Google翻譯器自動翻譯的鏈接（如果支持此語言且您的瀏覽器啓用了Javascript的話）。此外，您還會看到一些其它信息，比如這個字符串是否包含佔位符。';
$string['translatorstring'] = '字符串';
$string['translatorstring_help'] = '顯示Moodle分支（版本），字符串標識符和所屬的組件。';
$string['translatortool'] = '翻譯器';
$string['translatortranslation'] = '翻譯';
$string['translatortranslation_help'] = '點擊單元格，立即變爲輸入框。輸入翻譯並點擊單元格以外的地方，就將翻譯放入了暫存區。單元格的背景色含義：

* 綠色 - 此字符串已經被翻譯過了。您可以修改和提交它。
* 黃色 - 此字符串可以提交，但可能有些舊了。在上次翻譯後，英文版可能做了修改。
* 紅色 - 此字符串未被翻譯，您可以翻譯和提交它。
* 藍色 - 您已經修改了翻譯，它現在被暫存了。別忘了在登出之前將它們提交！
* 灰色 - AMOS不能用來翻譯這一字串。比如說用於1.9的字串必須經由繼承的CVS存取來編輯它。';
$string['typecontrib'] = '非標準插件';
$string['typecore'] = '核心子系統';
$string['typestandard'] = '標準插件';
$string['unstage'] = '取消暫存';
$string['unstageconfirm'] = '確定？';
$string['unstaging'] = '取消暫存中';
$string['version'] = '版本';
