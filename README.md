# php_23
## Primeiro commit 31/01/2023.
### Testando as modificacoes.
### Testando as modificacoes.3333333
    1 - Verificar se estamos no ubuntu
    2 - File -> open folder
    2.1 - apaga o conteudo
    2.2 - informa o caminho /var/www/html
    2.3 - abre essa pasta (com enter ou clickando com mouse em html)
    3 - terminal, novo terminal
    4 - no terminal executa o comando: git clone LINK_DO _REPOSITORIO (github)
    5 - informa o caminho /var/www/html/php_23
    5.1 - abre essa pasta (com enter ou clickando com mouse em html)
    6 - configurar o git (git email e o git name da pagina 4 da apostila)
    7 - verificar se o apache esta rodando/executando.
    7.1 - acessar o navegador com localhost ou 127.0.0.1 (deve aparecer a configuracao inicial do apache).
    7.2 - sudo service apahce2 status (apache is running).
    7.3 - sudo service apahce2 start.
    7.4 - executar os passos 7.1 e 7.2.
## Para salvar no GitHub
    1 - git add . (onde . é todos os arquivos ou especificar por nome ex.: git add index.php)
    2 - git commit -m "DESCREVER O QUE FOI FEITO"
    3 - git push
    4 - verificar no github se ficou salvo.

## Para o merge
    1 - git checkout NOME_BRANCH_DESEJA_IR
    2 - git pull (obter as atualizacoes)
    3 - git merge NOME_BRANCH_DA_TRAZER_AS_MUDANCAS

    Ex.:
        Estamos na branch *develop* e queremos levar as mudancas para a master/main
            1 - git checkout *master*
            2 - git pull (master)
            3 - git merge *develop*
            4 - resolve conflitos se houver
            4.1 - Com conflito: git add . e git commit -m "..."
            4.2 - Sem conflito:  so executar o push
            5 - git push

        Estamos na branch *master/main* e queremos levar as mudancas para a develop
            1 - git checkout *develop*
            2 - git pull (develop)
            3 - git merge *master*
            4 - resolve conflitos se houver
            4.1 - Com conflito: git add . e git commit -m "..."
            4.2 - Sem conflito:  so executar o push
            5 - git push


CRIAR AS TABELAS


    TABELA rh
    id PK AUTOINCREMENT NOT NULL
        id_pessoa (fk) = null
        salario
    log_first datetime DEFAULT CURRENT_TIMESTAMP(),
    log_last datetime DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP(),


    TABELA pesssoas|people 
    id PK AUTOINCREMENT NOT NULL (fk = id_pessoas nas outras tabelas)
    user_id (fk) = null
    endereco (fk) = null
    cpf = null
    cnpj = null
    telefone = null
    nacionalidade * (NOT NULL)
    estado_civil = null
    cnae = null
    data_abertura_empresa = null
    genero = null
    etnia = null
    inscricao_estadual = null


    TABELA enderecos
    id_estado (fk) = null
    id_cidade (fk) = null
    rua
    bairro
    numero
    complemento
    cep
    referencia


    TABELA estados
    nome
    sigla


    TABELA cidade 
    nome
    populacao
    densidade_demografica
    renda_per_capita
    ultimo_senso



