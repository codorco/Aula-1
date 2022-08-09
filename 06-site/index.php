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
    <div id="principal">
            <header id="topo"> <!-- Topo do site -->
                <?php include "topo.php"; ?>  
            </header>


            <main id="conteudo"> <!-- Conteudo do site -->   
                <?php include "conteudo.php"; ?>      
            </main>


            <footer id="rodape"> <!-- Rodapé do site -->    
                <?php include "rodape.php"; ?> 
            </footer>
    </div>

</body>
</html>