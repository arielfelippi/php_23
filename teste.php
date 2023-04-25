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

$horaInicial = "16:00:00";
$horaFinal = "17:30:00";


$arrTempoInicial = explode(":", $horaInicial);

$horaIni = $arrTempoInicial[0]; // 16
$minIni = $arrTempoInicial[1]; // 00
$segIni = $arrTempoInicial[2]; // 00

$horaEmSegundos = ($horaIni * 3600); // efetuar calculo que transforma hora em segundos
$minutosEmSegundos = ($minIni * 60); // efetuar calculo que transforma minutos em segundos

$tempoIniEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segIni; // tudo na mesma medida.
// 57600 segundos




$arrTempoFinal = explode(":", $horaFinal);

$horaFin = $arrTempoFinal[0]; // 17
$minFin = $arrTempoFinal[1]; // 30
$segFin = $arrTempoFinal[2]; // 00



$horaEmSegundos = ($horaFin * 3600); // 61200   
$minutosEmSegundos = ($minFin * 60); // 1800

$tempoFinEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segFin;
// 63000


//  
$tempoDeJogo = $tempoFinEmSegundos - $tempoIniEmSegundos;
// 5400

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

