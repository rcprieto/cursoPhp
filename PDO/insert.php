<?php
 require_once("config.php");

 $sql = $conn->prepare("INSERT INTO tb_usuario (usuario_nome, usuario_senha, usuario_email) VALUES(:NOME, :SENHA, :EMAIL)");

 $nome = "Clarissa";
 $senha = "1234";
 $email = "clarissa.tams@gmail.com";

 $sql->bindParam(":NOME", $nome);
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