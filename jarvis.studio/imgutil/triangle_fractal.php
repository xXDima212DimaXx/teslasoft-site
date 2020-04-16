<?php

$x = 16000;
$y = 16000;

$gd = imagecreatetruecolor($x, $y);
 
$corners[0] = array('x' => 8000, 'y' =>  100);
$corners[1] = array('x' =>   0, 'y' => 16000);
$corners[2] = array('x' => 16000, 'y' => 16000);

$red = imagecolorallocate($gd, 255, 255, 0); 

for ($i = 0; $i < 1000000; $i++) {
  imagesetpixel($gd, round($x),round($y), $red);
  $a = rand(0, 2);
  $x = ($x + $corners[$a]['x']) / 2;
  $y = ($y + $corners[$a]['y']) / 2;
}
 
header('Content-Type: image/png');
imagepng($gd);

?>