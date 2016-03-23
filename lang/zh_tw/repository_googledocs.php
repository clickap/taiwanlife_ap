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
 * Strings for component 'repository_googledocs', language 'zh_tw', branch 'MOODLE_25_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = '客戶編號';
$string['configplugin'] = '設定Google Doc插件';
$string['googledocs:view'] = '檢視Google Doc 倉儲';
$string['oauth2upgrade_message_content'] = '在升級到 Moodle 2.3時，Picasa作品選集插件已經被關閉。
要啟動它，你的 Moodle網站要向 Google 註冊。你要遵循文件 {$a->docsurl}的說明，才能取得客戶偏好和密鑰。
這客戶編號和密鑰可以用於所有的Google Doc 和 Picasa插件。';
$string['oauth2upgrade_message_small'] = '這一插件已經被關閉，它需要依照Google OAuth 2.0 setup文件的說明來設定。';
$string['oauth2upgrade_message_subject'] = '關於Google Doc倉儲插件的重要訊息';
$string['oauthinfo'] = '<p>要使用這插件，你必須向Google註冊你的網站，請遵循文件說明 <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p>
<p>在註冊過程中，你將需要進入下列 \'認證的重新導向網址\':</p><p>{$a->callbackurl}</p>
註冊完後你會得到一個客戶編號和密鑰，它可以用來設定所有的Google Docs 和 Picasa 插件。</p>';
$string['pluginname'] = 'Google Doc';
$string['secret'] = '密碼';
$string['servicenotenabled'] = '存取方式沒有設定。請確定"驅動API"已經被啟用。';
