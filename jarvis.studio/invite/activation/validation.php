<?php
// $code = $_GET['id'];

$code = isset($_GET['id']) ? $_GET['id'] : NULL;
		
if ($code == "") {
    $application = <<<EOL
<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Invalid URL params (400)</title>
        <meta charset = "utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
            html, body {
                margin: 0;
                padding: 0;
                font-size: 16px;
                transition: 0.3s;
            }
            
            p {
                font-family: sans-serif;
                font-size: 16px;
            }
            
            span {
                font-family: sans-serif;
                font-size: 16px;
            }
            
            br {
                font-family: sans-serif;
                font-size: 0px;
                line-height: 0px;
            }
            
            .layout-main {
                width: 100vw;
                height: 100vh;
                transition: 0.3s;
            }
            
            .content {
                
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
            
            .dark-grey-70-color {
                color: #515151;
            }
            
            .med-red-100-color {
                color: #db4437;
            }
            
            .med-green-blue-70-color {
                color: #2e8b57;
            }
        </style>
    </head>
    <body>
        <div class = "layout-main">
            <div class = "content">
                <span class = "dark-grey-70-color unselective">Error: <span class = "med-red-100-color selective-text">Invalid invite code (URL param can not be null)</span></span>
                <br>
                <span class = "dark-grey-70-color unselective">Error code: <span class = "med-red-100-color selective-text">400</span></span>
            </div>
        </div>
        <script>
            
        </script>
    </body>
</html>
EOL;

// Postinitialization
echo $application;
} else {
$application = <<<EOL
<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Invite code activation</title>
        <meta charset = "utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-analytics.js"></script>
        <style>
            html, body {
                margin: 0;
                padding: 0;
                font-size: 16px;
                transition: 0.3s;
            }
            
            p {
                font-family: sans-serif;
                font-size: 16px;
            }
            
            span {
                font-family: sans-serif;
                font-size: 16px;
            }
            
            br {
                font-family: sans-serif;
                font-size: 0px;
                line-height: 0px;
            }
            
            .layout-main {
                width: 100vw;
                height: 100vh;
                transition: 0.3s;
            }
            
            .content {
                
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
            
            .dark-grey-70-color {
                color: #515151;
            }
            
            .med-red-100-color {
                color: #db4437;
            }
            
            .med-green-blue-70-color {
                color: #2e8b57;
            }
        </style>
    </head>
    <body>
        <div class = "layout-main">
            <div class = "content">
                <span class = "dark-grey-70-color unselective">Invite code: <span class = "med-red-100-color selective-text">$code</span></span>
                <br>
                <span class = "dark-grey-70-color unselective">Code is valid: <span class = "med-green-blue-70-color selective-text" id = "isValid"></span></span>
                <br>
                <span class = "dark-grey-70-color unselective">Code is activated: <span class = "med-green-blue-70-color selective-text" id = "isActivated"></span></span>
            </div>
        </div>
        <script>
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
            
            function validate() {
                
            }
        </script>
    </body>
</html>
EOL;

// Postinitialization
echo $application;
}
?>