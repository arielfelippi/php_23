<?php

$ingressoMin  = 100;
$ingressoMax  = 580;
$valorIngresso = 0;

$precoShow = 5;
$impostos = 877875;

function ligarLuzes($precoShow, $impostos) {
    $valorIngresso = $valor;
    $valorIngresso = $precoShow + $impostos;
}

echo ligarLuzes(); // 0
echo ligarLuzes($valor); // 80
// mesmo que $ingressoMin  = 100; (fixo/chumbado)
ligarLuzes(100);
// ligarLuzes($ingressoMin); // mesmo que $ingressoMin  = 100; (automatico)


echo $valorIngresso; // 80


class escola {
    
    // atributos/propriedades
    public $valorIngresso; // null|undefined

    // funcoes/metodos
    public function __construct() {
        $this->valorIngresso = $abacaxi;
        $luzes = $this->ligarLuzes(); // 852
    }

    public function fazerCafe() {
        $luzes = $this->ligarLuzes(); // 852
    }

    private function ligarLuzes($valor = 852) {
        // code here
    }
}

$escolaInfoserv = new escola(800);
$escolaInfoserv->fazerCafe(); // nao executa se for privada, erro




class sala {
    // atributos/propriedades
    // funcoes/metodos
}
