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
            <form action="cadastrar.php" method="post" enctype="multipart/form-data">
                <label> Nome: </label><input type="text" name="nome" placeholder="Digite o seu Nome" class="entradas" required><br>
                <label> E-Mail: </label><input type="email" name="email" placeholder="Digite o seu E-mail" class="entradas" required><br>
                <label> Senha: </label> <input type="password" name="senha" placeholder="Digite a sua senha" class="entradas"required><br>
                <label> Dica: </label> <input type="text" name="dica" placeholder="Digite uma dica" class="entradas"required><br>
                <label> Imagem da capa: </label> <input type="file" name="capa" class="entradas"required><br>
                <label> Imagem de perfil: </label> <input type="file" name="perfil" class="entradas"required><br>
                <label><input type="submit" value="Cadastrar" class="bt_form"></label>
            </form>
          
            <a href="index.php">Logar</a>
            
           

    </section>
        
</body>
</html>