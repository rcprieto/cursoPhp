<?php
require_once "config.php";

$valores = Usuario()::getList();

$headers = array();

foreach ($valores[0] as $key => $values) {
    array_push($headers, ucfirst($key)); //ucfirst primeira maiuscula
}

$existe = false;
if (!file_exists("usuarios.csv")) {
    $file = fopen("usuarios.csv", "w+");

} else {
    $file = fopen("usuarios.csv", "a+");
    $existe = true;
}

if (!$existe) {
    fwrite($file, implode(";", $headers) . "\r\n");
}

foreach ($valores as $usuario) {

    $data = array();
    foreach ($usuario as $key => $value) {
        array_push($data, $value);
    }

    fwrite($file, implode(";", $data) . "\r\n");

}

fclose($file);
echo "Finalizado com Sucesso!";
