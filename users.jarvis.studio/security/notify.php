<?php
if ($_GET['email'] == '') {
    echo 'Forbidden'.PHP_EOL;
}

else {
    if ($_GET['device'] == '') {
        echo 'Forbidden'.PHP_EOL;
    }
    
    else {
        if ($_GET['time'] == '') {
            echo 'Forbidden'.PHP_EOL;
        }
        
        else {
            if ($_GET['username'] == '') {
                echo 'Forbidden'.PHP_EOL;
            }
            
            else {
                $to_email = $_GET['email'];
                $subject = 'Hi, '.$_GET['username'];
                $device = $_GET['device'];
                $time = $_GET['time'];
                
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $headers .= 'From: support@jarvis.studio';
                $message = <<<EOT
                <p>You are signed in on a new device: $device.</p><p>Login time: $time</p><p>If you don't register a Jarvis Account, please ignore this message.</p><p>Teslasoft Jarvis</p>
EOT;
                if(mail($to_email,$subject,$message,$headers)) {
                    echo 'Security notification sent successfully. Please check inbox and spam'.PHP_EOL;
                    echo '<script>window.location.replace("https://users.jarvis.studio/home/")</script>'.PHP_EOL;
                }
                
                else {
                    echo 'You over the quota. Please try later'.PHP_EOL;
                    echo '<script>window.location.replace("https://users.jarvis.studio/home/")</script>'.PHP_EOL;
                }
            }
        }
    }
}
?>