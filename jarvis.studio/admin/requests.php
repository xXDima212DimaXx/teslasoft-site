<?
/********* PREINITIALIZATION START **********/
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

$id = htmlspecialchars(isset($_GET['id']) ? $_GET['id'] : NULL);

$id = htmlspecialchars($id);

/********* PREINITIALIZATION END **********/

/********* INITIALIZATION START **********/
$application = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Админка | Заявки</title>
        <meta name = "viewport" content="width=device-width, user-scalable=no">
        <meta name = "theme-color" content = "#121212"/>
        <meta name = "keywords" content="Teslasoft, Jarvis, Teslasoft Jarvis, Jarvis studio" />
        <link rel = "icon" type = "image/png" href = "https://jarvis.studio/res/images/favicon.ico">
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/mdl/1.3.0/css/material.purple-red.min.css">
        <link rel = "stylesheet" href = "https://jarvis.studio/css/main.css">
        <link rel = "stylesheet" href = "https://jarvis.studio/css/theme-dark.css">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/drawer/css/drawer-dark.css">
        <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
        <script src = "https://cdns.jarvis.studio/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase-auth.js"></script>
        <script src = "https://www.google.com/recaptcha/api.js"></script>
        <script src = "https://cdns.jarvis.studio/material/drawer/js/drawer.js"></script>
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
                color: #121212;
                transition: 0.3s;
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
                filter: blur(0px);
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
            
            .notdef {
                display: none;
            }
        </style>
    </head>
    <body>
        <div class = "loadp unselective" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active unselective"></div>
			</div>
		</div>
		<!--<button class = "fab mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored unselective" id = "fab" onclick = "rlogin()">
			<i class="material-icons fab-icon">add</i>
		</button>-->
		<div class = "action-bar unselective">
		    <div class="left-icon rx_icon mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" id="rx_icon"></div>
		    <b class = "activity-title">Админка | Заявки</b>
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
                                        <td style = "width: 36px; height: 48px; padding-top: 0px">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">home</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label">Главная</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <ul class = "elemm" style = "margin-left: -30px;" onclick = "javascript:toAdmin()">
                                <table style = "width: 100%">
                                    <tr>
                                        <td style = "width: 36px; height: 48px; padding-top: 0px">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">people_alt</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label">Админка</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <ul class = "elemm" style = "margin-left: -30px;" onclick = "javascript:toLogin()">
                                <table style = "width: 100%">
                                    <tr>
                                        <td style = "width: 36px; height: 48px; padding-top: 0px">
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
                                        <td style = "width: 36px; height: 48px; padding-top: 0px">
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
                                        <td style = "width: 36px; height: 48px; padding-top: 0px">
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
                    <div style = "margin: 16px auto; display: none;" class = "notdef" id = "notdef">
                        <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                            <div class="mdl-card__title mdl-js-button mdl-js-ripple-effect" style = "background: url('https://jarvis.studio/res/images/card1_bg.png') center / cover;">
                                <h2 class="mdl-card__title-text unselective">Заявка не найдена</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%; font-size: 16px;">Проверьте правильность написания адреса.</p>
                            </div>
                        </div>
                    </div>
                    <div id = "req" style = "color: #212121; font-size: 0px; line-height: 0px;">
                        
                    </div>
                    <p class = "unselective">&nbsp</p>
		        </div>
		        <div class = "footer">
		            <p class = "copyright"><a>© 2017-2020 Teslasoft. All rights reserved</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio/sitemap.html">Site map</a>&nbsp;<a href = "https://jarvis.studio/sitemap.xml">(XML)</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio">Главная</a></p>
		        </div>
            </div>
	    </div>
	    <script>
	        var i = 0;
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
            
            var requests = database.ref().child('join/join/request');
            
            requests.on('value',function(orders) {
			    //create an empty string that will hold our new HTML
			    var allOrdersHtml = "";
			    
			    //this is saying foreach order do the following function...
			    orders.forEach(function(firebaseOrderReference) {
				    var order = firebaseOrderReference.val();
				    
				    var reqid = "$id";
				    var state = ``;
				    if (order.Status == "2") {
				        state = `<span style = "color: #00ff00">Рассмотрена</span>`;
				    } else if (order.Status == "1") {
				        state = `<span style = "color: #ff0000">Отклонена</span>`;
				    } else if (order.Status == "0") {
				        state = `<span style = "color: #ffff00">Не рассмотрена</span>`;
				    } else {
				        state = "Неизвестно";
				    }
				        
				    var individialOrderHtml = `
					    <div style = "margin: 16px auto; font-size: 16px; line-height: 18px;">
                            <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                                <div class="mdl-card__title" style = "background: url('https://jarvis.studio/res/images/card`+order.Bg+`_bg.png') center / cover;">
                                    <h2 class="mdl-card__title-text unselective">Заявка ` + order.Rid + `</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Имя пользователя: ` + order.Username + `</p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Email: ` + order.Email + `</p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">ID пользователя: ` + order.Id + `</p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Имя: ` + order.Name + `</p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Фамилия: ` + order.Surname + `</p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Номер телефона: ` + order.Phone + `</p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Время подачи: ` + order.Time + `</p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Код приглашения: ` + order.Invite + `</p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">ID заявки: ` + order.Rid + `</p>
                                    <p><span class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Состояние заявки: ` + state + `</span></p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Ссылка: <a href = "https://jarvis.studio/supporters/request?id=` + order.Rid + `">https://jarvis.studio/supporters/request.php?id=` + order.Rid + `</a></p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Резюме:</p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">` + order.Summary + `</p>
                                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">Пользователь узнал про проект: ` + order.Ref + `</p>
                                </div>
                                <!--<div class="mdl-card__actions mdl-card--border" style = "z-index: 2; background-color: #323232;">
                                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect unselective" style = "color: #db4437" onclick = "javascript:article1()">
                                        На главную
                                    </a>
                                </div>-->
                            </div>
                        </div>`;
			        
					allOrdersHtml = allOrdersHtml + individialOrderHtml;
					document.getElementById('loadp').style.zIndex = "-5";
			    });
			
			    //actaull put the html on the page inside the element with the id PreviousOrders
			    $('#req').html(allOrdersHtml);
		    });
		    
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
                    window.location.replace("https://jarvis.studio/login/oauth?continue=https://jarvis.studio/admin/requests");
                    document.getElementById("isLogged").innerHTML = "Вход / Регистрация";
                    isLogged = 1;
                }
            });
            
            function signOut() {
                firebase.auth().signOut().then(function() {
                    // Sign-out successful.
                }).catch(function(error) {
                    // An error happened.
                });
                
                window.location.replace("https://jarvis.studio/login/oauth");
            }
            
            function toLogin() {
		        if (isLogged == 1) {
		            signOut();
                } else {
                    window.location.assign("https://jarvis.studio/login/oauth?continue=https://jarvis.studio/admin/requests");
                }
		    }
	    </script>
	    <script>
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
		    
		    function toSupport() {
		        window.location.assign("https://support.jarvis.studio");
		    }
		    
		    function toAccount() {
		        window.location.assign("https://jarvis.studio/home");
		    }
		    
		    function toAdmin() {
		        
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