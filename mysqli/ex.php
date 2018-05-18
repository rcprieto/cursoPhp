<?php
require_once("config.php");

$sql = $conn->prepare("INSERT INTO tb_usuario (usuario_nome, usuario_senha, usuario_email) VALUES(?, ?, ?)");
$sql->bind_param("sss", $nome, $senha, $email);

$nome = "Rodrigo";
$senha = "1234";
$email = "rcprieto@gmail.com";

if($sql->execute())
    echo "Cadastrado com sucesso!";
else
    echo "Ocorreu um erro no cadastro: " . $sql->error;


$nome = "Admin";
$senha = "1234";
$email = "rodrigo.prieto@gosoftwares.com.br";

if($sql->execute())
    echo "<br>Cadastrado com sucesso!";
else
    echo "Ocorreu um erro no cadastro: " . $sql->error;



?>