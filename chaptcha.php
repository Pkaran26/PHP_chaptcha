<?php
header('Content-type: image/jpeg');

$back = array("img/back1.jpg", "img/back2.jpg");
$font = "font/f1.ttf";
$char = $_GET['char'];
$char = explode(",", $char);

$b_rand = array_rand($back);
$back_img = $back[$b_rand];

$jpg_image = imagecreatefromjpeg($back_img);
$white = imagecolorallocate($jpg_image, 255, 255, 255);

for($i=0,$j=45;$i<6;$i++,$j+=30){
  imagettftext($jpg_image, 25, 0, $j, 50, $white, $font, $char[$i]);
}

imagejpeg($jpg_image);
imagedestroy($jpg_image);
?>