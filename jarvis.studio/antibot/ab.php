<?php
# Version: 5.07
# Author: Mik Foxi admin@mikfoxi.com
# Copyright © 2017 - 2019
# License: GNU GPL v3 - https://www.gnu.org/licenses/gpl-3.0.en.html
# Website: https://antibot.cloud/

error_reporting(0);
ini_set('display_errors', 'off');
ini_set('error_log', __DIR__.'/error_log.txt');
header('Content-Type: application/javascript; charset=UTF-8');
header('X-Powered-CMS: Antibot.Cloud (See: https://antibot.cloud/)');
header('X-Robots-Tag: noindex');
header('X-Frame-Options: DENY');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
$referer = isset($_SERVER['HTTP_REFERER']) ? trim(strip_tags($_SERVER['HTTP_REFERER'])) : '';
if ($referer == '') die('document.getElementById("response_code").innerHTML = "Error Code: 1";');
$refhost = parse_url($referer, PHP_URL_HOST);
$useragent = isset($_SERVER['HTTP_USER_AGENT']) ? trim(strip_tags($_SERVER['HTTP_USER_AGENT'])) : '';
if ($useragent == '') die('document.getElementById("response_code").innerHTML = "Error Code: 2";');
$ab_config['ip'] = trim(strip_tags($_SERVER['REMOTE_ADDR']));
require_once(__DIR__.'/antibot_conf.php');
if ($ab_config['check_url'] == '') die();
if (filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
foreach ($ab_proxy as $proxy_mask => $proxy_attr) {
$net = $proxy_mask;
$ip=ip2long($_SERVER['REMOTE_ADDR']);
list($net,$mask)=explode('/',$net);
$net=ip2long($net);
$mask=pow(2,32-$mask)-1;
$net=$net&~$mask;
if (!(($ip^$net)&~$mask)) {$ab_config['ip'] = $_SERVER[$proxy_attr]; break;}
}
}
echo 'var d = new Date();
d.setTime(d.getTime() + (1*24*60*60*1000));
var expires = "expires="+ d.toUTCString();
document.cookie = "antibot='.md5($ab_config['salt'].$refhost.$useragent).'; " + expires + "; path=/;";
//setTimeout(location.reload.bind(location), 1);
document.getElementById("cf-content").innerHTML = "Loading page, please wait...";
location.reload(true);
';
