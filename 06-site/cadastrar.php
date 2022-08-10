<?php
include "connect.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dica = $_POST['dica'];
$cadastrar = false;
$voltar ="<a href='cadastre.php'>Voltar ao cadastro</a>";

# arquivos de upload
$capa = $_FILES['capa']['name'];
$capa_tipo = $_FILES['capa']['type'];

$perfil = $_FILES['perfil']['name'];
$perfil_tipo = $_FILES['perfil']['type'];

#local das imagens 
$pasta = $email;

#CRIADOR DE PASTA VERIFICANDO SE A PASTA EXISTE
# 1° VERIFICAÇAO (PASTA)
if(file_exists("users/".$pasta)){
    echo "Você ja possui um email cadastrado<br>";
    print $voltar;
} else {

# 2° VERIFICAÇAO (CAMPOS)
            if($nome !="" && $email !="" && $senha !="" && $dica !="" && $capa !="" && $perfil !=""){
            $cadastrar = true;


# 3° VERIFICAÇAO (CAMPOS 2° parte)
                 if ($cadastrar){
# CRIANDO PASTA
                mkdir("users/".$pasta,0777);
# UPLOAD DE FOTOS NA PASTA
                move_uploaded_file($_FILES['capa']['tmp_name'],"users/".$pasta."/".$capa);
                move_uploaded_file($_FILES['perfil']['tmp_name'],"users/".$pasta."/".$perfil);
# ENVIANDO PRO DB
                $sql = "INSERT INTO tb_user (nome,email,senha,dica,perfil,capa)VALUES('$nome','$email','$senha','$dica','$perfil','$capa');";
                mysqli_query($link, $sql);

                echo "Cadastro feito com sucesso!<br>";
                echo "<a href='login.php'>Ir para tela de Login</a><br>";
                 } else {
                echo "Erro no cadastro";
                print $voltar;
                }


        } else {
            echo "Você deixou algum campo vazio<br>";
            print $voltar;
        }
}

#verificar se é possivel cadastrar



/*
#imprimindo os valores das variaives 

echo "Nome: ".$nome."<br>";
echo "Email: ".$email."<br>";
echo "Senha: ".$senha."<br>";
echo "Dica: ".$dica."<br>";

echo "Capa: ".$capa."<br>";
echo "Tipo de arquivo de capa: ".$capa_tipo."<br>";

echo "Foto de perfil: ".$perfil."<br>";
echo "Tipo de arquivo de perfil: ".$perfil_tipo."<br>";
*/

# CADASTRAMENTO ABAIXO





?>
