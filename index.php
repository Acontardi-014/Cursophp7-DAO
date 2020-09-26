<?php

require_once("config.php");
/*
//Carega 1 usuario
$usuario = new Usuario();
$usuario->loadById(3);
echo $usuario;
*/

/*
//Carrega um lista de usuarios
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/*
//Carrega um lista de usuarios buscando pelo login
$search = Usuario::search("ro");
echo json_encode($search);
*/

/*
//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "!@#$");
*/

/*
//Criando um novo usuario
$aluno = new Usuario("aluno", "@luno0");
$aluno->insert();
echo $aluno;
*/

/*
//Alterar um usuario
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;
?>