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
// Transformar tudo em uma unica medida. Sugestao transformem em Segundos.

// 1m = 60s 
// 1h = 60m
// 1h = 3600s

$horaInicial = "12:20:30";
$arrTempoInicial = explode(":", $horaInicial);

$horaIni = $arrTempoInicial[0]; // 12
$minIni = $arrTempoInicial[1]; // 20
$segIni = $arrTempoInicial[2]; // 30

$horaEmSegundos = ($horaIni); // efetuar calculo que transforma hora em segundos
$minutosEmSegundos = ($minIni); // efetuar calculo que transforma minutos em segundos

$tempoIniEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segIni; // tudo na mesma medida.


$horaFinal = "13:50:32";
$arrTempoFinal = explode(":", $horaFinal);

$tempoDeJogo = Datetime($horaFinal) - Datetime($horaInicial); // 156456461645415

echo $tempoDeJogo; // "01:30:02"





/**
* 2-) Calcular a duracao de um jogo de futebol (Utilizar a logica do exercicio 1), 
* tendo em vista que um jogo pode comecar em um dia e terminar em outro. 
*/ 

