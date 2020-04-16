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

$continue = htmlspecialchars(isset($_GET['continue']) ? $_GET['continue'] : "https://jarvis.studio/home");

require_once ($_SERVER['DOCUMENT_ROOT'].'/recaptcha/autoload.php');

$err = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <title>Jarvis</title>
        <meta charset = "utf-8">
        <meta name="google-site-verification" content="X9eiLiDwXWVlvPridgOtXE6ZePiHeRjQ1VoAs7DwOYo" />
        <meta name = "viewport" content="width=device-width, user-scalable=no">
        <meta name = "theme-color" content = "#121212">
        <link rel = "icon" type = "image/png" href = "https://jarvis.studio/res/images/jarvis.png">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/mdl/1.3.0/css/material.purple-red.min.css">
        <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
        <script src = "https://cdns.jarvis.studio/material/mdl/1.3.0/js/material.min.js"></script>
        <script type="text/javascript" id="cookieinfo"
	        src="//cookieinfoscript.com/js/cookieinfo.min.js"
	        data-bg="#323232"
	        data-fg="#FFFFFF"
	        data-link="#DB4437"
	        data-cookie="GDPRCookieAccept"
	        data-text-align="left"
	        data-font-family="Sans-serif"
	        data-font-size="16px"
	        data-message="Наш сайт использует Cookies для персонализации, и улучшения качества обслуживания."
	        data-linkmsg="Детальнее про Cookies"
	        data-moreinfo="https://jarvis.studio/cookies"
	        data-divlink="#FFFFFF"
	        data-divlinkbg="#DB4437"
            data-close-text="Принять все">
        </script>
        <style>
            html, body {
                padding: 0;
                margin: 0;
                background-color: #121212;
            }
            
            p {
                font-size: 16px;
                color: #fafafa;
                font-family: sans-serif;
                padding-top: 2px;
                padding-bottom: 2px;
                padding-left: 0;
                padding-right: 0;
                margin: 0;
            }
            
            span {
                font-size: 16px;
                color: #fafafa;
                font-family: sans-serif;
                padding: 0;
                margin: 0;
            }
            
            br {
                font-size: 0;
                padding: 0;
                margin: 0;
                line-height: 0;
                height: 0;
                width: 0;
            }
            
            .loadp {
            	position: fixed;
	            left: 0;
	            top: 0;
	            height: 100%;
	            width: 100%;
	            z-index: 10;
	            display: table;
	            background-color: #121212;
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
            
            .ban-message {
                color: #db4437;
            }
            
            .ban-ip {
                color: #601fff;
            }
            
            .ban-em {
                color: #2e8b57;
            }
            
            .cheader {
                padding: 24px;
                text-align: center;
            }
            
            .header-icon {
                width: 240px;
                heingt: auto;
            }
            
            @media (min-width: 768px) {
                .header-icon {
                    width: 280px;
                    heingt: auto;
                }
            }
            
            .unselective {
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
            }
            
            .selective-text {
                    -webkit-user-select: text;
                    -moz-user-select: text;
                    -ms-user-select: text;
                    -o-user-select: text;
                    user-select: text;
            }
            
            .main-card-wide.mdl-card {
                width: 90%;
                background-color: #212121;
                border-radius: 4px;
            }
            
            .main-card-wide > .mdl-card__title {
                color: #fff;
                height: 176px;
                backdrop-filter: blur(0px);
            }
            
            .mdl-card__supporting-text {
                background-color: #212121;
            }
            
            .main-card-wide > .mdl-card__menu {
                color: #fff;
            }
            
            .non-hover:hover {
                background-color: rgba(0, 0, 0, 0.0);
            }
            
            .non-hover:active {
                background-color: rgba(0, 0, 0, 0.0);
            }
            
            .mdl-button__ripple-container:hover {
                background-color: rgba(0, 0, 0, 0.0);
            }
            
            .mdl-ripple {
                background: rgba(255, 255, 255, 0.5);
            }
            
            .mdl-card__actions.mdl-card--border {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                z-index: 2;
                background-color: #212121;
            }
        </style>
    </head>
    <body>
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTTNPDT" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <div class = "loadp unselective" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active unselective"></div>
			</div>
		</div>
        <div class = "layout-main unselective">
            <div class = "cheader">
                <a href = "/">
                    <img class = "header-icon unselective" src = "https://jarvis.studio/res/images/teslasoft-logo.png">
                </a>
            </div>
            <div style = "margin: 16px auto;">
                <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                    <div class="mdl-card__title mdl-js-button mdl-js-ripple-effect" onclick = "javascript:void(0)" id = "banbg">
                        <h2 class="mdl-card__title-text unselective">Ошибка</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p class = "unselective">
                            <span class = "unselective">Не удалось войти в систему</span>
                        </p>
                        <p class = "unselective">
                            <span class = "ban-message unselective">Пожалуйста подтвердите что вы не робот</span>
                        </p>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect reload-button unselective" style = "color: #db4437" onclick = "javascript:reload()">
                            Назад
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            window.onload = function() {
		        if(document.createStyleSheet) {
                    document.createStyleSheet('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
                    document.createStyleSheet('https://fonts.googleapis.com/icon?family=Material+Icons');
                    document.createStyleSheet('https://jarvis.studio/css/main.css');
                    document.createStyleSheet('https://jarvis.studio/css/theme-dark.css');
                } else {
                    var styles = "@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap'); @import url('https://fonts.googleapis.com/icon?family=Material+Icons'); @import url('https://jarvis.studio/css/main.css'); @import url('https://jarvis.studio/css/theme-dark.css');";
                    var newSS=document.createElement('link');
                    newSS.rel='stylesheet';
                    newSS.href='data:text/css,'+escape(styles);
                    document.getElementsByTagName("head")[0].appendChild(newSS);
                }
                
                document.getElementById('banbg').style.background = "url('https://jarvis.studio/res/images/card1_bg.webp') center / cover";
                
		        setTimeout(function() {
		            document.getElementById('loadp').style.zIndex = "-5";
		        }, 1000);
		    };
		    
		    function reload() {
		        window.location.replace("https://jarvis.studio/login/oauth?continue=$continue");
		    }
        </script>
    </body>
</html>
EOL;

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
        <title>Jarvis</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, user-scalable=no">
        <link rel = "icon" type="image/png" href = "https://jarvis.studio/res/images/jarvis.png">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/icons/icons.css">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/mdl/1.3.0/css/material.purple-red.min.css">
        <link rel = "stylesheet" href = "https://users.jarvis.studio/home/css/material-red.min.css">
        <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
        <script type="text/javascript" id="cookieinfo"
	        src="//cookieinfoscript.com/js/cookieinfo.min.js"
	        data-bg="#323232"
	        data-fg="#FFFFFF"
	        data-link="#DB4437"
	        data-cookie="GDPRCookieAccept"
	        data-text-align="left"
	        data-font-family="Sans-serif"
	        data-font-size="16px"
	        data-message="Наш сайт использует Cookies для персонализации, и улучшения качества обслуживания."
	        data-linkmsg="Детальнее про Cookies"
	        data-moreinfo="https://jarvis.studio/cookies"
	        data-divlink="#FFFFFF"
	        data-divlinkbg="#DB4437"
            data-close-text="Принять все">
        </script>
        <style>
            html, body {
                padding: 0;
                margin: 0;
                background-color: #121212;
            }
            
            p {
                font-size: 16px;
                color: #fafafa;
                font-family: sans-serif;
                padding-top: 2px;
                padding-bottom: 2px;
                padding-left: 0;
                padding-right: 0;
                margin: 0;
            }
            
            span {
                font-size: 16px;
                color: #fafafa;
                font-family: sans-serif;
                padding: 0;
                margin: 0;
            }
            
            br {
                font-size: 0;
                padding: 0;
                margin: 0;
                line-height: 0;
                height: 0;
                width: 0;
            }
            
            .loadp {
            	position: fixed;
	            left: 0;
	            top: 0;
	            height: 100%;
	            width: 100%;
	            z-index: 10;
	            display: table;
	            background-color: #121212;
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
            
            .ban-message {
                color: #db4437;
            }
            
            .ban-ip {
                color: #601fff;
            }
            
            .ban-em {
                color: #2e8b57;
            }
            
            .cheader {
                padding: 24px;
                text-align: center;
            }
            
            .header-icon {
                width: 240px;
                heingt: auto;
            }
            
            @media (min-width: 768px) {
                .header-icon {
                    width: 280px;
                    heingt: auto;
                }
            }
            
            .unselective {
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
            }
            
            .selective-text {
                    -webkit-user-select: text;
                    -moz-user-select: text;
                    -ms-user-select: text;
                    -o-user-select: text;
                    user-select: text;
            }
            
            .main-card-wide.mdl-card {
                width: 90%;
                background-color: #212121;
                border-radius: 4px;
            }
            
            .main-card-wide > .mdl-card__title {
                color: #fff;
                height: 176px;
                backdrop-filter: blur(0px);
            }
            
            .mdl-card__supporting-text {
                background-color: #212121;
            }
            
            .main-card-wide > .mdl-card__menu {
                color: #fff;
            }
            
            .non-hover:hover {
                background-color: rgba(0, 0, 0, 0.0);
            }
            
            .non-hover:active {
                background-color: rgba(0, 0, 0, 0.0);
            }
            
            .mdl-button__ripple-container:hover {
                background-color: rgba(0, 0, 0, 0.0);
            }
            
            .mdl-ripple {
                background: rgba(255, 255, 255, 0.5);
            }
            
            .mdl-card__actions.mdl-card--border {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                z-index: 2;
                background-color: #212121;
            }
        </style>
    </head>
    <body>
        <div class = "loadp" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active"></div>
			</div>
		</div>
		<div class = "layout-main unselective">
            <div class = "cheader">
                <a href = "/">
                    <img class = "header-icon unselective" src = "https://jarvis.studio/res/images/teslasoft-logo.png">
                </a>
            </div>
            <div style = "margin: 16px auto;">
                <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                    <div class="mdl-card__title mdl-js-button mdl-js-ripple-effect" onclick = "javascript:void(0)" id = "banbg">
                        <h2 class="mdl-card__title-text unselective">Ошибка</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p class = "unselective">
                            <span class = "unselective">Не удалось войти в систему</span>
                        </p>
                        <p class = "unselective">
                            <span class = "ban-message unselective" id = "l_error">Пожалуйста подтвердите что вы не робот</span>
                        </p>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect reload-button unselective" style = "color: #db4437" onclick = "javascript:reload()">
                            Назад
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script src = "https://cdns.jarvis.studio/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.12.0/firebase-auth.js"></script>
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
                document.getElementById("l_error").innerHTML = errorMessage;
                document.getElementById('loadp').style.zIndex = "-5";
                // alert(errorMessage);
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
                    // window.location.replace("https://jarvis.studio/login/oauth?continue=$continue");
                }
            });
            
            function reload() {
		        window.location.replace("https://jarvis.studio/login/oauth?continue=$continue");
		    }
        </script>
        <script>
            window.onload = function() {
		        if(document.createStyleSheet) {
                    document.createStyleSheet('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
                    document.createStyleSheet('https://fonts.googleapis.com/icon?family=Material+Icons');
                    document.createStyleSheet('https://jarvis.studio/css/main.css');
                    document.createStyleSheet('https://jarvis.studio/css/theme-dark.css');
                } else {
                    var styles = "@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap'); @import url('https://fonts.googleapis.com/icon?family=Material+Icons'); @import url('https://jarvis.studio/css/main.css'); @import url('https://jarvis.studio/css/theme-dark.css');";
                    var newSS=document.createElement('link');
                    newSS.rel='stylesheet';
                    newSS.href='data:text/css,'+escape(styles);
                    document.getElementsByTagName("head")[0].appendChild(newSS);
                }
                
                document.getElementById('banbg').style.background = "url('https://jarvis.studio/res/images/card2_bg.webp') center / cover";
		    };
        </script>
    </body>
</html>
EOL;
        echo $submited;
    } else {
        echo $err;
    }
 
} else {
    echo $err;
}
}
?>