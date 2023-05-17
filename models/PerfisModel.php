<?php

class PerfisModel extends BaseModel {

    private $nomeTabela = "Perfil_Info";
    private $camposTabela;

    public function __construct() {
        $this->camposTabela = [
            `id`,
            `user_id`,
            `product_id`,
            `department_id`,
            `alt_who`,
            `alt_when`,
        ];  
    }

    public function readAllPerfis() {
        
        $Perfis = $this->readAll($this->nomeTabela, $this->camposTabela);

        return $Perfis;
    }

    public function createPerfil($dados)
    {
        $campos = ['nome', 'username'];
        $dados = ['isabel', 'isabel_infoserv'];

        $idPerfil = $this->create($this->nomeTabela, $this->camposTabela, $dados);

        return $idPerfil;
    }
}
