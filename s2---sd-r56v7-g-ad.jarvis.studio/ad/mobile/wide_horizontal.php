<?php
$adid = $_GET['id'];
$click = file_get_contents('./'.$adid.'-ref.dat');
if ($adid == "" || $click == "") {
$missing = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <title>Missing advertisiment ID</title>
        <meta charset = "utf-8">
        <style>
            html, body {
                background: #121212;
                margin: 0;
                padding: 0;
                cursor: default;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
                    -webkit-transition: 0.2s;
                    -moz-transition: 0.2s;
                    -ms-transition: 0.2s;
                    -o-transition: 0.2s;
                    transition: 0.2s;
            }
            
            p {
                font-family: sans-serif;
                font-size: 11px;
                color: #fafafa;
                margin: 0;
                padding: 0;
            }
            
            .adban {
                width: 316px;
                height: 31px;
                padding-top: 15px;
                text-align: center;
                background-color: #000000;
                border: 2px solid #ff0000;
            }
        </style>
    </head>
    <body>
        <div class = "adban">
            <p>AD ID missing in URL. Please check that you correctly entered URL.</p>
        </div>
    </body>
</html>
EOL;
    echo $missing;
} else {
$ref = file_get_contents('./'.$adid.'-ref.dat');
$imgad = file_get_contents('./'.$adid.'-img.dat');
$file = './'.$adid.'-stats.dat';
$count = file_get_contents($file);
if ($count == '') {
    $count = 1;
} else {
    $count++;
}
file_put_contents($file, $count);
$application = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <title>AD</title>
        <meta charset = "utf-8">
        <style>
            html, body {
                margin: 0;
                padding: 0;
            }
            
            .layout-main {
                width: 320px;
                height: 50px;
                background-color: #000000;
            }
            
            .close {
                background-color: rgba(127, 127, 127, 0.5);
                width: 20px;
                height: 19px;
                padding-top: 1px;
                color: #ffffff;
                position: fixed;
                left: 300px;
                z-index: 5;
                top: 0;
                text-align: center;
                font-family: sans-serif;
                cursor: default;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
                    -webkit-transition: 0.2s;
                    -moz-transition: 0.2s;
                    -ms-transition: 0.2s;
                    -o-transition: 0.2s;
                    transition: 0.2s;
            }
            
            .close:hover {
                background-color: rgba(127, 127, 127, 0.7);
                cursor: pointer;
            }
            
            .close:active {
                background-color: rgba(127, 127, 127, 0.8);
                color: #000000;
            }
            
            .banner {
                width: 320px;
                height: 50px;
                z-index: 3;
                position: fixed;
                background-color: #ffffff;
                top: 0;
                left: 0;
            }
            
            .banner:hover {
                cursor: pointer;
            }
            
            .report {
                width: 0px;
                height: 50px;
                background-color: #323232;
                z-index: 6;
                position: fixed;
                top: 0;
                left: 0;
                    -webkit-transition: 0.2s;
                    -moz-transition: 0.2s;
                    -ms-transition: 0.2s;
                    -o-transition: 0.2s;
                    transition: 0.2s;
            }
            
            .a25p1 {
                width: 0px;
                height: 0px;
                z-index: -5;
                position: fixed;
                top: 0;
                border: none;
                color: #fafafa;
                padding-top: 10px;
                font-size: 11px;
                text-align: center;
                font-family: sans-serif;
                opacity: 0;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
            }
            
            .a25p2 {
                width: 0px;
                height: 0px;
                z-index: -5;
                position: fixed;
                top: 0;
                border: none;
                color: #fafafa;
                padding-top: 10px;
                font-size: 11px;
                text-align: center;
                font-family: sans-serif;
                opacity: 0;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
            }
            
            .a25p3 {
                width: 0px;
                height: 0px;
                z-index: -5;
                position: fixed;
                top: 0;
                border: none;
                color: #fafafa;
                padding-top: 10px;
                font-size: 11px;
                text-align: center;
                font-family: sans-serif;
                opacity: 0;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
            }
            
            .a25p4 {
                width: 0px;
                height: 0px;
                z-index: -5;
                position: fixed;
                top: 0;
                border: none;
                color: #fafafa;
                padding-top: 10px;
                font-size: 11px;
                text-align: center;
                font-family: sans-serif;
                opacity: 0;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
            }
            
            .a25p1:hover, .a25p2:hover, .a25p3:hover, .a25p4:hover {
                text-decoration: underline;
                cursor: pointer;
            }
            
            .ad-closed {
                width: 0px;
                height: 30px;
                z-index: -5;
                background-color: #323232;
                padding-top: 20px;
                font-size: 11px;
                position: fixed;
                color: #fafafa;
                text-align: center;
                font-family: sans-serif;
                top: 0;
                left: 0;
                opacity: 0;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
                    -webkit-transition: 0.5s;
                    -moz-transition: 0.5s;
                    -ms-transition: 0.5s;
                    -o-transition: 0.5s;
                    transition: 0.5s;
            }
            
            .click {
                width: 320px;
                height: 50px;
                background-position: center center;
                background-image: url($imgad);
                background-repeat: no-repeat;
                background-size: 100%;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
                    -webkit-transition: 0.5s;
                    -moz-transition: 0.5s;
                    -ms-transition: 0.5s;
                    -o-transition: 0.5s;
                    transition: 0.5s;
            }
        </style>
    </head>
    <body>
        <div class = "layout-main">
            <div class = "close" onclick = "closeAd()" id = "close">
                X
            </div>
            <div class = "banner" id = "banner">
                <a href = "$ref" target="_top">
                    <div class = "click">
                    </div>
                </a>
            </div>
            <div class = "ad-closed" id = "adClosed">
                Ad closed by Teslasoft
            </div>
            <div class = "report" id = "report">
                <span>
                    <div class = "a25p1" id = "report-button-1" onclick = "reportAd()">
                        Ad not interested
                    </div>
                    <div class = "a25p2" id = "report-button-2" onclick = "reportAd()">
                        Ad covered content
                    </div>
                    <div class = "a25p3" id = "report-button-3" onclick = "reportAd()">
                        Ad violating our terms
                    </div>
                    <div class = "a25p4" id = "report-button-4" onclick = "returnAd()">
                        Cancel
                    </div>
                </span>
            </div>
        </div>
        <script>
            function closeAd() {
                document.getElementById('report').style.width = "320px";
                document.getElementById('report').style.zIndex = "6";
                document.getElementById('report-button-1').style.width = "80px";
                document.getElementById('report-button-1').style.height = "50px";
                document.getElementById('report-button-1').style.borderRight = "2px solid rgba(255, 255, 255, 0.2)";
                document.getElementById('report-button-1').style.left = "0";
                document.getElementById('report-button-1').style.position = "fixed";
                document.getElementById('report-button-1').style.opacity = "1";
                document.getElementById('report-button-2').style.width = "80px";
                document.getElementById('report-button-2').style.height = "50px";
                document.getElementById('report-button-2').style.borderRight = "2px solid rgba(255, 255, 255, 0.2)";
                document.getElementById('report-button-2').style.left = "80px";
                document.getElementById('report-button-2').style.position = "fixed";
                document.getElementById('report-button-2').style.opacity = "1";
                document.getElementById('report-button-3').style.width = "80px";
                document.getElementById('report-button-3').style.height = "50px";
                document.getElementById('report-button-3').style.borderRight = "2px solid rgba(255, 255, 255, 0.2)";
                document.getElementById('report-button-3').style.left = "160px";
                document.getElementById('report-button-3').style.position = "fixed";
                document.getElementById('report-button-3').style.opacity = "1";
                document.getElementById('report-button-4').style.width = "80px";
                document.getElementById('report-button-4').style.height = "50px";
                document.getElementById('report-button-4').style.border = "none";
                document.getElementById('report-button-4').style.left = "240px";
                document.getElementById('report-button-4').style.position = "fixed";
                document.getElementById('report-button-4').style.opacity = "1";
                document.getElementById('report-button-1').style.zIndex = "6";
                document.getElementById('report-button-2').style.zIndex = "6";
                document.getElementById('report-button-3').style.zIndex = "6";
                document.getElementById('report-button-4').style.zIndex = "6";
            }
            
            function returnAd() {
                document.getElementById('report').style.width = "0px";
                document.getElementById('report').style.zIndex = "0";
                document.getElementById('report-button-1').style.width = "0";
                document.getElementById('report-button-2').style.width = "0";
                document.getElementById('report-button-3').style.width = "0";
                document.getElementById('report-button-4').style.width = "0";
                document.getElementById('report-button-1').style.zIndex = "0";
                document.getElementById('report-button-2').style.zIndex = "0";
                document.getElementById('report-button-3').style.zIndex = "0";
                document.getElementById('report-button-4').style.zIndex = "0";
                document.getElementById('report-button-1').style.border = "none";
                document.getElementById('report-button-2').style.border = "none";
                document.getElementById('report-button-3').style.border = "none";
                document.getElementById('report-button-4').style.border = "none";
                document.getElementById('report-button-1').style.opacity = "0";
                document.getElementById('report-button-2').style.opacity = "0";
                document.getElementById('report-button-3').style.opacity = "0";
                document.getElementById('report-button-4').style.opacity = "0";
            }
            
            function reportAd() {
                document.getElementById('adClosed').style.width = "320px";
                document.getElementById('adClosed').style.zIndex = "8";
                document.getElementById('adClosed').style.opacity = "1";
                document.getElementById('report-button-1').style.zIndex = "0";
                document.getElementById('report-button-2').style.zIndex = "0";
                document.getElementById('report-button-3').style.zIndex = "0";
                document.getElementById('report-button-4').style.zIndex = "0";
            }
        </script>
    </body>
</html>
EOL;
echo $application;
}
?>