<?php
function ola()
{
    $teste = 1;
    return "Olá Mundo!";
    $teste = 2;
}

function olaPar($texto = "Valor Padrão")
{
    return "<br/>Olá " . $texto;
}

echo ola();
$frase = ola();
echo "<br>" . strlen($frase);

echo olaPar("Rodrigo<br>");
var_dump($frase);
//echo  phpinfo();


?>