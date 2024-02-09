<?php

function ListarUsuarios(){
    $conexao = new PDO("mysql:host=localhost;dbname=db_login", "root", "");

    $query = "SELECT ID, usuario, senha FROM tb_usuarios";

    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
     

    return $lista;
}

function Listar1Usuario($id){
    $conexao = new PDO("mysql:host=localhost;dbname=db_login", "root", "");

    $query = "SELECT id, usuario, senha FROM tb_usuarios WHERE id = " . $id;
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll(); //retorna todos os usuarios.

    foreach($lista as $linha){
        return $linha;
    }
     

    return $lista;
    
}