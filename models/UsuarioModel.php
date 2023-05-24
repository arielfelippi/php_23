<?php

require "./BaseModel.php";

class UsuarioModel extends BaseModel {

    private $nomeTabela = "User_Info";
    private $camposTabela;

    public function readAllUsuarios() {
        return $this->readAll($this->nomeTabela, $this->camposTabela);
    }

    public function createUsuario($campos, $dados)
    {
        $idUsuario = $this->create($this->nomeTabela, $campos, $dados);

        return $idUsuario;
    }

    public function deleteUsuarios($campo, $valor)
    {
        $excluir = $this->delete($this->nomeTabela, $campo, $valor);

        return $excluir;
    }

}

$usuario =  new UsuarioModel();
// echo $usuario->deleteUsuarios("id", 10);

// Mock
$campos = [
    'user_status',
	'user_fullname',
	'user_mail',
	'user_name',
	'user_pass',
];

$dados = [
    1,
    'felipe',
    'felipe@infoserv.com',
    'felipe.infoserv',
    'qwe123!',
];

// echo $usuario->createUsuario($campos, $dados);
// echo $usuario->deleteUsuarios('user_id', '3');
