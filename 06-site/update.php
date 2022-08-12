<?php 
session_start();
include "verifica_login.php";
$id_update = $_GET['id_post'];
echo "id da postagem que deve ser atualizada $id_update";

######## PEGANDO O TEXTO DA POSTAGEM
include "connect.php";
$sql = "select * from tb_postagens WHERE id = '$id_update'";
$result = mysqli_query($link,$sql);
while($text_update = mysqli_fetch_array($result)){
    $text = $text_update['postagem'];
}

?>
            <form action="atualizar.php" method="post">
                <label>Atualizar postagem:<br><br>
                    <textarea name="atualizar" rows="10" cols="50" required> <?php  echo "$text";   ?> </textarea><br><br>
                    <input type="hidden" name="id" value="<?php echo $id_update; ?>">
                    <input type="submit" value="Atualizar" class="bt_form">
                </label>
            </form>


        