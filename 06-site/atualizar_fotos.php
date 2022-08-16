<?php
session_start();
include "verifica_login.php";
include "connect.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Site X</title> <!-- Nome da pagina do site -->
    <link rel="stylesheet" href="css/estilo.css"> <!-- CSS da pagina -->
</head>
<body> <!-- Seção principal do site -->
    <section id="form">
            <form action="cadastrar_fotos.php" method="post" enctype="multipart/form-data">
                <label> Imagem da capa: </label> <input type="file" name="capa" class="entradas"required><br>
                <label> Imagem de perfil: </label> <input type="file" name="perfil" class="entradas"required><br>
                <label><input type="submit" value="Cadastrar" class="bt_form"></label>
            </form>
          
            <a href="user.php?page=1">Voltar</a>
            
           

    </section>
        
</body>
</html>