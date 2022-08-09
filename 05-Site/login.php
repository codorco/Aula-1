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
    <header> <!-- Topo do site -->
            <nav>
                    <div id="topo">
                         <?php include "topo.php"; ?>
                    </div>
            </nav>
    </header>
    <main id="conteudo"> <!-- Conteudo do site -->
        <div class="container">
            <div class="login-container">
                <div class="login">
                 <?php include "form_login.php"; ?>
                    
                </div>
                <div class="home-center">
                    
                </div>
            </div>

        </div>
    </main>

    <footer> <!-- Rodapé do site -->
        <div id="rodape">
             <?php include "rodape.php"; ?>
        </div>
    </footer>
    </div>

</body>
</html>