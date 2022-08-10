<?php
include "connect.php";

session_start();

$login = $_POST["login"];
$senha = $_POST["senha"];


$_SESSION['login_user'] = $login;
$_SESSION['senha_user'] = $senha;

if(isset($_SESSION['login_user']) && isset($_SESSION['senha_user'])) {
    $sql = mysqli_query($link, "select * from tb_user WHERE email = '$login'");
         while($dados = mysqli_fetch_array($sql)) {
            $email = $dados['email'];
            $pass = $dados["senha"];
         }
        
         if($login == $email && $senha == $pass){
            header('location:user.php');
         } else {
            header('location:index.php');
         }


}   else {
    header('location: index.php');
}


?>