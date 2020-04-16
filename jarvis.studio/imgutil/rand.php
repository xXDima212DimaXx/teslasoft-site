<?php

    function generateCaptchaImage($text = 'good'){
        // Set the content-type
        header('Content-Type: image/png');
        $width  = 500;
        $height = 500;
        // Create the image
        $im = imagecreatetruecolor($width, $height);

        // Create some colors
        $red  = imagecolorallocate($im, 255, 0, 0);
        $green   = imagecolorallocate($im, 0, 255, 0);
        $blue  = imagecolorallocate($im, 0, 0, 255);
        //imagefilledrectangle($im, 0, 0, 399, 29, $white);

        //ADD NOISE - DRAW background squares
        $square_count = $width * $height*2;
        for($i = 0; $i < $square_count; $i++){
            $gamma_red_max = 255;
            $gamma_green_max = 255;
            $gamma_blue_max = 255;
            $gamma_red_min = 0;
            $gamma_green_min = 0;
            $gamma_blue_min = 0;
            $rcolor_red = rand($gamma_red_min, $gamma_red_max);
            $rcolor_green = rand($gamma_green_min, $gamma_green_max);
            $rcolor_blue = rand($gamma_blue_min, $gamma_blue_max);
            $color_red = 255;
            $color_green = 255;
            $color_blue = 255;
            $rcolor = rand(1, 3);
            /*if ($rcolor == 1) {
                $scolor = imagecolorallocate($im, $color_red, 0, 0);
            } elseif ($rcolor == 2) {
                $scolor = imagecolorallocate($im, $color_red, $color_green, 0);
            } else {
                $scolor = imagecolorallocate($im, $color_red, 0, $color_blue);
            }*/
            $scolor = imagecolorallocate($im, $rcolor_red, $rcolor_green, $rcolor_blue);
            $cx = rand(0,$width);
            $cy = /*(int)rand(0, $width/2)*/rand(0,$height);
            $h  = $cy + /*(int)rand(0, $height/5)*/0;
            $w  = $cx + /*(int)rand($width/3, $width)*/0;
            imagefilledrectangle($im, $cx, $cy, $w, $h, $scolor);
        }
        
        // for($i = 0; $i < $square_count; $i++){
        //     $cx = rand(0,$width);
        //     $cy = /*(int)rand(0, $width/2)*/rand(0,$height);
        //     $h  = $cy + /*(int)rand(0, $height/5)*/1;
        //     $w  = $cx + /*(int)rand($width/3, $width)*/1;
        //     imagefilledrectangle($im, $cx, $cy, $w, $h, $green);
        // }
        
        // for($i = 0; $i < $square_count; $i++){
        //     $cx = rand(0,$width);
        //     $cy = /*(int)rand(0, $width/2)*/rand(0,$height);
        //     $h  = $cy + /*(int)rand(0, $height/5)*/1;
        //     $w  = $cx + /*(int)rand($width/3, $width)*/1;
        //     imagefilledrectangle($im, $cx, $cy, $w, $h, $blue);
        // }

        //ADD NOISE - DRAW ELLIPSES
        /*$ellipse_count = 5;
        for ($i = 0; $i < $ellipse_count; $i++) {
          $cx = (int)rand(-1*($width/2), $width + ($width/2));
          $cy = (int)rand(-1*($height/2), $height + ($height/2));
          $h  = (int)rand($height/2, 2*$height);
          $w  = (int)rand($width/2, 2*$width);
          imageellipse($im, $cx, $cy, $w, $h, $green);
        }*/

        // Using imagepng() results in clearer text compared with imagejpeg()
        imagepng($im);
        imagedestroy($im);
    }
    generateCaptchaImage($randomString);
?>