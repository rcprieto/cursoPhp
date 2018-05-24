<?php

function __autoload($nomeClasse)
{
    $dirClass = "class";
    //No MAC precisa desse replace imbecil
    $fileName =  str_replace("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    
    if(file_exists($fileName))
        require_once($fileName);
}

?>