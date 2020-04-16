<?php
$value=$_GET['value'];
$background=$_GET['background'];
$background_highlight=$_GET['background-highlight'];
$text_color_highlight=$_GET['text-color-highlight'];
$ripple=$_GET['ripple'];
$text_color=$_GET['text-color'];
$width=$_GET['width'];
$height=$_GET['height'];
$command=$_GET['command'];
$border_radius=$_GET['border-radius'];
$font_size=$_GET['font-size'];
$margin=$_GET['margin'];
$duration=$_GET['duration'];
$hover_duration=$_GET['hover_duration'];
if($value==''){$value="Button";}
if($background==''){$background="323232";}
if($background_highlight==''){$background_highlight="424242";}
if($text_color_highlight==''){$text_color_highlight="ffffff";}
if($ripple==''){$ripple="rgba(255,255,255,0.3)";}
if($text_color==''){$text_color="cecece";}
if($width==''){$width="auto";}
if($height==''){$height="auto";}
if($command==''){$command="";}
if($border_radius==''){$border_radius="3px";}
if($font_size==''){$font_size="16px";}
if($margin==''){$margin="0px";}
if($duration==''){$duration="1200";}
if($hover_duration==''){$hover_duration="0.5s";}
echo <<<EOL
<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>jarvis-res-web-btn-mtrl</title>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="icon" type="image/png" href="/home/images/jarvis.png">
        <link rel="stylesheet" type="text/css" href="https://users.jarvis.studio/res/buttons/android-material/static/prims.css">
        <link rel="stylesheet" type="text/css" href="https://users.jarvis.studio/res/buttons/android-material/static/snarl.min.css">
        <link rel="stylesheet" type="text/css" href="https://users.jarvis.studio/res/buttons/android-material/static/waves.min.css?v=0.7.6">
        <link rel="stylesheet" type="text/css" href="https://users.jarvis.studio/res/buttons/android-material/static/style.css">
        <link rel="stylesheet" href="/res/buttons/android-material/css/gui.css">
        <style>
            .middle {
                width: 100vw;
                text-align: center;
            }
            
            .btn-large {
                border:none;margin: $margin;
                border-radius: $border_radius;
                font-size: $font_size;
                display: inline-block;
                height: 36px;
                line-height: 36px;
                padding: 0px;
                text-transform: none;
                vertical-align: middle;
                background-color: #$background;
                color: #$text_color;
                width:$width;height: $height;
                text-align: center;
                transition: $hover_duration;
                outline: none;
				box-shadow: 0px 4px 7px 0px rgba(0, 0, 0, 0.55);
                    -webkit-tap-highlight-color: transparent;
            }
            
            .waves-effect.waves-def .waves-ripple {
                background-color: $ripple;
            }
            
            .waves-effect .waves-ripple {
				width: 100px;
				height: 100px;
				margin-top: -50px;
				margin-left: -50px;
				opacity: 0;
				background: rgba(0, 255, 255, 0.1);
				background: radial-gradient($ripple 0, $ripple 40%, $ripple 50%, $ripple 60%, $ripple 90%);
			}
            
            .btn-large:active {
                background-color: #$background_highlight;
                color: #$text_color_highlight;
                cursor: default;
                box-shadow: 0px 6px 10px 0px rgba(0, 0, 0, 0.55);
            }
        </style>
    </head>
    <body>
        <div class = "middle">
            <button class=" btn-large">$value</button>
        </div>
        <script type="text/javascript" src="https://users.jarvis.studio/res/buttons/android-material/static/prims.js"></script>
        <script type="text/javascript" src="https://users.jarvis.studio/res/buttons/android-material/static/snarl.min.js"></script>
        <script type="text/javascript" src="https://users.jarvis.studio/res/buttons/android-material/static/waves.min.js?v=0.7.6"></script>
        <script type="text/javascript" src="https://users.jarvis.studio/res/buttons/android-material/static/jquery.js"></script>
        <script type="text/javascript">
			var config = {
				// How long Waves effect duration 
				// when it's clicked (in milliseconds)
				duration: $duration,

				// Delay showing Waves effect on touch
				// and hide the effect if user scrolls
				// (0 to disable delay) (in milliseconds)
				delay: 0
			};
                
			// Initialise Waves with the config
			Waves.init(config);
			Waves.attach('.btn-large');
			
			// Ripple with a 1s delay between starting
			// and stopping the ripple, centred at 
			// (20px, 20px) inside .box
			var options = {
				wait: 1000, //ms
				position: { // This position relative to HTML element.
					x: 20, //px
					y: 20  //px
				}
			};
			Waves.ripple('.box', options);
		</script>
    </body>
</html>
EOL;
?>