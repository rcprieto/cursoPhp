<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Exemplo 1</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    $nome = "Rodrigo";
    echo $nome;
    echo "<br />";
    echo var_dump($nome); //Mostra valores da variavel

    //Aula 14
    unset($nome); //Limpa a variável
    if(isset($nome)) //Verifica se a variável está definida
    {
      echo $nome;
    }

    $nome = "Rodrigo";
    $sobrenome = "Prieto";

    echo "<br />";
    echo $nome . " " . $sobrenome;
    //exit; //comando para para a execução

    $site = "www.gosoftwares.com.br";

    $ano = 2018;
    $salario = 5500.80;
    $bloqueado = false;

    $frutas = array("abacaxi", "laranja", "manga");
    echo "</br>" . $frutas[2];

    $nascimento = new DateTime();
    echo "<br/>";
    var_dump($nascimento);

    $arquivo = fopen("exemplo1.php", "r");
    echo "<br />";
    var_dump($arquivo);

    $nulo = NULL;



    ?>
  </body>
</html>
