<?php

class Carro
{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo():?string
    {
        return $this->$modelo;
    }
    public function setModelo()
    {
        $this->modelo = $modelo;
    }
 
    public function getAno():?int
    {
        return $this->ano;
    }
  
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function getMotor():?float
    {
        return $this->motor;
    }


    public function setMotor($motor)
    {
        $this->motor = $motor;
       
    }


    public function exibir()
    {
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}


$gol = new Carro();
$gol->setModelo("Gol GT");

$gol->setMotor("1.6");

// var_dump($gol->exibir());
// echo "<br>";
// print_r($gol->exibir());
// echo "<br>";
print_r(json_encode($gol->exibir()));


?>