<?php

$nome = $_POST['nome']; //$_POST capta informaçãoes do tipo post
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

function CadastroUsuarios($usuario, $senha){
    $conexao = new PDO("mysql:host=localhost;dbname=db_login", "root", "");
    $query = "INSERT INTO tb_usuarios (usuario, senha) VALUE ('".$usuario."', '".$senha."')";

    $conexao->exec($query);

    $ultimo_id = $conexao->lastInsertId();
    return $ultimo_id;
}

function CadastrarInformacoes($nome, $email, $id_usuario){
    $conexao = new PDO("mysql:host=localhost;dbname=db_login", "root", "");
    $query = "INSERT INTO tb_informacoes (nome,email, id_usuarios) VALUE ('".$nome."', '".$email."', ".$id_usuario.")";

    $conexao->exec($query);

}


$id_usuario = CadastroUsuarios($usuario, $senha);
CadastrarInformacoes($nome,$email, $id_usuario);
