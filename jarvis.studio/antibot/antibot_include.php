<?php
# Version: 5.07
# Author: Mik Foxi admin@mikfoxi.com
# Copyright © 2017 - 2019
# License: GNU GPL v3 - https://www.gnu.org/licenses/gpl-3.0.en.html
# Website: https://antibot.cloud/

$ab_version = '5.07';
$ab_se = array();
$ab_proxy = array();
$ab_dns_prefetch = '';
$ab_config['stop_country'] = array();
$ab_config['stop_lang'] = array();

$ab_start_time = microtime(true);
require_once(__DIR__.'/antibot_conf.php');

$ab_config['time'] = time();
$ab_config['date'] = date('Y.m.d', $ab_config['time']);
$ab_config['host'] = isset($_SERVER['HTTP_HOST']) ? preg_replace("/[^0-9a-z-.:]/","", $_SERVER['HTTP_HOST']) : '';
$ab_config['useragent'] = isset($_SERVER['HTTP_USER_AGENT']) ? trim(strip_tags($_SERVER['HTTP_USER_AGENT'])) : '';
$ab_config['uri'] = trim(strip_tags($_SERVER['REQUEST_URI']));
$ab_config['ip'] = trim(strip_tags($_SERVER['REMOTE_ADDR']));
$ab_config['http_via'] = isset($_SERVER['HTTP_VIA']) ? trim(strip_tags($_SERVER['HTTP_VIA'])) : '';
$ab_config['referer'] = isset($_SERVER['HTTP_REFERER']) ? trim(strip_tags($_SERVER['HTTP_REFERER'])) : '';
$ab_config['refhost'] = parse_url($ab_config['referer'], PHP_URL_HOST);
$ab_config['lang'] = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? mb_substr(mb_strtolower(trim(preg_replace("/[^a-zA-Z]/","",$_SERVER['HTTP_ACCEPT_LANGUAGE'])), 'UTF-8'), 0, 2, 'utf-8') : '';
if ($ab_config['useragent'] == '') die(); // пустой юзерагент.

if ($ab_config['refhost'] == 'super-seo-guru.com' OR $ab_config['refhost'] == 'progressive-seo.com') die();

// запись реферер в куки, чтоб за антиботом о нем можно было знать:
if (!isset($_COOKIE['ab_referer'])) {
setcookie('ab_referer', $ab_config['referer'], $ab_config['time']+5184000, '/'); // на 2 мес
}

// перевод укороченного ipv6 в нормальный вид:
function expand($ip){
$hex = unpack("H*hex", inet_pton($ip));         
$ip = substr(preg_replace("/([A-f0-9]{4})/", "$1:", $hex['hex']), 0, -1);
return $ip;
}

// функция проверки белого бота на белость:
function TestWhiteBot($ip, $ptr_ok) {
// $ptr_ok - массив
$ptr = gethostbyaddr($ip); // получаем ptr хост по ip
$result = dns_get_record($ptr, DNS_A + DNS_AAAA); // ipv4 & ipv6 у ptr хоста
$ip2 = array();
foreach($result as $line) {
if (isset($line['ipv6'])) {$ip2[] = expand($line['ipv6']);}
if (isset($line['ip'])) {$ip2[] = $line['ip'];}
}

$test_ptr = 0;
foreach($ptr_ok as $ptr_line) {
if(stripos($ptr, $ptr_line, 0) !== false) {$test_ptr = 1; break;}
}
if (in_array($ip, $ip2) AND $test_ptr == 1) {return 1;} else {return 0;}
}

// проверка на использование прокси:
if (filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
$ip=ip2long($_SERVER['REMOTE_ADDR']);
foreach ($ab_proxy as $proxy_mask => $proxy_attr) {
$net = $proxy_mask;
list($net,$mask)=explode('/',$net);
$net=ip2long($net);
$mask=pow(2,32-$mask)-1;
$net=$net&~$mask;
if (!(($ip^$net)&~$mask)) {$ab_config['ip'] = $_SERVER[$proxy_attr]; break;}
}
}

