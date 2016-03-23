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
 * Strings for component 'tool_xmldb', language 'zh_tw', branch 'MOODLE_25_STABLE'
 *
 * @package   tool_xmldb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = '實際';
$string['aftertable'] = '放在此資料表後：';
$string['back'] = '返回';
$string['backtomainview'] = '返回主視圖';
$string['cannotuseidfield'] = '不能插入"id" 欄位。因為它是一個自動編號的欄位';
$string['change'] = '更改';
$string['charincorrectlength'] = '字元欄位的長度不正確';
$string['checkbigints'] = '檢查整數';
$string['check_bigints'] = '尋找不正確的資料庫整數';
$string['checkdefaults'] = '檢查預設';
$string['check_defaults'] = '尋找不一致的預設值';
$string['checkforeignkeys'] = '檢查外來鍵值';
$string['check_foreign_keys'] = '尋找外來鍵值違規';
$string['checkindexes'] = '檢查索引';
$string['check_indexes'] = '尋找遺失的資料庫索引';
$string['checkoraclesemantics'] = '檢查語法';
$string['check_oracle_semantics'] = '尋找不正確長度的語法';
$string['completelogbelow'] = '(查看下面搜尋的完整日誌)';
$string['confirmcheckindexes'] = '這個功能會搜尋您的Moodle伺服器上可能遺失的索引資料，並自動產生(但不會執行)所需的SQL指令以更新。產生後，您可以將它們複製到您的SQL客戶端中執行它們。<br /><br />我們建議您在搜尋遺失的索引前，確定是使用Moodle(1.8、1.9、2.x等）的最新版本(+)。<br /><br />這個功能並不在資料庫伺服器上執行任何操作(只讀取而已)，因此隨時都可以安全地執行。';
$string['confirmdeletefield'] = '您是否非常確信要刪除此欄位：';
$string['confirmdeleteindex'] = '您是否非常確信要刪除此索引：';
$string['confirmdeletekey'] = '您是否非常確信要刪除此鍵值：';
$string['confirmdeletetable'] = '您是否非常確信要刪除此表：';
$string['confirmdeletexmlfile'] = '您是否非常確信要刪除此文件：';
$string['confirmrevertchanges'] = '您是否非常確信要恢復對此所做的改變：';
$string['create'] = '建立';
$string['createtable'] = '建立資料表：';
$string['defaultincorrect'] = '不正確的預設值';
$string['delete'] = '刪除';
$string['delete_field'] = '刪除欄位';
$string['delete_index'] = '刪除索引';
$string['delete_key'] = '刪除鍵值';
$string['delete_table'] = '刪除資料表';
$string['delete_xml_file'] = '刪除XML文件';
$string['doc'] = '文件';
$string['docindex'] = '文件索引：';
$string['documentationintro'] = '這一文件是從XMLDB資料庫定義所自動產生。它只有英文版本可用。';
$string['down'] = '向下';
$string['duplicate'] = '複製';
$string['duplicatefieldname'] = '已存在一個同名的欄位';
$string['duplicatefieldsused'] = '另一個欄位有相同名稱';
$string['duplicateindexname'] = '另一個索引有相同名稱';
$string['duplicatekeyname'] = '另一個鍵值有相同名稱';
$string['duplicatetablename'] = '另一個資料表有相同名稱';
$string['edit'] = '編輯';
$string['edit_field'] = '編輯欄位';
$string['edit_field_save'] = '儲存欄位';
$string['edit_index'] = '編輯索引';
$string['edit_index_save'] = '儲存索引';
$string['edit_key'] = '編輯鍵值';
$string['edit_key_save'] = '儲存鍵值';
$string['edit_table'] = '編輯資料表';
$string['edit_table_save'] = '儲存資料表';
$string['edit_xml_file'] = '編輯XML文件';
$string['enumvaluesincorrect'] = '列舉型別(enum)欄位的值不正確';
$string['expected'] = '預期的';
$string['extensionrequired'] = '抱歉--要做這動作，需要用到PHP擴展\'{$a}\'。若你要使用這功能，請安裝這擴展。';
$string['field'] = '欄位';
$string['fieldnameempty'] = '空的欄位名';
$string['fields'] = '欄位';
$string['fieldsnotintable'] = '欄位不存在資料表裡';
$string['fieldsusedinindex'] = '這欄位被用來當作索引';
$string['fieldsusedinkey'] = '這欄位被用來當作鍵值';
$string['filemodifiedoutfromeditor'] = '警告：在使用XMLDB編輯器時，檔案在地被修改。儲存將會覆寫本地的更改。';
$string['filenotwriteable'] = '檔案不可寫';
$string['float2numbernote'] = '注意：雖然XMLDB是100%支援"浮點數"欄位，但是建議把它轉移到"數值"欄位。';
$string['floatincorrectdecimals'] = '浮點數欄位的小數位數不正確';
$string['floatincorrectlength'] = '浮點數欄位的長度不正確';
$string['generate_all_documentation'] = '所有的文件';
$string['generate_documentation'] = '文件';
$string['gotolastused'] = '移至上次使用的檔案';
$string['incorrectfieldname'] = '不正確的欄位名稱';
$string['incorrectindexname'] = '不正確的索引名稱';
$string['incorrectkeyname'] = '不正確的鍵值名稱';
$string['incorrecttablename'] = '不正確的資料表名稱';
$string['index'] = 'Index';
$string['indexes'] = '索引';
$string['indexnameempty'] = '索引名稱是空的';
$string['integerincorrectlength'] = '整數欄位的長度不正確';
$string['key'] = 'Key';
$string['keynameempty'] = '這鍵值名稱不能是空的';
$string['keys'] = '鍵值';
$string['listreservedwords'] = '保留字清單<br/>（用來保持<a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB保留字</a>的更新)';
$string['load'] = '載入';
$string['main_view'] = '主視圖';
$string['missing'] = '遺失的';
$string['missingindexes'] = '找到了遺失的索引';
$string['mustselectonefield'] = '您必須選擇一個欄位來查看與欄位相關的動作！';
$string['mustselectoneindex'] = '您必須選擇一個索引來查看與索引相關的動作！';
$string['mustselectonekey'] = '您必須選擇一個鍵值來查看與鍵值相關的動作！';
$string['newfield'] = '建立新欄位';
$string['newindex'] = '建立新索引';
$string['newkey'] = '建立新鍵值';
$string['newtable'] = '建立新資料表';
$string['newtablefrommysql'] = '從MySQL建新資料表';
$string['new_table_from_mysql'] = '從MySQL建新資料表';
$string['nofieldsspecified'] = '沒有欄位被指定';
$string['nomissingindexesfound'] = '沒有找到遺失的索引，您的資料庫不需要更多操作。';
$string['noreffieldsspecified'] = '沒有指定參照欄位';
$string['noreftablespecified'] = '沒有發現指定的參照表';
$string['noviolatedforeignkeysfound'] = '沒有發現違反規則的外來鍵';
$string['nowrongdefaultsfound'] = '沒有發現不一致的預設值，您的資料庫不需要有進一步的動作。';
$string['nowrongintsfound'] = '沒有發現錯誤的整數，您的資料庫不需要又進一步的動作。';
$string['nowrongoraclesemanticsfound'] = '沒有發現Oracl欄使用BYTE語法，您的資料庫不需要又進一步的動作。';
$string['numberincorrectdecimals'] = '數字欄位的小數位數不正確';
$string['numberincorrectlength'] = '數字欄位的長度不正確';
$string['pendingchanges'] = '注意：您已經對這檔案做了更改。它們可以隨時被儲存。';
$string['pendingchangescannotbesaved'] = '這一檔案有被更改過，但它們無法被儲存! 請檢查這目錄和目錄裡的"install.xml"在這伺服器上是否有寫入的權限。';
$string['pendingchangescannotbesavedreload'] = '這一檔案有被更改過，但它們無法被儲存! 請檢查這目錄和目錄裡的"install.xml"在這伺服器上是否有寫入的權限。然後重新裝載此一頁面，然後您就可以儲存這些更改了。';
$string['pluginname'] = 'XMLDB 編輯器';
$string['primarykeyonlyallownotnullfields'] = '基本鍵不能是空無的';
$string['reserved'] = '保留';
$string['reservedwords'] = '保留字';
$string['revert'] = '回復';
$string['revert_changes'] = '回復變更';
$string['save'] = '儲存';
$string['searchresults'] = '搜尋結果';
$string['selectaction'] = '選擇動作：';
$string['selectdb'] = '選擇資料庫：';
$string['selectfieldkeyindex'] = '選擇欄位 / 鍵 / 索引：';
$string['selectonecommand'] = '為了查看PHP程式碼，請在列表中選擇一個動作';
$string['selectonefieldkeyindex'] = '為了查看PHP程式碼，請在列表中選擇一個欄位/鍵/索引';
$string['selecttable'] = '選擇資料表：';
$string['table'] = '資料表';
$string['tablenameempty'] = '資料表名稱不能是空的';
$string['tables'] = '資料表';
$string['unknownfield'] = '參照到一個未知的欄位';
$string['unknowntable'] = '參照到一個未知的表格';
$string['unload'] = '卸除';
$string['up'] = '向上';
$string['view'] = '檢視';
$string['viewedited'] = '檢視編輯過的';
$string['vieworiginal'] = '檢視原初的';
$string['viewphpcode'] = '檢視PHP程式碼';
$string['view_reserved_words'] = '檢視保留字';
$string['viewsqlcode'] = '檢視SQL語法';
$string['view_structure_php'] = '檢視結構PHP';
$string['view_structure_sql'] = '檢視結構SQL';
$string['view_table_php'] = '檢視資料表PHP';
$string['view_table_sql'] = '檢視資料表SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = '違反規則的外來鍵';
$string['violatedforeignkeysfound'] = '發現違反規則的外來鍵';
$string['violations'] = '違反規則';
$string['wrong'] = '錯誤';
$string['wrongdefaults'] = '發現錯誤的預設值';
$string['wrongints'] = '發現錯誤的整數資料';
$string['wronglengthforenum'] = '列舉(enum)欄位的長度不正確';
$string['wrongnumberofreffields'] = '參照欄位的數目錯誤';
$string['wrongoraclesemantics'] = '發現Oracle BYTE 語法錯誤';
$string['wrongreservedwords'] = '目前使用的保留字<br/>（如果資料表名稱使用{$CFG->prefix}，就不用留意這個問題）';
$string['yesmissingindexesfound'] = '已經在您的資料庫中找到了一些遺失的索引資料。下面列出了關於它們的詳細情況以及建立它們的命令，您可以在SQL客戶端中執行它們。<br /><br />完成這個操作後，建議您重新執行這個工具，以確認沒有更多遺失的索引資料。';
