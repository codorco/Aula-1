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

#       TESTE DE VARIAVEL "IF" 2

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

#       TESTE DE VARIAVEL "IF3"

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

?>

