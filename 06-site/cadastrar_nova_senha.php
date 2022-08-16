<?php
include "connect.php";
$senha = $_POST['senha'];
$confirmar = $_POST['confirmar'];
$email = $_POST['email'];


if ($senha !="" && $confirmar !=""){

    if ($senha == $confirmar){

                $sql = "UPDATE tb_user SET senha = '$senha' WHERE email = '$email'";
                mysqli_query($link, $sql);
                echo "Senha alterada com sucesso!<br>";
                echo "<a href='user.php?page=1'>Voltar para o login</a><br>";

    } else {
        echo "As senhas nao são iguais -<a href='nova_senha.php?email_user=$email'>VOLTAR</a><br>";
    }

} else {
    header("location:index.php");
}





?>