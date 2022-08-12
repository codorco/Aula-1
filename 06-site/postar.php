<?php
session_start();
include "connect.php";
include "verifica_login.php";
$postagem = $_POST['postagem'];

if($postagem){

#CADASTRAMENTO DE POSTAGEM
$sql = "INSERT INTO tb_postagens (postagem, id_user)VALUES('$postagem','$id_log')";
mysqli_query($link, $sql);

        header("location:user.php?page=2");
} else {
        header('location:user.php');

}
?>