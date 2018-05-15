<?php
//Definir uma constante
define("SERVIDOR", "127.0.0.1");

//echo SERVIDOR;


//So no PHP 7, constante com array
define("BANCO_DE_DADOS",
[
  '127.0.0.1',
  'root',
  'pass',
  'admin'
]);

print_r(BANCO_DE_DADOS);
echo "<br/> </br/>" . PHP_VERSION;
echo "<br />" . DIRECTORY_SEPARATOR;
?>
