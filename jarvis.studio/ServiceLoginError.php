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
$error_text = $_GET['err'];
$lang = $_GET['lang'];

$strings_res = array(
    "ru_RU_error_title" => "Произошла ошибка",
    "en_US_error_title" => "An error occured",
    "sk_SK_error_title" => "Vyskutla sa chyba",
    "ua_UA_error_title" => "Сталася помилка",
    "ru_RU_param_error" => "Параметры авторизации заданы неверно",
    "en_US_param_error" => "Invalid authentication parameters",
    "sk_SK_param_error" => "Neplatné parametry prohlasenia",
    "ua_UA_param_error" => "Неправильні параметри авторизації",
    "ru_RU_lang" => "Русский (Россия)",
    "en_US_lang" => "English (United States)",
    "sk_SK_lang" => "Slovenčina (Slovensko)",
    "ua_UA_lang" => "Українська (Україна)",
    "ru_RU_btn_prev" => "OK",
    "en_US_btn_prev" => "OK",
    "sk_SK_btn_prev" => "OK",
    "ua_UA_btn_prev" => "OK",
);

$error_title = $strings_res[$lang."_error_title"];
$param_error = $strings_res[$lang."_param_error"];
$lang_select = $strings_res[$lang."_lang"];
$btn_prev = $strings_res[$lang."_btn_prev"];

$err = <<<EOL
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
            
            .btn-fr {
                margin: 50px auto;
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
                    <span class = "title">$error_title</span>
                    <br>
                    <span class = "subtitle">$error_text</span>
                    <button class = "btn-fr user-submit" onclick = "prev();">$btn_prev</button>
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
            document.getElementById('loadp').style.zIndex = "-5";
            
            $(document).keyup(function(event) {
                if (event.which === 13) {
                    document.getElementById('loadp').style.zIndex = "999";
                    window.history.back();
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
                window.location.assign("https://jarvis.studio/ServiceLoginError?err=$error_text&lang=en_US");
            }
            
            function selectRussian() {
                document.getElementById('loadp').style.zIndex = "999";
                window.location.assign("https://jarvis.studio/ServiceLoginError?err=$error_text&lang=ru_RU");
            }
            
            function selectSlovak() {
                document.getElementById('loadp').style.zIndex = "999";
                window.location.assign("https://jarvis.studio/ServiceLoginError?err=$error_text&lang=sk_SK");
            }
            
            function selectUkrainian() {
                document.getElementById('loadp').style.zIndex = "999";
                window.location.assign("https://jarvis.studio/ServiceLoginError?err=$error_text&lang=ua_UA");
            }
        </script>
    </body>
</html>
EOL;

if ($error_text != "") {
    if ($lang == "en_US" || $lang == "ru_RU"|| $lang == "sk_SK"|| $lang == "ua_UA") {
        echo $err;
    } else {
        echo("<script>window.location.assign('https://jarvis.studio/ServiceLoginError?err=".$error_text."&lang=en_US');</script>");
    }
} else {
    if ($lang == "en_US" || $lang == "ru_RU"|| $lang == "sk_SK"|| $lang == "ua_UA") {
        echo("<script>window.location.assign('https://jarvis.studio/ServiceLoginError?err=".$param_error."&lang=".$lang."');</script>");
    } else {
        echo("<script>window.location.assign('https://jarvis.studio/ServiceLoginError?err=".$strings_res["en_US_param_error"]."&lang=en_US');</script>");
    }
}
}
?>