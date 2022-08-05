<?php
echo "<h1>Teste de variaveis comuns</h1>";
#      TESTE DE VARIAIS COMUNS      #

$salario = 1500;
$aumento = 6/100;
$novosalario = ($salario * $aumento) + $salario;

echo "salario inicial: $salario<br>";
echo "taxa para aumento: $aumento<br>";
echo "novo salario: $novosalario<br>";


echo " <br>";
echo "<h1>Teste de variaveis 'IF'</h1>";
#       TESTE DE VARIAVEL "IF"

if (1>0) {
    echo "verdadeiro <br>";
}   else {
    echo "falso <br>";

} # Resultado > verdadeiro

echo " <br>";

##       TESTE DE VARIAVEL "IF" 2      ##

$idade = 18;
IF ($idade > 17) {
    echo "maior de idade</br>";
}   else {
    echo "menor de idade</br>";
    
} # Resultado > Maior de idade

echo " <br>";

$valor = 1;
if ($valor == false ) {
    echo "verdadeiro</br>";
}   else {
    echo "falso</br>";
}

echo " <br>";

##       TESTE DE VARIAVEL "IF3"     ##

$porta = 1;
$chaveporta =1;
$cofre = 1;
$chavecofre =1;

if ($chaveporta == $porta) {
    echo "voce abriu a porta </br>";
        if ($chavecofre == $cofre) {
             echo "voce consegiu abrir o cofre</br>";
         }   else { 
             echo "sua chave nao abre o cofre</br>";
            }
}   else {
    echo "sua chave nao abre a porta</br>";
}

echo " <br>";

##     TESTE DE VARIAVEL "ABRINDO PORTAS COM VARIAS CHAVES"       ##

$chave1 = 1;
$chave2 = 2;
$chave3 = 3;
$chave4 = 4;
$chave5 = 5;
$porta = 6;

if ($chave1 == $porta) {
    echo "a chave 1 abriu a porta</br>";
}   else if ($chave2 == $porta) {
    echo "a chave 2 abriu a porta</br>";
}   else if ($chave3 == $porta) {
    echo "a chave 3 abriu a porta</br>";
}   else if ($chave4 == $porta) {
    echo "a chave 4 abriu a porta</br>";
}   else if ($chave5 == $porta) {
    echo "a chave 5 abriu a porta</br>";
}   else {
    echo "a chave não abriu a porta</br>";
} 

echo " <br>";

##     TESTE DE OPERADORES LOGICOS BOOLEANOS       ##

$nota = 5;
$presenca = 10;
$atividade = 15;

if ($nota >= 5 && $presenca >= 10 && $atividade >= 15) {
    echo "aluno aprovado</br>";
}   else { 
    echo   "aluno reprovado</br>";
}

echo " <br>";

##      TESTE 2 "verificaçoes separadas"         ##

$nota2 = 5;
$presenca2 = 10;
$atividade3 = 15;

if ($nota2 >= 5) {
    if ($presenca2 >= 10) {
        if ($atividade3 >= 15) {
            echo "aluno aprovado em tudo</br>"; 
            } else { 
            echo "aluno reprovado na ativade</br>";
            } 
    } else { 
    echo "aluno reprovado na presença</br";
    }
} else {
    echo "aluno reprovado na nota</br>";
}

echo " <br>";

##      ESTRUTURA DE DECISÕES ||        ##

$key1 = true;
$key2 = false;
$key3 = false;
$key4 = false;
$key5 = false;


if ($key1 || $key2 || $key3 || $key4 || $key5) {
    echo "Uma das chaves abriu a porta</br>";
}   else {
    echo "Nenhuma das chaves abriu a porta</br>";
    }



    echo " <br>";
    echo "<h1>Teste de variaveis 'FOR'</h1>";

##      ESTRUTURA DE REPETIÇÃO "FOR"       ##

for ($repete = 0 ;$repete < 10; $repete++) {
    echo "$repete</br>";
}

echo "<br>";

##      ESTRUTURA DE REPETIÇÃO "FOR" com paravras   ##

for ($r= 0 ; $r <10 ; $r ++) {
    echo "ola mundo $r</br>";
}

echo "<br>";

##      ESTRUTURA DE REPETIÇÃO "FOR" com titulos diminuindo   ##

for ($r= 1 ; $r <= 6 ; $r ++) {
    echo "<h$r>Titulo de nivel $r</h$r></br>";
}

echo " <br>";
echo "<h1>Teste de variaveis 'FOR'com 'Arraya'</h1>";
##      ESTRUTURA DE REPETIÇÃO "FOR" com "Arraya"   ##

                    #  0  ,   1  ,   2   ,    3      ,    4      ,      5       ; #
