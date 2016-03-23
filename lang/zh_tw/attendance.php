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
 * Strings for component 'attendance', language 'zh_tw', branch 'MOODLE_25_STABLE'
 *
 * @package   attendance
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['createmultiplesessions_help'] = '您可使用此項功能來一步建立多重上課時間。
<strong>上課開始日期</strong>: 選擇上課開始日期
  * <strong>上課結束日期</strong>:選擇上課結束日期 (您想點名的最後一天).
  * <strong>上課日</strong>: 選擇上課日(例如星期二星期五等等)
  * <strong>頻率</strong>: 於此設定頻率。如每週上課選 1，隔週下課選2，等等。';
$string['hiddensessions_help'] = '如課程開始日早於上課日，上課期間即看不見。您可變更課程開始日，即可見上課期間。
您可利用此特色來隱藏早先之課程，而非予以刪除。
請記得只有看得到的課程才會出現在成績單中。';
$string['modulename_help'] = '出席活動可使老師點名，並讓學生觀看自己之出席記錄。
教師可創建多段期間，並註記"出席"，"缺席"，"遲到"，"請假"，或修改之以符合自己的需求。

可以匯出個別學生之報告表或全班的。';
$string['session_help'] = '上課期間。';
$string['sessiontype_help'] = '有二種上課方式：一般、群組。是否能添加不同形式端賴活動群組之模式如何。
*群組模式裡，不能增加群組，您只能增加一般上課期間。
*在群組模式的可視群組裡，你可增加一般及群組上課期間。
*在群組模式的分離群組裡，你只可增加群組上課期間。';
