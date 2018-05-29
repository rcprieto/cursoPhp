<?php
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Rodrigo");
$cad->setSenha("1234");
$cad->setEmail("rcprieto@gmail.com");

echo $cad->registrarVenda();
echo "<br>" . $cad;


?>