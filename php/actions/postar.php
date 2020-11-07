<?php

    require_once "db_connect.php";

    session_start();

    if(isset($_POST['publicar'])){
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];
        $id = $_SESSION['id'];
        
        $sql = "insert into postagens(idpostagens, titulo, conteudo) values ('null', '$titulo', '$conteudo')";

        mysqli_query($connect, $sql);

        header("Location: ../../postagens.php");
    }

?>