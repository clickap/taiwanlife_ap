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
 * Strings for component 'tool_behat', language 'zh_tw', branch 'MOODLE_25_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = '這一管理工具可幫助程式發展者和測試撰寫者來建立 .feature檔案，它描述Moodle的功能並自動執行它們';
$string['allavailablesteps'] = '所有可用的步驟定義';
$string['giveninfo'] = '給出，處裡以便設定這環境';
$string['infoheading'] = '訊息';
$string['installinfo'] = '閱讀{$a}可以找到安裝和測試執行的訊息';
$string['moreinfoin'] = '關於{$a}的更多訊息';
$string['newstepsinfo'] = '閱讀{$a}可以找到關於添加新的步驟定義的訊息';
$string['newtestsinfo'] = '閱讀{$a}可以找到關於如何寫新測驗的訊息';
$string['nostepsdefinitions'] = '這些不是符合這一過濾器的步驟定義';
$string['pluginname'] = '驗收測試';
$string['runclitool'] = '要列出這些步驟定義，你需要執行Behat CLI 工具以便建立$CFG->behat_dataroot目錄。到你的Moodle根目錄，並執行"{$a}"';
$string['stepsdefinitionscomponent'] = '區域';
$string['stepsdefinitionscontains'] = '包含';
$string['stepsdefinitionsfilters'] = '步驟定義';
$string['stepsdefinitionstype'] = '類型';
$string['theninfo'] = '然後，檢查以確定其結果符合期待';
$string['unknownexceptioninfo'] = '網頁測試工具Selenium 或瀏覽器有問題，試著將網頁測試工具升級到最新版本。錯誤：';
$string['viewsteps'] = '過濾器';
$string['wheninfo'] = '何時，引發事件的動作';
$string['wrongbehatsetup'] = 'behat的設定有錯誤，請確定：
<ul>
<li>你是從你的moodle根目錄執行 "php admin/tool/behat/cli/init.php" </li>
<li>vendor/bin/behat 檔有執行權限</li></ul>';
