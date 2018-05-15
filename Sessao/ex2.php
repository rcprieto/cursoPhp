<?php
require_once("config.php");
echo $_SESSION['nome'];

//Remove a sessão
//session_unset($_SESSION['nome']);

//Sessão unica pra cada acesso
//echo ": ".session_id();

//session_regenerate_id();
//echo "<br />".session_id();




 ?>
