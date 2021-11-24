<?php 
session_start(); 
$text = 20; 
$_SESSION["vercode"] = $text; 
// $height = 25; 
// $width = 65;   
$image = imagecreate(70, 95); 
$black = imagecolorallocate($image, 0, 0, 0); 
$white = imagecolorallocate($image, 255, 255, 255); 
// $font_size = 14; 
imagestring($image, 14, 5, 5, $text, $white); 
imagejpeg($image, 80); 
?>


<!-- <?php
  //  $img = imagecreatetruecolor(600, 220);
  //  $bgcolor = imagecolorallocate($img, 20, 50, 120);
  //  imagefill($img, 0, 0, $bgcolor);
  //  header("Content-type: image/png");
  //  imagepng($img);
  //  imagedestroy($img);
?> -->