<?

$app = <<<EOL
<!DOCTYPE html>
<html>
    <head>
        <title>com.teslasoft.jarvis.core.Init.UUIDGenService</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content="width=device-width, user-scalable=no">
        <meta name = "theme-color" content = "#121212"/>
        <link rel = "icon" type = "image/png" href = "https://jarvis.studio/res/images/jarvis.png">
        <style>
            html, body {
                padding: 0;
                margin: 0;
                background-color: #212121;
                color: #cecece;
            }
            
            p {
                padding: 0;
                margin: 0;
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <p id = "uuid"></p>
        <script>
            document.addEventListener('contextmenu', event => event.preventDefault());
            
            function uuidv4() {
                return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                    var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
                    return v.toString(16);
                });
            }
    
            var gen = uuidv4();
            
            document.getElementById("uuid").innerHTML = gen;
        </script>
    </body>
</html>
EOL;

echo $app;
?>