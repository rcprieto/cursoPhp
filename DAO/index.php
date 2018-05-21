<?php
require_once("config.php");

$qr = new Sql();
$usuarios = $qr->select("Select * from tb_usuario order by usuario_nome");
//echo json_encode($usuarios);

//echo "<br>";
//echo "<br>";
//echo "<br>";

$usuario = new Usuario();
$usuario->getById(1);

echo $usuario;



?>