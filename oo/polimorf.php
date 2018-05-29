<?php

class Animal
{
    public function falar()
    {
        return "Som";
    }

    public function mover()
    {
        return "Anda";
    }
  
}

class Cachorro extends Animal
{
    public function falar()
    {
        return "Late";
    }
}

class Gato extends Animal
{
    public function falar()
    {
        return "Mia";
    }
}

class Passaro extends Animal
{
    public function falar()
    {
        return "Canta";
    }

    public function mover()
    {
        return "Voa e " . parent::mover();
    }
}


$pluto = new Cachorro();
echo $pluto->falar();
echo "<br>".$pluto->mover();

$garfield = new Gato();
echo "<br>".$garfield->falar();
echo "<br>".$garfield->mover();

$passaro = new Passaro();
echo "<br>".$passaro->falar();
echo "<br>".$passaro->mover();

?>