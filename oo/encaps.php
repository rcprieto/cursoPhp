<?php

class Pessoa
{
    public $nome = "Rodrigo Prieto";
    //So acessa quem está dentro da própria classe ou quem herda da classe
    protected $idade = 37;
    //O privado nem quem herda pode acessar, só a classe
    private $senha = "123456";

    public function verDados()
    {
        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha."<br>";
    }
}

$nPessoa = new Pessoa();
echo $nPessoa->nome."<br>";
//echo $nPessoa->idade."<br>"; //Não funcionaria
//echo $nPessoa->senha."<br>"; //Não funcionaria
$nPessoa->verDados();

?>