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
$device_id = $_GET['did'];
$continue = $_GET['c'];
$lang = $_GET['lang'];
$email = $_GET['email'];

$strings_res = array(
    "ru_RU_title" => "Войти",
    "en_US_title" => "Sign In",
    "sk_SK_title" => "Prihlasiť sa",
    "ua_UA_title" => "Увійти",
    "ru_RU_subtitle" => "Используйте свой аккаунт Jarvis",
    "en_US_subtitle" => "Use your Jarvis account",
    "sk_SK_subtitle" => "Použivate svoj učet",
    "ua_UA_subtitle" => "Увійдіть за допомогою облікового запису Jarvis",
    "ru_RU_ehint" => "Адрес электронной почты",
    "en_US_ehint" => "Email",
    "sk_SK_ehint" => "Emailova adresa",
    "ua_UA_ehint" => "Адреса електронної пошти",
    "ru_RU_btn_em_c" => "Далее",
    "en_US_btn_em_c" => "Continue",
    "sk_SK_btn_em_c" => "Pokračovať",
    "ua_UA_btn_em_c" => "Далі",
    "ru_RU_phint" => "Пароль",
    "en_US_phint" => "Password",
    "sk_SK_phint" => "Heslo",
    "ua_UA_phint" => "Пароль",
    "ru_RU_btn_pa_c" => "Войти",
    "en_US_btn_pa_c" => "Login",
    "sk_SK_btn_pa_c" => "Prihlasiť sa",
    "ua_UA_btn_pa_c" => "Увійти",
    "ru_RU_lang" => "Русский (Россия)",
    "en_US_lang" => "English (United States)",
    "sk_SK_lang" => "Slovenčina (Slovensko)",
    "ua_UA_lang" => "Українська (Україна)",
    "ru_RU_error_title" => "Произошла ошибка",
    "en_US_error_title" => "An error occured",
    "sk_SK_error_title" => "Vyskutla sa chyba",
    "ua_UA_error_title" => "Сталася помилка",
    "ru_RU_in_email" => "Вы указали неверный адрес электронной почты",
    "en_US_in_email" => "You entered invalid email",
    "sk_SK_in_email" => "Ste zadali neplatnu emailovu adresu",
    "ua_UA_in_email" => "Ви вказали недійсну адресу електронної пошти",
    "ru_RU_no_email" => "Вы не ввели адрес электронной почты",
    "en_US_no_email" => "Email field can not be empty",
    "sk_SK_no_email" => "Musite zadať emailovu adresu",
    "ua_UA_no_email" => "Ви не вказали адресу електронної пошти",
    "ru_RU_no_pass" => "Вы не ввели пароль",
    "en_US_no_pass" => "Password field can not be empty",
    "sk_SK_no_pass" => "Musite zadať heslo",
    "ua_UA_no_pass" => "Ви не вказали пароль",
    "ru_RU_no_user" => "Аккаунт не найден",
    "en_US_no_user" => "Account not found",
    "sk_SK_no_user" => "Nepodarilo sa najsť vaš učet",
    "ua_UA_no_user" => "Вказанний обліковий запис не знайдено",
    "ru_RU_in_pass" => "Неверный пароль",
    "en_US_in_pass" => "Incorrect password",
    "sk_SK_in_pass" => "Ste zadali neplatné heslo",
    "ua_UA_in_pass" => "Невірний пароль",
    "ru_RU_btn_prev" => "Назад",
    "en_US_btn_prev" => "Back",
    "sk_SK_btn_prev" => "Naspäť",
    "ua_UA_btn_prev" => "Назад",
);

