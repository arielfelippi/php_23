<?php

/* Encontrar os 3 primeiros numeros perfeitos.
    6 = 1 + 2 + 3
    28 = 1 + 2 + 4 + 7 + 14
    496 = 1 + 2 + 4 + 8 + 16 + 31 + 62 + 124 + 248
    ????????
*/

$perfeitosMax = 4;
$contPerfeitos = 0;
$numerosPerfeitos = "";

for ($numero = 1; $numero <= 30; $numero++) { // 6 somente o 6 perfeito

    $somaDivisores = 0;

    for ($divisor = 1; $divisor <= ($numero / 2); $divisor++) 
    {
        $resto = $numero % $divisor;

        if ($resto == 0) {
            $somaDivisores += $divisor;
        }
    }

    if ($somaDivisores == $numero) {
        $numerosPerfeitos .= $numero . ", ";
        $contPerfeitos++;
    }

    if ($contPerfeitos == $perfeitosMax) { // 3
        break;
    }
}

echo "Os numeros perfeitos de 1 - 500 sao: " . $numerosPerfeitos;

