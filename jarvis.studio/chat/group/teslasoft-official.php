<?php
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

$application = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <title>The official Teslasoft group - Jarvis Chat</title>
        <meta charset = "utf-8">
        <meta name="google-site-verification" content="X9eiLiDwXWVlvPridgOtXE6ZePiHeRjQ1VoAs7DwOYo" />
        <meta name = "viewport" content="width=device-width, user-scalable=no">
        <meta name = "theme-color" content = "#121212">
        <link rel = "icon" type = "image/x-icon" href = "https://jarvis.studio/res/images/img?id=favicon">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/mdl/1.3.0/css/material.purple-red.min.css">
        <link rel = "stylesheet" href = "https://cdns.jarvis.studio/material/drawer/css/drawer-dark.css">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158890085-1"></script>
        <script async src='https://www.google-analytics.com/analytics.js'></script>
        <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
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
                padding: 0;
                margin: 0;
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
            
            .layout-main {
                width: 100vw;
                height: 100vh;
                overflow-y: scroll;
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
                    transition: 0.2s;
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
            
            ul.elem {
                    transition: 0.2s;
            }
            
            ul.elemm:active {
                background: rgba(0, 0, 0, 0.0);
                    transition: 0.2s;
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
            
            .main-card-wide.mdl-card {
                width: 90%;
                background-color: #323232;
                border-radius: 4px;
            }
            
            .main-card-wide > .mdl-card__title {
                color: #fff;
                height: 176px;
                backdrop-filter: blur(0px);
            }
            
            .mdl-card__supporting-text {
                background-color: #323232;
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
            
            #cookieConsent {
                background-color: rgba(20,20,20,0.8);
                min-height: 26px;
                font-size: 14px;
                color: #ccc;
                line-height: 26px;
                padding: 8px 0 8px 30px;
                font-family: "Trebuchet MS",Helvetica,sans-serif;
                position: fixed;
                bottom: -200;
                left: 0;
                right: 0;
                display: none;
                z-index: 9999;
            }
            
            #cookieConsent a {
                color: #4B8EE7;
                text-decoration: none;
            }
            
            #closeCookieConsent {
                float: right;
                display: inline-block;
                cursor: pointer;
                height: 20px;
                width: 20px;
                margin: -15px 0 0 0;
                font-weight: bold;
            }
            
            #closeCookieConsent:hover {
                color: #FFF;
            }
            
            #cookieConsent a.cookieConsentOK {
                background-color: #F1D600;
                color: #000;
                display: inline-block;
                border-radius: 5px;
                padding: 0 20px;
                cursor: pointer;
                float: right;
                margin: 0 60px 0 10px;
            }
            
            #cookieConsent a.cookieConsentOK:hover {
                background-color: #E0C91F;
            }
            
            .profile-icon2 {
                width: 72px;
                height: 72px;
                border-radius: 50%;
                border: none;
            }
            
            .avv {
                width: 72px;
                height: 72px;
                border-radius: 50%;
                background-color: rgba(50, 50, 50, 0.9);
                border: none;
            }
            
            .top-bar {
                position: fixed;
                width: 100vw;
                height: 56px;
                top: 0;
                left: 0;
                background-color: rgba(66, 66, 66, 0.6);
            }
            
            .bottom-bar {
                position: fixed;
                width: 100vw;
                height: 60px;
                bottom: 0;
                left: 0;
                background-color: #323232;
            }
            
            i.fab-icon {
                color: #ffffff;
            }
            
            .activity-title {
                position: fixed;
                font-size: 20px;
                color: #ffffff;
                left: 56px;
                top: 18px;
            }
            
            .unselective {
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    -o-user-select: none;
                    user-select: none;
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
                outline: none;
                border: none;
                    transition: 0.3s;
            }
            
            .sinp:focus {
                color: #212121;
                background-color: #fafafa;
                box-shadow: 0 0 0 3px rgba(219, 69, 55, 1);
            }
            
            .message-list {
                width: 90%;
                margin: auto;
                display: flex;
                margin-bottom: 110px;
                margin-top: 110px;
	            flex-direction: column;
	            justify-content: flex-end;
            }
            
            @media (min-width: 720px) {
                .message-list {
                    margin-top: 70px;
                }
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
                z-index: 10;
                padding: 0;
                left: 0;
                top: 0;
                width: 0;
                height: 0;
                overflow: hidden;
                background-color: rgb(0,0,0);
                background-color: rgba(0, 0, 0, 0.7);
                opacity: 0.0;
                backdrop-filter: blur(5px);
                    -webkit-transition: opacity 0.3s ease-in-out;
                    -moz-transition: opacity 0.3s ease-in-out;
                    -ms-transition: opacity 0.3s ease-in-out;
                    -o-transition: opacity 0.3s ease-in-out;
                    transition: opacity 0.3s ease-in-out;
            }
            
            .modal-content {
                background-color: rgba(128, 50, 55, 0.3);
                margin: auto;
                width: 100%;
                height: 100%;
            }
            
            .close {
                color: #ffffff;
                font-size: 28px;
                font-weight: bold;
                position: fixed;
                right: 0;
                top: 0;
                padding-top: 2px;
                text-align: center;
                background-color: rgba(255, 255, 255, 0.5);
                width: 28px;
                height: 26px;
                padding-left: 0;
                padding-right: 0;
                padding-bottom: 0;
                margin: 0;
            }

            .close:hover,
            .close:focus {
                color: #db4437;
                text-decoration: none;
                cursor: pointer;
            }
            
            h2.stitle {
                color: #fafafa;
                padding: 4px;
                text-align: center;
                width: 100%;
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
		<div class = "options" id="optbg">
            <div class="modal-content" onclick="javascript:void(0)">
                <p class = "close unselective" onclick = "javascript:hideOptions()">X</p>
                <h2 class = "stitle unselective">Settings</h2>
            </div>
        </div>
        <div class = "layout-main">
            <div class="drawer unselective" id="drawer">
                <div class="content">
                    <div style = "width: 100%; height: 150px; background-image: url(https://jarvis.studio/res/images/img?id=drawer_bg); background-size: 80%; background-position: center; background-repeat: no-repeat;">
                        <div style = "width: 100%; height: 150px" class = "header" id = "abg">
                            <div style = "padding: 16px; height: 90px">
                                <div class = "avv">
                                    <div class="profile-icon2" id = "avatar2"></div>
                                </div>
                            </div>
                            <div class="text" style = "height: 60px; background-image: url(https://jarvis.studio/res/images/img?id=drawer_shadow); background-position: center; background-repeat: no-repeat;">
                                <div class="field name" id = "dname"></div>
                                <div class="field info" id = "demail"></div>
                            </div>
                        </div>
                    </div>
                    <ul class="menus" style = "padding: 0; margin: 0; content: none; list-style: none;">
                        <li class = "elem" id = "chatlist">
                            <ul class = "elemm " style = "height: 56px; margin-left: -58px;" onclick = "javascript:toHome()">
                                <table class = "mdl-button mdl-js-button mdl-js-ripple-effect" style = "width: 97%; height: 100%; border-top-right-radius: 28px; border-bottom-right-radius: 28px;">
                                    <tr>
                                        <td style = "width: 48px; height: 48px; padding-top: 0px; margin-right: 4px;">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">home</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label" style = "padding-top: 2px;">Главная</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <ul class = "elemm " style = "height: 56px; margin-left: -58px;" onclick = "javascript:toLogin()">
                                <table class = "mdl-button mdl-js-button mdl-js-ripple-effect" style = "width: 97%; height: 100%; border-top-right-radius: 28px; border-bottom-right-radius: 28px;">
                                    <tr>
                                        <td style = "width: 48px; height: 48px; padding-top: 0px; margin-right: 4px;">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">account_circle</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label" style = "padding-top: 2px;" id = "isLogged"></p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <ul class = "elemm " style = "height: 56px; margin-left: -58px;" onclick = "javascript:toAccount()">
                                <table class = "mdl-button mdl-js-button mdl-js-ripple-effect" style = "width: 97%; height: 100%; border-top-right-radius: 28px; border-bottom-right-radius: 28px;">
                                    <tr>
                                        <td style = "width: 48px; height: 48px; padding-top: 0px; margin-right: 4px;">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">account_circle</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label" style = "padding-top: 2px;">Мой кабинет</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <hr style = "margin: 0; padding: 0; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                            <p style = "height: 16px; padding-left: 16px; padding-top: 15px; padding-bottom: 16px; font-size: 16px; line-height: 16px;">Settings</p>
                            <ul class = "elemm " style = "height: 56px; margin-left: -58px;" onclick = "javascript:showOptions()">
                                <table class = "mdl-button mdl-js-button mdl-js-ripple-effect" style = "width: 97%; height: 100%; border-top-right-radius: 28px; border-bottom-right-radius: 28px;">
                                    <tr>
                                        <td style = "width: 48px; height: 48px; padding-top: 0px; margin-right: 4px;">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">settings</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label" style = "padding-top: 2px;">General</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <ul class = "elemm " style = "height: 56px; margin-left: -58px;" onclick = "javascript:void(0)">
                                <table class = "mdl-button mdl-js-button mdl-js-ripple-effect" style = "width: 97%; height: 100%; border-top-right-radius: 28px; border-bottom-right-radius: 28px;">
                                    <tr>
                                        <td style = "width: 48px; height: 48px; padding-top: 0px; margin-right: 4px;">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">settings</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label" style = "padding-top: 2px;">Apperance</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <hr style = "margin: 0; padding: 0; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                            <p style = "height: 16px; padding-left: 16px; padding-top: 15px; padding-bottom: 16px; font-size: 16px; line-height: 16px;">Chats</p>
                            <ul class = "elemm " style = "height: 56px; margin-left: -58px;" onclick = "javascript:void(0)">
                                <table class = "mdl-button mdl-js-button mdl-js-ripple-effect" style = "width: 97%; height: 100%; border-top-right-radius: 28px; border-bottom-right-radius: 28px;">
                                    <tr>
                                        <td style = "width: 48px; height: 48px; padding-top: 0px; margin-right: 4px;">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">settings</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label" style = "padding-top: 2px;">Test function 1</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class = "message-list" id="previousOrders"></div>
            <div class = "top-bar">
                <div class="left-icon rx_icon mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" id="rx_icon"></div>
                <b class = "activity-title unselective">The official Teslasoft Group</b>
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
				                    <textarea class="form-control sinp " id="messageField" required></textarea>
				                </td>
				                <td class = "spann-element">
				                    <input class="btn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="Send">
				                </td>
				            </tr>
				        </table>
				    </div>
			    </form>
            </div>
        </div>
        <script src = "https://cdns.jarvis.studio/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase-auth.js"></script>
        <script src = "https://www.google.com/recaptcha/api.js"></script>
        <script src = "https://cdns.jarvis.studio/material/drawer/js/drawer.js"></script>
        <script>
            if(document.createStyleSheet) {
                document.createStyleSheet('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
                document.createStyleSheet('https://fonts.googleapis.com/icon?family=Material+Icons');
                document.createStyleSheet('https://jarvis.studio/css/main.css');
                document.createStyleSheet('https://jarvis.studio/css/theme-dark.css');
            } else {
                var styles = "@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap'); @import url('https://fonts.googleapis.com/icon?family=Material+Icons'); @import url('https://jarvis.studio/css/main.css'); @import url('https://jarvis.studio/css/theme-dark.css');";
                var newSS=document.createElement('link');
                newSS.rel='stylesheet';
                newSS.href='data:text/css,'+escape(styles);
                document.getElementsByTagName("head")[0].appendChild(newSS);
            }
            
            function toHome() {
		        window.location.assign("https://jarvis.studio");
		    }
		    
		    function toAccount() {
		        window.location.assign("https://jarvis.studio/home");
		    }
            
            document.addEventListener('contextmenu', event => event.preventDefault());
                
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
            
            function getUserData(uid) {
		        var usr = firebase.database().ref('data/web/'+uid+'/username').once('value').then(function(snapshot) {
                    var username = snapshot.val();
                    $("#fullNameField").val(username);
                    document.getElementById("dname").innerHTML = username;
                    //document.getElementById('avatar').src = "https://users.jarvis.studio/a/" + uid + "/icon.png";
                    //document.getElementById('background').style.background = "url(https://users.jarvis.studio/a/" + uid + "/background.png)";
                    //document.getElementById('background').style.backgroundSize = "100%";
                    //document.getElementById('background').style.backgroundPosition = "center";
                    document.getElementById('avatar2').style.background = "url(https://users.jarvis.studio/a/" + uid + "/icon.png)";
                    document.getElementById('avatar2').style.backgroundSize = "100%";
                    document.getElementById('avatar2').style.backgroundPosition = "center";
                    document.getElementById('abg').style.background = "url(https://users.jarvis.studio/a/" + uid + "/background.png)";
                    document.getElementById('abg').style.backgroundSize = "100%";
                    document.getElementById('abg').style.backgroundPosition = "center";
                    document.getElementById('loadp').style.zIndex = "-5";
                });
            }
            
            // Show/send messages
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
                    $("#emailField").val(email);
                    $("#idField").val(uid);
                    document.getElementById("demail").innerHTML = email;
                    getUserData(uid);
                    isLogged = 1;

                } else {
                    window.location.assign("https://jarvis.studio/login/oauth?continue=https://jarvis.studio/chat/group/teslasoft-official");
                    document.getElementById("isLogged").innerHTML = "Вход / Регистрация";
                    isLogged = 1;
                }
            });
            
            function toLogin() {
                if (isLogged == 1) {
		            signOut();
                } else {
                    window.location.assign("https://jarvis.studio/login/oauth?continue=https://jarvis.studio/home");
                }
		    }
		    
		    function signOut() {
                firebase.auth().signOut().then(function() {
                    // Sign-out successful.
                }).catch(function(error) {
                    // An error happened.
                });
                
                window.location.replace("https://jarvis.studio/login/oauth?continue=https://jarvis.studio/home");
            }
            
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
        </script>
    </body>
</html>
EOL;
echo $application;
?>