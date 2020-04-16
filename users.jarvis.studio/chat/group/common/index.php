<?php

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

$custom_bg = strval($_GET['custom-bg']);
$custom_buuble_in_bg = strval($_GET['custom-bubble-in-bg']);
$custom_buuble_out_bg = strval($_GET['custom-bubble-out-bg']);
$custom_important_bg = strval($_GET['custom-important-bg']);
$custom_header_bg = strval($_GET['custom-header-bg']);
$custom_header_text = strval($_GET['custom-header-text']);
$custom_images_bg = strval($_GET['custom-images-bg']);

if ($custom_bg == '') {
    $custom_bg = '121212';
}

if ($custom_buuble_in_bg == '') {
    $custom_buuble_in_bg = '212121';
}

if ($custom_buuble_out_bg == '') {
    $custom_buuble_out_bg = '2c4233';
}

if ($custom_important_bg == '') {
    $custom_important_bg = '6e2f2f';
}

if ($custom_header_bg == '') {
    $custom_header_bg = 'rgba(50, 50, 50, 0.6)';
}

if ($custom_header_text == '') {
    $custom_header_text = '2e8b57';
}

if ($custom_images_bg == '') {
    $custom_images_bg = '616161';
}

echo <<<EOL
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" href="./css/material-red.min.css">
		<script defer src="./js/material.js"></script>
	    <title>Jarvis | Common chat</title>
	    <link rel="icon" type="image/png" href="https://users.jarvis.studio/home/images/jarvis.png">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
        <style>
            html, body {
                background-color: #$custom_bg;
            }
            
            p {
                margin-top: 4px;
                margin-bottom: 4px;
            }
            
            .bubble-out {
                background-color: #$custom_buuble_out_bg;
                max-width: 860px;
                margin-left:auto;
                margin-right:0;
                margin-top: 8px;
                margin-bottom: 8px;
                flex-direction: row-reverse;
                border-bottom-left-radius: 16px;
                border-top-left-radius: 16px;
                border-bottom-right-radius: 0;
                border-top-right-radius: 16px;
                padding: 10px;
                
            }
        
            .bubble-in {
                background-color: #$custom_buuble_in_bg;
                max-width: 860px;
                position: left;
                border-bottom-left-radius: 0;
                border-top-left-radius: 16px;
                border-bottom-right-radius: 16px;
                border-top-right-radius: 16px;
                margin-top: 8px;
                margin-bottom: 8px;
                padding: 10px;
            }
        
            .li {
                width: 100%;
                min-width: 100%;
                align-self: flex-start;
            }
            
            .lo {
                width: 100%;
                min-width: 100%;
                align-self: flex-end;
            }
            
            .bubble-important {
                background-color: rgba(0, 0, 0, 0.0);
                max-width: 100vw;
                position: left;
                border-bottom-left-radius: 0;
                border-top-left-radius: 0;
                border-bottom-right-radius: 0;
                border-top-right-radius: 0;
                margin-top: 8px;
                margin-bottom: 8px;
                
                padding: 10px;
            }
            
            .lim {
                width: 100%;
                min-width: 100%;
            }
            
            .invis {
                width: 0;
                height: 0;
                opacity: 0;
            }
            
            .sendd {
                position: fixed;
                bottom: 0;
                width: 100%;
                text-align: center;
                background-color: #323232;
            }
            
            .sinp {
                min-width: 100%;
                min-height: 50px;
                max-height: 50px;
                color: #cecece;
                background-color: #424242;
                border-radius: 5px;
                border: none;
            }
            
            .sinp:focus {
                color: #cecece;
                background-color: #515151;
            }
            
            .message-list {
                width: 90%;
                margin: auto;
                display: flex;
                margin-bottom: 110px;
                margin-top: 70px;
	            flex-direction: column;
	            justify-content: flex-end;
            }
            
            .spann {
                width: 100%;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            
            .spann-element {
                padding-left: 10px;
                padding-right: 10px;
            }
            
            .btn {
                width: 70px;
                height: 50px;
            }
        
            @media (min-width: 720px) {
                .btn {
                    width: 10vw;
                    height: 50px;
                }
                
                .sinp {
                    width: 75vw;
                }
                
                .loading-view {
                    margin-top: -240px;
                }
            }
        
            .bin-name {
                color: #2e8b57;
            }
        
            .bin-message {
                color: #cecece;
            }
        
            .bin-time {
                color: #999999;
            }
            
            .bim-name {
                color: #ffff00;
                width: 100%;
                margin-left: -40px;
                text-align: center;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                -o-user-select: none;
                -user-select: none;
            }
        
            .bim-message {
                color: #fafafa;
            }
        
            .bim-time {
                color: #aaaaaa;
            }
            
            .bout-name {
                color: #2e8b57;
            }
            
            .bout-message {
                color: #fafafa;
            }
            
            .bout-time {
                color: #999999;
            }
        
            .mini-ava {
                width: 50px;
                height: 50px;
                background-color: #323232;
                border-radius: 60px;
                margin-top: 10px;
                margin-left: 10px;
                margin-right: 10px;
                margin-bottom: 10px;
                padding: 0px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                -o-user-select: none;
                -user-select: none;
            }
            
            @media (min-width: 576px) {
                .mini-ava {
                    width: 60px;
                    height: 60px;
                }
            }
            
            .header {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 60px;
                background-color: $custom_header_bg;
            }
        
            .pure-material-progress-circular {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                box-sizing: border-box;
                border: none;
                border-radius: 50%;
                padding: 0em;
                width: 4em;
                height: 4em;
                color: rgb(var(--pure-material-primary-rgb, 46, 139, 87));
                background-color: transparent;
                font-size: 16px;
                overflow: hidden;
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
                margin-left: auto;
                margin-right: auto;
            }

            .pure-material-progress-circular::-webkit-progress-bar {
                background-color: transparent;
            }

            /* Indeterminate */
            .pure-material-progress-circular:indeterminate {
                -webkit-mask-image: linear-gradient(transparent 50%, black 50%), linear-gradient(to right, transparent 50%, black 50%);
                mask-image: linear-gradient(transparent 50%, black 50%), linear-gradient(to right, transparent 50%, black 50%);
                animation: pure-material-progress-circular 6s infinite cubic-bezier(0.3, 0.6, 1, 1);
            }

            :-ms-lang(x), .pure-material-progress-circular:indeterminate {
                animation: none;
            }

            .pure-material-progress-circular:indeterminate::before,
            .pure-material-progress-circular:indeterminate::-webkit-progress-value {
                content: "";
                display: block;
                box-sizing: border-box;
                border: solid 0.45em transparent;
                border-top-color: currentColor;
                border-radius: 50%;
                width: 100% !important;
                height: 100%;
                background-color: transparent;
                animation: pure-material-progress-circular-pseudo 0.75s infinite linear alternate;
            }

            .pure-material-progress-circular:indeterminate::-moz-progress-bar {
                box-sizing: border-box;
                border: solid 0.25em transparent;
                border-top-color: currentColor;
                border-radius: 50%;
                width: 100%;
                height: 100%;
                background-color: transparent;
                animation: pure-material-progress-circular-pseudo 0.75s infinite linear alternate;
            }

            .pure-material-progress-circular:indeterminate::-ms-fill {
                animation-name: -ms-ring;
            }

            @keyframes pure-material-progress-circular {
                0% {
                    transform: rotate(0deg);
                }
                12.5% {
                    transform: rotate(180deg);
                    animation-timing-function: linear;
                }
                25% {
                    transform: rotate(630deg);
                }
                37.5% {
                    transform: rotate(810deg);
                    animation-timing-function: linear;
                }
                50% {
                    transform: rotate(1260deg);
                }
                62.5% {
                    transform: rotate(1440deg);
                    animation-timing-function: linear;
                }
                75% {
                    transform: rotate(1890deg);
                }
                87.5% {
                    transform: rotate(2070deg);
                    animation-timing-function: linear;
                }
                100% {
                    transform: rotate(2520deg);
                }
            }

            @keyframes pure-material-progress-circular-pseudo {
                0% {
                    transform: rotate(-30deg);
                }
                29.4% {
                    border-left-color: transparent;
                }
                29.41% {
                    border-left-color: currentColor;
                }
                64.7% {
                    border-bottom-color: transparent;
                }
                64.71% {
                    border-bottom-color: currentColor;
                }
                100% {
                    border-left-color: currentColor;
                    border-bottom-color: currentColor;
                    transform: rotate(225deg);
                }
            }
            
            .loading-view { 
                height: 100vh;
                width: 100vw;
                display: table;
                position: absolute;
                text-align: center;
                overfow: hidden;
                position: fixed;
                margin-top: -230px;
            }
            
            .middle {
                display: table-cell;
                vertical-align: middle;
                overfow: hidden;
            }
            
            .header-img {
                width: 40px;
                height: 40px;
                margin: 0;
                padding: 0px;
                background-color: #323232;
            }
            
            .header-table {
                margin: 10px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                -o-user-select: none;
                -user-select: none;
            }
            
            .btn-back {
                width: 40px;
            }
            
            .head-title {
                width: 100%;
            }
            
            .btn-opt {
                width: 40px;
            }
            
            .hr-title {
                font-size: 24px;
                color: #$custom_header_text;
                padding: 0;
                margin-left: 8px;
                margin-right: 8px;
                margin-top: 0;
                margin-bottom: 0;
            }
            
            .ic-warn {
                background-color: rgba(0, 0, 0, 0.0);
                border-radius: 0;
                width: 65px;
                height: 65px;
                margin-left: 8px;
                margin-right: 0;
                padding: 0;
            }
            
            #avatar {
                border-radius: 40px;
                background-color: #424242;
                padding: 0px;
            }
            
            img {
                width: 150px;
                height: auto;
                background: #$custom_images_bg;
                border-radius: 24px;
                margin: 20px;
                padding: 10px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                -o-user-select: none;
                -user-select: none;
            }
            
            @media (min-width: 720px) {
                img {
                    width: 300px;
                    height: auto;
                }
            }
            
            @media (min-width: 576px) {
                img {
                    width: 300px;
                    height: auto;
                }
            }
            
            ::-webkit-scrollbar {
                width: 0px;
            }
            
            /* Track */
            ::-webkit-scrollbar-track {
                background: #000000; 
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #336147;
                border-radius: 16px;
            }
            
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #30754e; 
            }
            
            .options {
                position: fixed;
                z-index: 0;
                padding: 10%;
                left: 0;
                top: 0;
                width: 0;
                height: 0;
                overflow: hidden;
                background-color: rgb(0,0,0);
                background-color: rgba(0, 0, 0, 0.7);
                /*background-color: rgba(0,0,0,0.4);*/
                opacity: 0.0;
                -webkit-transition: opacity 0.3s ease-in-out;
                -moz-transition: opacity 0.3s ease-in-out;
                -ms-transition: opacity 0.3s ease-in-out;
                -o-transition: opacity 0.3s ease-in-out;
                transition: opacity 0.3s ease-in-out;
            }
            
            .modal-content {
                background-color: #323232;
                margin: auto;
                padding: 16px;
                border-radius: 8px;
                width: 100%;
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
            
            h2 {
                color: #cecece;
            }
            
            .loadp {
				position: fixed;
				overflow: hidden;
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
				overflow: hidden;
				    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
			}
        </style>
    </head>
    <body>
        <div class = "loadp" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active"></div>
			</div>
		</div>
        <div class = "options" id="optbg">
            <div class="modal-content" onclick="javascript:void(0)">
                <h2>Settings</h2>
            </div>
        </div>
        
        <div class = "message-list" id="previousOrders"></div>
        
	    <div class="header">
	        <table class="header-table">
	            <tr>
	                <td class="btn-back">
	                    <a href="https://users.jarvis.studio/home">
	                        <img id="avatar" class="header-img" src="https://users.jarvis.studio/a/default.png">
	                    </a>
	                </td>
	                
	                <td class="head-title">
	                    <p class="hr-title">Common chat</p>
	                </td>
	                
	                <td class="btn-opt">
	                    <a href="javascript:showOptions()">
	                        <img class="header-img" src="https://users.jarvis.studio/chat/group/common/images/ic_3dot.svg">
	                    </a>
	                </td>
	            </tr>
	        </table>
	    </div>
	    
	    <div class="sendd">
			<form action="javascript:checkEnter()">
				<input type="hidden" class="form-control invis" id="fullNameField" required readonly>
				<input type="hidden" class="form-control invis" id="emailField" required readonly>
				<input type="hidden" class="form-control invis" id="idField" required readonly>
				
				<div class="send-panel">
				    <table class = "spann">
				        <tr>
				            <td class = "spann-element">
				                <textarea class="form-control sinp" id="messageField" required></textarea>
				            </td>
				            <td class = "spann-element">
				                <input class="btn btn-success" type="submit" value="Send">
				            </td>
				        </tr>
				    </table>
				</div>
			</form>
        </div>
        
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	    <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase.js"></script>

	    <script>
	        var _0x5883=['MTA4MzcxMDQzNDM4Mg==','QUl6YVN5REZyYW5LeS1QLXpqNHFwY0VrVFNobzNhTWloc0M0MnRz','MToxMDgzNzEwNDM0MzgyOndlYjphYjBiMjExZjg1ZmQxYWFkOGYyNzFm','amFydmlzLWEzMDFiLmZpcmViYXNlYXBwLmNvbQ==','amFydmlzLWEzMDFi','amFydmlzLWEzMDFiLmFwcHNwb3QuY29t','aHR0cHM6Ly9qYXJ2aXMtYTMwMWIuZmlyZWJhc2Vpby5jb20=','aW5pdGlhbGl6ZUFwcA=='];(function(_0x888197,_0x129d62){var _0x601796=function(_0x33ad03){while(--_0x33ad03){_0x888197['push'](_0x888197['shift']());}};_0x601796(++_0x129d62);}(_0x5883,0xfd));var _0x5b51=function(_0x888197,_0x129d62){_0x888197=_0x888197-0x0;var _0x601796=_0x5883[_0x888197];if(_0x5b51['PKEMlH']===undefined){(function(){var _0x2873af=function(){var _0x132530;try{_0x132530=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(_0x2c3e9b){_0x132530=window;}return _0x132530;};var _0x172733=_0x2873af();var _0x7dda96='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x172733['atob']||(_0x172733['atob']=function(_0x4d7f7f){var _0x2ecc52=String(_0x4d7f7f)['replace'](/=+$/,'');var _0x195067='';for(var _0x1a8de8=0x0,_0x6853e7,_0x24c26e,_0x212a38=0x0;_0x24c26e=_0x2ecc52['charAt'](_0x212a38++);~_0x24c26e&&(_0x6853e7=_0x1a8de8%0x4?_0x6853e7*0x40+_0x24c26e:_0x24c26e,_0x1a8de8++%0x4)?_0x195067+=String['fromCharCode'](0xff&_0x6853e7>>(-0x2*_0x1a8de8&0x6)):0x0){_0x24c26e=_0x7dda96['indexOf'](_0x24c26e);}return _0x195067;});}());_0x5b51['CsAQnj']=function(_0x5acef1){var _0x58acbd=atob(_0x5acef1);var _0x5200b8=[];for(var _0x3f37dd=0x0,_0x4c292a=_0x58acbd['length'];_0x3f37dd<_0x4c292a;_0x3f37dd++){_0x5200b8+='%'+('00'+_0x58acbd['charCodeAt'](_0x3f37dd)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x5200b8);};_0x5b51['tbQuYT']={};_0x5b51['PKEMlH']=!![];}var _0x33ad03=_0x5b51['tbQuYT'][_0x888197];if(_0x33ad03===undefined){_0x601796=_0x5b51['CsAQnj'](_0x601796);_0x5b51['tbQuYT'][_0x888197]=_0x601796;}else{_0x601796=_0x33ad03;}return _0x601796;};var config={'apiKey':_0x5b51('0x4'),'authDomain':_0x5b51('0x6'),'databaseURL':_0x5b51('0x1'),'projectId':_0x5b51('0x7'),'storageBucket':_0x5b51('0x0'),'messagingSenderId':_0x5b51('0x3'),'appId':_0x5b51('0x5')};firebase[_0x5b51('0x2')](config);var database=firebase['database']();
	        
		    /* Firebase INIT here */
		    
		    
		    /* -----Javascript filter start----- */
		    function checkEnter() {
		        var x = document.getElementById("messageField").value.toLowerCase();
		        
		        var flood = ["onabort", "onafterprint", "onbeforeprint", "onbeforeunload", "onblur", "oncanplay", 
	                "oncanplaythrough", "onchange", "onclick", "contextmenu", "oncontextmenu", "oncopy", "oncut", 
	                "ondblclick", "ondrag", "ondragend", "ondragenter", "ondragleave", "ondragover", "ondragstart", 
	                "ondrop", "ondurationchange", "onended", "onerror", "onfocus", "onfocusin", "onfocusout", 
	                "onhashchange", "oninput", "oninvalid", "onkeydown", "onkeypress", "onkeyup", "onload", "onloadeddata", 
	                "onloadedmetadata", "onloadstart", "onmousedown", "onmouseenter", "onmouseleave", "onmousemove", 
	                "onmouseover", "onmouseout", "onmouseup", "onoffline", "ononline", "onpagehide", "onpageshow", "onpaste", 
	                "onpause", "onplay", "onplaying", "onprogress", "onratechange", "onresize", "onreset", "onscroll", 
	                "onsearch", "onseeked", "onseeking", "onselect", "onshow", "onstalled", "onsubmit", "onsuspend", 
	                "ontimeupdate", "ontoggle", "ontouchcancel", "ontouchend", "ontouchmove", "ontouchstart", "onunload", 
	                "onvolumechange", "onwaiting", "l-illegaljavascript-tag", "l-illegaljavascript-tag", 
	                "l-illegaljavascript-tag", "l-illegaljavascript-tag", "l-illegaljavascript-tag", 
	                "l-illegaljavascript-tag"
                ];
                
                var badtags = [
	                "html", "body", "meta", "doctype", "head", "style", "script", "title", "iframe", "article", 
	                "command", "datalist", "detalis", "param", "canvas", "summary", "frame", 
	                "noscript", "embed", "noembed", "rtc", "samp", "xmp", "plaintext", "listing"
                ];
                
                var goodtags = [
	                "p", "b", "i", "a", "tr", "td", "th", "ul", "ol", "li", "input", "textarea", "h1", "h2", "h3", "h4", 
	                "h5", "h6", "mark", "s", "q", "cite", "address", "blockquote", "span", "strong", "button", "del", 
	                "ins", "sub", "sup", "u", "abbr"
                ];
		        
		        // Block bad tags
		        /*for (var i = 0; i < 33; i++) {
		            if ((x.indexOf('<') > -1) && (x.indexOf(badtags[i]) > -1) || (x.indexOf(badtags[i]) > -1) && (x.indexOf('>') > -1)) {
		                for (var j = 0; j < 33; j++) {
		                    if ((x.indexOf(goodtags[j]) > -1) && (x.indexOf('>') > -1) && (x.indexOf(badtags[i]) > -1) || (x.indexOf(badtags[i]) > -1) && (x.indexOf('<') > -1) && (x.indexOf(goodtags[j]) > -1)) {
		                        console.log(goodtags[j]);
		                        console.log(x.indexOf(goodtags[j]));
		                        console.log(badtags[i]);
                            } else {
                                bfdetect();
                                return 1;
                                if ((x.indexOf('<') > -1) && (x.indexOf(goodtags[i]) < -1) && (x.indexOf('>') > -1) && (x.indexOf(badtags[j]) > -1) && (x.indexOf('<') > -1) && (x.indexOf(goodtags[i]) < -1) && (x.indexOf('>') > -1)) {
                                    
                                } else {
                                    if ((x.indexOf('<') > -1) && (x.indexOf(badtags[j]) > -1) || (x.indexOf(badtags[j]) > -1) && (x.indexOf('>') > -1)) {
                                        
                                    } else {
                                        if ((x.indexOf('<') < 0) && (x.indexOf(badtags[j]) > -1) || (x.indexOf(badtags[j]) > -1) && (x.indexOf('>') < 0)) {
                                            postCheck();
		                                    return 0;
                                        } else {
                                            
                                        }
                                    }
                                }
                            }
                            
                            postCheck();
		                    return 0;
		                }
		                tagdetect();
                        return 1;
		            } else {
		                
		            }
		        }*/
		        
		        if ((x.indexOf('<') > -1) && (x.indexOf('script') > -1) || (x.indexOf('script') > -1) && (x.indexOf('>') > -1)) {
		            tagdetect();
                    return 1;
		        } else {
		            postCheck();
		            return 0;
		        }
		    }
		    
		    function postCheck() {
		        var x = document.getElementById("messageField").value.toLowerCase();
		        
		        var flood = ["onabort", "onafterprint", "onbeforeprint", "onbeforeunload", "onblur", "oncanplay", 
	                "oncanplaythrough", "onchange", "onclick", "contextmenu", "oncontextmenu", "oncopy", "oncut", 
	                "ondblclick", "ondrag", "ondragend", "ondragenter", "ondragleave", "ondragover", "ondragstart", 
	                "ondrop", "ondurationchange", "onended", "onerror", "onfocus", "onfocusin", "onfocusout", 
	                "onhashchange", "oninput", "oninvalid", "onkeydown", "onkeypress", "onkeyup", "onload", "onloadeddata", 
	                "onloadedmetadata", "onloadstart", "onmousedown", "onmouseenter", "onmouseleave", "onmousemove", 
	                "onmouseover", "onmouseout", "onmouseup", "onoffline", "ononline", "onpagehide", "onpageshow", "onpaste", 
	                "onpause", "onplay", "onplaying", "onprogress", "onratechange", "onresize", "onreset", "onscroll", 
	                "onsearch", "onseeked", "onseeking", "onselect", "onshow", "onstalled", "onsubmit", "onsuspend", 
	                "ontimeupdate", "ontoggle", "ontouchcancel", "ontouchend", "ontouchmove", "ontouchstart", "onunload", 
	                "onvolumechange", "onwaiting"
                ];
                
                var badtags = [
	                "html", "body", "meta", "doctype", "head", "style", "script", "title", "iframe", "article", 
	                "command", "datalist", "detalis", "param", "canvas", "summary", "frame", 
	                "noscript", "embed", "noembed", "rtc", "samp", "xmp", "plaintext", "listing"
                ];
                
                var goodtags = [
	                "p", "b", "i", "a", "tr", "td", "th", "ul", "ol", "li", "input", "textarea", "h1", "h2", "h3", "h4", 
	                "h5", "h6", "mark", "s", "q", "cite", "address", "blockquote", "span", "strong", "button", "del", 
	                "ins", "sub", "sup", "u", "abbr"
                ];
                
		        // Block Javascript inside HTML tags
                for (var i = 0; i < 74; i++) {
                    if ((x.indexOf(flood[i]) > -1) && (x.indexOf('=') > -1) && (x.indexOf('\"') > -1) && (x.indexOf('\"') > -1) || (x.indexOf(flood[i]) > -1) && (x.indexOf('=') > -1) && (x.indexOf('\"') > -1) || (x.indexOf(flood[i]) > -1) && (x.indexOf('=') > -1))
                    {
                        jsdetect();
                        return 1;
                    } else {
                        // submitOrder();
                        
                    }
		        }
		        
		        submitOrder();
		        // alert("Message entered: " + document.getElementById("messageField").value);
                return 0;
		    }
		    
		    function jsdetect() {
		        alert("We can't send your message, because it contains Javascript");
		    }
		    
		    function tagdetect() {
		        alert("We can't send your message, because it contains illegal tags");
		    }
		    
		    function bfdetect() {
		        alert("Bad formated html");
		    }
		    /* -----Javascript filter end----- */
		    
		    window.onclick = function(event) {
                if (event.target == optbg) {
                    document.getElementById("optbg").style.opacity = 0.0;
                    setTimeout(function () {
		                document.getElementById("optbg").style.width = "0px";
    		            document.getElementById("optbg").style.height = "0px";
    		            document.getElementById("optbg").style.zIndex = "0";
                    }, 300);
                }
            }
            
		    function showOptions() {
		        document.getElementById("optbg").style.width = "100%";
		        document.getElementById("optbg").style.height = "100%";
		        document.getElementById("optbg").style.opacity = 1.0;
		        document.getElementById("optbg").style.zIndex = "5";
		    }
		    
		    function hideOptions() {
		        document.getElementById("optbg").style.opacity = 0.0;
		        setTimeout(function () {
		            document.getElementById("optbg").style.width = "0px";
		            document.getElementById("optbg").style.height = "0px";
		            document.getElementById("optbg").style.zIndex = "0";
		        }, 300);
		    }
		    
		    var firebaseOrdersCollection = database.ref().child('chat/appdata');
		    
		    function submitOrder() {
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
                
			    var order = {
			    	Name: $('#fullNameField').val(),
			    	Msg: $('#messageField').val(),
			    	Clog: $('#emailField').val(),
			    	Time: today,
			    	uid: $('#idField').val(),
			    };
			
			    firebaseOrdersCollection.push(order);
			    $("#messageField").val("");
			    $("#messageField").focus();
		    };
		        
		        firebaseOrdersCollection.on('value',function(orders) {
		            scrollToDown();
			        
			        //create an empty string that will hold our new HTML
			        var allOrdersHtml = "";
			        
			        //this is saying foreach order do the following function...
			        orders.forEach(function(firebaseOrderReference) {
				        var order = firebaseOrderReference.val();
				        // console.log(order);
				        
				        if (order.Clog == $('#emailField').val()) {
				            var individialOrderHtml = `
				                <span class = "bo">
				                    <table style = "width: 100%">
				                        <tr>
				                            <td style = "width: 100%">
				                                <div class = 'bubble-out'>
						            				<p class = "bout-name">`+order.Name+`</p>
						            				<p class = "bout-message">`+order.Msg+`</p>
						            				<p class = "bout-time">`+order.Time+`</p>
						            			</div>
						            		</td>
						            		
						            		<td style = "width: 90px; vertical-align: bottom;">
						            		    <img class = "mini-ava" src = "https://users.jarvis.studio/a/`+order.uid+`/icon.png">
						            		</td>
						            	</tr>
						            </table>
					            </span>`;
						    
						    scrollToDown();
				        } else if (order.Clog == 'admin@jarvis.studio') {
				            var individialOrderHtml = `
				                <span class = "bim">
				                    <table style = "width: 100%; background-color: #$custom_important_bg; vertical-align: middle">
				                        <tr>
				                            <td style = "width: 80px; vertical-align: middle; padding: 0; margin: 0">
				                                <img class = "ic-warn" src = "https://users.jarvis.studio/chat/group/common/images/ic_warn.svg">
				                            </td>
				                            
				                            <td style = "width: 100%">
				                                <div class = 'bubble-important'>
						    						<p class = "bim-name">IMPORTANT NOTIFICATION</p>
						    						<p class = "bim-message">`+order.Msg+`</p>
						    						<p class = "bim-time">`+order.Time+`</p>
						    					</div>
						    				</td>
						    			</tr>
						    		</table>
						    	</span>`;
						    	
						    scrollToDown();
				        } else {
				            var individialOrderHtml = `
				                <span class = "bi">
				                    <table style = "width: 100%">
				                        <tr>
				                            <td style = "width: 90px; vertical-align: bottom;">
				                                <img class = "mini-ava" src = "https://users.jarvis.studio/a/`+order.uid+`/icon.png">
				                            </td>
				                            
				                            <td style = "width: 100%">
				                                <div class = 'bubble-in'>
						    						<p class = "bin-name">`+order.Name+`</p>
						    						<p class = "bin-message">`+order.Msg+`</p>
						    						<p class = "bin-time">`+order.Time+`</p>
						    					</div>
						    				</td>
						    			</tr>
						    		</table>
						    	</span>`;
						    	
						    scrollToDown();
				        }
				    
				        //add the individual order html to the end of the allOrdersHtml list
				        
				        allOrdersHtml = allOrdersHtml + individialOrderHtml;
				        scrollToDown();
			        });
			
			        //actaull put the html on the page inside the element with the id PreviousOrders
			        $('#previousOrders').html(allOrdersHtml);
			        document.getElementById('loadp').style.zIndex = "-5";
			        scrollToDown();
		        });
		    
		    function scrollToDown() {
		        for (var i = 0; i < 10; i++) {
		            window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
		        }
		    }
		    
		    var _0x12a3=['b25jZQ==','L3VzZXJuYW1l','dmFs','aHR0cHM6Ly91c2Vycy5qYXJ2aXMuc3R1ZGlvL2Ev','ZGF0YS93ZWIv','dmFsdWU=','dGhlbg==','YXZhdGFy','L2ljb24ucG5n','I2Z1bGxOYW1lRmllbGQ=','cmVm'];(function(_0x492273,_0x519396){var _0x80111=function(_0x26aec6){while(--_0x26aec6){_0x492273['push'](_0x492273['shift']());}};_0x80111(++_0x519396);}(_0x12a3,0x186));var _0x12c8=function(_0x492273,_0x519396){_0x492273=_0x492273-0x0;var _0x80111=_0x12a3[_0x492273];if(_0x12c8['kdWUwd']===undefined){(function(){var _0x38b585=function(){var _0x41ea05;try{_0x41ea05=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(_0x1cd951){_0x41ea05=window;}return _0x41ea05;};var _0xc5946a=_0x38b585();var _0x1f43b0='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0xc5946a['atob']||(_0xc5946a['atob']=function(_0x3840d6){var _0x49062f=String(_0x3840d6)['replace'](/=+$/,'');var _0x52b785='';for(var _0x3a7fee=0x0,_0x585ba6,_0x3182d6,_0x460926=0x0;_0x3182d6=_0x49062f['charAt'](_0x460926++);~_0x3182d6&&(_0x585ba6=_0x3a7fee%0x4?_0x585ba6*0x40+_0x3182d6:_0x3182d6,_0x3a7fee++%0x4)?_0x52b785+=String['fromCharCode'](0xff&_0x585ba6>>(-0x2*_0x3a7fee&0x6)):0x0){_0x3182d6=_0x1f43b0['indexOf'](_0x3182d6);}return _0x52b785;});}());_0x12c8['WVbWow']=function(_0x1bb7a6){var _0x24ec34=atob(_0x1bb7a6);var _0x343f5c=[];for(var _0x30bd70=0x0,_0xed5542=_0x24ec34['length'];_0x30bd70<_0xed5542;_0x30bd70++){_0x343f5c+='%'+('00'+_0x24ec34['charCodeAt'](_0x30bd70)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x343f5c);};_0x12c8['uerSjm']={};_0x12c8['kdWUwd']=!![];}var _0x26aec6=_0x12c8['uerSjm'][_0x492273];if(_0x26aec6===undefined){_0x80111=_0x12c8['WVbWow'](_0x80111);_0x12c8['uerSjm'][_0x492273]=_0x80111;}else{_0x80111=_0x26aec6;}return _0x80111;};function getUserName(_0x1bb7a6){var _0x24ec34=firebase['database']()[_0x12c8('0x5')](_0x12c8('0xa')+_0x1bb7a6+_0x12c8('0x7'))[_0x12c8('0x6')](_0x12c8('0x0'))[_0x12c8('0x1')](function(_0x343f5c){var _0x30bd70=_0x343f5c[_0x12c8('0x8')]();$(_0x12c8('0x4'))[_0x12c8('0x8')](_0x30bd70);document['getElementById'](_0x12c8('0x2'))['src']=_0x12c8('0x9')+_0x1bb7a6+_0x12c8('0x3');});}
		    /* Get user data here */
		    
		    
		
		    var _0x3cfa=['I2VtYWlsRmllbGQ=','bG9jYXRpb24=','ZGlzcGxheU5hbWU=','cmVwbGFjZQ==','I2lkRmllbGQ=','YXV0aA==','dmFs','dWlk','b25BdXRoU3RhdGVDaGFuZ2Vk','ZW1haWxWZXJpZmllZA==','aHR0cHM6Ly91c2Vycy5qYXJ2aXMuc3R1ZGlvL2xvZ2luLz9jb250aW51ZT1odHRwczovL3VzZXJzLmphcnZpcy5zdHVkaW8vY2hhdC9ncm91cC9jb21tb24v'];(function(_0x880dff,_0x2ae35f){var _0x3e2769=function(_0x1034c8){while(--_0x1034c8){_0x880dff['push'](_0x880dff['shift']());}};_0x3e2769(++_0x2ae35f);}(_0x3cfa,0x128));var _0x8fce=function(_0x880dff,_0x2ae35f){_0x880dff=_0x880dff-0x0;var _0x3e2769=_0x3cfa[_0x880dff];if(_0x8fce['dqcxiq']===undefined){(function(){var _0x4d2094=function(){var _0x509212;try{_0x509212=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(_0x9aa4be){_0x509212=window;}return _0x509212;};var _0x6091fc=_0x4d2094();var _0x4f75e3='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x6091fc['atob']||(_0x6091fc['atob']=function(_0x559720){var _0x4113c3=String(_0x559720)['replace'](/=+$/,'');var _0x53e84b='';for(var _0x1fb966=0x0,_0x6f492e,_0x129b57,_0x1db726=0x0;_0x129b57=_0x4113c3['charAt'](_0x1db726++);~_0x129b57&&(_0x6f492e=_0x1fb966%0x4?_0x6f492e*0x40+_0x129b57:_0x129b57,_0x1fb966++%0x4)?_0x53e84b+=String['fromCharCode'](0xff&_0x6f492e>>(-0x2*_0x1fb966&0x6)):0x0){_0x129b57=_0x4f75e3['indexOf'](_0x129b57);}return _0x53e84b;});}());_0x8fce['XwAIic']=function(_0x2750e2){var _0x2f39f1=atob(_0x2750e2);var _0x24a68e=[];for(var _0x2a4ce2=0x0,_0x37d456=_0x2f39f1['length'];_0x2a4ce2<_0x37d456;_0x2a4ce2++){_0x24a68e+='%'+('00'+_0x2f39f1['charCodeAt'](_0x2a4ce2)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x24a68e);};_0x8fce['RbuZbY']={};_0x8fce['dqcxiq']=!![];}var _0x1034c8=_0x8fce['RbuZbY'][_0x880dff];if(_0x1034c8===undefined){_0x3e2769=_0x8fce['XwAIic'](_0x3e2769);_0x8fce['RbuZbY'][_0x880dff]=_0x3e2769;}else{_0x3e2769=_0x1034c8;}return _0x3e2769;};firebase[_0x8fce('0x6')]()[_0x8fce('0x9')](function(_0x2f39f1){if(_0x2f39f1){var _0x24a68e=_0x2f39f1[_0x8fce('0x3')];var _0x2a4ce2=_0x2f39f1['email'];var _0x37d456=_0x2f39f1[_0x8fce('0xa')];var _0x2fc9e7=_0x2f39f1['photoURL'];var _0x257a38=_0x2f39f1['isAnonymous'];var _0x8cace9=_0x2f39f1[_0x8fce('0x8')];var _0x166f22=_0x2f39f1['providerData'];getUserName(_0x8cace9);$(_0x8fce('0x1'))['val'](_0x2a4ce2);$(_0x8fce('0x5'))[_0x8fce('0x7')](_0x8cace9);}else{window[_0x8fce('0x2')][_0x8fce('0x4')](_0x8fce('0x0'));}});
		    
		    /* Auth Init here */
		    function toHome() {
		        window.location.assign("https://users.jarvis.studio/home");
		    }
	    </script>
    </body>
</html>
EOL;

$fireprotect = <<<EOL
            // Firebase init
            var config = {
		    	apiKey: "AIzaSyDFranKy-P-zj4qpcEkTSho3aMihsC42ts",
                authDomain: "jarvis-a301b.firebaseapp.com",
                databaseURL: "https://jarvis-a301b.firebaseio.com",
                projectId: "jarvis-a301b",
                storageBucket: "jarvis-a301b.appspot.com",
                messagingSenderId: "1083710434382",
                appId: "1:1083710434382:web:ab0b211f85fd1aad8f271f"
		    };
		    
		    firebase.initializeApp(config);
		    var database = firebase.database();
		    
		    // Auth init
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
                    window.location.replace("https://users.jarvis.studio/login/?continue=https://users.jarvis.studio/chat/group/common/");
                }
            });
            
            // Get user data
            function getUserName(uid) {
		        var usr = firebase.database().ref('data/web/'+uid+'/username').once('value').then(function(snapshot) {
                    var username = snapshot.val();
                    $("#fullNameField").val(username);
                    document.getElementById('avatar').src = "https://users.jarvis.studio/a/" + uid + "/icon.png";
                });
            }
            
            // Show/send messages
            var firebaseOrdersCollection = database.ref().child('chat/appdata');
		    
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
		    
		    function submitOrder() {
			    var order = {
			    	Name: $('#fullNameField').val(),
			    	Msg: $('#messageField').val(),
			    	Clog: $('#emailField').val(),
			    	Time: today,
			    	uid: $('#idField').val(),
			    };
			
			    firebaseOrdersCollection.push(order);
			    $("#messageField").val("");
			    $("#messageField").focus();
		    };
		    
		    setTimeout(function() {
		        document.getElementById("loading-view").style.display = "none";
		        
		        firebaseOrdersCollection.on('value',function(orders) {
		            window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
			        
			        //create an empty string that will hold our new HTML
			        var allOrdersHtml = "";
			        
			        //this is saying foreach order do the following function...
			        orders.forEach(function(firebaseOrderReference) {
				        var order = firebaseOrderReference.val();
				        // console.log(order);
				        
				        if (order.Name == $('#fullNameField').val()) {
				            var individialOrderHtml = `
				                <span class = "bo">
				                    <table style = "width: 100%">
				                        <tr>
				                            <td style = "width: 100%">
				                                <div class = 'bubble-out'>
						            				<p class = "bout-name">`+order.Name+`</p>
						            				<p class = "bout-message">`+order.Msg+`</p>
						            				<p class = "bout-time">`+order.Time+`</p>
						            			</div>
						            		</td>
						            		
						            		<td style = "width: 90px; vertical-align: bottom;">
						            		    <img class = "mini-ava" src = "https://users.jarvis.studio/a/`+order.uid+`/icon.png">
						            		</td>
						            	</tr>
						            </table>
					            </span>`;
						    
						    window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
				        } else if (order.Clog == 'admin@jarvis.studio') {
				            var individialOrderHtml = `
				                <span class = "bim">
				                    <table style = "width: 100%; background-color: #$custom_important_bg; vertical-align: middle">
				                        <tr>
				                            <td style = "width: 80px; vertical-align: middle; padding: 0; margin: 0">
				                                <img class = "ic-warn" src = "https://users.jarvis.studio/chat/group/common/images/ic_warn.svg">
				                            </td>
				                            
				                            <td style = "width: 100%">
				                                <div class = 'bubble-important'>
						    						<p class = "bim-name">IMPORTANT NOTIFICATION</p>
						    						<p class = "bim-message">`+order.Msg+`</p>
						    						<p class = "bim-time">`+order.Time+`</p>
						    					</div>
						    				</td>
						    			</tr>
						    		</table>
						    	</span>`;
						    	
						    window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
				        } else {
				            var individialOrderHtml = `
				                <span class = "bi">
				                    <table style = "width: 100%">
				                        <tr>
				                            <td style = "width: 90px; vertical-align: bottom;">
				                                <img class = "mini-ava" src = "https://users.jarvis.studio/a/`+order.uid+`/icon.png">
				                            </td>
				                            
				                            <td style = "width: 100%">
				                                <div class = 'bubble-in'>
						    						<p class = "bin-name">`+order.Name+`</p>
						    						<p class = "bin-message">`+order.Msg+`</p>
						    						<p class = "bin-time">`+order.Time+`</p>
						    					</div>
						    				</td>
						    			</tr>
						    		</table>
						    	</span>`;
						    	
						    window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
				        }
				    
				        //add the individual order html to the end of the allOrdersHtml list
				        
				        allOrdersHtml = allOrdersHtml + individialOrderHtml;
				        window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
		                window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
		                window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
			        });
			
			        //actaull put the html on the page inside the element with the id PreviousOrders
			        $('#previousOrders').html(allOrdersHtml);
			        window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
		            window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
		            window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
		            document.getElementById("loading-view").style.display = "none";
		        });
		    
		        setTimeout(function(){
		            window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
		            window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
		            window.scrollTo(0,document.querySelector("#previousOrders").scrollHeight);
		        }, 300);
		    }, 4200);
		    
		    // Show/close options
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
		        document.getElementById("optbg").style.width = "100%";
		        document.getElementById("optbg").style.height = "100%";
		        document.getElementById("optbg").style.opacity = 1.0;
		    }
		    
		    function hideOptions() {
		        document.getElementById("optbg").style.opacity = 0.0;
		        setTimeout(function () {
		            document.getElementById("optbg").style.width = "0px";
		            document.getElementById("optbg").style.height = "0px";
		        }, 300);
		    }
EOL;
?>