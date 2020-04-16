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
$application = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="theme-color" content="#121212"/>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>Jarvis | Учавствовать в проекте</title>
        <link rel = "icon" type = "image/x-icon" href = "https://jarvis.studio/res/images/img?id=favicon">
        <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
        <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
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
        <style>
            html, body {
                background-color: #121212;
                outline: none;
                color: #cecece;
            }
            
            ::-webkit-scrollbar {
                width: 16px;
            }
            
            /* Track */
            ::-webkit-scrollbar-track {
                background: #323232; 
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #424242;
                /*border-radius: 8px;*/
            }
            
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #616161;
            }
            
            h1 {
                color: #fafafa;
            }
            
            p, span, pre, strong {
                color: #cecece;
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
                text-decoration: none;
            }
            
            .aca {
                font-family: sans-serif;
                text-decoration: none;
                transition: 0.3s;
                font-size: inherit;
                color: #db4437;
            }
            
            .aca:hover {
                color: #ff6657;
                text-decoration: none;
            }
            
            .page {
                height: 100vh;
            }
            
            .container {
                background-color: #212121;
                height: max-height;
                margin-bottom: -70px;
                height: auto;
                min-height: 100%;
            }
            
            .jumbotron {
                background-color: rgba(0, 0, 0, 0.0);
                padding: 5rem 2rem;
                
            }
            
            @media (min-width: 576px) {
                .jumbotron {
                    padding: 6rem 3rem;
                }
            }
            
            .header-title {
                color: #fafafa;
            }
            
            .header {
                position: fixed;
                width: 100%;
                z-index: 1;
                /*padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;*/
                background-color: #323232;
                height: 70px;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            
            .footer {
                width: 100%;
                z-index: 1;
                /*padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;*/
                background-color: #323232;
                height: 70px;
                max-height: 70px;
                margin-top: -70px;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 5px;
                padding-bottom: 15px;
                text-align: center;
                margin: auto;
            }
            
            @media (min-width: 1600px) {
                .container {
                    max-width: 1280px;
                }
            }

            @media (min-width: 576px) {
                .footer {
                    max-width: 540px;
                }
            }

            @media (min-width: 768px) {
                .footer {
                    max-width: 720px;
                }
            }

            @media (min-width: 992px) {
                .footer {
                    max-width: 960px;
                }
            }

            @media (min-width: 1200px) {
                .footer {
                    max-width: 1140px;
                }
            }
            
            @media (min-width: 1600px) {
                .footer {
                    max-width: 1280px;
                }
            }
            
            .content-title {
                margin-bottom: 2rem;
            }
            
            .content-main {
                
            }
            
            .table {
                color: #cecece;
                border: 1px solid #424242;
            }
            
            .table-darker {
                border: none;
            }
            
            tr.table-darker-tr, td.table-darker-td {
                border: none;
            }
            
            .table-transparent {
                border: none;
                background-color: rgba(0, 0, 0, 0.0);
            }
            
            .profile-icon {
                width: 150px;
                height: 150px;
                border-radius: 50%;
                background-color: #262626;
                margin: 10px auto;
                border: none;
            }
            
            .text {
                padding-left: 2rem;
                font-size: 20px;
                color: #cecece;
            }
            
            .param {
                padding-left: 2rem;
                font-size: 20px;
                color: #aaaaaa;
            }
            
            .footer-title {
                color: #fafafa;
                padding-top: 15px;
            }
            
            .jarvis-logo {
                height: 50px;
                width: auto;
            }
            
            input.form-control {
                background-color: #424242;
                border: none;
                color: #cecece;
                outline: 3px solid rgba(86, 0, 255, 0.2);
                outline-offset: 0px;
            }
            
            input.form-control:disabled, input.form-control[readonly] {
                background-color: #323232;
                border: none;
                color: #999999;
            }
            
            input.form-control:focus {
                background-color: #515151;
                color: #eeeeee;
            }
            
            textarea.form-control {
                background-color: #424242;
                border: none;
                color: #cecece;
                min-width: 98%;
                max-width: 98%;
                min-height: 500px;
                height: auto;
            }
            
            textarea.form-control:focus {
                background-color: #515151;
                color: #eeeeee;
            }
            
            .options {
                position: fixed; /* Stay in place */
                z-index: 5; /* Sit on top */
                padding: 10%; /* Location of the box */
                left: 0;
                top: 0;
                width: 0; /* Full width */
                height: 0; /* Full height */
                overflow: hidden; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0, 0, 0, 0.1);
                /*background-color: rgba(0,0,0,0.4);*/
                opacity: 0.0;
                backdrop-filter: blur(10px);
                    -webkit-transition: opacity 0.3s ease-in-out;
                    -moz-transition: opacity 0.3s ease-in-out;
                    -ms-transition: opacity 0.3s ease-in-out;
                    -o-transition: opacity 0.3s ease-in-out;
                    transition: opacity 0.3s ease-in-out;
            }
            
            .modal-content {
                background-color: #323232;
                margin: auto;
                padding: 0;
                border-radius: 8px;
                width: 100%;
                max-height: 100%;
                overflow: hidden;
            }
            
            .close {
                color: #aaaaaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
                width: 28px;
                padding: 0;
                margin: 0;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
            
            .moreinv:hover {
                cursor: pointer;
                color: #41ace8;
            }
            
            .pcont {
                overflow: auto;
                padding: 20px;
            }
            
        </style>
    </head>
    <body>
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTTNPDT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <div class = "options" id="optbg">
            <div class="modal-content" onclick="javascript:void(0)">
                <div class="pcont">
                <h2>Откуда взять код приглашения?</h2>
                <p>Один из участников проекта может выдать Вам талон с приглашением или ссылку на электронное приглашение.</p>
                <p>Если Вы не знаете участников проекта, то Вы можете не отправлять приглашение, а ввести <b style = "color: #2e91c9;">0000000000</b></p>
                <p style = "margin: 0; padding: 0;">&nbsp;</p>
                <h2>Для чего тогда нужно приглашение?</h2>
                <p>Приглашение повышает вероятность рассмотрения заявки. Наличие приглашения означает, что доверенный участник проекта знаком с Вами и знает вас хорошо (не все участники могут выдавать приглашение)</p>
                <b style = "color: #ffff00">Внимание! Вы можете использовать приглашение только один раз!</b>
                <br>
                <b style = "color: #ff3d00">Внимание! Приглашение не действует в Россие и Китае по техническим причинам.</b>
                <br>
                <b style = "color: #ff0000">Внимание! Подделка приглашения и/или передача его другому лицу наказывается вечной блокировкой аккаунта и изъятией лицензии на все программное обеспечение Jarvis (если есть) без возмещения стоимости этой лицензии, а также блокировкой IP адреса. В случае повторной регистрации или попытке обойти блокировку будет заблокирован весь диапозон IP-адресов.</b>
                <p style = "margin: 0; padding: 0;">&nbsp;</p>
                <button class = "btn-success btn" onclick = "javascript:hideOptions()">Закрыть</button>
                </div>
            </div>
        </div>
        <div class="page">
            <div class="container">
                <div class="jumbotron">
                    <div class="content">
                        <div class="content-title">
                            <a href = "https://jarvis.studio"><img src="https://jarvis.studio/res/images/img?id=teslasoft_logo" style = "width: 250px; height: auto; margin-bottom: 20px;"></a>
                            <br>
                            <h1>Учавствовать в проекте</h1>
                        </div>
                        <div class="content-main">
                            <form action = "javascript:sendRequest()">
                                <div class = "form-group">
                                    <h2 style = "color: #cecece">Информация об аккаунте</h2>
                                    <br>
                                    <div style = "text-align: center; width: 100%;"><img style = "margin: 10px auto;" id="avatar" src="https://users.jarvis.studio/a/default.png" class="profile-icon"></div>
                                    <table style = "width: 100%;">
                                        <tr>
                                            <td style = "padding-top: 10px; padding-bottom: 10px;">
                                                <p style = "margin-left: 10px;">Имя пользователя</p>
                                                <input class = "form-control" style = "margin: 10px; outline: none; width: 98%" id="fullNameField"  required readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style = "padding-top: 10px; padding-bottom: 10px;">
                                                <p style = "margin-left: 10px;">Адресс электронной почты</p>
                                                <input class = "form-control" style = "margin: 10px; outline: none; width: 98%" id="emailField"  required readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style = "padding-top: 10px; padding-bottom: 10px;">
                                                <p style = "margin-left: 10px;">ID аккаунта</p>
                                                <input class = "form-control" style = "margin: 10px; outline: none; width: 98%" id="idField"  required readonly>
                                            </td>
                                        </tr>
                                    </table>
                                    <hr style = "border-top: 2px solid rgba(255, 255, 255, 0.1);">
                                    <h2 style = "color: #cecece">Информация о Вас</h2>
                                    <br>
                                    <div style = "width: 100%;"> 
                                        <table style = "width: 100%;">
                                            <tr style = "">
                                                <td style = "width: 48%; margin: 10px;">
                                                    <p style = "margin-left: 10px;">Имя</p>
                                                    <input class = "form-control" style = "margin: 10px; outline: none; width: 96%" id="firstNameField"  required>
                                                </td>
                                                <td style = "width: 48%; margin: 10px;">
                                                    <p style = "margin-left: 10px;">Фамилия</p>
                                                    <input class = "form-control" style = "margin: 10px; outline: none; width: 96%" id="surNameField"  required>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <br>
                                    <div style = "width: 100%;">
                                        <p style = "margin-left: 10px;">Номер телефона</p>
                                        <input class = "form-control" style = "margin: 10px; outline: none; width: 98%" id="phoneField"  required>
                                    </div>
                                    <hr style = "border-top: 2px solid rgba(255, 255, 255, 0.1);">
                                    <h2 style = "color: #cecece">Резюме</h2>
                                    <br>
                                    <div style = "width: 100%;">
                                        <p style = "margin-left: 10px;">Почему Вы хотите вступить в проект? Опишите Ваши навыки в сфере IT-технологий, укажите язык программирования (если есть) на котором Вы умеете программировать.</p>
                                        <textarea class="form-control" style = "margin: 10px; outline: none; width: 98%" id="summaryField" required></textarea>
                                    </div>
                                    <hr style = "border-top: 2px solid rgba(255, 255, 255, 0.1);">
                                    <h2 style = "color: #cecece">Дополнительная информация</h2>
                                    <br>
                                    <div style = "width: 100%;">
                                        <p style = "margin-left: 10px;">Код приглашения (Если нет введите 0000000000)</p>
                                        <input class = "form-control" placeholder = "XXXXXXXXXX" style = "margin: 10px; outline: none; width: 98%" id="inviteField"  required>
                                        <p onclick = "javascript:showOptions()" style = "color: #2e91c9; padding: 10px;" class = "moreinv">Подробнее о приглашениях</p>
                                        <p style = "margin-left: 10px;">Откуда вы узнали про наш проект?</p>
                                        <input class = "form-control" style = "margin: 10px; outline: none; width: 98%" id="refField"  required>
                                    </div>
                                    <br>
                                    <input class = "btn-success btn" type = "submit" value = "Подать заявку на участие">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <p class = "footer-title"><a class = "aca">© 2017-2020 Teslasoft. All rights reserved</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio/sitemap.html">Site map</a>&nbsp;<a href = "https://jarvis.studio/sitemap.xml">(XML)</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio">Главная</a></p>
            </div>
        </div>
        <script src = "https://www.gstatic.com/firebasejs/7.10.0/firebase.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.10.0/firebase-auth.js"></script>
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>
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
            
            function send() {
                
            }
              
            function getUserName(uid) {
		        var usr = firebase.database().ref('data/web/'+uid+'/username').once('value').then(function(snapshot) {
                    var username = snapshot.val();
                    
                    $("#fullNameField").val(username);
                    document.getElementById('avatar').src = "https://users.jarvis.studio/a/" + uid + "/icon.png";
                });
            }
            
            var requests = database.ref().child('join/join/request');
            
            function sendRequest() {
				var today = new Date();
				var dd = String(today.getDate()).padStart(2, '0');
				var mm = String(today.getMonth() + 1).padStart(2, '0');
				var hh = String(today.getHours()).padStart(2, '0');
				var min = String(today.getMinutes()).padStart(2, '0');
            
				if (parseInt(hh) > 12) {
					var hr = (parseInt(hh)-12);
					hours = hr  + ':' + min + " PM";
				} else {
					var hr = (parseInt(hh)-12);
					hours = hr  + ':' + min + " AM";
				}
            
				today = mm + '-' + dd + ' ' + hours;
				
				function uuidv4() {
                    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                        var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
                        return v.toString(16);
                    });
                }
    
                var gen = uuidv4();
                
                var rbg = Math.floor((Math.random() * 18) + 1);;
				
			    var order = {
			    	Username: $('#fullNameField').val(),
			    	Email: $('#emailField').val(),
			    	Id: $('#idField').val(),
			    	Name: $('#firstNameField').val(),
			    	Surname: $('#surNameField').val(),
			    	Phone: $('#phoneField').val(),
			    	Summary: $('#summaryField').val(),
			    	Invite: $('#inviteField').val(),
			    	Ref: $('#refField').val(),
			    	Status: "0",
			    	Rid: gen,
			    	Bg: rbg,
			    	Time: today
			    };
			    
			    requests.push(order);
			    window.location.assign("https://jarvis.studio/supporters/request?id=" + gen);
		    };
            
            window.onclick = function(event) {
                if (event.target == optbg) {
                    document.getElementById("optbg").style.opacity = 0.0;
                    setTimeout(function () {
		                document.getElementById("optbg").style.width = "0px";
    		            document.getElementById("optbg").style.height = "0px";
                    }, 300);
                }
            }
		    
		    function showOptions() {
		        document.getElementById("optbg").style.width = "100vw";
		        document.getElementById("optbg").style.height = "100vh";
		        document.getElementById("optbg").style.opacity = 1.0;
		    }
		    
		    function hideOptions() {
		        document.getElementById("optbg").style.opacity = 0.0;
		        setTimeout(function () {
		            document.getElementById("optbg").style.width = "0px";
		            document.getElementById("optbg").style.height = "0px";
		        }, 300);
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
                    
                    getUserName(uid);
                    
                    $("#emailField").val(email);
                    $("#idField").val(uid);

                } else {
                    window.location.replace("https://jarvis.studio/login/oauth?continue=https://jarvis.studio/supporters/register");
                }
            });
            
            function signout() {
                firebase.auth().signOut().then(function() {
                    // Sign-out successful.
                }).catch(function(error) {
                    // An error happened.
                });
                
                window.location.replace("https://jarvis.studio/login/oauth");
            }
        </script>
        <script>
            document.addEventListener('contextmenu', event => event.preventDefault());
        </script>
    </body>
</html>
EOL;

echo $application;
}
?>