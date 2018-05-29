<?php
$image = imagecreatefromjpeg("teste.jpg");
$corTitulo = imagecolorallocate($image, 0, 0, 0);
$cinza = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "TESTE FOTO", $corTitulo);
imagestring($image, 5, 440, 150, "RODRIGO", $corTitulo);
imagestring($image, 5, 350, 150, "FELIPE", $corTitulo);

header("Content-Type: image/jpeg");
imagejpeg($image);
//imagejpeg($image, "testeHoje.jpg", 20); //salva na pasta, e a qualidade menor
imagedestroy($image);





?>