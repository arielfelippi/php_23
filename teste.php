<?php

/*
 1º 45
 2º 45
 Total 90 minutos
*/


/**
* 1-) Calcular a duracao de um jogo de futebol, através de duas variaveis,
* sendo elas: $horaInicial e $horaFinal.
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




$horaInicial = "23:20:00";
$horaFinal = "00:50:30";
/**
* 2-) Calcular a duracao de um jogo de futebol (Utilizar a logica do exercicio 1), 
* tendo em vista que um jogo pode comecar em um dia e terminar em outro. 
*/ 