// проверка валидности ip:
if (filter_var($ab_config['ip'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
if ($ab_config['check_url'] != '') {
$ab_check_url[] = $ab_config['check_url'];
} else {
$ab_check_url[] = 'https://ipv4alt.antibot.cloud/content/cloud5.php';
$ab_check_url[] = 'https://ipv4main.antibot.cloud/content/cloud5.php';
$ab_dns_prefetch = '<link rel= "dns-prefetch" href="https://ipv4alt.antibot.cloud/" />
<link rel= "dns-prefetch" href="https://ipv4main.antibot.cloud/" />
';
}
$ab_config['ipv'] = 4;
$ab_config_ip_array = explode('.', $ab_config['ip']);
$ab_config['ip_short'] = $ab_config_ip_array[0].'.'.$ab_config_ip_array[1].'.'.$ab_config_ip_array[2];
} elseif (filter_var($ab_config['ip'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
$ab_config['ip'] = expand($ab_config['ip']); // на всякий случай
if ($ab_config['check_url'] != '') {
$ab_check_url[] = $ab_config['check_url'];
} else {
$ab_check_url[] = 'https://ipv6alt.antibot.cloud/content/cloud5.php';
$ab_check_url[] = 'https://ipv6main.antibot.cloud/content/cloud5.php';
$ab_dns_prefetch = '<link rel= "dns-prefetch" href="https://ipv6alt.antibot.cloud/" />
<link rel= "dns-prefetch" href="https://ipv6main.antibot.cloud/" />
';
}
$ab_config['ipv'] = 6;
$ab_config_ip_array = explode(':', $ab_config['ip']);
$ab_config['ip_short'] = $ab_config_ip_array[0].':'.$ab_config_ip_array[1].':'.$ab_config_ip_array[2].':'.$ab_config_ip_array[3];
} else {
if ($ab_config['antibot_log_other'] == 1) {
file_put_contents(__DIR__.'/log/badip_'.$ab_config['date'].'_'.$ab_config['logsufix'].'.txt', $ab_config['ip'].' ('.gethostbyaddr($ab_config['ip']).') '.$ab_config['useragent'].' '.$ab_config['host']."\n", FILE_APPEND | LOCK_EX);
}
//die('Local or bad IP');
$ab_check_url[] = '/antibot/ab.php';
}

//shuffle($ab_check_url);

// для начала всех считаем людьми:
$ab_config['whitebot'] = 0;

// самый белый бот, если нашли, то дальше уже не проверяем:
if (file_exists(__DIR__.'/whitebot/'.$ab_config['ip'].'.txt') OR file_exists(__DIR__.'/whitebot/'.$ab_config['ip_short'].'.txt')) {
$ab_config['whitebot'] = 1;
}

if ($ab_config['whitebot'] == 0) {
// проверяем юзерагент на принадлежность к белым ботам по массиву из конфига:
foreach ($ab_se as $ab_line => $ab_sign) {
// если нашли совпадение в имени юзерагента:
if (stripos($ab_config['useragent'], $ab_line, 0) !== false) {
if (TestWhiteBot($ab_config['ip'], $ab_sign) == 1) {
// если это в реале по ptr белый бот:
if ($ab_line != '.') {
// сохраняем ip в белый список только тем у кого полноценный идентифицируемый ptr:
if ($ab_config['short_mask'] != 1) {$ab_config['ip_short'] = $ab_config['ip'];}
file_put_contents(__DIR__.'/whitebot/'.$ab_config['ip_short'].'.txt', 'IP: '.$ab_config['ip']."\n".'UserAgent: '.$ab_config['useragent'], LOCK_EX);
}
$ab_config['whitebot'] = 1; break;
} else {
// фейковый бот:
$ab_config['whitebot'] = 0;
if ($ab_config['antibot_log_fakes'] == 1) {
file_put_contents(__DIR__.'/log/fakes_'.$ab_config['date'].'_'.$ab_config['logsufix'].'.txt', $ab_config['ip'].' ('.gethostbyaddr($ab_config['ip']).') '.$ab_config['useragent'].' '.$ab_config['host']."\n", FILE_APPEND | LOCK_EX);
}
if ($ab_config['stop_fake'] == 1) die('FakeBot');
}
break;
}
}
}

// дальше проверяем только людей:
if ($ab_config['whitebot'] == 0) {
	
// хэш для куки таким должен быть:
$ab_config['antibot_ok'] = md5($ab_config['salt'].$ab_config['host'].$ab_config['useragent']);

// получаем куки юзера:
$ab_config['antibot'] = isset($_COOKIE['antibot']) ? trim(strip_tags($_COOKIE['antibot'])) : '';

// проверка пост запросом:
if(isset($_POST['submit']) AND isset($_POST['antibot'])) {
$_POST['time'] = isset($_POST['time']) ? (int)trim(strip_tags($_POST['time'])) : 0;
$_POST['antibot'] = isset($_POST['antibot']) ? trim(strip_tags($_POST['antibot'])) : 0;
if ($ab_config['time'] - $_POST['time'] < 600 AND md5($ab_config['salt'].$_POST['time'].$ab_config['ip'].$ab_config['useragent']) == $_POST['antibot']) {
setcookie('antibot', $ab_config['antibot_ok'], time()+86400, '/', $ab_config['host']);
$ab_config['antibot'] = $ab_config['antibot_ok'];
if ($ab_config['antibot_log_click'] == 1) {
file_put_contents(__DIR__.'/log/click_'.$ab_config['date'].'_'.$ab_config['logsufix'].'.txt', $ab_config['ip'].' ('.gethostbyaddr($ab_config['ip']).') '.$ab_config['useragent'].' '.$ab_config['host']."\n", FILE_APPEND | LOCK_EX);
}
}
}

// проверка HTTP/2.0 если включена:
if ($ab_config['http2only'] == 1 AND $_SERVER['SERVER_PROTOCOL'] != 'HTTP/2.0') die('HTTP/2.0 only');

// отдаем юзеру заглушку для проверки:
if ($ab_config['antibot_ok'] != $ab_config['antibot']) {
header('Content-Type: text/html; charset=UTF-8');
header('X-Powered-CMS: Antibot.Cloud (See: https://antibot.cloud/)');
header('X-Robots-Tag: noindex');
header('X-Frame-Options: DENY');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');

// код страны если не из клауда, то определяем сами (если ipv4):
if (isset($_SERVER['HTTP_CF_IPCOUNTRY'])) {
$ab_config['country'] = trim(strip_tags($_SERVER['HTTP_CF_IPCOUNTRY']));
} elseif ($ab_config['ipv'] == 4) {
include(__DIR__.'/SxGeo.php');
$SxGeo = new SxGeo(__DIR__.'/SxGeo.dat', SXGEO_MEMORY);
$ab_config['country'] = trim($SxGeo->getCountry($ab_config['ip']));
} else {
$ab_config['country'] = '';
}
// блокировка страны:
if (in_array($ab_config['country'], $ab_config['stop_country'])) die('404 page not found');

// блокировка языка:
if (in_array($ab_config['lang'], $ab_config['stop_lang'])) die('404 page not found');

// хитробот фейсбука:
if (isset($_GET['fbclid']) AND $ab_config['country'] == 'IE') die();

// показываем заглушку:
require_once(__DIR__.'/antibot_tpl.txt');
if ($ab_config['antibot_log_tests'] == 1) {
file_put_contents(__DIR__.'/log/tests_'.$ab_config['date'].'_'.$ab_config['logsufix'].'.txt', $ab_config['ip'].' ('.gethostbyaddr($ab_config['ip']).') '.$ab_config['useragent'].' '.$ab_config['host']."\n", FILE_APPEND | LOCK_EX);
}
$ab_exec_time = microtime(true) - $ab_start_time;
$ab_exec_time = round($ab_exec_time, 5);
echo '<!-- Time: '.$ab_exec_time.' Sec. -->';
die();
}

if ($ab_config['antibot_log_users'] == 1) {
file_put_contents(__DIR__.'/log/users_'.$ab_config['date'].'_'.$ab_config['logsufix'].'.txt', $ab_config['ip'].' ('.gethostbyaddr($ab_config['ip']).') '.$ab_config['useragent'].' '.$ab_config['host']."\n", FILE_APPEND | LOCK_EX);
}
}
