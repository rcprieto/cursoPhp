<?php

class Endereco
{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($_logradouro, $_numero, $_cidade){
        $this->logradouro = $_logradouro;
        $this->numero = $_numero;
        $this->cidade = $_cidade;

    }

    //Overrride do destruct
    public function __destruct()
    {
        var_dump("DESTRUIR");

    }

    //Override do echo
    public function __toString()
    {
        return $this->logradouro .", ". $this->numero .", ". $this->cidade;
    }

    
    public function getLogradouro()
    {
        return $this->logradouro;
    }


    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }


    public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero($numero)
    {
        $this->numero = $numero;

    }

    public function getCidade()
    {
        return $this->cidade;
    }


    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
}

$endereco = new Endereco("Casa", 155, "São Paulo");

echo $endereco;
echo "<br>";
echo $endereco->getCidade();
echo "<br>";
unset($endereco);
echo "<br>";
?>