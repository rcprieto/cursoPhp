<?php
function ola()
{
    $teste = 1;
    return "Olá Mundo!";
    $teste = 2;
}

function olaPar($texto = "Valor Padrão")
{
    return "<br/>Olá " . $texto;
}

echo ola();
$frase = ola();
echo "<br>" . strlen($frase);

echo olaPar("Rodrigo<br>");
var_dump($frase);
//echo  phpinfo();

echo "<br>";

//Passagem de variavel por valor, não altera o valor inicial
$a = 50;
function trocaValor($b)
{
    $b += 50;
    return $b;
}

echo "<br>" . trocaValor($a);
echo "<br>" . $a;

//Passagem de valor por referencia, usa o & no lugar do ref
$b = 50;
function trocarPorRef(&$c)
{
    $c += 150;
    return $c;
}

echo "<br>" . trocarPorRef($b);
echo "<br>" . $b;

$pessoa = array(
    'nome' => 'Rodrigo',
    'idade' => 37,
);
echo "<br>";
echo "<br>";
foreach ($pessoa as $value) {

    if (gettype($value) === 'integer') {
        $value += 10;
    }

    echo "<br>" . $value;
}
echo "<br>";
print_r($pessoa);

//So muda o valor do array se passar o valor como referencia, senão só muda enquando estiver no foreach
foreach ($pessoa as &$value) {

    if (gettype($value) === 'integer') {
        $value += 40;
    }

    echo "<br>" . $value;
}
echo "<br>";

print_r($pessoa);
echo "<br>";
echo "<br>";
echo "<br>";

//... funciona como um array ( se colocar :tipo no final é o que vai retornar, pode ser string, ai já retorna string)
function soma(int...$valores): string
{
    return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(3, 10, 15);

echo "<br>";
echo "<br>";

//Funções recursivas
$hierarquia = array(

    array("nome_cargo" => 'CEO',
        "subordinados" => array(
            //DirComercial
            array("nome_cargo" => "Diretor Comercial",
                "subordinados" => array(
                    array(
                        "nome_cargo" => "Gerente de Vendas",
                    ),
                ),
                //Fim DirComercial

            ),
            array(
                "nome_cargo" => "Diretor Financeiro",
                "subordinados" => array(
                    array(
                        "nome_cargo" => "Gerente de Contas",
                        "subordinados" => array(
                            array(
                                "nome_cargo" => "Supervisor de Pagamentos",
                                "salario" => 1000,
                            ),
                            array(
                                "nome_cargo" => "Analista Financeiro",
                            ),
                        ),
                    ),
                    array(
                        "nome_cargo" => "Gerente Imposto",
                        "subordinados" => array(
                            array(
                                "nome_cargo" => "Engenheiro Fiscal"
                            ),
                            array( "nome_cargo" => "Analista Fiscal")
                        )
                    ),
                ),
            ),

        ),
    ),
);

//Função recursiva, chama ela mesma
function exibe($cargos)
{
    $html = "<ul>";
    foreach ($cargos as $cargo) {
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";
    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);


echo "<br>";
echo "<br>";
echo "<br>";

//Função anonima
function teste($callback)
{
    //Processo Lento
    $callback();
}

teste(function()
{
    echo "Terminou!";
});

