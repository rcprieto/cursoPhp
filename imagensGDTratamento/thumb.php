<?php

header("Content-Type: image/jpeg");
$file = "teste.jpg";

$newWid = 50;
$newHei = 50;


// $data = getimagesize($file);
list($width, $height) = getimagesize($file);

$newImage = imagecreatetruecolor($newWid, $newHei);
$oldImage = imagecreatefromjpeg($file);

imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newWid, $newHei, $width, $height);
imagejpeg($newImage);
imagedestroy($newImage);
imagedestroy($oldImage);


?>