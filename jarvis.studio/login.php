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

// Отображение страницы сайта
function app() {

$continue = htmlspecialchars(isset($_GET['continue']) ? $_GET['continue'] : "https://jarvis.studio/home");

$app = <<<EOL
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
                        <h2 class="mdl-card__title-text unselective">Подождите</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p class = "unselective">
                            <span class = "unselective">Пожалуйста, подождите...</span>
                        </p>
                        <p class = "unselective">
                            <span class = "ban-message unselective">Выполняется перенаправление</span>
                        </p>
                    </div>
                    <!--<div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect reload-button unselective" style = "color: #db4437" onclick = "javascript:reload()">
                            Назад
                        </a>
                    </div>-->
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
                window.location.replace("https://jarvis.studio/login/oauth?continue=$continue");
		    };
        </script>
    </body>
</html>
EOL;
echo $app;
}
?>