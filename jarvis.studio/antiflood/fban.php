<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/antiflood/punish.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/antiflood/captcha.php');
$ipc = $_SERVER['REMOTE_ADDR'];
$file = './antiflood/db/'.$ipc.'-counter.dat';
$violationsCounter = file_get_contents($file);

if ($violationsCounter == '') {
    $violationsCounter = 0;
    file_put_contents($file, $violationsCounter);
}

if (!isset($_SESSION)) {
    session_start();
}

if ($violationsCounter < 10) {
    if($_SESSION['last_session_request'] > (time() - 2)) {
        if(empty($_SESSION['last_request_count'])){
            $_SESSION['last_request_count'] = 1;
        } elseif($_SESSION['last_request_count'] < 5){
            $_SESSION['last_request_count'] = $_SESSION['last_request_count'] + 1;
        } elseif($_SESSION['last_request_count'] >= 5){
            $violationsCounter++;
            file_put_contents($file, $violationsCounter);
            // echo("<script>alert('".$file."');</script>");
            echo($punishment);
            exit;
        }
    } else {
        $_SESSION['last_request_count'] = 1;
    }
    
    $_SESSION['last_session_request'] = time();
} else {
    echo($over);
    exit;
}
?>