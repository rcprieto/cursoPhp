<?php

class Pessoa
{
    public $nome;

    public function falar()
    {
        return "O meu nome é: " . $this->nome;
    }
}

$objeto = new Pessoa();
$objeto->nome = "Rodrigo";
echo $objeto->falar();


?>