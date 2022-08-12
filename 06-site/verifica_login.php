<?php
include "connect.php";

#RECUPERA A SESSÃO
#session_start();

$l= isset($_SESSION["login_user"])?$_SESSION["login_user"]:"";
$s= isset($_SESSION["senha_user"])?$_SESSION["senha_user"]:"";

# VERIFICAÇAO DE LOGIN PARA PERMANECER NA PAGINA
if($l != "" && $s != ""){
    $dados = mysqli_query($link, "select * from tb_user WHERE email = '$l'");
    while($d = mysqli_fetch_array($dados)) {
        $id_log = $d['id'];
        $nome_log = $d['nome'];
        $email_log = $d['email'];
        $senha_log = $d['senha'];
        $dica_log = $d['dica'];
        $capa_log = $d['capa'];
        $perfil_log = $d['perfil'];
     }
} else {
    header('location:index.php');
}



?>