$title = $strings_res[$lang."_title"];
$subtitle = $strings_res[$lang."_subtitle"];
$email_hint = $strings_res[$lang."_ehint"];
$btn_email_continue = $strings_res[$lang."_btn_em_c"];
$pass_hint = $strings_res[$lang."_phint"];
$btn_pass_continue = $strings_res[$lang."_btn_pa_c"];
$lang_select = $strings_res[$lang."_lang"];
$error_title = $strings_res[$lang."_error_title"];
$in_email = $strings_res[$lang."_in_email"];
$no_email = $strings_res[$lang."_no_email"];
$no_user = $strings_res[$lang."_no_user"];
$no_pass = $strings_res[$lang."_no_pass"];
$in_pass = $strings_res[$lang."_in_pass"];
$btn_prev = $strings_res[$lang."_btn_prev"];

$app = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <title>$title</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/mdl/1.3.0/css/material.purple-red.min.css">
        <link type = "image/png" rel = "icon" href = "https://jarvis.studio/res/images/img?id=favicon">
        <style>
            html, body {
                margin: 0;
                padding: 0;
                background-color: #121212;
                user-select: none;
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
            
            .main {
                text-align: center;
                width: 100vw;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: sans-serif;
            }
            
            .bg {
                width: 360px;
                height: 640px;
                background-color: #121212;
            }
            
            .form {
                position: relative;
                width: 360px;
                height: 640px;
                display: flex;
                margin: auto;
                flex-direction: column;
            }
            
            .text {
                color: #cecece;
                padding: 0;
                margin: 0;
            }
            
            .title {
                color: #fafafa;
                padding: 0;
                margin: 0;
                font-size: 24px;
                user-select: none;
            }
            
            .subtitle {
                color: #cecece;
                padding: 0;
                margin: 0;
                font-size: 16px;
                user-select: none;
            }
            
            .main-icon {
                width: 70px;
                height: 70px;
                margin-top: 72px;
                margin-bottom: 36px;
                margin-left: auto;
                margin-right: auto;
                user-select: none;
            }
            
            .user-input {
                outline: 0;
                width: 280px;
                height: 24px;
                border-radius: 4px;
                border: 3px solid #090909;
                color: #fafafa;
                background-color: #090909;
                font-size: 18px;
                padding: 8px;
                margin-top: 24px;
                margin-bottom: 24px;
                transition: 0.5s;
            }
            
            .user-input:hover {
                border: 3px solid #181818;
                background-color: #181818;
                transition: 0.5s;
            }
            
            .user-input:focus {
                color: #fafafa;
                background-color: #323232;
                transition: 0.5s;
                border: 3px solid #db4437;
            }
            
            .form-btn-frame {
                width: 310px;
                text-align: right;
            }
            
            .user-form {
                width: 320px;
                padding: 0;
                margin-left: 20px;
                margin-right: 20px;
            }
            
            .user-submit {
                width: 100px;
                height: 32px;
                outline: none;
                border-radius: 4px;
                border: none;
                color: #ffffff;
                background-color: #db4437;
                transition: 0.3s;
                cursor: pointer;
                user-select: none;
                    -webkit-tap-highlight-color: transparent;
            }
            
            .user-submit:hover {
                opacity: 0.8;
                transition: 0.3s;
            }
            
            .user-submit:focus {
                color: #212121;
                opacity: 1.0;
                background-color: #fafafa;
                transition: 0.3s;
            }
            
            .options {
                position: absolute;
                width: 320px;
                left: 20px;
                height: 32px;
                bottom: 24px;
                user-select: none;
                transition: 0.3s;
                border-radius: 4px;
                cursor: pointer;
                    -webkit-tap-highlight-color: transparent;
            }
            
            .options:hover {
                background-color: #323232;
                transition: 0.3s;
            }
            
            .lang-icon {
                color: #cecece;
                margin-top: -2px;
                user-select: none;
                cursor: pointer;
            }
            
            .lang-list {
                color: #cecece;
                font-size: 16px;
                paddint-top: 1px;
                user-select: none;
                cursor: pointer;
            }
            
            .menu-item {
                color: #fafafa;
                transition: 0.3s;
            }
            
            .menu-item:hover {
                background-color: #454545;
                transition: 0.3s;
                color: #fafafa;
            }
            
            .menu-item:focus {
                background-color: #454545;
                transition: 0.3s;
                color: #fafafa;
            }
            
            .menu-item:active {
                background-color: #454545;
                transition: 0.3s;
                color: #fafafa;
            }
            
            .menu-dropdown {
                background-color: #424242;
                width: 280px;
            }
            
            @media (min-width: 640px) {
                .bg {
                    width: 640px;
                    height: 640px;
                    border-radius: 8px;
                    border: 2px solid #323232;
                    background-color: #212121;
                }
                
                .user-input {
                    border: 3px solid #121212;
                    background-color: #121212;
                }
            }
        </style>
    </head>
    <body>
        <div class = "loadp unselective" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active unselective"></div>
			</div>
		</div>
        <div class = "main">
            <div class = "bg">
                <div class = "form">
                    <img class = "main-icon" src = "https://jarvis.studio/res/images/img?id=favicon">
                    <span class = "title">$title</span>
                    <br>
                    <span class = "subtitle">$subtitle</span>
                    
                    <div class = "user-form">
                        <input class = "user-input" placeholder = "$email_hint" id = "email" autofocus>
                        <div class = "form-btn-frame">
                            <button class = "user-submit" onclick = "continueLogin()">$btn_email_continue</button>
                        </div>
                    </div>
                    <div class = "options" id = "language">
                        <span class = "lang-list">$lang_select
                            <button class = "lang-icon mdl-button mdl-js-button mdl-button--icon">
                            <i class="material-icons">arrow_drop_down</i>
                            </button>
                        </span>
                        
                        <ul class="menu-dropdown mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="language">
                            <li class="menu-item mdl-menu__item" onclick = "selectEnglish()">English</li>
                            <li class="menu-item mdl-menu__item" onclick = "selectRussian()">Русский</li>
                            <li class="menu-item mdl-menu__item" onclick = "selectSlovak()">Slovenčina</li>
                            <li class="menu-item mdl-menu__item" onclick = "selectUkrainian()">Українська</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
        <script src = "https://cdns.jarvis.studio/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase-auth.js"></script>
        <script>
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
            
            firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                    document.getElementById('loadp').style.zIndex = "999";
                    var displayName = user.displayName;
                    var email = user.email;
                    var emailVerified = user.emailVerified;
                    var photoURL = user.photoURL;
                    var isAnonymous = user.isAnonymous;
                    var uid = user.uid;
                    var providerData = user.providerData;
                    var database = firebase.database();
                    var usr = firebase.database().ref('data/web/'+uid+'/username').once('value').then(function(snapshot) {
                        var username = snapshot.val();
                        window.location.assign("https://jarvis.studio/ServiceLogin?did=$device_id&lang=$lang&c=$continue&email=" + email);
                    });
                } else {
                    document.getElementById('loadp').style.zIndex = "-5";
                }
            });
            
            $(document).keyup(function(event) {
                if (event.which === 13) {
                    continueLogin();
                }
            });
            
            function selectEnglish() {
                document.getElementById('loadp').style.zIndex = "999";
                window.location.assign("https://jarvis.studio/ServiceLogin?did=$device_id&lang=en_US&c=$continue");
            }
            
            function selectRussian() {
                document.getElementById('loadp').style.zIndex = "999";
                window.location.assign("https://jarvis.studio/ServiceLogin?did=$device_id&lang=ru_RU&c=$continue");
            }
            
            function selectSlovak() {
                document.getElementById('loadp').style.zIndex = "999";
                window.location.assign("https://jarvis.studio/ServiceLogin?did=$device_id&lang=sk_SK&c=$continue");
            }
            
            function selectUkrainian() {
                document.getElementById('loadp').style.zIndex = "999";
                window.location.assign("https://jarvis.studio/ServiceLogin?did=$device_id&lang=ua_UA&c=$continue");
            }
            
            function continueLogin() {
                document.getElementById('loadp').style.zIndex = "999";
                var emm = document.getElementById("email").value;
                if (emm === "") {
                    window.location.assign("https://jarvis.studio/ServiceLoginError?err=$no_email&lang=$lang");
                    // alert("$no_email");
                } else {
                    window.location.assign("https://jarvis.studio/ServiceLogin?did=$device_id&lang=$lang&c=$continue&email=" + emm);
                    
                    /* firebase.auth().signInWithEmailAndPassword(emm, "null").catch(function(error) {
                        // Handle Errors here.
                        var errorCode = error.code;
                        var errorMessage = error.message;
                        if (errorCode === "auth/invalid-email") {
                            window.location.assign("https://jarvis.studio/ServiceLoginError?err=$in_email&lang=$lang");
                            // alert("$in_email");
                        } else if (errorCode === "auth/user-not-found") {
                            window.location.assign("https://jarvis.studio/ServiceLoginError?err=$no_user&lang=$lang");
                            // alert("$no_user");
                        } else {
                            window.location.assign("https://jarvis.studio/ServiceLogin?did=$device_id&lang=$lang&c=$continue&email=" + emm);
                        }
                    });*/
                }
            }
        </script>
    </body>
