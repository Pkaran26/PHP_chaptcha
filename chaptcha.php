<?php
header('Content-type: image/jpeg');

$back = array("img/back1.jpg", "img/back2.jpg");
$font = array("font/f1.ttf", "font/f2.ttf", "font/f3.ttf", "font/f4.ttf");
$char = $_GET['char'];
$char = explode(",", $char);

$b_rand = array_rand($back);
$back_img = $back[$b_rand];

$fIndex = array();
for($i=0;$i<6;$i++){
  array_push($fIndex, array_rand($font));
}

$jpg_image = imagecreatefromjpeg($back_img);
$white = imagecolorallocate($jpg_image, 255, 255, 255);

$chk = array();
for($i=0,$j=45;$i<6;$i++,$j+=30){
  imagettftext($jpg_image, 25, 0, $j, 50, $white, $font[$fIndex[$i]], $char[$i]);
}

imagejpeg($jpg_image);
imagedestroy($jpg_image);
?>