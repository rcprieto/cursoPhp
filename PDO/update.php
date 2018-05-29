<?php
 require_once("config.php");

 $sql = $conn->prepare("update tb_usuario set usuario_senha = :SENHA where usuario_email like :EMAIL");

 
 $senha = "12345";
 $email = "clarissa.tams@gmail.com";

$sql->bindParam(":SENHA", $senha);
$sql->bindParam(":EMAIL", $email);

 if($sql->execute())
     echo "Executado com sucesso!";
else
{
    echo "Ocorreu um erro: <br>";
    print_r($sql->errorInfo());
}


?>