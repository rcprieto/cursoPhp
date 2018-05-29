<?php
require_once("config.php");

$qr = new Sql();
//SELECT SEM CLASSE
//$usuarios = $qr->select("Select * from tb_usuario order by usuario_nome");
//echo json_encode($usuarios);
//echo "<br>";
//echo "<br>";
//echo "<br>";

$usuario = new Usuario("Rodrigo Teste", "rodss@gmail.com", "12544");

//RETORNA 1 Usuário por ID USANDO A CLASSE USUÁRIO
//$usuario->getById(1);
//echo $usuario;

//RETORNA uma LISTA de usuários
//$lista = Usuario::getList(); //Static usa :: não precisa instanciar
//echo json_encode($lista);


//RETORNA uma busca por email
//$lista2 = Usuario::buscarPorEmail("cla"); //Static usa :: não precisa instanciar
//echo json_encode($lista2);

//Fazendo um login
// $usuario->login("rcprieto@gmail.com", "1234");
// echo $usuario;

//INSERÇÃO DE USUÁRIO
// if($usuario->insert())
// {
//     echo "Usuario Cadastrado com sucesso: ". $usuario->getUsuarioId();
// }
// else{
//     echo "Ocorreu um erro: ";
//     print_r($usuario->getMensagemErro());
// }

//UPDATE
if($usuario->update(17, "Clarissa", "123"))
{
    echo "Usuario alterado com sucesso";
}
else
{
    echo "Ocorreu um erro: ";
    print_r($usuario->getMensagemErro());
}

//Delete
$usuario->setUsuarioId(17);
if($usuario->delete())
{
    echo "Usuario excluido com sucesso";
}
else
{
    echo "Ocorreu um erro: ";
    print_r($usuario->getMensagemErro());
}

?>