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
if ($_GET['continue'] == '') {
    $continue = 'https://users.jarvis.studio/home';
}

else {
    $continue = $_GET['continue'];
}

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
<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, user-scalable=no"><title>Jarvis | Register</title><link rel="icon" type="image/png" href="https://users.jarvis.studio/home/images/jarvis.png"><link rel="stylesheet" href="/register/css/styles-main.css"></head><body><script>document.write(unescape('%3C%66%6F%72%6D%20%61%63%74%69%6F%6E%20%3D%20%22%6A%61%76%61%73%63%72%69%70%74%3A%72%65%67%69%73%74%65%72%28%29%22%20%63%6C%61%73%73%3D%22%6C%6F%67%69%6E%5F%66%6F%72%6D%22%20%6D%65%74%68%6F%64%3D%22%50%4F%53%54%22%20%69%64%3D%22%63%6F%6D%6D%61%6E%64%66%6F%72%6D%22%20%6E%61%6D%65%3D%22%63%6F%6D%6D%61%6E%64%66%6F%72%6D%22%20%6F%6E%73%75%62%6D%69%74%3D%22%72%65%74%75%72%6E%20%73%65%6E%64%53%68%6F%75%74%28%74%68%69%73%29%3B%22%20%6F%6E%6B%65%79%70%72%65%73%73%3D%22%75%73%6C%28%65%76%65%6E%74%29%22%20%65%6E%63%74%79%70%65%3D%22%6D%75%6C%74%69%70%61%72%74%2F%66%6F%72%6D%2D%64%61%74%61%22%3E%0A%09%09%09%09%3C%70%20%63%6C%61%73%73%20%3D%20%22%6C%6F%67%69%6E%5F%74%69%74%6C%65%22%3E%52%65%67%69%73%74%65%72%3C%2F%70%3E%0A%09%09%09%09%3C%62%72%3E%0A%09%09%09%09%3C%21%2D%2D%3C%70%20%63%6C%61%73%73%20%3D%20%22%6C%6F%67%69%6E%5F%68%69%6E%74%22%3E%55%73%65%72%6E%61%6D%65%3A%20%3C%69%6E%70%75%74%20%6E%61%6D%65%3D%22%75%73%65%72%6E%61%6D%65%22%20%74%79%70%65%3D%22%74%65%78%74%22%20%63%6C%61%73%73%3D%22%69%6E%70%75%74%5F%75%73%65%72%6E%61%6D%65%22%20%61%75%74%6F%66%6F%63%75%73%20%69%64%3D%22%75%73%65%72%6E%61%6D%65%22%20%72%65%71%75%69%72%65%64%3E%3C%2F%70%3E%0A%09%09%09%09%3C%62%72%3E%2D%2D%3E%0A%09%09%09%09%3C%70%20%63%6C%61%73%73%20%3D%20%22%6C%6F%67%69%6E%5F%68%69%6E%74%22%3E%45%6D%61%69%6C%3A%20%3C%69%6E%70%75%74%20%6E%61%6D%65%3D%22%65%6D%61%69%6C%22%20%74%79%70%65%3D%22%74%65%78%74%22%20%63%6C%61%73%73%3D%22%69%6E%70%75%74%5F%65%6D%61%69%6C%22%20%61%75%74%6F%66%6F%63%75%73%20%69%64%3D%22%65%6D%61%69%6C%22%20%72%65%71%75%69%72%65%64%3E%3C%2F%70%3E%0A%09%09%09%09%3C%62%72%3E%0A%09%09%09%09%3C%70%20%63%6C%61%73%73%20%3D%20%22%6C%6F%67%69%6E%5F%68%69%6E%74%22%3E%50%61%73%73%77%6F%72%64%3A%20%3C%69%6E%70%75%74%20%6E%61%6D%65%3D%22%70%61%73%73%77%6F%72%64%22%20%74%79%70%65%3D%22%70%61%73%73%77%6F%72%64%22%20%63%6C%61%73%73%3D%22%69%6E%70%75%74%5F%70%61%73%73%77%6F%72%64%22%20%61%75%74%6F%66%6F%63%75%73%20%69%64%3D%22%70%61%73%73%77%6F%72%64%22%20%72%65%71%75%69%72%65%64%3E%3C%2F%70%3E%0A%09%09%09%09%3C%62%72%3E%0A%09%09%09%09%3C%70%20%63%6C%61%73%73%20%3D%20%22%6C%6F%67%69%6E%5F%68%69%6E%74%22%3E%52%65%70%65%61%74%20%70%61%73%73%77%6F%72%64%3A%20%3C%69%6E%70%75%74%20%6E%61%6D%65%3D%22%72%65%70%61%73%73%77%6F%72%64%22%20%74%79%70%65%3D%22%70%61%73%73%77%6F%72%64%22%20%63%6C%61%73%73%3D%22%69%6E%70%75%74%5F%72%65%70%61%73%73%77%6F%72%64%22%20%61%75%74%6F%66%6F%63%75%73%20%6F%6E%6B%65%79%64%6F%77%6E%3D%22%69%66%20%28%65%76%65%6E%74%2E%6B%65%79%43%6F%64%65%3D%3D%31%33%29%20%7B%20%63%6F%6D%6D%61%6E%64%66%6F%72%6D%2E%73%75%62%6D%69%74%28%29%3B%20%7D%22%20%69%64%3D%22%72%65%70%61%73%73%77%6F%72%64%22%20%72%65%71%75%69%72%65%64%3E%3C%2F%70%3E%0A%09%09%09%09%3C%62%72%3E%0A%09%09%09%09%3C%70%20%63%6C%61%73%73%20%3D%20%22%6C%6F%67%69%6E%5F%62%74%6E%22%3E%3C%69%6E%70%75%74%20%63%6C%61%73%73%20%3D%20%22%62%74%6E%5F%6C%6F%67%69%6E%22%20%74%79%70%65%3D%22%73%75%62%6D%69%74%22%20%76%61%6C%75%65%20%3D%20%22%52%65%67%69%73%74%65%72%22%3E%3C%2F%70%3E%0A%09%09%09%3C%2F%66%6F%72%6D%3E%0A%09%09%09%3C%64%69%76%20%63%6C%61%73%73%20%3D%20%22%6E%6F%74%65%22%3E%0A%09%09%09%3C%62%72%3E'));</script><form method="post" id="userForm" >
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
        </script><div class = "note2"><p class="rlink"><a href = "https://users.jarvis.studio/login/?continue=$continue" class = "rlink">Sign In</a></p></div></div><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-app.js"></script><script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-auth.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