$categorias = array ("FPS", "RPG", "Acão", "Aventura", "Simulção", "Plataforma");

for ($c=0;$c < 6; $c ++) {
    echo $categorias [$c]."<br>";
}
echo "loop executado com sucesso!<br><br>";

echo "<br>";
##      DESIGNANDO OS INDICES  ##

                        #            funcionario ,  0    ,   1   ,    2    ,    3   ,    4    ,    5    ,     6     ; #                       
$funcionarios = array ("funcionario"=>"Gabriel", "Felipe", "Caio", "Marcos", "Bruno", "Flavio", "Albino", "silvio");
    echo $funcionarios ["0"]."</br></br>"; 

echo "<br>";
##      ESTRUTURA DE "Arraya"  ##

                     #     0    ,   1   ,    2    ,    3   ,    4    ,    5    ,     6   ,    7     ; #                       
$funcionario = array ("Gabriel", "Felipe", "Caio", "Marcos", "Bruno", "Flavio", "Albino", "silvio");
    for ($f=0; $f < count($funcionario) ; $f++) {
    $x = $f+1;
    echo "Linha = $x $funcionario[$f] <br>"; 
}

echo "<br>";
echo "<h1>Teste de variaveis 'While'com 'Arraya'</h1>";
##      ESTRUTURA DE REPETIÇAO "While"  ##

$coisa = 0;

while ($coisa < 3) {
    echo "ola mundo $coisa <br>";
    $coisa ++;

}

echo "<br>";

##      ESTRUTURA DE REPETIÇAO "While" invertido  ##

$coisa2 = array ("Rato", "Barata", "canudo", "aipim", "bola");
$c1 = count($coisa2)-1;

while ($c1 >= 0) {
    echo "Nomes: $coisa2[$c1] <br>";
    $c1--;
}

echo "<br>";

##      ESTRUTURA DE REPETIÇAO "do{}While"   ##


$tentativa = 1;

do{
    echo "Tentei conversar $tentativa Vez <br>";
    $tentativa ++;
} while ($tentativa <4);

echo "<br>";
echo "<h1>Teste de variaveis 'foreach'</h1>";

##      ESTRUTURA DE REPETIÇAO "foreach ($ as $)"   ##

$categorias2 = array ("FPS", "RPG", "Acão", "Aventura", "Simulção", "Plataforma");

foreach ($categorias2 as $valores3) {
    echo "$valores3<br>";

}

echo "<br>";

##      ESTRUTURA DE REPETIÇAO "foreach ($ as $)" Com numeros de valores   ##


$categorias3 = array ("FPS", "RPG", "Acão", "Aventura", "Simulção", "Plataforma");

foreach ($categorias3 as $indice => $valores4) {
    echo "Posiçao: $indice - [$valores4]<br>";

}

echo "<br>";

##      Ver dentro de uma "Array"   ##

$categorias4 = array ("FPS", "RPG", "Acão", "Aventura", "Simulção", "Plataforma");

var_dump($categorias4); 

echo "<br>";
echo "<h1>Teste de variaveis 'FOR junto com IF'</h1>";

##      Teste de variaveis 'FOR junto com IF   ##
// Se eu quiser negar é só colocar "for (!($pp = 0; $pp < 10; $pp++)) {}"
for ($pp = 0; $pp < 10; $pp++) {
    if ($pp > 2 && $pp <8) {
        echo "$pp<br>";
    }
}
echo "<br>";
##      Teste de variaveis 'FOR junto com IF' Ao contrario   ##

for ($pp = 0; $pp < 10; $pp++) {
    if (!($pp > 2 && $pp <8)) {
        echo "$pp<br>";
    }
}
echo "<br>";
    ##      Teste de variaveis 'FOR junto com IF' Imprimir somente numeros pares   ##

 for ($pp = 0; $pp < 10; $pp++) {
    if ($pp % 2 == 0) {
        echo "$pp<br>";
    }
}
echo "<br>";

 ##      Teste de variaveis 'FOR junto com IF' Imprimir pares e impares com letras   ##

 for ($pp = 0; $pp < 10; $pp++) {
    if ($pp % 2 == 1) {
        echo "Impar $pp<br>";
    } else {
        echo "par $pp<br>";

    }
}
echo "<br>";
echo "<h1>Teste de variaveis 'FOR com links'</h1>";

##      Teste de variaveis 'FOR com links'   ##


$urls = array ("pagina1.php", "pagina2.php", "pagina3.php", "pagina4.php"); 
    for ($y = 0; $y < count($urls) ; $y++){
    $x = $y+1;
    echo "<a href=$urls[$y] title=$urls[$y] >Pagina $x</a><br>";
}

echo "<br>";
echo "<h1>Teste de variaveis 'FOR com Imagem'</h1>";
##      Teste de variaveis 'FOR com Imagem'   ##

