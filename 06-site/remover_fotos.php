<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Site X</title> <!-- Nome da pagina do site -->
    <link rel="stylesheet" href="css/estilo.css"> <!-- CSS da pagina -->
</head>
</html>
<?php 
session_start();
include "connect.php";
include "verifica_login.php";

$foto_perfil = "users/$email_log/$perfil_log";
$foto_capa = "users/$email_log/$capa_log";

#EXCLUINDO FOTO E CAPA
unlink($foto_perfil);
unlink($foto_capa);

#ATUALIZAR FOTO E CAPA DEPOIS DE EXCLUIDOS
$sql = "UPDATE tb_user SET perfil = 'foto.png', capa= 'capa.jpg' WHERE id = '$id_log'";
mysqli_query($link, $sql);

#COMANDO DE VOLTAR A USER.PHP
header("location:user.php?page=1");


?>
