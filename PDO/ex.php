<?php
require_once("config.php");

$stmt = $conn->prepare("select * from tb_usuario order by usuario_nome");

$stmt->execute();
$valores = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($valores);
echo "<br>";
echo "<br>";
echo "<br>";


foreach($valores as $linha)
{
    foreach ($linha as $key => $value) {
        echo "<b>".$key.":</b> ".$value."<br/>";
    }
    echo "======================================<br/>";
}

?>