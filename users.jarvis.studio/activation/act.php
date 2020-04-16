<?php
if ($_GET['email'] == '') {
    echo 'Forbidden'.PHP_EOL;
}

else {
    if ($_GET['code'] == '') {
        echo 'Forbidden'.PHP_EOL;
    }
    
    else {
        $to_email = $_GET['email'];
        $subject = 'Account activation';
        $code = $_GET['code'];
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: support@jarvis.studio';
        
        $message = <<<EOT
        <P>Your activation code is $code. Use it to activate Jarvis.</p><p>If you don't register a Jarvis Account, please ignore this message.</p><p>Teslasoft Jarvis</p>
EOT;
        if (mail($to_email,$subject,$message,$headers)) {
            echo 'Activation code sent successfully. Please check inbox and spam'.PHP_EOL;
        }
        
        else {
            echo 'You over the quota. Please try later'.PHP_EOL;
        }
    }
}
?>