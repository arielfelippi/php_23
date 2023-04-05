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





