<?php
$code_base64 = $row['content'];
$code_base64 = str_replace('data:image/jpeg;base64,','',$code_base64);
$code_binary = base64_decode($code_base64);
$image= imagecreatefromstring($code_binary);
header('Content-Type: image/jpeg');
imagejpeg($image);
imagedestroy($image);
?>