<?php

interface Veiculo
{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo
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



class DelRey extends Automovel
{
    public function empurrar()
    {

    }

}

$carro = new DelRey();
$carro->acelerar(200);

?>