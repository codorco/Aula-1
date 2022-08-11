<?php
session_start();
$email = $_SESSION["login_user"];


# DESLOGAR
unset($_SESSION["login_user"]);
unset($_SESSION["senha_user"]);

#VOLTAR PARA O PERFIL
header("location:index.php");

?>