<?php
require_once("config.php");

$qr = new Sql();
$usuarios = $qr->select("Select * from tb_usuario order by usuario_nome");
//echo json_encode($usuarios);

//echo "<br>";
//echo "<br>";
//echo "<br>";

//RETORNA 1 Usuário por ID
$usuario = new Usuario();
//$usuario->getById(1);
//echo $usuario;

//RETORNA uma LISTA de usuários
$lista = Usuario::getList();
//echo json_encode($lista);


//RETORNA uma busca por email
$lista2 = Usuario::buscarPorEmail("cla");
//echo json_encode($lista2);

//Fazendo um login
$usuario->login("rcprieto@gmail.com", "1234");
echo $usuario;




?>