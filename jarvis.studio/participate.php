<?
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

/********* INITIALIZATION START **********/
$application = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Jarvis | Учавствовать в проекте</title>
        <meta name = "viewport" content="width=device-width, user-scalable=no">
        <meta name = "theme-color" content = "#121212"/>
        <meta name = "keywords" content="Teslasoft, Jarvis, Teslasoft Jarvis, Jarvis studio" />
        <link rel = "icon" type = "image/x-icon" href = "https://jarvis.studio/res/images/img?id=favicon">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/mdl/1.3.0/css/material.purple-red.min.css">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/drawer/css/drawer-dark.css">
        <script src='https://www.googletagmanager.com/gtm.js?id=GTM-KTTNPDT'></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158890085-1"></script>
        <script async src='https://www.google-analytics.com/analytics.js'></script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e99b56306150d63"></script>
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
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-KTTNPDT');
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-158890085-1', 'auto');
            ga('send', 'pageview');
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-158890085-1');
        </script>
        <style>
            html, body {
                color: #121212;
                background-color: #121212;
                transition: 0.3s;
                font-display: optional;
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
            
            .li-label {
                line-height: 48px;
                padding: 0;
                margin: 0;
                font-size: 16px;
                color: #ffffff;
                opacity: 0.8;
            }
            
            .li-icon {
                line-height: 48px;
                padding: 0;
                margin: 0;
                font-size: 24px;
                color: #ffffff;
                opacity: 0.54;
            }
            
            .elem {
                list-style: none;
                height: 48px;
                width: 100%;
                margin: 0;
            }
            
            .menus {
                padding-left: 8px;
                margin: 0;
            }
            
            table, tr, td {
                margin: 0;
                padding: 0;
                border: none;
            }
            
            ul.elemm:active {
                background: rgba(255, 255, 255, 0.12);
            }
            
            p {
                font-family: sans-serif;
                color: #cecece;
                margin: 0;
                font-size: 16px;
            }
            
            b {
                font-family: sans-serif;
                color: #fafafa;
                margin: 0;
                font-size: inherit;
            }
            
            h1 {
                color: #ffffff;
                font-family: sans-serif;
                margin: 0;
            }
            
            h2 {
                color: #fafafa;
                font-family: sans-serif;
                margin: 0;
            }
            
            h3 {
                color: #afafaf;
                font-family: sans-serif;
                margin: 0;
            }
            
            h4 {
                color: #afafaf;
                font-family: sans-serif;
                margin: 0;
            }
            
            h5 {
                color: #afafaf;
                font-family: sans-serif;
                margin: 0;
            }
            
            h6 {
                color: #afafaf;
                font-family: sans-serif;
                margin: 0;
            }
            
            i {
                font-family: sans-serif;
                color: #ff3d00;
                font-size: inherit;
            }
            
            a {
                font-family: sans-serif;
                text-decoration: none;
                transition: 0.3s;
                font-size: inherit;
                color: #db4437;
            }
            
            a:hover {
                color: #ff6657;
            }
            
            .article {
                padding: 24px;
            }
            
            i.fab-icon {
                color: #ffffff;
            }
            
            .cheader {
                padding: 24px;
                text-align: center;
            }
            
            .header-icon {
                width: 240px;
                heingt: auto;
            }
            
            .page-main {
                margin: auto;
                width: 100%;
                background-color: #212121;
                padding: 0;
                min-height: 100vh;
                transition: 0.5s;
            }
            
            .footer {
                width: 100%;
                height: 56px;
                background-color: #323232;
                margin: auto;
                text-align: center;
                transition: 0.5s;
            }
            
            .copyright {
                color: #fafafa;
                font-size: 16px;
                padding-top: 16px;
            }
            
            @media (min-width: 576px) {
                .page-main {
                    max-width: 540px;
                }
                
                .footer {
                    max-width: 540px;
                }
            }

            @media (min-width: 768px) {
                .page-main {
                    max-width: 960px;
                }
                
                .footer {
                    max-width: 960px;
                }
                
                .header-icon {
                    width: 280px;
                    heingt: auto;
                }
            }

            @media (min-width: 992px) {
                .page-main {
                    max-width: 960px;
                }
                
                .footer {
                    max-width: 960px;
                }
            }

            @media (min-width: 1280px) {
                .page-main {
                    max-width: 1140px;
                }
                
                .footer {
                    max-width: 1140px;
                }
            }
            
            @media (min-width: 1366px) {
                .page-main {
                    max-width: 1280px;
                }
                
                .footer {
                    max-width: 1280px;
                }
            }
            
            hr {
                border: 1px solid #db4437;
                outline: none;
                height: 0px;
            }
            
            .fab:hover {
                cursor: default;
            }
            
            .activity-title {
                position: fixed;
                font-size: 20px;
                color: #ffffff;
                left: 56px;
                top: 18px;
            }
            
            .main-card-wide.mdl-card {
                width: 90%;
                background-color: #323232;
                border-radius: 4px;
            }
            
            .main-card-wide > .mdl-card__title {
                color: #fff;
                height: 176px;
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
            }
            
            /* Search API */
            
            .search {
                position: fixed;
                top: -3px;
                right: 42px;
                color: rgba(255, 255, 255, 0.8);
            }
            
            .search-icon {
                color: #ffffff;
                z-index: 7;
            }
            
            .search-input {
                background-color: #db4437;
                margin-right: 16px;
                margin-top: -3px;
            }
            
            .mdl-textfield__input {
                padding-left: 4px;
                height: 24px;
                padding-right: 4px;
                width: calc(100vw - 120px);
                border-bottom: none;
                z-index: 5;
            }
            
            .mdl-textfield__label:after {
                background-color: #f5796e;
            }
            
            .search-i {
                margin-right: 16px;
            }
            
            .ssh {
                width: 64px;
                height: 56px;
                /*z-index: 6;*/
                position: fixed;
                top: 0;
                right: 0;
                padding: 0;
                margin: 0;
                background-color: #db4437;
            }
            
            .ad-fullwidth {
                display: block;
                margin: auto;
                background-color: #424242;
            }
            
            .ad-drawer {
                display: block;
                margin: auto;
                background-color: #424242;
            }
        </style>
    </head>
    <body>
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTTNPDT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <div class = "loadp unselective" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active unselective"></div>
			</div>
		</div>
		<div class = "action-bar unselective">
		    <div class="left-icon rx_icon mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" id="rx_icon"></div>
		    <b class = "activity-title">Jarvis | Учавствовать в проекте</b>
		    <div class = "ssh">
            
            </div>
		    <form action="javascript:search()" class = "search unselective">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                    <div class="search-input mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" id="searchField">
                        <label class="mdl-textfield__label" for="sample-expandable"></label>
                    </div>
                    <label class="search-i mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" for="searchField">
                        <i class="search-icon material-icons">search</i>
                    </label>
                </div>
            </form>
		</div>
		<div class = "layout-main unselective" id = "layout-main">
		    <div class="drawer unselective" id="drawer">
                <div class="content">
                    <div style = "width: 100%; height: 150px; background-image: url(https://jarvis.studio/res/images/img?id=drawer_bg); background-size: 80%; background-position: center; background-repeat: no-repeat;">
                        <div class="header" id = "abg">
                            <div style = "padding: 16px">
                                <div class="profile-icon2" id = "avatar2"></div>
                            </div>
                            <div class="text" style = "height: 60px; background-image: url(https://jarvis.studio/res/images/img?id=drawer_shadow); background-position: center; background-repeat: no-repeat;">
                                <div class="field name" id = "dname"></div>
                                <div class="field info" id = "demail"></div>
                            </div>
                        </div>
                    </div>
                    <ul class="menus" style = "padding: 0; margin: 0; content: none; list-style: none;">
                        <li class = "elem">
                            <ul class = "elemm" style = "margin-left: -30px;" onclick = "javascript:toHome()">
                                <table style = "width: 100%">
                                    <tr>
                                        <td style = "width: 36px; height: 48px; padding-top: 6px">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">home</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label">Главная</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <ul class = "elemm" style = "margin-left: -30px;" onclick = "javascript:toLogin()">
                                <table style = "width: 100%">
                                    <tr>
                                        <td style = "width: 36px; height: 48px; padding-top: 6px">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">account_circle</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label" id = "isLogged"></p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <ul class = "elemm" style = "margin-left: -30px;" onclick = "javascript:toAccount()">
                                <table style = "width: 100%">
                                    <tr>
                                        <td style = "width: 36px; height: 48px; padding-top: 6px">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">account_circle</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label">Мой кабинет</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <ul class = "elemm" style = "margin-left: -30px;" onclick = "javascript:toSupport()">
                                <table style = "width: 100%">
                                    <tr>
                                        <td style = "width: 36px; height: 48px; padding-top: 6px">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">help</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label">Справка</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class = "content-main">
                <div class = "page-main">
                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;</p>
                    <div style = "margin: 16px auto;">
                        <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                            <div class="mdl-card__title" id = "card5bg">
                                <h2 class="mdl-card__title-text unselective">Учавствовать в проекте</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Заинтересовал проект? Вы можете поддержать его или стать участником.</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Для участия вы должны соответствовать следующим требованиям и владеть следующими навыками:</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • Действуют возрастные ограничения: 14+;</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • Вы должны обладать хотябы одним из следующих навыков: веб-разработа, разработка Android-приложений, разработка MS-Windows-приложений(VC++, C, C#), разработка на языке Python, умение работы с Unix (Linux)-подобными системами и разработкой программного обеспечения для них, умение и опыт работы с Arduino/Raspberry PI;</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • Также допускаются маркетинговые умения, графический дизайн;</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • Знания алгоритмов;</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • Знания математики;</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • Пространственное и аналитическое мышление;</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • Умение структурировать и систематизировать данные;</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • Умение установки программ/операционных систем.</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • Действительный Google аккаунт.</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • Действительный Jarvis аккаунт.</p>
                                <p class = "unselective" style = "color: #ffff00; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • А самое главное - желание и терпение.</p>
                                <p class = "unselective" style = "color: #ffff00; margin: 8px auto; width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp; • Для подтверждения желания и вступления в проект необходимо внести членский взнос в размере $3 (для этого перейдите на <a href = "https://jarvis.studio/payments/membership">эту страницу</a>). ВАЖНО! Не используйте кнопку доната ниже для оплаты членского взноса.</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Если вы соответствуете данным требованиям и хотите вступить в проект, заполните эту <a href = "https://docs.google.com/forms/d/e/1FAIpQLSfxk4reH3a4cqmWH7B5x08Dl6ccQGrPzGVMHeJxbRU8pKPRLQ/viewform?usp=sf_link">регистрационную форму</a>.</p>
                                <p class = "unselective" style = "color: #db4437; margin: 8px auto; width: 100%;">ВАЖНО! Заявка рассматривается администратором лично. Это может занять несколько дней. Учтите что не все могут быть приняты в проект. Прием и рассмотрение заявок осуществляет администрация по своему усмотрению. Если вашу заявку отклонили вы можете подать еще одну не раньше чем через 1 месяц. Все заявки отправленные в этот период будут проигнорированы. Злоупотребление количеством заявок наказывается блокировкой аккаунта на 1 месяц.</p>
                                <hr>
                                <p class = "unselective" style = "color: #ffff00; margin: 8px auto; width: 100%;">Хотите повысить шансы рассмотрения заявки? Тогда регистрируйтесь через наш Discord-сервер: <a href = "https://discord.com/invite/Ak6ER6f">https://discord.com/invite/Ak6ER6f</a></p>
                                <hr>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Вы также можете поддержать проект материально (Paypal):</p>
                                <form action="https://www.paypal.com/donate" method="post" target="_top">
                                    <input type="hidden" name="hosted_button_id" value="RJF63JTWG7Y48" />
                                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                                    <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
                                </form>
                            </div>
                            <div class="mdl-card__actions mdl-card--border" style = "z-index: 2; background-color: #323232;">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect unselective" style = "color: #db4437" onclick = "javascript:article1()">
                                    На главную
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class = "unselective">&nbsp;</p>
                    <div class="addthis_inline_follow_toolbox" style = "text-align: center; margin: auto; min-width: 320px; max-width: 420px; padding: 16px;"></div>
                    <p class = "unselective">&nbsp;</p>
                    <p class = "unselective" style = "padding: 16px; text-align: center;">Реклама</p>
                    <div class = "ad-fullwidth" id = "ad-bottom-w">
                        <iframe id = "ad-bottom-wide"></iframe>
                    </div>
                    <p class = "unselective">&nbsp</p>
		        </div>
		        <div class = "footer">
		            <p class = "copyright"><a>© 2017-2020 Teslasoft. All rights reserved</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio/sitemap.html">Site map</a>&nbsp;<a href = "https://jarvis.studio/sitemap.xml">(XML)</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio/terms">Условия использования</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio/privacy">Конфиденциальность</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio/cookies">Использование Cookies</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio">Главная</a></p>
		        </div>
            </div>
	    </div>
	    <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
        <script src = "https://cdns.jarvis.studio/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src = "https://cdns.jarvis.studio/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase-auth.js"></script>
        <script src = "https://www.google.com/recaptcha/api.js"></script>
        <script src = "https://cdns.jarvis.studio/material/drawer/js/drawer.js"></script>
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
            var database = firebase.database();
            
            var isLogged = 0;
            
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
                    document.getElementById("isLogged").innerHTML = "Выйти из аккаунта";
                    isLogged = 1;

                } else {
                    document.getElementById("isLogged").innerHTML = "Вход / Регистрация";
                    isLogged = 1;
                }
            });
            
            function toLogin() {
                if (isLogged == 1) {
		            signOut();
                } else {
                    window.location.assign("https://jarvis.studio/login/oauth?continue=https://jarvis.studio/participate");
                }
		    }
		    
		    function signOut() {
                firebase.auth().signOut().then(function() {
                    // Sign-out successful.
                }).catch(function(error) {
                    // An error happened.
                });
                
                window.location.replace("https://jarvis.studio/login/oauth?continue=https://jarvis.studio/participate");
            }
        </script>
	    <script>
		    window.onload = function() {
		        document.getElementById('loadp').style.zIndex = "-5";
		        document.getElementById('card5bg').style.background = "url('https://jarvis.studio/res/images/img?id=card5_bg_webp') center / cover";
		        
		        if(document.createStyleSheet) {
                    document.createStyleSheet('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
                    document.createStyleSheet('https://fonts.googleapis.com/icon?family=Material+Icons');
                    document.createStyleSheet('https://jarvis.studio/css/main.css');
                    document.createStyleSheet('https://jarvis.studio/css/theme-dark.css');
                } else {
                    var styles = "@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');@import url('https://fonts.googleapis.com/icon?family=Material+Icons');@import url('https://jarvis.studio/css/main.css');@import url('https://jarvis.studio/css/theme-dark.css');";
                    var newSS=document.createElement('link');
                    newSS.rel='stylesheet';
                    newSS.href='data:text/css,'+escape(styles);
                    document.getElementsByTagName("head")[0].appendChild(newSS);
                }
                
                // Initialize AD system
		        var deviceWidth = window.innerWidth;
		        
		        if (deviceWidth < 850) {
		            document.getElementById('ad-bottom-wide').src = "https://s2---sd-r56v7-g-ad.jarvis.studio/ad/mobile/wide_horizontal.php?id=test";
		            document.getElementById('ad-bottom-wide').width = "320px";
		            document.getElementById('ad-bottom-wide').height = "50px";
		            document.getElementById('ad-bottom-w').style.width = "320px";
		            document.getElementById('ad-bottom-w').style.height = "50px";
		        } else {
		            document.getElementById('ad-bottom-wide').src = "https://s2---sd-r56v7-g-ad.jarvis.studio/ad/wide_horizontal.php?id=test";
		            document.getElementById('ad-bottom-wide').width = "800px";
		            document.getElementById('ad-bottom-wide').height = "90px";
		            document.getElementById('ad-bottom-w').style.width = "800px";
		            document.getElementById('ad-bottom-w').style.height = "90px";
		        }
		    };
		    
		    document.addEventListener('contextmenu', event => event.preventDefault());
		    
		    function rlogin() {
		        window.location.assign("https://jarvis.studio/login/oauth");
		    }
		    
		    function article1() {
		        window.location.assign("https://jarvis.studio");
		    }
		    
		    function toHome() {
		        window.location.assign("https://jarvis.studio");
		    }
		    
		    function toAccount() {
		        window.location.assign("https://jarvis.studio/home");
		    }
		    
		    function toSupport() {
		        window.location.assign("https://support.jarvis.studio");
		    }
		    
		    function search() {
		        document.getElementById('loadp').style.zIndex = "15";
		        var query = $("#searchField").val();
		        window.location.assign("https://jarvis.studio/search?q=" + query);
		    }
		</script>
    </body>
</html>
EOL;
/********* INITIALIZATION END **********/

/********* RENDER START **********/
echo $application;
/********* RENDER END **********/
}
?>