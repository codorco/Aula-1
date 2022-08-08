<?php
include "chavedb.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

mysqli_query($link,"update tb_login set nome = '$nome', senha = '$senha', email = '$email' WHERE id_login = '$id'");
header('location: form_update.php');


?>