<?php

// Analisa um numero qualquer e vcerifica se é par ou impar.

$numero = 4; // um numero qualquer...

// operador MOD (%) pega o resto da divisao.
$resto = $numero % 2; // resto da divisao

if ($resto == 0) {
    echo "O {$numero} é par!";
} else {
    echo "O {$numero} é impar!";
}



// Analisar range/intervalo de valores e contar os pares e os impares desse intervalo.
// numeros pares
// numeros impares
// range||intervalo a verificar 10 - 30
// DICA: laço de repetição, utilizar a mesma logica e formula anterior.


for ($numero =10; $numero <= 30; $numero++)
{
    $resto = $numero % 2; // resto da divisao

    if ($resto == 0) {
        echo "O {$numero} é par!<br>";
    } else {
        echo "O {$numero} é impar!<br>";
    }
}


// Ageupar os valores conforme abaixo
// numeros pares 10, 12, 14 ... 30
// numeros impares 11, 13, 15 ...29

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



// 1) calcular os 3 primeiros numeros primos

// 2) criar a logica do jogo: pedra, papel , tesoura.

// ATORES
    // pedra
    // papel
    // tesoura

// Condicoes do jogo, quem ganha de quem
// mostrar quem ganhou

// array|vetor [] associativo. 

/*
    $condicoes    = [1, 2, 3]; // length|size 3.
    $condicoes    = ["papel", "tesoura", 'pedra']; // length|size 3.
    $indice ou $i =   0,        1,         2


    $condicoes = [
        "papel" => [
            "tesoura" => "perde",
            "pedra" => "ganha",
            "papel" => "empate",
        ],
        "pedra" => [
            "tesoura" => "ganha",
            "pedra" => "empate",
            "papel" => "perde",
        ],
        "tesoura" => [
            "tesoura" => "empate",
            "pedra" => "perde",
            "papel" => "ganha",
        ],
    ];

    $condicoes["papel"]["tesoura"]; // perde
    
    $daniel = "pedra";    // 1
    $eduardo = "tesoura"; // 2

    $condicoes[$daniel][$eduardo]; // ganha





*/





// 1) calcular os 3 primeiros numeros primos



$primos = "";

for ($numero = 1; $numero <= 10; $numero++)
{
    $cont = 0;

    for ($numeroVerificar = $numero; $cont <= $numeroVerificar; $cont++)
    { 
        $resto = $numero % 2; // resto da divisao (divisao exata)

        if ($resto == 0) {
            $cont++;
        }
    }

    if ($cont <= 2) {
        $primos .= "{$numero}";
    }
    
}


echo "Os 3 primeiros numeros primos (1 - 10) são: {$primos}!<br>";

/*
- tenho que ir de 20 - 30 - OK
- tenho que encontrar os 3 primeiros primos (limitador)
- tenho que saber quando um numero e primo
- 
- como que faco de 1 a 10 (laco de repeticao)
- manual 1, 2, 3, 4, 5...  $cont = 1 + $cont;
- limitador, em algum momento parar a execucao if ($contPrimos == 3) { break; return; }
- 
*/

// Intervalo para analisar de 20 até 30. Primos: 23, 29.

$contPrimos = 0;
$primosEncontrados = "";


for ($numero = 20; $numero <= 30; $numero++) { // 20, 21 ... 30
    echo $numero . "<br>"; // 20, 21, 22, 2, 24, 25 ... 30

    $contDivisores = 0; // Conta quantos divisores existem no intervalo de 1 até o numero analisado, ex.: 25 tem 3 divisores, o 1, 5 e o 25.

    for ($primo = 1 ; $primo <= $numero; $primo++) {  
        $resto = ($numero % $primo);// se existir + de 2 divisoes exata no meio do caminho nao é primo.

        if ($resto == 0) {
            $contDivisores ++; // 1 + 1
        }
    }

    if ($contDivisores == 2) {
        $primosEncontrados .= $numero . ", "; // 2, 3, 5, 7... 
        $contPrimos++;
    }

    if ($contPrimos == 3) {
        break; // para o laco de repeticao quando econtrados os 3 primeiros primos.
    }
}

echo "Os numeros primos encontrados sao: " . $primosEncontrados;

