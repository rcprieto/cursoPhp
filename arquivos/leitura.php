<?php

$file = fopen("usuarios.csv", "r");


//pega linha por linha o fgets
$headers = explode(";", fgets($file));

$data = array();
while($row = fgets($file))
{
    $rowData = explode(";", $row);
    $linha = array();
    for($i = 0; $i < count($headers); $i++)
    {
        $linha[$headers[$i]] = $rowData[$i];
    }
    array_push($data, $rowData);
}

//print_r(json_encode($data));

fclose($file);


$arquivoNome = "images/teste.jpg";
$base64 = base64_encode(file_get_contents($arquivoNome));

$fileInfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileInfo->file($arquivoNome);

$base64encode = "data:".$mimetype.";base64,".$base64;
//echo $base64encode;

?>

<a href="<?=$base64encode?>" target="_blank">click aqui</a>