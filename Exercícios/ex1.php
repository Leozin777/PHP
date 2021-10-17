<?php

/*
O primeiro desafio será executar um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.
*/


for($num = 0; $num <= 100; $num++){
    $res = $num % 2;

    if($res == 0){
        continue;
    }

    echo "$num" . PHP_EOL;
}
