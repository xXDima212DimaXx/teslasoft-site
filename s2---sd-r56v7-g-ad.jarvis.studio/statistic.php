<?php
$id = $_GET['id'];
$file = './'.$id.'-mob-clicks.dat';
$fileds = './'.$id.'-desc-clicks.dat';
$mob_wide = './ad/mobile/'.$id.'-stats.dat';
$desc_wide = './ad/'.$id.'-stats.dat';
$mb = file_get_contents($file);
$ds = file_get_contents($fileds);
$dw = file_get_contents($desc_wide);
$mw = file_get_contents($mob_wide);
echo 'Total clicks on mobile devices: '.$mb;
echo '<br>';
echo 'Total clicks on desktops: '.$ds;
echo '<br>';
echo 'Total clicks: '.($ds+$mb);
echo '<br>';
echo 'Total wide ads displays on mobile devices: '.$mw;
echo '<br>';
echo 'Total wide ads displays on desktops: '.$dw;
echo '<br>';
echo 'Total wide ads displays: '.($dw+$mw);
?>