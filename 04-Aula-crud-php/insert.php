<?php
include "chavedb.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

mysqli_query($link, "insert into tb_login(nome,email,senha)values('$nome','$email','$senha')");
header('location: form_insert.php');


?>