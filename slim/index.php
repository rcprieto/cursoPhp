<?php
//habilitar o LoadModule rewrite_module libexec/apache2/mod_rewrite.so no httpd.conf da pasta apache2
//No mesmo arquivo, alterar para AllowOverride All em <Directory "/Library/WebServer/Documents">
//Restartar apache sudo /usr/sbin/apachectl restart
//O Slim seria o equivalente ao roteamento do mvc
require_once("vendor/autoload.php");


$app = new \Slim\Slim();

$app->get("/", function()
{
    echo "Home Page";
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();



?>