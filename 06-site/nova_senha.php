<?php
$email = isset($_GET['email_user'])?$_GET['email_user']:"";
if ($email == ""){
    header("location:index.php");
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
            <form action="cadastrar_nova_senha.php" method="post">
                <label> Nova senha: </label>
                    <input type="password" name="senha" placeholder="Digite a nova senha" class="entradas" required><br>

                <label>Confirmar senha:</label>
                    <input type="password" name="confirmar" placeholder="Digite a nova senha" class="entradas" required><br>
                    <input type="hidden" name="email" value="<?php echo $email; ?>">

                    <label><input type="submit" value="Cadastrar nova senha" class="bt_form"></label>
            </form>
            
            <a href="index.php">Logar</a>
            

    </section>
        
</body>
</html>