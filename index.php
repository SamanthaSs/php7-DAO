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

$lista = Usuario :: getList();

echo json_encode($lista);


?>