
<?php

class PessoaModel extends BaseModel {

    // Crud
    public function createPessoa($dados)
    {
        $campos = ['nome', 'cpf'];
        $dados = ['joao do caminhao', '12345678910'];

        $idPessoa = $this->Create("pessoa", $campos, $dados);

        return $idPessoa;
    }
}
