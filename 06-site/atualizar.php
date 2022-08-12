<?php
include "connect.php";
session_start();
include "verifica_login.php";
$atualizar = $_POST['atualizar'];
$id_postagem = $_POST['id'];

if($atualizar){
        $sql = mysqli_query($link, "UPDATE tb_postagens SET postagem = '$atualizar' WHERE id = '$id_postagem'");
        header("location:user.php?page=2");
} else {
    header("location:user.php");
}

?>