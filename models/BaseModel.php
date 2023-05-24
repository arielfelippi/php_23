<?php

require_once '../conexao/bancoDados.php'; // carrega uma vez (once)

class BaseModel {
    public $conexaoBancoBM;
    
    public function __construct() {
        global $conexaoBanco;
        $this->conexaoBancoBM = $conexaoBanco;
    }

    public function getConexao() {
        return $this->conexaoBancoBM;
    }

    // CRUD = Create, Read, Update, Delete.

     public function create($nomeTabela, $camposParam = [], $dadosParam = [])
     {
        $qtdeCampos = count($camposParam);
        $qtdeDados = count($dadosParam);

        if ($qtdeCampos != $qtdeDados) {
            throw new Exception("O numero de colunas esta diferente do numero de valores(dados)", 500);
        }

        // INSERT INTO USUARIOS (NOME, USER_NAME) VALUES ('isabel', 'isabel_infoserv');

        $campos = implode(", ", $camposParam); // $campos[id, nome, senha] => id, nome, senha;
        $dados = implode("', '", $dadosParam); // $dados[10, 'gustavo', '456789'] => 10, 'gustavo', '456789';

        $sql = "INSERT INTO {$nomeTabela} ({$campos}) VALUES ('{$dados}');";

        try {
            $retorno = $this->conexaoBancoBM->query($sql)->insert_id;
        } catch (Exception $error ) {
            $msg = "ERRO ao INSERIR codigo: {$error->getCode()} <br> mensagem: {$error->getMessage()}";
            echo $msg;
            $retorno = null;
        }

        echo "retorno: " . $retorno;
        return $retorno;
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

        $sql = "DELETE FROM {$nomeTabela} WHERE {$campo} = '{$valor}';";

        try {
            $retorno = $this->conexaoBancoBM->query($sql); // null | 0 | undefined.
        } catch (Exception $error ) {
            $msg = "ERRO ao DELETAR codigo: {$error->getCode()} <br> mensagem: {$error->getMessage()}";
            echo $msg;
            $retorno = null;
        }

        return $retorno;
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


        $where = '';
        // $operador = 'AND';

        // $colunas = [
        //     'id',
        //     'name',
        //     'email',
        //     'status',
        // ];

        // for ($i = 0; $i < count($colunas); $i++) {
        //     $valor = "'{$valores[$i]}'";
        //     $where .= "{$colunas[$i]} = {$valor} {$operador} "; // aviao = 'boeing' AND
        // }

        foreach ($colunas as $idx => $coluna) {

            $valor = "'{$valores[$idx]}'";
            $where .= "{$coluna} = {$valor} {$operador} "; // aviao = 'boeing' AND
        }

        $where = trim($where);
        $limite = strlen($where) - 3;
        $where = trim(substr($where, 0, $limite));



        try {
            $retorno = $this->conexaoBancoBM->query($sql); // null | 0 | undefined.
        } catch (Exception $error ) {
            $msg = "ERRO ao DELETAR codigo: {$error->getCode()} <br> mensagem: {$error->getMessage()}";
            echo $msg;
            $retorno = null;
        }

        return $retorno;
     }

}

return new BaseModel($conexaoBanco);