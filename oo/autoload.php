<?php

//Function __autoload substitui colocar o require_onde ou include para todas as classes
function __autoload($nomeClasse)
{
    require_once("classesAutoload/$nomeClasse.php");
}

$carro = new DelRey();
$carro->acelerar(150);

?>