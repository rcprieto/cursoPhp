<?php

try{
    throw new Exception("Ocorreu um erro!", 407);
    
}
catch(Exception $e)
{
    echo json_encode(
        array(
            "mensagem"=>$e->getMessage(),
            "linha"=>$e->getLine(),
            "codigo"=>$e->getCode(),
            "arquivo"=>$e->getFile()

        )
        );
}
finally{
    echo "<br>";
}


function tratarNome($name)
{
    if(!$name)
    {
        throw new Exception("Nenhum nome foi informado", 1);
        
    }
    echo ucfirst($name) . "<br>";
}

try{
    echo tratarNome("Rodrigo");
    echo tratarNome("");
}
catch(Exception $e)
{
    echo "ERRO: " . $e->getMessage();
}
finally
{
    echo "<br>Executou o finally";
}

?>