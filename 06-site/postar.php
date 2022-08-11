<?php
session_start();
include "verifica_login.php";
$postagem = $_POST['postagem'];
echo $postagem;

?>