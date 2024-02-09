<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$id = $_POST[['id']];

function AlterarCadastro($usuario, $senha, $id){

    $conexao = new PDO("mysql:host=localhost;dbname=db_login", "root", "");

    $query = "UPDATE tb_usuario SET usuario = {$usuario} senha = {$senha} WHERE id = {$id}";

    $conexao->exec($query);
}

try{
    AlterarCadastro($usuario, $senha, $id);
    header('Location:esqueci-senha.php');
} catch (PDOException){
    die('Erro ao cadastrar dados: ' . $ex->getMenssage()); 
}