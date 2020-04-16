<?php
/************************************************
*   
*   Jarvis Chat | Register page
*   
*   (C) 2020 Teslasoft. All right reserved
*   
*   This file protected under EULA (End User Licence Agement):
*       https://jarvis.studio/eula/
*   
*   ----- Service information -----
*   Permissions:
*       - op.permission.oauth.*
*       - op.permission.authentication.*
*       - op.permission.set.*
*       - php.autorun.*.*
*       - request.set.*.*
*       - request.code.*.*
*   
*   Modules:
*       firebase-app.js
*       firebase-auth.js
*       jarvis.webapp.*
*       
*   Servers:
*       208.82.114.170
*       jarvis.studio
*       clients.jarvis.studio
*       users.jarvis.studio
*       jarvis-a301b.firebaseio.com
*   
*   Domain:
*       users.jarvis.studio
*   
*   SSL:
*       TRUE
*   
*   Site:
*       https://users.jarvis.studio
*   
*   HTTPS_ONLY:
*       TRUE
*   
*   PUBLUC_PATH:
*       https;//users.jarvis.studio/register/index.php
*   
*   LOCAL_PATH:
*       /home/jarvisst/users.jarvis.studio/register/index.php
*   
*   System:
*       Linux
*   
*   Shell:
*       CPanel
*   
*   SSL_ENCRYPTION:
*       BIT:2048
*   
*   CONNECTION_IS_ENCRYPTED:
*       TRUE
*   
************************************************/

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

$continue = htmlspecialchars(isset($_GET['continue']) ? $_GET['continue'] : "https://jarvis.studio/home");

echo <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
        <meta name = "viewport" content = "width=device-width, user-scalable=no">
        <title>Jarvis | Register</title>
        <link rel = "icon" type="image/png" href = "https://jarvis.studio/res/images/jarvis.png">
        <link rel = "stylesheet" href = "https://jarvis.studio/register/css/styles-main.css">
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/icons/icons.css">
        <link rel = "stylesheet" href = "https://jarvis.studio/css/main.css">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/mdl/1.3.0/css/material.purple-red.min.css">
        <link rel = "stylesheet" href = "https://users.jarvis.studio/home/css/material-red.min.css">
        <script src = "https://cdns.jarvis.studio/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.12.0/firebase-auth.js"></script>
        <script src = "https://cdns.jarvis.studio/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src = "https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
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
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/5e787ddd8d24fc2265896ba6/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        <style>
            ::-webkit-scrollbar {
                width: 0;
            }
            
            /* Track */
            ::-webkit-scrollbar-track {
                background: #424242;
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #525252; 
            }
            
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #616161; 
            }
            
            .loadp {
				position: fixed;
				left: 0;
				top: 0;
				height: 100%;
				width: 100%;
				z-index: -5;
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
			
			.text-c {
			    width: 100%;
                text-align: center;
            }

            .recaptcha {
                display: inline-block;
            }
            
            .text-danger {
		        color: #ff3d00;
		    }
        </style>
    </head>
    <body>
        <div class = "loadp" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active"></div>
			</div>
		</div>
        <form action = "javascript:register()" class="login_form" method="POST" id="commandform" name="commandform">
			<p class = "login_title">Register</p>
			<br>
			<p class = "login_hint">Email: <input name="email" type="text" class="input_email" autofocus id="email" required></p>
			<br>
			<p class = "login_hint">Password: <input name="password" type="password" class="input_password" autofocus id="password" required></p>
			<br>
			<p class = "login_hint">Repeat password: <input name="repassword" type="password" class="input_repassword" autofocus id="repassword" required></p>
			<br>
			<div class = "text-c"><div id = "recaptcha" class = "recaptcha"></div></div>
		    <div class="text-danger" id="recaptchaError"></div>
		    <br>
			<p class = "login_btn"><input class = "btn_login" type="submit" value = "Register" data-callback="submitForm"></p>
		</form>
		<div class = "note">
		    <br>
            <div class = "note2">
                <p style = "color: #fafafa; width: 100%; text-align: center; padding: 0; margin: 0">
                    <a href = "https://jarvis.studio/login/oauth?continue=$continue" class = "rlink">Sign In</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio" class = "rlink">Main page</a>
                </p>
            </div>
        </div>
        <script type="text/javascript">
            var onloadCallback = function() {
                grecaptcha.render('recaptcha', {
                    'sitekey' : '6LdYMOIUAAAAANOKFQS9Ap5f8JrWL7rQrFyOCLSQ',
                    'theme' : 'dark'
                });
            };
        </script>
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
            var database = firebase.database();
            
            function register() {
                if (document.getElementById("password").value == document.getElementById("repassword").value) {
                    signout();
                    var errorcod = 0;
                    document.getElementById('loadp').style.zIndex = "5";
                    firebase.auth().createUserWithEmailAndPassword(document.getElementById("email").value, document.getElementById("password").value).catch(function(error) {
                        document.getElementById('loadp').style.zIndex = "-5";
                        var errorCode = error.code;
                        var errorMessage = error.message;
                        errorcod = 1;
                        alert(errorMessage);
                    });
                    
                    setTimeout(function () {
                        if (errorcod == 0) {
                            window.location.replace("https://jarvis.studio/login/oauth?continue=$continue");
                        }
                    }, 2500);
                }
                
                else {
                    alert("Passwords does not match");
                }
            }
            
            function signin() {
                document.getElementById('loadp').style.zIndex = "5";
                //alert("checking info");
                firebase.auth().signInWithEmailAndPassword(document.getElementById("email").value, document.getElementById("password").value).catch(function(error) {
                    // Handle Errors here.
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    document.getElementById('loadp').style.zIndex = "-5";
                    alert(errorMessage);    
                });
            }
            
            firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                    // User is signed in.
                    var displayName = user.displayName;
                    var email = user.email;
                    var emailVerified = user.emailVerified;
                    var photoURL = user.photoURL;
                    var isAnonymous = user.isAnonymous;
                    var uid = user.uid;
                    var providerData = user.providerData;
                    signout();
                } else {
                    document.getElementById('loadp').style.zIndex = "-5";
                }
            });
                
            function signout() {
                firebase.auth().signOut().then(function() {
                    // Sign-out successful.
                }).catch(function(error) {
                    // An error happened.
                });
            }
        </script>
    </body>
</html>
EOL;
}
?>