<?php
echo date("d/M/y H:i:s");
echo "<br>";

echo time();

echo "<br>";
//timestamp formatando
echo date("d/M/y H:i:s", 1526498408);


echo "<br>";

echo strtotime("2001-09-11");
echo "<br>";
echo strtotime("+1 week");
echo "<br>"; 
echo date("l, d/M/Y H:i:s", 1000166400);



echo "<br>"; 
echo ucwords(date("d/M/y H:i:s"));
echo "<br>"; 
//Para usar a lingua, usar o strftime
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
echo strftime("%A %B");



$dt = new DateTime();

//15 dias periodo
$periodo = new DateInterval("P15D");

$dt->add($periodo);

echo "<br>Hoje + 15 dias: ".$dt->format("d/m/Y");


?>