<header>
    <h1><?php echo $nome_log; ?></h1>
</header>
<figure>
    <img src=" <?php echo "users/$email_log/$perfil_log"; ?> ">
    
</figure>
<nav>
    <ul id="foto">
        <li> <img src="img/cam.jpg" id=cam>
            <ul id="itens_menu">
                <li><a href="upload_foto.php">Upload de foto</a></li>
                <li><a href="remover_foto.php">Remover foto</a></li>
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