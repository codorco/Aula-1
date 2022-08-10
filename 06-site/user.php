<?php
include "verifica_login.php";
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
    <div id="principal">
            <section id="topo" style="background-image:url(<?php echo "users/$email_log/$capa_log";?>); background-size:cover;"> <!-- Topo do site -->
                <?php include "topo.php"; ?>  
            </section>


            <section id="conteudo"> <!-- Conteudo do site -->   
                <?php include "conteudo.php"; ?>      
            </section>


            <section id="rodape"> <!-- Rodapé do site -->    
                <?php include "rodape.php"; ?> 
            </section>
    </div>

</body>
</html>