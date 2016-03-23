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
 * Strings for component 'cachestore_memcached', language 'zh_tw', branch 'MOODLE_25_STABLE'
 *
 * @package   cachestore_memcached
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = '緩衝區寫入';
$string['bufferwrites_help'] = '啟用或關閉"緩衝的輸入或輸出"。啟用緩衝的輸入或輸出會把指令儲存到緩衝記憶體，而不是被送出。任何擷取資料的動作會導致這緩衝被送到遠端的連接。
退出連接或關閉連接也將導致緩衝的資料推送到遠程連接。';
$string['hash'] = '雜湊演算法';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = '預設(一次一個)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = '指定一個用於這項目鍵的雜湊演算法。每種雜湊演算法都各有其優缺點，若你不知道或不在意，請保留預設值。';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['pluginname'] = 'Memcached';
$string['prefix'] = '前綴鍵';
$string['prefix_help'] = '這可以為你的項目鍵建立一個"域"，它讓你在單一的memcached 安裝上建立多個memcached 儲存。<be />
它不能多過16個字符，以確保不會遇到鍵長度的問題。';
$string['prefixinvalid'] = '無效的前綴。您只能使用AZ，az或0-9-_。';
$string['serialiser_igbinary'] = 'igbinary系列化';
$string['serialiser_json'] = 'JSON系列化';
$string['serialiser_php'] = '預設PHP系列化';
$string['servers'] = '伺服器';
$string['servers_help'] = '在此設定memcached 調適器所使用的伺服器。
每一行定義一個伺服器，並包含一個伺服器地址和選用的端口和權重。
如果沒有提供端口，則將使用預設端口（11211）。

例如:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>';
$string['testservers'] = '測試伺服器';
$string['testservers_desc'] = '指定被用來做單元測試和效能測試的伺服器。
設置測試服務器是完全可任選的。
每行定義一個伺服器，並包含一個伺服器地址和選用的端口和權重。
如果沒有提供端口，則將使用預設端口（11211）。';
$string['usecompression'] = '使用壓縮';
$string['usecompression_help'] = '啟用或關閉有效載荷壓縮。當啟用時，檔案長度超過一定界線(目前是100 bytes)，將會在儲存時被壓縮，且在擷取時被解壓縮。';
$string['useserialiser'] = '使用序列化程序';
$string['useserialiser_help'] = '指定要用於serializing non-scalar 的序列化程序。

有效的序列化程序是Memcached ::SERIALIZER_PHP
或Memcached:;SERIALIZER_IGBINARY。
後者只有在memcached的配置了----
啟用 - memcached - igbinary選項，且igbinary擴展也被加載時，才能使用。';
