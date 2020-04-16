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
    
/********* PREINITIALIZATION START **********/
$query = htmlspecialchars(isset($_GET['q']) ? $_GET['q'] : "");

/********* PREINITIALIZATION END **********/

/********* INITIALIZATION START **********/
$application = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Jarvis</title>
        <meta name = "viewport" content="width=device-width, user-scalable=no">
        <meta name = "theme-color" content = "#121212"/>
        <meta name = "keywords" content="Teslasoft, Jarvis, Teslasoft Jarvis, Jarvis studio" />
        <link rel = "icon" type = "image/x-icon" href = "https://jarvis.studio/res/images/img?id=favicon">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/mdl/1.3.0/css/material.purple-red.min.css">
        <link rel = "stylesheet" href = "https://jarvis.studio/css/main.css">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/drawer/css/drawer-dark.css">
        <script src='https://www.googletagmanager.com/gtm.js?id=GTM-KTTNPDT'></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158890085-1"></script>
        <script async src='https://www.google-analytics.com/analytics.js'></script>
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
                backdrop-filter: blur(16px);
            }
            
            .main-card-wide > .mdl-card__menu {
                color: #fff;
            }
            
            .mdl-card__supporting-text {
                background-color: #323232;
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
                color: rgba(255, 255, 255, 0.9);
            }
            
            .search-icon {
                color: #ffffff;
                z-index: 7;
            }
            
            .search-input {
                background-color: #f57c71;
                margin-right: 16px;
                margin-top: -3px;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
                border-bottom-left-radius: 4px;
                border-bottom-right-radius: 4px;
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
                background-color: rgba(255, 255, 255, 1);
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
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTTNPDT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
		    <b class = "activity-title">Jarvis | Поиск</b>
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
                            <!--<ul class = "elemm" style = "margin-left: -30px;" onclick = "javascript:toLogin()">
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
                            </ul>-->
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
                    <h5 class = "unselective" style = "color: #afafaf; margin: 24px auto; padding-top: 24px; width: 90%;">Результаты по запросу "<a>$query</a>"</h5>
                    <p class = "unselective" style = "color: #afafaf; margin: 0px auto; padding-top: 0px; width: 90%;">Всего результатов: <a id = "rs"></a></p>
                    <div id = "results" style = "color: #212121">
                    
                    </div>
                    
                    <div style = "margin: 16px auto;" class = "notdef" id = "notdef">
                        <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                            <div class="mdl-card__title mdl-js-button mdl-js-ripple-effect" id = "card1bg">
                                <h2 class="mdl-card__title-text unselective">Не найдено</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%; font-size: 16px;">По вашему запросу ничего не найдено.</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%; font-size: 16px;">Попробуйте использовать другие ключевые слова.</p>
                                <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%; font-size: 16px;">Проверьте запрос на наличие ошибок.</p>
                            </div>
                        </div>
                    </div>
                    
                    <p class = "unselective">&nbsp</p>
		        </div>
		        <div class = "footer">
		            <p class = "copyright"><a>© 2017-2020 Teslasoft. All rights reserved</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio/sitemap.html">Site map</a>&nbsp;<a href = "https://jarvis.studio/sitemap.xml">(XML)</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio">Главная</a></p>
		        </div>
            </div>
	    </div>
	    <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
        <script src = "https://cdns.jarvis.studio/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src = "https://cdns.jarvis.studio/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.10.0/firebase.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.10.0/firebase-auth.js"></script>
        <script src = "https://www.google.com/recaptcha/api.js"></script>
        <script src = "https://cdns.jarvis.studio/material/drawer/js/drawer.js"></script>
	    <script>
            // Your web app's Firebase configuration
            var firebaseConfig = {
                apiKey: "AIzaSyBSZH_ccxE_niDo8VaGtRcMqXBN8hXyFKI",
                authDomain: "jarvis-public.firebaseapp.com",
                databaseURL: "https://jarvis-public.firebaseio.com",
                projectId: "jarvis-public",
                storageBucket: "jarvis-public.appspot.com",
                messagingSenderId: "335547100290",
                appId: "1:335547100290:web:bf786ba744f1e8219d989b",
                measurementId: "G-9TSCTLV2NR"
            };
            
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            var database = firebase.database();
            
            var ress = database.ref().child('search/results');
            
            var i = 0;
            
            $('#searchField').val("$query");
            
            ress.on('value',function(orders) {
			    //create an empty string that will hold our new HTML
			    var allOrdersHtml = "";
			    
			    //this is saying foreach order do the following function...
			    orders.forEach(function(firebaseOrderReference) {
				    var result = firebaseOrderReference.val();
				    
				    // Search condition
				    var qq = "$query".toLowerCase();
				    
				    if (qq == "undefined") {
				        
				    } else {
				        if (qq.includes(result.key1) || qq.includes(result.key2) || qq.includes(result.key3) || qq.includes(result.key4) || qq.includes(result.key5) || qq.includes(result.key6) || qq.includes(result.key7) || qq.includes(result.key8) || qq.includes(result.key9) || qq.includes(result.key10) || qq.includes(result.key11) || qq.includes(result.key12) || qq.includes(result.key13) || qq.includes(result.key14) || qq.includes(result.key15) || qq.includes(result.key16) || qq.includes(result.key17) || qq.includes(result.key18) || qq.includes(result.key19) || qq.includes(result.key20) || qq.includes(result.key1) || qq.includes(result.key21) || qq.includes(result.key22) || qq.includes(result.key23) || qq.includes(result.key24) || qq.includes(result.key25) || qq.includes(result.key26) || qq.includes(result.key27) || qq.includes(result.key28) || qq.includes(result.key29) || qq.includes(result.key30) || qq.includes(result.key31) || qq.includes(result.key32) || qq.includes(result.key33) || qq.includes(result.key34) || qq.includes(result.key35) || qq.includes(result.key36) || qq.includes(result.key37) || qq.includes(result.key38) || qq.includes(result.key39) || qq.includes(result.key40) || qq.includes(result.key41) || qq.includes(result.key42) || qq.includes(result.key43) || qq.includes(result.key44) || qq.includes(result.key45) || qq.includes(result.key46) || qq.includes(result.key47) || qq.includes(result.key48) || qq.includes(result.key49) || qq.includes(result.key50)) {
				            i++;
				            var individialOrderHtml = `
					        	<div style = "margin: 16px auto;">
                                    <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                                        <div class="mdl-card__title mdl-js-button mdl-js-ripple-effect" style = "background: url('` + result.Background + `') center / cover;">
                                            <h2 class="mdl-card__title-text unselective">` + result.Title + `</h2>
                                        </div>
                                        <div class="mdl-card__supporting-text">
                                            <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%; font-size: 16px;">` + result.Desc + `</p>
                                            <hr style = "width: 100%;">
                                            <a class = "unselective" style = "margin: 8px auto; width: 100%; font-size: 16px;">` + result.Link + `</a>
                                        </div>
                                        <div class="mdl-card__actions mdl-card--border" style = "z-index: 2; background-color: #323232;">
                                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect unselective" style = "color: #db4437" href = "` + result.Open + `">
                                                ` + result.Action + `
                                            </a>
                                        </div>
                                    </div>
                                </div>`;
				        } else {
				            
				        }
				    }
					allOrdersHtml = allOrdersHtml + individialOrderHtml;
			    });
			    document.getElementById('loadp').style.zIndex = "-5";
			    document.getElementById("rs").innerHTML = i.toString();
			    $('#results').html(allOrdersHtml);
			    
			    if (i == 0) {
				    document.getElementById('notdef').style.display = "block";
				    document.getElementById('card1bg').style.background = "url('https://jarvis.studio/res/images/img?id=card1_bg_webp') center / cover";
				}
		    });
        </script>
	    <script>
	        window.onload = function() {
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
                
		        setTimeout(function() {
		            document.getElementById('loadp').style.zIndex = "-5";
		        }, 1000);
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