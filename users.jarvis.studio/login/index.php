<?php
/************************************************
*   
*   Jarvis Chat | Login page
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
*       https;//users.jarvis.studio/login/index.php
*   
*   LOCAL_PATH:
*       /home/jarvisst/users.jarvis.studio/login/index.php
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

if ($_GET['continue'] == '') {
    $continue = 'https://users.jarvis.studio/home';
}

else {
    $continue = $_GET['continue'];
}


/************************************************
* 
*   Begin main page
* 
************************************************/
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

/*echo <<<EOL
<!-- (C) 2020 Teslasoft.  All rights reserved -->
<!-- LEGAL NOTICE: The content of this website and all associated program code are protected under the Digital Millennium Copyright Act. Intentionally circumventing/deobfuscating/decrypting this code may constitute a violation of the DMCA. -->
<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Jarvis | Sign In</title><meta name="viewport" content="width=device-width, user-scalable=no"><link rel="icon" type="image/png" href="https://users.jarvis.studio/home/images/jarvis.png"><link rel="stylesheet" href="/login/css/styles-main.css"></head><body><form method="post" id="userForm" ><button class="g-recaptcha btn btn-primary" style = "display: none;" data-sitekey="6LdpR9gUAAAAAHoS5PAQ9zB0_z_llrXv6vJneAfM" data-callback="submitForm">Submit</button></form><script src='https://www.google.com/recaptcha/api.js'></script><script>function submitForm() {document.getElementById('userForm').submit();}var onloadCallback = function() {grecaptcha.execute();};function setResponse(response) { document.getElementById('captcha-response').value = response; }</script><div><form action = "javascript:signin()" class="login_form" method="POST" id="commandform" name="commandform" onsubmit="return sendShout(this);" onkeypress="usl(event)" enctype="multipart/form-data"><p class = "login_title">SIGN IN</p><br><p class = "login_hint">Username: <input name="username" type="text" class="input_username" autofocus id="username" required></p><br><p class = "login_hint">Password: <input name="password" type="password" class="input_password" autofocus onkeydown="if (event.keyCode==13) { commandform.submit(); }" id="password" required></p><br><p class = "login_btn"><input class = "btn_login" type="submit" value = "Sign in"></p></form><div class = "note"><br><div class = "note2"><p class="rlink"><a href = "https://users.jarvis.studio/register/?continue=$continue" class = "rlink">Register</a></p></div></div></div><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-app.js"></script><script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-auth.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><script>var _0x3ae5=['MTA4MzcxMDQzNDM4Mg==','aW5pdGlhbGl6ZUFwcA==','MToxMDgzNzEwNDM0MzgyOndlYjphYjBiMjExZjg1ZmQxYWFkOGYyNzFm','amFydmlzLWEzMDFiLmFwcHNwb3QuY29t','amFydmlzLWEzMDFi','aHR0cHM6Ly9qYXJ2aXMtYTMwMWIuZmlyZWJhc2Vpby5jb20=','QUl6YVN5REZyYW5LeS1QLXpqNHFwY0VrVFNobzNhTWloc0M0MnRz','amFydmlzLWEzMDFiLmZpcmViYXNlYXBwLmNvbQ=='];(function(_0x483574,_0x1c9971){var _0x3edb50=function(_0x396d40){while(--_0x396d40){_0x483574['push'](_0x483574['shift']());}};_0x3edb50(++_0x1c9971);}(_0x3ae5,0x13f));var _0x1f4c=function(_0x483574,_0x1c9971){_0x483574=_0x483574-0x0;var _0x3edb50=_0x3ae5[_0x483574];if(_0x1f4c['rDXYmw']===undefined){(function(){var _0x43071b;try{var _0x2a7f4f=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x43071b=_0x2a7f4f();}catch(_0x1b88df){_0x43071b=window;}var _0x3ad839='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x43071b['atob']||(_0x43071b['atob']=function(_0x24bec2){var _0x35d79a=String(_0x24bec2)['replace'](/=+$/,'');var _0x28941b='';for(var _0x354363=0x0,_0x538916,_0x442585,_0x9551b=0x0;_0x442585=_0x35d79a['charAt'](_0x9551b++);~_0x442585&&(_0x538916=_0x354363%0x4?_0x538916*0x40+_0x442585:_0x442585,_0x354363++%0x4)?_0x28941b+=String['fromCharCode'](0xff&_0x538916>>(-0x2*_0x354363&0x6)):0x0){_0x442585=_0x3ad839['indexOf'](_0x442585);}return _0x28941b;});}());_0x1f4c['lAHCCA']=function(_0x14e6a3){var _0x247a54=atob(_0x14e6a3);var _0xde6d1c=[];for(var _0xbdb27a=0x0,_0x1f9392=_0x247a54['length'];_0xbdb27a<_0x1f9392;_0xbdb27a++){_0xde6d1c+='%'+('00'+_0x247a54['charCodeAt'](_0xbdb27a)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0xde6d1c);};_0x1f4c['NTrJdT']={};_0x1f4c['rDXYmw']=!![];}var _0x396d40=_0x1f4c['NTrJdT'][_0x483574];if(_0x396d40===undefined){_0x3edb50=_0x1f4c['lAHCCA'](_0x3edb50);_0x1f4c['NTrJdT'][_0x483574]=_0x3edb50;}else{_0x3edb50=_0x396d40;}return _0x3edb50;};var firebaseConfig={'apiKey':_0x1f4c('0x7'),'authDomain':_0x1f4c('0x0'),'databaseURL':_0x1f4c('0x6'),'projectId':_0x1f4c('0x5'),'storageBucket':_0x1f4c('0x4'),'messagingSenderId':_0x1f4c('0x1'),'appId':_0x1f4c('0x3')};firebase[_0x1f4c('0x2')](firebaseConfig);var _0x1b09=['YXV0aA==','bWVzc2FnZQ==','dmFsdWU=','c2lnbkluV2l0aEVtYWlsQW5kUGFzc3dvcmQ=','Y29kZQ==','cGFzc3dvcmQ=','Z2V0RWxlbWVudEJ5SWQ=','dXNlcm5hbWU='];(function(_0x4911fc,_0x4c4bec){var _0x2a2929=function(_0x4f338b){while(--_0x4f338b){_0x4911fc['push'](_0x4911fc['shift']());}};_0x2a2929(++_0x4c4bec);}(_0x1b09,0x9e));var _0xae02=function(_0x4911fc,_0x4c4bec){_0x4911fc=_0x4911fc-0x0;var _0x2a2929=_0x1b09[_0x4911fc];if(_0xae02['VWgUWL']===undefined){(function(){var _0x2852fe=function(){var _0x2640f7;try{_0x2640f7=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(_0x4ac567){_0x2640f7=window;}return _0x2640f7;};var _0x51f391=_0x2852fe();var _0xa3f698='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x51f391['atob']||(_0x51f391['atob']=function(_0x4ff095){var _0x3abf43=String(_0x4ff095)['replace'](/=+$/,'');var _0x4a0bef='';for(var _0xe2bfad=0x0,_0x508f4b,_0xa2cf90,_0x3a1e24=0x0;_0xa2cf90=_0x3abf43['charAt'](_0x3a1e24++);~_0xa2cf90&&(_0x508f4b=_0xe2bfad%0x4?_0x508f4b*0x40+_0xa2cf90:_0xa2cf90,_0xe2bfad++%0x4)?_0x4a0bef+=String['fromCharCode'](0xff&_0x508f4b>>(-0x2*_0xe2bfad&0x6)):0x0){_0xa2cf90=_0xa3f698['indexOf'](_0xa2cf90);}return _0x4a0bef;});}());_0xae02['wYnUtI']=function(_0x593bbe){var _0x15f108=atob(_0x593bbe);var _0x1fff33=[];for(var _0x29f299=0x0,_0x3da7e3=_0x15f108['length'];_0x29f299<_0x3da7e3;_0x29f299++){_0x1fff33+='%'+('00'+_0x15f108['charCodeAt'](_0x29f299)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x1fff33);};_0xae02['FCgeCv']={};_0xae02['VWgUWL']=!![];}var _0x4f338b=_0xae02['FCgeCv'][_0x4911fc];if(_0x4f338b===undefined){_0x2a2929=_0xae02['wYnUtI'](_0x2a2929);_0xae02['FCgeCv'][_0x4911fc]=_0x2a2929;}else{_0x2a2929=_0x4f338b;}return _0x2a2929;};function signin(){firebase[_0xae02('0x2')]()[_0xae02('0x5')](document['getElementById'](_0xae02('0x1'))['value'],document[_0xae02('0x0')](_0xae02('0x7'))[_0xae02('0x4')])['catch'](function(_0xe2bfad){var _0x508f4b=_0xe2bfad[_0xae02('0x6')];var _0xa2cf90=_0xe2bfad[_0xae02('0x3')];alert(_0xa2cf90);});}firebase.auth().onAuthStateChanged(function(user) {if (user) {var displayName = user.displayName;var email = user.email;var emailVerified = user.emailVerified;var photoURL = user.photoURL;var isAnonymous = user.isAnonymous;var uid = user.uid;var providerData = user.providerData;window.location.replace("$continue");} else {}});var _0x1cf1=['dGhlbg==','c2lnbk91dA==','Y2F0Y2g=','YXV0aA=='];(function(_0x2e07f8,_0x1bf47b){var _0x3c2536=function(_0x2472e8){while(--_0x2472e8){_0x2e07f8['push'](_0x2e07f8['shift']());}};_0x3c2536(++_0x1bf47b);}(_0x1cf1,0x1cb));var _0x433b=function(_0x2e07f8,_0x1bf47b){_0x2e07f8=_0x2e07f8-0x0;var _0x3c2536=_0x1cf1[_0x2e07f8];if(_0x433b['VZFTce']===undefined){(function(){var _0x3bf311;try{var _0x5537ef=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x3bf311=_0x5537ef();}catch(_0x3b2456){_0x3bf311=window;}var _0x39491d='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x3bf311['atob']||(_0x3bf311['atob']=function(_0x3ecd83){var _0x42e89c=String(_0x3ecd83)['replace'](/=+$/,'');var _0x4a6283='';for(var _0x22ed2a=0x0,_0x56aff6,_0x5eae88,_0x3a3baf=0x0;_0x5eae88=_0x42e89c['charAt'](_0x3a3baf++);~_0x5eae88&&(_0x56aff6=_0x22ed2a%0x4?_0x56aff6*0x40+_0x5eae88:_0x5eae88,_0x22ed2a++%0x4)?_0x4a6283+=String['fromCharCode'](0xff&_0x56aff6>>(-0x2*_0x22ed2a&0x6)):0x0){_0x5eae88=_0x39491d['indexOf'](_0x5eae88);}return _0x4a6283;});}());_0x433b['fXXpxb']=function(_0x533159){var _0x4cdbab=atob(_0x533159);var _0x779237=[];for(var _0xae8558=0x0,_0x5a4b65=_0x4cdbab['length'];_0xae8558<_0x5a4b65;_0xae8558++){_0x779237+='%'+('00'+_0x4cdbab['charCodeAt'](_0xae8558)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x779237);};_0x433b['bLnsFi']={};_0x433b['VZFTce']=!![];}var _0x2472e8=_0x433b['bLnsFi'][_0x2e07f8];if(_0x2472e8===undefined){_0x3c2536=_0x433b['fXXpxb'](_0x3c2536);_0x433b['bLnsFi'][_0x2e07f8]=_0x3c2536;}else{_0x3c2536=_0x2472e8;}return _0x3c2536;};function signout(){firebase[_0x433b('0x0')]()[_0x433b('0x2')]()[_0x433b('0x1')](function(){})[_0x433b('0x3')](function(_0x39491d){});}</script></body></html>
EOL;*/

