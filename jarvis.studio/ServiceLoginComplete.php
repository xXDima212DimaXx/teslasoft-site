<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/antiflood/fban.php');
// Статус проверки
$pass_check = 0;

// IP проверка
require_once($_SERVER['DOCUMENT_ROOT'].'/ban/ip_check.php');

// Вызов функции, отображающей страницу сайта
if ($pass_check == 1) {
    app();
}

function app() {
$did = $_GET['did'];
$c = $_GET['c'];
$lang = $_GET['lang'];
$email = $_GET['email'];
$uid = $_GET['uid'];
$username = $_GET['username'];
$token = $_GET['token'];

$response = <<<EOL
{"device_id":"$did","app_id":"$c","user_email":"$email","user_name":"$username","user_id":"$uid","auth_token":"$token"}
EOL;

$cont = <<<EOL
<script>window.location.assign("$c?uid=$uid&token=$token");</script>
EOL;

if (strpos($c, 'http://') !== false || strpos($c, 'https://') !== false) {
    echo($cont);
} else {
    echo($response);
}
}
?>