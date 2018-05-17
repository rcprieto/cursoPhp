<?php

interface Veiculo
{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo
{
    public function acelerar($velocidade)
    {
        echo "O veículo acelerou até: ".$velocidade."km/h<br>";
    }

    public function freiar($velocidade)
    {
        echo "O veículo frenou até: ".$velocidade."km/h<br>";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo trocou para a ".$marcha;
    }

}

$carro = new Civic();

$carro->acelerar(500);
$carro->freiar(50);
$carro->trocarMarcha("quinta")

?>