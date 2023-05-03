<?php

// // Analisa um numero qualquer e vcerifica se é par ou impar.

// $numero = 4; // um numero qualquer...

// // operador MOD (%) pega o resto da divisao.
// $resto = $numero % 2; // resto da divisao

// if ($resto == 0) {
//     echo "O {$numero} é par!";
// } else {
//     echo "O {$numero} é impar!";
// }



// // Analisar range/intervalo de valores e contar os pares e os impares desse intervalo.
// // numeros pares
// // numeros impares
// // range||intervalo a verificar 10 - 30
// // DICA: laço de repetição, utilizar a mesma logica e formula anterior.


// for ($numero =10; $numero <= 30; $numero++)
// {
//     $resto = $numero % 2; // resto da divisao

//     if ($resto == 0) {
//         echo "O {$numero} é par!<br>";
//     } else {
//         echo "O {$numero} é impar!<br>";
//     }
// }


// // Ageupar os valores conforme abaixo
// // numeros pares 10, 12, 14 ... 30
// // numeros impares 11, 13, 15 ...29

// $pares = "";
// $impares = "";

// // $pares = [];
// // $impares = [];

// for ($numero =10; $numero <= 30; $numero++)
// {
//     $resto = $numero % 2; // resto da divisao

//     if ($resto == 0) {
//         if ($pares != "") {
//             $pares .= ", {$numero}";
//         } else {
//             $pares = $numero;
//         }
//     } else {
//         if ($impares != "") {
//             $impares .= ", {$numero}";
//         } else {
//             $impares = $numero;
//         }
//     }
// }

// echo "Os numeros pares de 10 - 30 são: {$pares}!<br>";
// echo "Os numeros impares de 11 - 29 são: {$impares}!<br>";



// // 1) calcular os 3 primeiros numeros primos

// // 2) criar a logica do jogo: pedra, papel , tesoura.

// // ATORES
//     // pedra
//     // papel
//     // tesoura

// // Condicoes do jogo, quem ganha de quem
// // mostrar quem ganhou

// // array|vetor [] associativo. 

// /*
//     $condicoes    = [1, 2, 3]; // length|size 3.
//     $condicoes    = ["papel", "tesoura", 'pedra']; // length|size 3.
//     $indice ou $i =   0,        1,         2


//     $condicoes = [
//         "papel" => [
//             "tesoura" => "perde",
//             "pedra" => "ganha",
//             "papel" => "empate",
//         ],
//         "pedra" => [
//             "tesoura" => "ganha",
//             "pedra" => "empate",
//             "papel" => "perde",
//         ],
//         "tesoura" => [
//             "tesoura" => "empate",
//             "pedra" => "perde",
//             "papel" => "ganha",
//         ],
//     ];

//     $condicoes["papel"]["tesoura"]; // perde
    
//     $daniel = "pedra";    // 1
//     $eduardo = "tesoura"; // 2

//     $condicoes[$daniel][$eduardo]; // ganha

// */



// // 1) calcular os 3 primeiros numeros primos



// $primos = "";

// for ($numero = 1; $numero <= 10; $numero++)
// {
//     $cont = 0;

//     for ($numeroVerificar = $numero; $cont <= $numeroVerificar; $cont++)
//     { 
//         $resto = $numero % 2; // resto da divisao (divisao exata)

//         if ($resto == 0) {
//             $cont++;
//         }
//     }

//     if ($cont <= 2) {
//         $primos .= "{$numero}";
//     }
    
// }


// echo "Os 3 primeiros numeros primos (20 - 30) são: {$primos}!<br>";

/*
- tenho que ir de 20 - 30 - OK
- tenho que encontrar os 3 primeiros primos (limitador)
- tenho que saber quando um numero e primo
- 
- como que faco de 1 a 10 (laco de repeticao) for|while|do while
- manual 1, 2, 3, 4, 5...  $cont = 1 + $cont; ($i++)
- limitador, em algum momento parar a execucao if ($contPrimos == 3) { break; return; }
- 
*/

// Intervalo para analisar de 20 até 30. Primos: 23, 29.

$contPrimos = 0;
$primosEncontrados = "";


for ($numero = 1; $numero <= 30; $numero++) { 
    $contDivisores = 0; 

    for ($primo = 1 ; $primo <= $numero; $primo++) {  
        $resto = ($numero % $primo);

        if ($resto == 0) {
            $contDivisores ++; 
        }
    }

    if ($contDivisores == 2) {
        $primosEncontrados .= $numero . ", "; 
        $contPrimos++;
    }

    if ($contPrimos == 3) {
        break; 
    }
}

