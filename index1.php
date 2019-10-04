<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyID(2);

//Carrega uma lista de usuários
$lista = Usuario::getList();

echo json_encode($lista);

?>