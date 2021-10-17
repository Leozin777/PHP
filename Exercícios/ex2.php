<?php

/*
Exibir a tabuada de um número que estará armazenado em uma variável, e queremos exibir o resultado da mulitiplicação de 
1 até 9.
*/

$num_tab = 3;

for($i = 1; $i <= 9; $i++){
    $mult = $num_tab * $i;
    
    echo "$num_tab x $i = $mult" . PHP_EOL;
}