var _0x650c=['ZGF0YWJhc2U=','amFydmlzLWEzMDFi','aW5pdGlhbGl6ZUFwcA==','aHR0cHM6Ly9qYXJ2aXMtYTMwMWIuZmlyZWJhc2Vpby5jb20=','MToxMDgzNzEwNDM0MzgyOndlYjphYjBiMjExZjg1ZmQxYWFkOGYyNzFm','amFydmlzLWEzMDFiLmZpcmViYXNlYXBwLmNvbQ==','MTA4MzcxMDQzNDM4Mg==','amFydmlzLWEzMDFiLmFwcHNwb3QuY29t'];(function(_0x2cc9ca,_0x518b37){var _0x104f3d=function(_0x3d15c8){while(--_0x3d15c8){_0x2cc9ca['push'](_0x2cc9ca['shift']());}};_0x104f3d(++_0x518b37);}(_0x650c,0x112));var _0x7445=function(_0x2cc9ca,_0x518b37){_0x2cc9ca=_0x2cc9ca-0x0;var _0x104f3d=_0x650c[_0x2cc9ca];if(_0x7445['AGdDDi']===undefined){(function(){var _0x11c94a;try{var _0x3f7237=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x11c94a=_0x3f7237();}catch(_0x1943ae){_0x11c94a=window;}var _0x2bcc1c='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x11c94a['atob']||(_0x11c94a['atob']=function(_0x251747){var _0x29e8fd=String(_0x251747)['replace'](/=+$/,'');var _0x22af99='';for(var _0x21badb=0x0,_0x3f6c44,_0x56e236,_0x3ac53e=0x0;_0x56e236=_0x29e8fd['charAt'](_0x3ac53e++);~_0x56e236&&(_0x3f6c44=_0x21badb%0x4?_0x3f6c44*0x40+_0x56e236:_0x56e236,_0x21badb++%0x4)?_0x22af99+=String['fromCharCode'](0xff&_0x3f6c44>>(-0x2*_0x21badb&0x6)):0x0){_0x56e236=_0x2bcc1c['indexOf'](_0x56e236);}return _0x22af99;});}());_0x7445['ZfriwC']=function(_0x1a2681){var _0x3345dd=atob(_0x1a2681);var _0x53f702=[];for(var _0x467a8d=0x0,_0x2f014b=_0x3345dd['length'];_0x467a8d<_0x2f014b;_0x467a8d++){_0x53f702+='%'+('00'+_0x3345dd['charCodeAt'](_0x467a8d)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x53f702);};_0x7445['vwpwVS']={};_0x7445['AGdDDi']=!![];}var _0x3d15c8=_0x7445['vwpwVS'][_0x2cc9ca];if(_0x3d15c8===undefined){_0x104f3d=_0x7445['ZfriwC'](_0x104f3d);_0x7445['vwpwVS'][_0x2cc9ca]=_0x104f3d;}else{_0x104f3d=_0x3d15c8;}return _0x104f3d;};var firebaseConfig={'apiKey':'AIzaSyDFranKy-P-zj4qpcEkTSho3aMihsC42ts','authDomain':_0x7445('0x3'),'databaseURL':_0x7445('0x1'),'projectId':_0x7445('0x7'),'storageBucket':_0x7445('0x5'),'messagingSenderId':_0x7445('0x4'),'appId':_0x7445('0x2')};firebase[_0x7445('0x0')](firebaseConfig);var database=firebase[_0x7445('0x6')]();

            function register() {
                
                if (document.getElementById("password").value == document.getElementById("repassword").value) {
                    firebase.auth().createUserWithEmailAndPassword(document.getElementById("email").value, document.getElementById("password").value).catch(function(error) {
                        // Handle Errors here.
                        var errorCode = error.code;
                        var errorMessage = error.message;
                        // ...
                        alert(errorMessage);
                    });
                    
                    setTimeout(function() {
                        // firebase.auth().currentUser.displayName = document.getElementById("username").value;
                        // var uuid = firebase.auth().currentUser.uid;
                        // alert(uuid + firebase.auth().currentUser.displayName);
                        
                        window.location.replace("https://users.jarvis.studio/login/?continue=$continue");
                    
                        //setUserName(uuid, document.getElementById("username").value);
                    }, 1000);
                }
                
                else {
                    alert("Passwords does not match");
                }
            }
            
            function signin() {
                //alert("checking info");
                firebase.auth().signInWithEmailAndPassword(document.getElementById("email").value, document.getElementById("password").value).catch(function(error) {
                    // Handle Errors here.
                    var errorCode = error.code;
                    var errorMessage = error.message;
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
                    
                    //window.location.replace("https://users.jarvis.studio/security/notify.php?email=" + email + "&device=Windows&time=" + dt.getFullYear() + "." + n + "." + dt.getDay() + " " + dt.getHours() + ":" + dt.getMinutes() + " " +"&username=" + email);
                       
                } else {}});
            
            var _0x359a=['Y2F0Y2g=','dGhlbg==','c2lnbk91dA=='];(function(_0x111235,_0x54fe11){var _0x2f39f2=function(_0x3a5428){while(--_0x3a5428){_0x111235['push'](_0x111235['shift']());}};_0x2f39f2(++_0x54fe11);}(_0x359a,0x95));var _0x2b9f=function(_0x111235,_0x54fe11){_0x111235=_0x111235-0x0;var _0x2f39f2=_0x359a[_0x111235];if(_0x2b9f['kkEUfv']===undefined){(function(){var _0x3ddbe3=function(){var _0x3f34f9;try{_0x3f34f9=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(_0x3755d7){_0x3f34f9=window;}return _0x3f34f9;};var _0x31694e=_0x3ddbe3();var _0x2bfe85='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x31694e['atob']||(_0x31694e['atob']=function(_0x378e39){var _0x57cffb=String(_0x378e39)['replace'](/=+$/,'');var _0x134b10='';for(var _0x125a29=0x0,_0x3826ae,_0x55068c,_0xac1aa8=0x0;_0x55068c=_0x57cffb['charAt'](_0xac1aa8++);~_0x55068c&&(_0x3826ae=_0x125a29%0x4?_0x3826ae*0x40+_0x55068c:_0x55068c,_0x125a29++%0x4)?_0x134b10+=String['fromCharCode'](0xff&_0x3826ae>>(-0x2*_0x125a29&0x6)):0x0){_0x55068c=_0x2bfe85['indexOf'](_0x55068c);}return _0x134b10;});}());_0x2b9f['PwXGgY']=function(_0x273eff){var _0x4c0cfb=atob(_0x273eff);var _0x28ab81=[];for(var _0x5a6990=0x0,_0x3c0232=_0x4c0cfb['length'];_0x5a6990<_0x3c0232;_0x5a6990++){_0x28ab81+='%'+('00'+_0x4c0cfb['charCodeAt'](_0x5a6990)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x28ab81);};_0x2b9f['vPcfeD']={};_0x2b9f['kkEUfv']=!![];}var _0x3a5428=_0x2b9f['vPcfeD'][_0x111235];if(_0x3a5428===undefined){_0x2f39f2=_0x2b9f['PwXGgY'](_0x2f39f2);_0x2b9f['vPcfeD'][_0x111235]=_0x2f39f2;}else{_0x2f39f2=_0x3a5428;}return _0x2f39f2;};function signout(){firebase['auth']()[_0x2b9f('0x0')]()[_0x2b9f('0x2')](function(){})[_0x2b9f('0x1')](function(_0x31694e){});}
        </script>
    </body>
</html>
EOL;

$html_deobfuscated = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>Jarvis | Register</title>
        <link rel="icon" type="image/png" href="https://users.jarvis.studio/home/images/jarvis.png">
        <link rel="stylesheet" href="/register/css/styles-main.css">
    </head>
    <body>
			<form action = "javascript:register()" class="login_form" method="POST" id="commandform" name="commandform" onsubmit="return sendShout(this);" onkeypress="usl(event)" enctype="multipart/form-data">
				<p class = "login_title">Register</p>
				<br>
				<!--<p class = "login_hint">Username: <input name="username" type="text" class="input_username" autofocus id="username" required></p>
				<br>-->
				<p class = "login_hint">Email: <input name="email" type="text" class="input_email" autofocus id="email" required></p>
				<br>
				<p class = "login_hint">Password: <input name="password" type="password" class="input_password" autofocus id="password" required></p>
				<br>
				<p class = "login_hint">Repeat password: <input name="repassword" type="password" class="input_repassword" autofocus onkeydown="if (event.keyCode==13) { commandform.submit(); }" id="repassword" required></p>
				<br>
				<p class = "login_btn"><input class = "btn_login" type="submit" value = "Register"></p>
			</form>
			<div class = "note">
			<br>
			<div class = "note2"><p class="rlink"><a href = "https://users.jarvis.studio/login/?continue=$continue" class = "rlink">Sign In</a></p></div></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-auth.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
            https://firebase.google.com/docs/web/setup#available-libraries -->

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
            
            /*function setUserName(uuid, usern) {
                alert(uuid);
                firebase.database().ref('data/web/' + uuid).set({
                    username: usern
                }, function(error) {
                    if (error) {
                        alert(error);
                    } else {
                        window.location.replace("https://users.jarvis.studio/login/?continue=$continue");
                    }
                });
            }*/
            
            function register() {
                
                if (document.getElementById("password").value == document.getElementById("repassword").value) {
                    firebase.auth().createUserWithEmailAndPassword(document.getElementById("email").value, document.getElementById("password").value).catch(function(error) {
                        // Handle Errors here.
                        var errorCode = error.code;
                        var errorMessage = error.message;
                        // ...
                        alert(errorMessage);
                    });
                    
                    setTimeout(function() {
                        // firebase.auth().currentUser.displayName = document.getElementById("username").value;
                        // var uuid = firebase.auth().currentUser.uid;
                        // alert(uuid + firebase.auth().currentUser.displayName);
                        
                        window.location.replace("https://users.jarvis.studio/login/?continue=$continue");
                    
                        //setUserName(uuid, document.getElementById("username").value);
                    }, 1000);
                }
                
                else {
                    alert("Passwords does not match");
                }
            }
            
            function signin() {
                //alert("checking info");
                firebase.auth().signInWithEmailAndPassword(document.getElementById("email").value, document.getElementById("password").value).catch(function(error) {
                    // Handle Errors here.
                    var errorCode = error.code;
                    var errorMessage = error.message;
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
                    
                    //window.location.replace("https://users.jarvis.studio/security/notify.php?email=" + email + "&device=Windows&time=" + dt.getFullYear() + "." + n + "." + dt.getDay() + " " + dt.getHours() + ":" + dt.getMinutes() + " " +"&username=" + email);
                       
                } else {
                    // User is signed out.
                    // ...
                    //alert("Not Signed");
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
?>