</html>
EOL;

$pass = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <title>$title</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/mdl/1.3.0/css/material.purple-red.min.css">
        <link type = "image/png" rel = "icon" href = "https://jarvis.studio/res/images/img?id=favicon">
        <style>
            html, body {
                margin: 0;
                padding: 0;
                background-color: #121212;
            }
            
            .main {
                text-align: center;
                width: 100vw;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: sans-serif;
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
            
            .bg {
                width: 360px;
                height: 640px;
                background-color: #121212;
            }
            
            .form {
                position: relative;
                width: 360px;
                height: 640px;
                display: flex;
                margin: auto;
                flex-direction: column;
            }
            
            .text {
                color: #cecece;
                padding: 0;
                margin: 0;
            }
            
            .title {
                color: #fafafa;
                padding: 0;
                margin: 0;
                font-size: 24px;
                user-select: none;
            }
            
            .subtitle {
                color: #cecece;
                padding: 0;
                margin: 0;
                font-size: 16px;
                user-select: none;
            }
            
            .main-icon {
                width: 70px;
                height: 70px;
                margin-top: 72px;
                margin-bottom: 36px;
                margin-left: auto;
                margin-right: auto;
                user-select: none;
            }
            
            .user-input {
                outline: 0;
                width: 280px;
                height: 24px;
                border-radius: 4px;
                border: 3px solid #090909;
                color: #fafafa;
                background-color: #090909;
                font-size: 18px;
                padding: 8px;
                margin-top: 24px;
                margin-bottom: 24px;
                transition: 0.5s;
            }
            
            .user-input:hover {
                border: 3px solid #181818;
                background-color: #181818;
                transition: 0.5s;
            }
            
            .user-input:focus {
                color: #fafafa;
                background-color: #323232;
                transition: 0.5s;
                border: 3px solid #db4437;
            }
            
            .form-btn-frame {
                width: 310px;
                text-align: right;
            }
            
            .user-form {
                width: 320px;
                padding: 0;
                margin-left: 20px;
                margin-right: 20px;
            }
            
            .user-submit {
                width: 100px;
                height: 32px;
                outline: none;
                border-radius: 4px;
                border: none;
                color: #ffffff;
                background-color: #db4437;
                transition: 0.3s;
                cursor: pointer;
                user-select: none;
                    -webkit-tap-highlight-color: transparent;
            }
            
            .user-submit:hover {
                opacity: 0.8;
                transition: 0.3s;
            }
            
            .user-submit:focus {
                color: #212121;
                opacity: 1.0;
                background-color: #fafafa;
                transition: 0.3s;
            }
            
            .btn-second {
                color: #121212;
                margin-right: 24px;
                background-color: #cecece;
                transition: 0.3s;
                cursor: pointer;
                user-select: none;
                    -webkit-tap-highlight-color: transparent;
            }
            
            .user-submit:hover {
                opacity: 0.8;
                transition: 0.3s;
            }
            
            .user-submit:focus {
                color: #212121;
                opacity: 1.0;
                background-color: #999999;
                transition: 0.3s;
            }
            
            .options {
                position: absolute;
                width: 320px;
                left: 20px;
                height: 32px;
                bottom: 24px;
                user-select: none;
                transition: 0.3s;
                border-radius: 4px;
                cursor: pointer;
                    -webkit-tap-highlight-color: transparent;
            }
            
            .options:hover {
                background-color: #323232;
                transition: 0.3s;
            }
            
            .lang-icon {
                color: #cecece;
                margin-top: -2px;
                user-select: none;
                cursor: pointer;
            }
            
            .lang-list {
                color: #cecece;
                font-size: 16px;
                paddint-top: 1px;
                user-select: none;
                cursor: pointer;
            }
            
            .menu-item {
                color: #fafafa;
                transition: 0.3s;
            }
            
            .menu-item:hover {
                background-color: #454545;
                transition: 0.3s;
                color: #fafafa;
            }
            
            .menu-item:focus {
                background-color: #454545;
                transition: 0.3s;
                color: #fafafa;
            }
            
            .menu-item:active {
                background-color: #454545;
                transition: 0.3s;
                color: #fafafa;
            }
            
            .menu-dropdown {
                background-color: #424242;
                width: 280px;
            }
            
            @media (min-width: 640px) {
                .bg {
                    width: 640px;
                    height: 640px;
                    border-radius: 8px;
                    border: 2px solid #323232;
                    background-color: #212121;
                }
                
                .user-input {
                    border: 3px solid #121212;
                    background-color: #121212;
                }
            }
        </style>
    </head>
    <body>
        <div class = "loadp unselective" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active unselective"></div>
			</div>
		</div>
        <div class = "main">
            <div class = "bg">
                <div class = "form">
                    <img class = "main-icon" src = "https://jarvis.studio/res/images/img?id=favicon">
                    <span class = "title">$title</span>
                    <br>
                    <span class = "subtitle">$subtitle</span>
                    
                    <div class = "user-form">
                        <input class = "user-input" placeholder = "$pass_hint" id = "password" type = "password" autofocus>
                        <div class = "form-btn-frame">
                            <button class = "btn-second user-submit" onclick = "prev();">$btn_prev</button>
                            <button class = "user-submit" onclick = "auth();">$btn_pass_continue</button>
                        </div>
                    </div>
                    <div class = "options" id = "language">
                        <span class = "lang-list">$lang_select
                            <button class = "lang-icon mdl-button mdl-js-button mdl-button--icon">
                            <i class="material-icons">arrow_drop_down</i>
                            </button>
                        </span>
                        
                        <ul class="menu-dropdown mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="language">
                            <li class="menu-item mdl-menu__item" onclick = "selectEnglish()">English</li>
                            <li class="menu-item mdl-menu__item" onclick = "selectRussian()">Русский</li>
                            <li class="menu-item mdl-menu__item" onclick = "selectSlovak()">Slovenčina</li>
                            <li class="menu-item mdl-menu__item" onclick = "selectUkrainian()">Українська</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
        <script src = "https://cdns.jarvis.studio/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase-auth.js"></script>
        <script>
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
            
            firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                    document.getElementById('loadp').style.zIndex = "999";
                    var displayName = user.displayName;
                    var email = user.email;
                    var emailVerified = user.emailVerified;
                    var photoURL = user.photoURL;
                    var isAnonymous = user.isAnonymous;
                    var uid = user.uid;
                    var providerData = user.providerData;
                    var database = firebase.database();
                    var usr = firebase.database().ref('data/web/'+uid+'/username').once('value').then(function(snapshot) {
                        var username = snapshot.val();
                        
                        var token = firebase.database().ref('data/web/'+uid+'/permanent_auth_token').once('value').then(function(snapshot) {
                            var auth_token = snapshot.val();
                            
                            window.location.assign("https://jarvis.studio/ServiceLoginComplete?did=$device_id&lang=$lang&c=$continue&email=$email&uid=" + uid + "&username=" + username + "&token=" + auth_token);
                        });
                    });
                } else {
                    setTimeout(function() {
                        document.getElementById('loadp').style.zIndex = "-5";
                    }, 1500);
                }
            });
            
            $(document).keyup(function(event) {
                if (event.which === 13) {
                    auth();
                }
            });
            
            $(document).keyup(function(event) {
                if (event.which === 27) {
                    document.getElementById('loadp').style.zIndex = "999";
                    window.history.back();
                }
            });
            
            function prev() {
                document.getElementById('loadp').style.zIndex = "999";
                window.history.back();
            }
            
            function selectEnglish() {
                document.getElementById('loadp').style.zIndex = "999";
                window.location.assign("https://jarvis.studio/ServiceLogin?did=$device_id&lang=en_US&c=$continue&email=$email");
            }
            
            function selectRussian() {
                document.getElementById('loadp').style.zIndex = "999";
                window.location.assign("https://jarvis.studio/ServiceLogin?did=$device_id&lang=ru_RU&c=$continue&email=$email");
            }
            
            function selectSlovak() {
                document.getElementById('loadp').style.zIndex = "999";
                window.location.assign("https://jarvis.studio/ServiceLogin?did=$device_id&lang=sk_SK&c=$continue&email=$email");
            }
            
            function selectUkrainian() {
                document.getElementById('loadp').style.zIndex = "999";
                window.location.assign("https://jarvis.studio/ServiceLogin?did=$device_id&lang=ua_UA&c=$continue&email=$email");
            }
            
            function auth() {
                document.getElementById('loadp').style.zIndex = "999";
                var pas = document.getElementById("password").value;
                if (pas === "") {
                    window.location.assign("https://jarvis.studio/ServiceLoginError?err=$no_pass&lang=$lang");
                    // alert("$no_pass");
                } else {
                    firebase.auth().signInWithEmailAndPassword("$email", pas).catch(function(error) {
                        // Handle Errors here.
                        var errorCode = error.code;
                        var errorMessage = error.message;
                        
                        if (errorCode === "auth/user-not-found") {
                            window.location.assign("https://jarvis.studio/ServiceLoginError?err=$no_user&lang=$lang");
                            // alert("$no_user");
                        } else {
                            window.location.assign("https://jarvis.studio/ServiceLoginError?err=$in_pass&lang=$lang");
                            // alert("$in_pass");
                        }
                    });
                }
            }
        </script>
    </body>
</html>
EOL;

if ($device_id != "" && $continue != "") {
    if ($email != "") {
        if ($lang == "en_US" || $lang == "ru_RU"|| $lang == "sk_SK"|| $lang == "ua_UA") {
            echo $pass;
        } else {
            echo("<script>window.location.assign('https://jarvis.studio/ServiceLogin?did=".$device_id."&lang=en_US&c=".$continue."&email=".$email."');</script>");
        }
    } else {
        if ($lang == "en_US" || $lang == "ru_RU"|| $lang == "sk_SK"|| $lang == "ua_UA") {
            echo $app;
        } else {
            echo("<script>window.location.assign('https://jarvis.studio/ServiceLogin?did=".$device_id."&lang=en_US&c=".$continue."');</script>");
        }
    }
} else {
    echo("<script>window.location.assign('https://jarvis.studio/ServiceLoginError?lang=".$lang."');</script>");
}
}
?>