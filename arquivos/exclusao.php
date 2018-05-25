<?php

$file = fopen("usuarios.txt", "w+");

fclose($file);

unlink("usuarios.txt");

echo "Arquivo Removido com sucesso!";




?>