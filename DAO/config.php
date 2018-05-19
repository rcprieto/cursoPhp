<?php

function __autoload($nomeClasse)
{
    $fileName = $nomeClasse.".php";
    
    if(file_exists($fileName))
        require_once($fileName);
}

?>