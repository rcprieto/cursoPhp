<?php

require_once("config.php");
$usuarios = $conn->query("select * from tb_usuario order by usuario_nome");

while($row = mysqli_fetch_assoc($usuarios))
{

    echo $row["usuario_nome"];
    echo "<br>";
}


?>