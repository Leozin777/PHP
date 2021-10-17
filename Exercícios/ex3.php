<?php
/*
Iremos calcular o IMC e apresentar para o usuário se ele está abaixo, dentrou ou acima do nível recomendado.
Tabela:
IMC	                                   Resultado
Menos do que 18,5	                Abaixo do peso
Entre 18,5 e 24,9	                Peso normal
Entre 25 e 29,9	                    Sobrepeso
Entre 30 e 34,9	                    Obesidade grau 1
Entre 35 e 39,9	                    Obesidade grau 2
Mais do que 40	                    Obesidade grau 3
*/

$peso = 80;
$altura = 1.78;
$alt_quadrado = $altura ** 2;
$IMC = $peso / $alt_quadrado;

if($IMC < 18.5){
    echo "Seu IMC é de $IMC, você está abaixo do peso";
} else if($IMC >= 18.5 && $IMC <= 24.9){
    echo "Seu IMC é de $IMC, você está no peso normal";
} else if($IMC >= 25 && $IMC <= 29.9){
    echo "Seu IMC é de $IMC, você está acima do peso";
} else if($IMC >= 30 && $IMC <= 34.9){
    echo "Seu IMC é de $IMC, você está na Obesidade de primeiro grau";
} else if($IMC >= 35 && $IMC <= 39.9){
    echo "Seu IMC é de $IMC, você esta na Obesidade de segundo grau";
} else{
    echo "Seu IMC é de $IMC, você esta na Obesidade de terceiro grau";
}