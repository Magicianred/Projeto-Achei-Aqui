<?php

require_once "db_connect.php";

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "insert into tb_usuarios(nome_completo, email, senha) values ('$nome', '$email', '$senha')";
    $result = $connect->query($sql);

    header("Location: ../../login.php");
}

?>