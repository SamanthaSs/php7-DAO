<?php

require_once("config.php"); //puxa as configurações de classe de config.php

/*$sql = new Sql(); // novo objeto da classe Sql

$usuarios = $sql->select("SELECT * FROM tb_usuarios"); // puxa o metodo select da classe Sql - selecionou a tabela pré definida

echo json_encode($usuarios); //codifica os dados na tela*/

//Carrega um usuário
//$root = new Usuario();

//$root -> loadbyId(1);
// echo $root;


// Carrega lista de usuários

//$lista = Usuario :: getList(); // chamada de um método estático 

//echo json_encode($lista);

// Pesquisa pelo nome de usuário

//$search = Usuario::search("ro");

//echo json_encode($search);

// carrega um usuário usando login e senha

//$usuario = new Usuario();

//$usuario -> login("root","@#$");

//echo $usuario;

// Insere um novo usuário na tabela

/*$aluno = new Usuario("aluno","@lun0");

$aluno->insert();

echo $aluno;*/

/*LAT
$usuario = new Usuario();

$usuario ->loadbyId(8);

$usuario -> update ("professor","12390098");

echo $usuario;*/

$usuario = new Usuario();

$usuario ->loadbyId(9);

$usuario->delete();

echo $usuario;

?>