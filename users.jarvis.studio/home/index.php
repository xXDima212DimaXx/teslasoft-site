<?
require_once($_SERVER['DOCUMENT_ROOT'].'/antibot/antibot_include.php');
$site_key = '6LdpR9gUAAAAAHoS5PAQ9zB0_z_llrXv6vJneAfM';
$secret_key = '6LdpR9gUAAAAAJzo_Tn0Aj7fvnpE7TQpMfifdzSQ';

if (isset($_POST['g-recaptcha-response'])) {
 
    //get verify response data
    $verifyCaptchaResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
    $responseCaptchaData = json_decode($verifyCaptchaResponse);
    if($responseCaptchaData->success) {
        echo 'Captcha verified';
        //proceed with form values
    } else {
        echo 'Verification failed';
    }
}

echo <<<EOL
<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta name="theme-color" content="#121212"/>
        <title>Jarvis | Account</title>
        <link rel="stylesheet" href="./css/material-red.min.css">
        <link rel="stylesheet" href="./css/drawer.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="icon" type="image/png" href="https://users.jarvis.studio/home/images/jarvis.png">
        <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
        <script src="./js/material.js"></script>
        <script src="./js/drawer.js"></script>
        <style>
            html, body {
                background-color: #121212;
                outline: none;
                color: #cecece;
            }
            
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
            
            h1 {
                color: #fafafa;
            }
            
            p, span, pre, strong {
                color: #cecece;
            }
            
            .page {
                height: 100vh;
            }
            
            .container {
                background-color: #212121;
                height: max-height;
                margin-bottom: -60px;
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
            
            .headder {
                background-color: #323232;
                position: fixed;
                width: 100%;
                left: 0;
                right: 0;
                height: 60px;
                padding: 0;
                z-index: 4;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
            }
            
            .menu-icon {
                width: 40px;
                height: 40px;
                font-size: 24px;
            	padding: 8px;
            	margin: 0;
            	z-index: 5000;
            }
            
            .header-icon {
            	width: auto;
            	height: 40px;
            }
            
            .header-img {
            	height: 60px;
            	text-align: center;
            	width: 100vw;
            }
            
            .header-dots {
            	width: 40px;
            	height: 40px;
            	margin-right: 20px;
            }
            
            .head-page {
            	padding: 0;
            }
            
            .3dots {
            	width: 40px;
            	height: 40px;
            	font-size: 24px;
            	padding: 0;
            	margin: 16px;
            }
            
            .footer {
                width: 100%;
                z-index: 1;
                background-color: #323232;
                height: 60px;
                max-height: 60px;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 15px;
                padding-bottom: 15px;
                text-align: center;
                margin: auto;
            }
            
            .account-background {
                width: 100%;
                height: 100px;
                padding: 10px;
                border-radius: 8px;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
            }

            @media (min-width: 576px) {
                .footer {
                    max-width: 540px;
                }
                
                .account-background {
                    height: 130px;
                    padding: 15px;
                }
            }

            @media (min-width: 768px) {
                .footer {
                    max-width: 720px;
                }
                
                .account-background {
                    height: 150px;
                    padding: 20px;
                }
            }

            @media (min-width: 992px) {
                .footer {
                    max-width: 960px;
                }
                
                .account-background {
                    height: 200px;
                    padding: 25px;
                }
            }

            @media (min-width: 1200px) {
                .footer {
                    max-width: 1140px;
                }
                
                .account-background {
                    height: 230px;
                    padding: 30px;
                }
            }
            
            @media (min-width: 1500px) {
                .container {
                    width: 1280px;
                }
                
                .footer {
                    width: 1280px;
                }
                
                .account-background {
                    height: 250px;
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
                background-color: rgba(0, 0, 0, 0);
            }
            
            .profile-icon {
                width: height;
                height: 100%;
                border-radius: 50%;
                background-color: rgba(60, 60, 60, 0.9);
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
                padding-top: 5px;
            }
            
            .jarvis-logo {
                height: 50px;
                width: auto;
            }
            
            br {
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
            }
            
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
			
			.unselective {
			        -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
			}
			
			.drawer {
			        -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
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
            
            .profile-icon2 {
                width: 72px;
                height: 72px;
                border-radius: 50%;
                background-color: rgba(60, 60, 60, 0.9);
                border: none;
            }
            
            .text {
                background-image: url(./shadow.png);
            }
        </style>
    </head>
    <body>
        <div class = "loadp" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active"></div>
			</div>
		</div>
        <div class="page">
    	    <div class="drawer" id="drawer">
                <div class="content">
                    <div style = "width: 100%; height: 150px; background-image: url(./c_bg.png); background-size: 90%; background-position: center; background-repeat: no-repeat;">
                        <div class="header" id = "abg">
                            <div style = "padding: 16px">
                                <div class="profile-icon2" id = "avatar2"></div>
                            </div>
                            <div class="text">
                                <div class="field name" id = "dname">%USERNAME%</div>
                                <div class="field info" id = "demail">%USER_EMAIL%</div>
                            </div>
                        </div>
                    </div>
                    <ul class="menu">
                        <li class="item">Menu Item 1</li>
                        <li class="item">Menu Item 2</li>
                        <li class="item">Menu Item 3</li>
                        <li class="item">Menu Item 4</li>
                        <li class="item">Menu Item 5</li>
                        <li class="item subheader">Header</li>
                        <li class="item">Menu Item 6</li>
                        <li class="item">Menu Item 7</li>
                        <li class="item">Menu Item 8</li>
                        <li class="item">Menu Item 9</li>
                        <li class="item">Menu Item 10</li>
                        <li class="item">Menu Item 11</li>
                        <li class="item">Menu Item 12</li>
                        <li class="item">Menu Item 13</li>
                        <li class="item">Menu Item 14</li>
                        <li class="item subheader">Header</li>
                        <li class="item">Menu Item 15</li>
                        <li class="item">Menu Item 16</li>
                        <li class="item">Menu Item 17</li>
                        <li class="item">Menu Item 18</li>
                        <li class="item">Menu Item 19</li>
                        <li class="item">Menu Item 20</li>
                    </ul>
                </div>
            </div>

    	    <div class = "headder">
    		    <table class = "head-page">
    		    	<tr>
    		    		<td class = "menu-icon">
    		    	    	<!--<i class = "menu-icon material-icons" id = "odrawer" onclick = "openDrawer()">dehaze</i>-->
    		    	    	<div class="rx_icon" id="rx_icon"></div>
    		    	    </td>
    		    	    <td class = "header-img">
    		    	    	<a href = "/home">
    		    	        	<img class = "header-icon" src = "https://users.jarvis.studio/home/images/jarvis_logo_psd.png">
    		    	        </a>
    		    	    </td>
    		    	    <td class = "header-dots">
    		    	    	<i class = "3dots material-icons">more_vert</i>
    		    	    </td>
    		    	</tr>
    		    </table>
    	    </div>
            <div class="container">
                <div class="jumbotron">
                    <div class="contentt">
                        <div class="content-main">
                            <div id = "background" class = "account-background">
                                <img id="avatar" class="profile-icon">
                            </div>
                            <p class = "unselective">&nbsp;</p>
                            <table style = "width: 100%;">
                                <tr>
                                    <td style = "padding-top: 10px; padding-bottom: 10px;">
                                        <p style = "margin-left: 0; font-size: 20px;" class = "unselective">Username: </p>
                                        <input class = "form-control" style = "margin: 10px; outline: none; width: 98%" id="fullNameField"  required readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td style = "padding-top: 10px; padding-bottom: 10px;">
                                        <p style = "margin-left: 0; font-size: 20px;" class = "unselective">Email: </p>
                                        <input class = "form-control" style = "margin: 10px; outline: none; width: 98%" id="emailField"  required readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td style = "padding-top: 10px; padding-bottom: 10px;">
                                        <p style = "margin-left: 0; font-size: 20px;" class = "unselective">Account ID: </p>
                                        <input class = "form-control" style = "margin: 10px; outline: none; width: 98%" id="idField"  required readonly>
                                    </td>
                                </tr>
                            </table>
                            <p class = "unselective">&nbsp;</p>
                            <table class="table-transparent">
                                <tr>
                                    <td>
                                        <a class="btn-success btn" href="https://users.jarvis.studio/chat/group/common/" style = "margin-right: 10px;">Common Chat</a>
                                    </td>
                                    <td>
                                        <button class="btn-danger btn" onclick="javascript:signout()">Sign out</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <p class="footer-title unselective">© 2020 Teslasoft. All rights reserved</p>
            </div>
        </div>
        
        <script src = "https://www.gstatic.com/firebasejs/7.8.0/firebase.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.8.0/firebase-auth.js"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
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
            
            function getUserData(uid) {
		        var usr = firebase.database().ref('data/web/'+uid+'/username').once('value').then(function(snapshot) {
                    var username = snapshot.val();
                    $("#fullNameField").val(username);
                    document.getElementById("dname").innerHTML = username;
                    document.getElementById('avatar').src = "https://users.jarvis.studio/a/" + uid + "/icon.png";
                    document.getElementById('background').style.background = "url(https://users.jarvis.studio/a/" + uid + "/background.png)";
                    document.getElementById('background').style.backgroundSize = "100%";
                    document.getElementById('background').style.backgroundPosition = "center";
                    document.getElementById('avatar2').style.background = "url(https://users.jarvis.studio/a/" + uid + "/icon.png)";
                    document.getElementById('avatar2').style.backgroundSize = "100%";
                    document.getElementById('avatar2').style.backgroundPosition = "center";
                    document.getElementById('abg').style.background = "url(https://users.jarvis.studio/a/" + uid + "/background.png)";
                    document.getElementById('abg').style.backgroundSize = "100%";
                    document.getElementById('abg').style.backgroundPosition = "center";
                    document.getElementById('loadp').style.zIndex = "-5";
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
                    $("#emailField").val(email);
                    $("#idField").val(uid);
                    document.getElementById("demail").innerHTML = email;
                    getUserData(uid);

                } else {
                    window.location.replace("https://users.jarvis.studio/login/");
                }
            });
            
            function signout() {
                firebase.auth().signOut().then(function() {
                    // Sign-out successful.
                }).catch(function(error) {
                    // An error happened.
                });
                
                window.location.replace("https://users.jarvis.studio/login/");
            }
        </script>
    </body>
</html>
EOL;
?>