<?php

$data = array(
    "empresa" => "GoSoftwares"
);

setCookie("NOME_DO_COOKIE", json_encode($data), time() + 3600); //1 hora





?>