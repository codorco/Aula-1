<?php
include "connect.php";

$email = $_POST['email'];
$dica = $_POST['dica'];


if ($email != ""){

    $sql = mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$email'" );
        while($dados = mysqli_fetch_array($sql)) {
            $e = $dados['email'];
            $d = $dados['dica'];
            $s = $dados['senha'];    
        }
        # CONTAR QUANTAS LINHAS TEM
    $contagem = mysqli_num_rows($sql);
        
if ($contagem) {
    if ($e == $email && $dica == $d){
            echo "Sua senha é: $s<br>";
            echo "<a href='nova_senha.php?email_user=$e'>Cria nova senha</a>";
        }   else {
            echo "<a href='index.php'>O E-mail ou a palavra de segurança não conferem !</a>";
        }
} else {
    echo "<a href='index.php'>O E-mail não foi encontrado!</a>";
}

  
} else {
    header("location:redefinir_senha.php");
}




?>