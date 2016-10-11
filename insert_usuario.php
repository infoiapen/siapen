<?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);

require "conexao.php";

$nome = 'klaus';
$email = 'klaus@iapen.ap.gov.br';
$senha = password_hash('123456', PASSWORD_DEFAULT);

$conexao = conexao::getInstance();
$sql = "INSERT INTO tab_usuario(nome, email, senha, status)VALUES('{$nome}', '{$email}', '{$senha}', 'A')";
$stm = $conexao->prepare($sql);
$stm->execute();