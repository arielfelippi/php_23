<?php

class UsuarioModel extends BaseModel {

    private $nomeTabela = "User_Info";
    private $camposTabela;

    public function __construct() {
        $this->camposTabela = [
            'user_id',
            'user_status',
            'user_fullname',
            'user_mail',
            'user_name',
            'user_pass',
            'user_rank',
            'department_id',
            'log_first',
            'log_last'
        ];  
    }

    public function readAllUsuarios() {
        
        $usuarios = $this->readAll($this->nomeTabela, $this->camposTabela);

        return $usuarios;
    }

    public function createUsuario($dados)
    {
        $campos = ['nome', 'username'];
        $dados = ['isabel', 'isabel_infoserv'];

        $idUsuario = $this->create($this->nomeTabela, $this->camposTabela, $dados);

        return $idUsuario;
    }
}

$usuario = UsuarioModel();