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
            <form action="redefinir.php" method="post">
                <label> E-Mail: </label>
                    <input type="email" name="email" placeholder="Digite o seu E-mail" class="entradas" required><br>
                <label>Frase de segurança:</label>
                    <input type="text" name="dica" placeholder="Qual é o nome do seu cachorro ?" class="entradas" required><br>

                    <label><input type="submit" value="Redefinir" class="bt_form"></label>
            </form>
            
            <a href="index.php">Logar</a>
          
            
           

    </section>
        
</body>
</html>