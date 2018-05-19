<?php
require_once("config.php");

$qr = new Sql();
$usuarios = $qr->select("Select * from tb_usuario order by usuario_nome");
echo json_encode($usuarios);

?>