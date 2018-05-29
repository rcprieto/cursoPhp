<?php

$nome = "Rodrigo";

function retornaNome(){
global $nome; //pega a variavel que foi criada fora do escopo
  echo $nome;
}

retornaNome();

$a = 50;
$b = 35;

//se a maior 1, se iguais 0, se menor -1
var_dump($a <=> $b);



?>
