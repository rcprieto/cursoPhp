<?php

if(!is_dir("docs"))
    mkdir("docs");

//w+ write create
//$arquivo = fopen("docs/log.txt", "w+"); //cria inicialmente o arquivo
//se já existe
$arquivo = fopen("docs/log.txt", "a+");

fwrite($arquivo, date("Y-m-d H:i:s") . "\r\n");
fclose($arquivo);

echo "Arquivo criado com sucesso";


?>