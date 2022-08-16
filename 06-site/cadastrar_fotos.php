<?php
session_start();
include "connect.php";
include "verifica_login.php";
$cadastrar = false;
$voltar ="<a href='atualizar_fotos.php'>Voltar ao cadastro</a>";

# arquivos de upload
$capa = $_FILES['capa']['name'];
$capa_tipo = $_FILES['capa']['type'];

$perfil = $_FILES['perfil']['name'];
$perfil_tipo = $_FILES['perfil']['type'];

#local das imagens 
$pasta = $email_log;
$foto_perfil = "users/$email_log/$perfil_log";
$foto_capa = "users/$email_log/$capa_log";

if($capa_log !="capa.jpg" && $perfil_log !="foto.png"){

    #EXCLUINDO FOTO E CAPA
    unlink($foto_perfil);
    unlink($foto_capa);
} else {

}
    


         if($capa !="" && $perfil !=""){
            $cadastrar = true;

            


# 3° VERIFICAÇAO (CAMPOS 2° parte)
                 if ($cadastrar){
# CRIANDO PASTA
# UPLOAD DE FOTOS NA PASTA
                move_uploaded_file($_FILES['capa']['tmp_name'],"users/".$pasta."/".$capa);
                move_uploaded_file($_FILES['perfil']['tmp_name'],"users/".$pasta."/".$perfil);
# ENVIANDO PRO DB

                $sql = "UPDATE tb_user SET perfil = '$perfil', capa= '$capa' WHERE id = '$id_log'";
                mysqli_query($link, $sql);

                echo "Cadastro feito com sucesso!<br>";
                echo "<a href='user.php?page=1'>Voltar para o perfil</a><br>";
                 } else {
                echo "Erro no cadastro";
                print $voltar;
                }


        } else {
            echo "Você deixou algum campo vazio<br>";
            print $voltar;
        }

?>
