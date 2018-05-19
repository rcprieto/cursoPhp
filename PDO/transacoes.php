<?php
require_once "config.php";

$conn->beginTransaction();

$sql = $conn->prepare("update tb_usuario set usuario_senha = :SENHA where usuario_email like :EMAIL");

$senha = "123456dsds";
$email = "clarissa.tams@gmail.com";

$sql->bindParam(":SENHA", $senha);
$sql->bindParam(":EMAIL", $email);

if ($sql->execute()) {
    echo "Executado com sucesso!";
} else {
    echo "Ocorreu um erro: <br>";
    print_r($sql->errorInfo());
}

//se usa beginTransation da pra usar o beginTransaction
//$conn->rollback();
$conn->commit();


?>
