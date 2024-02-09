<?php

$id_excluir = $_GET["CODIGO"];

function ExcluirUsuario($id){

    $conexao = new PDO("mysql:host=localhost;dbname=db_login", "root", "");

    $query = "DELETE FROM tb_usuarios WHERE id = " . $id;

    $conexao->exec($query);


}


try{
    ExcluirUsuario($id_excluir);
    header('Localtion:esqueci-senha.php');
}
catch(PDOException $ex){
die('erro ao excluir o arquivo' . $ex->getMessage());
}

ExcluirUsuario($id_excluir);