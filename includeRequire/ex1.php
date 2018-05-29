<?php
//include "inc/exemplo.php"; //include tenta executar mesmo com erros, e para projetos de intranet busca na pasta global as funções, permite include remoto
require_once "inc/exemplo.php"; //require obriga que o arquivo exista e que esteja funciona funcionando corretamente, ideial usar require, exceto se usar includes de arquivos globais, que varios usam
echo "Resultador: " . somar(10, 15);
?>
