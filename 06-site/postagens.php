<?php
include "connect.php";
$sql = "select * from tb_postagens where id_user = '$id_log'";
$postagens = mysqli_query($link, $sql);
while($dados = mysqli_fetch_array ($postagens)){
    echo "<br>";
    echo "<p class='posts'>ID da postagem:$dados[id]: $dados[postagem]
    <a href='update.php?id_post=$dados[id]'><img src='img/nova.png' class='img_posts'></a>
    
    </p>";
}










?>