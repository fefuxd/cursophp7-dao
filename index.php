<?php
require_once("config.php");

// Carrega um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("2");
//echo json_encode($search);

//Carrega um usuário usando um login e a senha
$usuario = new Usuario();
$usuario->login("teste2","teste2");

echo $usuario;


?>