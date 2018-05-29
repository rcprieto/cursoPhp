<?php

/* function __autoload($nomeClasse)
{
    require_once("classesAutoload/$nomeClasse.php");
} */

//Autoloader mas com pastas
spl_autoload_register(function($nomeClass)
{
    $dirClass = "class";
    //No MAC precisa desse replace imbecil
    $fileName =  str_replace("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nomeClass . ".php");
    
    if(file_exists($fileName))
    {
        require_once($fileName);
    }
});





?>