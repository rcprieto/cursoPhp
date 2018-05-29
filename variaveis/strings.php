<?php
$nome = "Rodrigo Prieto";
echo "Teste $nome";
echo "<br/>";
echo 'Teste $nome';
echo "<br/>";

echo strtoupper($nome);
echo "<br/>";
echo ucwords($nome);
echo "<br/>";
echo str_replace("o", "0", $nome);
echo "<br/>";
$q = strpos($nome, "Prieto");
var_dump($q);
?>
