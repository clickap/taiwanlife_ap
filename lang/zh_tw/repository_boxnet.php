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
 * Strings for component 'repository_boxnet', language 'zh_tw', branch 'MOODLE_25_STABLE'
 *
 * @package   repository_boxnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API密鑰';
$string['apiv1migration_message_content'] = '當Moodle升級到2.4.7時，這Box.net插件會被關閉。若要重新啟用它，你需要依據文件{$a->docsurl}的說明重新配置它。';
$string['apiv1migration_message_small'] = '這一插件已經被關閉，它需要依據 Box.net APIv1 遷移的文件的說明來重新配置。';
$string['apiv1migration_message_subject'] = '關於Box倉儲插件的重要訊息';
$string['boxnet:view'] = '檢視Box.net倉儲';
$string['callbackurl'] = '重新導向的網址';
$string['callbackurltext'] = '<ol><li>再一次訪問<a href="http://www.box.net/developers/services">box.net 發展者網站</a>。</li>
<li>確定你把這一 Box.net 服務的召回網址設定為<strong>{$a}</strong></li></ol>';
$string['callbackwarning'] = '<ol><li>從這<a href="http://www.box.net/developers/services">Box.net 發展者頁面</a> 為你的Moodle網站取得一API密鑰。
<li>在此輸入 Box.net API密鑰， 然後點選儲存，並回到這一頁面。你將會看到Moodle 已經為你產生一個召回網址。</li>
<li>再一次在Box.net 網站編輯你的box.net 細節，並設定召回網址。</li></ol>';
$string['cannotcreatereference'] = '無法建立一個參照，因為沒有足夠的權限來分享在Box.net的檔案。';
$string['clientid'] = '客戶編號';
$string['clientsecret'] = '客戶密碼';
$string['configplugin'] = 'Box.net設定';
$string['filesourceinfo'] = 'Box.net ({$a->fullname}): {$a->filename}';
$string['information'] = '從這<a href="http://www.box.net/developers/services">Box.net 發展者頁面</a> 為你的Moodle網站取得一API密鑰';
$string['informationapiv2'] = '從這<a href="https://app.box.com/developers/services">Box.net 發展者頁面</a> 為你的Moodle網站取得一客戶編號和密碼。';
$string['invalidpassword'] = '無效的密碼';
$string['migrationtool'] = 'Box APIv1遷移工具';
$string['nullfilelist'] = '沒有檔案在這一倉儲';
$string['password'] = '密碼';
$string['pluginname'] = 'Box.net';
$string['pluginname_help'] = '在Box.net的倉儲';
$string['runthemigrationnow'] = '現在執行遷移工具';
$string['saved'] = 'Box.net 資料儲存';
$string['shareurl'] = '共用網址';
$string['username'] = '在Box.net的用戶名稱';
$string['warninghttps'] = 'Box.net 要求您的網站使用HTTPS，才能使這倉儲能運作。';
