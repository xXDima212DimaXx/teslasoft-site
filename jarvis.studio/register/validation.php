<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/antibot/antibot_include.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/antiflood/fban.php');

// Статус проверки
$pass_check = 0;

// IP проверка
require_once($_SERVER['DOCUMENT_ROOT'].'/ban/ip_check.php');

// Вызов функции, отображающей страницу сайта
if ($pass_check == 1) {
    app();
}

// Отображение страницы сайта
function app() {

$secret = '6LdYMOIUAAAAAN88s9yHlWCQqP_3IKT3A7DRylVR';
$username = $_POST["username"];
$password = $_POST["password"];

if ($_GET['continue'] == '') {
    $continue = 'https://jarvis.studio/home';
}

else {
    $continue = $_GET['continue'];
}

require_once ($_SERVER['DOCUMENT_ROOT'].'/recaptcha/autoload.php');

if (isset($_POST['g-recaptcha-response'])) {
    // создать экземпляр службы recaptcha, используя секретный ключ
    $recaptcha = new \ReCaptcha\ReCaptcha($secret);
    // получить результат проверки кода recaptcha
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    // если результат положительный, то...
    if ($resp->isSuccess()){
$submited = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <title>Проверка безопасности...</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, user-scalable=no">
        <link rel = "icon" type="image/png" href = "https://jarvis.studio/res/images/jarvis.png">
        <link rel = "stylesheet" href = "https://jarvis.studio/login/css/styles-main.css">
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/icons/icons.css">
        <link rel = "stylesheet" href = "https://jarvis.studio/css/main.css">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/mdl/1.3.0/css/material.purple-red.min.css">
        <link rel = "stylesheet" href = "https://users.jarvis.studio/home/css/material-red.min.css">
        <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
		<script src = "https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
        <script src = "https://cdns.jarvis.studio/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://cdns.jarvis.studio/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.12.0/firebase-auth.js"></script>
        <script src = "https://www.google.com/recaptcha/api.js"></script>
        <style>
            .loadp {
				position: fixed;
				left: 0;
				top: 0;
				height: 100%;
				width: 100%;
				z-index: 10;
				background-color: #121212;
				display: table;
				    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
			}
				
			.load-middle {
				display: table-cell;
				vertical-align: middle;
				text-align: center;
				    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
			}
        </style>
    </head>
    <body>
        <div class = "loadp" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active"></div>
			</div>
		</div>
        <script>
            // Your web app's Firebase configuration
            var firebaseConfig = {
                apiKey: "AIzaSyDFranKy-P-zj4qpcEkTSho3aMihsC42ts",
                authDomain: "jarvis-a301b.firebaseapp.com",
                databaseURL: "https://jarvis-a301b.firebaseio.com",
                projectId: "jarvis-a301b",
                storageBucket: "jarvis-a301b.appspot.com",
                messagingSenderId: "1083710434382",
                appId: "1:1083710434382:web:ab0b211f85fd1aad8f271f"
            };
            
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            
            firebase.auth().signInWithEmailAndPassword("$username", "$password").catch(function(error) {
                // Handle Errors here.
                var errorCode = error.code;
                var errorMessage = error.message;
                alert(errorMessage);
            });
    
            firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                    var displayName = user.displayName;
                    var email = user.email;
                    var emailVerified = user.emailVerified;
                    var photoURL = user.photoURL;
                    var isAnonymous = user.isAnonymous;
                    var uid = user.uid;
                    var providerData = user.providerData;
                    window.location.replace("$continue");
                } else {
                    //window.location.replace("https://jarvis.studio/login/oauth?continue=$continue");
                }
            });
        </script>
    </body>
</html>
EOL;
        echo $submited;
    } else {
$err = <<<EOL
<p id = "recaptchaError"></p>
<script>
    document.getElementById("recaptchaError").innerHTML = "Please verify that you are not a robot!";
</script>
EOL;
        echo $err;
    }
 
} else {
$err = <<<EOL
<p id = "recaptchaError"></p>
<script>
    document.getElementById("recaptchaError").innerHTML = "Please verify that you are not a robot!";
</script>
EOL;
    echo $err;
}
}
?>