<?php

/*
// tudo mesma coisa, soma + 1
$numero = $numero + 1;
$numero += 1;
$numero++;

// laço de repetição
// while
// do ... while

$numero = 10; // par

// do
// {
//     echo "O Valor de I = " . $numero;
//     $numero++; 
// } while ($numero <= 30);

// $numero =10;


// while ($numero <= 30)
// {
//     echo "O Valor de I = " . $numero; // 30
//     $numero++;
// }


$pares = "";
$impares = "";

// $pares = [];
// $impares = [];

for ($numero =10; $numero <= 30; $numero++)
{
    $resto = $numero % 2; // resto da divisao

    if ($resto == 0) {
        if ($pares != "") {
            $pares .= ", {$numero}";
        } else {
            $pares = $numero;
        }
    } else {
        if ($impares != "") {
            $impares .= ", {$numero}";
        } else {
            $impares = $numero;
        }
    }
}

echo "Os numeros pares de 10 - 30 são: {$pares}!<br>";
echo "Os numeros impares de 11 - 29 são: {$impares}!<br>";

*/


$primos = "";

for ($numero = 2; $numero <= 10; $numero++)
{
    $cont = 0;
    $numeroVerificar = $numero; // 4

    for ($divisor = 2; $divisor <= $numeroVerificar; $divisor++)
    { 
        $multiplo = $numeroVerificar % 2; // elimino os numeros pares
        $resto = $numeroVerificar % $divisor;

        if ($resto == 0 && $multiplo != 0) {
            $cont++;
        }
    }

    if ($cont == 1) {
        $primos .= "{$numero} ";
    }
    
}


echo "Os 3 primeiros numeros primos no intervalo de 1 - 10 são:<br> <b>{$primos}</b> "; // 1, 3, 5, 7


