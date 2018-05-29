<?php

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $cep = $_POST["txtCep"];
    $link = "http://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    curl_close($ch);
    print_r($response);
    $data = json_decode($response);
    echo "<br>";
    echo "<br>";
    print_r($data);


}

?>

<html>
<head>
</head>
<body>

<form method="POST">
<input type="text" name="txtCep" id="txtCep"/>
<input  type="submit" value="Buscar"></input>

</form>

</body>
</html>