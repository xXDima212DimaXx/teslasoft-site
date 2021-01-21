<?php
$auth_token = $_GET['token'];
$user_id = $_GET['uid'];

if ($auth_token != "" && $user_id != "") {
    $user_path = './'.$user_id.'/token.dat';
    $cred = file_get_contents($user_path);
    if ($cred == $auth_token) {
        echo("true");
    } else {
        echo("false");
    }
} else {
    echo("false");
}
?>