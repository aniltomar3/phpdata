<?php 
session_start();
$str= md5(microtime());

$str= substr($str,0,6);
$_SESSION['captcha']= $str;
$img= imagecreate(100,50);
imagecolorallocate($img, 255, 0, 255);
$textColor= imagecolorallocate($img, 0, 0, 0);

 imagestring($img,28,20,15,$str,$textColor);

 header('Content-Type:image/jpeg');
 imagejpeg($img);
 //imagedestroy($img);