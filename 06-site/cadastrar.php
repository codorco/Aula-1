<?php
include "connect.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dica = $_POST['dica'];

# arquivos de upload
$capa = $_FILES['capa']['name'];
$capa_tipo = $_FILES['capa']['type'];

$perfil = $_FILES['perfil']['name'];
$perfil_tipo = $_FILES['perfil']['type'];

#local das imagens 
$pasta = $email;

#CRIADOR DE PASTA VERIFICANDO SE A PASTA EXISTE
if(file_exists("users/".$pasta)){
    echo "Você ja possui um email cadastrado<br>";
    echo"<a href='cadastre.php'>Voltar ao cadastro</a>";
} else {
    mkdir("users/".$pasta,0777);
    echo "Cadastro efutuado com sucesso!<br>";
    echo "<a href='cadastre.php'>Cadastrar outro usuario</a><br>";
#UPLOAD DE FOTOS
move_uploaded_file($_FILES['capa']['tmp_name'],"users/".$pasta."/".$capa);
move_uploaded_file($_FILES['perfil']['tmp_name'],"users/".$pasta."/".$perfil);
}



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


# CADASTRAMENTO ABAIXO
$sql = "INSERT INTO tb_user (nome,email,senha,dica,perfil,capa)VALUES
('$nome','$email','$senha','$dica','$perfil','$capa');";
mysqli_query($link, $sql);
####
*/


?>
