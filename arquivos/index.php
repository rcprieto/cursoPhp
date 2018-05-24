<?php

$name = "images";
$data = array();
if(!is_dir($name))
{
    mkdir($name);
    echo "Diretorio Criado com sucesso!";

}
else{
    //rmdir($name);//Apaga
    //echo "Diretorio já existe";

    $images = scandir($name);
    //echo json_encode($images);

    foreach($images as $img)
    {
        //Busca dentro de um array
        if(!in_array($img, array(".", "..")))
        {
            $filename = $name . DIRECTORY_SEPARATOR . $img;
            $fileInfo = pathinfo($filename);
            $fileInfo["size"] = filesize($filename)." bytes";
            $fileInfo["modified"] = date("d/m/Y H:i:s", filemtime($filename));
            $fileInfo["url"]="http://localhost/CursoPHP/arquivos/".str_replace("\\", "/", $filename);
            //var_dump($fileInfo);
            array_push($data, $fileInfo);
            

        }
    }

    echo json_encode($data);

}


?>