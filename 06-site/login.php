<?php
include "connect.php";


# ATRIBUI OS VALORES
$login = $_POST["login"];
$senha = $_POST["senha"];





if($login && $senha) {
    $sql = mysqli_query($link, "select * from tb_user WHERE email = '$login'");
         while($dados = mysqli_fetch_array($sql)) {
            $email = $dados['email'];
            $pass = $dados["senha"];
         }
        
         if($login == $email && $senha == $pass){

            #LOGA NA SESSAO
            session_start();

            $_SESSION['login_user'] = $login;
            $_SESSION['senha_user'] = $senha;

            #DIRECIONA PARA O USER.PHP
            header('location:user.php');

         } else {
            header('location:index.php');
         }


}   else {
    header('location: index.php');
}


?>