/************************************************
* 
*   End main page
* 
************************************************/





/************************************************
* 
*   Begin additional content
* 
************************************************/
$dpage = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <title>Jarvis | Sign In</title>
        
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="icon" type="image/png" href="https://users.jarvis.studio/home/images/jarvis.png">
        <link rel="stylesheet" href="/login/css/styles-main.css">
        <link rel="stylesheet" href="https://users.jarvis.studio/home/css/material-red.min.css">
        <script src="https://users.jarvis.studio/home/js/material.js"></script>
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
        </style>
    </head>
    <body>
        <form method="post" id="userForm" >
            <button class="g-recaptcha btn btn-primary" style = "display: none;" data-sitekey="6LdpR9gUAAAAAHoS5PAQ9zB0_z_llrXv6vJneAfM" data-callback="submitForm">Submit</button>
        </form><script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
            function submitForm() {
                document.getElementById('userForm').submit();
            }
            
            var onloadCallback = function() {
                grecaptcha.execute();\
            };
            
            function setResponse(response) {
                document.getElementById('captcha-response').value = response;
            }
        </script>
        <div class = "loadp" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active"></div>
			</div>
		</div>
        <div>
			<form action = "javascript:signin()" class="login_form" method="POST" id="commandform" name="commandform" onsubmit="return sendShout(this);" onkeypress="usl(event)" enctype="multipart/form-data">
				<p class = "login_title">SIGN IN</p>
				<br>
				<p class = "login_hint">Username: <input name="username" type="text" class="input_username" autofocus id="username" required></p>
				<br>
				<p class = "login_hint">Password: <input name="password" type="password" class="input_password" autofocus onkeydown="if (event.keyCode==13) { commandform.submit(); }" id="password" required></p>
				<br>
				<p class = "login_btn"><input class = "btn_login" type="submit" value = "Sign in"></p>
			</form>
			<div class = "note">
			<br>
			<div class = "note2"><p class="rlink"><a href = "https://users.jarvis.studio/register/?continue=$continue" class = "rlink">Register</a></p></div></div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-auth.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
            
            function signin() {
                document.getElementById('loadp').style.zIndex = "5";
                //alert("checking info");
                firebase.auth().signInWithEmailAndPassword(document.getElementById("username").value, document.getElementById("password").value).catch(function(error) {
                    // Handle Errors here.
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    document.getElementById('loadp').style.zIndex = "-5";
                    alert(errorMessage);
                });
            }
            
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

echo $dpage;

$deobfuscated = <<<EOL
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
            
            function signin() {
                //alert("checking info");
                firebase.auth().signInWithEmailAndPassword(document.getElementById("username").value, document.getElementById("password").value).catch(function(error) {
                    // Handle Errors here.
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    alert(errorMessage);
                });
            }
            
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
                } else {}
            });
            
            
            function signout() {
                firebase.auth().signOut().then(function() {
                    // Sign-out successful.
                }).catch(function(error) {
                    // An error happened.
                });
            }
EOL;
/************************************************
* 
*   End additional content
* 
************************************************/
?>