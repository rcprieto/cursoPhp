
<?php
$frutas =  array('Abacaxi', 'Banana', 'Maça');
//print_r($frutas);

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

//echo end($carros[0]);

$pessoas = array();
array_push($pessoas, array(
  'nome'=>'Rodrigo',
  'idade'=>37
));

array_push($pessoas, array(
  'nome'=>'Clarissa',
  'idade'=> 35
));
//echo "<br />";
//print_r($pessoas);
//echo "<br />";echo "<br />";echo "<br />";

//JSON
//print_r($pessoas);
echo json_encode($pessoas);
/*
$json = '[{"nome":"Rodrigo","idade":37},{"nome":"Clarissa","idade":35}]';
echo "<br />";echo "<br />";echo "<br />";
$data = json_decode($json, true);
var_dump($data);
*/
?>
