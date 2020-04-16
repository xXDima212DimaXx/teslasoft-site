<?php
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
        <title>
            AD Test
        </title>
        <meta charset = "utf-8">
        <style>
            body {
                width: 100%;
                height: 100%;
                text-align: center;
                padding-top: 0px;
                padding-left: 0px;
                padding-right: 0px;
                padding-bottom: 0px;
                margin: 0px;
                background-color: #cecece;
            }
            .name {
                font-size: 32px;
                font-family: sans-serif;
            }
            .text {
                font-size: 17px;
                font-family: sans-serif;
                font-style: bold;
            }
            .name::selection {
                color: #47347c; 
                background: ;
            }
            .text::selection {
                color: #77abce; 
                background: ;
            }
            .footer {
                position: fixed;
                bottom: 0%;
                width: 100%;
                height: 7%;
                background-color: #2d2d2d;
                text-align: center;
                    -webkit-transition: all 0.3s ease;;
                    -moz-transition: all 0.3s ease;;
                    -o-transition: all 0.3s ease;;
                    transition: all 0.3s ease;
            }
            .footer:hover {
                position: fixed;
                bottom: 0%;
                width: 100%;
                height: 7%;
                background-color: #6d6d6d;
                text-align: center;
                    -webkit-transition: all 0.3s ease;;
                    -moz-transition: all 0.3s ease;;
                    -o-transition: all 0.3s ease;;
                    transition: all 0.3s ease;
            }
            .content::selection {
                color: #47347c; 
                background: ;
            }
            a::selection {
                color: #47347c; 
                background: ;
            }
            .content {
                width: 100%;
                height: 100%;
                text-align: center;
                padding-top: 150px;
                padding-left: 0px;
                padding-right: 0px;
                padding-bottom: 0px;
                margin: 0px;
            }
            .copy {
                color: #ffffff;
                font-size: 15px;
                font-family: sans-serif;
                font-style: bold;
            }
            .copy::selection {
                color: #47347c; 
                background: ;
            }
            a {
                text-decoration: none;
                color: #35697c;
                    -webkit-transition: all 0.3s ease;;
                    -moz-transition: all 0.3s ease;;
                    -o-transition: all 0.3s ease;;
                    transition: all 0.3s ease;
            }
            a:hover {
                text-decoration: underline;
                color: #4a98b5;
                    -webkit-transition: all 0.3s ease;;
                    -moz-transition: all 0.3s ease;;
                    -o-transition: all 0.3s ease;;
                    transition: all 0.3s ease;
            }
        </style>
    </head>
    <body>
        <div class = "content">
            <h1 class = "name">
                Проверка работы рекламы
            </h1>
            <p class = "text">
                Мы проводим тестирование рекламной площадки. Если вы попали на эту страницу кликнув по рекламе, значит площадка работает нормально.
            </p>
            <a href = "https://jarvis.studio/">
                На главную страницу
            </a>
            <div class = "footer">
                <p class = "copy">© 2017-2019 Teslasoft</p>
            </div>
        </div>
    </body>
</html>
EOL;

echo $application;
}
?>