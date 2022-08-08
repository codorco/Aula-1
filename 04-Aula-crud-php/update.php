<?php
include "chavedb.php";

$nome = "Emerson William da Rosa";
$senha = "caiofr123";

mysqli_query($link,"update tb_login set nome = '$nome', senha = '$senha' WHERE id_login = 3");



?>