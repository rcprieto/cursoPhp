<?php

$image = imagecreatefromjpeg("teste.jpg");
$corTitulo = imagecolorallocate($image, 0, 0, 0);
$cinza = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0,  450, 150, $corTitulo, "Bevan-Regular.ttf", "TESTE FOTO");
imagettftext($image, 32, 0, 140, 150, $corTitulo, "Playball-Regular.ttf", "RODRIGO");
imagettftext($image, 32, 0, 350, 150, $corTitulo, "Bevan-Regular.ttf", "FELIPE");

header("Content-Type: image/jpeg");
imagejpeg($image);
//imagejpeg($image, "testeHoje.jpg", 20); //salva na pasta, e a qualidade menor
imagedestroy($image);




?>