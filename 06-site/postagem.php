<?php 
include "verifica_login.php"; 
?>
            <form action="postar.php" method="post">
                <label>Postagem:<br><br>
                    <textarea name="postagem" rows="10" cols="50" required></textarea><br><br>
               
                    <input type="submit" value="Publicar" class="bt_form">
                </label>
            </form>


        