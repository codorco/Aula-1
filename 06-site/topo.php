<header>
    <h1><?php echo $nome_log; ?></h1>
</header>
<figure>
    <img src=" 
    <?php 
    if($perfil_log== "foto.png"){
        echo "img/$perfil_log";
     } else {

        echo "users/$email_log/$perfil_log"; 
    }
    
    ?> 
    ">
    
</figure>
<nav>
    <ul id="foto">
        <li> <img src="img/cam.jpg" id=cam>
            <ul id="itens_menu">
                <li><a href="atualizar_fotos.php">Atualizar fotos</a></li>
                <?php 
                #VERIFICANDO SE A FOTO PADRAO ESTA NO BANCO PARA TIRAR A OPÇAO DE "REMOVER FOTO"
                    if($perfil_log != "foto.png" && $capa_log != "capa.jpg"){
                    echo "<li><a href='remover_fotos.php'>Remover foto</a></li>";
                    }
                ?>
              

            </ul>
        </li>
    </ul>
</nav>

<section id="menu_perfil">
    <a href="user.php?page=1">Sobre</a>
    <a href="user.php?page=2">Atividade</a>
    <a href="user.php?page=3">Nova postagem</a>
    <a href="logout.php?page=2">Sair</a>
    
</section>