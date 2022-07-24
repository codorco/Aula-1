<?php
    
$salario = 1500;
$aumento = 6/100;
$novosalario = ($salario * $aumento) + $salario;

echo "salario inicial: $salario</br>";
echo "taxa para aumento: $aumento</br>";
echo "novo salario: $novosalario</br>"; 


#       TESTE DE VARIAVEL "IF"

if (1>0) {
    echo "verdadeiro </br>";
}   else {
    echo "falso </br>";
} # Resultado > verdadeiro

##       TESTE DE VARIAVEL "IF" 2      ##

$idade = 18;
IF ($idade > 17) {
    echo "maior de idade</br>";
}   else {
    echo "menor de idade</br>";
} # Resultado > Maior de idade

$valor = 1;
if ($valor == false ) {
    echo "verdadeiro</br>";
}   else {
    echo "falso</br>";
}

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

##     TESTE DE OPERADORES LOGICOS BOOLEANOS       ##

$nota = 5;
$presenca = 10;
$atividade = 15;

if ($nota >= 5 && $presenca >= 10 && $atividade >= 15) {
    echo "aluno aprovado</br>";
}   else { 
    echo   "aluno reprovado</br>";
}

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


##      ESTRUTURA DE REPETIÇÃO "FOR"       ##

for ($repete = 0 ;$repete < 10; $repete++) {
    echo "$repete</br>";
}

##      ESTRUTURA DE REPETIÇÃO "FOR" com paravras   ##

for ($r= 0 ; $r <10 ; $r ++) {
    echo "ola mundo $r</br>";
}

##      ESTRUTURA DE REPETIÇÃO "FOR" com titulos diminuindo   ##

for ($r= 1 ; $r <= 6 ; $r ++) {
    echo "<h$r>Titulo de nivel $r</h$r></br>";
}







?>