$img = array ("01-user.svg", "02-backandfortharrow.svg", "03-note.svg", "04-favorite.svg", "05-pin.svg", "06-mouse.svg"); 
 for ($i = 0; $i < count($img); $i++){
    echo "<img src=img/$img[$i] width=100 height=auto><br>";

}


echo "<br>";
echo "<h1>Teste de variaveis 'array bidimensional com FOR' Nome indice</h1>";
##      Teste de variaveis 'array bidimensional com FOR'   ##

$b = array (
"codigo" => array (10,20,30),
"curso" =>array ("curso de php", "modelagem 3D", "Godot Engine"),
"duracao" =>array ("10 aulas","30 aulas", "50 aulas"),
);

echo $b["codigo"][1]."<br>";


echo "<br>";

##      Teste de variaveis 'array bidimensional com FOR'   ##

$a = array (
array (10,20,30,40),
array ("curso de php", "modelagem 3D", "Godot Engine","GD"),
array ("10 aulas","30 aulas", "50 aulas", "60 aulas"),
);

for ($c = 0;$c < 3; $c++){
    for ($l =0;$l < 4; $l++){
        echo $a[$c][$l]."<br>";
    }
    echo "<hr>";
}
echo "<br>";
echo "<h1>Teste de variaveis 'array bidimensional com while' </h1>";
##      Teste de variaveis 'array bidimensional com FOR'   ##

$c = 0;
while ($c <3){
    $l =0;
    while ($l < 4){
        echo $a[$c][$l]."<br>";
        $l++;
    }
    echo "<hr>";
    $c++;
}
echo "<br>";
echo "<h1>Teste de variaveis 'Function' </h1>";
##      Teste de variaveis 'Function'   ##

function mostrar_texto (){
echo "como criar um function<br>";

}

mostrar_texto();

echo "<br>";
##      Teste de variaveis 'Function com entradas'   ##

function mostrar ($texto){ //parametro
    echo "Bem vindo a aula $texto"; 
    
}
    
mostrar("2<br>"); //argumento

echo "<br>";
##      Teste de variaveis 'Function com entradas 2'   ##


function mostrar2 ($aula){ //parametro
    if ($aula == 10) {
        echo "Chegamos ao final do modulo V";
    }   else {
        echo "Bem vindo a aula $aula sobre php"; 
        } 
    
}
    
mostrar2("10"); //argumento
echo "<br>";

function tabuadas ($tab, $ini, $fim) {
    for ($ini;$ini <= $fim;$ini++){
        echo "$tab X $ini = " . $tab * $ini . "<br>";
    }

}

tabuadas(2,1,10);

/*
echo "<br>";
echo "<h1>Teste de funçao se conectando ao Mysql </h1>";
##      Teste de funçao se conectando ao Mysql   ##

con ("db1","Henrique Silva","Henrique@gmail.com",152153);



 function conn ($banco,$user,$email,$senha) {
     try{
        $pdo = new PDO("mysql:dbname=$banco;host=localhost","root","");
        echo "conectado ao servidor!";
    }   catch (Exception $e) {
            echo "Não deu muito certo". $e->getMessage();
        } 

       // INSERIR DADOS NO CAMPO  // 
       
       $pdo->  query("insert into tb_user(Nome, Email, Senha) VALUES
                    ('$user','$email','$senha')");  

        echo "Aula 7 Sobre function<br>";
       
         // FUNÇAO SELECT, ver o banco //

        $registro = $pdo->prepare("SELECT * FROM tb_user where id = :id");
        $registro->bindValue(":id",1);
        $registro->execute();

        $campos = $registro->fetch(PDO::FETCH_ASSOC);
        foreach($campos as $key => $value){
            echo "$key: $value <br> ";
        } 
        

           EXLUIR DADOS DO BANCO 
        $excluir = $pdo->prepare("DELETE FROM tb_user WHERE id = :id");
        $excluir-> bindValue(":id",4);
        $excluir-> execute(); 
        

           EXLUIR DIRETO OS DADOS DO BANCO  
        $excluir = $pdo->query("DELETE FROM tb_user WHERE   ID ='3'");
        

           UPDATE DO DADOS DO BANCO  

        $up = $pdo->prepare("UPDATE tb_user SET nome = :n WHERE id = :id");
        $up->bindValue("n","kathoro");
        $up->bindValue(":id",2);
        $up->execute();

         UPDATE DO DADOS DO BANCO DIRETO
        $up = $pdo->query("UPDATE tb_user SET nome ='Codorco' WHERE id= '2'");
        

    function somar ($num1, $num2) {
        return $num1 + $num2;
    }
    $saida = somar(10,20);
    echo "saida ". $saida;
} */
   
    



?>

