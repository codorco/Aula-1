<?php
include "chavedb.php";
$consulta = $_POST['consulta'];

$id = $_POST['id'];

mysqli_query($link,"delete from tb_login WHERE id_login = '$id'");
header('location: form_delete.php');


?>