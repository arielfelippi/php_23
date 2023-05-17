<?php

require_once '../conexao/bancoDados.php'; // carrega uma vez (once)

abstract class BaseModel {
    public $conexaoBancoBM;
    
    public function __construct($conexaoBancoParam = null) {
        $this->conexaoBancoBM = $conexaoBancoParam;
    }

    public function getConexao() {
        return $this->conexaoBancoBM;
    }

    // CRUD = Create, Read, Update, Delete.

     public function create($nomeTabela, $camposParam = [], $dadosParam = [])
     {
        // INSERT INTO USUARIOS (NOME, USER_NAME) VALUES ('isabel', 'isabel_infoserv');

        $campos = implode(", ", $camposParam); // $campos[id, nome, senha] => id, nome, senha;
        $dados = implode(", ", $dadosParam); // $dados[10, 'gustavo', '456789'] => 10, 'gustavo', '456789';

        $sql = "INSERT INTO '{$nomeTabela}' ('{$campos}') VAL   UES ({$dados}});";

        $id = $this->conexaoBancoBM->query($sql)->insert_id;

        return $id;
     }

     public function read($nomeTabela, $campo, $valor) // editar
     {
        // SELECT * FROM USUARIOS WHERE ID = 10;
        // SELECT * FROM USUARIOS WHERE name = 'eduardo';
        // SELECT * FROM DEPARTAMENTO WHERE name = 'vendas';
        $sql = "SELECT * FROM '{$nomeTabela}' WHERE '{$campo}' = {$valor};";

        $usuarios = $this->conexaoBancoBM->query($sql);

        return $usuarios;
     }

    public function readAll($nomeTabela, $camposParam = [])
     {
        $campos = implode(", ", $camposParam); // $campos[id, nome, senha] => id, nome, senha;

        $sql = "SELECT '{$campos}' FROM '{$nomeTabela}';";

        $usuarios = $this->conexaoBancoBM->query($sql);

        return $usuarios;
     }

     public function delete($nomeTabela, $campo, $valor) {
        /*
            DELETE FROM User_Info
            WHERE user_id = 10;

            DELETE FROM User_Info
            WHERE user_name = 'eduardo';

            DELETE FROM Perfil_Info
            WHERE perfil_id = 40;

            DELETE FROM Perfil_Info
            WHERE perfil_name = 'expedicao';

        */

        $sql = "DELETE FROM '{$nomeTabela}' WHERE '{$campo}' = {$valor};";
     }

     public function update($nomeTabela, $camposParam = [], $dadosParam = [], $campoWhere, $valorWhere) {
        /*
            UPDATE User_Info
            SET user_status=1, user_fullname='', user_mail='', user_name='', user_pass='', user_rank=NULL, department_id=NULL, log_first=NULL, log_last=NULL
            WHERE user_id=10;
        */

        $qtdeCampos = count($camposParam);
        $qtdeDados = count($dadosParam);

        if ($qtdeCampos != $qtdeDados) {
            throw new Exception("O numero de colunas esta diferente do numero de valores(dados)", 500);
        }

        
        $sql = "UPDATE '{$nomeTabela}'";

        
        $sql .= "WHERE '{$campoWhere}' = {$valorWhere};";
     }

}