echo "Os numeros primos encontrados sao: " . $primosEncontrados;


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

    $metadeDoNumeroAvaliado = $numero / 2; // 28 /2 == 14

    for ($divisor = 1; $divisor <= ($metadeDoNumeroAvaliado); $divisor++) 
    {
        $resto = $numero % $divisor; //$numero == 28

        if ($resto == 0) {
            $somaDivisores += $divisor; // 1 + 2 + 4 + 7 + 14
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


/*
 1º 45
 2º 45
 Total 90 minutos
*/


/**
* 1-) Calcular a duracao de um jogo de futebol, através de duas variaveis,
* sendo elas: $horaInicial e $horaFinal.
*/ 


$horaInicial = "23:20:00";
$horaFinal = "00:50:00";
/**
* 2-) Calcular a duracao de um jogo de futebol (Utilizar a logica do exercicio 1), 
* tendo em vista que um jogo pode comecar em um dia e terminar em outro. 
*/ 

// H:m:s
// Transformar tudo em uma unica medida.
// Sugestao transformem em Segundos.

// 1m = 60s 
// 1h = 60m
// 1h = 3600s


const SEGUNDOS_DIA = 86400;


// $horaInicial = "16:00:00";
// $horaFinal = "17:30:00";


$horaInicial = "23:20:00";
$horaFinal = "00:55:00";


$hora = 10;
$hora = 20;

echo $hora; // 20


$hora; // nulo|indefinido - null|undefined
$minutos;
$segundos;

// 00:00:00 - H:m:s 
function quebrarHoraEmPartes($tempoEmHora) {
    $arrTempo = explode(":", $tempoEmHora);

    $hora = $arrTempo[0];
    $minutos = $arrTempo[1];
    $segundos = $arrTempo[2];
}


quebrarHoraEmPartes($horaInicial); // 13:30:00
$dtFinal = quebrarHoraEmPartes($horaFinal); // 14:50:10

echo $hora; // 14




$horaEmSegundos = ($horaIni * 3600); // efetuar calculo que transforma hora em segundos
$minutosEmSegundos = ($minIni * 60); // efetuar calculo que transforma minutos em segundos
$tempoIniEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segIni; // tudo na mesma medida.



$arrTempoFinal = explode(":", $horaFinal);

$horaFin = $arrTempoFinal[0]; // 00
$minFin = $arrTempoFinal[1]; // 50
$segFin = $arrTempoFinal[2]; // 00



$horaEmSegundos = ($horaFin * 3600); // 00
$minutosEmSegundos = ($minFin * 60); // 3000

$tempoFinEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segFin;
// 3000


// aqui a gente assume que comecou e terminou no mesmo dia.
$tempoDeJogo = $tempoFinEmSegundos - $tempoIniEmSegundos;



$tempoMaximo = $tempoFinEmSegundos + $tempoIniEmSegundos; // 87000
$terminouNoOutroDia = $tempoMaximo > SEGUNDOS_DIA; // 86400 = segundos no dia


if ($terminouNoOutroDia) {
    $diff = $tempoMaximo - SEGUNDOS_DIA; // 600 diff a mais no dia, pós meia noite.
    $posMeiaNoite = $tempoFinEmSegundos - $diff; // 2400
    $tempoDeJogo = $posMeiaNoite + $tempoFinEmSegundos; // 2400 + 3000 = 5400. 5400/60 = 90.
}



$tempoDeJogoMin = $tempoDeJogo /60; // 90 MINUTOS
echo "O tempo do jogo é de: {$tempoDeJogoMin} minutos.<br>";

// "O jogo teve duracao de: 01:30:00" e em minutos foram 90 minutos.
// echo $tempoDeJogo; // "O jogo teve duracao de: 01:30:30" e em minutos foram 90 e 30 segundos minutos.


/* EXEMPLO UTILIZACAO DE FUNCAO
$tempoEmSegundos = 0;

function somarOTempoEmSegundos($horaEmSegundos, $minutosEmSegundos, $segundos) {
    $tempoEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segundos;
}

 
 somarOTempoEmSegundos($horaEmSegundos, $minutosEmSegundos, 100);
 $tempoIniEmSegundos = $tempoEmSegundos;


 somarOTempoEmSegundos($horaEmSegundos, $minutosEmSegundos, 580);
 $tempoFinEmSegundos = $tempoEmSegundos;

 */
