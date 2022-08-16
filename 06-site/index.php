<?php
#INCLUIR A CONEXAO
include "connect.php";

#RECUPERAR A SESSAO
session_start(); 

#VERIFICAR E MANDAR DE VOLTA CASO LOGADO
if(isset($_SESSION['login_user'])&& isset($_SESSION["senha_user"])) {
    header('location:user.php');
}   else {

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site X</title> <!-- Nome da pagina do site -->
    <link rel="stylesheet" href="css/estilo.css"> <!-- CSS da pagina -->
</head>
<body> <!-- Seção principal do site -->
    <section id="form">
            <form action="login.php" method="post">
                <label> 
                Login:
                </label>
                    <input type="text" name="login" placeholder="Digite o seu Email" class="entradas" required><br>
                <label>
                    Senha:
                </label>
                <input type="password" name="senha" placeholder="Digite a sua Senha" class="entradas" required><br>
                <label>
                    <input type="submit" value="logar" class="bt_form">
                </label>
            </form>
            <a href="redefinir_senha.php">Esqueci a senha</a>
            <a href="cadastre.php">Novo Usuario</a>
            
           

    </section>
        
</body>
</html>